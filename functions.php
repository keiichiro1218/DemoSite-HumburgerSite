<?php 
// 各種ファイルの読み込み
function my_enqueue_scripts() {
    $uri = esc_url( get_template_directory_uri() );
    wp_enqueue_script('jquery');
    wp_enqueue_script('js', $uri . '/js/script.js', array(), gmdate( 'Ymd/Hi', filemtime( get_theme_file_path( '/js/script.js' ) ) ) );
    wp_enqueue_style('my_styles', $uri . '/css/style.css', [] ,gmdate( 'Ymd/Hi', filemtime( get_theme_file_path( '/css/style.css' ) ) ) );

}

add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts');

// add_theme_support('post-thumbnails');


// メニュー、カスタム投稿タイプの登録
add_action('init', function() {

    add_theme_support('post-thumbnails');



    register_nav_menus([
        'side_menu' => 'サイドメニュー',
        'footer_menu' => 'フッターメニュー'
        
    ]);

    register_post_type('burger_menu', [
        'label' => '投稿(バーガー)',
        'public' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'supports' => array('thumbnail', 'title','editor','excerpt')
        
    ]);

    register_taxonomy('burger', 'burger_menu', [
        'label' => 'カテゴリー(バーガー)',
        'hierarchical' => true,
        'show_in_rest' => true
    ]);


    register_post_type('side_menu', [
        'label' => '投稿(サイド)',
        'public' => true,
        'menu_position' => 6,
        'has_archive' => true,
        'supports' => array('thumbnail', 'title','editor','excerpt')
    ]);

    register_taxonomy('side', 'side_menu', [
        'label' => 'カテゴリー(サイド)',
        'hierarchical' => true,
        'show_in_rest' => true
    ]);


    register_post_type('drink_menu', [
        'label' => '投稿(ドリンク)',
        'public' => true,
        'menu_position' => 7,
        'has_archive' => true,
        'supports' => array('thumbnail', 'title','editor','excerpt')
    ]);

    register_taxonomy('drink', 'drink_menu', [
        'label' => 'カテゴリー(ドリンク)',
        'hierarchical' => true,
        'show_in_rest' => true
    ]);


    register_taxonomy('category', [
        'show_in_nav_menus' => false,
        'show_in_rest' => true,
        'show_ui' => false
    ]);

    register_taxonomy('post_tag', [
        'show_in_nav_menus' => false,
        'show_ui' => false
    ]);

    register_post_type('post', [
       
        'show_in_nav_menus' => false
    ]);
});

// 管理画面の投稿を非表示にする
function remove_menus() {
    remove_menu_page( 'edit.php' ); 

}

add_action( 'admin_menu', 'remove_menus' );

// 管理画面のメディアの位置を変更する
function custom_menus() {
    global $menu;
    $menu[21] = $menu[10];
    unset($menu[10]);
}

add_action('admin_menu', 'custom_menus');
