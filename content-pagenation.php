<div class="p-pagenation">
    <?php
        $args = array(
            'mid_size' => 3, 
            'prev_text' => '<i class="fas fa-angle-double-left"></i>',
            'next_text' => '<i class="fas fa-angle-double-right"></i>',
            'screen_reader_text' => ' ',
        );
        the_posts_pagination($args);
    ?> 
</div>
<!-- /.p-pagenation -->