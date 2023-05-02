<!-- ############################## Header Section ############################## -->
<?php include 'header.php' ?>

<!-- header-slider-area start -->
<section class="header-slider-area">
    <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <?php
            $sql = "SELECT * FROM 	slider  order by id ASC limit  1";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $slider_id = $row['id'];
                }
            } ?>
            <?php
            $sql = "SELECT * FROM 	slider  where id=$slider_id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) { ?>
                    <div class="item active">
                        <div class="single-slide-item slide-1" style="background-image:url(admin/assets/image/<?php echo $row['image'] ?>);">
                            <div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="single-slide-item-content">
                                        </div><!-- /.single-slide-item-content-->
                                    </div><!-- /.col-->
                                </div><!-- /.row-->
                            </div><!-- /.container-->
                        </div><!-- /.single-slide-item-->
                    </div><!-- /.item .active-->
            <?php }
            } ?>
            <?php
            $sql = "SELECT * FROM 	slider  where id!=$slider_id order by id ASC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) { ?>
                    <div class="item">
                        <div class="single-slide-item slide-2" style="background-image:url(admin/assets/image/<?php echo $row['image'] ?>);">
                            <div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="single-slide-item-content">
                                            <!-- <img src="assets/images/banner/ship01.jpg" alt=""> -->
                                        </div><!-- /.single-slide-item-content-->

                                    </div><!-- /.col-->
                                </div><!-- /.row-->
                            </div><!-- /.container-->
                        </div><!-- /.single-slide-item-->
                    </div><!-- /.item .active-->
            <?php }
            } ?>
        </div><!-- /.carousel-inner-->

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="lnr lnr-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="lnr lnr-chevron-right"></span>
        </a>
    </div><!-- /.carousel-->

</section><!-- /.header-slider-area-->
<!-- header-slider-area end -->





<!-- ############################## Projects ############################## -->
<section class="news" style="padding-bottom: 1rem;">
    <div style="margin-left:15px;margin-right:15px">
        <div class="news-details">
            <div class="news-card news-card-pb-25">
                <div class="row">

                    <?php
                    $sql = "SELECT * FROM 	services  order by id ASC";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {

                    ?>

                            <div class="col-lg-5 col-md-3 col-sm-6">
                                <div class="single-news-box" style="min-height: 0;">
                                    <div class="news-box-bg">
                                        <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="blog image" style="width: 100%;height: 20rem;">
                                    </div>
                                    <div class="news-box-inner" style="text-align: center;background-color: <?php echo $row['background_color'] ?>;color: white;padding: 3rem 0;">
                                        <p><strong>
                                                <?php echo $row['title'] ?>
                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            </div>

                    <?php }
                    } ?>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ############################## OUR VALUABLE CUSTOMERS ############################## -->
<section class="clients ser">
    <div class="container" style="width: 100%;">
        <div class="text-center">
            <h4 style="color:black; font-weight: 600; font-size: 26px; line-height:26px; position: relative;"> OUR VALUABLE CUSTOMERS</h4>
        </div>
        <div class="clients-area">
            <style>
                .owl-item {
                    width: 13rem !important;
                }
            </style>
            <div class="owl-carousel owl-theme" id="client">
                <?php
                $sql = "SELECT * FROM 	customer_logo  order by id";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <div class="item">
                            <a href="#">
                                <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="brand-image" />
                            </a>
                        </div>
                <?php }
                } ?>

            </div>
            <!--/.owl-carousel-->
        </div>
        <!--/.clients-area-->
    </div>
    <!--/.container-->

</section>



<!-- ############################## Footer Section ############################## -->
<?php include 'footer.php' ?>