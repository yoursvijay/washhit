<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>washh it</title>
    <link rel="icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/booking.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/font.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css" rel="stylesheet" />
</head>

<body>
    <!--    header starts-->
    <header>
        <div class="captionWashhIt">
            <div class="container">
                <span>Free pickup and Free delivery*</span>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg  topHeader">

            <div class="container">
                <a class="navbar-brand" href="#"><img src="assets/images/logo-washhIt.svg" alt="washhit"></a>
                <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span><img src="assets/images/toggler.svg" alt="Washh-It"></span>
                </button>
                <div class="collapse navbar-collapse supportCalls " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img src="assets/images/messageBox.svg" alt="Washh-It" class="navLinkImages"> support@washhit.com<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img src="assets/images/phoneCall.svg" alt="Washh-It" class="navLinkImages"> +91 970 1691 456<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  loginBtn rounded-pill text-white" href="#">Login<span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--    form starts-->
    <div class="pickUpDetails p-0">
        <form id="basic-form" method="post">
            <div class="formBanner">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-12 col-md-12 col-sm-12 formPadding bg-white">
                            <h1 class="mainHeadingBooking">Pickup details</h1>


                            <div class="row marginForm">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="input-group ">
                                        <input placeholder="Name" class="form-control mb-0" type="text" name="name" autoComplete="off" id="name" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="input-group ">
                                        <input placeholder="Phone Number" class="form-control mb-0" type="tel" name="phone-number" autoComplete="off" id="phoneNumber" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="input-group ">
                                        <input placeholder="Email" class="form-control mb-0" type="email" name="email" autoComplete="off" id="email" required>
                                    </div>
                                </div>

                            </div>
                            <div class="row marginForm">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="input-group date" data-placement="bottom" data-align="bottom">
                                        <input placeholder="Date" class="form-control mb-0" type="text" name="datepicker" autoComplete="off" id="datepicker" data-date-format='yy-mm-dd' required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="input-group " id="timeSlot" data-placement="left" data-align="top">

                                        <input placeholder="Time Slot" class="form-control mb-0" type="text" id="time" autoComplete="off" name="time" required>

                                    </div>
                                </div>
                            </div>
                            <div class="row marginForm">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="input-group">
                                        <select class="form-control" id="select" name="select" required>
                                            <option disabled selected>Select Area</option>
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
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="input-group ">
                                        <input placeholder="House Number / Apartment name" class="form-control" type="text" name="house-number" id="houseNumber" autoComplete="off" required>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="input-group">
                                        <input placeholder="Address" class="form-control" type="text" id="address" name="address" autoComplete="off" required>

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="input-group">
                                        <input placeholder="Landmark" class="form-control" type="text" id="landmark" name="landmark" autoComplete="off" required>

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="input-group">
                                        <input placeholder="Pincode" class="form-control" type="text" id="pincode" name="pincode" autoComplete="off" required>

                                    </div>

                                </div>

                            </div>
                            <div id="submitText"></div>



                            <div id="submitText"></div>


                        </div>
                    </div>
                </div>
            </div>

            <div class="bookingFooter ">
                <div class="container d-flex justify-content-around">
                    <div>
                        <h6 class="getHelpText">Get help</h6>
                        <h6 class="contactDetailsText">916 403 5555 | 916 404 5555 <span class="ml-2">support@washhit.com</span></h6>
                    </div>
                    <div>
                        <button type="submit" class="btn requestPickingBtn ">Request a pickup</button>
                    </div>
                </div>


            </div>
        </form>
    </div>
    <!--    form ends-->

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
    <script>
        $(function() {
            $("#datepicker").datepicker({
                autoclose: true,
                todayHighlight: true,
                dateFormat: 'yy-mm-dd',
                orientation: "top center",
            });
        });

    </script>
    <script type="text/javascript">
        $(function() {
            $('#time').datetimepicker({
                format: 'HH:mm',
                icons: {
                    up: "fa fa-chevron-up",
                    down: "fa fa-chevron-down"
                }
            });

        });

    </script>
    <script>
        $(document).ready(function() {
            $("#basic-form").validate({
                submitHandler: function(form) {
                    var form_data = $('#basic-form').serialize();
                    $.ajax({

                        url: "customerDetailsInsertion.php",
                        type: "post",
                        data: form_data,
                        success: function(data, status) {
                            if (status == "success") {
                                $('#submitText').html("Your details are saved succesfully");
                                $('#submitText').addClass('successActive');
                                $('#basic-form').trigger("reset");
                            } else {
                                $('#submitText').html("Your details are not saved succesfully");
                                $('#submitText').addClass('errorActive');
                            }

                        }
                    });
                }

            });
        });

    </script>
</body>

</html>
