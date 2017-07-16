<?php 
add_action( 'vc_before_init', 'ftc_integrate_with_vc' );
function ftc_integrate_with_vc() {
	
	if( !function_exists('vc_map') ){
		return;
	}

	/********************** Content Shortcodes ***************************/
	/*** FTC Features ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Feature', 'dove' ),
		'base' 		=> 'ftc_feature',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
		"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style', 'dove' )
				,'param_name' 	=> 'style'
				,'admin_label' 	=> true
				,'value' 		=> array(
					esc_html__('Horizontal', 'dove')		=>  'feature-horizontal'
					,esc_html__('Vertical', 'dove')		=>  'feature-vertical'	
					)
				,'description' 	=> ''
				)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Icon class', 'dove' )
				,'param_name' 	=> 'class_icon'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Use FontAwesome. Ex: fa-home', 'dove')
				)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Style icon', 'dove' )
				,'param_name' 	=> 'style_icon'
				,'admin_label' 	=> true
				,'value' 		=> array(
					esc_html__('Default', 'dove')		=>  'icon-default'
					,esc_html__('Small', 'dove')			=>  'icon-small'	
					)
				,'description' 	=> ''
				)
			,array(
				'type' 			=> 'attach_image'
				,'heading' 		=> esc_html__( 'Image Thumbnail', 'dove' )
				,'param_name' 	=> 'img_id'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'dependency'  	=> array('element' => 'style', 'value' => array('feature-vertical'))
				)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Image Thumbnail URL', 'dove' )
				,'param_name' 	=> 'img_url'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Input external URL instead of image from library', 'dove')
				,'dependency' 	=> array('element' => 'style', 'value' => array('feature-vertical'))
				)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Feature title', 'dove' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				)
			,array(
				'type' 			=> 'textarea'
				,'heading' 		=> esc_html__( 'Short description', 'dove' )
				,'param_name' 	=> 'excerpt'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Link', 'dove' )
				,'param_name' 	=> 'link'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Target', 'dove' )
				,'param_name' 	=> 'target'
				,'admin_label' 	=> true
				,'value' 		=> array(
					esc_html__('New Window Tab', 'dove')	=>  '_blank'
					,esc_html__('Self', 'dove')			=>  '_self'	
					)
				,'description' 	=> ''
				)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Extra class', 'dove' )
				,'param_name' 	=> 'extra_class'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> esc_html__('Ex: feature-icon-blue, feature-icon-orange, feature-icon-green', 'dove')
				)
			)
		) );
	
	/*** FTC Blogs ***/
	vc_map( array(
		'name' 		=> esc_html__( 'FTC Blogs', 'dove' ),
		'base' 		=> 'ftc_blogs',
		'base' 		=> 'ftc_blogs',
		'class' 	=> '',
		'category' 	=> 'ThemeFTC',
		"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
		'params' 	=> array(
			array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Block title', 'dove' )
				,'param_name' 	=> 'title'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Layout', 'dove' )
				,'param_name' 	=> 'layout'
				,'admin_label' 	=> true
				,'value' 		=> array(
					esc_html__('Grid', 'dove')		=> 'grid'
					,esc_html__('Slider', 'dove')	=> 'slider'
					,esc_html__('Masonry', 'dove')	=> 'masonry'
					)
				,'description' 	=> ''
				)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Columns', 'dove' )
				,'param_name' 	=> 'columns'
				,'admin_label' 	=> true
				,'value' 		=> array(
					'1'				=> '1'
					,'2'			=> '2'
					,'3'			=> '3'
					,'4'			=> '4'
					)
				,'description' 	=> esc_html__( 'Number of Columns', 'dove' )
				)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Limit', 'dove' )
				,'param_name' 	=> 'per_page'
				,'admin_label' 	=> true
				,'value' 		=> 5
				,'description' 	=> esc_html__( 'Number of Posts', 'dove' )
				)
			,array(
				'type' 			=> 'ftc_category'
				,'heading' 		=> esc_html__( 'Categories', 'dove' )
				,'param_name' 	=> 'categories'
				,'admin_label' 	=> true
				,'value' 		=> ''
				,'description' 	=> ''
				,'class'		=> 'post_cat'
				)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order by', 'dove' )
				,'param_name' 	=> 'orderby'
				,'admin_label' 	=> false
				,'value' 		=> array(
					esc_html__('None', 'dove')		=> 'none'
					,esc_html__('ID', 'dove')		=> 'ID'
					,esc_html__('Date', 'dove')		=> 'date'
					,esc_html__('Name', 'dove')		=> 'name'
					,esc_html__('Title', 'dove')		=> 'title'
					)
				,'description' 	=> ''
				)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Order', 'dove' )
				,'param_name' 	=> 'order'
				,'admin_label' 	=> false
				,'value' 		=> array(
					esc_html__('Descending', 'dove')		=> 'DESC'
					,esc_html__('Ascending', 'dove')		=> 'ASC'
					)
				,'description' 	=> ''
				)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show post title', 'dove' )
				,'param_name' 	=> 'show_title'
				,'admin_label' 	=> false
				,'value' 		=> array(
					esc_html__('Yes', 'dove')	=> 1
					,esc_html__('No', 'dove')	=> 0
					)
				,'description' 	=> ''
				)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show thumbnail', 'dove' )
				,'param_name' 	=> 'show_thumbnail'
				,'admin_label' 	=> false
				,'value' 		=> array(
					esc_html__('Yes', 'dove')	=> 1
					,esc_html__('No', 'dove')	=> 0
					)
				,'description' 	=> ''
				)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show author', 'dove' )
				,'param_name' 	=> 'show_author'
				,'admin_label' 	=> false
				,'value' 		=> array(
					esc_html__('No', 'dove')	=> 0
					,esc_html__('Yes', 'dove')	=> 1
					)
				,'description' 	=> ''
				)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show comment', 'dove' )
				,'param_name' 	=> 'show_comment'
				,'admin_label' 	=> false
				,'value' 		=> array(
					esc_html__('Yes', 'dove')	=> 1
					,esc_html__('No', 'dove')	=> 0
					)
				,'description' 	=> ''
				)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show date', 'dove' )
				,'param_name' 	=> 'show_date'
				,'admin_label' 	=> false
				,'value' 		=> array(
					esc_html__('Yes', 'dove')	=> 1
					,esc_html__('No', 'dove')	=> 0
					)
				,'description' 	=> ''
				)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show post excerpt', 'dove' )
				,'param_name' 	=> 'show_excerpt'
				,'admin_label' 	=> false
				,'value' 		=> array(
					esc_html__('Yes', 'dove')	=> 1
					,esc_html__('No', 'dove')	=> 0
					)
				,'description' 	=> ''
				)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show read more button', 'dove' )
				,'param_name' 	=> 'show_readmore'
				,'admin_label' 	=> false
				,'value' 		=> array(
					esc_html__('Yes', 'dove')	=> 1
					,esc_html__('No', 'dove')	=> 0
					)
				,'description' 	=> ''
				)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Number of words in excerpt', 'dove' )
				,'param_name' 	=> 'excerpt_words'
				,'admin_label' 	=> false
				,'value' 		=> '16'
				,'description' 	=> ''
				)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show load more button', 'dove' )
				,'param_name' 	=> 'show_load_more'
				,'admin_label' 	=> false
				,'value' 		=> array(
					esc_html__('No', 'dove')	=> 0
					,esc_html__('Yes', 'dove')	=> 1
					)
				,'description' 	=> ''
				)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Load more button text', 'dove' )
				,'param_name' 	=> 'load_more_text'
				,'admin_label' 	=> false
				,'value' 		=> 'Show more'
				,'description' 	=> ''
				)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Show navigation button', 'dove' )
				,'param_name' 	=> 'show_nav'
				,'admin_label' 	=> false
				,'value' 		=> array(
					esc_html__('Yes', 'dove')	=> 1
					,esc_html__('No', 'dove')	=> 0
					)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'dove')
				)
			,array(
				'type' 			=> 'dropdown'
				,'heading' 		=> esc_html__( 'Auto play', 'dove' )
				,'param_name' 	=> 'auto_play'
				,'admin_label' 	=> false
				,'value' 		=> array(
					esc_html__('Yes', 'dove')	=> 1
					,esc_html__('No', 'dove')	=> 0
					)
				,'description' 	=> ''
				,'group'		=> esc_html__('Slider Options', 'dove')
				)
			,array(
				'type' 			=> 'textfield'
				,'heading' 		=> esc_html__( 'Margin', 'dove' )
				,'param_name' 	=> 'margin'
				,'admin_label' 	=> false
				,'value' 		=> '30'
				,'description' 	=> esc_html__('Set margin between items', 'dove')
				,'group'		=> esc_html__('Slider Options', 'dove')
				)
			)
) );

