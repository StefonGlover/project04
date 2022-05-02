<?php include "database.php"; ?>
<?php


function createUser()
{

    if (isset($_POST['register'])) {
        global $connection;

        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $user_type =  $_POST['user_type'];

        $email = mysqli_real_escape_string($connection, $email);
        $password = mysqli_real_escape_string($connection, $password);
        $fname = mysqli_real_escape_string($connection, $fname);
        $lname = mysqli_real_escape_string($connection, $lname);
        $user_type = mysqli_real_escape_string($connection,  $user_type);


        if ($password == $confirmPassword) {

            $password = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO users(email, password, fname, lname, user_type) ";
            $query .= "VALUES ('$email', '$password', '$fname', '$lname', '$user_type')";

            $result = mysqli_query($connection, $query);
            if (!$result) {
                die('Query FAILED' . mysqli_error($connection));
            } else {

                header("Location: index.php");

                echo "<script type='text/javascript'>alert('Account created!');</script>";
            }
        } else {
            echo "<script type='text/javascript'>alert('Passwords do not match!');</script>";
        }
    }
}

function numOfBuyers()
{
    global $connection;

    $query = mysqli_query($connection, "SELECT * FROM users WHERE  user_type='buyer'");

    $rows = mysqli_num_rows($query);

    return $rows;
}

function numOfSellers()
{
    global $connection;

    $query = mysqli_query($connection, "SELECT * FROM users WHERE  user_type='seller'");

    $rows = mysqli_num_rows($query);

    return $rows;
}


function logoutUser()
{
    session_start();
    session_unset();
    session_destroy();
}


function uploadService()
{
    if (isset($_POST['sell'])) {
        global $connection;

        $title = $_POST['title'];
        $price = $_POST['price'];
        $zipcode = $_POST['zipcode'];
        $date = strtotime($_POST["date"]);
        $date = date('Y-m-d H:i:s', $date);
        $file = addslashes(file_get_contents($_FILES['image']['tmp_name']));

        $seller_email =  $_SESSION['email'];

        $title = mysqli_real_escape_string($connection, $title);
        $price = mysqli_real_escape_string($connection, $price);
        $zipcode = mysqli_real_escape_string($connection, $zipcode);
        $seller_email = mysqli_real_escape_string($connection, $seller_email);



        $query = "INSERT INTO service(title, price, zipcode, seller_email, date, imgURL) ";
        $query .= "VALUES ('$title', '$price', '$zipcode', '$seller_email', '$date', '$file')";

        $result = mysqli_query($connection, $query);
        if (!$result) {
            die('Query FAILED' . mysqli_error($connection));
        } else {


            echo "<script type='text/javascript'>alert('Service created!');</script>";
        }
    }
}
