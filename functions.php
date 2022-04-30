<?php include "database.php"; ?>
<?php


function createRows()
{

    if (isset($_POST['register'])) {
        global $connection;

        $email = $_POST['email'];
        $password = $_POST['password'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];

        $username = mysqli_real_escape_string($connection, $email);
        $password = mysqli_real_escape_string($connection, $password);
        $first_name = mysqli_real_escape_string($connection, $first_name);
        $last_name = mysqli_real_escape_string($connection, $last_name);



        $hashFormat = "$2y$10$";
        $salt = "webdeveloper22";
        $hashF_and_salt = $hashFormat . $salt;
        $password = crypt($password, $hashF_and_salt);

        $query = "INSERT INTO users(email,password, first_name, last_name) ";
        $query .= "VALUES ('$username', '$password', '$first_name', '$last_name')";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            die('Query FAILED' . mysqli_error($connection));
        } else {

            echo "User created!";
        }
    }
}
