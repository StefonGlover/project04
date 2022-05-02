<?php include("header.php");
include "database.php"; ?>


<?php
global $connection;
$sql = "SELECT * FROM service";
$resultset = mysqli_query($connection, $sql) or die("database error:" . mysqli_error($connection));
while ($row = mysqli_fetch_assoc($resultset)) {
?>


    <div class="col d-flex justify-content-center">
        <div class="card" style="width: 50rem;">
            <?php echo '<img class="card-img-top" src="data:image;base64,' . base64_encode($row['imgURL']) . '"/>'; ?>
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['seller_email']; ?></h5>
                <h6 class="card-title">Posted: <?php echo $row['date']; ?></h6>
                <p class="card-text">Service Description: <?php echo $row['title']; ?></p>
            </div>
        </div>
    </div><br>

<?php } ?>
<?php include("footer.php"); ?>