<?php 
add_action( 'vc_before_init', 'ftc_integrate_with_vc' );
function ftc_integrate_with_vc() {
	
	if( !function_exists('vc_map') ){
		return;
	}

	/********************** Content Shortcodes ***************************/
	/*** FTC Features ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Feature', 'carna' ),
		'base' 		=> 'ftc_feature',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style', 'carna' )
				,'param_name' 	=> 'style'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Horizontal', 'carna')		=>  'feature-horizontal'
						,esc_html__('Vertical', 'carna')		=>  'image-feature'	
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Icon class', 'carna' )
				,'param_name' 	=> 'class_icon'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Use FontAwesome. Ex: fa-home', 'carna')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style icon', 'carna' )
				,'param_name' 	=> 'style_icon'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Default', 'carna')		=>  'icon-default'
						,esc_html__('Small', 'carna')			=>  'icon-small'	
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Image Thumbnail', 'carna' )
				,'param_name' 	=> 'img_id'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'dependency'  	=> array('element' => 'style', 'value' => array('image-feature'))
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Image Thumbnail URL', 'carna' )
				,'param_name' 	=> 'img_url'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Input external URL instead of image from library', 'carna')
				,'dependency' 	=> array('element' => 'style', 'value' => array('image-feature'))
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Feature title', 'carna' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textarea'
				,'heading' 		=> esc_html__( 'Short description', 'carna' )
				,'param_name' 	=> 'excerpt'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link', 'carna' )
				,'param_name' 	=> 'link'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'carna' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('New Window Tab', 'carna')	=>  '_blank'
						,esc_html__('Self', 'carna')			=>  '_self'	
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Extra class', 'carna' )
				,'param_name' 	=> 'extra_class'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Ex: feature-icon-blue, feature-icon-orange, feature-icon-green', 'carna')
			)
		)
	) );
	
	/*** FTC Blogs ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Blogs', 'carna' ),
		'base' 		=> 'ftc_blogs',
		'base' 		=> 'ftc_blogs',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'carna' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Layout', 'carna' )
				,'param_name' 	=> 'layout'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('Grid', 'carna')		=> 'grid'
							,esc_html__('Slider', 'carna')	=> 'slider'
							,esc_html__('Masonry', 'carna')	=> 'masonry'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Columns', 'carna' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> array(
							'1'				=> '1'
							,'2'			=> '2'
							,'3'			=> '3'
							,'4'			=> '4'
							)
				,'description' 	=> esc_html__( 'Number of Columns', 'carna' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'carna' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Posts', 'carna' )
			)
			,array(
				'type' 			=> 'ftc_category'
				,'heading' 		=> esc_html__( 'Categories', 'carna' )
				,'param_name' 	=> 'categories'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'class'		=> 'post_cat'
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order by', 'carna' )
				,'param_name' 	=> 'orderby'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('None', 'carna')		=> 'none'
						,esc_html__('ID', 'carna')		=> 'ID'
						,esc_html__('Date', 'carna')		=> 'date'
						,esc_html__('Name', 'carna')		=> 'name'
						,esc_html__('Title', 'carna')		=> 'title'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order', 'carna' )
				,'param_name' 	=> 'order'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Descending', 'carna')		=> 'DESC'
						,esc_html__('Ascending', 'carna')		=> 'ASC'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show post title', 'carna' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show thumbnail', 'carna' )
				,'param_name' 	=> 'show_thumbnail'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show author', 'carna' )
				,'param_name' 	=> 'show_author'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'carna')	=> 0
							,esc_html__('Yes', 'carna')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show comment', 'carna' )
				,'param_name' 	=> 'show_comment'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show date', 'carna' )
				,'param_name' 	=> 'show_date'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show post excerpt', 'carna' )
				,'param_name' 	=> 'show_excerpt'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show read more button', 'carna' )
				,'param_name' 	=> 'show_readmore'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number of words in excerpt', 'carna' )
				,'param_name' 	=> 'excerpt_words'
				,'admin_label' 	=> false
				,'value' 		=> '16'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show load more button', 'carna' )
				,'param_name' 	=> 'show_load_more'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'carna')	=> 0
							,esc_html__('Yes', 'carna')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Load more button text', 'carna' )
				,'param_name' 	=> 'load_more_text'
				,'admin_label' 	=> false
				,'value' 		=> 'Show more'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'carna' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'carna')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'carna' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'carna')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'carna' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> false
				,'value' 		=> '30'
				,'description' 	=> esc_html__('Set margin between items', 'carna')
				,'group'		=> esc_html__('Slider Options', 'carna')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Desktop small items', 'carna' )
				,'param_name' 	=> 'desksmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'carna')	=> 1
							,esc_html__('2', 'carna')	=> 2
                                                        ,esc_html__('3', 'carna')	=> 3
                                                        ,esc_html__('4', 'carna')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 991px', 'carna')
				,'group'		=> esc_html__('Responsive Options', 'carna')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet items', 'carna' )
				,'param_name' 	=> 'tablet_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'carna')	=> 1
							,esc_html__('2', 'carna')	=> 2
                                                        ,esc_html__('3', 'carna')	=> 3
                                                        ,esc_html__('4', 'carna')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 768px', 'carna')
				,'group'		=> esc_html__('Responsive Options', 'carna')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet mini items', 'carna' )
				,'param_name' 	=> 'tabletmini_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'carna')	=> 1
							,esc_html__('2', 'carna')	=> 2
                                                        ,esc_html__('3', 'carna')	=> 3
                                                        ,esc_html__('4', 'carna')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 640px', 'carna')
				,'group'		=> esc_html__('Responsive Options', 'carna')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile items', 'carna' )
				,'param_name' 	=> 'mobile_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'carna')	=> 1
							,esc_html__('2', 'carna')	=> 2
                                                        ,esc_html__('3', 'carna')	=> 3
                                                        ,esc_html__('4', 'carna')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 480px', 'carna')
				,'group'		=> esc_html__('Responsive Options', 'carna')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile small items', 'carna' )
				,'param_name' 	=> 'mobilesmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'carna')	=> 1
							,esc_html__('2', 'carna')	=> 2
                                                        ,esc_html__('3', 'carna')	=> 3
                                                        ,esc_html__('4', 'carna')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 0px', 'carna')
				,'group'		=> esc_html__('Responsive Options', 'carna')
			)
		)
	) );

	/*** FTC Button ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Button', 'carna' ),
		'base' 		=> 'ftc_button',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Text', 'carna' )
				,'param_name' 	=> 'content'
				,'admin_label' 	=> true
				,'value' 		=> 'Button text'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link', 'carna' )
				,'param_name' 	=> 'link'
				,'admin_label' 	=> true
				,'value' 		=> '#'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Text color', 'carna' )
				,'param_name' 	=> 'text_color'
				,'admin_label' 	=> false
				,'value' 		=> '#ffffff'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Text color hover', 'carna' )
				,'param_name' 	=> 'text_color_hover'
				,'admin_label' 	=> false
				,'value' 		=> '#ffffff'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Background color', 'carna' )
				,'param_name' 	=> 'bg_color'
				,'admin_label' 	=> false
				,'value' 		=> '#40bea7'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Background color hover', 'carna' )
				,'param_name' 	=> 'bg_color_hover'
				,'admin_label' 	=> false
				,'value' 		=> '#3f3f3f'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Border color', 'carna' )
				,'param_name' 	=> 'border_color'
				,'admin_label' 	=> false
				,'value' 		=> '#e8e8e8'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Border color hover', 'carna' )
				,'param_name' 	=> 'border_color_hover'
				,'admin_label' 	=> false
				,'value' 		=> '#40bea7'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Border width', 'carna' )
				,'param_name' 	=> 'border_width'
				,'admin_label' 	=> false
				,'value' 		=> '0'
				,'description' 	=> esc_html__('In pixels. Ex: 1', 'carna')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'carna' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Self', 'carna')				=> '_self'
						,esc_html__('New Window Tab', 'carna')	=> '_blank'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Size', 'carna' )
				,'param_name' 	=> 'size'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Small', 'carna')		=> 'small'
						,esc_html__('Medium', 'carna')	=> 'medium'
						,esc_html__('Large', 'carna')		=> 'large'
						,esc_html__('X-Large', 'carna')	=> 'x-large'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'iconpicker'
				,'heading' 		=> esc_html__( 'Font icon', 'carna' )
				,'param_name' 	=> 'font_icon'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'settings' 	=> array(
					'emptyIcon' 	=> true /* default true, display an "EMPTY" icon? */
					,'iconsPerPage' => 4000 /* default 100, how many icons per/page to display */
				)
				,'description' 	=> esc_html__('Add an icon before the text. Ex: fa-lock', 'carna')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show popup', 'carna' )
				,'param_name' 	=> 'popup'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('No', 'carna')	=> 0
							,esc_html__('Yes', 'carna')	=> 1
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Popup Options', 'carna')
			)
			,array(
				'type' 			=> 'textarea_raw_html'
				,'heading' 		=> esc_html__( 'Popup content', 'carna' )
				,'param_name' 	=> 'popup_content'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
				,'group'		=> esc_html__('Popup Options', 'carna')
			)
		)
	) );
	
	/*** FTC Single Image ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Single Image', 'carna' ),
		'base' 		=> 'ftc_single_image',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Image', 'carna' )
				,'param_name' 	=> 'img_id'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Image Size', 'carna' )
				,'param_name' 	=> 'img_size'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__( 'Ex: thumbnail, medium, large or full', 'carna' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Image URL', 'carna' )
				,'param_name' 	=> 'img_url'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Input external URL instead of image from library', 'carna')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link', 'carna' )
				,'param_name' 	=> 'link'
				,'admin_label' 	=> true
				,'value' 		=> '#'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link Title', 'carna' )
				,'param_name' 	=> 'link_title'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Hover Effect', 'carna' )
				,'param_name' 	=> 'style_smooth'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Effect-Image Left Right', 'carna')		=> 'smooth-image'
						,esc_html__('Effect Border Image', 'carna')				=> 'smooth-border-image'
						,esc_html__('Effect Background Image', 'carna')		=> 'smooth-background-image'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'carna' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('New Window Tab', 'carna')		=> '_blank'
						,esc_html__('Self', 'carna')				=> '_self'
						)
				,'description' 	=> ''
			)
		)
	) );
	
	/*** FTC Heading ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Heading', 'carna' ),
		'base' 		=> 'ftc_heading',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Heading style', 'carna' )
				,'param_name' 	=> 'style'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Style 1', 'carna')		=> 'style-1'
						,esc_html__('Style 2', 'carna')		=> 'style-2'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Heading Size', 'carna' )
				,'param_name' 	=> 'size'
				,'admin_label' 	=> true
				,'value' 		=> array(
						'1'				=> '1'
						,'2'			=> '2'
						,'3'			=> '3'
						,'4'			=> '4'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Text', 'carna' )
				,'param_name' 	=> 'text'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
		)
	) );
	
	/*** FTC Banner ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Banner', 'carna' ),
		'base' 		=> 'ftc_banner',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Background Image', 'carna' )
				,'param_name' 	=> 'bg_id'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Background Url', 'carna' )
				,'param_name' 	=> 'bg_url'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Input external URL instead of image from library', 'carna')
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Background Color', 'carna' )
				,'param_name' 	=> 'bg_color'
				,'admin_label' 	=> false
				,'value' 		=> '#ffffff'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textarea_html'
				,'heading' 		=> esc_html__( 'Banner content', 'carna' )
				,'param_name' 	=> 'content'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Position Banner Content', 'carna' )
				,'param_name' 	=> 'position_content'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Left Top', 'carna')			=>  'left-top'
						,esc_html__('Left Bottom', 'carna')		=>  'left-bottom'
						,esc_html__('Left Center', 'carna')		=>  'left-center'
						,esc_html__('Right Top', 'carna')			=>  'right-top'
						,esc_html__('Right Bottom', 'carna')		=>  'right-bottom'
						,esc_html__('Right Center', 'carna')		=>  'right-center'
						,esc_html__('Center Top', 'carna')		=>  'center-top'
						,esc_html__('Center Bottom', 'carna')		=>  'center-bottom'
						,esc_html__('Center Center', 'carna')		=>  'center-center'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link', 'carna' )
				,'param_name' 	=> 'link'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link Title', 'carna' )
				,'param_name' 	=> 'link_title'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style Effect', 'carna' )
				,'param_name' 	=> 'style_smooth'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Background Scale', 'carna')						=>  'ftc-smooth'
						,esc_html__('Background Scale Opacity', 'carna')				=>  'ftc-smooth-opacity'
						,esc_html__('Background Scale Dark', 'carna')					=>	'ftc-smooth-dark'
						,esc_html__('Background Scale and Line', 'carna')				=>  'ftc-smooth-and-line'
						,esc_html__('Background Scale Opacity and Line', 'carna')		=>  'ftc-smooth-opacity-line'
						,esc_html__('Background Scale Dark and Line', 'carna')		=>  'ftc-smooth-dark-line'
						,esc_html__('Background Opacity and Line', 'carna')			=>	'background-opacity-and-line'
						,esc_html__('Background Dark and Line', 'carna')				=>	'background-dark-and-line'
						,esc_html__('Background Opacity', 'carna')					=>	'background-opacity'
						,esc_html__('Background Dark', 'carna')						=>	'background-dark'
						,esc_html__('Line', 'carna')									=>	'eff-line'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Background Opacity On Device', 'carna' )
				,'param_name' 	=> 'opacity_bg_device'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('No', 'carna')			=>  0
						,esc_html__('Yes', 'carna')		=>  1
						)
				,'description' 	=> esc_html__('Background image will be blurred on device. Note: should set background color ', 'carna')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Responsive size', 'carna' )
				,'param_name' 	=> 'responsive_size'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Yes', 'carna')		=>  1
						,esc_html__('No', 'carna')		=>  0
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'carna' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('New Window Tab', 'carna')	=>  '_blank'
						,esc_html__('Self', 'carna')			=>  '_self'	
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Extra Class', 'carna' )
				,'param_name' 	=> 'extra_class'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> esc_html__('Ex: rp-rectangle-full, rp-rectangle', 'carna')
			)
		)
	) );
	
	/* FTC Testimonial */
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Testimonial', 'carna' ),
		'base' 		=> 'ftc_testimonial',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'ftc_category'
				,'heading' 		=> esc_html__( 'Categories', 'carna' )
				,'param_name' 	=> 'categories'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'class'		=> 'ftc_testimonial'
			)
			,array(
				'type' 			=> 'textarea'
				,'heading' 		=> esc_html__( 'Testimonial IDs', 'carna' )
				,'param_name' 	=> 'ids'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('A comma separated list of testimonial ids', 'carna')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show Avatar', 'carna' )
				,'param_name' 	=> 'show_avatar'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'carna' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> '4'
				,'description' 	=> esc_html__('Number of Posts', 'carna')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number of words in excerpt', 'carna' )
				,'param_name' 	=> 'excerpt_words'
				,'admin_label' 	=> true
				,'value' 		=> '50'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Text Color Style', 'carna' )
				,'param_name' 	=> 'text_color_style'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Default', 'carna')	=> 'text-default'
							,esc_html__('Light', 'carna')		=> 'text-light'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show in a carousel slider', 'carna' )
				,'param_name' 	=> 'is_slider'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'carna')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'carna' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> '3'
				,'group'		=> esc_html__('Slider Options', 'carna')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'carna' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'carna')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show pagination dots', 'carna' )
				,'param_name' 	=> 'show_dots'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'carna')	=> 0
							,esc_html__('Yes', 'carna')	=> 1
						)
				,'description' 	=> esc_html__('If it is set, the navigation buttons will be removed', 'carna')
				,'group'		=> esc_html__('Slider Options', 'carna')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'carna' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'carna')
			)
		)
	) );
	
	/*** FTC Brands Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Brands Slider', 'carna' ),
		'base' 		=> 'ftc_brands_slider',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'carna' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style Brand', 'carna' )
				,'param_name' 	=> 'style_brand'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('Default', 'carna')	=> 'style-default'
							,esc_html__('Light', 'carna')		=> 'style-light'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'carna' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> '7'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Rows', 'carna' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> true
				,'value' 		=> 1
				,'description' 	=> esc_html__( 'Number of Rows', 'carna' )
			)
			,array(
				'type' 			=> 'ftc_category'
				,'heading' 		=> esc_html__( 'Categories', 'carna' )
				,'param_name' 	=> 'categories'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'class'		=> 'ftc_brand'
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'carna' )
				,'param_name' 	=> 'margin_image'
				,'admin_label' 	=> false
				,'value' 		=> '32'
				,'description' 	=> esc_html__('Set margin between items', 'carna')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Activate link', 'carna' )
				,'param_name' 	=> 'active_link'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'carna' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'carna' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)

			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Desktop small items', 'carna' )
				,'param_name' 	=> 'desksmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'carna')	=> 1
							,esc_html__('2', 'carna')	=> 2
                                                        ,esc_html__('3', 'carna')	=> 3
                                                        ,esc_html__('4', 'carna')	=> 4
                                    ,esc_html__('5', 'carna')	=> 5
                                     ,esc_html__('6', 'carna')	=> 6
                                    
						)
				,'description' 	=> esc_html__('Set items on 991px', 'carna')
				,'group'		=> esc_html__('Responsive Options', 'carna')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet items', 'carna' )
				,'param_name' 	=> 'tablet_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'carna')	=> 1
							,esc_html__('2', 'carna')	=> 2
                                                        ,esc_html__('3', 'carna')	=> 3
                                                        ,esc_html__('4', 'carna')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 768px', 'carna')
				,'group'		=> esc_html__('Responsive Options', 'carna')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet mini items', 'carna' )
				,'param_name' 	=> 'tabletmini_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'carna')	=> 1
							,esc_html__('2', 'carna')	=> 2
                                                        ,esc_html__('3', 'carna')	=> 3
                                                        ,esc_html__('4', 'carna')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 640px', 'carna')
				,'group'		=> esc_html__('Responsive Options', 'carna')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile items', 'carna' )
				,'param_name' 	=> 'mobile_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'carna')	=> 1
							,esc_html__('2', 'carna')	=> 2
                                                        ,esc_html__('3', 'carna')	=> 3
                                                        ,esc_html__('4', 'carna')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 480px', 'carna')
				,'group'		=> esc_html__('Responsive Options', 'carna')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile small items', 'carna' )
				,'param_name' 	=> 'mobilesmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'carna')	=> 1
							,esc_html__('2', 'carna')	=> 2
                                                        ,esc_html__('3', 'carna')	=> 3
                                                        ,esc_html__('4', 'carna')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 0px', 'carna')
				,'group'		=> esc_html__('Responsive Options', 'carna')
			)
		)
	) );
	
	
	/*** FTC Google Map ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Google Map', 'carna' ),
		'base' 		=> 'ftc_google_map',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Address', 'carna' )
				,'param_name' 	=> 'address'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('You have to input your API Key in Appearance > Theme Options > General tab', 'carna')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Height', 'carna' )
				,'param_name' 	=> 'height'
				,'admin_label' 	=> true
				,'value' 		=> 360
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Zoom', 'carna' )
				,'param_name' 	=> 'zoom'
				,'admin_label' 	=> true
				,'value' 		=> 12
				,'description' 	=> esc_html__('Input a number between 0 and 22', 'carna')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Map Type', 'carna' )
				,'param_name' 	=> 'map_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
								esc_html__('ROADMAP', 'carna')		=> 'ROADMAP'
								,esc_html__('SATELLITE', 'carna')		=> 'SATELLITE'
								,esc_html__('HYBRID', 'carna')		=> 'HYBRID'
								,esc_html__('TERRAIN', 'carna')		=> 'TERRAIN'
							)
				,'description' 	=> ''
			)
		)
	) );
        
	/*** FTC Countdown ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Countdown', 'carna' ),
		'base' 		=> 'ftc_countdown',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Day', 'carna' )
				,'param_name' 	=> 'day'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Month', 'carna' )
				,'param_name' 	=> 'month'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Year', 'carna' )
				,'param_name' 	=> 'year'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Text Color Style', 'carna' )
				,'param_name' 	=> 'text_color_style'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Default', 'carna')	=> 'text-default'
							,esc_html__('Light', 'carna')		=> 'text-light'
						)
				,'description' 	=> ''
			)
		)
	) );
	
	/*** FTC Feedburner Subscription ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Feedburner Subscription', 'carna' ),
		'base' 		=> 'ftc_feedburner_subscription',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Feedburner ID', 'carna' )
				,'param_name' 	=> 'feedburner_id'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Title', 'carna' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> 'Newsletter'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Intro Text Line 1', 'carna' )
				,'param_name' 	=> 'intro_text'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Button Text', 'carna' )
				,'param_name' 	=> 'button_text'
				,'admin_label' 	=> true
				,'value' 		=> 'Subscribe'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Placeholder Text', 'carna' )
				,'param_name' 	=> 'placeholder_text'
				,'admin_label' 	=> true
				,'value' 		=> 'Enter your email address'
				,'description' 	=> ''
			)
		)
	) );

	/********************** FTC Product Shortcodes ************************/

	/*** FTC Products ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Products', 'carna' ),
		'base' 		=> 'ftc_products',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'carna' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'carna' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Recent', 'carna')		=> 'recent'
						,esc_html__('Sale', 'carna')		=> 'sale'
						,esc_html__('Featured', 'carna')	=> 'featured'
						,esc_html__('Best Selling', 'carna')	=> 'best_selling'
						,esc_html__('Top Rated', 'carna')	=> 'top_rated'
						,esc_html__('Mixed Order', 'carna')	=> 'mixed_order'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'carna' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Custom order', 'carna' )
				,'param_name' 	=> 'custom_order'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('No', 'carna')			=> 0
						,esc_html__('Yes', 'carna')		=> 1
						)
				,'description' 	=> esc_html__( 'If you enable this option, the Product type option wont be available', 'carna' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order by', 'carna' )
				,'param_name' 	=> 'orderby'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('None', 'carna')				=> 'none'
						,esc_html__('ID', 'carna')				=> 'ID'
						,esc_html__('Date', 'carna')				=> 'date'
						,esc_html__('Name', 'carna')				=> 'name'
						,esc_html__('Title', 'carna')				=> 'title'
						,esc_html__('Comment count', 'carna')		=> 'comment_count'
						,esc_html__('Random', 'carna')			=> 'rand'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order', 'carna' )
				,'param_name' 	=> 'order'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Descending', 'carna')		=> 'DESC'
						,esc_html__('Ascending', 'carna')		=> 'ASC'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'carna' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Columns', 'carna' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'carna' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Products', 'carna' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'carna' )
				,'param_name' 	=> 'product_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product IDs', 'carna' )
				,'param_name' 	=> 'ids'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('Enter product name or slug to search', 'carna')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Meta position', 'carna' )
				,'param_name' 	=> 'meta_position'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Bottom', 'carna')			=> 'bottom'
							,esc_html__('On Thumbnail', 'carna')	=> 'on-thumbnail'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'carna' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'carna' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product SKU', 'carna' )
				,'param_name' 	=> 'show_sku'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'carna')	=> 0
							,esc_html__('Yes', 'carna')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'carna' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product short description', 'carna' )
				,'param_name' 	=> 'show_short_desc'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'carna')	=> 0
							,esc_html__('Yes', 'carna')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'carna' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product label', 'carna' )
				,'param_name' 	=> 'show_label'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'carna' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'carna')	=> 0
							,esc_html__('Yes', 'carna')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show add to cart button', 'carna' )
				,'param_name' 	=> 'show_add_to_cart'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
		)
	) );

	/*** FTC Products Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Products Slider', 'carna' ),
		'base' 		=> 'ftc_products_slider',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'carna' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'carna' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Recent', 'carna')		=> 'recent'
						,esc_html__('Sale', 'carna')		=> 'sale'
						,esc_html__('Featured', 'carna')	=> 'featured'
						,esc_html__('Best Selling', 'carna')	=> 'best_selling'
						,esc_html__('Top Rated', 'carna')	=> 'top_rated'
						,esc_html__('Mixed Order', 'carna')	=> 'mixed_order'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'carna' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Custom order', 'carna' )
				,'param_name' 	=> 'custom_order'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('No', 'carna')			=> 0
						,esc_html__('Yes', 'carna')		=> 1
						)
				,'description' 	=> esc_html__( 'If you enable this option, the Product type option wont be available', 'carna' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order by', 'carna' )
				,'param_name' 	=> 'orderby'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('None', 'carna')				=> 'none'
						,esc_html__('ID', 'carna')				=> 'ID'
						,esc_html__('Date', 'carna')				=> 'date'
						,esc_html__('Name', 'carna')				=> 'name'
						,esc_html__('Title', 'carna')				=> 'title'
						,esc_html__('Comment count', 'carna')		=> 'comment_count'
						,esc_html__('Random', 'carna')			=> 'rand'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order', 'carna' )
				,'param_name' 	=> 'order'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Descending', 'carna')		=> 'DESC'
						,esc_html__('Ascending', 'carna')		=> 'ASC'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'carna' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Columns', 'carna' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Rows', 'carna' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> true
				,'value' 		=> 1
				,'description' 	=> esc_html__( 'Number of Rows', 'carna' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'carna' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 6
				,'description' 	=> esc_html__( 'Number of Products', 'carna' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'carna' )
				,'param_name' 	=> 'product_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Meta position', 'carna' )
				,'param_name' 	=> 'meta_position'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Bottom', 'carna')			=> 'bottom'
							,esc_html__('On Thumbnail', 'carna')	=> 'on-thumbnail'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'carna' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'carna' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product SKU', 'carna' )
				,'param_name' 	=> 'show_sku'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'carna')		=> 0
							,esc_html__('Yes', 'carna')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'carna' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product short description', 'carna' )
				,'param_name' 	=> 'show_short_desc'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'carna')		=> 0
							,esc_html__('Yes', 'carna')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'carna' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product label', 'carna' )
				,'param_name' 	=> 'show_label'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'carna' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'carna')		=> 0
							,esc_html__('Yes', 'carna')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show add to cart button', 'carna' )
				,'param_name' 	=> 'show_add_to_cart'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'carna' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Position navigation button', 'carna' )
				,'param_name' 	=> 'position_nav'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('Top', 'carna')		=> 'nav-top'
							,esc_html__('Bottom', 'carna')	=> 'nav-bottom'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'carna' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> false
				,'value' 		=> '20'
				,'description' 	=> esc_html__('Set margin between items', 'carna')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Desktop small items', 'carna' )
				,'param_name' 	=> 'desksmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'carna')	=> 1
							,esc_html__('2', 'carna')	=> 2
                                                        ,esc_html__('3', 'carna')	=> 3
                                                        ,esc_html__('4', 'carna')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 991px', 'carna')
				,'group'		=> esc_html__('Responsive Options', 'carna')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet items', 'carna' )
				,'param_name' 	=> 'tablet_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'carna')	=> 1
							,esc_html__('2', 'carna')	=> 2
                                                        ,esc_html__('3', 'carna')	=> 3
                                                        ,esc_html__('4', 'carna')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 768px', 'carna')
				,'group'		=> esc_html__('Responsive Options', 'carna')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet mini items', 'carna' )
				,'param_name' 	=> 'tabletmini_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'carna')	=> 1
							,esc_html__('2', 'carna')	=> 2
                                                        ,esc_html__('3', 'carna')	=> 3
                                                        ,esc_html__('4', 'carna')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 640px', 'carna')
				,'group'		=> esc_html__('Responsive Options', 'carna')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile items', 'carna' )
				,'param_name' 	=> 'mobile_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'carna')	=> 1
							,esc_html__('2', 'carna')	=> 2
                                                        ,esc_html__('3', 'carna')	=> 3
                                                        ,esc_html__('4', 'carna')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 480px', 'carna')
				,'group'		=> esc_html__('Responsive Options', 'carna')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile small items', 'carna' )
				,'param_name' 	=> 'mobilesmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'carna')	=> 1
							,esc_html__('2', 'carna')	=> 2
                                                        ,esc_html__('3', 'carna')	=> 3
                                                        ,esc_html__('4', 'carna')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 0px', 'carna')
				,'group'		=> esc_html__('Responsive Options', 'carna')
			)
		)
	) );
	
	/*** FTC Products Widget ***/
	vc_map( array(
		'name' 			=> esc_html__( 'FTC Products Widget', 'carna' ),
		'base' 			=> 'ftc_products_widget',
		'class' 		=> '',
		'description' 	=> '',
		'category' 		=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 		=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'carna' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'carna' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Recent', 'carna')		=> 'recent'
						,esc_html__('Sale', 'carna')		=> 'sale'
						,esc_html__('Featured', 'carna')	=> 'featured'
						,esc_html__('Best Selling', 'carna')	=> 'best_selling'
						,esc_html__('Top Rated', 'carna')	=> 'top_rated'
						,esc_html__('Mixed Order', 'carna')	=> 'mixed_order'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'carna' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'carna' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 6
				,'description' 	=> esc_html__( 'Number of Products', 'carna' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'carna' )
				,'param_name' 	=> 'product_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'carna' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Thumbnail size', 'carna' )
				,'param_name' 	=> 'thumbnail_size'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('shop_thumbnail', 'carna')		=> 'Product Thumbnails'
						,esc_html__('shop_catalog', 'carna')		=> 'Catalog Images'
						,esc_html__('shop_single', 'carna')	=> 'Single Product Image'
						)
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'carna' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'carna' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'carna' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'carna' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'carna')	=> 0
							,esc_html__('Yes', 'carna')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show in a carousel slider', 'carna' )
				,'param_name' 	=> 'is_slider'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('No', 'carna')	=> 0
							,esc_html__('Yes', 'carna')	=> 1
							)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'carna')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Row', 'carna' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> false
				,'value' 		=> 3
				,'description' 	=> esc_html__( 'Number of Rows for slider', 'carna' )
				,'group'		=> esc_html__('Slider Options', 'carna')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'carna' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'carna')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'carna' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'carna')
			)
		)
	) );
	
	/*** FTC Product Deals Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Product Deals Slider', 'carna' ),
		'base' 		=> 'ftc_product_deals_slider',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'carna' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'carna' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Recent', 'carna')		=> 'recent'
						,esc_html__('Featured', 'carna')	=> 'featured'
						,esc_html__('Best Selling', 'carna')	=> 'best_selling'
						,esc_html__('Top Rated', 'carna')	=> 'top_rated'
						,esc_html__('Mixed Order', 'carna')	=> 'mixed_order'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'carna' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Item Layout', 'carna' )
				,'param_name' 	=> 'layout'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('Grid', 'carna')		=> 'grid'
							,esc_html__('List', 'carna')		=> 'list'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'carna' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> false
				,'value' 		=> 4
				,'description' 	=> esc_html__( 'Number of Columns', 'carna' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'carna' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Products', 'carna' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'carna' )
				,'param_name' 	=> 'product_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show counter', 'carna' )
				,'param_name' 	=> 'show_counter'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Counter position', 'carna' )
				,'param_name' 	=> 'counter_position'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Bottom', 'carna')			=> 'bottom'
							,esc_html__('On thumbnail', 'carna')	=> 'on-thumbnail'
							)
				,'description' 	=> ''
				,'dependency' 	=> array('element' => 'show_counter', 'value' => array('1'))
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'carna' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show gallery list', 'carna' )
				,'param_name' 	=> 'show_gallery'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Gallery position', 'carna' )
				,'param_name' 	=> 'gallery_position'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Bottom out line', 'carna')	=> 'bottom-out'
							,esc_html__('Bottom in line', 'carna')	=> 'bottom-in'
							)
				,'description' 	=> ''
				,'dependency' 	=> array('element' => 'show_counter', 'value' => array('1'))
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'carna' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product SKU', 'carna' )
				,'param_name' 	=> 'show_sku'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'carna')		=> 0
							,esc_html__('Yes', 'carna')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'carna' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product short description', 'carna' )
				,'param_name' 	=> 'show_short_desc'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'carna')		=> 0
							,esc_html__('Yes', 'carna')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'carna' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product label', 'carna' )
				,'param_name' 	=> 'show_label'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'carna' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'carna')		=> 0
							,esc_html__('Yes', 'carna')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show add to cart button', 'carna' )
				,'param_name' 	=> 'show_add_to_cart'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'carna' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'carna' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'carna' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> false
				,'value' 		=> '20'
				,'description' 	=> esc_html__('Set margin between items', 'carna')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Desktop small items', 'carna' )
				,'param_name' 	=> 'desksmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'carna')	=> 1
							,esc_html__('2', 'carna')	=> 2
                                                        ,esc_html__('3', 'carna')	=> 3
                                                        ,esc_html__('4', 'carna')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 991px', 'carna')
				,'group'		=> esc_html__('Responsive Options', 'carna')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet items', 'carna' )
				,'param_name' 	=> 'tablet_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'carna')	=> 1
							,esc_html__('2', 'carna')	=> 2
                                                        ,esc_html__('3', 'carna')	=> 3
                                                        ,esc_html__('4', 'carna')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 768px', 'carna')
				,'group'		=> esc_html__('Responsive Options', 'carna')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet mini items', 'carna' )
				,'param_name' 	=> 'tabletmini_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'carna')	=> 1
							,esc_html__('2', 'carna')	=> 2
                                                        ,esc_html__('3', 'carna')	=> 3
                                                        ,esc_html__('4', 'carna')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 640px', 'carna')
				,'group'		=> esc_html__('Responsive Options', 'carna')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile items', 'carna' )
				,'param_name' 	=> 'mobile_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'carna')	=> 1
							,esc_html__('2', 'carna')	=> 2
                                                        ,esc_html__('3', 'carna')	=> 3
                                                        ,esc_html__('4', 'carna')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 480px', 'carna')
				,'group'		=> esc_html__('Responsive Options', 'carna')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile small items', 'carna' )
				,'param_name' 	=> 'mobilesmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'carna')	=> 1
							,esc_html__('2', 'carna')	=> 2
                                                        ,esc_html__('3', 'carna')	=> 3
                                                        ,esc_html__('4', 'carna')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 0px', 'carna')
				,'group'		=> esc_html__('Responsive Options', 'carna')
			)
		)
	) );
	
	/*** FTC Product Categories Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Product Categories Slider', 'carna' ),
		'base' 		=> 'ftc_product_categories_slider',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'carna' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'carna' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> 4
				,'description' 	=> esc_html__( 'Number of Columns', 'carna' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Rows', 'carna' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> true
				,'value' 		=> 1
				,'description' 	=> esc_html__( 'Number of Rows', 'carna' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'carna' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Product Categories', 'carna' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Parent', 'carna' )
				,'param_name' 	=> 'parent'
				,'admin_label' 	=> true
				,'settings' => array(
					'multiple' 			=> false
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'value' 		=> ''
				,'description' 	=> esc_html__( 'Select a category. Get direct children of this category', 'carna' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Child Of', 'carna' )
				,'param_name' 	=> 'child_of'
				,'admin_label' 	=> true
				,'settings' => array(
					'multiple' 			=> false
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'value' 		=> ''
				,'description' 	=> esc_html__( 'Select a category. Get all descendents of this category', 'carna' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'carna' )
				,'param_name' 	=> 'ids'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('Include these categories', 'carna')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Hide empty product categories', 'carna' )
				,'param_name' 	=> 'hide_empty'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product category title', 'carna' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
                         ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product category discription', 'carna' )
				,'param_name' 	=> 'show_discription'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'carna' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'carna' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'carna' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> false
				,'value' 		=> '0'
				,'description' 	=> esc_html__('Set margin between items', 'carna')
			)
			                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Desktop small items', 'carna' )
				,'param_name' 	=> 'desksmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'carna')	=> 1
							,esc_html__('2', 'carna')	=> 2
                                                        ,esc_html__('3', 'carna')	=> 3
                                                        ,esc_html__('4', 'carna')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 991px', 'carna')
				,'group'		=> esc_html__('Responsive Options', 'carna')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet items', 'carna' )
				,'param_name' 	=> 'tablet_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'carna')	=> 1
							,esc_html__('2', 'carna')	=> 2
                                                        ,esc_html__('3', 'carna')	=> 3
                                                        ,esc_html__('4', 'carna')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 768px', 'carna')
				,'group'		=> esc_html__('Responsive Options', 'carna')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet mini items', 'carna' )
				,'param_name' 	=> 'tabletmini_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'carna')	=> 1
							,esc_html__('2', 'carna')	=> 2
                                                        ,esc_html__('3', 'carna')	=> 3
                                                        ,esc_html__('4', 'carna')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 640px', 'carna')
				,'group'		=> esc_html__('Responsive Options', 'carna')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile items', 'carna' )
				,'param_name' 	=> 'mobile_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'carna')	=> 1
							,esc_html__('2', 'carna')	=> 2
                                                        ,esc_html__('3', 'carna')	=> 3
                                                        ,esc_html__('4', 'carna')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 480px', 'carna')
				,'group'		=> esc_html__('Responsive Options', 'carna')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile small items', 'carna' )
				,'param_name' 	=> 'mobilesmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'carna')	=> 1
							,esc_html__('2', 'carna')	=> 2
                                                        ,esc_html__('3', 'carna')	=> 3
                                                        ,esc_html__('4', 'carna')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 0px', 'carna')
				,'group'		=> esc_html__('Responsive Options', 'carna')
			)
		)
	) );
	
	
	/*** FTC Products In Category Tabs***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Products Category Tabs', 'carna' ),
		'base' 		=> 'ftc_products_category_tabs',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'carna' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Recent', 'carna')		=> 'recent'
						,esc_html__('Sale', 'carna')		=> 'sale'
						,esc_html__('Featured', 'carna')	=> 'featured'
						,esc_html__('Best Selling', 'carna')	=> 'best_selling'
						,esc_html__('Top Rated', 'carna')	=> 'top_rated'
						,esc_html__('Mixed Order', 'carna')	=> 'mixed_order'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'carna' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Custom order', 'carna' )
				,'param_name' 	=> 'custom_order'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('No', 'carna')			=> 0
						,esc_html__('Yes', 'carna')		=> 1
						)
				,'description' 	=> esc_html__( 'If you enable this option, the Product type option wont be available', 'carna' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order by', 'carna' )
				,'param_name' 	=> 'orderby'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('None', 'carna')				=> 'none'
						,esc_html__('ID', 'carna')				=> 'ID'
						,esc_html__('Date', 'carna')				=> 'date'
						,esc_html__('Name', 'carna')				=> 'name'
						,esc_html__('Title', 'carna')				=> 'title'
						,esc_html__('Comment count', 'carna')		=> 'comment_count'
						,esc_html__('Random', 'carna')			=> 'rand'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order', 'carna' )
				,'param_name' 	=> 'order'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Descending', 'carna')		=> 'DESC'
						,esc_html__('Ascending', 'carna')		=> 'ASC'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Background Color', 'carna' )
				,'param_name' 	=> 'bg_color'
				,'admin_label' 	=> false
				,'value' 		=> '#f7f6f4'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'carna' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> 3
				,'description' 	=> esc_html__( 'Number of Columns', 'carna' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'carna' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 6
				,'description' 	=> esc_html__( 'Number of Products', 'carna' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'carna' )
				,'param_name' 	=> 'product_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__( 'You select banners, icons in the Product Category editor', 'carna' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Parent Category', 'carna' )
				,'param_name' 	=> 'parent_cat'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> false
					,'sortable' 		=> false
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('Each tab will be a sub category of this category. This option is available when the Product Categories option is empty', 'carna')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Include children', 'carna' )
				,'param_name' 	=> 'include_children'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('No', 'carna')			=> 0
						,esc_html__('Yes', 'carna')		=> 1
						)
				,'description' 	=> esc_html__( 'Load the products of sub categories in each tab', 'carna' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Active tab', 'carna' )
				,'param_name' 	=> 'active_tab'
				,'admin_label' 	=> false
				,'value' 		=> 1
				,'description' 	=> esc_html__( 'Enter active tab number', 'carna' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'carna' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'carna' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product SKU', 'carna' )
				,'param_name' 	=> 'show_sku'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'carna')		=> 0
							,esc_html__('Yes', 'carna')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'carna' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product short description', 'carna' )
				,'param_name' 	=> 'show_short_desc'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'carna')		=> 0
							,esc_html__('Yes', 'carna')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'carna' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product label', 'carna' )
				,'param_name' 	=> 'show_label'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'carna' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'carna')		=> 0
							,esc_html__('Yes', 'carna')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show add to cart button', 'carna' )
				,'param_name' 	=> 'show_add_to_cart'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show counter', 'carna' )
				,'param_name' 	=> 'show_counter'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show in a carousel slider', 'carna' )
				,'param_name' 	=> 'is_slider'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('No', 'carna')		=> 0
							,esc_html__('Yes', 'carna')	=> 1
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Rows', 'carna' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> true
				,'value' 		=> array(
						'1'			=> '1'
						,'2'		=> '2'
						)
				,'description' 	=> esc_html__( 'Number of Rows in slider', 'carna' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'carna' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'carna')		=> 0
							,esc_html__('Yes', 'carna')	=> 1
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'carna' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
						)
				,'description' 	=> ''
			)
		)
	) );
	
	/*** FTC List Of Product Categories ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC List Of Product Categories', 'carna' ),
		'base' 		=> 'ftc_list_of_product_categories',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'carna' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Background image', 'carna' )
				,'param_name' 	=> 'bg_image'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
                        ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Hover Image Effect', 'carna' )
				,'param_name' 	=> 'style_smooth'
				,'admin_label' 	=> false
				,'value' 		=> array(
                                                 esc_html__('No Effect', 'carna')		=> 'no-smooth'
						,esc_html__('Effect-Image Left Right', 'carna')		=> 'smooth-image'
						,esc_html__('Effect Border Image', 'carna')				=> 'smooth-border-image'
						,esc_html__('Effect Background Image', 'carna')		=> 'smooth-background-image'
						,esc_html__('Effect Background Top Image', 'carna')	=> 'smooth-top-image'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Category', 'carna' )
				,'param_name' 	=> 'product_cat'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> false
					,'sortable' 		=> false
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('Display sub categories of this category', 'carna')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Include parent category in list', 'carna' )
				,'param_name' 	=> 'include_parent'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'carna')	=> 1
							,esc_html__('No', 'carna')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number of Sub Categories', 'carna' )
				,'param_name' 	=> 'limit_sub_cat'
				,'admin_label' 	=> true
				,'value' 		=> 6
				,'description' 	=> esc_html__( 'Leave blank to show all', 'carna' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Include these categories', 'carna' )
				,'param_name' 	=> 'include_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('If you set the Product Category option above, this option wont be available', 'carna')
			)
		)
	) );
        
          
        /*** FTC Milestone ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Milestone', 'carna' ),
		'base' 		=> 'ftc_milestone',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number', 'carna' )
				,'param_name' 	=> 'number'
				,'admin_label' 	=> true
				,'value' 		=> '0'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Subject', 'carna' )
				,'param_name' 	=> 'ftc_number_meta'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Text Color Style', 'carna' )
				,'param_name' 	=> 'text_color_style'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Default', 'carna')	=> 'text-default'
							,esc_html__('Light', 'carna')		=> 'text-light'
						)
				,'description' 	=> ''
			)
		)
	) );
	
}

/*** Add Shortcode Param ***/
WpbakeryShortcodeParams::addField('ftc_category', 'ftc_product_catgories_shortcode_param');
if( !function_exists('ftc_product_catgories_shortcode_param') ){
	function ftc_product_catgories_shortcode_param($settings, $value){
		$categories = ftc_get_list_categories_shortcode_param(0, $settings);
		$arr_value = explode(',', $value);
		ob_start();
		?>
		<input type="hidden" class="wpb_vc_param_value wpb-textinput product_cats textfield ftc-hidden-selected-categories" name="<?php echo esc_attr($settings['param_name']); ?>" value="<?php echo esc_attr($value); ?>" />
		<div class="categorydiv">
			<div class="tabs-panel">
				<ul class="categorychecklist">
					<?php foreach($categories as $cat){ ?>
					<li>
						<label>
							<input type="checkbox" class="checkbox ftc-select-category" value="<?php echo esc_attr($cat->term_id); ?>" <?php echo (in_array($cat->term_id, $arr_value))?'checked':''; ?> />
							<?php echo esc_html($cat->name); ?>
						</label>
						<?php ftc_get_list_sub_categories_shortcode_param($cat->term_id, $arr_value, $settings); ?>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
		<script type="text/javascript">
			jQuery('.ftc-select-category').bind('change', function(){
				"use strict";
				
				var selected = jQuery('.ftc-select-category:checked');
				jQuery('.ftc-hidden-selected-categories').val('');
				var selected_id = new Array();
				selected.each(function(index, ele){
					selected_id.push(jQuery(ele).val());
				});
				selected_id = selected_id.join(',');
				jQuery('.ftc-hidden-selected-categories').val(selected_id);
			});
		</script>
		<?php
		return ob_get_clean();
	}
}

if( !function_exists('ftc_get_list_categories_shortcode_param') ){
	function ftc_get_list_categories_shortcode_param( $cat_parent_id, $settings ){
		$taxonomy = 'product_cat';
		if( isset($settings['class']) ){
			if( $settings['class'] == 'post_cat' ){
				$taxonomy = 'category';
			}
			if( $settings['class'] == 'ftc_testimonial' ){
				$taxonomy = 'ftc_testimonial_cat';
			}
			if( $settings['class'] == 'ftc_portfolio' ){
				$taxonomy = 'ftc_portfolio_cat';
			}
			if( $settings['class'] == 'ftc_brand' ){
				$taxonomy = 'ftc_brand_cat';
			}
		}
		
		$args = array(
				'taxonomy' 			=> $taxonomy
				,'hierarchical'		=> 1
				,'hide_empty'		=> 0
				,'parent'			=> $cat_parent_id
				,'title_li'			=> ''
				,'child_of'			=> 0
			);
		$cats = get_categories($args);
		return $cats;
	}
}

if( !function_exists('ftc_get_list_sub_categories_shortcode_param') ){
	function ftc_get_list_sub_categories_shortcode_param( $cat_parent_id, $arr_value, $settings ){
		$sub_categories = ftc_get_list_categories_shortcode_param($cat_parent_id, $settings); 
		if( count($sub_categories) > 0){
		?>
			<ul class="children">
				<?php foreach( $sub_categories as $sub_cat ){ ?>
					<li>
						<label>
							<input type="checkbox" class="checkbox ftc-select-category" value="<?php echo esc_attr($sub_cat->term_id); ?>" <?php echo (in_array($sub_cat->term_id, $arr_value))?'checked':''; ?> />
							<?php echo esc_html($sub_cat->name); ?>
						</label>
						<?php ftc_get_list_sub_categories_shortcode_param($sub_cat->term_id, $arr_value, $settings); ?>
					</li>
				<?php } ?>
			</ul>
		<?php }
	}
}

if( class_exists('Vc_Vendor_Woocommerce') ){
	$vc_woo_vendor = new Vc_Vendor_Woocommerce();

	/* autocomplete callback */
	add_filter( 'vc_autocomplete_ftc_products_ids_callback', array($vc_woo_vendor, 'productIdAutocompleteSuggester') );
	add_filter( 'vc_autocomplete_ftc_products_ids_render', array($vc_woo_vendor, 'productIdAutocompleteRender') );
	
	
	$shortcode_field_cats = array();
	$shortcode_field_cats[] = array('ftc_products', 'product_cats');
	$shortcode_field_cats[] = array('ftc_products_slider', 'product_cats');
	$shortcode_field_cats[] = array('ftc_products_widget', 'product_cats');
	$shortcode_field_cats[] = array('ftc_product_deals_slider', 'product_cats');
	$shortcode_field_cats[] = array('ftc_products_category_tabs', 'product_cats');
	$shortcode_field_cats[] = array('ftc_products_category_tabs', 'parent_cat');
	$shortcode_field_cats[] = array('ftc_list_of_product_categories', 'product_cat');
	$shortcode_field_cats[] = array('ftc_list_of_product_categories', 'include_cats');
	$shortcode_field_cats[] = array('ftc_product_categories_slider', 'parent');
	$shortcode_field_cats[] = array('ftc_product_categories_slider', 'child_of');
	$shortcode_field_cats[] = array('ftc_product_categories_slider', 'ids');
		
	foreach( $shortcode_field_cats as $shortcode_field ){
		add_filter( 'vc_autocomplete_'.$shortcode_field[0].'_'.$shortcode_field[1].'_callback', array($vc_woo_vendor, 'productCategoryCategoryAutocompleteSuggester') );
		add_filter( 'vc_autocomplete_'.$shortcode_field[0].'_'.$shortcode_field[1].'_render', array($vc_woo_vendor, 'productCategoryCategoryRenderByIdExact') );
	}
}
?>