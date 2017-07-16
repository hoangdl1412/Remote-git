<?php 
global $ftc_default_sidebars, $ftc_default_widgetareas;

$ftc_default_sidebars = array(
	array(
		'name' => esc_html__( 'Home Sidebar', 'dove' ),
		'id' => 'home-sidebar',
		'description' => '',
		'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<div class="widget-title-wrapper"><a class="block-control" href="javascript:void(0)"></a><h3 class="widget-title title_sub">',
		'after_title' => '</h3></div>',
		)
	,array(
		'name' => esc_html__( 'Blog Sidebar', 'dove' ),
		'id' => 'blog-sidebar',
		'description' => '',
		'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<div class="widget-title-wrapper"><a class="block-control" href="javascript:void(0)"></a><h3 class="widget-title title_sub">',
		'after_title' => '</h3></div>',
		)
	,array(
		'name' => esc_html__( 'Blog Detail Sidebar', 'dove' ),
		'id' => 'blog-detail-sidebar',
		'description' => '',
		'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<div class="widget-title-wrapper"><a class="block-control" href="javascript:void(0)"></a><h3 class="widget-title title_sub">',
		'after_title' => '</h3></div>',
		)
	,array(
		'name' => esc_html__( 'Product Category Sidebar', 'dove' ),
		'id' => 'product-category-sidebar',
		'description' => '',
		'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<div class="widget-title-wrapper"><a class="block-control" href="javascript:void(0)"></a><h3 class="widget-title title_sub">',
		'after_title' => '</h3></div>',
		)
	,array(
		'name' => esc_html__( 'Product Category Top Content', 'dove' ),
		'id' => 'product-category-top-content',
		'description' => '',
		'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<div class="widget-title-wrapper"><a class="block-control" href="javascript:void(0)"></a><h3 class="widget-title title_sub">',
		'after_title' => '</h3></div>',
		)
	,array(
		'name' => esc_html__( 'Product Detail Sidebar', 'dove' ),
		'id' => 'product-detail-sidebar',
		'description' => '',
		'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<div class="widget-title-wrapper"><a class="block-control" href="javascript:void(0)"></a><h3 class="widget-title title_sub">',
		'after_title' => '</h3></div>',
		)
	,array(
		'name'          => __( 'Product Detail Social Icon', 'dove' ),
		'id'            => 'product-detail-social-icon',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'description'   => __( 'Add social icon in your product detail page.', 'dove' ),
		)
	);

$ftc_default_widgetareas = array(
	array(
		'name'          => __( 'Footer Top', 'dove' ),
		'id'            => 'footer-top',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'description'   => __( 'Add widgets here to appear in your footer.', 'dove' ),
		)
	,array(
		'name'          => __( 'Footer Middle', 'dove' ),
		'id'            => 'footer-middle',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'description'   => __( 'Add widgets here to appear in your footer.', 'dove' ),
		)
	,array(
		'name'          => __( 'Footer Bottom', 'dove' ),
		'id'            => 'footer-bottom',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'description'   => __( 'Add widgets here to appear in your footer.', 'dove' ),
		)
	);

$custom_sidebars = ftc_get_custom_sidebars();
if( is_array($custom_sidebars) && !empty($custom_sidebars) ){
	foreach( $custom_sidebars as $name ){
		$ftc_default_sidebars[] = array(
			'name' => ''.$name.'',
			'id' => sanitize_title($name),
			'description' => '',
			'class'			=> 'ftc-custom-sidebar',
			'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<div class="widget-title-wrapper"><a class="block-control" href="javascript:void(0)"></a><h3 class="widget-title title_sub">',
			'after_title' => '</h3></div>',
			);
	}
}

function ftc_register_widget_area(){
	global $ftc_default_sidebars, $ftc_default_widgetareas;
	$default_sidebar = array_merge($ftc_default_sidebars, $ftc_default_widgetareas);
	foreach( $default_sidebar as $sidebar ){
		register_sidebar($sidebar);
	}
}
add_action( 'widgets_init', 'ftc_register_widget_area' );
?>