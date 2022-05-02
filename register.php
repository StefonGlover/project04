<?php include("header.php");
include "functions.php";
include "database.php";

createUser();


?>

<div id="login-form">
    <h2>Create an account</h2>
    <form action="register.php" method="post">
        <input type="text" name="fname" placeholder="Firstname" required><br>
        <input type="text" name="lname" placeholder="Lastname" required><br>
        <input type="text" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="password" name="confirmPassword" placeholder="Confirm Password" required><br>
        <label for="user_type">Choose your type:</label>
        <select name="user_type" required>
            <option value="buyer">Buyer</option>
            <option value="seller">Seller</option>
        </select><br>
        <input name="register" type="submit" value="Register"><br>
    </form>
    <p>Already have an account? <a class="linkify" href="index.php">Login</a></p>
</div>



<?php include("footer.php"); ?>