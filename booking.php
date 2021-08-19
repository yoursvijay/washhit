<?php 
include_once('header.php')
?>
    <meta name="description" content="">
    <title>Booking | Washh It</title>
    <link rel="stylesheet" href="assets/css/booking.css">
</head>
<body>
    <!--    header starts-->
    <div id="header">
    <?php 
        include_once('navbar.php')
    ?> 
    </div>
    <!--    header starts-->

    <!--    form starts-->
    <div class="pickUpDetails p-0">
        <form id="basic-form" method="post">
            <div class="formBanner">
                <div class="container bg-white h-100">
                    <div class="row ">
                        <div class="col-lg-12 col-md-12 col-sm-12 formPadding">
                            <div id="submitText"></div>
                            <h1 class="mainHeadingBooking">Pickup Details</h1>


                            <div class="row marginForm">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="input-group ">
                                        <label for="name" class="formLabel">Name</label>
                                        <input class="form-control mb-0" type="text" name="name" autoComplete="off" id="name" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="input-group ">
                                        <label for="phonenumber" class="formLabel">Phone Number</label>
                                        <input class="form-control mb-0" type="tel" name="phonenumber" maxlength="12" autoComplete="off" id="phonenumber" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="input-group ">
                                        <label for="email" class="formLabel">Email</label>
                                        <input class="form-control mb-0" type="email" name="email" autoComplete="off" id="email" required>
                                    </div>
                                </div>

                            </div>
                            <div class="row marginForm">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="input-group date" data-placement="bottom" data-align="bottom">
                                        <label for="datepicker" class="formLabel">Pickup Date</label>
                                        <input class="form-control mb-0" name="datepicker" autoComplete="off" id="datepicker" data-date-format='dd-mm-yyyy' value="dd-mm-yyyy" required readonly>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="input-group " id="timeSlot" data-placement="left" data-align="top">
                                        <label for="time" class="formLabel">Select Slot</label>
                                        <select class="form-control " id="time" name="time" required>
                                            <option value="">Select Slot</option>
                                            <option value="9-12am">9-12 am</option>
                                            <option value="1-5pm">1-5 pm</option>
                                            <option value="5-8pm">5-8 pm</option>


                                        </select>

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="input-group">
                                        <label for="select" class="formLabel">Select Area</label>
                                        <select class="form-control " id="select" name="select" required>
                                            <option value="">Select Area</option>
                                            <option value="KPHB">KPHB</option>
                                            <option value="Kukatpally">Kukatpally</option>
                                            <option value="Gachibowli">Gachibowli</option>
                                            <option value="Madhapur">Madhapur</option>
                                            <option value="Nijampet">Nijampet</option>
                                            <option value="Nijampet">Nijampet</option>
                                            <option value="Pragathi_Nagar">Pragathi Nagar</option>
                                            <option value="Kondapur">Kondapur</option>
                                            <option value="Miyapur">Miyapur</option>
                                            <option value="Juble_hills">Juble hills</option>
                                            <option value="Banjara_hills">Banjara hills</option>
                                            <option value="Manikonda">Manikonda</option>
                                            <option value="nanakramguda">nanakramguda</option>
                                            <option value="Hitechcity">Hitechcity</option>


                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row marginForm">
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <div class="input-group ">
                                        <label for="housenumber" class="formLabel">Address</label>
                                        <input class="form-control " type="text" name="housenumber" id="housenumber" autoComplete="off" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="input-group">
                                        <label for="landmark" class="formLabel">Landmark(optional)</label>
                                        <input class="form-control" type="text" id="landmark" name="landmark" autoComplete="off">

                                    </div>
                                </div>                                
                            </div>
                            <div class="row marginForm justify-content-between">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="input-group">
                                        <label for="pincode" class="formLabel">Pincode(optional)</label>
                                        <input class="form-control" type="text" id="pincode" maxlength="6" name="pincode" autoComplete="off">

                                    </div>

                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">

                                    <div>
                                        <button type="submit" class="btn requestPickingBtn ">Request a Pickup</button>
                                    </div>

                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!--    form ends-->
    <?php 
    include_once('footer.php')
    ?>
    <script src="assets/js/booking.js"></script>
</body>
</html>

