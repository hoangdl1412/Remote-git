<?php 
/**
 * Plugin Name: ThemeFTC GET
 * Plugin URI: http://themeftc.com
 * Description: Add Demo Options
 * Version: 1.0.0
 * Author: themeftc Team
 * Author URI: http://themeftc.com
 */
class Themeftc_GET{

	function __construct(){
		add_action('template_redirect', array($this, 'template_redirect'), 1);
		add_action('init', array($this, 'update_portfolio_like_action'));
		
		add_filter('ftc_metabox_options_page_options', array($this, 'advance_page_options'));
		add_filter('widget_display_callback', array($this, 'widget_display_callback'), 10, 3);
		
		if( !is_admin() && !defined('DOING_AJAX') && isset($_GET['color']) ){
			add_filter('ftc_custom_style_data', array($this, 'custom_style_data'));
			add_action('wp_enqueue_scripts', array($this, 'add_inline_custom_style'), 1000000);
		}
		
		/* Remove some scripts, styles from demo */
		add_action('wp_enqueue_scripts', array($this, 'remove_some_scripts_on_demo'), 10000);
		
		/* remove emoji */
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
	}
	
	function template_redirect(){
		global $smof_data, $post;
		
		if( is_page() ){
			$header_intro = get_post_meta( $post->ID, 'ftc_header_intro', true);
			if( $header_intro ){
				add_filter('body_class', create_function('$classes', '$classes[]="ftc-header-intro"; return $classes;'));
				add_filter('theme_mod_background_image', create_function('', 'return "";'));
				add_filter('ftc_page_intro_feature_filter', '__return_true');
				add_filter('ftc_display_link_dynamic_filter', '__return_false');
				add_action('wp_footer', array($this, 'page_intro_script_handle'));
				add_action('wp_enqueue_scripts', array($this, 'page_intro_dequeue_scripts'), 9999);
				$smof_data['ftc_responsive'] = 0;
				$smof_data['ftc_enable_tiny_shopping_cart'] = 0;
				add_action('wp_enqueue_scripts', array($this, 'page_intro_dynamic_style_handle'), 9999);
			}
		}
		
		if( is_singular('product') ){
			if( isset($_GET['options']) ){
				$options = $_GET['options'];
				$options = explode('-', $options);
				if( is_array($options) && count($options) > 0 ){
					if( isset($options[0]) ){ /* Thumbnail vertical slider */
						$smof_data['ftc_prod_thumbnails_style'] = $options[0]?'vertical':'horizontal';
					}
					
					if( isset($options[1]) ){ /* Accordion tabs */
						$smof_data['ftc_prod_accordion_tabs'] = $options[1];
					}
					
					if( isset($options[2]) ){ /* Tab inside summary */
						$smof_data['ftc_prod_tabs_position'] = $options[2]?'inside_summary':'after_summary';
					}
					
					if( isset($options[3]) ){ /* Product Sidebar */
						switch( $options[3] ){
							case 1:
								$smof_data['ftc_prod_layout'] = '1-1-0';
							break;
							case 2:
								$smof_data['ftc_prod_layout'] = '0-1-1';
							break;
							case 3:
								$smof_data['ftc_prod_layout'] = '1-1-1';
							break;
							default:
								$smof_data['ftc_prod_layout'] = '0-1-0';
						}
					}
					
					if( isset($options[4]) ){ /* Product Attribute Dropdown */
						$smof_data['ftc_prod_attr_dropdown'] = $options[4]?1:0;
					}
					
				}
			}
		}
		
		if( is_tax('product_cat') || is_tax('product_tag') || is_post_type_archive('product') ){
			if( isset( $_GET['options'] ) ){
				$options = explode('-', $_GET['options']);
				if( is_array($options) && count($options) > 0 ){
					if( isset($options[0]) ){
						$smof_data['ftc_prod_cat_top_content'] = $options[0]?1:0;
					}
					if( isset($options[1]) ){
						switch( $options[1] ){
							case 1:
								$smof_data['ftc_prod_cat_layout'] = '1-1-0';
							break;
							case 2:
								$smof_data['ftc_prod_cat_layout'] = '0-1-1';
							break;
							case 3:
								$smof_data['ftc_prod_cat_layout'] = '1-1-1';
							break;
							default:
								$smof_data['ftc_prod_cat_layout'] = '0-1-0';
						}
					}
					if( isset($options[2]) ){
						$smof_data['ftc_prod_cat_columns'] = $options[2]?$options[2]:4;
					}
				}
			}
                        if( isset( $_GET['views'] ) ){
				add_action('wp_footer', array($this, 'page_options_views'));
			}
		}
		
		if( is_singular('ftc_portfolio') ){
			if( isset($_GET['layout']) ){
				$layout = $_GET['layout'];
				if( in_array($layout, array('1', '2')) ){
					$smof_data['ftc_portfolio_layout_style'] = 'layout-'.$layout;
				}
			}
		}
		
		if( isset($_GET['rtl']) ){
			$smof_data['ftc_enable_rtl'] = (int)$_GET['rtl'];
		}
		
		if( isset($_GET['product_hover']) ){
			$smof_data['ftc_effect_hover_product_style'] = 'style-'.$_GET['product_hover'];
		}
		
	}
        
