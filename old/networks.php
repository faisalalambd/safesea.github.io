<!-- ############################## Header Section ############################## -->
<?php include 'header.php' ?>

<section>
    <div class="row">
        <?php
        $sql = "SELECT * FROM 	networks_banner  order by id desc limit 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {

        ?>
                <div class="col-12 col-lg-12 col-md-12 col-sm-12" style="margin-right:0px ;">
                    <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="" width="100%" style="height: 45rem;">
                </div>
        <?php }
        } ?>

    </div>
</section>


<?php
$sql = "SELECT * FROM 	networks_banner  order by id desc limit 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

?>
        <section style="background-color:#F3F4F3">
            <div class="row">
                <div class="col-12 col-lg-12 col-md-12 col-sm-12">

                    <h3 style="text-align: center; color: #54595F;font-family: Roboto, Sans-serif;font-weight: 700;font-size: 25px; margin-top:20px;margin-bottom:20px;">OUR MEMBERSHIP</h3>

                    <p class="container" style=" text-align: center;color: #54595F;font-family: Roboto, Sans-serif; font-size: 18px;font-weight: 400; margin-bottom:30px;"> </p>

                </div>

            </div>
        </section>
<?php }
} ?>

<section style="background-color: #ccc;">
    <div class="row">
        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
            <h3 style="text-align: center; color: black;font-family: Roboto, Sans-serif;font-weight: 700;font-size: 25px; margin-top:20px;margin-bottom:20px;">Overseas Network</h3>

        </div>
    </div>
</section>


<section>

    <div class="row" style="margin-bottom: 20px;margin-left: 40px;margin-right: 40px;">

        <?php
        $sql = "SELECT * FROM 	overseas_network  order by id ASC";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {

        ?>
                <div class="col-lg-7 col-md-2 col-sm-2 col-xs-12">
                    <div class="single-we-do-box text-center">
                        <div class="we-do-description">
                            <div class="we-do-info">
                                <div class="we-do-img">
                                    <img src="../admin/assets/image/<?php echo $row['image'] ?>" alt="image of business" />
                                </div>
                                <!--/.we-do-img-->
                                <div class="we-do-topics">
                                    <h2>
                                        <!--<a href="#" style="color: #54595F;font-family: Roboto, Sans-serif; font-size: 18px;">-->
                                        <!--    <?php
                                                // echo $row['title'];
                                                //
                                                ?>
                                        <!--</a>-->
                                    </h2>
                                </div>
                                <!--/.we-do-topics-->
                            </div>

                        </div>
                        <!--/.we-do-description-->
                    </div>
                    <!--/.single-we-do-box-->
                </div>
                <!--/.col-->
        <?php }
        } ?>




    </div>
</section>



<section style="background-color: #ccc;">
    <div class="row">
        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
            <h3 style="text-align: center; color: black;font-family: Roboto, Sans-serif;font-weight: 700; font-size: 25px; margin-top:20px;margin-bottom:20px;">Local Network</h3>

        </div>
    </div>
</section>


<section>

    <div class="row" style="margin-bottom: 20px;">



        <?php
        $sql = "SELECT * FROM 	local_networks  order by id ASC";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {

        ?>
                <div class="col-lg-7 col-md-2 col-sm-2 col-xs-12">
                    <div class="single-we-do-box text-center" style="background-color:white ;">
                        <div class="we-do-description">
                            <div class="we-do-info">
                                <div class="we-do-img">
                                    <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="Girl in a jacket" width="500" height="600">

                                </div>
                                <!--/.we-do-img-->
                                <div class="we-do-topics">
                                    <h2>

                                    </h2>
                                </div>
                                <!--/.we-do-topics-->
                            </div>

                        </div>
                        <!--/.we-do-description-->
                    </div>
                    <!--/.single-we-do-box-->
                </div>
                <!--/.col-->
        <?php }
        } ?>








    </div>
</section>




<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>