/*** FTC Button ***/
vc_map( array(
	'name' 		=> esc_html__( 'FTC Button', 'dove' ),
	'base' 		=> 'ftc_button',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Text', 'dove' )
			,'param_name' 	=> 'content'
			,'admin_label' 	=> true
			,'value' 		=> 'Button text'
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Link', 'dove' )
			,'param_name' 	=> 'link'
			,'admin_label' 	=> true
			,'value' 		=> '#'
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'colorpicker'
			,'heading' 		=> esc_html__( 'Text color', 'dove' )
			,'param_name' 	=> 'text_color'
			,'admin_label' 	=> false
			,'value' 		=> '#ffffff'
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'colorpicker'
			,'heading' 		=> esc_html__( 'Text color hover', 'dove' )
			,'param_name' 	=> 'text_color_hover'
			,'admin_label' 	=> false
			,'value' 		=> '#ffffff'
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'colorpicker'
			,'heading' 		=> esc_html__( 'Background color', 'dove' )
			,'param_name' 	=> 'bg_color'
			,'admin_label' 	=> false
			,'value' 		=> '#40bea7'
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'colorpicker'
			,'heading' 		=> esc_html__( 'Background color hover', 'dove' )
			,'param_name' 	=> 'bg_color_hover'
			,'admin_label' 	=> false
			,'value' 		=> '#3f3f3f'
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'colorpicker'
			,'heading' 		=> esc_html__( 'Border color', 'dove' )
			,'param_name' 	=> 'border_color'
			,'admin_label' 	=> false
			,'value' 		=> '#e8e8e8'
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'colorpicker'
			,'heading' 		=> esc_html__( 'Border color hover', 'dove' )
			,'param_name' 	=> 'border_color_hover'
			,'admin_label' 	=> false
			,'value' 		=> '#40bea7'
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Border width', 'dove' )
			,'param_name' 	=> 'border_width'
			,'admin_label' 	=> false
			,'value' 		=> '0'
			,'description' 	=> esc_html__('In pixels. Ex: 1', 'dove')
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Target', 'dove' )
			,'param_name' 	=> 'target'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Self', 'dove')				=> '_self'
				,esc_html__('New Window Tab', 'dove')	=> '_blank'
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Size', 'dove' )
			,'param_name' 	=> 'size'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('Small', 'dove')		=> 'small'
				,esc_html__('Medium', 'dove')	=> 'medium'
				,esc_html__('Large', 'dove')		=> 'large'
				,esc_html__('X-Large', 'dove')	=> 'x-large'
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'iconpicker'
			,'heading' 		=> esc_html__( 'Font icon', 'dove' )
			,'param_name' 	=> 'font_icon'
			,'admin_label' 	=> false
			,'value' 		=> ''
			,'settings' 	=> array(
				'emptyIcon' 	=> true /* default true, display an "EMPTY" icon? */
				,'iconsPerPage' => 4000 /* default 100, how many icons per/page to display */
				)
			,'description' 	=> esc_html__('Add an icon before the text. Ex: fa-lock', 'dove')
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show popup', 'dove' )
			,'param_name' 	=> 'popup'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('No', 'dove')	=> 0
				,esc_html__('Yes', 'dove')	=> 1
				)
			,'description' 	=> ''
			,'group'		=> esc_html__('Popup Options', 'dove')
			)
		,array(
			'type' 			=> 'textarea_raw_html'
			,'heading' 		=> esc_html__( 'Popup content', 'dove' )
			,'param_name' 	=> 'popup_content'
			,'admin_label' 	=> false
			,'value' 		=> ''
			,'description' 	=> ''
			,'group'		=> esc_html__('Popup Options', 'dove')
			)
		)
	) );

