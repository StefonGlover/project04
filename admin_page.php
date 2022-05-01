<?php session_start();
include_once "functions.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="admin_page.css" rel="stylesheet">
</head>

<body>
    <nav>
        <div class="logo">
            <p>$ideJob$ Admin Panel</p>
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

    <div class="container">
        <div class="main-body">

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="images/avatar.png" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4><?php echo  $_SESSION['fname'] . " " . $_SESSION['lname'] ?></h4>
                                    <p class="text-secondary mb-1">Business Owner and Full Stack Developer</p>
                                    <p class="text-muted font-size-sm">Atlanta, GA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h2 class="mb-0">Email</h2>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo  $_SESSION['email'] ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row gutters-sm">
                        <div class="col-sm-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h2>About $ideJob$</h2>
                                    <br>
                                    <p>
                                        $ideJob$ is an American multinational e-commerce corporation based in Atlanta, GA that facilitates consumer-to-consumer and business-to-consumer sales through its website. $ideJob$ was founded by <?php echo  $_SESSION['fname'] . " " . $_SESSION['lname'] ?> in 2022, and became a notable success story of the dot-com bubble. $ideJob$ is a multibillion-dollar business with operations in about 32 countries, as of May 2022. The company manages the $ideJob$ website, an online auction and shopping website in which people and businesses buy and sell a wide variety of goods and services worldwide. The website is free to use for buyers, but sellers are charged fees for listing items after a limited number of free listings, and an additional or separate fee when those items are sold.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h2>Website Statistics</h2><br>
                                    <h3>Buyers</h3>
                                    <p>
                                        <?php echo numOfBuyers() ?>
                                    </p><br>
                                    <h3>Sellers</h3>
                                    <p>
                                        <?php echo numOfSellers() ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>