<?php 
add_action( 'vc_before_init', 'ftc_integrate_with_vc' );
function ftc_integrate_with_vc() {
	
	if( !function_exists('vc_map') ){
		return;
	}

	/********************** Content Shortcodes ***************************/
	/*** FTC Features ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Feature', 'daniel' ),
		'base' 		=> 'ftc_feature',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style', 'daniel' )
				,'param_name' 	=> 'style'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Horizontal', 'daniel')		=>  'feature-horizontal'
						,esc_html__('Vertical', 'daniel')		=>  'feature-vertical'	
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Icon class', 'daniel' )
				,'param_name' 	=> 'class_icon'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Use FontAwesome. Ex: fa-home', 'daniel')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style icon', 'daniel' )
				,'param_name' 	=> 'style_icon'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Default', 'daniel')		=>  'icon-default'
						,esc_html__('Small', 'daniel')			=>  'icon-small'	
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Image Thumbnail', 'daniel' )
				,'param_name' 	=> 'img_id'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'dependency'  	=> array('element' => 'style', 'value' => array('feature-vertical'))
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Image Thumbnail URL', 'daniel' )
				,'param_name' 	=> 'img_url'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Input external URL instead of image from library', 'daniel')
				,'dependency' 	=> array('element' => 'style', 'value' => array('feature-vertical'))
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Feature title', 'daniel' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textarea'
				,'heading' 		=> esc_html__( 'Short description', 'daniel' )
				,'param_name' 	=> 'excerpt'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link', 'daniel' )
				,'param_name' 	=> 'link'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'daniel' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('New Window Tab', 'daniel')	=>  '_blank'
						,esc_html__('Self', 'daniel')			=>  '_self'	
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Extra class', 'daniel' )
				,'param_name' 	=> 'extra_class'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Ex: feature-icon-blue, feature-icon-orange, feature-icon-green', 'daniel')
			)
		)
	) );
	
	/*** FTC Blogs ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Blogs', 'daniel' ),
		'base' 		=> 'ftc_blogs',
		'base' 		=> 'ftc_blogs',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'daniel' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Layout', 'daniel' )
				,'param_name' 	=> 'layout'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('Grid', 'daniel')		=> 'grid'
							,esc_html__('Slider', 'daniel')	=> 'slider'
							,esc_html__('Masonry', 'daniel')	=> 'masonry'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Columns', 'daniel' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> array(
							'1'				=> '1'
							,'2'			=> '2'
							,'3'			=> '3'
							,'4'			=> '4'
							)
				,'description' 	=> esc_html__( 'Number of Columns', 'daniel' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'daniel' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Posts', 'daniel' )
			)
			,array(
				'type' 			=> 'ftc_category'
				,'heading' 		=> esc_html__( 'Categories', 'daniel' )
				,'param_name' 	=> 'categories'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'class'		=> 'post_cat'
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order by', 'daniel' )
				,'param_name' 	=> 'orderby'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('None', 'daniel')		=> 'none'
						,esc_html__('ID', 'daniel')		=> 'ID'
						,esc_html__('Date', 'daniel')		=> 'date'
						,esc_html__('Name', 'daniel')		=> 'name'
						,esc_html__('Title', 'daniel')		=> 'title'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order', 'daniel' )
				,'param_name' 	=> 'order'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Descending', 'daniel')		=> 'DESC'
						,esc_html__('Ascending', 'daniel')		=> 'ASC'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show post title', 'daniel' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show thumbnail', 'daniel' )
				,'param_name' 	=> 'show_thumbnail'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show author', 'daniel' )
				,'param_name' 	=> 'show_author'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'daniel')	=> 0
							,esc_html__('Yes', 'daniel')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show comment', 'daniel' )
				,'param_name' 	=> 'show_comment'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show date', 'daniel' )
				,'param_name' 	=> 'show_date'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show post excerpt', 'daniel' )
				,'param_name' 	=> 'show_excerpt'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show read more button', 'daniel' )
				,'param_name' 	=> 'show_readmore'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number of words in excerpt', 'daniel' )
				,'param_name' 	=> 'excerpt_words'
				,'admin_label' 	=> false
				,'value' 		=> '16'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show load more button', 'daniel' )
				,'param_name' 	=> 'show_load_more'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'daniel')	=> 0
							,esc_html__('Yes', 'daniel')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Load more button text', 'daniel' )
				,'param_name' 	=> 'load_more_text'
				,'admin_label' 	=> false
				,'value' 		=> 'Show more'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'daniel' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'daniel')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'daniel' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'daniel')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'daniel' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> false
				,'value' 		=> '30'
				,'description' 	=> esc_html__('Set margin between items', 'daniel')
				,'group'		=> esc_html__('Slider Options', 'daniel')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Desktop small items', 'daniel' )
				,'param_name' 	=> 'desksmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'daniel')	=> 1
							,esc_html__('2', 'daniel')	=> 2
                                                        ,esc_html__('3', 'daniel')	=> 3
                                                        ,esc_html__('4', 'daniel')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 991px', 'daniel')
				,'group'		=> esc_html__('Responsive Options', 'daniel')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet items', 'daniel' )
				,'param_name' 	=> 'tablet_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'daniel')	=> 1
							,esc_html__('2', 'daniel')	=> 2
                                                        ,esc_html__('3', 'daniel')	=> 3
                                                        ,esc_html__('4', 'daniel')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 768px', 'daniel')
				,'group'		=> esc_html__('Responsive Options', 'daniel')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet mini items', 'daniel' )
				,'param_name' 	=> 'tabletmini_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'daniel')	=> 1
							,esc_html__('2', 'daniel')	=> 2
                                                        ,esc_html__('3', 'daniel')	=> 3
                                                        ,esc_html__('4', 'daniel')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 640px', 'daniel')
				,'group'		=> esc_html__('Responsive Options', 'daniel')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile items', 'daniel' )
				,'param_name' 	=> 'mobile_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'daniel')	=> 1
							,esc_html__('2', 'daniel')	=> 2
                                                        ,esc_html__('3', 'daniel')	=> 3
                                                        ,esc_html__('4', 'daniel')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 480px', 'daniel')
				,'group'		=> esc_html__('Responsive Options', 'daniel')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile small items', 'daniel' )
				,'param_name' 	=> 'mobilesmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'daniel')	=> 1
							,esc_html__('2', 'daniel')	=> 2
                                                        ,esc_html__('3', 'daniel')	=> 3
                                                        ,esc_html__('4', 'daniel')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 0px', 'daniel')
				,'group'		=> esc_html__('Responsive Options', 'daniel')
			)
		)
	) );

	/*** FTC Button ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Button', 'daniel' ),
		'base' 		=> 'ftc_button',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Text', 'daniel' )
				,'param_name' 	=> 'content'
				,'admin_label' 	=> true
				,'value' 		=> 'Button text'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link', 'daniel' )
				,'param_name' 	=> 'link'
				,'admin_label' 	=> true
				,'value' 		=> '#'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Text color', 'daniel' )
				,'param_name' 	=> 'text_color'
				,'admin_label' 	=> false
				,'value' 		=> '#ffffff'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Text color hover', 'daniel' )
				,'param_name' 	=> 'text_color_hover'
				,'admin_label' 	=> false
				,'value' 		=> '#ffffff'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Background color', 'daniel' )
				,'param_name' 	=> 'bg_color'
				,'admin_label' 	=> false
				,'value' 		=> '#40bea7'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Background color hover', 'daniel' )
				,'param_name' 	=> 'bg_color_hover'
				,'admin_label' 	=> false
				,'value' 		=> '#3f3f3f'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Border color', 'daniel' )
				,'param_name' 	=> 'border_color'
				,'admin_label' 	=> false
				,'value' 		=> '#e8e8e8'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Border color hover', 'daniel' )
				,'param_name' 	=> 'border_color_hover'
				,'admin_label' 	=> false
				,'value' 		=> '#40bea7'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Border width', 'daniel' )
				,'param_name' 	=> 'border_width'
				,'admin_label' 	=> false
				,'value' 		=> '0'
				,'description' 	=> esc_html__('In pixels. Ex: 1', 'daniel')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'daniel' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Self', 'daniel')				=> '_self'
						,esc_html__('New Window Tab', 'daniel')	=> '_blank'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Size', 'daniel' )
				,'param_name' 	=> 'size'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Small', 'daniel')		=> 'small'
						,esc_html__('Medium', 'daniel')	=> 'medium'
						,esc_html__('Large', 'daniel')		=> 'large'
						,esc_html__('X-Large', 'daniel')	=> 'x-large'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'iconpicker'
				,'heading' 		=> esc_html__( 'Font icon', 'daniel' )
				,'param_name' 	=> 'font_icon'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'settings' 	=> array(
					'emptyIcon' 	=> true /* default true, display an "EMPTY" icon? */
					,'iconsPerPage' => 4000 /* default 100, how many icons per/page to display */
				)
				,'description' 	=> esc_html__('Add an icon before the text. Ex: fa-lock', 'daniel')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show popup', 'daniel' )
				,'param_name' 	=> 'popup'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('No', 'daniel')	=> 0
							,esc_html__('Yes', 'daniel')	=> 1
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Popup Options', 'daniel')
			)
			,array(
				'type' 			=> 'textarea_raw_html'
				,'heading' 		=> esc_html__( 'Popup content', 'daniel' )
				,'param_name' 	=> 'popup_content'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
				,'group'		=> esc_html__('Popup Options', 'daniel')
			)
		)
	) );
	
	/*** FTC Single Image ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Single Image', 'daniel' ),
		'base' 		=> 'ftc_single_image',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Image', 'daniel' )
				,'param_name' 	=> 'img_id'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Image Size', 'daniel' )
				,'param_name' 	=> 'img_size'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__( 'Ex: thumbnail, medium, large or full', 'daniel' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Image URL', 'daniel' )
				,'param_name' 	=> 'img_url'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Input external URL instead of image from library', 'daniel')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link', 'daniel' )
				,'param_name' 	=> 'link'
				,'admin_label' 	=> true
				,'value' 		=> '#'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link Title', 'daniel' )
				,'param_name' 	=> 'link_title'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Hover smooth', 'daniel' )
				,'param_name' 	=> 'style_smooth'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('smooth-banner Left Right', 'daniel')		=> 'smooth-banner'
						,esc_html__('smooth Border Image', 'daniel')				=> 'smooth-border-image'
						,esc_html__('smooth Background Image', 'daniel')		=> 'smooth-background-image'
						,esc_html__('smooth Background Top Image', 'daniel')	=> 'smooth-top-image'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'daniel' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('New Window Tab', 'daniel')		=> '_blank'
						,esc_html__('Self', 'daniel')				=> '_self'
						)
				,'description' 	=> ''
			)
		)
	) );
	
	/*** FTC Heading ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Heading', 'daniel' ),
		'base' 		=> 'ftc_heading',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Heading style', 'daniel' )
				,'param_name' 	=> 'style'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Style 1', 'daniel')		=> 'style-1'
						,esc_html__('Style 2', 'daniel')		=> 'style-2'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Heading Size', 'daniel' )
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
				,'heading' 		=> esc_html__( 'Text', 'daniel' )
				,'param_name' 	=> 'text'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
		)
	) );
	
	/*** FTC Banner ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Banner', 'daniel' ),
		'base' 		=> 'ftc_banner',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Background Image', 'daniel' )
				,'param_name' 	=> 'bg_id'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Background Url', 'daniel' )
				,'param_name' 	=> 'bg_url'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Input external URL instead of image from library', 'daniel')
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Background Color', 'daniel' )
				,'param_name' 	=> 'bg_color'
				,'admin_label' 	=> false
				,'value' 		=> '#ffffff'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textarea_html'
				,'heading' 		=> esc_html__( 'Banner content', 'daniel' )
				,'param_name' 	=> 'content'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Position Banner Content', 'daniel' )
				,'param_name' 	=> 'position_content'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Left Top', 'daniel')			=>  'left-top'
						,esc_html__('Left Bottom', 'daniel')		=>  'left-bottom'
						,esc_html__('Left Center', 'daniel')		=>  'left-center'
						,esc_html__('Right Top', 'daniel')			=>  'right-top'
						,esc_html__('Right Bottom', 'daniel')		=>  'right-bottom'
						,esc_html__('Right Center', 'daniel')		=>  'right-center'
						,esc_html__('Center Top', 'daniel')		=>  'center-top'
						,esc_html__('Center Bottom', 'daniel')		=>  'center-bottom'
						,esc_html__('Center Center', 'daniel')		=>  'center-center'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link', 'daniel' )
				,'param_name' 	=> 'link'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link Title', 'daniel' )
				,'param_name' 	=> 'link_title'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style smooth', 'daniel' )
				,'param_name' 	=> 'style_smooth'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Background Scale', 'daniel')						=>  'background-scale'
						,esc_html__('Background Scale Opacity', 'daniel')				=>  'background-scale-opacity'
						,esc_html__('Background Scale Dark', 'daniel')					=>	'background-scale-dark'
						,esc_html__('Background Scale and Line', 'daniel')				=>  'background-scale-and-line'
						,esc_html__('Background Scale Opacity and Line', 'daniel')		=>  'background-scale-opacity-line'
						,esc_html__('Background Scale Dark and Line', 'daniel')		=>  'background-scale-dark-line'
						,esc_html__('Background Opacity and Line', 'daniel')			=>	'background-opacity-and-line'
						,esc_html__('Background Dark and Line', 'daniel')				=>	'background-dark-and-line'
						,esc_html__('Background Opacity', 'daniel')					=>	'background-opacity'
						,esc_html__('Background Dark', 'daniel')						=>	'background-dark'
						,esc_html__('Line', 'daniel')									=>	'eff-line'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Background Opacity On Device', 'daniel' )
				,'param_name' 	=> 'opacity_bg_device'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('No', 'daniel')			=>  0
						,esc_html__('Yes', 'daniel')		=>  1
						)
				,'description' 	=> esc_html__('Background image will be blurred on device. Note: should set background color ', 'daniel')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Responsive size', 'daniel' )
				,'param_name' 	=> 'responsive_size'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Yes', 'daniel')		=>  1
						,esc_html__('No', 'daniel')		=>  0
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'daniel' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('New Window Tab', 'daniel')	=>  '_blank'
						,esc_html__('Self', 'daniel')			=>  '_self'	
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Extra Class', 'daniel' )
				,'param_name' 	=> 'extra_class'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> esc_html__('Ex: rp-rectangle-full, rp-rectangle', 'daniel')
			)
		)
	) );
	
	/* FTC Testimonial */
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Testimonial', 'daniel' ),
		'base' 		=> 'ftc_testimonial',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'ftc_category'
				,'heading' 		=> esc_html__( 'Categories', 'daniel' )
				,'param_name' 	=> 'categories'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'class'		=> 'ftc_testimonial'
			)
			,array(
				'type' 			=> 'textarea'
				,'heading' 		=> esc_html__( 'Testimonial IDs', 'daniel' )
				,'param_name' 	=> 'ids'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('A comma separated list of testimonial ids', 'daniel')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show Avatar', 'daniel' )
				,'param_name' 	=> 'show_avatar'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'daniel' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> '4'
				,'description' 	=> esc_html__('Number of Posts', 'daniel')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number of words in excerpt', 'daniel' )
				,'param_name' 	=> 'excerpt_words'
				,'admin_label' 	=> true
				,'value' 		=> '50'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Text Color Style', 'daniel' )
				,'param_name' 	=> 'text_color_style'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Default', 'daniel')	=> 'text-default'
							,esc_html__('Light', 'daniel')		=> 'text-light'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show in a carousel slider', 'daniel' )
				,'param_name' 	=> 'is_slider'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'daniel')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'daniel' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'daniel')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show pagination dots', 'daniel' )
				,'param_name' 	=> 'show_dots'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'daniel')	=> 0
							,esc_html__('Yes', 'daniel')	=> 1
						)
				,'description' 	=> esc_html__('If it is set, the navigation buttons will be removed', 'daniel')
				,'group'		=> esc_html__('Slider Options', 'daniel')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'daniel' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'daniel')
			)
		)
	) );
	
	/*** FTC Brands Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Brands Slider', 'daniel' ),
		'base' 		=> 'ftc_brands_slider',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'daniel' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style Brand', 'daniel' )
				,'param_name' 	=> 'style_brand'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('Default', 'daniel')	=> 'style-default'
							,esc_html__('Light', 'daniel')		=> 'style-light'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'daniel' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> '7'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Rows', 'daniel' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> true
				,'value' 		=> 1
				,'description' 	=> esc_html__( 'Number of Rows', 'daniel' )
			)
			,array(
				'type' 			=> 'ftc_category'
				,'heading' 		=> esc_html__( 'Categories', 'daniel' )
				,'param_name' 	=> 'categories'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'class'		=> 'ftc_brand'
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'daniel' )
				,'param_name' 	=> 'margin_image'
				,'admin_label' 	=> false
				,'value' 		=> '32'
				,'description' 	=> esc_html__('Set margin between items', 'daniel')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Activate link', 'daniel' )
				,'param_name' 	=> 'active_link'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'daniel' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'daniel' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)

			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Desktop small items', 'daniel' )
				,'param_name' 	=> 'desksmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'daniel')	=> 1
							,esc_html__('2', 'daniel')	=> 2
                                                        ,esc_html__('3', 'daniel')	=> 3
                                                        ,esc_html__('4', 'daniel')	=> 4
                                    ,esc_html__('5', 'daniel')	=> 5
                                     ,esc_html__('6', 'daniel')	=> 6
                                    
						)
				,'description' 	=> esc_html__('Set items on 991px', 'daniel')
				,'group'		=> esc_html__('Responsive Options', 'daniel')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet items', 'daniel' )
				,'param_name' 	=> 'tablet_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'daniel')	=> 1
							,esc_html__('2', 'daniel')	=> 2
                                                        ,esc_html__('3', 'daniel')	=> 3
                                                        ,esc_html__('4', 'daniel')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 768px', 'daniel')
				,'group'		=> esc_html__('Responsive Options', 'daniel')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet mini items', 'daniel' )
				,'param_name' 	=> 'tabletmini_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'daniel')	=> 1
							,esc_html__('2', 'daniel')	=> 2
                                                        ,esc_html__('3', 'daniel')	=> 3
                                                        ,esc_html__('4', 'daniel')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 640px', 'daniel')
				,'group'		=> esc_html__('Responsive Options', 'daniel')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile items', 'daniel' )
				,'param_name' 	=> 'mobile_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'daniel')	=> 1
							,esc_html__('2', 'daniel')	=> 2
                                                        ,esc_html__('3', 'daniel')	=> 3
                                                        ,esc_html__('4', 'daniel')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 480px', 'daniel')
				,'group'		=> esc_html__('Responsive Options', 'daniel')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile small items', 'daniel' )
				,'param_name' 	=> 'mobilesmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'daniel')	=> 1
							,esc_html__('2', 'daniel')	=> 2
                                                        ,esc_html__('3', 'daniel')	=> 3
                                                        ,esc_html__('4', 'daniel')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 0px', 'daniel')
				,'group'		=> esc_html__('Responsive Options', 'daniel')
			)
		)
	) );
	
	
	/*** FTC Google Map ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Google Map', 'daniel' ),
		'base' 		=> 'ftc_google_map',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Address', 'daniel' )
				,'param_name' 	=> 'address'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('You have to input your API Key in Appearance > Theme Options > General tab', 'daniel')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Height', 'daniel' )
				,'param_name' 	=> 'height'
				,'admin_label' 	=> true
				,'value' 		=> 360
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Zoom', 'daniel' )
				,'param_name' 	=> 'zoom'
				,'admin_label' 	=> true
				,'value' 		=> 12
				,'description' 	=> esc_html__('Input a number between 0 and 22', 'daniel')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Map Type', 'daniel' )
				,'param_name' 	=> 'map_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
								esc_html__('ROADMAP', 'daniel')		=> 'ROADMAP'
								,esc_html__('SATELLITE', 'daniel')		=> 'SATELLITE'
								,esc_html__('HYBRID', 'daniel')		=> 'HYBRID'
								,esc_html__('TERRAIN', 'daniel')		=> 'TERRAIN'
							)
				,'description' 	=> ''
			)
		)
	) );
        
	/*** FTC Countdown ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Countdown', 'daniel' ),
		'base' 		=> 'ftc_countdown',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Day', 'daniel' )
				,'param_name' 	=> 'day'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Month', 'daniel' )
				,'param_name' 	=> 'month'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Year', 'daniel' )
				,'param_name' 	=> 'year'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Text Color Style', 'daniel' )
				,'param_name' 	=> 'text_color_style'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Default', 'daniel')	=> 'text-default'
							,esc_html__('Light', 'daniel')		=> 'text-light'
						)
				,'description' 	=> ''
			)
		)
	) );
	
	/*** FTC Feedburner Subscription ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Feedburner Subscription', 'daniel' ),
		'base' 		=> 'ftc_feedburner_subscription',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Feedburner ID', 'daniel' )
				,'param_name' 	=> 'feedburner_id'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Title', 'daniel' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> 'Newsletter'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Intro Text Line 1', 'daniel' )
				,'param_name' 	=> 'intro_text'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Button Text', 'daniel' )
				,'param_name' 	=> 'button_text'
				,'admin_label' 	=> true
				,'value' 		=> 'Subscribe'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Placeholder Text', 'daniel' )
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
		'name' 		=> esc_html__( 'FTC Products', 'daniel' ),
		'base' 		=> 'ftc_products',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'daniel' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'daniel' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Recent', 'daniel')		=> 'recent'
						,esc_html__('Sale', 'daniel')		=> 'sale'
						,esc_html__('Featured', 'daniel')	=> 'featured'
						,esc_html__('Best Selling', 'daniel')	=> 'best_selling'
						,esc_html__('Top Rated', 'daniel')	=> 'top_rated'
						,esc_html__('Mixed Order', 'daniel')	=> 'mixed_order'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'daniel' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Custom order', 'daniel' )
				,'param_name' 	=> 'custom_order'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('No', 'daniel')			=> 0
						,esc_html__('Yes', 'daniel')		=> 1
						)
				,'description' 	=> esc_html__( 'If you enable this option, the Product type option wont be available', 'daniel' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order by', 'daniel' )
				,'param_name' 	=> 'orderby'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('None', 'daniel')				=> 'none'
						,esc_html__('ID', 'daniel')				=> 'ID'
						,esc_html__('Date', 'daniel')				=> 'date'
						,esc_html__('Name', 'daniel')				=> 'name'
						,esc_html__('Title', 'daniel')				=> 'title'
						,esc_html__('Comment count', 'daniel')		=> 'comment_count'
						,esc_html__('Random', 'daniel')			=> 'rand'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order', 'daniel' )
				,'param_name' 	=> 'order'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Descending', 'daniel')		=> 'DESC'
						,esc_html__('Ascending', 'daniel')		=> 'ASC'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'daniel' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Columns', 'daniel' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'daniel' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Products', 'daniel' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'daniel' )
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
				,'heading' 		=> esc_html__( 'Product IDs', 'daniel' )
				,'param_name' 	=> 'ids'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('Enter product name or slug to search', 'daniel')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Meta position', 'daniel' )
				,'param_name' 	=> 'meta_position'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Bottom', 'daniel')			=> 'bottom'
							,esc_html__('On Thumbnail', 'daniel')	=> 'on-thumbnail'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'daniel' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'daniel' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product SKU', 'daniel' )
				,'param_name' 	=> 'show_sku'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'daniel')	=> 0
							,esc_html__('Yes', 'daniel')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'daniel' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product short description', 'daniel' )
				,'param_name' 	=> 'show_short_desc'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'daniel')	=> 0
							,esc_html__('Yes', 'daniel')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'daniel' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product label', 'daniel' )
				,'param_name' 	=> 'show_label'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'daniel' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'daniel')	=> 0
							,esc_html__('Yes', 'daniel')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show add to cart button', 'daniel' )
				,'param_name' 	=> 'show_add_to_cart'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
		)
	) );

	/*** FTC Products Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Products Slider', 'daniel' ),
		'base' 		=> 'ftc_products_slider',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'daniel' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'daniel' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Recent', 'daniel')		=> 'recent'
						,esc_html__('Sale', 'daniel')		=> 'sale'
						,esc_html__('Featured', 'daniel')	=> 'featured'
						,esc_html__('Best Selling', 'daniel')	=> 'best_selling'
						,esc_html__('Top Rated', 'daniel')	=> 'top_rated'
						,esc_html__('Mixed Order', 'daniel')	=> 'mixed_order'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'daniel' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Custom order', 'daniel' )
				,'param_name' 	=> 'custom_order'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('No', 'daniel')			=> 0
						,esc_html__('Yes', 'daniel')		=> 1
						)
				,'description' 	=> esc_html__( 'If you enable this option, the Product type option wont be available', 'daniel' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order by', 'daniel' )
				,'param_name' 	=> 'orderby'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('None', 'daniel')				=> 'none'
						,esc_html__('ID', 'daniel')				=> 'ID'
						,esc_html__('Date', 'daniel')				=> 'date'
						,esc_html__('Name', 'daniel')				=> 'name'
						,esc_html__('Title', 'daniel')				=> 'title'
						,esc_html__('Comment count', 'daniel')		=> 'comment_count'
						,esc_html__('Random', 'daniel')			=> 'rand'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order', 'daniel' )
				,'param_name' 	=> 'order'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Descending', 'daniel')		=> 'DESC'
						,esc_html__('Ascending', 'daniel')		=> 'ASC'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'daniel' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Columns', 'daniel' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Rows', 'daniel' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> true
				,'value' 		=> 1
				,'description' 	=> esc_html__( 'Number of Rows', 'daniel' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'daniel' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 6
				,'description' 	=> esc_html__( 'Number of Products', 'daniel' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'daniel' )
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
				,'heading' 		=> esc_html__( 'Meta position', 'daniel' )
				,'param_name' 	=> 'meta_position'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Bottom', 'daniel')			=> 'bottom'
							,esc_html__('On Thumbnail', 'daniel')	=> 'on-thumbnail'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'daniel' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'daniel' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product SKU', 'daniel' )
				,'param_name' 	=> 'show_sku'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'daniel')		=> 0
							,esc_html__('Yes', 'daniel')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'daniel' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product short description', 'daniel' )
				,'param_name' 	=> 'show_short_desc'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'daniel')		=> 0
							,esc_html__('Yes', 'daniel')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'daniel' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product label', 'daniel' )
				,'param_name' 	=> 'show_label'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'daniel' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'daniel')		=> 0
							,esc_html__('Yes', 'daniel')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show add to cart button', 'daniel' )
				,'param_name' 	=> 'show_add_to_cart'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'daniel' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Position navigation button', 'daniel' )
				,'param_name' 	=> 'position_nav'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('Top', 'daniel')		=> 'nav-top'
							,esc_html__('Bottom', 'daniel')	=> 'nav-bottom'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'daniel' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> false
				,'value' 		=> '20'
				,'description' 	=> esc_html__('Set margin between items', 'daniel')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Desktop small items', 'daniel' )
				,'param_name' 	=> 'desksmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'daniel')	=> 1
							,esc_html__('2', 'daniel')	=> 2
                                                        ,esc_html__('3', 'daniel')	=> 3
                                                        ,esc_html__('4', 'daniel')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 991px', 'daniel')
				,'group'		=> esc_html__('Responsive Options', 'daniel')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet items', 'daniel' )
				,'param_name' 	=> 'tablet_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'daniel')	=> 1
							,esc_html__('2', 'daniel')	=> 2
                                                        ,esc_html__('3', 'daniel')	=> 3
                                                        ,esc_html__('4', 'daniel')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 768px', 'daniel')
				,'group'		=> esc_html__('Responsive Options', 'daniel')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet mini items', 'daniel' )
				,'param_name' 	=> 'tabletmini_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'daniel')	=> 1
							,esc_html__('2', 'daniel')	=> 2
                                                        ,esc_html__('3', 'daniel')	=> 3
                                                        ,esc_html__('4', 'daniel')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 640px', 'daniel')
				,'group'		=> esc_html__('Responsive Options', 'daniel')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile items', 'daniel' )
				,'param_name' 	=> 'mobile_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'daniel')	=> 1
							,esc_html__('2', 'daniel')	=> 2
                                                        ,esc_html__('3', 'daniel')	=> 3
                                                        ,esc_html__('4', 'daniel')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 480px', 'daniel')
				,'group'		=> esc_html__('Responsive Options', 'daniel')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile small items', 'daniel' )
				,'param_name' 	=> 'mobilesmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'daniel')	=> 1
							,esc_html__('2', 'daniel')	=> 2
                                                        ,esc_html__('3', 'daniel')	=> 3
                                                        ,esc_html__('4', 'daniel')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 0px', 'daniel')
				,'group'		=> esc_html__('Responsive Options', 'daniel')
			)
		)
	) );
	
	/*** FTC Products Widget ***/
	vc_map( array(
		'name' 			=> esc_html__( 'FTC Products Widget', 'daniel' ),
		'base' 			=> 'ftc_products_widget',
		'class' 		=> '',
		'description' 	=> '',
		'category' 		=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 		=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'daniel' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'daniel' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Recent', 'daniel')		=> 'recent'
						,esc_html__('Sale', 'daniel')		=> 'sale'
						,esc_html__('Featured', 'daniel')	=> 'featured'
						,esc_html__('Best Selling', 'daniel')	=> 'best_selling'
						,esc_html__('Top Rated', 'daniel')	=> 'top_rated'
						,esc_html__('Mixed Order', 'daniel')	=> 'mixed_order'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'daniel' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'daniel' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 6
				,'description' 	=> esc_html__( 'Number of Products', 'daniel' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'daniel' )
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
				,'heading' 		=> esc_html__( 'Show product image', 'daniel' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
                        ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Thumbnail size', 'daniel' )
				,'param_name' 	=> 'thumbnail_size'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('shop_thumbnail', 'daniel')		=> 'Product Thumbnails'
						,esc_html__('shop_catalog', 'daniel')		=> 'Catalog Images'
						,esc_html__('shop_single', 'daniel')	=> 'Single Product Image'
						)
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'daniel' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'daniel' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'daniel' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'daniel' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'daniel')	=> 0
							,esc_html__('Yes', 'daniel')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show in a carousel slider', 'daniel' )
				,'param_name' 	=> 'is_slider'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('No', 'daniel')	=> 0
							,esc_html__('Yes', 'daniel')	=> 1
							)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'daniel')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Row', 'daniel' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> false
				,'value' 		=> 3
				,'description' 	=> esc_html__( 'Number of Rows for slider', 'daniel' )
				,'group'		=> esc_html__('Slider Options', 'daniel')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'daniel' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'daniel')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'daniel' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'daniel')
			)
		)
	) );
	
	/*** FTC Product Deals Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Product Deals Slider', 'daniel' ),
		'base' 		=> 'ftc_product_deals_slider',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'daniel' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'daniel' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Recent', 'daniel')		=> 'recent'
						,esc_html__('Featured', 'daniel')	=> 'featured'
						,esc_html__('Best Selling', 'daniel')	=> 'best_selling'
						,esc_html__('Top Rated', 'daniel')	=> 'top_rated'
						,esc_html__('Mixed Order', 'daniel')	=> 'mixed_order'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'daniel' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Item Layout', 'daniel' )
				,'param_name' 	=> 'layout'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('Grid', 'daniel')		=> 'grid'
							,esc_html__('List', 'daniel')		=> 'list'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'daniel' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> false
				,'value' 		=> 4
				,'description' 	=> esc_html__( 'Number of Columns', 'daniel' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'daniel' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Products', 'daniel' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'daniel' )
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
				,'heading' 		=> esc_html__( 'Show counter', 'daniel' )
				,'param_name' 	=> 'show_counter'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Counter position', 'daniel' )
				,'param_name' 	=> 'counter_position'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Bottom', 'daniel')			=> 'bottom'
							,esc_html__('On thumbnail', 'daniel')	=> 'on-thumbnail'
							)
				,'description' 	=> ''
				,'dependency' 	=> array('element' => 'show_counter', 'value' => array('1'))
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'daniel' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show gallery list', 'daniel' )
				,'param_name' 	=> 'show_gallery'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Gallery position', 'daniel' )
				,'param_name' 	=> 'gallery_position'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Bottom out line', 'daniel')	=> 'bottom-out'
							,esc_html__('Bottom in line', 'daniel')	=> 'bottom-in'
							)
				,'description' 	=> ''
				,'dependency' 	=> array('element' => 'show_counter', 'value' => array('1'))
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'daniel' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product SKU', 'daniel' )
				,'param_name' 	=> 'show_sku'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'daniel')		=> 0
							,esc_html__('Yes', 'daniel')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'daniel' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product short description', 'daniel' )
				,'param_name' 	=> 'show_short_desc'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'daniel')		=> 0
							,esc_html__('Yes', 'daniel')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'daniel' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product label', 'daniel' )
				,'param_name' 	=> 'show_label'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'daniel' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'daniel')		=> 0
							,esc_html__('Yes', 'daniel')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show add to cart button', 'daniel' )
				,'param_name' 	=> 'show_add_to_cart'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'daniel' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'daniel' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'daniel' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> false
				,'value' 		=> '20'
				,'description' 	=> esc_html__('Set margin between items', 'daniel')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Desktop small items', 'daniel' )
				,'param_name' 	=> 'desksmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'daniel')	=> 1
							,esc_html__('2', 'daniel')	=> 2
                                                        ,esc_html__('3', 'daniel')	=> 3
                                                        ,esc_html__('4', 'daniel')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 991px', 'daniel')
				,'group'		=> esc_html__('Responsive Options', 'daniel')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet items', 'daniel' )
				,'param_name' 	=> 'tablet_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'daniel')	=> 1
							,esc_html__('2', 'daniel')	=> 2
                                                        ,esc_html__('3', 'daniel')	=> 3
                                                        ,esc_html__('4', 'daniel')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 768px', 'daniel')
				,'group'		=> esc_html__('Responsive Options', 'daniel')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet mini items', 'daniel' )
				,'param_name' 	=> 'tabletmini_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'daniel')	=> 1
							,esc_html__('2', 'daniel')	=> 2
                                                        ,esc_html__('3', 'daniel')	=> 3
                                                        ,esc_html__('4', 'daniel')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 640px', 'daniel')
				,'group'		=> esc_html__('Responsive Options', 'daniel')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile items', 'daniel' )
				,'param_name' 	=> 'mobile_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'daniel')	=> 1
							,esc_html__('2', 'daniel')	=> 2
                                                        ,esc_html__('3', 'daniel')	=> 3
                                                        ,esc_html__('4', 'daniel')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 480px', 'daniel')
				,'group'		=> esc_html__('Responsive Options', 'daniel')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile small items', 'daniel' )
				,'param_name' 	=> 'mobilesmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'daniel')	=> 1
							,esc_html__('2', 'daniel')	=> 2
                                                        ,esc_html__('3', 'daniel')	=> 3
                                                        ,esc_html__('4', 'daniel')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 0px', 'daniel')
				,'group'		=> esc_html__('Responsive Options', 'daniel')
			)
		)
	) );
	
	/*** FTC Product Categories Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Product Categories Slider', 'daniel' ),
		'base' 		=> 'ftc_product_categories_slider',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'daniel' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'daniel' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> 4
				,'description' 	=> esc_html__( 'Number of Columns', 'daniel' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Rows', 'daniel' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> true
				,'value' 		=> 1
				,'description' 	=> esc_html__( 'Number of Rows', 'daniel' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'daniel' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Product Categories', 'daniel' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Parent', 'daniel' )
				,'param_name' 	=> 'parent'
				,'admin_label' 	=> true
				,'settings' => array(
					'multiple' 			=> false
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'value' 		=> ''
				,'description' 	=> esc_html__( 'Select a category. Get direct children of this category', 'daniel' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Child Of', 'daniel' )
				,'param_name' 	=> 'child_of'
				,'admin_label' 	=> true
				,'settings' => array(
					'multiple' 			=> false
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'value' 		=> ''
				,'description' 	=> esc_html__( 'Select a category. Get all descendents of this category', 'daniel' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'daniel' )
				,'param_name' 	=> 'ids'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('Include these categories', 'daniel')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Hide empty product categories', 'daniel' )
				,'param_name' 	=> 'hide_empty'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product category title', 'daniel' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'daniel' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'daniel' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'daniel' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> false
				,'value' 		=> '0'
				,'description' 	=> esc_html__('Set margin between items', 'daniel')
			)

			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Desktop small items', 'daniel' )
				,'param_name' 	=> 'desksmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'daniel')	=> 1
							,esc_html__('2', 'daniel')	=> 2
                                                        ,esc_html__('3', 'daniel')	=> 3
                                                        ,esc_html__('4', 'daniel')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 991px', 'daniel')
				,'group'		=> esc_html__('Responsive Options', 'daniel')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet items', 'daniel' )
				,'param_name' 	=> 'tablet_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'daniel')	=> 1
							,esc_html__('2', 'daniel')	=> 2
                                                        ,esc_html__('3', 'daniel')	=> 3
                                                        ,esc_html__('4', 'daniel')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 768px', 'daniel')
				,'group'		=> esc_html__('Responsive Options', 'daniel')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Tablet mini items', 'daniel' )
				,'param_name' 	=> 'tabletmini_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'daniel')	=> 1
							,esc_html__('2', 'daniel')	=> 2
                                                        ,esc_html__('3', 'daniel')	=> 3
                                                        ,esc_html__('4', 'daniel')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 640px', 'daniel')
				,'group'		=> esc_html__('Responsive Options', 'daniel')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile items', 'daniel' )
				,'param_name' 	=> 'mobile_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'daniel')	=> 1
							,esc_html__('2', 'daniel')	=> 2
                                                        ,esc_html__('3', 'daniel')	=> 3
                                                        ,esc_html__('4', 'daniel')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 480px', 'daniel')
				,'group'		=> esc_html__('Responsive Options', 'daniel')
			)
                    ,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Mobile small items', 'daniel' )
				,'param_name' 	=> 'mobilesmall_items'
				,'admin_label' 	=> false
				,'value' 		=>  array(
							esc_html__('1', 'daniel')	=> 1
							,esc_html__('2', 'daniel')	=> 2
                                                        ,esc_html__('3', 'daniel')	=> 3
                                                        ,esc_html__('4', 'daniel')	=> 4
                                    
						)
				,'description' 	=> esc_html__('Set items on 0px', 'daniel')
				,'group'		=> esc_html__('Responsive Options', 'daniel')
			)
		)
	) );
	
	
	/*** FTC Products In Category Tabs***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Products Category Tabs', 'daniel' ),
		'base' 		=> 'ftc_products_category_tabs',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'daniel' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Recent', 'daniel')		=> 'recent'
						,esc_html__('Sale', 'daniel')		=> 'sale'
						,esc_html__('Featured', 'daniel')	=> 'featured'
						,esc_html__('Best Selling', 'daniel')	=> 'best_selling'
						,esc_html__('Top Rated', 'daniel')	=> 'top_rated'
						,esc_html__('Mixed Order', 'daniel')	=> 'mixed_order'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'daniel' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Custom order', 'daniel' )
				,'param_name' 	=> 'custom_order'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('No', 'daniel')			=> 0
						,esc_html__('Yes', 'daniel')		=> 1
						)
				,'description' 	=> esc_html__( 'If you enable this option, the Product type option wont be available', 'daniel' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order by', 'daniel' )
				,'param_name' 	=> 'orderby'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('None', 'daniel')				=> 'none'
						,esc_html__('ID', 'daniel')				=> 'ID'
						,esc_html__('Date', 'daniel')				=> 'date'
						,esc_html__('Name', 'daniel')				=> 'name'
						,esc_html__('Title', 'daniel')				=> 'title'
						,esc_html__('Comment count', 'daniel')		=> 'comment_count'
						,esc_html__('Random', 'daniel')			=> 'rand'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order', 'daniel' )
				,'param_name' 	=> 'order'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Descending', 'daniel')		=> 'DESC'
						,esc_html__('Ascending', 'daniel')		=> 'ASC'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Background Color', 'daniel' )
				,'param_name' 	=> 'bg_color'
				,'admin_label' 	=> false
				,'value' 		=> '#f7f6f4'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'daniel' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> 3
				,'description' 	=> esc_html__( 'Number of Columns', 'daniel' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'daniel' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 6
				,'description' 	=> esc_html__( 'Number of Products', 'daniel' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'daniel' )
				,'param_name' 	=> 'product_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__( 'You select banners, icons in the Product Category editor', 'daniel' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Parent Category', 'daniel' )
				,'param_name' 	=> 'parent_cat'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> false
					,'sortable' 		=> false
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('Each tab will be a sub category of this category. This option is available when the Product Categories option is empty', 'daniel')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Include children', 'daniel' )
				,'param_name' 	=> 'include_children'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('No', 'daniel')			=> 0
						,esc_html__('Yes', 'daniel')		=> 1
						)
				,'description' 	=> esc_html__( 'Load the products of sub categories in each tab', 'daniel' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Active tab', 'daniel' )
				,'param_name' 	=> 'active_tab'
				,'admin_label' 	=> false
				,'value' 		=> 1
				,'description' 	=> esc_html__( 'Enter active tab number', 'daniel' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'daniel' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'daniel' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product SKU', 'daniel' )
				,'param_name' 	=> 'show_sku'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'daniel')		=> 0
							,esc_html__('Yes', 'daniel')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'daniel' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product short description', 'daniel' )
				,'param_name' 	=> 'show_short_desc'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'daniel')		=> 0
							,esc_html__('Yes', 'daniel')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'daniel' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product label', 'daniel' )
				,'param_name' 	=> 'show_label'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'daniel' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'daniel')		=> 0
							,esc_html__('Yes', 'daniel')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show add to cart button', 'daniel' )
				,'param_name' 	=> 'show_add_to_cart'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show counter', 'daniel' )
				,'param_name' 	=> 'show_counter'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show in a carousel slider', 'daniel' )
				,'param_name' 	=> 'is_slider'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('No', 'daniel')		=> 0
							,esc_html__('Yes', 'daniel')	=> 1
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Rows', 'daniel' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> true
				,'value' 		=> array(
						'1'			=> '1'
						,'2'		=> '2'
						)
				,'description' 	=> esc_html__( 'Number of Rows in slider', 'daniel' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'daniel' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'daniel')		=> 0
							,esc_html__('Yes', 'daniel')	=> 1
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'daniel' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
						)
				,'description' 	=> ''
			)
		)
	) );
	
	/*** FTC List Of Product Categories ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC List Of Product Categories', 'daniel' ),
		'base' 		=> 'ftc_list_of_product_categories',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'daniel' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Background image', 'daniel' )
				,'param_name' 	=> 'bg_image'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Category', 'daniel' )
				,'param_name' 	=> 'product_cat'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> false
					,'sortable' 		=> false
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('Display sub categories of this category', 'daniel')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Include parent category in list', 'daniel' )
				,'param_name' 	=> 'include_parent'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'daniel')	=> 1
							,esc_html__('No', 'daniel')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number of Sub Categories', 'daniel' )
				,'param_name' 	=> 'limit_sub_cat'
				,'admin_label' 	=> true
				,'value' 		=> 6
				,'description' 	=> esc_html__( 'Leave blank to show all', 'daniel' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Include these categories', 'daniel' )
				,'param_name' 	=> 'include_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('If you set the Product Category option above, this option wont be available', 'daniel')
			)
		)
	) );
        
        /*** FTC Milestone ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Milestone', 'daniel' ),
		'base' 		=> 'ftc_milestone',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number', 'daniel' )
				,'param_name' 	=> 'number'
				,'admin_label' 	=> true
				,'value' 		=> '0'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Subject', 'daniel' )
				,'param_name' 	=> 'ftc_number_meta'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Text Color Style', 'daniel' )
				,'param_name' 	=> 'text_color_style'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Default', 'daniel')	=> 'text-default'
							,esc_html__('Light', 'daniel')		=> 'text-light'
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