<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Page</title>
    <link href="styles/stylesheet1.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <?php
    $uid = $_SESSION["uid"];
    $firstname = $_SESSION["firstname"];
    ?>
    <div class='navbar'>
        <h3>$ideJob$</h3>
        <div>Welcome <?= $_SESSION["firstname"] ?> &nbsp;(<?= ($_SESSION["type"]) ?>)</div>
        <div><a href="seller.php">Dashboard </a></div>
        <div><a href='logout.php'><i class="fa-solid fa-right-from-bracket"></i>Logout</a></div>
    </div>

    <div id="prop-container">
     



    <div class="modal" id="add-prop">
        <div class="modal-content">
                <div class="prop-content">
                    <div>
                        <label for="street">Job Title</label>
                        <input type="text" id="title" name="title" id="location" placeholder="Dog Walking"><br>
                    </div>
                    <div>
                        <label for="city_state">How much money per hour?</label>
                        <input type="text" id="money" name="moneyphour" placeholder="15/hour"><br>
                    </div>
                    <div>
                        <label for="zip">Zip Code</label>
                        <input type="text" id="zip" name="zip" placeholder="99999"><br>
                    </div>
                    <div>
                        <label for="type">Dates</label>
                        <input type="text" id="date" name="date" placeholder="May 1st - May 3rd">
                    </div>
                    <div>
                        <label for="imgURL">Upload image</label>
                        <input type="file" id="imgURL" name="imgURL">
                    </div><br>
                </div>

                <div class="center">
                    <input class="form-btns green" name="Submit" type="submit" value="Add">
                    <input class="form-btns red" type="reset" value="Cancel" onclick="closeModal('add-prop')">
                </div>

            </form>

        </div>
    </div>
</body>

</html>