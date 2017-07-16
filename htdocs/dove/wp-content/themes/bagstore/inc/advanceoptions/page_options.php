<?php
$options = array();
global $vela_default_sidebars;
$sidebar_options = array();
foreach( $vela_default_sidebars as $key => $_sidebar ){
	$sidebar_options[$_sidebar['id']] = $_sidebar['name'];
}

/* Get list menus */
$menus = array('0' => esc_html__('Default', 'bagstore'));
$nav_terms = get_terms( 'nav_menu', array( 'hide_empty' => true ) );
if( is_array($nav_terms) ){
	foreach( $nav_terms as $term ){
		$menus[$term->term_id] = $term->name;
	}
}

$options[] = array(
				'id'		=> 'page_layout_heading'
				,'label'	=> esc_html__('Page Layout', 'bagstore')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);

$options[] = array(
				'id'		=> 'layout_style'
				,'label'	=> esc_html__('Layout Style', 'bagstore')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'default'  	=> esc_html__('Default', 'bagstore')
									,'boxed' 	=> esc_html__('Boxed', 'bagstore')
									,'wide' 	=> esc_html__('Wide', 'bagstore')
								)
			);
			
$options[] = array(
				'id'		=> 'page_layout'
				,'label'	=> esc_html__('Page Layout', 'bagstore')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'0-1-0'  => esc_html__('Fullwidth', 'bagstore')
									,'1-1-0' => esc_html__('Left Sidebar', 'bagstore')
									,'0-1-1' => esc_html__('Right Sidebar', 'bagstore')
									,'1-1-1' => esc_html__('Left & Right Sidebar', 'bagstore')
								)
			);
			
$options[] = array(
				'id'		=> 'left_sidebar'
				,'label'	=> esc_html__('Left Sidebar', 'bagstore')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);

$options[] = array(
				'id'		=> 'right_sidebar'
				,'label'	=> esc_html__('Right Sidebar', 'bagstore')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);
			
$options[] = array(
				'id'		=> 'left_right_padding'
				,'label'	=> esc_html__('Left Right Padding', 'bagstore')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'bagstore')
								,'0'	=> esc_html__('No', 'bagstore')
								)
				,'default'	=> '0'
			);
			
$options[] = array(
				'id'		=> 'full_page'
				,'label'	=> esc_html__('Full Page', 'bagstore')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'bagstore')
								,'0'	=> esc_html__('No', 'bagstore')
								)
				,'default'	=> '0'
			);
			
$options[] = array(
				'id'		=> 'header_breadcrumb_heading'
				,'label'	=> esc_html__('Header - Breadcrumb', 'bagstore')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);
			
$options[] = array(
				'id'		=> 'header_layout'
				,'label'	=> esc_html__('Header Layout', 'bagstore')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'default'  	=> esc_html__('Default', 'bagstore')
									,'v1'  		=> esc_html__('Header Layout 1', 'bagstore')
									,'v2' 		=> esc_html__('Header Layout 2', 'bagstore')
									,'v3' 		=> esc_html__('Header Layout 3', 'bagstore')
									,'v4' 		=> esc_html__('Header Layout 4', 'bagstore')
									,'v5' 		=> esc_html__('Header Layout 5', 'bagstore')
									,'v6' 		=> esc_html__('Header Layout 6', 'bagstore')
									,'v7' 		=> esc_html__('Header Layout 7', 'bagstore')
									,'v8' 		=> esc_html__('Header Layout 8', 'bagstore')
								)
			);
			
$options[] = array(
				'id'		=> 'header_transparent'
				,'label'	=> esc_html__('Transparent Header', 'bagstore')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'bagstore')
								,'0'	=> esc_html__('No', 'bagstore')
								)
				,'default'	=> '0'
			);
			
$options[] = array(
				'id'		=> 'header_text_color'
				,'label'	=> esc_html__('Header Text Color', 'bagstore')
				,'desc'		=> esc_html__('Only available on transparent header', 'bagstore')
				,'type'		=> 'select'
				,'options'	=> array(
								'default'	=> esc_html__('Default', 'bagstore')
								,'light'	=> esc_html__('Light', 'bagstore')
								)
			);

$options[] = array(
				'id'		=> 'menu_id'
				,'label'	=> esc_html__('Primary Menu', 'bagstore')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $menus
			);
			
