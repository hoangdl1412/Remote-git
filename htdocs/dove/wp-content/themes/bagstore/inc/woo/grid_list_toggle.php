<?php 
if( !class_exists('Vela_Grid_List') && vela_has_woocommerce() ){
	class Vela_Grid_List{
		function __construct(){
			/* Hooks */
			if( get_option('vela_enable_glt', 'yes') == 'yes' ){
				add_action('wp', array($this, 'setup_gridlist'), 20);
			}
				
			/* Init settings */
			$this->settings = array(
				array(
					'name' => esc_html__( 'Default catalog view', 'bagstore' ),
					'type' => 'title',
					'id' => 'vela_glt_options'
				),
				array(
					'name' 		=> esc_html__( 'Catalog view', 'bagstore' ),
					'desc_tip' 	=> '',
					'id' 		=> 'vela_enable_glt',
					'type' 		=> 'checkbox',
					'desc' 		=> esc_html__('Display option to show product in grid or list view', 'bagstore'),
					'default' 	=> 'yes'
				),
				array(
					'name' 		=> esc_html__( 'Default catalog view', 'bagstore' ),
					'desc_tip' 	=> esc_html__( 'Display products in grid or list view by default', 'bagstore' ),
					'id' 		=> 'vela_glt_default',
					'type' 		=> 'select',
					'options' 	=> array(
						'grid'  => esc_html__('Grid', 'bagstore'),
						'list' 	=> esc_html__('List', 'bagstore')
					)
				),
				array( 'type' => 'sectionend', 'id' => 'vela_glt_options' ),
			);
			
			/* Default options */
			add_option( 'vela_glt_default', 'grid' );
			
			/* Admin */
			add_action( 'woocommerce_settings_image_options_after', array( $this, 'admin_settings' ), 20 );
			add_action( 'woocommerce_update_options_catalog', array( $this, 'save_admin_settings' ) );
			add_action( 'woocommerce_update_options_products', array( $this, 'save_admin_settings' ) );
		}
		
		function admin_settings() {
			woocommerce_admin_fields( $this->settings );
		}

		function save_admin_settings() {
			woocommerce_update_options( $this->settings );
		}
		
		function setup_gridlist(){
			if( is_tax( get_object_taxonomies( 'product' ) ) || is_post_type_archive('product') ){
				add_action( 'wp_enqueue_scripts', array( $this, 'setup_scripts_script' ), 20);
				add_action( 'woocommerce_before_shop_loop', array( $this, 'gridlist_toggle_button' ), 10);
			}
		}
		
		function setup_scripts_script(){
			wp_enqueue_script('cookie', get_template_directory_uri() . '/assets/js/jquery.cookie.min.js', array( 'jquery' ), null, true );
			add_action('wp_footer', array(&$this, 'gridlist_set_default_view'));
		}
		
		function gridlist_set_default_view() {
			$default = get_option( 'vela_glt_default', 'grid' );
			if( !$default ){
				$default = 'grid';
			}
			?>
				<script type="text/javascript">
					jQuery(document).ready(function(){
						"use strict";
						if ( typeof jQuery.cookie == 'function' && jQuery.cookie('gridcookie') == null ) {
							jQuery('#main-content div.products').addClass('<?php echo esc_js($default); ?>');
							jQuery('.grid_list_nav #<?php echo esc_js($default); ?>').addClass('active');
						}
						
						if( typeof jQuery.cookie == 'function' ){
							jQuery('#grid').click(function() {
								if( jQuery(this).hasClass('active') ){
									return false;
								}
								jQuery(this).addClass('active');
								jQuery('#list').removeClass('active');
								jQuery.cookie('gridcookie','grid', { path: '/' });
								jQuery('#main-content div.products').fadeOut(300, function() {
									jQuery(this).addClass('grid').removeClass('list').fadeIn(300);
								});
								return false;
							});

							jQuery('#list').click(function() {
								if( jQuery(this).hasClass('active') ){
									return false;
								}
								jQuery(this).addClass('active');
								jQuery('#grid').removeClass('active');
								jQuery.cookie('gridcookie','list', { path: '/' });
								jQuery('#main-content div.products').fadeOut(300, function() {
									jQuery(this).removeClass('grid').addClass('list').fadeIn(300);
								});
								return false;
							});

							if( jQuery.cookie('gridcookie') ){
								jQuery('#main-content div.products, #grid_list_nav').addClass(jQuery.cookie('gridcookie'));
							}

							if( jQuery.cookie('gridcookie') == 'grid' ){
								jQuery('.grid_list_nav #grid').addClass('active');
								jQuery('.grid_list_nav #list').removeClass('active');
							}

							if( jQuery.cookie('gridcookie') == 'list' ){
								jQuery('.grid_list_nav #list').addClass('active');
								jQuery('.grid_list_nav #grid').removeClass('active');
							}

							jQuery('#grid_list_nav a').click(function(event) {
								event.preventDefault();
							});
						}
					});
				</script>
			<?php
		}
		
		/* Toggle button */
		function gridlist_toggle_button() {
			?>
				<nav class="grid_list_nav">
					<a href="#" id="grid" title="<?php esc_html_e('Grid view', 'bagstore'); ?>">&#8862; <span><?php esc_html_e('Grid view', 'bagstore'); ?></span></a><a href="#" id="list" title="<?php esc_html_e('List view', 'bagstore'); ?>">&#8863; <span><?php esc_html_e('List view', 'bagstore'); ?></span></a>
				</nav>
			<?php
		}
			
	}
	new Vela_Grid_List();
}
?>