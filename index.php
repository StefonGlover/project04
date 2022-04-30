<?php include("header.php");


if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost', 'root', '', 'project4');

    if ($connection) {

        echo "We are connected";
    } else {

        echo "We are not connected";
        die("Database connection failed");
    }
}


?>


<div id="login-form">
    <h2>Login to $ideJob$</h2>
    <form action="login_submit.php" method="post">
        <input type="text" name="email" placeholder="Enter your email"><br>
        <input type="password" name="password" placeholder="Enter your password"><br>
        <input name="Submit" type="submit" value="Login">
    </form>
    <p>Don't have an account? <a class="linkify" href="register.php">Click Here to Register.</a></p>
</div>

<?php include("footer.php"); ?>