/*** FTC Single Image ***/
vc_map( array(
	'name' 		=> esc_html__( 'FTC Single Image', 'dove' ),
	'base' 		=> 'ftc_single_image',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'attach_image'
			,'heading' 		=> esc_html__( 'Image', 'dove' )
			,'param_name' 	=> 'img_id'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Image Size', 'dove' )
			,'param_name' 	=> 'img_size'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> esc_html__( 'Ex: thumbnail, medium, large or full', 'dove' )
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Image URL', 'dove' )
			,'param_name' 	=> 'img_url'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> esc_html__('Input external URL instead of image from library', 'dove')
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Link', 'dove' )
			,'param_name' 	=> 'link'
			,'admin_label' 	=> true
			,'value' 		=> '#'
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Link Title', 'dove' )
			,'param_name' 	=> 'link_title'
			,'admin_label' 	=> false
			,'value' 		=> ''
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Hover Image Effect', 'dove' )
			,'param_name' 	=> 'style_effect'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Effect-Image Left Right', 'dove')		=> 'effect-image'
				,esc_html__('Effect Border Image', 'dove')				=> 'effect-border-image'
				,esc_html__('Effect Background Image', 'dove')		=> 'effect-background-image'
				,esc_html__('Effect Background Top Image', 'dove')	=> 'effect-top-image'
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Target', 'dove' )
			,'param_name' 	=> 'target'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('New Window Tab', 'dove')		=> '_blank'
				,esc_html__('Self', 'dove')				=> '_self'
				)
			,'description' 	=> ''
			)
		)
	) );

/*** FTC Heading ***/
vc_map( array(
	'name' 		=> esc_html__( 'FTC Heading', 'dove' ),
	'base' 		=> 'ftc_heading',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Heading Size', 'dove' )
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
			,'heading' 		=> esc_html__( 'Text', 'dove' )
			,'param_name' 	=> 'text'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Extra class name', 'dove' )
			,'param_name' 	=> 'class'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
			)
		)
	) );

/*** FTC Banner ***/
vc_map( array(
	'name' 		=> esc_html__( 'FTC Banner', 'dove' ),
	'base' 		=> 'ftc_banner',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'attach_image'
			,'heading' 		=> esc_html__( 'Background Image', 'dove' )
			,'param_name' 	=> 'bg_id'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Background Url', 'dove' )
			,'param_name' 	=> 'bg_url'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> esc_html__('Input external URL instead of image from library', 'dove')
			)
		,array(
			'type' 			=> 'colorpicker'
			,'heading' 		=> esc_html__( 'Background Color', 'dove' )
			,'param_name' 	=> 'bg_color'
			,'admin_label' 	=> false
			,'value' 		=> '#ffffff'
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'textarea_html'
			,'heading' 		=> esc_html__( 'Banner content', 'dove' )
			,'param_name' 	=> 'content'
			,'admin_label' 	=> false
			,'value' 		=> ''
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Link', 'dove' )
			,'param_name' 	=> 'link'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Link Title', 'dove' )
			,'param_name' 	=> 'link_title'
			,'admin_label' 	=> false
			,'value' 		=> ''
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Style Effect', 'dove' )
			,'param_name' 	=> 'style_effect'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Background Scale', 'dove')						=>  'ftc-effect'
				,esc_html__('Background Scale Opacity', 'dove')				=>  'ftc-effect-banner-scale'
				,esc_html__('Background Scale Dark', 'dove')					=>	'ftc-effect-dark'
				,esc_html__('Background Scale and Line', 'dove')				=>  'ftc-effect-and-line'
				,esc_html__('Background Scale Opacity and Line', 'dove')		=>  'ftc-effect-banner-scale-line'
				,esc_html__('Background Scale Dark and Line', 'dove')		=>  'ftc-effect-dark-line'
				,esc_html__('Background Opacity and Line', 'dove')			=>	'background-opacity-and-line'
				,esc_html__('Background Dark and Line', 'dove')				=>	'background-dark-and-line'
				,esc_html__('Background Opacity', 'dove')					=>	'background-opacity'
				,esc_html__('Background Dark', 'dove')						=>	'background-dark'
				,esc_html__('Line', 'dove')									=>	'eff-line'
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Background Opacity On Device', 'dove' )
			,'param_name' 	=> 'opacity_bg_device'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'dove')			=>  0
				,esc_html__('Yes', 'dove')		=>  1
				)
			,'description' 	=> esc_html__('Background image will be blurred on device. Note: should set background color ', 'dove')
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Responsive size', 'dove' )
			,'param_name' 	=> 'responsive_size'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')		=>  1
				,esc_html__('No', 'dove')		=>  0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Target', 'dove' )
			,'param_name' 	=> 'target'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('New Window Tab', 'dove')	=>  '_blank'
				,esc_html__('Self', 'dove')			=>  '_self'	
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Extra Class', 'dove' )
			,'param_name' 	=> 'extra_class'
			,'admin_label' 	=> false
			,'value' 		=> ''
			,'description' 	=> esc_html__('Ex: rp-rectangle-full, rp-rectangle', 'dove')
			)
		)
	) );

/* FTC Testimonial */
vc_map( array(
	'name' 		=> esc_html__( 'FTC Testimonial', 'dove' ),
	'base' 		=> 'ftc_testimonial',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'ftc_category'
			,'heading' 		=> esc_html__( 'Categories', 'dove' )
			,'param_name' 	=> 'categories'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
			,'class'		=> 'ftc_testimonial'
			)
		,array(
			'type' 			=> 'textarea'
			,'heading' 		=> esc_html__( 'Testimonial IDs', 'dove' )
			,'param_name' 	=> 'ids'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> esc_html__('A comma separated list of testimonial ids', 'dove')
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show Avatar', 'dove' )
			,'param_name' 	=> 'show_avatar'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Limit', 'dove' )
			,'param_name' 	=> 'per_page'
			,'admin_label' 	=> true
			,'value' 		=> '4'
			,'description' 	=> esc_html__('Number of Posts', 'dove')
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Number of words in excerpt', 'dove' )
			,'param_name' 	=> 'excerpt_words'
			,'admin_label' 	=> true
			,'value' 		=> '50'
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Text Color Style', 'dove' )
			,'param_name' 	=> 'text_color_style'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Default', 'dove')	=> 'text-default'
				,esc_html__('Light', 'dove')		=> 'text-light'
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show in a carousel slider', 'dove' )
			,'param_name' 	=> 'is_slider'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			,'group'		=> esc_html__('Slider Options', 'dove')
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Columns', 'dove' )
			,'param_name' 	=> 'columns'
			,'admin_label' 	=> true
			,'value' 		=> '3'
			,'group'		=> esc_html__('Slider Options', 'dove')
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show navigation button', 'dove' )
			,'param_name' 	=> 'show_nav'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			,'group'		=> esc_html__('Slider Options', 'dove')
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show pagination dots', 'dove' )
			,'param_name' 	=> 'show_dots'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'dove')	=> 0
				,esc_html__('Yes', 'dove')	=> 1
				)
			,'description' 	=> esc_html__('If it is set, the navigation buttons will be removed', 'dove')
			,'group'		=> esc_html__('Slider Options', 'dove')
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Auto play', 'dove' )
			,'param_name' 	=> 'auto_play'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			,'group'		=> esc_html__('Slider Options', 'dove')
			)
		)
	) );

