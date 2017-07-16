<?php
$options = array();
global $ftc_default_sidebars;
$sidebar_options = array();
foreach( $ftc_default_sidebars as $key => $_sidebar ){
	$sidebar_options[$_sidebar['id']] = $_sidebar['name'];
}

/* Get list menus */
$menus = array('0' => esc_html__('Default', 'dove'));
$nav_terms = get_terms( 'nav_menu', array( 'hide_empty' => true ) );
if( is_array($nav_terms) ){
	foreach( $nav_terms as $term ){
		$menus[$term->term_id] = $term->name;
	}
}

$options[] = array(
				'id'		=> 'page_layout_heading'
				,'label'	=> esc_html__('Page Layout', 'dove')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);

$options[] = array(
				'id'		=> 'layout_style'
				,'label'	=> esc_html__('Layout Style', 'dove')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'default'  	=> esc_html__('Default', 'dove')
									,'boxed' 	=> esc_html__('Boxed', 'dove')
									,'wide' 	=> esc_html__('Wide', 'dove')
								)
			);
			
$options[] = array(
				'id'		=> 'page_layout'
				,'label'	=> esc_html__('Page Layout', 'dove')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'0-1-0'  => esc_html__('Fullwidth', 'dove')
									,'1-1-0' => esc_html__('Left Sidebar', 'dove')
									,'0-1-1' => esc_html__('Right Sidebar', 'dove')
									,'1-1-1' => esc_html__('Left & Right Sidebar', 'dove')
								)
			);
			
$options[] = array(
				'id'		=> 'left_sidebar'
				,'label'	=> esc_html__('Left Sidebar', 'dove')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);

$options[] = array(
				'id'		=> 'right_sidebar'
				,'label'	=> esc_html__('Right Sidebar', 'dove')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);
			
$options[] = array(
				'id'		=> 'left_right_padding'
				,'label'	=> esc_html__('Left Right Padding', 'dove')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'dove')
								,'0'	=> esc_html__('No', 'dove')
								)
				,'default'	=> '0'
			);
			
$options[] = array(
				'id'		=> 'full_page'
				,'label'	=> esc_html__('Full Page', 'dove')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'dove')
								,'0'	=> esc_html__('No', 'dove')
								)
				,'default'	=> '0'
			);
			
$options[] = array(
				'id'		=> 'header_breadcrumb_heading'
				,'label'	=> esc_html__('Header - Breadcrumb', 'dove')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);
			
$options[] = array(
				'id'		=> 'header_layout'
				,'label'	=> esc_html__('Header Layout', 'dove')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'default'  	=> esc_html__('Default', 'dove')
									,'v1'  		=> esc_html__('Header Layout 1', 'dove')
									,'v2' 		=> esc_html__('Header Layout 2', 'dove')
									,'v3' 		=> esc_html__('Header Layout 3', 'dove')
									,'v4' 		=> esc_html__('Header Layout 4', 'dove')
									,'v5' 		=> esc_html__('Header Layout 5', 'dove')
									,'v6' 		=> esc_html__('Header Layout 6', 'dove')
									,'v7' 		=> esc_html__('Header Layout 7', 'dove')
									,'v8' 		=> esc_html__('Header Layout 8', 'dove')
								)
			);
			
$options[] = array(
				'id'		=> 'header_transparent'
				,'label'	=> esc_html__('Transparent Header', 'dove')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'dove')
								,'0'	=> esc_html__('No', 'dove')
								)
				,'default'	=> '0'
			);
			
$options[] = array(
				'id'		=> 'header_text_color'
				,'label'	=> esc_html__('Header Text Color', 'dove')
				,'desc'		=> esc_html__('Only available on transparent header', 'dove')
				,'type'		=> 'select'
				,'options'	=> array(
								'default'	=> esc_html__('Default', 'dove')
								,'light'	=> esc_html__('Light', 'dove')
								)
			);

$options[] = array(
				'id'		=> 'menu_id'
				,'label'	=> esc_html__('Primary Menu', 'dove')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $menus
			);
			
$options[] = array(
				'id'		=> 'show_page_title'
				,'label'	=> esc_html__('Show Page Title', 'dove')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'dove')
								,'0'	=> esc_html__('No', 'dove')
								)
			);
			
$options[] = array(
				'id'		=> 'show_breadcrumb'
				,'label'	=> esc_html__('Show Breadcrumb', 'dove')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'dove')
								,'0'	=> esc_html__('No', 'dove')
								)
			);
			
