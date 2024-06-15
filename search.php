<?php get_header()?>
            <div class="p-page-visual p-page-visual_archive">
                <div class="p-page-visual__title u-title--position">
                    <div class="c-search-result  u-fs-sentence">
                        <h2>「<?php the_search_query(); ?>」の検索結果は<?php echo $wp_query->found_posts;?>件です</h2>
                    </div>
                    <!-- .c-page-title__menu -->
                </div>
                <!-- .p-page-visual__title -->
            </div>
            <!-- p-page-visual -->
            <div class="p-search">
                <main class="p-search__main u-inner">
                    <?php if(have_posts()): while(have_posts()) : the_post(); ?>
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
                    <?php endwhile; ?>
                    <?php else : ?>
                        <div class="p-search__result">
                            <h3>「<?php the_search_query(); ?>」はありませんでした</h3>
                            <p>Topページに戻る場合は<a href="<?php echo home_url(); ?>">こちら</a>から戻ることができます。</p>
                        </div>
                        <!-- /.p-search__result -->
                    <?php endif; ?>
                </main>
                <?php get_template_part('content-pagenation')?>
            </div>
       <?php get_footer(); ?>
       <?php get_sidebar();?>