/*** FTC Brands Slider ***/
vc_map( array(
	'name' 		=> esc_html__( 'FTC Brands Slider', 'dove' ),
	'base' 		=> 'ftc_brands_slider',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Block title', 'dove' )
			,'param_name' 	=> 'title'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Limit', 'dove' )
			,'param_name' 	=> 'per_page'
			,'admin_label' 	=> true
			,'value' 		=> '7'
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Rows', 'dove' )
			,'param_name' 	=> 'rows'
			,'admin_label' 	=> true
			,'value' 		=> 1
			,'description' 	=> esc_html__( 'Number of Rows', 'dove' )
			)
		,array(
			'type' 			=> 'ftc_category'
			,'heading' 		=> esc_html__( 'Categories', 'dove' )
			,'param_name' 	=> 'categories'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
			,'class'		=> 'ftc_brand'
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Margin', 'dove' )
			,'param_name' 	=> 'margin_image'
			,'admin_label' 	=> false
			,'value' 		=> '32'
			,'description' 	=> esc_html__('Set margin between items', 'dove')
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Activate link', 'dove' )
			,'param_name' 	=> 'active_link'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show navigation button', 'dove' )
			,'param_name' 	=> 'show_nav'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Auto play', 'dove' )
			,'param_name' 	=> 'auto_play'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		)
	) );


/*** FTC Google Map ***/
vc_map( array(
	'name' 		=> esc_html__( 'FTC Google Map', 'dove' ),
	'base' 		=> 'ftc_google_map',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Address', 'dove' )
			,'param_name' 	=> 'address'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> esc_html__('You have to input your API Key in Appearance > Theme Options > General tab', 'dove')
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Height', 'dove' )
			,'param_name' 	=> 'height'
			,'admin_label' 	=> true
			,'value' 		=> 360
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Zoom', 'dove' )
			,'param_name' 	=> 'zoom'
			,'admin_label' 	=> true
			,'value' 		=> 12
			,'description' 	=> esc_html__('Input a number between 0 and 22', 'dove')
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Map Type', 'dove' )
			,'param_name' 	=> 'map_type'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('ROADMAP', 'dove')		=> 'ROADMAP'
				,esc_html__('SATELLITE', 'dove')		=> 'SATELLITE'
				,esc_html__('HYBRID', 'dove')		=> 'HYBRID'
				,esc_html__('TERRAIN', 'dove')		=> 'TERRAIN'
				)
			,'description' 	=> ''
			)
		)
	) );

/*** FTC Countdown ***/
vc_map( array(
	'name' 		=> esc_html__( 'FTC Countdown', 'dove' ),
	'base' 		=> 'ftc_countdown',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Day', 'dove' )
			,'param_name' 	=> 'day'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Month', 'dove' )
			,'param_name' 	=> 'month'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Year', 'dove' )
			,'param_name' 	=> 'year'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Text Color Style', 'dove' )
			,'param_name' 	=> 'text_color_style'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Default', 'dove')	=> 'text-default'
				,esc_html__('Light', 'dove')		=> 'text-light'
				)
			,'description' 	=> ''
			)
		)
	) );

