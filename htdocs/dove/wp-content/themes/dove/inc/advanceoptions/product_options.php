<?php 
$options = array();
global $ftc_default_sidebars;
$sidebar_options = array(
				'0'	=> esc_html__('Default', 'dove')
				);
foreach( $ftc_default_sidebars as $key => $_sidebar ){
	$sidebar_options[$_sidebar['id']] = $_sidebar['name'];
}

$options[] = array(
				'id'		=> 'prod_layout_heading'
				,'label'	=> esc_html__('Product Layout', 'dove')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);
			
$options[] = array(
				'id'		=> 'prod_layout'
				,'label'	=> esc_html__('Product Layout', 'dove')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'0'			=> esc_html__('Default', 'dove')
									,'0-1-0'  	=> esc_html__('Fullwidth', 'dove')
									,'1-1-0' 	=> esc_html__('Left Sidebar', 'dove')
									,'0-1-1' 	=> esc_html__('Right Sidebar', 'dove')
									,'1-1-1' 	=> esc_html__('Left & Right Sidebar', 'dove')
								)
			);
			
$options[] = array(
				'id'		=> 'prod_left_sidebar'
				,'label'	=> esc_html__('Left Sidebar', 'dove')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);
			
$options[] = array(
				'id'		=> 'prod_right_sidebar'
				,'label'	=> esc_html__('Right Sidebar', 'dove')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> $sidebar_options
			);

$options[] = array(
				'id'		=> 'prod_custom_tab_heading'
				,'label'	=> esc_html__('Custom Tab', 'dove')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);
			
$options[] = array(
				'id'		=> 'prod_custom_tab'
				,'label'	=> esc_html__('Custom Tab', 'dove')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
									'0'		=> esc_html__('Default', 'dove')
									,'1'	=> esc_html__('Override', 'dove')
								)
			);
			
$options[] = array(
				'id'		=> 'prod_custom_tab_title'
				,'label'	=> esc_html__('Custom Tab Title', 'dove')
				,'desc'		=> ''
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'prod_custom_tab_content'
				,'label'	=> esc_html__('Custom Tab Content', 'dove')
				,'desc'		=> ''
				,'type'		=> 'textarea'
			);
			
$options[] = array(
				'id'		=> 'prod_breadcrumb_heading'
				,'label'	=> esc_html__('Breadcrumbs', 'dove')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);

$options[] = array(
				'id'		=> 'bg_breadcrumbs'
				,'label'	=> esc_html__('Breadcrumb Background Image', 'dove')
				,'desc'		=> ''
				,'type'		=> 'upload'
			);
			
$options[] = array(
				'id'		=> 'prod_video_heading'
				,'label'	=> esc_html__('Video', 'dove')
				,'desc'		=> ''
				,'type'		=> 'heading'
			);

$options[] = array(
				'id'		=> 'prod_video_url'
				,'label'	=> esc_html__('Video URL', 'dove')
				,'desc'		=> esc_html__('Enter Youtube or Vimeo video URL', 'dove')
				,'type'		=> 'text'
			);		
?>