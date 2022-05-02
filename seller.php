<?php include("header.php");
include "functions.php";
include "database.php";
uploadService();
?>

<div id="login-form">
    <h2>Seller</h2>
    <h3>Hello, <?php echo $_SESSION['fname']; ?></h3>
    <form action="seller.php" method="post" enctype="multipart/form-data">
        <label for="title">Service Title</label><br>
        <input type="text" id="title" name="title" id="location" placeholder="Dog Walking" required><br>
        <label for="price">How much money per hour?</label><br>
        <input type="number" id="price" name="price" placeholder="15/hour" required><br>
        <label for="zipcode">Zip Code</label><br>
        <input type="text" id="zipcode" name="zipcode" placeholder="Five digit zip code" pattern="[0-9]{5}" required><br>
        <label for="date">Date</label><br>
        <input type="date" id="date" name="date" required><br>
        <label for="image">Upload image</label><br>
        <input type="file" id="image" name="image" required><br>
        <input name="sell" type="submit" value="Sell">
    </form>
</div>

<?php include("footer.php"); ?>