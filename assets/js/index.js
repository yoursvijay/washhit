$(document).ready(function() {
    //one
    function requestPickUp() {
        window.location.replace("booking");
    }
    $('#nav-icon').click(function() {
        $(this).toggleClass('open');
        $("#headerDropdown").toggleClass('headerDropdownActive');
    });
    $('#navbarToggler').click(function() {
        $(this).toggleClass('open');
    });
    //two
    $(window).scroll(function() {
        if ($(this).scrollTop() > 0) {
            $(".navbar").addClass("homepageHeaderScroll");
            $(".navbar-brand img").attr("src", "assets/images/logo-washhit.svg");

        } else {
            $(".navbar").removeClass("homepageHeaderScroll");
            $(".navbar-brand img").attr("src", "assets/images/logo-homepage.svg");
        }
    });

    $("#navbarToggler").click(function() {
        $(".navbar").toggleClass("homepageResHeader");
        $(".navbar-brand").find('img').toggle();
    });
    $(".homepageHeaderScroll #navbarToggler").click(function() {
        $(".navbar").toggleClass("bg-white");
    });
    //Three
    $('#services').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });

});