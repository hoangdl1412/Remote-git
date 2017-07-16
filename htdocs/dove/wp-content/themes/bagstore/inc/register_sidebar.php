<?php 
global $vela_default_sidebars, $vela_default_widgetareas;

$vela_default_sidebars = array(
						array(
							'name' => esc_html__( 'Home Sidebar', 'luca' ),
							'id' => 'home-sidebar',
							'description' => '',
							'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
							'after_widget' => '</section>',
							'before_title' => '<div class="widget-title-wrapper"><a class="block-control" href="javascript:void(0)"></a><h3 class="widget-title title_sub">',
							'after_title' => '</h3></div>',
						)
						,array(
							'name' => esc_html__( 'Blog Sidebar', 'luca' ),
							'id' => 'blog-sidebar',
							'description' => '',
							'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
							'after_widget' => '</section>',
							'before_title' => '<div class="widget-title-wrapper"><a class="block-control" href="javascript:void(0)"></a><h3 class="widget-title title_sub">',
							'after_title' => '</h3></div>',
						)
						,array(
							'name' => esc_html__( 'Blog Detail Sidebar', 'luca' ),
							'id' => 'blog-detail-sidebar',
							'description' => '',
							'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
							'after_widget' => '</section>',
							'before_title' => '<div class="widget-title-wrapper"><a class="block-control" href="javascript:void(0)"></a><h3 class="widget-title title_sub">',
							'after_title' => '</h3></div>',
						)
						,array(
							'name' => esc_html__( 'Product Category Sidebar', 'luca' ),
							'id' => 'product-category-sidebar',
							'description' => '',
							'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
							'after_widget' => '</section>',
							'before_title' => '<div class="widget-title-wrapper"><a class="block-control" href="javascript:void(0)"></a><h3 class="widget-title title_sub">',
							'after_title' => '</h3></div>',
						)
						,array(
							'name' => esc_html__( 'Product Category Top Content', 'luca' ),
							'id' => 'product-category-top-content',
							'description' => '',
							'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
							'after_widget' => '</section>',
							'before_title' => '<div class="widget-title-wrapper"><a class="block-control" href="javascript:void(0)"></a><h3 class="widget-title title_sub">',
							'after_title' => '</h3></div>',
						)
						,array(
							'name' => esc_html__( 'Product Detail Sidebar', 'luca' ),
							'id' => 'product-detail-sidebar',
							'description' => '',
							'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
							'after_widget' => '</section>',
							'before_title' => '<div class="widget-title-wrapper"><a class="block-control" href="javascript:void(0)"></a><h3 class="widget-title title_sub">',
							'after_title' => '</h3></div>',
						)
						,array(
							'name'          => __( 'Product Detail Social Icon', 'bagstore' ),
                                                        'id'            => 'product-detail-social-icon',
                                                        'before_widget' => '<div id="%1$s" class="widget %2$s">',
                                                        'after_widget' => '</div>',
                                                        'description'   => __( 'Add social icon in your product detail page.', 'bagstore' ),
						)
					);

$vela_default_widgetareas = array(
                                        array(
							'name'          => __( 'Footer Top', 'bagstore' ),
                                                        'id'            => 'footer-top',
                                                        'before_widget' => '<div id="%1$s" class="widget %2$s">',
                                                        'after_widget' => '</div>',
                                                        'description'   => __( 'Add widgets here to appear in your footer.', 'bagstore' ),
					)
					,array(
							'name'          => __( 'Footer Middle', 'bagstore' ),
                                                        'id'            => 'footer-middle',
                                                        'before_widget' => '<div id="%1$s" class="widget %2$s">',
                                                        'after_widget' => '</div>',
                                                        'description'   => __( 'Add widgets here to appear in your footer.', 'bagstore' ),
					)
					,array(
							'name'          => __( 'Footer Bottom', 'bagstore' ),
                                                        'id'            => 'footer-bottom',
                                                        'before_widget' => '<div id="%1$s" class="widget %2$s">',
                                                        'after_widget' => '</div>',
                                                        'description'   => __( 'Add widgets here to appear in your footer.', 'bagstore' ),
					)
				);
				
$custom_sidebars = vela_get_custom_sidebars();
if( is_array($custom_sidebars) && !empty($custom_sidebars) ){
	foreach( $custom_sidebars as $name ){
		$vela_default_sidebars[] = array(
							'name' => ''.$name.'',
							'id' => sanitize_title($name),
							'description' => '',
							'class'			=> 'vela-custom-sidebar',
							'before_widget' => '<section id="%1$s" class="widget-container %2$s">',
							'after_widget' => '</section>',
							'before_title' => '<div class="widget-title-wrapper"><a class="block-control" href="javascript:void(0)"></a><h3 class="widget-title title_sub">',
							'after_title' => '</h3></div>',
						);
	}
}
				
function vela_register_widget_area(){
	global $vela_default_sidebars, $vela_default_widgetareas;
	$default_sidebar = array_merge($vela_default_sidebars, $vela_default_widgetareas);
	foreach( $default_sidebar as $sidebar ){
		register_sidebar($sidebar);
	}
}
add_action( 'widgets_init', 'vela_register_widget_area' );
?>