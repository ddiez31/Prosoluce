$(document).ready(function() {
    // navigation des onglets
    $('#tabnavigation .item').tab();

    // animation menu
    $('.ui.dropdown').dropdown();


    console.log($(location).attr('href'));

    if ($(location).attr('href') !== "http://localhost:8000/") {
        $(".ui.menu.ui.dropdown.menu>.item").click(function() {
            $(".container").fadeIn();
        });
    } else {

        $(".container").hide();
    };




});