/*** FTC Feedburner Subscription ***/
vc_map( array(
	'name' 		=> esc_html__( 'FTC Feedburner Subscription', 'dove' ),
	'base' 		=> 'ftc_feedburner_subscription',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Feedburner ID', 'dove' )
			,'param_name' 	=> 'feedburner_id'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Title', 'dove' )
			,'param_name' 	=> 'title'
			,'admin_label' 	=> true
			,'value' 		=> 'Newsletter'
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Intro Text', 'dove' )
			,'param_name' 	=> 'intro_text'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Button Text', 'dove' )
			,'param_name' 	=> 'button_text'
			,'admin_label' 	=> true
			,'value' 		=> 'Subscribe'
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Placeholder Text', 'dove' )
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
	'name' 		=> esc_html__( 'FTC Products', 'dove' ),
	'base' 		=> 'ftc_products',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Block title', 'dove' )
			,'param_name' 	=> 'title'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Product type', 'dove' )
			,'param_name' 	=> 'product_type'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('Recent', 'dove')		=> 'recent'
				,esc_html__('Sale', 'dove')		    => 'sale'
				,esc_html__('Featured', 'dove')	    => 'featured'
				,esc_html__('Best Selling', 'dove')	=> 'best_selling'
				,esc_html__('Top Rated', 'dove')	=> 'top_rated'
				,esc_html__('Mixed Order', 'dove')	=> 'mixed_order'
				)
			,'description' 	=> esc_html__( 'Select type of product', 'dove' )
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Custom order', 'dove' )
			,'param_name' 	=> 'custom_order'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('No', 'dove')			=> 0
				,esc_html__('Yes', 'dove')		=> 1
				)
			,'description' 	=> esc_html__( 'If you enable this option, the Product type option wont be available', 'dove' )
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Order by', 'dove' )
			,'param_name' 	=> 'orderby'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('None', 'dove')				=> 'none'
				,esc_html__('ID', 'dove')				=> 'ID'
				,esc_html__('Date', 'dove')				=> 'date'
				,esc_html__('Name', 'dove')				=> 'name'
				,esc_html__('Title', 'dove')				=> 'title'
				,esc_html__('Comment count', 'dove')		=> 'comment_count'
				,esc_html__('Random', 'dove')			=> 'rand'
				)
			,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Order', 'dove' )
			,'param_name' 	=> 'order'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Descending', 'dove')		=> 'DESC'
				,esc_html__('Ascending', 'dove')		=> 'ASC'
				)
			,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Columns', 'dove' )
			,'param_name' 	=> 'columns'
			,'admin_label' 	=> true
			,'value' 		=> 5
			,'description' 	=> esc_html__( 'Number of Columns', 'dove' )
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Limit', 'dove' )
			,'param_name' 	=> 'per_page'
			,'admin_label' 	=> true
			,'value' 		=> 5
			,'description' 	=> esc_html__( 'Number of Products', 'dove' )
			)
		,array(
			'type' 			=> 'autocomplete'
			,'heading' 		=> esc_html__( 'Product Categories', 'dove' )
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
			,'heading' 		=> esc_html__( 'Product IDs', 'dove' )
			,'param_name' 	=> 'ids'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'settings' => array(
				'multiple' 			=> true
				,'sortable' 		=> true
				,'unique_values' 	=> true
				)
			,'description' 	=> esc_html__('Enter product name or slug to search', 'dove')
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Meta position', 'dove' )
			,'param_name' 	=> 'meta_position'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Bottom', 'dove')			=> 'bottom'
				,esc_html__('On Thumbnail', 'dove')	=> 'on-thumbnail'
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product image', 'dove' )
			,'param_name' 	=> 'show_image'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product name', 'dove' )
			,'param_name' 	=> 'show_title'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product SKU', 'dove' )
			,'param_name' 	=> 'show_sku'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'dove')	=> 0
				,esc_html__('Yes', 'dove')	=> 1
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product price', 'dove' )
			,'param_name' 	=> 'show_price'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product short description', 'dove' )
			,'param_name' 	=> 'show_short_desc'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'dove')	=> 0
				,esc_html__('Yes', 'dove')	=> 1
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product rating', 'dove' )
			,'param_name' 	=> 'show_rating'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product label', 'dove' )
			,'param_name' 	=> 'show_label'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product categories', 'dove' )
			,'param_name' 	=> 'show_categories'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'dove')	=> 0
				,esc_html__('Yes', 'dove')	=> 1
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show add to cart button', 'dove' )
			,'param_name' 	=> 'show_add_to_cart'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		)
) );

/*** FTC Products Slider ***/
vc_map( array(
	'name' 		=> esc_html__( 'FTC Products Slider', 'dove' ),
	'base' 		=> 'ftc_products_slider',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Block title', 'dove' )
			,'param_name' 	=> 'title'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Product type', 'dove' )
			,'param_name' 	=> 'product_type'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('Recent', 'dove')		=> 'recent-product'
				,esc_html__('Sale', 'dove')		=> 'sale-product'
				,esc_html__('Featured', 'dove')	=> 'featured-product'
				,esc_html__('Best Selling', 'dove')	=> 'best_selling-product'
				,esc_html__('Top Rated', 'dove')	=> 'top_rated-product'
				,esc_html__('Mixed Order', 'dove')	=> 'mixed_order-product'
				)
			,'description' 	=> esc_html__( 'Select type of product', 'dove' )
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Custom order', 'dove' )
			,'param_name' 	=> 'custom_order'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('No', 'dove')			=> 0
				,esc_html__('Yes', 'dove')		=> 1
				)
			,'description' 	=> esc_html__( 'If you enable this option, the Product type option wont be available', 'dove' )
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Order by', 'dove' )
			,'param_name' 	=> 'orderby'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('None', 'dove')				=> 'none'
				,esc_html__('ID', 'dove')				=> 'ID'
				,esc_html__('Date', 'dove')				=> 'date'
				,esc_html__('Name', 'dove')				=> 'name'
				,esc_html__('Title', 'dove')				=> 'title'
				,esc_html__('Comment count', 'dove')		=> 'comment_count'
				,esc_html__('Random', 'dove')			=> 'rand'
				)
			,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Order', 'dove' )
			,'param_name' 	=> 'order'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Descending', 'dove')		=> 'DESC'
				,esc_html__('Ascending', 'dove')		=> 'ASC'
				)
			,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Columns', 'dove' )
			,'param_name' 	=> 'columns'
			,'admin_label' 	=> true
			,'value' 		=> 5
			,'description' 	=> esc_html__( 'Number of Columns', 'dove' )
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Rows', 'dove' )
			,'param_name' 	=> 'rows'
			,'admin_label' 	=> true
			,'value' 		=> 1
			,'description' 	=> esc_html__( 'Number of Rows', 'dove' )
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Limit', 'dove' )
			,'param_name' 	=> 'per_page'
			,'admin_label' 	=> true
			,'value' 		=> 6
			,'description' 	=> esc_html__( 'Number of Products', 'dove' )
			)
		,array(
			'type' 			=> 'autocomplete'
			,'heading' 		=> esc_html__( 'Product Categories', 'dove' )
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
			,'heading' 		=> esc_html__( 'Show product image', 'dove' )
			,'param_name' 	=> 'show_image'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product name', 'dove' )
			,'param_name' 	=> 'show_title'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product SKU', 'dove' )
			,'param_name' 	=> 'show_sku'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'dove')		=> 0
				,esc_html__('Yes', 'dove')	=> 1
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product price', 'dove' )
			,'param_name' 	=> 'show_price'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product short description', 'dove' )
			,'param_name' 	=> 'show_short_desc'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'dove')		=> 0
				,esc_html__('Yes', 'dove')	=> 1
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product rating', 'dove' )
			,'param_name' 	=> 'show_rating'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product label', 'dove' )
			,'param_name' 	=> 'show_label'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product categories', 'dove' )
			,'param_name' 	=> 'show_categories'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'dove')		=> 0
				,esc_html__('Yes', 'dove')	=> 1
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show add to cart button', 'dove' )
			,'param_name' 	=> 'show_add_to_cart'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show navigation button', 'dove' )
			,'param_name' 	=> 'show_nav'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Margin', 'dove' )
			,'param_name' 	=> 'margin'
			,'admin_label' 	=> false
			,'value' 		=> '20'
			,'description' 	=> esc_html__('Set margin between items', 'dove')
			)
		)
) );

