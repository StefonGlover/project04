<?php include "database.php"; ?>
<?php


function createUser()
{

    if (isset($_POST['register'])) {
        global $connection;

        $email = $_POST['email'];
        $password = $_POST['password'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];

        $email = mysqli_real_escape_string($connection, $email);
        $password = mysqli_real_escape_string($connection, $password);
        $fname = mysqli_real_escape_string($connection, $fname);
        $lname = mysqli_real_escape_string($connection, $lname);



        $hashFormat = "$2y$10$";
        $salt = "webdeveloper22";
        $hashF_and_salt = $hashFormat . $salt;
        $password = crypt($password, $hashF_and_salt);

        $query = "INSERT INTO users(email, password, fname, lname) ";
        $query .= "VALUES ('$email', '$password', '$fname', '$lname')";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            die('Query FAILED' . mysqli_error($connection));
        } else {

            echo "User created!";
        }
    }
}


function logoutUser()
{
    session_start();
    session_unset();
    session_destroy();
}
