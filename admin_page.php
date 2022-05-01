<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="main.css" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="logo">
            <p>Admin Panel</p>
        </div>
        <ul style="padding-right: 50px;">

            <?php

            if (isset($_SESSION["email"])) {
                echo "<a href=\"logout.php\">Logout</a>";
            } else {
                echo "<a href=\"logout.php\" style=display:none>Logout</a>";
            }
            ?>

            </li>
        </ul>
    </nav>
</body>

</html>