$('#search-icon').on('hover, mouseover', function() {
    $('#search').focus();
});
function requestPickUp() {
    window.location.replace("booking.html");
}
$('#nav-icon').click(function(){
    $(this).toggleClass('open');
    $("#headerDropdown").toggleClass('headerDropdownActive');
});
$('#navbarToggler').click(function(){
    $(this).toggleClass('open');
});