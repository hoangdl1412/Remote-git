<?php 
/*** Tiny account ***/
if( !function_exists('vela_tiny_account') ){
	function vela_tiny_account(){
		$login_url = '#';
		$register_url = '#';
		$profile_url = '#';
		$logout_url = wp_logout_url(get_permalink());
		
		if( vela_has_woocommerce() ){ /* Active woocommerce */
			$myaccount_page_id = get_option( 'woocommerce_myaccount_page_id' );
			if ( $myaccount_page_id ) {
			  $login_url = get_permalink( $myaccount_page_id );
			  $register_url = $login_url;
			  $profile_url = $login_url;
			}		
		}
		else{
			$login_url = wp_login_url();
			$register_url = wp_registration_url();
			$profile_url = admin_url( 'profile.php' );
		}
		
		$redirect_to = ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		
		$_user_logged = is_user_logged_in();
		ob_start();
		
		?>
		
			<div class="vela-account">
				<?php if( !$_user_logged ): ?>
					<div class="vela_login">
					<a  class="login" href="<?php echo esc_url($login_url); ?>" title="<?php esc_html_e('Login','bagstore'); ?>"><span><?php esc_html_e('Login','bagstore');?></span></a>
					<?php if( !$_user_logged ): ?>
			<div class="vela_account_form">
					<form name="vela-login-form" class="vela_login_form" action="<?php echo esc_url(wp_login_url()); ?>" method="post">
			
						<p class="vela_login_user">
							<label><?php esc_html_e('Username', 'bagstore'); ?></label>
							<input type="text" name="log" class="input" value="" size="20" autocomplete="off">
						</p>
						<p class="vela_login_pass">
							<label><?php esc_html_e('Password', 'bagstore'); ?></label>
							<input type="password" name="pwd" class="input" value="" size="20">
						</p>
						
						<p class="vela_login_submit">
							<input type="submit" name="wp-submit" class="button-secondary button" value="<?php esc_html_e('login', 'bagstore'); ?>">
							<input type="hidden" name="redirect_to" value="<?php echo esc_url($redirect_to); ?>">
						</p>
						
					</form>
		
					<p class="vela_forgot_pass"><a href="<?php echo esc_url(wp_lostpassword_url()); ?>" title="<?php esc_html_e('Forgot Your Password?','bagstore');?>"><?php esc_html_e('Forgot Your Password?','bagstore');?></a></p>
				</div>
			<?php endif; ?>
			</div>
					 / 
					<a class="vela_sign_up" href="<?php echo esc_url($register_url); ?>" title="<?php esc_html_e('Create New Account','bagstore'); ?>"><span><?php esc_html_e('Register','bagstore');?></span></a>
					
				<?php else: ?>
					<a class="vela_my_account" href="<?php echo esc_url($profile_url); ?>" title="<?php esc_html_e('My Account','bagstore'); ?>"><span><?php esc_html_e('My Account','bagstore');?></span></a> / 
					<a class="vela_log_out" href="<?php echo esc_url($logout_url); ?>" title="<?php esc_html_e('Logout','bagstore'); ?>"><span><?php esc_html_e('Logout','bagstore');?></span></a>
				<?php endif; ?>
			</div>
						
		<?php
		return ob_get_clean();
	}
}