$options[] = array(
				'id'		=> 'breadcrumb_layout'
				,'label'	=> esc_html__('Breadcrumb Layout', 'dove')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'default'  	=> esc_html__('Default', 'dove')
									,'v1'  		=> esc_html__('Breadcrumb Layout 1', 'dove')
									,'v2' 		=> esc_html__('Breadcrumb Layout 2', 'dove')
									,'v3' 		=> esc_html__('Breadcrumb Layout 3', 'dove')
								)
			);
			
$options[] = array(
				'id'		=> 'breadcrumb_bg_parallax'
				,'label'	=> esc_html__('Breadcrumb Background Parallax', 'dove')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'default'  	=> esc_html__('Default', 'dove')
								,'1'		=> esc_html__('Yes', 'dove')
								,'0'		=> esc_html__('No', 'dove')
								)
			);
			
$options[] = array(
				'id'		=> 'bg_breadcrumbs'
				,'label'	=> esc_html__('Breadcrumb Background Image', 'dove')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);	
			
$options[] = array(
				'id'		=> 'logo'
				,'label'	=> esc_html__('Logo', 'dove')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);
			
$options[] = array(
				'id'		=> 'logo_mobile'
				,'label'	=> esc_html__('Mobile Logo', 'dove')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);
			
$options[] = array(
				'id'		=> 'logo_sticky'
				,'label'	=> esc_html__('Sticky Logo', 'dove')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);

$options[] = array(
				'id'		=> 'page_slider_heading'
				,'label'	=> esc_html__('Page Slider', 'dove')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);			
			
$revolution_exists = class_exists('RevSliderSlider');

$page_sliders = array();
$page_sliders[0] = esc_html__('No Slider', 'dove');
if( $revolution_exists ){
	$page_sliders['revslider']	= esc_html__('Revolution Slider', 'dove');
}

$options[] = array(
				'id'		=> 'page_slider'
				,'label'	=> esc_html__('Page Slider', 'dove')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $page_sliders
			);
			
$options[] = array(
				'id'		=> 'page_slider_position'
				,'label'	=> esc_html__('Page Slider Position', 'dove')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
							'before_header'			=> esc_html__('Before Header', 'dove')
							,'before_main_content'	=> esc_html__('Before Main Content', 'dove')
							)
				,'default'	=> 'before_main_content'
			);

if( $revolution_exists ){
	global $wpdb;
	$revsliders = array();
	$revsliders[0] = esc_html__('Select a slider', 'dove');
	$sliders = $wpdb->get_results('SELECT * FROM '.$wpdb->prefix.'revslider_sliders');
	if( $sliders ) {
		foreach( $sliders as $slider ) {
			$revsliders[$slider->id] = $slider->title;
		}
	}
				
	$options[] = array(
					'id'		=> 'rev_slider'
					,'label'	=> esc_html__('Select Revolution Slider', 'dove')
					,'desc'		=> ''
					,'type'		=> 'select'
					,'options'	=> $revsliders
				);
}

if( !class_exists('Ftc_Demo') ){			
	$footer_blocks = array('0' => '');
	
	$args = array(
		'post_type'			=> 'ftc_footer'
		,'post_status'	 	=> 'publish'
		,'posts_per_page' 	=> -1
	);
	
	$posts = new WP_Query($args);
	
	if( !empty( $posts->posts ) && is_array( $posts->posts ) ){
		foreach( $posts->posts as $p ){
			$footer_blocks[$p->ID] = $p->post_title;
		}
	}

	wp_reset_postdata();
	
	$options[] = array(
				'id'		=> 'page_footer_heading'
				,'label'	=> esc_html__('Page Footer', 'dove')
				,'desc'		=> esc_html__('You also need to add the dove - Footer widget into Footer widget', 'dove')
				,'type'		=> 'heading'
			);

	$options[] = array(
			'id'		=> 'footer_center'
			,'label'	=> esc_html__('Footer Center', 'dove')
			,'desc'		=> ''
			,'type'		=> 'select'
			,'options'	=> $footer_blocks
		);
		
	$options[] = array(
			'id'		=> 'footer_bottom'
			,'label'	=> esc_html__('Footer Bottom', 'dove')
			,'desc'		=> ''
			,'type'		=> 'select'
			,'options'	=> $footer_blocks
		);
}
?>