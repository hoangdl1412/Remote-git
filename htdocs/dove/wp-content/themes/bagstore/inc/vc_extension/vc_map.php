<?php 
add_action( 'vc_before_init', 'vela_integrate_with_vc' );
function vela_integrate_with_vc() {
	
	if( !function_exists('vc_map') ){
		return;
	}

	/********************** Content Shortcodes ***************************/
	/*** Vela Features ***/
	vc_map( array(
		'name' 		=> esc_html__( 'Vela Feature', 'bagstore' ),
		'base' 		=> 'vela_feature',
		'class' 	=> '',
		'category' 	=> 'Velatemplates',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/vela_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style', 'bagstore' )
				,'param_name' 	=> 'style'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Horizontal', 'bagstore')		=>  'feature-horizontal'
						,esc_html__('Vertical', 'bagstore')		=>  'feature-vertical'	
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Icon class', 'bagstore' )
				,'param_name' 	=> 'class_icon'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Use FontAwesome. Ex: fa-home', 'bagstore')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style icon', 'bagstore' )
				,'param_name' 	=> 'style_icon'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Default', 'bagstore')		=>  'icon-default'
						,esc_html__('Small', 'bagstore')			=>  'icon-small'	
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Image Thumbnail', 'bagstore' )
				,'param_name' 	=> 'img_id'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'dependency'  	=> array('element' => 'style', 'value' => array('feature-vertical'))
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Image Thumbnail URL', 'bagstore' )
				,'param_name' 	=> 'img_url'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Input external URL instead of image from library', 'bagstore')
				,'dependency' 	=> array('element' => 'style', 'value' => array('feature-vertical'))
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Feature title', 'bagstore' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textarea'
				,'heading' 		=> esc_html__( 'Short description', 'bagstore' )
				,'param_name' 	=> 'excerpt'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link', 'bagstore' )
				,'param_name' 	=> 'link'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'bagstore' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('New Window Tab', 'bagstore')	=>  '_blank'
						,esc_html__('Self', 'bagstore')			=>  '_self'	
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Extra class', 'bagstore' )
				,'param_name' 	=> 'extra_class'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Ex: feature-icon-blue, feature-icon-orange, feature-icon-green', 'bagstore')
			)
		)
	) );
	
	/*** Vela Blogs ***/
	vc_map( array(
		'name' 		=> esc_html__( 'Vela Blogs', 'bagstore' ),
		'base' 		=> 'vela_blogs',
		'base' 		=> 'vela_blogs',
		'class' 	=> '',
		'category' 	=> 'Velatemplates',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/vela_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'bagstore' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Layout', 'bagstore' )
				,'param_name' 	=> 'layout'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('Grid', 'bagstore')		=> 'grid'
							,esc_html__('Slider', 'bagstore')	=> 'slider'
							,esc_html__('Masonry', 'bagstore')	=> 'masonry'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Columns', 'bagstore' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> array(
							'1'				=> '1'
							,'2'			=> '2'
							,'3'			=> '3'
							,'4'			=> '4'
							)
				,'description' 	=> esc_html__( 'Number of Columns', 'bagstore' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'bagstore' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Posts', 'bagstore' )
			)
			,array(
				'type' 			=> 'vela_category'
				,'heading' 		=> esc_html__( 'Categories', 'bagstore' )
				,'param_name' 	=> 'categories'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'class'		=> 'post_cat'
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order by', 'bagstore' )
				,'param_name' 	=> 'orderby'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('None', 'bagstore')		=> 'none'
						,esc_html__('ID', 'bagstore')		=> 'ID'
						,esc_html__('Date', 'bagstore')		=> 'date'
						,esc_html__('Name', 'bagstore')		=> 'name'
						,esc_html__('Title', 'bagstore')		=> 'title'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order', 'bagstore' )
				,'param_name' 	=> 'order'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Descending', 'bagstore')		=> 'DESC'
						,esc_html__('Ascending', 'bagstore')		=> 'ASC'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show post title', 'bagstore' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show thumbnail', 'bagstore' )
				,'param_name' 	=> 'show_thumbnail'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show author', 'bagstore' )
				,'param_name' 	=> 'show_author'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'bagstore')	=> 0
							,esc_html__('Yes', 'bagstore')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show comment', 'bagstore' )
				,'param_name' 	=> 'show_comment'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show date', 'bagstore' )
				,'param_name' 	=> 'show_date'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show post excerpt', 'bagstore' )
				,'param_name' 	=> 'show_excerpt'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show read more button', 'bagstore' )
				,'param_name' 	=> 'show_readmore'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number of words in excerpt', 'bagstore' )
				,'param_name' 	=> 'excerpt_words'
				,'admin_label' 	=> false
				,'value' 		=> '16'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show load more button', 'bagstore' )
				,'param_name' 	=> 'show_load_more'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'bagstore')	=> 0
							,esc_html__('Yes', 'bagstore')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Load more button text', 'bagstore' )
				,'param_name' 	=> 'load_more_text'
				,'admin_label' 	=> false
				,'value' 		=> 'Show more'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'bagstore' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'bagstore')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'bagstore' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'bagstore')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'bagstore' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> false
				,'value' 		=> '30'
				,'description' 	=> esc_html__('Set margin between items', 'bagstore')
				,'group'		=> esc_html__('Slider Options', 'bagstore')
			)
		)
	) );

	/*** Vela Button ***/
	vc_map( array(
		'name' 		=> esc_html__( 'Vela Button', 'bagstore' ),
		'base' 		=> 'vela_button',
		'class' 	=> '',
		'category' 	=> 'Velatemplates',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/vela_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Text', 'bagstore' )
				,'param_name' 	=> 'content'
				,'admin_label' 	=> true
				,'value' 		=> 'Button text'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link', 'bagstore' )
				,'param_name' 	=> 'link'
				,'admin_label' 	=> true
				,'value' 		=> '#'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Text color', 'bagstore' )
				,'param_name' 	=> 'text_color'
				,'admin_label' 	=> false
				,'value' 		=> '#ffffff'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Text color hover', 'bagstore' )
				,'param_name' 	=> 'text_color_hover'
				,'admin_label' 	=> false
				,'value' 		=> '#ffffff'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Background color', 'bagstore' )
				,'param_name' 	=> 'bg_color'
				,'admin_label' 	=> false
				,'value' 		=> '#40bea7'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Background color hover', 'bagstore' )
				,'param_name' 	=> 'bg_color_hover'
				,'admin_label' 	=> false
				,'value' 		=> '#3f3f3f'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Border color', 'bagstore' )
				,'param_name' 	=> 'border_color'
				,'admin_label' 	=> false
				,'value' 		=> '#e8e8e8'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Border color hover', 'bagstore' )
				,'param_name' 	=> 'border_color_hover'
				,'admin_label' 	=> false
				,'value' 		=> '#40bea7'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Border width', 'bagstore' )
				,'param_name' 	=> 'border_width'
				,'admin_label' 	=> false
				,'value' 		=> '0'
				,'description' 	=> esc_html__('In pixels. Ex: 1', 'bagstore')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'bagstore' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Self', 'bagstore')				=> '_self'
						,esc_html__('New Window Tab', 'bagstore')	=> '_blank'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Size', 'bagstore' )
				,'param_name' 	=> 'size'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Small', 'bagstore')		=> 'small'
						,esc_html__('Medium', 'bagstore')	=> 'medium'
						,esc_html__('Large', 'bagstore')		=> 'large'
						,esc_html__('X-Large', 'bagstore')	=> 'x-large'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'iconpicker'
				,'heading' 		=> esc_html__( 'Font icon', 'bagstore' )
				,'param_name' 	=> 'font_icon'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'settings' 	=> array(
					'emptyIcon' 	=> true /* default true, display an "EMPTY" icon? */
					,'iconsPerPage' => 4000 /* default 100, how many icons per/page to display */
				)
				,'description' 	=> esc_html__('Add an icon before the text. Ex: fa-lock', 'bagstore')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show popup', 'bagstore' )
				,'param_name' 	=> 'popup'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('No', 'bagstore')	=> 0
							,esc_html__('Yes', 'bagstore')	=> 1
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Popup Options', 'bagstore')
			)
			,array(
				'type' 			=> 'textarea_raw_html'
				,'heading' 		=> esc_html__( 'Popup content', 'bagstore' )
				,'param_name' 	=> 'popup_content'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
				,'group'		=> esc_html__('Popup Options', 'bagstore')
			)
		)
	) );
	
	/*** Vela Single Image ***/
	vc_map( array(
		'name' 		=> esc_html__( 'Vela Single Image', 'bagstore' ),
		'base' 		=> 'vela_single_image',
		'class' 	=> '',
		'category' 	=> 'Velatemplates',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/vela_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Image', 'bagstore' )
				,'param_name' 	=> 'img_id'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Image Size', 'bagstore' )
				,'param_name' 	=> 'img_size'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__( 'Ex: thumbnail, medium, large or full', 'bagstore' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Image URL', 'bagstore' )
				,'param_name' 	=> 'img_url'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Input external URL instead of image from library', 'bagstore')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link', 'bagstore' )
				,'param_name' 	=> 'link'
				,'admin_label' 	=> true
				,'value' 		=> '#'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link Title', 'bagstore' )
				,'param_name' 	=> 'link_title'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Hover Image Effect', 'bagstore' )
				,'param_name' 	=> 'style_effect'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Effect-Image Left Right', 'bagstore')		=> 'effect-image'
						,esc_html__('Effect Border Image', 'bagstore')				=> 'effect-border-image'
						,esc_html__('Effect Background Image', 'bagstore')		=> 'effect-background-image'
						,esc_html__('Effect Background Top Image', 'bagstore')	=> 'effect-top-image'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'bagstore' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('New Window Tab', 'bagstore')		=> '_blank'
						,esc_html__('Self', 'bagstore')				=> '_self'
						)
				,'description' 	=> ''
			)
		)
	) );
	
	/*** Vela Heading ***/
	vc_map( array(
		'name' 		=> esc_html__( 'Vela Heading', 'bagstore' ),
		'base' 		=> 'vela_heading',
		'class' 	=> '',
		'category' 	=> 'Velatemplates',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/vela_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Heading Size', 'bagstore' )
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
				,'heading' 		=> esc_html__( 'Text', 'bagstore' )
				,'param_name' 	=> 'text'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
                    ,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Extra class name', 'bagstore' )
				,'param_name' 	=> 'class'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
		)
	) );
	
	/*** Vela Banner ***/
	vc_map( array(
		'name' 		=> esc_html__( 'Vela Banner', 'bagstore' ),
		'base' 		=> 'vela_banner',
		'class' 	=> '',
		'category' 	=> 'Velatemplates',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/vela_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Background Image', 'bagstore' )
				,'param_name' 	=> 'bg_id'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Background Url', 'bagstore' )
				,'param_name' 	=> 'bg_url'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Input external URL instead of image from library', 'bagstore')
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Background Color', 'bagstore' )
				,'param_name' 	=> 'bg_color'
				,'admin_label' 	=> false
				,'value' 		=> '#ffffff'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textarea_html'
				,'heading' 		=> esc_html__( 'Banner content', 'bagstore' )
				,'param_name' 	=> 'content'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link', 'bagstore' )
				,'param_name' 	=> 'link'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link Title', 'bagstore' )
				,'param_name' 	=> 'link_title'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style Effect', 'bagstore' )
				,'param_name' 	=> 'style_effect'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Background Scale', 'bagstore')						=>  'vela-effect'
						,esc_html__('Background Scale Opacity', 'bagstore')				=>  'vela-effect-banner-scale'
						,esc_html__('Background Scale Dark', 'bagstore')					=>	'vela-effect-dark'
						,esc_html__('Background Scale and Line', 'bagstore')				=>  'vela-effect-and-line'
						,esc_html__('Background Scale Opacity and Line', 'bagstore')		=>  'vela-effect-banner-scale-line'
						,esc_html__('Background Scale Dark and Line', 'bagstore')		=>  'vela-effect-dark-line'
						,esc_html__('Background Opacity and Line', 'bagstore')			=>	'background-opacity-and-line'
						,esc_html__('Background Dark and Line', 'bagstore')				=>	'background-dark-and-line'
						,esc_html__('Background Opacity', 'bagstore')					=>	'background-opacity'
						,esc_html__('Background Dark', 'bagstore')						=>	'background-dark'
						,esc_html__('Line', 'bagstore')									=>	'eff-line'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Background Opacity On Device', 'bagstore' )
				,'param_name' 	=> 'opacity_bg_device'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('No', 'bagstore')			=>  0
						,esc_html__('Yes', 'bagstore')		=>  1
						)
				,'description' 	=> esc_html__('Background image will be blurred on device. Note: should set background color ', 'bagstore')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Responsive size', 'bagstore' )
				,'param_name' 	=> 'responsive_size'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Yes', 'bagstore')		=>  1
						,esc_html__('No', 'bagstore')		=>  0
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'bagstore' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('New Window Tab', 'bagstore')	=>  '_blank'
						,esc_html__('Self', 'bagstore')			=>  '_self'	
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Extra Class', 'bagstore' )
				,'param_name' 	=> 'extra_class'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> esc_html__('Ex: rp-rectangle-full, rp-rectangle', 'bagstore')
			)
		)
	) );
	
	/* Vela Testimonial */
	vc_map( array(
		'name' 		=> esc_html__( 'Vela Testimonial', 'bagstore' ),
		'base' 		=> 'vela_testimonial',
		'class' 	=> '',
		'category' 	=> 'Velatemplates',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/vela_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'vela_category'
				,'heading' 		=> esc_html__( 'Categories', 'bagstore' )
				,'param_name' 	=> 'categories'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'class'		=> 'vela_testimonial'
			)
			,array(
				'type' 			=> 'textarea'
				,'heading' 		=> esc_html__( 'Testimonial IDs', 'bagstore' )
				,'param_name' 	=> 'ids'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('A comma separated list of testimonial ids', 'bagstore')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show Avatar', 'bagstore' )
				,'param_name' 	=> 'show_avatar'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'bagstore' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> '4'
				,'description' 	=> esc_html__('Number of Posts', 'bagstore')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number of words in excerpt', 'bagstore' )
				,'param_name' 	=> 'excerpt_words'
				,'admin_label' 	=> true
				,'value' 		=> '50'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Text Color Style', 'bagstore' )
				,'param_name' 	=> 'text_color_style'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Default', 'bagstore')	=> 'text-default'
							,esc_html__('Light', 'bagstore')		=> 'text-light'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show in a carousel slider', 'bagstore' )
				,'param_name' 	=> 'is_slider'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'bagstore')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'bagstore' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> '3'
				,'group'		=> esc_html__('Slider Options', 'bagstore')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'bagstore' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'bagstore')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show pagination dots', 'bagstore' )
				,'param_name' 	=> 'show_dots'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'bagstore')	=> 0
							,esc_html__('Yes', 'bagstore')	=> 1
						)
				,'description' 	=> esc_html__('If it is set, the navigation buttons will be removed', 'bagstore')
				,'group'		=> esc_html__('Slider Options', 'bagstore')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'bagstore' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
						)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'bagstore')
			)
		)
	) );
	
	/*** Vela Brands Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'Vela Brands Slider', 'bagstore' ),
		'base' 		=> 'vela_brands_slider',
		'class' 	=> '',
		'category' 	=> 'Velatemplates',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/vela_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'bagstore' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'bagstore' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> '7'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Rows', 'bagstore' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> true
				,'value' 		=> 1
				,'description' 	=> esc_html__( 'Number of Rows', 'bagstore' )
			)
			,array(
				'type' 			=> 'vela_category'
				,'heading' 		=> esc_html__( 'Categories', 'bagstore' )
				,'param_name' 	=> 'categories'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'class'		=> 'vela_brand'
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'bagstore' )
				,'param_name' 	=> 'margin_image'
				,'admin_label' 	=> false
				,'value' 		=> '32'
				,'description' 	=> esc_html__('Set margin between items', 'bagstore')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Activate link', 'bagstore' )
				,'param_name' 	=> 'active_link'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'bagstore' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'bagstore' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
		)
	) );
	
	
	/*** Vela Google Map ***/
	vc_map( array(
		'name' 		=> esc_html__( 'Vela Google Map', 'bagstore' ),
		'base' 		=> 'vela_google_map',
		'class' 	=> '',
		'category' 	=> 'Velatemplates',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/vela_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Address', 'bagstore' )
				,'param_name' 	=> 'address'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('You have to input your API Key in Appearance > Theme Options > General tab', 'bagstore')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Height', 'bagstore' )
				,'param_name' 	=> 'height'
				,'admin_label' 	=> true
				,'value' 		=> 360
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Zoom', 'bagstore' )
				,'param_name' 	=> 'zoom'
				,'admin_label' 	=> true
				,'value' 		=> 12
				,'description' 	=> esc_html__('Input a number between 0 and 22', 'bagstore')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Map Type', 'bagstore' )
				,'param_name' 	=> 'map_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
								esc_html__('ROADMAP', 'bagstore')		=> 'ROADMAP'
								,esc_html__('SATELLITE', 'bagstore')		=> 'SATELLITE'
								,esc_html__('HYBRID', 'bagstore')		=> 'HYBRID'
								,esc_html__('TERRAIN', 'bagstore')		=> 'TERRAIN'
							)
				,'description' 	=> ''
			)
		)
	) );
        
	/*** Vela Countdown ***/
	vc_map( array(
		'name' 		=> esc_html__( 'Vela Countdown', 'bagstore' ),
		'base' 		=> 'vela_countdown',
		'class' 	=> '',
		'category' 	=> 'Velatemplates',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/vela_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Day', 'bagstore' )
				,'param_name' 	=> 'day'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Month', 'bagstore' )
				,'param_name' 	=> 'month'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Year', 'bagstore' )
				,'param_name' 	=> 'year'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Text Color Style', 'bagstore' )
				,'param_name' 	=> 'text_color_style'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Default', 'bagstore')	=> 'text-default'
							,esc_html__('Light', 'bagstore')		=> 'text-light'
						)
				,'description' 	=> ''
			)
		)
	) );
	
	/*** Vela Feedburner Subscription ***/
	vc_map( array(
		'name' 		=> esc_html__( 'Vela Feedburner Subscription', 'bagstore' ),
		'base' 		=> 'vela_feedburner_subscription',
		'class' 	=> '',
		'category' 	=> 'Velatemplates',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/vela_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Feedburner ID', 'bagstore' )
				,'param_name' 	=> 'feedburner_id'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Title', 'bagstore' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> 'Newsletter'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Intro Text', 'bagstore' )
				,'param_name' 	=> 'intro_text'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Button Text', 'bagstore' )
				,'param_name' 	=> 'button_text'
				,'admin_label' 	=> true
				,'value' 		=> 'Subscribe'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Placeholder Text', 'bagstore' )
				,'param_name' 	=> 'placeholder_text'
				,'admin_label' 	=> true
				,'value' 		=> 'Enter your email address'
				,'description' 	=> ''
			)
		)
	) );

	/********************** Vela Product Shortcodes ************************/

	/*** Vela Products ***/
	vc_map( array(
		'name' 		=> esc_html__( 'Vela Products', 'bagstore' ),
		'base' 		=> 'vela_products',
		'class' 	=> '',
		'category' 	=> 'Velatemplates',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/vela_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'bagstore' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'bagstore' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Recent', 'bagstore')		=> 'recent'
						,esc_html__('Sale', 'bagstore')		=> 'sale'
						,esc_html__('Featured', 'bagstore')	=> 'featured'
						,esc_html__('Best Selling', 'bagstore')	=> 'best_selling'
						,esc_html__('Top Rated', 'bagstore')	=> 'top_rated'
						,esc_html__('Mixed Order', 'bagstore')	=> 'mixed_order'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'bagstore' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Custom order', 'bagstore' )
				,'param_name' 	=> 'custom_order'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('No', 'bagstore')			=> 0
						,esc_html__('Yes', 'bagstore')		=> 1
						)
				,'description' 	=> esc_html__( 'If you enable this option, the Product type option wont be available', 'bagstore' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order by', 'bagstore' )
				,'param_name' 	=> 'orderby'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('None', 'bagstore')				=> 'none'
						,esc_html__('ID', 'bagstore')				=> 'ID'
						,esc_html__('Date', 'bagstore')				=> 'date'
						,esc_html__('Name', 'bagstore')				=> 'name'
						,esc_html__('Title', 'bagstore')				=> 'title'
						,esc_html__('Comment count', 'bagstore')		=> 'comment_count'
						,esc_html__('Random', 'bagstore')			=> 'rand'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order', 'bagstore' )
				,'param_name' 	=> 'order'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Descending', 'bagstore')		=> 'DESC'
						,esc_html__('Ascending', 'bagstore')		=> 'ASC'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'bagstore' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Columns', 'bagstore' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'bagstore' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Products', 'bagstore' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'bagstore' )
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
				,'heading' 		=> esc_html__( 'Product IDs', 'bagstore' )
				,'param_name' 	=> 'ids'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('Enter product name or slug to search', 'bagstore')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Meta position', 'bagstore' )
				,'param_name' 	=> 'meta_position'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Bottom', 'bagstore')			=> 'bottom'
							,esc_html__('On Thumbnail', 'bagstore')	=> 'on-thumbnail'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'bagstore' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'bagstore' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product SKU', 'bagstore' )
				,'param_name' 	=> 'show_sku'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'bagstore')	=> 0
							,esc_html__('Yes', 'bagstore')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'bagstore' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product short description', 'bagstore' )
				,'param_name' 	=> 'show_short_desc'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'bagstore')	=> 0
							,esc_html__('Yes', 'bagstore')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'bagstore' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product label', 'bagstore' )
				,'param_name' 	=> 'show_label'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'bagstore' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'bagstore')	=> 0
							,esc_html__('Yes', 'bagstore')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show add to cart button', 'bagstore' )
				,'param_name' 	=> 'show_add_to_cart'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
		)
	) );

	/*** Vela Products Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'Vela Products Slider', 'bagstore' ),
		'base' 		=> 'vela_products_slider',
		'class' 	=> '',
		'category' 	=> 'Velatemplates',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/vela_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'bagstore' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'bagstore' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Recent', 'bagstore')		=> 'recent-product'
						,esc_html__('Sale', 'bagstore')		=> 'sale-product'
						,esc_html__('Featured', 'bagstore')	=> 'featured-product'
						,esc_html__('Best Selling', 'bagstore')	=> 'best_selling-product'
						,esc_html__('Top Rated', 'bagstore')	=> 'top_rated-product'
						,esc_html__('Mixed Order', 'bagstore')	=> 'mixed_order-product'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'bagstore' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Custom order', 'bagstore' )
				,'param_name' 	=> 'custom_order'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('No', 'bagstore')			=> 0
						,esc_html__('Yes', 'bagstore')		=> 1
						)
				,'description' 	=> esc_html__( 'If you enable this option, the Product type option wont be available', 'bagstore' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order by', 'bagstore' )
				,'param_name' 	=> 'orderby'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('None', 'bagstore')				=> 'none'
						,esc_html__('ID', 'bagstore')				=> 'ID'
						,esc_html__('Date', 'bagstore')				=> 'date'
						,esc_html__('Name', 'bagstore')				=> 'name'
						,esc_html__('Title', 'bagstore')				=> 'title'
						,esc_html__('Comment count', 'bagstore')		=> 'comment_count'
						,esc_html__('Random', 'bagstore')			=> 'rand'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order', 'bagstore' )
				,'param_name' 	=> 'order'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Descending', 'bagstore')		=> 'DESC'
						,esc_html__('Ascending', 'bagstore')		=> 'ASC'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'bagstore' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Columns', 'bagstore' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Rows', 'bagstore' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> true
				,'value' 		=> 1
				,'description' 	=> esc_html__( 'Number of Rows', 'bagstore' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'bagstore' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 6
				,'description' 	=> esc_html__( 'Number of Products', 'bagstore' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'bagstore' )
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
				,'heading' 		=> esc_html__( 'Show product image', 'bagstore' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'bagstore' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product SKU', 'bagstore' )
				,'param_name' 	=> 'show_sku'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'bagstore')		=> 0
							,esc_html__('Yes', 'bagstore')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'bagstore' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product short description', 'bagstore' )
				,'param_name' 	=> 'show_short_desc'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'bagstore')		=> 0
							,esc_html__('Yes', 'bagstore')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'bagstore' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product label', 'bagstore' )
				,'param_name' 	=> 'show_label'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'bagstore' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'bagstore')		=> 0
							,esc_html__('Yes', 'bagstore')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show add to cart button', 'bagstore' )
				,'param_name' 	=> 'show_add_to_cart'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'bagstore' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'bagstore' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> false
				,'value' 		=> '20'
				,'description' 	=> esc_html__('Set margin between items', 'bagstore')
			)
		)
	) );
	
	/*** Vela Products Widget ***/
	vc_map( array(
		'name' 			=> esc_html__( 'Vela Products Widget', 'bagstore' ),
		'base' 			=> 'vela_products_widget',
		'class' 		=> '',
		'description' 	=> '',
		'category' 		=> 'Velatemplates',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/vela_icon.png",
		'params' 		=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'bagstore' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'bagstore' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Recent', 'bagstore')		=> 'recent'
						,esc_html__('Sale', 'bagstore')		=> 'sale'
						,esc_html__('Featured', 'bagstore')	=> 'featured'
						,esc_html__('Best Selling', 'bagstore')	=> 'best_selling'
						,esc_html__('Top Rated', 'bagstore')	=> 'top_rated'
						,esc_html__('Mixed Order', 'bagstore')	=> 'mixed_order'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'bagstore' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'bagstore' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 6
				,'description' 	=> esc_html__( 'Number of Products', 'bagstore' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'bagstore' )
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
				,'heading' 		=> esc_html__( 'Show product image', 'bagstore' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Thumbnail size', 'bagstore' )
				,'param_name' 	=> 'thumbnail_size'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('shop_thumbnail', 'bagstore')		=> 'Product Thumbnails'
						,esc_html__('shop_catalog', 'bagstore')		=> 'Catalog Images'
						,esc_html__('shop_single', 'bagstore')	=> 'Single Product Image'
						)
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'bagstore' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'bagstore' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'bagstore' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'bagstore' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'bagstore')	=> 0
							,esc_html__('Yes', 'bagstore')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show in a carousel slider', 'bagstore' )
				,'param_name' 	=> 'is_slider'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('No', 'bagstore')	=> 0
							,esc_html__('Yes', 'bagstore')	=> 1
							)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'bagstore')
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Row', 'bagstore' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> false
				,'value' 		=> 3
				,'description' 	=> esc_html__( 'Number of Rows for slider', 'bagstore' )
				,'group'		=> esc_html__('Slider Options', 'bagstore')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'bagstore' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'bagstore')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'bagstore' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'bagstore')
			)
		)
	) );
	
	/*** Vela Product Deals Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'Vela Product Deals Slider', 'bagstore' ),
		'base' 		=> 'vela_product_deals_slider',
		'class' 	=> '',
		'category' 	=> 'Velatemplates',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/vela_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'bagstore' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'bagstore' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Recent', 'bagstore')		=> 'recent'
						,esc_html__('Featured', 'bagstore')	=> 'featured'
						,esc_html__('Best Selling', 'bagstore')	=> 'best_selling'
						,esc_html__('Top Rated', 'bagstore')	=> 'top_rated'
						,esc_html__('Mixed Order', 'bagstore')	=> 'mixed_order'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'bagstore' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Item Layout', 'bagstore' )
				,'param_name' 	=> 'layout'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('Grid', 'bagstore')		=> 'grid'
							,esc_html__('List', 'bagstore')		=> 'list'
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'bagstore' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> false
				,'value' 		=> 4
				,'description' 	=> esc_html__( 'Number of Columns', 'bagstore' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'bagstore' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Products', 'bagstore' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'bagstore' )
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
				,'heading' 		=> esc_html__( 'Show counter', 'bagstore' )
				,'param_name' 	=> 'show_counter'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Counter position', 'bagstore' )
				,'param_name' 	=> 'counter_position'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Bottom', 'bagstore')			=> 'bottom'
							,esc_html__('On thumbnail', 'bagstore')	=> 'on-thumbnail'
							)
				,'description' 	=> ''
				,'dependency' 	=> array('element' => 'show_counter', 'value' => array('1'))
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'bagstore' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show gallery list', 'bagstore' )
				,'param_name' 	=> 'show_gallery'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Gallery position', 'bagstore' )
				,'param_name' 	=> 'gallery_position'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Bottom out line', 'bagstore')	=> 'bottom-out'
							,esc_html__('Bottom in line', 'bagstore')	=> 'bottom-in'
							)
				,'description' 	=> ''
				,'dependency' 	=> array('element' => 'show_counter', 'value' => array('1'))
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'bagstore' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product SKU', 'bagstore' )
				,'param_name' 	=> 'show_sku'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'bagstore')		=> 0
							,esc_html__('Yes', 'bagstore')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'bagstore' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product short description', 'bagstore' )
				,'param_name' 	=> 'show_short_desc'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'bagstore')		=> 0
							,esc_html__('Yes', 'bagstore')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'bagstore' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product label', 'bagstore' )
				,'param_name' 	=> 'show_label'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'bagstore' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'bagstore')		=> 0
							,esc_html__('Yes', 'bagstore')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show add to cart button', 'bagstore' )
				,'param_name' 	=> 'show_add_to_cart'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'bagstore' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'bagstore' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'bagstore' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> false
				,'value' 		=> '20'
				,'description' 	=> esc_html__('Set margin between items', 'bagstore')
			)
		)
	) );
	
	/*** Vela Product Categories Slider ***/
	vc_map( array(
		'name' 		=> esc_html__( 'Vela Product Categories Slider', 'bagstore' ),
		'base' 		=> 'vela_product_categories_slider',
		'class' 	=> '',
		'category' 	=> 'Velatemplates',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/vela_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'bagstore' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'bagstore' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> 4
				,'description' 	=> esc_html__( 'Number of Columns', 'bagstore' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Rows', 'bagstore' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> true
				,'value' 		=> 1
				,'description' 	=> esc_html__( 'Number of Rows', 'bagstore' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'bagstore' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Product Categories', 'bagstore' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Parent', 'bagstore' )
				,'param_name' 	=> 'parent'
				,'admin_label' 	=> true
				,'settings' => array(
					'multiple' 			=> false
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'value' 		=> ''
				,'description' 	=> esc_html__( 'Select a category. Get direct children of this category', 'bagstore' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Child Of', 'bagstore' )
				,'param_name' 	=> 'child_of'
				,'admin_label' 	=> true
				,'settings' => array(
					'multiple' 			=> false
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'value' 		=> ''
				,'description' 	=> esc_html__( 'Select a category. Get all descendents of this category', 'bagstore' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'bagstore' )
				,'param_name' 	=> 'ids'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('Include these categories', 'bagstore')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Hide empty product categories', 'bagstore' )
				,'param_name' 	=> 'hide_empty'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product category title', 'bagstore' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'bagstore' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'bagstore' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'bagstore' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> false
				,'value' 		=> '0'
				,'description' 	=> esc_html__('Set margin between items', 'bagstore')
			)
		)
	) );
	
	
	/*** Vela Products In Category Tabs***/
	vc_map( array(
		'name' 		=> esc_html__( 'Vela Products Category Tabs', 'bagstore' ),
		'base' 		=> 'vela_products_category_tabs',
		'class' 	=> '',
		'category' 	=> 'Velatemplates',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/vela_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Product type', 'bagstore' )
				,'param_name' 	=> 'product_type'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('Recent', 'bagstore')		=> 'recent'
						,esc_html__('Sale', 'bagstore')		=> 'sale'
						,esc_html__('Featured', 'bagstore')	=> 'featured'
						,esc_html__('Best Selling', 'bagstore')	=> 'best_selling'
						,esc_html__('Top Rated', 'bagstore')	=> 'top_rated'
						,esc_html__('Mixed Order', 'bagstore')	=> 'mixed_order'
						)
				,'description' 	=> esc_html__( 'Select type of product', 'bagstore' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Custom order', 'bagstore' )
				,'param_name' 	=> 'custom_order'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('No', 'bagstore')			=> 0
						,esc_html__('Yes', 'bagstore')		=> 1
						)
				,'description' 	=> esc_html__( 'If you enable this option, the Product type option wont be available', 'bagstore' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order by', 'bagstore' )
				,'param_name' 	=> 'orderby'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('None', 'bagstore')				=> 'none'
						,esc_html__('ID', 'bagstore')				=> 'ID'
						,esc_html__('Date', 'bagstore')				=> 'date'
						,esc_html__('Name', 'bagstore')				=> 'name'
						,esc_html__('Title', 'bagstore')				=> 'title'
						,esc_html__('Comment count', 'bagstore')		=> 'comment_count'
						,esc_html__('Random', 'bagstore')			=> 'rand'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order', 'bagstore' )
				,'param_name' 	=> 'order'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Descending', 'bagstore')		=> 'DESC'
						,esc_html__('Ascending', 'bagstore')		=> 'ASC'
						)
				,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'colorpicker'
				,'heading' 		=> esc_html__( 'Background Color', 'bagstore' )
				,'param_name' 	=> 'bg_color'
				,'admin_label' 	=> false
				,'value' 		=> '#f7f6f4'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Columns', 'bagstore' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> 3
				,'description' 	=> esc_html__( 'Number of Columns', 'bagstore' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'bagstore' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 6
				,'description' 	=> esc_html__( 'Number of Products', 'bagstore' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Categories', 'bagstore' )
				,'param_name' 	=> 'product_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__( 'You select banners, icons in the Product Category editor', 'bagstore' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Parent Category', 'bagstore' )
				,'param_name' 	=> 'parent_cat'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> false
					,'sortable' 		=> false
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('Each tab will be a sub category of this category. This option is available when the Product Categories option is empty', 'bagstore')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Include children', 'bagstore' )
				,'param_name' 	=> 'include_children'
				,'admin_label' 	=> true
				,'value' 		=> array(
						esc_html__('No', 'bagstore')			=> 0
						,esc_html__('Yes', 'bagstore')		=> 1
						)
				,'description' 	=> esc_html__( 'Load the products of sub categories in each tab', 'bagstore' )
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Active tab', 'bagstore' )
				,'param_name' 	=> 'active_tab'
				,'admin_label' 	=> false
				,'value' 		=> 1
				,'description' 	=> esc_html__( 'Enter active tab number', 'bagstore' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product image', 'bagstore' )
				,'param_name' 	=> 'show_image'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product name', 'bagstore' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product SKU', 'bagstore' )
				,'param_name' 	=> 'show_sku'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'bagstore')		=> 0
							,esc_html__('Yes', 'bagstore')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product price', 'bagstore' )
				,'param_name' 	=> 'show_price'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product short description', 'bagstore' )
				,'param_name' 	=> 'show_short_desc'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'bagstore')		=> 0
							,esc_html__('Yes', 'bagstore')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product rating', 'bagstore' )
				,'param_name' 	=> 'show_rating'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product label', 'bagstore' )
				,'param_name' 	=> 'show_label'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show product categories', 'bagstore' )
				,'param_name' 	=> 'show_categories'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'bagstore')		=> 0
							,esc_html__('Yes', 'bagstore')	=> 1
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show add to cart button', 'bagstore' )
				,'param_name' 	=> 'show_add_to_cart'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show counter', 'bagstore' )
				,'param_name' 	=> 'show_counter'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show in a carousel slider', 'bagstore' )
				,'param_name' 	=> 'is_slider'
				,'admin_label' 	=> true
				,'value' 		=> array(
							esc_html__('No', 'bagstore')		=> 0
							,esc_html__('Yes', 'bagstore')	=> 1
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Rows', 'bagstore' )
				,'param_name' 	=> 'rows'
				,'admin_label' 	=> true
				,'value' 		=> array(
						'1'			=> '1'
						,'2'		=> '2'
						)
				,'description' 	=> esc_html__( 'Number of Rows in slider', 'bagstore' )
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'bagstore' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('No', 'bagstore')		=> 0
							,esc_html__('Yes', 'bagstore')	=> 1
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'bagstore' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
						)
				,'description' 	=> ''
			)
		)
	) );
	
	/*** Vela List Of Product Categories ***/
	vc_map( array(
		'name' 		=> esc_html__( 'Vela List Of Product Categories', 'bagstore' ),
		'base' 		=> 'vela_list_of_product_categories',
		'class' 	=> '',
		'category' 	=> 'Velatemplates',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/vela_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'bagstore' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Image List Category', 'bagstore' )
				,'param_name' 	=> 'bg_image'
				,'admin_label' 	=> false
				,'value' 		=> ''
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Hover Image Effect', 'bagstore' )
				,'param_name' 	=> 'style_effect'
				,'admin_label' 	=> false
				,'value' 		=> array(
						esc_html__('Effect-Image Left Right', 'bagstore')		=> 'effect-image'
						,esc_html__('Effect Border Image', 'bagstore')				=> 'effect-border-image'
						,esc_html__('Effect Background Image', 'bagstore')		=> 'effect-background-image'
						,esc_html__('Effect Background Top Image', 'bagstore')	=> 'effect-top-image'
						)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Product Category', 'bagstore' )
				,'param_name' 	=> 'product_cat'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> false
					,'sortable' 		=> false
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('Display sub categories of this category', 'bagstore')
			)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Include parent category in list', 'bagstore' )
				,'param_name' 	=> 'include_parent'
				,'admin_label' 	=> false
				,'value' 		=> array(
							esc_html__('Yes', 'bagstore')	=> 1
							,esc_html__('No', 'bagstore')	=> 0
							)
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number of Sub Categories', 'bagstore' )
				,'param_name' 	=> 'limit_sub_cat'
				,'admin_label' 	=> true
				,'value' 		=> 6
				,'description' 	=> esc_html__( 'Leave blank to show all', 'bagstore' )
			)
			,array(
				'type' 			=> 'autocomplete'
				,'heading' 		=> esc_html__( 'Include these categories', 'bagstore' )
				,'param_name' 	=> 'include_cats'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'settings' => array(
					'multiple' 			=> true
					,'sortable' 		=> true
					,'unique_values' 	=> true
				)
				,'description' 	=> esc_html__('If you set the Product Category option above, this option wont be available', 'bagstore')
			)
		)
	) );
        
        /*** Vela Milestone ***/
	vc_map( array(
		'name' 		=> esc_html__( 'Vela Milestone', 'bagstore' ),
		'base' 		=> 'vela_milestone',
		'class' 	=> '',
		'category' 	=> 'Velatemplates',
                "icon"          => get_template_directory_uri() . "/inc/vc_extension/vela_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number', 'bagstore' )
				,'param_name' 	=> 'number'
				,'admin_label' 	=> true
				,'value' 		=> '0'
				,'description' 	=> ''
			)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Subject', 'bagstore' )
				,'param_name' 	=> 'subject'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
			)
		)
	) );
	
}

