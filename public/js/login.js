$(document).ready(function () {
    $('.loaderScreen').fadeOut();
    //initialize parent section height
    const body = document.getElementById('fullWidth');
    body.style.height = window.innerHeight + 'px';
    $(window).on('resize', function () {
        body.style.height = window.innerHeight + 'px';
    });

});
