<?php get_header()?>
            <div class="p-page-visual p-page-visual_archive">
                <div class="p-page-visual__title u-title--position">
                    <div class="c-page-title">
                        Menu:
                    </div>
                    <!-- .c-page-title -->
                    <div class="c-page-title__menu  u-fs-sentence">
                        チーズバーガー
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
                            <!-- <img src="../img/media-img.png" alt="" class="p-media__img"> -->
                            <?php if(has_post_thumbnail()): // アイキャッチ画像が設定されてれば表示 ?>
                                <?php the_post_thumbnail('medium',['class' => 'p-media__img']); ?>
                                <?php else : // なければnoimage画像をデフォルトで表示 ?>
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
                <div class="p-pagenation">
                    <div class="p-pnagenation__page-num">
                        page 1/10
                    </div>
                    <!-- /.p-pnagenation__page-num -->
                    <div class="p-pagenation__btn-wrapper">
                        <div class="p-pagenation__arrow p-pagenation__arrow_left">

                        </div>
                        <!-- /.p-pagenation__arrow -->
                        <div class="p-pagenation__prev">
                            前へ
                        </div>
                        <!-- .p-pagenation__prev -->
                    </div>
                    <!-- /.p-pagenation__prev-wrapper -->
                    <div class="p-pagenation__pages">
                        <div class="p-pagenation__page ">
                            1
                        </div>
                        <!-- /.p-pagenatinon__page -->
                        <div class="p-pagenation__page">
                            2
                        </div>
                        <!-- /.p-pagenatinon__page -->
                        <div class="p-pagenation__page">
                            3
                        </div>
                        <!-- /.p-pagenatinon__page -->
                        <div class="p-pagenation__page">
                            4
                        </div>
                        <!-- /.p-pagenatinon__page -->
                        <div class="p-pagenation__page">
                            5
                        </div>
                        <!-- /.p-pagenatinon__page -->
                        <div class="p-pagenation__page">
                            6
                        </div>
                        <!-- /.p-pagenatinon__page -->
                        <div class="p-pagenation__page">
                            7
                        </div>
                        <!-- /.p-pagenatinon__page -->
                        <div class="p-pagenation__page">
                            8
                        </div>
                        <!-- /.p-pagenatinon__page -->
                        <div class="p-pagenation__page">
                            9
                        </div>
                        <!-- /.p-pagenatinon__page -->

                    </div>
                    <!-- /.p-pagenation__pages -->
                    <div class="p-pagenation__btn-wrapper">
                        <div class="p-pagenation__next">
                            次へ
                        </div>
                        <!-- /.p-pagenation__next -->
                        <div class="p-pagenation__arrow p-pagenation__arrow_right">

                        </div>
                        <!-- /.p-pagenation__arrow -->
                    </div>
                </div>
                <!-- /.p-pagenation -->
            </div>
            <!-- .p-archive -->
       <?php get_footer(); ?>
       <?php get_sidebar();?>