/*** Tiny Cart ***/
if( !function_exists('vela_tiny_cart') ){
	function vela_tiny_cart(){
		if( !vela_has_woocommerce() ){
			return '';
		}
		$cart_empty = WC()->cart->is_empty();
		$cart_url = WC()->cart->get_cart_url(); // since 2.5.0 use wc_get_cart_url();
		$checkout_url = WC()->cart->get_checkout_url(); // since 2.5.0 use wc_get_checkout_url();
		$cart_number = WC()->cart->get_cart_contents_count();
		ob_start();
		?>
			<div class="vela-shoppping-cart">
				<a class="vela_cart" href="<?php echo esc_url($cart_url); ?>" title="<?php esc_html_e('View your shopping cart','bagstore');?>">
					<span class="cart-number<?php if($cart_number > 0){ echo esc_html(" no-bracket"); } ?>"><?php if($cart_number > 0){ if ($cart_number > 1){ echo esc_html($cart_number); esc_html_e('');}else { echo esc_html($cart_number); esc_html_e('');} } else{ echo esc_html($cart_number); esc_html_e(' '); } ?></span>
					
				</a>
				
				<div class="vela_shopping_form vela_account_form">
						<?php if( $cart_empty ): ?>
							<label><?php esc_html_e('Your shopping cart is empty', 'bagstore'); ?></label>
						<?php else: ?>
							<ul class="vela_cart_list">
								<?php 
								$cart = WC()->cart->get_cart();
								foreach( $cart as $cart_item_key => $cart_item ):
									$_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
									if ( !( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) ){
										continue;
									}
										
									$product_price = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
									
								?>
									<li>
										<a href="<?php echo get_permalink( $cart_item['product_id'] ); ?>">
											<?php echo  $_product->get_image(); ?>
										</a>
										<div class="vela_cart_item">	
											<h3 class="product-name">
												<a href="<?php echo get_permalink( $cart_item['product_id'] ); ?>">
													<?php echo  $_product->get_title(); ?>
												</a>
											</h3>
											<?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity">' . $cart_item['quantity'] . '</span> ', $cart_item, $cart_item_key ); ?>
											<?php echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="price"><span class="amount icon"> x </span> ' . $product_price . '</span>', $cart_item, $cart_item_key ); ?>
											<?php echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf('<a href="%s" class="remove" title="%s" data-key="%s">&times;</a>', esc_url( WC()->cart->get_remove_url( $cart_item_key ) ), esc_html__( 'Remove this item', 'bagstore' ), $cart_item_key ), $cart_item_key ); ?>
										</div>
									</li>
								
								<?php endforeach; ?>
							</ul>
							<div class="vela_cart_check">
								<div class="total"><span class="total-title"><?php esc_html_e('Subtotal :', 'bagstore');?></span><?php echo WC()->cart->get_cart_subtotal(); ?> </div>
								
								<a href="<?php echo esc_url($cart_url); ?>" class="button btn_cart"><?php esc_html_e('View cart', 'bagstore'); ?></a>
								<a href="<?php echo esc_url($checkout_url); ?>" class="button checkout button-secondary"><?php esc_html_e('Checkout', 'bagstore'); ?></a>
							</div>
						<?php endif; ?>
					
				</div>
			</div>
		<?php
		return ob_get_clean();
	}
}
add_filter('woocommerce_add_to_cart_fragments', 'vela_tiny_cart_filter');
function vela_tiny_cart_filter($fragments){
	$fragments['.vela-shoppping-cart'] = vela_tiny_cart();
	return $fragments;
}

function vela_remove_cart_item(){
	$cart_item_key = sanitize_text_field( $_POST['cart_item_key'] );
	if( $cart_item = WC()->cart->get_cart_item( $cart_item_key ) ){
		WC()->cart->remove_cart_item( $cart_item_key );
	}
	WC_AJAX::get_refreshed_fragments();
}
add_action('wp_ajax_vela_remove_cart_item', 'vela_remove_cart_item');
add_action('wp_ajax_nopriv_vela_remove_cart_item', 'vela_remove_cart_item');

/** Tini wishlist **/
function vela_tini_wishlist(){
	if( !(vela_has_woocommerce() && class_exists('YITH_WCWL')) ){
		return;
	}
	
	ob_start();
	
	$wishlist_page_id = get_option( 'yith_wcwl_wishlist_page_id' );
	if( function_exists( 'wpml_object_id_filter' ) ){
		$wishlist_page_id = wpml_object_id_filter( $wishlist_page_id, 'page', true );
	}
	$wishlist_page = get_permalink( $wishlist_page_id );
	
	$count = yith_wcwl_count_products();
	
	?>

	<a title="<?php  esc_html_e('Wishlist','bagstore'); ?>" href="<?php echo esc_url($wishlist_page); ?>" class="tini-wishlist">
		<?php esc_html_e('Wishlist','bagstore'); ?> <?php echo '('.($count > 0?zeroise($count, 2):'0').')'; ?>
	</a>

	<?php
	$tini_wishlist = ob_get_clean();
	return $tini_wishlist;
}

function vela_update_tini_wishlist() {
	die(vela_tini_wishlist());
}

add_action('wp_ajax_update_tini_wishlist', 'vela_update_tini_wishlist');
add_action('wp_ajax_nopriv_update_tini_wishlist', 'vela_update_tini_wishlist');

