<!-- ############################## Header Section ############################## -->
<?php include 'header.php' ?>

<?php
$sql = "SELECT * FROM 	about_us  order by id desc";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

?>

        <section style="background-color:#E8F1EC;">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <img src="../admin/assets/image/<?php echo $row['image'] ?>" alt="about banner" style="width: 100%;">
                </div>
            </div>
        </section>

        <!--about-history start-->
        <section style="background-color:#E8F1EC;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h3 style="color:black; font-weight: bold;font-size:30px;line-height:26px; margin:5px 0 5px 0;">About Us</h3>
                        <p style="text-align: justify; color: #54595F; font-family: 'Roboto', Sans-serif; font-size: 18px;margin-top: 0; margin-bottom: 1rem;"><?php echo $row['paragraph'] ?></p>

                    </div>
                </div>
                <!--/.about-history-content-->
            </div>


        </section>
<?php }
} ?>

<!--/.about-history-->
<!--about-history end-->




<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>