/*** Add Shortcode Param ***/
WpbakeryShortcodeParams::addField('vela_category', 'vela_product_catgories_shortcode_param');
if( !function_exists('vela_product_catgories_shortcode_param') ){
	function vela_product_catgories_shortcode_param($settings, $value){
		$categories = vela_get_list_categories_shortcode_param(0, $settings);
		$arr_value = explode(',', $value);
		ob_start();
		?>
		<input type="hidden" class="wpb_vc_param_value wpb-textinput product_cats textfield vela-hidden-selected-categories" name="<?php echo esc_attr($settings['param_name']); ?>" value="<?php echo esc_attr($value); ?>" />
		<div class="categorydiv">
			<div class="tabs-panel">
				<ul class="categorychecklist">
					<?php foreach($categories as $cat){ ?>
					<li>
						<label>
							<input type="checkbox" class="checkbox vela-select-category" value="<?php echo esc_attr($cat->term_id); ?>" <?php echo (in_array($cat->term_id, $arr_value))?'checked':''; ?> />
							<?php echo esc_html($cat->name); ?>
						</label>
						<?php vela_get_list_sub_categories_shortcode_param($cat->term_id, $arr_value, $settings); ?>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
		<script type="text/javascript">
			jQuery('.vela-select-category').bind('change', function(){
				"use strict";
				
				var selected = jQuery('.vela-select-category:checked');
				jQuery('.vela-hidden-selected-categories').val('');
				var selected_id = new Array();
				selected.each(function(index, ele){
					selected_id.push(jQuery(ele).val());
				});
				selected_id = selected_id.join(',');
				jQuery('.vela-hidden-selected-categories').val(selected_id);
			});
		</script>
		<?php
		return ob_get_clean();
	}
}

if( !function_exists('vela_get_list_categories_shortcode_param') ){
	function vela_get_list_categories_shortcode_param( $cat_parent_id, $settings ){
		$taxonomy = 'product_cat';
		if( isset($settings['class']) ){
			if( $settings['class'] == 'post_cat' ){
				$taxonomy = 'category';
			}
			if( $settings['class'] == 'vela_testimonial' ){
				$taxonomy = 'vela_testimonial_cat';
			}
			if( $settings['class'] == 'vela_portfolio' ){
				$taxonomy = 'vela_portfolio_cat';
			}
			if( $settings['class'] == 'vela_brand' ){
				$taxonomy = 'vela_brand_cat';
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

if( !function_exists('vela_get_list_sub_categories_shortcode_param') ){
	function vela_get_list_sub_categories_shortcode_param( $cat_parent_id, $arr_value, $settings ){
		$sub_categories = vela_get_list_categories_shortcode_param($cat_parent_id, $settings); 
		if( count($sub_categories) > 0){
		?>
			<ul class="children">
				<?php foreach( $sub_categories as $sub_cat ){ ?>
					<li>
						<label>
							<input type="checkbox" class="checkbox vela-select-category" value="<?php echo esc_attr($sub_cat->term_id); ?>" <?php echo (in_array($sub_cat->term_id, $arr_value))?'checked':''; ?> />
							<?php echo esc_html($sub_cat->name); ?>
						</label>
						<?php vela_get_list_sub_categories_shortcode_param($sub_cat->term_id, $arr_value, $settings); ?>
					</li>
				<?php } ?>
			</ul>
		<?php }
	}
}

if( class_exists('Vc_Vendor_Woocommerce') ){
	$vc_woo_vendor = new Vc_Vendor_Woocommerce();

	/* autocomplete callback */
	add_filter( 'vc_autocomplete_vela_products_ids_callback', array($vc_woo_vendor, 'productIdAutocompleteSuggester') );
	add_filter( 'vc_autocomplete_vela_products_ids_render', array($vc_woo_vendor, 'productIdAutocompleteRender') );
	
	
	$shortcode_field_cats = array();
	$shortcode_field_cats[] = array('vela_products', 'product_cats');
	$shortcode_field_cats[] = array('vela_products_slider', 'product_cats');
	$shortcode_field_cats[] = array('vela_products_widget', 'product_cats');
	$shortcode_field_cats[] = array('vela_product_deals_slider', 'product_cats');
	$shortcode_field_cats[] = array('vela_products_category_tabs', 'product_cats');
	$shortcode_field_cats[] = array('vela_products_category_tabs', 'parent_cat');
	$shortcode_field_cats[] = array('vela_list_of_product_categories', 'product_cat');
	$shortcode_field_cats[] = array('vela_list_of_product_categories', 'include_cats');
	$shortcode_field_cats[] = array('vela_product_categories_slider', 'parent');
	$shortcode_field_cats[] = array('vela_product_categories_slider', 'child_of');
	$shortcode_field_cats[] = array('vela_product_categories_slider', 'ids');
		
	foreach( $shortcode_field_cats as $shortcode_field ){
		add_filter( 'vc_autocomplete_'.$shortcode_field[0].'_'.$shortcode_field[1].'_callback', array($vc_woo_vendor, 'productCategoryCategoryAutocompleteSuggester') );
		add_filter( 'vc_autocomplete_'.$shortcode_field[0].'_'.$shortcode_field[1].'_render', array($vc_woo_vendor, 'productCategoryCategoryRenderByIdExact') );
	}
}
?>