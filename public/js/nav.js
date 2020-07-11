$(document).ready(function () {
    //set height
    const nav = document.getElementById('right-nav');
    let screenHeight = (window.innerHeight - 70) + 'px';
    nav.style.minHeight = screenHeight;
    $(window).on('resize', function () {
        let screenHeight = (window.innerHeight - 70) + 'px';
        nav.style.minHeight  = screenHeight;
        if(window.innerWidth <= 768)
        {
            $('nav').addClass('hide');
            $('section').addClass('hide');
        } else {
            $('nav').removeClass('hide');
            $('section').removeClass('hide');
        }
    });

    if(window.innerWidth <= 768)
    {
        $('nav').addClass('hide');
        $('section').addClass('hide');
    }


    $('.tree').on('click', function () {
        if($(this).children('.fa-caret-down').hasClass('rotated')){
            $(this).children('.fa-caret-down').removeClass('rotated');
            $(this).children('.fa-caret-down').css({ WebkitTransform: 'rotate(' + 0 + 'deg)'});

            $(this).children('.fa-caret-down').css({ '-moz-transform': 'rotate(' + 0 + 'deg)'})
        } else {
            $(this).children('.fa-caret-down').addClass('rotated');
            $(this).children('.fa-caret-down').css({ WebkitTransform: 'rotate(' + 180 + 'deg)'});
            $(this).children('.fa-caret-down').css({ '-moz-transform': 'rotate(' + 180 + 'deg)'})
        }
    });

    $('.navBtn').on('click', function () {
        $('nav').toggleClass('hide');
        if($('nav').hasClass('hide')) {
            $('.viewTextsEdit').css('width', '100%');
        } else {
            $('.viewTextsEdit').css('width', '89%');
        }
    });
});