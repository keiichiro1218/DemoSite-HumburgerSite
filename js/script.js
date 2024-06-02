jQuery(".l-header__menu-button_open").on("click", function(){
    jQuery(".l-aside").animate({
        right: '0%'
    }, 300);
    jQuery(".p-background-sp-menu").animate({
        left: '0%'
    }, 300);
    jQuery(".l-aside, .p-background").addClass("u-open");
});

jQuery(".l-aside__button_close").on("click", function(){
    jQuery(".l-aside").animate({
        right: '-100%'
    }, 300);
    jQuery(".p-background-sp-menu").animate({
        left: '-100%'
    }, 300);
    jQuery(".l-aside, .p-background").removeClass("u-open");
    
});