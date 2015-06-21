<?php
if ( ! isset( $content_width ) )
$content_width = 605;

register_sidebar(array(
	'name' => __( 'Sidebar Widget Area', 'green_one'),
	'id' => 'sidebar-widget-area',
	'description' => __( 'The sidebar widget area', 'green_one'),
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));


register_nav_menus(
	array(
	  'primary' => __('Header Menu', 'green_one'),
	  'secondary' => __('Footer Menu', 'green_one')
	)
);

//Multi-level pages menu
function green_one_page_menu() {
	if (is_page()) { $highlight = "page_item"; } else {$highlight = "menu-item current-menu-item"; }
	echo '<ul class="menu">';
	wp_list_pages('sort_column=menu_order&title_li=&link_before=&link_after=&depth=3');
	echo '</ul>';
}

//Single-level pages menu
function green_one_page_menu_flat() {
	if (is_page()) { $highlight = "page_item"; } else {$highlight = "menu-item current-menu-item"; }
	echo '<ul class="menu">';
	wp_list_pages('sort_column=menu_order&title_li=&link_before=&link_after=&depth=1');
	echo '</ul>';
}


add_editor_style();
add_theme_support('automatic-feed-links');
add_theme_support('post-thumbnails');

set_post_thumbnail_size( 120, 120, true ); // Default size

// Make theme available for translation
// Translations can be filed in the /languages/ directory
load_theme_textdomain('green_one', get_template_directory() . '/languages');




?>