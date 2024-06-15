<form method="get" action="" action="<?php echo esc_url(home_url('/')); ?>" class="p-form">
    <div class="p-form__body">
        <label for="search"></label>
        <input name="s" type="text" class="c-input-text p-form__input" value="<?php the_search_query(); ?>">
        <i class="fa-solid fa-magnifying-glass c-serch-icon"></i>
    </div>
    <!-- .p--form__body -->
    <button type="submit" class="c-button">
        検索
    </button>
    <!-- .c-button -->
</form>
<!-- .p-form -->