$options[] = array(
				'id'		=> 'show_page_title'
				,'label'	=> esc_html__('Show Page Title', 'bagstore')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'bagstore')
								,'0'	=> esc_html__('No', 'bagstore')
								)
			);
			
$options[] = array(
				'id'		=> 'show_breadcrumb'
				,'label'	=> esc_html__('Show Breadcrumb', 'bagstore')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'bagstore')
								,'0'	=> esc_html__('No', 'bagstore')
								)
			);
			
$options[] = array(
				'id'		=> 'breadcrumb_layout'
				,'label'	=> esc_html__('Breadcrumb Layout', 'bagstore')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'default'  	=> esc_html__('Default', 'bagstore')
									,'v1'  		=> esc_html__('Breadcrumb Layout 1', 'bagstore')
									,'v2' 		=> esc_html__('Breadcrumb Layout 2', 'bagstore')
									,'v3' 		=> esc_html__('Breadcrumb Layout 3', 'bagstore')
								)
			);
			
$options[] = array(
				'id'		=> 'breadcrumb_bg_parallax'
				,'label'	=> esc_html__('Breadcrumb Background Parallax', 'bagstore')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'default'  	=> esc_html__('Default', 'bagstore')
								,'1'		=> esc_html__('Yes', 'bagstore')
								,'0'		=> esc_html__('No', 'bagstore')
								)
			);
			
$options[] = array(
				'id'		=> 'bg_breadcrumbs'
				,'label'	=> esc_html__('Breadcrumb Background Image', 'bagstore')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);	
			
$options[] = array(
				'id'		=> 'logo'
				,'label'	=> esc_html__('Logo', 'bagstore')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);
			
$options[] = array(
				'id'		=> 'logo_mobile'
				,'label'	=> esc_html__('Mobile Logo', 'bagstore')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);
			
$options[] = array(
				'id'		=> 'logo_sticky'
				,'label'	=> esc_html__('Sticky Logo', 'bagstore')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);

$options[] = array(
				'id'		=> 'page_slider_heading'
				,'label'	=> esc_html__('Page Slider', 'bagstore')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);			
			
$revolution_exists = class_exists('RevSliderSlider');

$page_sliders = array();
$page_sliders[0] = esc_html__('No Slider', 'bagstore');
if( $revolution_exists ){
	$page_sliders['revslider']	= esc_html__('Revolution Slider', 'bagstore');
}

$options[] = array(
				'id'		=> 'page_slider'
				,'label'	=> esc_html__('Page Slider', 'bagstore')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $page_sliders
			);
			
$options[] = array(
				'id'		=> 'page_slider_position'
				,'label'	=> esc_html__('Page Slider Position', 'bagstore')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
							'before_header'			=> esc_html__('Before Header', 'bagstore')
							,'before_main_content'	=> esc_html__('Before Main Content', 'bagstore')
							)
				,'default'	=> 'before_main_content'
			);

if( $revolution_exists ){
	global $wpdb;
	$revsliders = array();
	$revsliders[0] = esc_html__('Select a slider', 'bagstore');
	$sliders = $wpdb->get_results('SELECT * FROM '.$wpdb->prefix.'revslider_sliders');
	if( $sliders ) {
		foreach( $sliders as $slider ) {
			$revsliders[$slider->id] = $slider->title;
		}
	}
				
	$options[] = array(
					'id'		=> 'rev_slider'
					,'label'	=> esc_html__('Select Revolution Slider', 'bagstore')
					,'desc'		=> ''
					,'type'		=> 'select'
					,'options'	=> $revsliders
				);
}

if( !class_exists('Vela_Demo') ){			
	$footer_blocks = array('0' => '');
	
	$args = array(
		'post_type'			=> 'vela_footer'
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
				,'label'	=> esc_html__('Page Footer', 'bagstore')
				,'desc'		=> esc_html__('You also need to add the bagstore - Footer widget into Footer widget', 'bagstore')
				,'type'		=> 'heading'
			);

	$options[] = array(
			'id'		=> 'footer_center'
			,'label'	=> esc_html__('Footer Center', 'bagstore')
			,'desc'		=> ''
			,'type'		=> 'select'
			,'options'	=> $footer_blocks
		);
		
	$options[] = array(
			'id'		=> 'footer_bottom'
			,'label'	=> esc_html__('Footer Bottom', 'bagstore')
			,'desc'		=> ''
			,'type'		=> 'select'
			,'options'	=> $footer_blocks
		);
}
?>