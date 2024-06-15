jQuery(function ($) {
    jQuery(".p-header__menu-button_open").on("click", function(){
        jQuery(".l-aside").addClass("u-open");
        jQuery(".l-main").addClass("u-display-none");

    });
    
    jQuery(".p-aside__button_close").on("click", function(){
        jQuery(".l-aside, .p-background").removeClass("u-open");
        jQuery(".l-main").removeClass("u-display-none");
    
    });   
});