<!-- ############################## Header Section ############################## -->
<?php include 'header.php' ?>
<?php
$sql = "SELECT * FROM 	service  where title='Sports And Logistic' order by id desc";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

?>
        <section>
            <div class="row">
                <div class="col-12 col-lg-12 col-md-12 col-sm-12" style="margin-right:0px ;">
                    <img src="admin/assets/image/<?php echo $row['image'] ?>" alt="" style="width: 100%;">
                </div>

            </div>
        </section>



        <section style=" background-color:#F3F4F3">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12 col-sm-12">

                        <h3 style="color: #292929;font-family: Roboto, Sans-serif;font-weight: 700;font-size: 25px; margin-top:5px;margin-bottom:5px;">Sports & Media Logistics</h3>

                        <p style=" color: #54595F;font-family: Roboto, Sans-serif; font-size: 18px;font-weight: 400; margin-bottom:5px;"><?php echo $row['defination'] ?></p>

                    </div>

                </div>

            </div>

        </section>


        <section class="ser">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-9 col-md-9 col-sm-9">

                        <h3 style="color: #292929;font-family: Roboto, Sans-serif;font-weight: 700;font-size: 25px; margin-top:20px;margin-bottom:20px;">Our experience and expertise on</h3>

                        <ul style="list-style-type:disc; color: #54595F;font-family: Roboto, Sans-serif; font-size: 16px;font-weight: 400; margin-bottom:30px; margin-left:65px;">
                            <?php echo $row['description'] ?>
                        </ul>
                    </div>

            <?php }
    } ?>



                </div>

            </div>

        </section>








        <!-- ############################## Footer Section ############################## -->
        <?php include 'footer.php' ?>