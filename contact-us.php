<?php 
include_once('header.php')
?>
<meta name="description" content="">
<title>Contact Us | Washh It</title>
<link rel="stylesheet" href="assets/css/contact-us.css">
<body>
</head>

<body>
    <div id="header" class="hideAdd">
    <?php 
        include_once('navbar.php')
    ?>  
    </div>
    <!--    contact form-->
    <div class="contactUsBanner">
        <div class="container">
            <h3>Contact Us</h3>
        </div>
    </div>
    <div class="container contactUsBody">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 locationDetails">
                <div class="locationResponsive">
                    <span>Address</span>
                    <div class="address">
                        <span>
                            Plot no. 430, 431, 9th phase, <br>
                            Gokul plots, Kukatpally, <br>
                            Hyderabad - 500085.
                        </span>
                    </div>
                </div>
                <div class="locationResponsive">
                    <span>Mobile Number</span>
                    <div class="address">
                        <span>+91 916 403 5555 <br>
                            +91 916 404 5555</span>
                    </div>
                </div>
                <div class="locationResponsive">
                    <span>Email ID</span>
                    <div class="address">
                        <span>
                            <a href="mailto:support@washhit.com">support@washhit.com</a> <br>
                            <a href="mailto:info@washhit.com">Info@washhit.com</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="contactForm">
                    <h5>Contact details</h5>
                    <form method="post" id="customerForm">
                        <div class="form">
                            <div class="width50">
                                <input type="text" placeholder="Name" class="inpuField mt-0" name="customerName" id="customerName" required autoComplete="off">
                                <input type="tel" placeholder="Phone Number" class="inpuField" name="phoneNumber" id="phoneNumber" maxlength="12" required autoComplete="off">
                                <input type="email" placeholder="Email ID" class="inpuField" name="emailId" id="emailId" required autoComplete="off">
                                <input type="text" placeholder="Location" class="inpuField " name="location" id="location"  autoComplete="off">
                            </div>
                            <div class="width50 ml-4">
                                <textarea name="message" id="message">Message</textarea>
                            </div>
                        </div>
                        <button class="btn seePricing seePricingMarginTop ml-auto mr-0">Submit</button>
                    </form>
                    <div id="submitText"></div>
                </div>
            </div>
        </div>
    </div>
    <!--    contact form end-->
    <?php 
    include_once('footer.php')
    ?>
    <script src="assets/js/contactus.js"></script>
</body>
</html>