<?php
$options = array();
global $ftc_default_sidebars;
$sidebar_options = array();
foreach( $ftc_default_sidebars as $key => $_sidebar ){
	$sidebar_options[$_sidebar['id']] = $_sidebar['name'];
}

/* Get list menus */
$menus = array('0' => esc_html__('Default', 'daniel'));
$nav_terms = get_terms( 'nav_menu', array( 'hide_empty' => true ) );
if( is_array($nav_terms) ){
	foreach( $nav_terms as $term ){
		$menus[$term->term_id] = $term->name;
	}
}

$options[] = array(
				'id'		=> 'page_layout_heading'
				,'label'	=> esc_html__('Page Layout', 'daniel')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);

$options[] = array(
				'id'		=> 'layout_style'
				,'label'	=> esc_html__('Layout Style', 'daniel')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'default'  	=> esc_html__('Default', 'daniel')
									,'boxed' 	=> esc_html__('Boxed', 'daniel')
									,'wide' 	=> esc_html__('Wide', 'daniel')
								)
			);
			
$options[] = array(
				'id'		=> 'page_layout'
				,'label'	=> esc_html__('Page Layout', 'daniel')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'0-1-0'  => esc_html__('Fullwidth', 'daniel')
									,'1-1-0' => esc_html__('Left Sidebar', 'daniel')
									,'0-1-1' => esc_html__('Right Sidebar', 'daniel')
									,'1-1-1' => esc_html__('Left & Right Sidebar', 'daniel')
								)
			);
			
$options[] = array(
				'id'		=> 'left_sidebar'
				,'label'	=> esc_html__('Left Sidebar', 'daniel')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);

$options[] = array(
				'id'		=> 'right_sidebar'
				,'label'	=> esc_html__('Right Sidebar', 'daniel')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);
			
$options[] = array(
				'id'		=> 'left_right_padding'
				,'label'	=> esc_html__('Left Right Padding', 'daniel')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'daniel')
								,'0'	=> esc_html__('No', 'daniel')
								)
				,'default'	=> '0'
			);
			
$options[] = array(
				'id'		=> 'full_page'
				,'label'	=> esc_html__('Full Page', 'daniel')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'daniel')
								,'0'	=> esc_html__('No', 'daniel')
								)
				,'default'	=> '0'
			);
			
$options[] = array(
				'id'		=> 'header_breadcrumb_heading'
				,'label'	=> esc_html__('Header - Breadcrumb', 'daniel')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);
			
$options[] = array(
				'id'		=> 'header_layout'
				,'label'	=> esc_html__('Header Layout', 'daniel')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'default'  	=> esc_html__('Default', 'daniel')
									,'v1'  		=> esc_html__('Header Layout 1', 'daniel')
									,'v2' 		=> esc_html__('Header Layout 2', 'daniel')
									,'v3' 		=> esc_html__('Header Layout 3', 'daniel')
									,'v4' 		=> esc_html__('Header Layout 4', 'daniel')
									,'v5' 		=> esc_html__('Header Layout 5', 'daniel')
									,'v6' 		=> esc_html__('Header Layout 6', 'daniel')
									,'v7' 		=> esc_html__('Header Layout 7', 'daniel')
									,'v8' 		=> esc_html__('Header Layout 8', 'daniel')
								)
			);
			
$options[] = array(
				'id'		=> 'header_transparent'
				,'label'	=> esc_html__('Transparent Header', 'daniel')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'daniel')
								,'0'	=> esc_html__('No', 'daniel')
								)
				,'default'	=> '0'
			);
			
$options[] = array(
				'id'		=> 'header_text_color'
				,'label'	=> esc_html__('Header Text Color', 'daniel')
				,'desc'		=> esc_html__('Only available on transparent header', 'daniel')
				,'type'		=> 'select'
				,'options'	=> array(
								'default'	=> esc_html__('Default', 'daniel')
								,'light'	=> esc_html__('Light', 'daniel')
								)
			);

$options[] = array(
				'id'		=> 'menu_id'
				,'label'	=> esc_html__('Primary Menu', 'daniel')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $menus
			);
			
$options[] = array(
				'id'		=> 'show_page_title'
				,'label'	=> esc_html__('Show Page Title', 'daniel')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'daniel')
								,'0'	=> esc_html__('No', 'daniel')
								)
			);
			
$options[] = array(
				'id'		=> 'show_breadcrumb'
				,'label'	=> esc_html__('Show Breadcrumb', 'daniel')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> esc_html__('Yes', 'daniel')
								,'0'	=> esc_html__('No', 'daniel')
								)
			);
			
$options[] = array(
				'id'		=> 'breadcrumb_layout'
				,'label'	=> esc_html__('Breadcrumb Layout', 'daniel')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'default'  	=> esc_html__('Default', 'daniel')
									,'v1'  		=> esc_html__('Breadcrumb Layout 1', 'daniel')
									,'v2' 		=> esc_html__('Breadcrumb Layout 2', 'daniel')
									,'v3' 		=> esc_html__('Breadcrumb Layout 3', 'daniel')
								)
			);
			
$options[] = array(
				'id'		=> 'breadcrumb_bg_parallax'
				,'label'	=> esc_html__('Breadcrumb Background Parallax', 'daniel')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'default'  	=> esc_html__('Default', 'daniel')
								,'1'		=> esc_html__('Yes', 'daniel')
								,'0'		=> esc_html__('No', 'daniel')
								)
			);
			
$options[] = array(
				'id'		=> 'bg_breadcrumbs'
				,'label'	=> esc_html__('Breadcrumb Background Image', 'daniel')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);	
			
$options[] = array(
				'id'		=> 'logo'
				,'label'	=> esc_html__('Logo', 'daniel')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);
			
$options[] = array(
				'id'		=> 'logo_mobile'
				,'label'	=> esc_html__('Mobile Logo', 'daniel')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);
			
$options[] = array(
				'id'		=> 'logo_sticky'
				,'label'	=> esc_html__('Sticky Logo', 'daniel')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);


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
				,'label'	=> esc_html__('Page Footer', 'daniel')
				,'desc'		=> esc_html__('You also need to add the Daniel - Footer widget into Footer widget', 'daniel')
				,'type'		=> 'heading'
			);

	$options[] = array(
			'id'		=> 'footer_center'
			,'label'	=> esc_html__('Footer Center', 'daniel')
			,'desc'		=> ''
			,'type'		=> 'select'
			,'options'	=> $footer_blocks
		);
		
	$options[] = array(
			'id'		=> 'footer_bottom'
			,'label'	=> esc_html__('Footer Bottom', 'daniel')
			,'desc'		=> ''
			,'type'		=> 'select'
			,'options'	=> $footer_blocks
		);
}
?>