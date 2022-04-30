<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>$ideJob$</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="main.css" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="logo">
            <p>$ideJob$</p>
        </div>
        <ul>
            <li>
                <?php

                if (!isset($_SESSION["email"])) {
                    echo "<a href=\"index.php\">Login</a>";
                }
                ?>
            </li>
            <li>
                <?php

                if (!isset($_SESSION["email"])) {
                    echo "<a href=\"home.php\" style=display:none>Home</a>";
                } else {
                    echo "<a href=\"home.php\">Home</a>";
                }
                ?>
            </li>
            <li><a href="https://codd.cs.gsu.edu/~sglover6/project4.pdf">About</a></li>
            <li><a href="#">Resources</a></li>
            <li>
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