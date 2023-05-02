<!-- ############################## Header Section ############################## -->
<?php include 'header.php' ?>
<?php
$sql = "SELECT * FROM 	service  where title='Shipping Agency' order by id desc";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

?>
        <section>
            <div class="row">
                <div class="col-12 col-lg-12 col-md-12 col-sm-12" style="margin-right:0px ;">
                    <img src="../admin/assets/image/<?php echo $row['image'] ?>" alt="" style="width: 100%;">
                </div>

            </div>
        </section>



        <section style=" background-color:#F3F4F3">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12 col-sm-12">

                        <h3 style="color: #292929;font-family: Roboto, Sans-serif;font-weight: 700;font-size: 25px; margin-top:30px;margin-bottom:30px;">Shipping Agency</h3>

                        <p style=" color: #54595F;font-family: Roboto, Sans-serif; font-size: 18px;font-weight: 400; margin-bottom:40px;"><?php echo $row['defination'] ?></p>

                    </div>

                </div>

            </div>

        </section>


        <section class="ser">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-9 col-md-9 col-sm-9">

                        <h3 style="color: #292929;font-family: Roboto, Sans-serif;font-weight: 700; font-size: 25px;margin-top:20px;margin-bottom:20px;">Our experience and expertise on</h3>

                        <ul style="list-style-type:disc; color: #54595F;font-family: Roboto, Sans-serif; font-size: 16px;font-weight: 400; margin-bottom:30px; margin-left:65px;">
                            <?php echo $row['description'] ?>
                        </ul>
                    </div>

            <?php }
    } ?>

            <div class="col-12 col-lg-3 col-md-3 col-sm-3" style="background-color:#F5F3F3 ; padding:30px 0 50px 0;">
                <h4 style="color: #292929;font-family: Roboto, Sans-serif;padding-left:30px ; font-weight: 700; margin-top:20px;margin-bottom:20px;">Useful Links</h4>

                <ul style="list-style-type:disc; color: #54595F;font-family: Roboto, Sans-serif; font-size: 16px;font-weight: 400; margin-bottom:30px; margin-left:65px;">
                    <li><a href="https://mos.gov.bd/" target="_blank" style="color: red; font-size: 14px;">Ministry of Shipping</a></li>
                    <li><a href="http://www.cpa.gov.bd/" target="_blank" style="color: red; font-size: 14px;">Chattogram Port Authority</a></li>
                    <li><a href="http://www.mpa.gov.bd/" target="_blank" style="color: red; font-size: 14px;">Mongla Port Authority</a></li>
                    <li><a href="https://www.bsaa.com.bd/" target="_blank" style="color: red; font-size: 14px;">Bangladesh Shipping Agent Association</a></li>

                </ul>

            </div>

                </div>

            </div>

        </section>








        <!-- ############################## Footer Section ############################## -->
        <?php include 'footer.php' ?>