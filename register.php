<?php include("header.php");



?>

<div id="login-form">
    <h2>Create an account</h2>
    <form action="register.php" method="post">
        <input type="text" name="fname" placeholder="Firstname" required><br>
        <input type="text" name="lname" placeholder="Lastname" required><br>
        <input type="text" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="confirm_password" name="confirmPassword" placeholder="Confirm Password" required><br>
        <input name="register" type="submit" value="Register">
    </form>
    <p>Already have an account? <a class="linkify" href="index.php">Login</a></p>
</div>



<?php include("footer.php"); ?>