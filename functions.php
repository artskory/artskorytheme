<?php

// Metabox
require('metas/functions.php');

// Register Custom Navigation Walker
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

// Register Custom Navigation Walker
register_nav_menus( array(
    'primary' => __( 'Menu principal', 'artskory' ),
) );

// Customize
require('metas/customize.php');

// Image à la une
add_theme_support('post-thumbnails');

// Image à la une dans les flux RSS
function wpc_rss_miniature($excerpt) {
global $post;

$content = '<p>' . get_the_post_thumbnail($post->ID) .
'</p>' . get_the_excerpt();

return $content;
}
add_filter('the_excerpt_rss', 'wpc_rss_miniature');
add_filter('the_content_feed', 'wpc_rss_miniature');

// Couleur des articles dans l’admin en fonction de leur statut
function color_css_post_status() {
?>
<style>
    .status-draft{background: #B6FF76 !important;}
    .status-future{background: #FF925C !important;}
    .status-pending{background: #92E0FF !important;}
    .status-private{background:#FF5572 !important;}
    .status-publish{background:#3EC9FF !important;}
</style>
<?php
}
add_action('admin_print_styles-edit.php','color_css_post_status');

// Custom login logo
function my_custom_login_logo() {
 echo '<style type="text/css">
 h1 a {background-image:url('.get_bloginfo('template_directory').'/images/logo-artskory.svg)!important;
 -webkit-background-size:inherit!important;
 background-size:inherit!important;
 width:inherit!important;}

 body {height: 100%;
    width: 100%;
    margin: auto;
    background: url('.get_bloginfo('template_directory').'/img/admin.jpg) no-repeat 50% 50%;
    display: table;
    top: 0;
    background-size: cover;}
 </style>';
}
add_action('login_head', 'my_custom_login_logo');

function my_login_logo_url() {
 return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
 return 'Logo mariage';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

// Zone de widget
function footer_widgets_init() {
    register_sidebar(array(
        'name' => 'Widget zone',
        'id' => 'widget-text-area',
        'before_widget' => '<div class="nwa-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="nwa-title">',
        'after_title' => '</h3>',
    ));
}

add_action( 'widgets_init', 'footer_widgets_init' );

// Champ de rencherche menu
add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);

function add_search_form($items, $args) {

if( $args->theme_location == 'secondary' )

$items .= '

<li class="search">

<form role="search" method="get" id="searchform" action="'.home_url( '/' ).'"><input type="text" autocomplete="off" placeholder="Rechercher..."  name="s" id="s" /><button type="submit" title="Rechercher sur le site"><i class="ak ak-search"></i></button></form>

</li>

';

return $items;
}

// Format d’image perssonalisé
function artskory_new_image(){

// L'image sera tronquée exactement à la dimension indiquée
add_image_size( 'artskory_thumbnail_footer', 65, 55, true );

}
add_action( 'after_setup_theme', 'artskory_new_image' );

// Editor-style
add_action('admin_init', 'editor_style');

function editor_style(){
    add_editor_style('css/editor-style.min.css');
}

// Sidebar références
if(function_exists('register_sidebar'))
    register_sidebar(array(
        'name'=>'Références',
        'before_widget'=>'<li id="%1$s" class="widget %2$s">',
        'after_widget'=>'</li>',
    ));

wp_enqueue_script( 'maps', get_template_directory_uri() . '/js/maps.js' );

//Categories
function category_list() {
    $cat_names = wp_list_pluck( get_the_category(), 'cat_name');
    echo wp_sprintf_l( '%l', $cat_names );
}
?>
