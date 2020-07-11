$(function() {
    $(".languageContent").overlayScrollbars({
        className: "os-theme-dark",
        overflowBehavior : {
            x : "hidden",
            y : "scroll"
        },
        scrollbars : {
            visibility       : "auto",
            autoHide         : "never",
            autoHideDelay    : 1000,
            dragScrolling    : true,
            clickScrolling   : false,
            touchSupport     : true,
            snapHandle       : false,
        },
    });
});