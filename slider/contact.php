    <!-- ############################## Header Section ############################## -->
    <?php include 'header.php';
    $text = $_GET['text']; ?>


    <style>
        input {
            width: 100%;
            padding: 10px 20px;
            /* margin: 8px 0; */
            box-sizing: border-box;
        }
    </style>


    <section class="map">
        <div class="container">
            <?php echo $text ?>
            <div class="row">
                <div class=" col-lg-3 col-md-3 col-sm-12">
                    <h3 style="color: #FFFFFF; font-family: Roboto, Sans-serif; font-size: 20px; text-transform: uppercase; font-weight:700; text-align:center;margin-bottom: 20px;">DHAKA OFFICE</h3>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.702945874232!2d90.39703594960864!3d23.864679884457274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c4241b2a5ab1%3A0xa82501a75020ba86!2sSafesea%20Bangladesh%20Ltd!5e0!3m2!1sen!2sbd!4v1665488991089!5m2!1sen!2sbd" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>

                <div class=" col-lg-3 col-md-3 col-sm-12">
                    <h3 style="color: #FFFFFF; font-family: Roboto, Sans-serif; font-size: 20px; text-transform: uppercase; font-weight:700; text-align:center;margin-bottom: 20px;">CHATTOGRAM OFFICE</h3>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.6027990877396!2d91.81054504956941!3d22.330856885235676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd8b6196cf0ed%3A0x1eef2ec3ace33b9e!2sSafesea%20Bangladesh%20Ltd.!5e0!3m2!1sen!2sbd!4v1665490059454!5m2!1sen!2sbd" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
                <div class=" col-lg-3 col-md-3 col-sm-12">
                    <h3 style="color: #FFFFFF; font-family: Roboto, Sans-serif; font-size: 20px; text-transform: uppercase; font-weight:700; text-align:center;margin-bottom: 20px;">BENAPOLE OFFICE</h3>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58745.32807431428!2d88.86316096697394!3d23.03907822674181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff3656aaaaaaab%3A0x56513618364ed6ad!2sSafesea%20Bangladesh%20Ltd!5e0!3m2!1sen!2sbd!4v1665490291823!5m2!1sen!2sbd" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
                <div class=" col-lg-3 col-md-3 col-sm-12">
                    <h3 style="color: #FFFFFF; font-family: Roboto, Sans-serif; font-size: 20px; text-transform: uppercase; font-weight:700; text-align:center;margin-bottom: 20px;">KHULNA OFFICE</h3>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58838.360681512975!2d89.50286306556214!3d22.824777054753195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff9aba55555555%3A0xb6a61e96d3e4f983!2sSafesea%20Bangladesh%20Ltd!5e0!3m2!1sen!2sbd!4v1665490232334!5m2!1sen!2sbd" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>




            </div>

        </div>

    </section>



    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                    <form action="store_contact.php" method="POST">
                        <label for="name">Name <span style="color:#B2BEB5">*</span></label>
                        <input type="text" id="name" name="name" required>
                        <label for="lname">Email <span style="color:#B2BEB5">*</span></label>
                        <input type="email" id="email" name="email" required>
                        <label for="lname">Phone </label>
                        <input type="number" id="phone" name="phone" required>
                        <label for="message ">Comment or Message <span style="color:#B2BEB5">*</span></label> <br>
                        <textarea id="w3review" name="message" rows="6" cols="160" style="width: 100%;padding-bottom:50px;"></textarea><br>
                        <button style="padding:5px 15px 5px 15px; font-size:16px; color:#B2BEB5; background-color:#fff; border: none;">Submit</button>

                    </form>


                </div>
            </div>

        </div>

    </section>


    <!-- ############################## Footer Section ############################## -->
    <?php include 'footer.php' ?>