if( !function_exists('vela_woocommerce_multilingual_currency_switcher') ){
	function vela_woocommerce_multilingual_currency_switcher(){
		if( class_exists('woocommerce_wpml') && class_exists('WooCommerce') && class_exists('SitePress') ){
			global $sitepress, $woocommerce_wpml;
			
			if( !isset($woocommerce_wpml->multi_currency) ){
				return;
			}
			
			$settings = $woocommerce_wpml->get_settings();
			
			$format = isset($settings['wcml_curr_template']) && $settings['wcml_curr_template'] != '' ? $settings['wcml_curr_template']:'%code%';
			$wc_currencies = get_woocommerce_currencies();
			if( !isset($settings['currencies_order']) ){
				$currencies = $woocommerce_wpml->multi_currency->get_currency_codes();
			}else{
				$currencies = $settings['currencies_order'];
			}
			
			$selected_html = '';
			foreach( $currencies as $currency ){
				if($woocommerce_wpml->settings['currency_options'][$currency]['languages'][$sitepress->get_current_language()] == 1 ){
					$currency_format = preg_replace(array('#%name%#', '#%symbol%#', '#%code%#'),
													array($wc_currencies[$currency], get_woocommerce_currency_symbol($currency), $currency), $format);
						
					if( $currency == $woocommerce_wpml->multi_currency->get_client_currency() ){
						$selected_html = '<a href="javascript: void(0)" class="vela-currency-selector">'.$currency_format.'</a>';
						break;
					}
				}
			}
			
			echo '<div class="vela-currency">';
				echo  $selected_html;
				echo '<ul>';
			
				foreach( $currencies as $currency ){
					if($woocommerce_wpml->settings['currency_options'][$currency]['languages'][$sitepress->get_current_language()] == 1 ){
						$currency_format = preg_replace(array('#%name%#', '#%symbol%#', '#%code%#'),
														array($wc_currencies[$currency], get_woocommerce_currency_symbol($currency), $currency), $format);
						echo '<li rel="' . $currency . '" >' . $currency_format . '</li>';
					}
				}
				
				echo '</ul>';
			echo '</div>';
		}
		else if( class_exists('WOOCS') && class_exists('WooCommerce') ){ /* Support WooCommerce Currency Switcher */
			global $WOOCS;
			$currencies = $WOOCS->get_currencies();
			if( !is_array($currencies) ){
				return;
			}
			?>
			<div class="vela-currency">
				<a href="#" class="vela-currency-selector"><?php echo esc_html($WOOCS->current_currency); ?></a>
				<ul>
					<?php 
					foreach( $currencies as $key => $currency ){
						$link = add_query_arg('currency', $currency['name']);
						echo '<li rel="'.$currency['name'].'"><a href="'.esc_url($link).'">'.esc_html($currency['name']).'</a></li>';
					}
					?>
				</ul>
			</div>
			<?php
		}else{/* Demo html */
			?>
			<div class="vela-currency">
				<a href="#" class="vela-currency-selector">USD<i class="fa fa-angle-down" aria-hidden="true"></i></a>
				<ul>
					<li rel="USD">Dollar (USD)</li>
					<li rel="EUR">Euro (EUR)</li>
				</ul>
			</div>
			<?php
		}
	}
}

if( !function_exists('vela_wpml_language_selector') ){
	function vela_wpml_language_selector(){
		if( class_exists('SitePress') ){
			global $sitepress;
			if( method_exists($sitepress, 'get_mobile_language_selector') ){
				echo  $sitepress->get_mobile_language_selector();
			}
		}
		else{ /* Demo html */
			?>
			<div id="vela_language" class="vela_language">
				<ul>
					<li>
						<a href="#" class="vela_lang vela_lang_eng"><img src="http://demo.fieldthemes.com/woo_bag/store/wp-content/themes/bagstore/assets/images/en.png" alt="">English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
						<ul style="visibility: hidden;">
							<li class="vela_lang_fran"><a rel="alternate" href="#"><img src="http://demo.fieldthemes.com/woo_bag/store/wp-content/themes/bagstore/assets/images/2.jpg" alt="">Français</a></li>
							<li class="vela_lang_esp"><a rel="alternate" href="#"><img src="http://demo.fieldthemes.com/woo_bag/store/wp-content/themes/bagstore/assets/images/3.jpg" alt="">Español</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<?php
		}
	}
}
?>