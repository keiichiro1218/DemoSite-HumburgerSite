<?php get_header()?>
            <div class="p-page-visual p-page-visual_archive">
                <div class="p-page-visual__title u-title--position">
                    <div class="c-page-title  u-fs-sentence">
                        <?php
                            single_cat_title();
                        ?>
                    </div>
                    <!-- .c-page-title__menu -->
                </div>
                <!-- .p-page-visual__title -->
            </div>
            <!-- p-page-visual -->
            <div class="p-archive u-inner">
                <div class="p-archive__conetnts">
                    <div class="p-archive__title u-fw_bold ">
                        小見出しが入ります
                    </div>
                    <!-- /.p-archive__title -->
                    <div class="p-archive__sentence">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </div>
                    <!-- /.p-archive__sentence -->
                </div>
                <!-- /.p-archive__conetnts -->   
                <div class="p-media__wrapper">
                    <?php
                    if ( have_posts() ):
                        while ( have_posts() ): the_post();
                    ?>

                    <div class="p-media">
                        <figure class="p-media__img-wrapper">
                            <?php if(has_post_thumbnail()):  ?>
                                <?php the_post_thumbnail('medium',['class' => 'p-media__img']); ?>
                                <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="">
                            <?php endif; ?>
                        </figure>
                        <!-- /.p-media__img-wrapper -->
                        <div class="p-media__body">
                            <div class="p-media__content-wrapper">
                                <div class="p-media__menu u-fw_bold">
                                    <?php the_title(); ?>
                                </div>
                                <!-- .p-media__body -->
                                <div class="p-media__heading u-fw_bold">
                                    小見出しが入ります
                                </div>
                                <!-- .p-media__heading -->
                                <div class="p-media__text">
                                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                </div>
                                <!-- .p-media__text -->
                            </div>
                            <!-- /.p-media__content-wrapper -->
                            <div class="p-media__button">
                                <a class="c-btn-media" href="<?php the_permalink(); ?>">
                                    詳しく見る
                                </a>
                                <!-- /.c-btn-media -->
                            </div>
                            <!-- .p-media__button -->
                        </div>
                        <!-- .p-media__img-wrapper -->
                    </div>
                    <!-- .p-media-->
                     <?php
                        endwhile;
                    endif;
                     ?>
                </div>
                <!-- /.p-media__wrapper -->
                <?php get_template_part('content-pagenation')?>
            </div>
            <!-- .p-archive -->
       <?php get_footer(); ?>
       <?php get_sidebar();?>