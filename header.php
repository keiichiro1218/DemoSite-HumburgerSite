<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <meta name="description=" content="デモサイトです">
    
    <link rel="canonical" href="https://k-chiba.com">
    <title><?php esc_html( wp_get_document_title() ); ?></title>
    <script src="https://kit.fontawesome.com/73db00d111.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p&family=Roboto:ital,wght@0,100;0,
        300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
    <div class="l-container">
        <div class="l-main">
            <header class="l-header">
                <div class="p-header">
                    <h1 class="p-header__logo u-fw-bold">
                        <a href="<?php echo esc_url( home_url()); ?>" class="p-header__link">
                            <?php bloginfo('name'); ?>
                        </a>
                    </h1>
                    <div class="p-header__menu-button_sp">
                        <div class="p-header__menu-button_open c-button-menu">
                            Menu
                        </div> 
                        <!-- .p-header__menu-button_open -->
                    </div>
                    <!-- .p-header__menu-button_sp -->
                    <?php get_search_form()?>
                </div>
                <!-- /.p-header -->
            </header>
            <!-- .l-header -->