<?php 
include_once('header.php')
?>
    <meta name="description" content="">
    <title>Terms and Conditions | Washh it</title>
    <link rel="stylesheet" href="assets/css/privacy.css">
</head>
<body>
    <div id="header" class="hideAdd">
        <?php 
        include_once('navbar.php')
        ?>
    </div>
    <!--    banner-->
    <div class="bannerPrivacy">
        <div class="container">
            <h1 class="mainHeadingPrivacy">Terms &amp; Conditions</h1>
        </div>
    </div>
    <!--    banner-->
    <!--    privacy description-->
    <div class="container">
        <h5 class="privacyHeading">Please read the following terms and conditions carefully as it sets out the terms of a legally binding agreement between you (the reader) and Washh it Private Limited.</h5>
        <div>
            <h5 class="privacyHeading">Payment:</h5>
            <ul>
                <li class="privacyDescription mb-1">Applicable taxes will be charged extra and it will be shown in Invoice.</li>
                <li class="privacyDescription mb-1">All advance payment must be mentioned in this pickup delivery Challan.</li>
                <li class="privacyDescription mb-1">For any loss or damage of garment, the compensation amount shall not be greater than 5 times of cost of processing that garment.</li>
                <li class="privacyDescription">Final Invoice will be provided at the time of Delivery.</li>
            </ul>
        </div>
        <div>
            <h5 class="privacyHeading">Delivery:</h5>
            <ul>
                <li class="privacyDescription mb-1">Delivery will be made between 36-72 Hours.</li>
                <li class="privacyDescription mb-1">We are open apart from national and regional holidays and Sundays.</li>
                <li class="privacyDescription mb-1">Any special Instruction has to be mentioned in this Pickup Delivery challan.</li>
                <li class="privacyDescription mb-1">Kindly check the belongings of garments before handing it for pickup as after pickup responsibility will not be borne by us.</li>
                <li class="privacyDescription mb-1">We do not accept any items that is not be processed.</li>
                <li class="privacyDescription mb-1">All items which can be detached from the garment will be counted as separate and charged separately.</li>
                <li class="privacyDescription">Kindly count all garment before handing over for pickup and collecting them while delivery. No claims for garment loss will be entertained if any mismatch is reported after making the payment.</li>
            </ul>
        </div>
        <div>
            <h5 class="privacyHeading">Quality: </h5>
            <ul>
                <li class="privacyDescription mb-1">No responsibility shall be held on the company's part if, clothes are already old, damaged or torn.</li>
                <li class="privacyDescription mb-1">Any issue with respected to Quality has to be reported to us within 24 hours of delivery of garments.</li>
                <li class="privacyDescription mb-1">No guarantee is given for color blending.</li>
                <li class="privacyDescription mb-1">The rates are subject to change without prior notice.</li>
                <li class="privacyDescription">If any dispute shall arise between the parties the jurisdiction shall be taken place at Hyderabad.</li>
            </ul>
        </div>
    </div>
    <!--    privacy description-->

    <?php 
    include_once('footer.php')
    ?>
    <script type="text/javascript">
        //togglebutton
        $('#nav-icon').click(function() {
            $(this).toggleClass('open');
            $("#headerDropdown").toggleClass('headerDropdownActive');
        });
        $('#navbarToggler').click(function() {
            $(this).toggleClass('open');
        });
        //togglebutton
    </script>
</body>
</html>