/*** FTC Products Widget ***/
vc_map( array(
	'name' 			=> esc_html__( 'FTC Products Widget', 'dove' ),
	'base' 			=> 'ftc_products_widget',
	'class' 		=> '',
	'description' 	=> '',
	'category' 		=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 		=> array(
		array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Block title', 'dove' )
			,'param_name' 	=> 'title'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Product type', 'dove' )
			,'param_name' 	=> 'product_type'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('Recent', 'dove')		=> 'recent'
				,esc_html__('Sale', 'dove')		=> 'sale'
				,esc_html__('Featured', 'dove')	=> 'featured'
				,esc_html__('Best Selling', 'dove')	=> 'best_selling'
				,esc_html__('Top Rated', 'dove')	=> 'top_rated'
				,esc_html__('Mixed Order', 'dove')	=> 'mixed_order'
				)
			,'description' 	=> esc_html__( 'Select type of product', 'dove' )
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Limit', 'dove' )
			,'param_name' 	=> 'per_page'
			,'admin_label' 	=> true
			,'value' 		=> 6
			,'description' 	=> esc_html__( 'Number of Products', 'dove' )
			)
		,array(
			'type' 			=> 'autocomplete'
			,'heading' 		=> esc_html__( 'Product Categories', 'dove' )
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
			,'heading' 		=> esc_html__( 'Show product image', 'dove' )
			,'param_name' 	=> 'show_image'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Thumbnail size', 'dove' )
			,'param_name' 	=> 'thumbnail_size'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('shop_thumbnail', 'dove')		=> 'Product Thumbnails'
				,esc_html__('shop_catalog', 'dove')		=> 'Catalog Images'
				,esc_html__('shop_single', 'dove')	=> 'Single Product Image'
				)
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product name', 'dove' )
			,'param_name' 	=> 'show_title'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product price', 'dove' )
			,'param_name' 	=> 'show_price'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product rating', 'dove' )
			,'param_name' 	=> 'show_rating'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product categories', 'dove' )
			,'param_name' 	=> 'show_categories'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'dove')	=> 0
				,esc_html__('Yes', 'dove')	=> 1
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show in a carousel slider', 'dove' )
			,'param_name' 	=> 'is_slider'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('No', 'dove')	=> 0
				,esc_html__('Yes', 'dove')	=> 1
				)
			,'description' 	=> ''
			,'group'		=> esc_html__('Slider Options', 'dove')
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Row', 'dove' )
			,'param_name' 	=> 'rows'
			,'admin_label' 	=> false
			,'value' 		=> 3
			,'description' 	=> esc_html__( 'Number of Rows for slider', 'dove' )
			,'group'		=> esc_html__('Slider Options', 'dove')
			)
		,array(
			'type'    => 'textfield'
			,'heading'   => esc_html__( 'Columns', 'dove' )
			,'param_name'  => 'columns'
			,'admin_label'  => false
			,'value'   => 1
			,'description'  => ''
			,'group'  => esc_html__('Slider Options', 'dove')
			)
		,array(
			'type'    => 'textfield'
			,'heading'   => esc_html__( 'Margin', 'dove' )
			,'param_name'  => 'margin'
			,'admin_label'  => false
			,'value'   => 30
			,'description'  => ''
			,'group'  => esc_html__('Slider Options', 'dove')
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show navigation button', 'dove' )
			,'param_name' 	=> 'show_nav'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			,'group'		=> esc_html__('Slider Options', 'dove')
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Auto play', 'dove' )
			,'param_name' 	=> 'auto_play'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			,'group'		=> esc_html__('Slider Options', 'dove')
			)
		)
) );

/*** FTC Product Deals Slider ***/
vc_map( array(
	'name' 		=> esc_html__( 'FTC Product Deals Slider', 'dove' ),
	'base' 		=> 'ftc_product_deals_slider',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Block title', 'dove' )
			,'param_name' 	=> 'title'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Product type', 'dove' )
			,'param_name' 	=> 'product_type'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('Recent', 'dove')		=> 'recent'
				,esc_html__('Featured', 'dove')	=> 'featured'
				,esc_html__('Best Selling', 'dove')	=> 'best_selling'
				,esc_html__('Top Rated', 'dove')	=> 'top_rated'
				,esc_html__('Mixed Order', 'dove')	=> 'mixed_order'
				)
			,'description' 	=> esc_html__( 'Select type of product', 'dove' )
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Item Layout', 'dove' )
			,'param_name' 	=> 'layout'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('Grid', 'dove')		=> 'grid'
				,esc_html__('List', 'dove')		=> 'list'
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Columns', 'dove' )
			,'param_name' 	=> 'columns'
			,'admin_label' 	=> false
			,'value' 		=> 4
			,'description' 	=> esc_html__( 'Number of Columns', 'dove' )
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Limit', 'dove' )
			,'param_name' 	=> 'per_page'
			,'admin_label' 	=> true
			,'value' 		=> 5
			,'description' 	=> esc_html__( 'Number of Products', 'dove' )
			)
		,array(
			'type' 			=> 'autocomplete'
			,'heading' 		=> esc_html__( 'Product Categories', 'dove' )
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
			,'heading' 		=> esc_html__( 'Show counter', 'dove' )
			,'param_name' 	=> 'show_counter'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Counter position', 'dove' )
			,'param_name' 	=> 'counter_position'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Bottom', 'dove')			=> 'bottom'
				,esc_html__('On thumbnail', 'dove')	=> 'on-thumbnail'
				)
			,'description' 	=> ''
			,'dependency' 	=> array('element' => 'show_counter', 'value' => array('1'))
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product image', 'dove' )
			,'param_name' 	=> 'show_image'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show gallery list', 'dove' )
			,'param_name' 	=> 'show_gallery'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Gallery position', 'dove' )
			,'param_name' 	=> 'gallery_position'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Bottom out line', 'dove')	=> 'bottom-out'
				,esc_html__('Bottom in line', 'dove')	=> 'bottom-in'
				)
			,'description' 	=> ''
			,'dependency' 	=> array('element' => 'show_counter', 'value' => array('1'))
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product name', 'dove' )
			,'param_name' 	=> 'show_title'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product SKU', 'dove' )
			,'param_name' 	=> 'show_sku'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'dove')		=> 0
				,esc_html__('Yes', 'dove')	=> 1
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product price', 'dove' )
			,'param_name' 	=> 'show_price'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product short description', 'dove' )
			,'param_name' 	=> 'show_short_desc'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'dove')		=> 0
				,esc_html__('Yes', 'dove')	=> 1
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product rating', 'dove' )
			,'param_name' 	=> 'show_rating'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product label', 'dove' )
			,'param_name' 	=> 'show_label'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product categories', 'dove' )
			,'param_name' 	=> 'show_categories'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'dove')		=> 0
				,esc_html__('Yes', 'dove')	=> 1
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show add to cart button', 'dove' )
			,'param_name' 	=> 'show_add_to_cart'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show navigation button', 'dove' )
			,'param_name' 	=> 'show_nav'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Auto play', 'dove' )
			,'param_name' 	=> 'auto_play'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Margin', 'dove' )
			,'param_name' 	=> 'margin'
			,'admin_label' 	=> false
			,'value' 		=> '20'
			,'description' 	=> esc_html__('Set margin between items', 'dove')
			)
		)
) );

