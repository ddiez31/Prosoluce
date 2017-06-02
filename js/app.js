$(document).ready(function() {
    // navigation des onglets
    $('#tabnavigation .item').tab();

    // animation menu
    $('.ui.dropdown').dropdown();

    // gestion affichage container
    if ($(location).attr('href') !== "http://localhost:8000/") {
        $(".ui.menu.ui.dropdown.menu>.item").click(function() {
            $(".container").fadeIn();
        });
    } else {
        $(".container").hide();
    };

    // option copie code
    var clipboard = new Clipboard('#copy-button');

    clipboard.on('success', function(e) {
        console.info('Action:', e.action);
        e.clearSelection();
        $('.button').html('copié');
        setTimeout(function() {
            $('.button').html('<i class="large copy icon"></i>');
        }, 1500);
    });

    clipboard.on('error', function(e) {
        console.error('Action:', e.action);
    });

    // highlight xml
    hljs.initHighlightingOnLoad();


    $('#navbar').parent().css('overflow', 'hidden');
    $('#navbar').offset({ top: -100 })
    $('#navbar').animate({ 'top': '+=60px', opacity: 1 }, function() {


    });

    $('#navbarvertical').parent().css('overflow', 'hidden');
    $('#navbarvertical').offset({ left: -350 })
    $('#navbarvertical').animate({ 'left': '+=180px', opacity: 1 }, function() {

    });

});