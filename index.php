<?php include("header.php");

//Variable to store error message;
$error = "";

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost', 'root', '', 'project4');

    if ($connection) {

        $query = mysqli_query($connection, "SELECT * FROM users WHERE email='$email'");

        $rows = mysqli_num_rows($query);
        $results = mysqli_fetch_array($query, MYSQLI_ASSOC);

        if ($rows == 1) {
            if (password_verify($password, $results['password'])) {

                $_SESSION["email"] = $email;

                if ($results['admin'] == 'yes') {
                    header("Location: admin_page.php");
                } else {
                    header("Location: home.php");
                }
            } else {
                $error = "Incorrect email or password.";
                echo "<script type='text/javascript'>alert('$error');</script>";
            }
        } else {
            $error = "Incorrect email or password.";
            echo "<script type='text/javascript'>alert('$error');</script>";
        }
    } else {

        echo "We are not connected";
        die("Database connection failed");
    }
}
?>


<div id="login-form">
    <h2>Login to $ideJob$</h2>
    <form action="index.php" method="post">
        <input type="text" name="email" placeholder="Enter your email" required><br>
        <input type="password" name="password" placeholder="Enter your password" required><br>
        <input name="login" type="submit" value="Login">
    </form>
    <p>Don't have an account? <a class="linkify" href="register.php">Click Here to Register</a></p>
</div>

<?php include("footer.php"); ?>