/*** FTC Product Categories Slider ***/
vc_map( array(
	'name' 		=> esc_html__( 'FTC Product Categories Slider', 'dove' ),
	'base' 		=> 'ftc_product_categories_slider',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Block title', 'dove' )
			,'param_name' 	=> 'title'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Columns', 'dove' )
			,'param_name' 	=> 'columns'
			,'admin_label' 	=> true
			,'value' 		=> 4
			,'description' 	=> esc_html__( 'Number of Columns', 'dove' )
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Rows', 'dove' )
			,'param_name' 	=> 'rows'
			,'admin_label' 	=> true
			,'value' 		=> 1
			,'description' 	=> esc_html__( 'Number of Rows', 'dove' )
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Limit', 'dove' )
			,'param_name' 	=> 'per_page'
			,'admin_label' 	=> true
			,'value' 		=> 5
			,'description' 	=> esc_html__( 'Number of Product Categories', 'dove' )
			)
		,array(
			'type' 			=> 'autocomplete'
			,'heading' 		=> esc_html__( 'Parent', 'dove' )
			,'param_name' 	=> 'parent'
			,'admin_label' 	=> true
			,'settings' => array(
				'multiple' 			=> false
				,'sortable' 		=> true
				,'unique_values' 	=> true
				)
			,'value' 		=> ''
			,'description' 	=> esc_html__( 'Select a category. Get direct children of this category', 'dove' )
			)
		,array(
			'type' 			=> 'autocomplete'
			,'heading' 		=> esc_html__( 'Child Of', 'dove' )
			,'param_name' 	=> 'child_of'
			,'admin_label' 	=> true
			,'settings' => array(
				'multiple' 			=> false
				,'sortable' 		=> true
				,'unique_values' 	=> true
				)
			,'value' 		=> ''
			,'description' 	=> esc_html__( 'Select a category. Get all descendents of this category', 'dove' )
			)
		,array(
			'type' 			=> 'autocomplete'
			,'heading' 		=> esc_html__( 'Product Categories', 'dove' )
			,'param_name' 	=> 'ids'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'settings' => array(
				'multiple' 			=> true
				,'sortable' 		=> true
				,'unique_values' 	=> true
				)
			,'description' 	=> esc_html__('Include these categories', 'dove')
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Hide empty product categories', 'dove' )
			,'param_name' 	=> 'hide_empty'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product category title', 'dove' )
			,'param_name' 	=> 'show_title'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show navigation button', 'dove' )
			,'param_name' 	=> 'show_nav'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Auto play', 'dove' )
			,'param_name' 	=> 'auto_play'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Margin', 'dove' )
			,'param_name' 	=> 'margin'
			,'admin_label' 	=> false
			,'value' 		=> '0'
			,'description' 	=> esc_html__('Set margin between items', 'dove')
			)
		)
	) );


