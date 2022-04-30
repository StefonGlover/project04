<?php include("header.php");

//Variable to store error message;
$error = "";

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost', 'root', '', 'project4');

    if ($connection) {

        $query = mysqli_query($connection, "SELECT * FROM users WHERE email='$email' AND  password='$password'");

        $rows = mysqli_num_rows($query);

        if ($rows == 1) {
            echo "User found!";

            $_SESSION["email"] = $email;

            header("Location: home.php");
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