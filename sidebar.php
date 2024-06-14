<div class="l-aside">
            <div class="p-aside">
                <div class="p-aside__button_close">
                    <div class="c-button_close-sp c-button_sp_line"></div>
                </div>
                <div class="p-aside__button c-button-menu">
                    MENU
                </div>
                <nav class="p-nav">
                    <?php
                        echo str_replace('sub-menu', 'p-nav__menu-sub', wp_nav_menu( array(
                            'echo' => false, 
                            'theme_location' => 'side_menu',
                            'container' => false,
                            'menu_class' => 'p-nav__menu',
                        ) ));
                    ?>
                </nav>
                <!-- .p-nav -->
            </div>
            <!-- .p-aside -->
        </div>
        <!-- l-aside -->
        <div class="p-background-sp-menu"></div>
    </div>
    <!-- l-container -->
    <?php wp_footer(); ?>
</body>
</html>