         function page_options_views(){
		if( is_tax('product_cat') || is_tax('product_tag') || is_post_type_archive('product') ){
			if( isset( $_GET['views'] ) ){
				$checkViews = $_GET['views'];
				if( in_array($checkViews, array('list', 'grid')) ){
					$views = $checkViews;
				}
			}
		}
	    ?>
		<script type="text/javascript">
			jQuery(document).ready(function($){
				"use strict";
				<?php 
				if( isset($views) && $views != '' )
				    {
					?>
						jQuery('#main-content #prod-cat').removeAttr('class');
						jQuery('#main-content #prod-cat').addClass('products');
						jQuery('#main-content #prod-cat').addClass('<?php echo esc_js($views); ?>');
						jQuery.cookie('gridcookie','<?php echo esc_js($views); ?>', { path: '/' });
					<?php
				    }
				?>
			});
		</script>
	    <?php
	}
	
	function page_intro_script_handle(){
	?>
		<script type="text/javascript">
			if( !jQuery('body').hasClass('ftc_desktop') ){
				jQuery('.wpb_animate_when_almost_visible').removeClass('wpb_animate_when_almost_visible');
			}
			jQuery(document).ready(function($){
				"use strict";
				
				$('body.ftc-header-intro .menu a').bind('click', function(e){
					var href = $(this).attr('href');
					if( href.indexOf('#') == 0 ){
						e.preventDefault();
						var section = $(href);
						if( section.length != 0 ){
							var extra_space = 0;
							var offset_top = section.offset().top;
							offset_top -= extra_space;
							var scroll_top = $(window).scrollTop();
							var speed_mul = Math.ceil( Math.abs(offset_top - scroll_top) / 6000 );
							$('body,html').animate({
								scrollTop: offset_top
							}, 1500 * speed_mul);
						}
						else{
							if( $(this).parents('li.logo-header-menu').length > 0 ){
								$('body,html').animate({
									scrollTop: 0
								}, 2000);
							}
						}
						return false;
					}
				});
				
				$('body.ftc-header-intro img.lazy-loading').load(function(){
					$(this).removeClass('lazy-loading').addClass('lazy-loaded');
				});
				$('body.ftc-header-intro img.lazy-loading').each(function(){
					if( $(this).data('src') ){
						$(this).attr('src', $(this).data('src'));
					}
				});
				
				$('body.ftc-header-intro .ftc-feature-block a').bind('click', function(){
					return false;
				});
			});
		</script>
	<?php
	}
	
