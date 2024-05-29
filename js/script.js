jQuery(".p-header__menu-button_open").on("click", function(){
    jQuery(".l-aside").animate({
        width: '80%'
    }, 300);
    jQuery(".p-background-sp-menu").animate({
        width: '20%'
    }, 300);
    jQuery(".p-header__menu-button_close, .c-menu ,.p-background").addClass("u-open");
});

jQuery(".p-header__menu-button_close").on("click", function(){
    jQuery(".l-aside").animate({
        width: '0%'
    }, 300);
    jQuery(".p-background-sp-menu").animate({
        width: '0%'
    }, 300);
    jQuery(".p-header__menu-button_close, .c-menu, .p-background").removeClass("u-open");
    
});