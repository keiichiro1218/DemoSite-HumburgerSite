jQuery(function ($) {
    jQuery(".p-header__menu-button_open").on("click", function(){
        jQuery(".l-sidebar").addClass("u-open");
        jQuery(".l-main").addClass("u-display-none");

    });
    
    jQuery(".p-sidebar__button_close").on("click", function(){
        jQuery(".l-sidebar, .p-background").removeClass("u-open");
        jQuery(".l-main").removeClass("u-display-none");
    
    });   
});