	function page_intro_dequeue_scripts(){
		wp_dequeue_style('woocommerce-layout');
		wp_dequeue_style('woocommerce-smallscreen');
		wp_dequeue_style('woocommerce-general');
		wp_dequeue_style('woocommerce_prettyPhoto_css');
		wp_dequeue_style('prettyPhoto');
		wp_dequeue_style('jquery-colorbox');
		wp_dequeue_style('jquery-selectBox');
		wp_dequeue_style('yith-wcwl-main');
		
		wp_dequeue_style('ftc-dynamic-css');
		wp_dequeue_style('select2');
		wp_dequeue_style('owl.carousel');
		
		wp_dequeue_script('contact-form-7');
		
		wp_dequeue_script('woocommerce');
		wp_dequeue_script('wc-cart-fragments');
		wp_dequeue_script('wc-add-to-cart');
		wp_dequeue_script('prettyPhoto');
		wp_dequeue_script('prettyPhoto-init');
		
		wp_dequeue_script('vc_woocommerce-add-to-cart-js');
		
		wp_dequeue_script('jquery-selectBox');
		wp_dequeue_script('jquery-yith-wcwl');
		
		wp_dequeue_script('yith-woocompare-main');
		wp_dequeue_script('jquery-colorbox');
		
		wp_dequeue_script('select2');
		wp_dequeue_script('wc-add-to-cart-variation');
		wp_dequeue_script('owl.carousel');
		
	}
	
	function page_intro_dynamic_style_handle(){
		remove_action('wp_head', 'ftc_add_header_dynamic_css', 1000);
		$file_name = 'themeftc_intro';
		$upload_dir = wp_upload_dir();
		$filename_dir = trailingslashit($upload_dir['basedir']) . $file_name . '.css';
		$filename = trailingslashit($upload_dir['baseurl']) . $file_name . '.css';
		if( !file_exists($filename_dir) ){ /* Create File */
			global $wp_filesystem;
			if( empty( $wp_filesystem ) ) {
				require_once( ABSPATH .'/wp-admin/includes/file.php' );
				WP_Filesystem();
			}
			
			$creds = request_filesystem_credentials($filename_dir, '', false, false, array());
			if( ! WP_Filesystem($creds) ){
				return false;
			}
			
			if( $wp_filesystem ) {
				ob_start();
				include get_template_directory() . '/framework/dynamic_style.php';
				$dynamic_css = ob_get_contents();
				ob_end_clean();
		
				$wp_filesystem->put_contents(
					$filename_dir,
					$dynamic_css,
					FS_CHMOD_FILE
				);
			}
		}
		
		wp_enqueue_style('intro-dynamic-css', $filename);
	}
	
	function update_portfolio_like_action(){
		global $ftc_portfolios;
		if( is_a($ftc_portfolios, 'Ftc_Portfolios') && !is_user_logged_in() ){
			remove_action('wp_ajax_ftc_portfolio_update_like', array($ftc_portfolios, 'update_like'));
			remove_action('wp_ajax_nopriv_ftc_portfolio_update_like', array($ftc_portfolios, 'update_like'));
			add_action('wp_ajax_ftc_portfolio_update_like', array($this, 'update_portfolio_like'));
			add_action('wp_ajax_nopriv_ftc_portfolio_update_like', array($this, 'update_portfolio_like'));
			
			add_filter('ftc_portfolio_like_num', array($this, 'portfolio_get_like'), 10, 2);
			add_filter('ftc_portfolio_already_like', array($this, 'portfolio_already_like'), 10, 2);
		}
	}
	
	function update_portfolio_like(){
		if( isset($_POST['post_id']) ){
			global $ftc_portfolios;
			$post_id = $_POST['post_id'];
			$like_num = $ftc_portfolios->get_like($post_id);
			if( isset($_COOKIE['ftc_portfolio_like_'.$post_id]) ){ /* Liked => Unlike */
				setcookie('ftc_portfolio_like_'.$post_id, '', time()-3600, '/');
			}
			else{
				$like_num++;
				setcookie('ftc_portfolio_like_'.$post_id, '1', time()+3600, '/');
			}
			die((string)$like_num);
		}
		die('');
	}
	
	function portfolio_get_like( $val, $post_id ){
		if( isset($_COOKIE['ftc_portfolio_like_'.$post_id]) && !is_ajax() ){
			$val++;
		}
		return $val;
	}
	