/*** FTC Products In Category Tabs***/
vc_map( array(
	'name' 		=> esc_html__( 'FTC Products Category Tabs', 'dove' ),
	'base' 		=> 'ftc_products_category_tabs',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Product type', 'dove' )
			,'param_name' 	=> 'product_type'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('Recent', 'dove')		=> 'recent'
				,esc_html__('Sale', 'dove')		=> 'sale'
				,esc_html__('Featured', 'dove')	=> 'featured'
				,esc_html__('Best Selling', 'dove')	=> 'best_selling'
				,esc_html__('Top Rated', 'dove')	=> 'top_rated'
				,esc_html__('Mixed Order', 'dove')	=> 'mixed_order'
				)
			,'description' 	=> esc_html__( 'Select type of product', 'dove' )
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Custom order', 'dove' )
			,'param_name' 	=> 'custom_order'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('No', 'dove')			=> 0
				,esc_html__('Yes', 'dove')		=> 1
				)
			,'description' 	=> esc_html__( 'If you enable this option, the Product type option wont be available', 'dove' )
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Order by', 'dove' )
			,'param_name' 	=> 'orderby'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('None', 'dove')				=> 'none'
				,esc_html__('ID', 'dove')				=> 'ID'
				,esc_html__('Date', 'dove')				=> 'date'
				,esc_html__('Name', 'dove')				=> 'name'
				,esc_html__('Title', 'dove')				=> 'title'
				,esc_html__('Comment count', 'dove')		=> 'comment_count'
				,esc_html__('Random', 'dove')			=> 'rand'
				)
			,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Order', 'dove' )
			,'param_name' 	=> 'order'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Descending', 'dove')		=> 'DESC'
				,esc_html__('Ascending', 'dove')		=> 'ASC'
				)
			,'dependency' 	=> array('element' => 'custom_order', 'value' => array('1'))
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'colorpicker'
			,'heading' 		=> esc_html__( 'Background Color', 'dove' )
			,'param_name' 	=> 'bg_color'
			,'admin_label' 	=> false
			,'value' 		=> '#f7f6f4'
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Columns', 'dove' )
			,'param_name' 	=> 'columns'
			,'admin_label' 	=> true
			,'value' 		=> 3
			,'description' 	=> esc_html__( 'Number of Columns', 'dove' )
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Limit', 'dove' )
			,'param_name' 	=> 'per_page'
			,'admin_label' 	=> true
			,'value' 		=> 6
			,'description' 	=> esc_html__( 'Number of Products', 'dove' )
			)
		,array(
			'type' 			=> 'autocomplete'
			,'heading' 		=> esc_html__( 'Product Categories', 'dove' )
			,'param_name' 	=> 'product_cats'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'settings' => array(
				'multiple' 			=> true
				,'sortable' 		=> true
				,'unique_values' 	=> true
				)
			,'description' 	=> esc_html__( 'You select banners, icons in the Product Category editor', 'dove' )
			)
		,array(
			'type' 			=> 'autocomplete'
			,'heading' 		=> esc_html__( 'Parent Category', 'dove' )
			,'param_name' 	=> 'parent_cat'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'settings' => array(
				'multiple' 			=> false
				,'sortable' 		=> false
				,'unique_values' 	=> true
				)
			,'description' 	=> esc_html__('Each tab will be a sub category of this category. This option is available when the Product Categories option is empty', 'dove')
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Include children', 'dove' )
			,'param_name' 	=> 'include_children'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('No', 'dove')			=> 0
				,esc_html__('Yes', 'dove')		=> 1
				)
			,'description' 	=> esc_html__( 'Load the products of sub categories in each tab', 'dove' )
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Active tab', 'dove' )
			,'param_name' 	=> 'active_tab'
			,'admin_label' 	=> false
			,'value' 		=> 1
			,'description' 	=> esc_html__( 'Enter active tab number', 'dove' )
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product image', 'dove' )
			,'param_name' 	=> 'show_image'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product name', 'dove' )
			,'param_name' 	=> 'show_title'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product SKU', 'dove' )
			,'param_name' 	=> 'show_sku'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'dove')		=> 0
				,esc_html__('Yes', 'dove')	=> 1
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product price', 'dove' )
			,'param_name' 	=> 'show_price'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product short description', 'dove' )
			,'param_name' 	=> 'show_short_desc'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'dove')		=> 0
				,esc_html__('Yes', 'dove')	=> 1
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product rating', 'dove' )
			,'param_name' 	=> 'show_rating'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product label', 'dove' )
			,'param_name' 	=> 'show_label'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show product categories', 'dove' )
			,'param_name' 	=> 'show_categories'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'dove')		=> 0
				,esc_html__('Yes', 'dove')	=> 1
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show add to cart button', 'dove' )
			,'param_name' 	=> 'show_add_to_cart'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show counter', 'dove' )
			,'param_name' 	=> 'show_counter'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show in a carousel slider', 'dove' )
			,'param_name' 	=> 'is_slider'
			,'admin_label' 	=> true
			,'value' 		=> array(
				esc_html__('No', 'dove')		=> 0
				,esc_html__('Yes', 'dove')	=> 1
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Rows', 'dove' )
			,'param_name' 	=> 'rows'
			,'admin_label' 	=> true
			,'value' 		=> array(
				'1'			=> '1'
				,'2'		=> '2'
				)
			,'description' 	=> esc_html__( 'Number of Rows in slider', 'dove' )
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Show navigation button', 'dove' )
			,'param_name' 	=> 'show_nav'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('No', 'dove')		=> 0
				,esc_html__('Yes', 'dove')	=> 1
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Auto play', 'dove' )
			,'param_name' 	=> 'auto_play'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		)
) );

/*** FTC List Of Product Categories ***/
vc_map( array(
	'name' 		=> esc_html__( 'FTC List Of Product Categories', 'dove' ),
	'base' 		=> 'ftc_list_of_product_categories',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Block title', 'dove' )
			,'param_name' 	=> 'title'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'attach_image'
			,'heading' 		=> esc_html__( 'Image List Category', 'dove' )
			,'param_name' 	=> 'bg_image'
			,'admin_label' 	=> false
			,'value' 		=> ''
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Hover Image Effect', 'dove' )
			,'param_name' 	=> 'style_effect'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Effect-Image Left Right', 'dove')		=> 'effect-image'
				,esc_html__('Effect Border Image', 'dove')				=> 'effect-border-image'
				,esc_html__('Effect Background Image', 'dove')		=> 'effect-background-image'
				,esc_html__('Effect Background Top Image', 'dove')	=> 'effect-top-image'
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'autocomplete'
			,'heading' 		=> esc_html__( 'Product Category', 'dove' )
			,'param_name' 	=> 'product_cat'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'settings' => array(
				'multiple' 			=> false
				,'sortable' 		=> false
				,'unique_values' 	=> true
				)
			,'description' 	=> esc_html__('Display sub categories of this category', 'dove')
			)
		,array(
			'type' 			=> 'dropdown'
			,'heading' 		=> esc_html__( 'Include parent category in list', 'dove' )
			,'param_name' 	=> 'include_parent'
			,'admin_label' 	=> false
			,'value' 		=> array(
				esc_html__('Yes', 'dove')	=> 1
				,esc_html__('No', 'dove')	=> 0
				)
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Number of Sub Categories', 'dove' )
			,'param_name' 	=> 'limit_sub_cat'
			,'admin_label' 	=> true
			,'value' 		=> 6
			,'description' 	=> esc_html__( 'Leave blank to show all', 'dove' )
			)
		,array(
			'type' 			=> 'autocomplete'
			,'heading' 		=> esc_html__( 'Include these categories', 'dove' )
			,'param_name' 	=> 'include_cats'
			,'admin_label' 	=> true
			,'value' 		=> ''
			,'settings' => array(
				'multiple' 			=> true
				,'sortable' 		=> true
				,'unique_values' 	=> true
				)
			,'description' 	=> esc_html__('If you set the Product Category option above, this option wont be available', 'dove')
			)
		)
	) );

/*** FTC Milestone ***/
vc_map( array(
	'name' 		=> esc_html__( 'FTC Milestone', 'dove' ),
	'base' 		=> 'ftc_milestone',
	'class' 	=> '',
	'category' 	=> 'ThemeFTC',
	"icon"          => get_template_directory_uri() . "/inc/vc_extension/ftc_icon.png",
	'params' 	=> array(
		array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Number', 'dove' )
			,'param_name' 	=> 'number'
			,'admin_label' 	=> true
			,'value' 		=> '0'
			,'description' 	=> ''
			)
		,array(
			'type' 			=> 'textfield'
			,'heading' 		=> esc_html__( 'Subject', 'dove' )
			,'param_name' 	=> 'subject'
			,'admin_label' 	=> true
			,'value' 		=> ''
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