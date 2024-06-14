    <footer class="l-footer">
        <div class="p-footer">
            <div class="p-footer__nav">
                <!-- <a href="" class="p-footer__link">ショップ情報</a>
                <a href="" class="p-footer__link">ヒストリー</a> -->
                <?php wp_nav_menu ( array(
                    'theme_location' => 'footer_menu',
                    'container' => false,
                    'menu_class' => 'p-footer__menu'
                )) ?>

            </div>
            <!-- .p-footer__menu -->
            <div class="p-footer__Copyright u-fs_sentence">Copyright: RaiseTech</div>
        </div>
        <!-- /.p-footer -->
    </footer>
    <!-- l-footer -->
</div>
<!-- l-main -->