	function portfolio_already_like( $val, $post_id ){
		if( isset($_COOKIE['ftc_portfolio_like_'.$post_id]) ){
			return true;
		}
		return $val;
	}
	
	/* Metabox Page Options */
	function advance_page_options( $options ){
		
		/* Get list Footer Blocks */
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
		
		$options[] = array(
				'id'		=> 'page_header_heading'
				,'label'	=> 'Page Header - Demo'
				,'desc'		=> ''
				,'type'		=> 'heading'
			);
		
		$options[] = array(
				'id'		=> 'header_intro'
				,'label'	=> 'Header Intro'
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
								'1'		=> 'Yes'
								,'0'	=> 'No'
								)
				,'default'	=> '0'
			);
		
		$options[] = array(
				'id'		=> 'page_footer_heading'
				,'label'	=> 'Page Footer - Demo'
				,'desc'		=> ''
				,'type'		=> 'heading'
			);

                $options[] = array(
                                'id'		=> 'footer_top'
                                ,'label'	=> esc_html__('Footer Top', 'ftc')
                                ,'desc'		=> ''
                                ,'type'		=> 'select'
                                ,'options'	=> $footer_blocks
                        );

                $options[] = array(
                                'id'		=> 'footer-middle'
                                ,'label'	=> esc_html__('Footer Middle', 'ftc')
                                ,'desc'		=> ''
                                ,'type'		=> 'select'
                                ,'options'	=> $footer_blocks
                        );

                $options[] = array(
                                'id'		=> 'footer_bottom'
                                ,'label'	=> esc_html__('Footer Bottom', 'ftc')
                                ,'desc'		=> ''
                                ,'type'		=> 'select'
                                ,'options'	=> $footer_blocks
                        );
	
		return $options;
	}
	
	function widget_display_callback( $instance, $object, $args ){
		global $post;
		if( ($args['name'] == 'Footer Top' || $args['name'] == 'Footer Middle' || $args['name'] == 'Footer Bottom') && get_class($object) == 'Ftc_Footer_Widget' ){
			if( $args['name'] == 'Footer Top' ){
				$block_id = get_post_meta($post->ID, 'ftc_footer_top', true);
			}
			else if( $args['name'] == 'Footer Middle' ){
				$block_id = get_post_meta($post->ID, 'ftc_footer_middle', true);
			}
			else {
				$block_id = get_post_meta($post->ID, 'ftc_footer_bottom', true);
			}
			if( $block_id ){
				$instance['block_id'] = $block_id;
			}
		}
		return $instance;
	}
	
	/* Custom Style */
	function custom_style_data( $data = array() ){
		if( isset($_GET['color']) ){
			$color_name = $_GET['color'];
			$xml_folder = get_template_directory() . '/admin/color_xml/';
			$file_path = $xml_folder . $color_name . '.xml';
			if( file_exists($file_path) ){
				$obj_xml = simplexml_load_file( $file_path );
				foreach($obj_xml->children() as $child ){
					if( isset($child->name, $child->value) ){
						$name = (string)$child->name;
						$value = (string)$child->value;
						if( isset($data[$name]) ){
							$data[$name] = $value;
						}
					}
				}
			}
		}
		return $data;
	}
	
	function add_inline_custom_style(){
		$custom_file = get_template_directory() .'/inc/dynamic_style.php';
		if( file_exists( $custom_file ) ){
			wp_dequeue_style('ftc-dynamic-css');
			
			ob_start();
			include $custom_file;
			$custom_css = ob_get_clean();
			
			wp_add_inline_style( 'ftc-style', $custom_css );
		}
	}
	
	function remove_some_scripts_on_demo(){
		global $post;
		wp_dequeue_style('jquery-selectBox');
		wp_deregister_script('vc_tta_autoplay_script');
		
		if( isset($post->post_content) && !has_shortcode($post->post_content, 'contact-form-7') ){
			wp_dequeue_style('contact-form-7');
			wp_dequeue_script('jquery-form');
			wp_dequeue_script('contact-form-7');
		}
	}
	
} 
new Themeftc_GET();

?>