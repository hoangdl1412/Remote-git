<?php
/*************************************************
* WooCommerce Custom Hook                        *
**************************************************/

/*** Shop - Category ***/

/* Remove hook */
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);

remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);

remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);

remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);

remove_action('woocommerce_before_subcategory', 'woocommerce_template_loop_category_link_open', 10);
remove_action('woocommerce_after_subcategory', 'woocommerce_template_loop_category_link_close', 10);

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

/* Add new hook */

add_action('woocommerce_before_shop_loop_item_title', 'ftc_template_loop_product_thumbnail', 10);
add_action('woocommerce_after_shop_loop_item_title', 'ftc_template_loop_product_label', 1);

add_action('woocommerce_after_shop_loop_item', 'ftc_template_loop_categories', 10);
add_action('woocommerce_after_shop_loop_item', 'ftc_template_loop_product_title', 20);
add_action('woocommerce_after_shop_loop_item', 'ftc_template_loop_product_sku', 30);
add_action('woocommerce_after_shop_loop_item', 'ftc_template_loop_short_description', 40); 
add_action('woocommerce_after_shop_loop_item', 'ftc_template_loop_short_description_listview', 65); 
add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_price', 60);
add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_rating', 50);
add_action('woocommerce_after_shop_loop_item', 'ftc_template_loop_add_to_cart', 70); 

add_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 30 );
add_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 20 );


//add_action('woocommerce_before_shop_loop', 'ftc_shop_top_content_widget_area_button', 25);

add_filter('loop_shop_per_page', 'ftc_change_products_per_page_shop' ); 
add_filter('woocommerce_product_get_rating_html', 'ftc_get_empty_rating_html', 10, 2);

function ftc_product_get_availability(){
	global $product;
	$availability = $class = '';
	if ( $product->managing_stock() ) {
		if ( $product->is_in_stock() && $product->get_stock_quantity() > get_option( 'woocommerce_notify_no_stock_amount' ) ) {
			switch ( get_option( 'woocommerce_stock_format' ) ) {
				case 'no_amount' :
				$availability = esc_html__( 'In stock', 'dove' );
				break;
				case 'low_amount' :
				if ( $product->get_stock_quantity() <= get_option( 'woocommerce_notify_low_stock_amount' ) ) {
					$availability = sprintf( esc_html__( 'Only %s left in stock', 'dove' ), $product->get_stock_quantity() );
					if ( $product->backorders_allowed() && $product->backorders_require_notification() ) {
						$availability .= ' ' . esc_html__( '(can be backordered)', 'dove' );
					}
				} else {
					$availability = esc_html__( 'In stock', 'dove' );
				}
				break;
				default :
				$availability = sprintf( esc_html__( '%s in stock', 'dove' ), $product->get_stock_quantity() );
				if ( $product->backorders_allowed() && $product->backorders_require_notification() ) {
					$availability .= ' ' . esc_html__( '(can be backordered)', 'dove' );
				}
				break;
			}
			$class        = 'in-stock';
		} elseif ( $product->backorders_allowed() && $product->backorders_require_notification() ) {
			$availability = esc_html__( 'Available on backorder', 'dove' );
			$class        = 'available-on-backorder';
		} elseif ( $product->backorders_allowed() ) {
			$availability = esc_html__( 'In stock', 'dove' );
			$class        = 'in-stock';
		} else {
			$availability = esc_html__( 'Out of stock', 'dove' );
			$class        = 'out-of-stock';
		}
	} elseif ( ! $product->is_in_stock() ) {
		$availability = esc_html__( 'Out of stock', 'dove' );
		$class        = 'out-of-stock';
	}

	return array( 'availability' => $availability, 'class' => $class );
}

function ftc_template_loop_product_label(){
	global $product, $post, $smof_data;
	$out_of_stock = false;
	$product_stock = ftc_product_get_availability();
	if( isset($product_stock['class']) && $product_stock['class'] == 'out-of-stock' ){
		$out_of_stock = true;
	}
	?>
	<div class="conditions-box">
		<?php 
		/* Sale label */
		if( $product->is_on_sale() && !$out_of_stock ){ 
			if( $product->get_regular_price() > 0 && $smof_data['ftc_show_sale_label_as'] != 'text' ){
				$_off_percent = (1 - round($product->get_price() / $product->get_regular_price(), 2))*100;
				$_off_price = round($product->get_regular_price() - $product->get_price(), 0);
				$_price_symbol = get_woocommerce_currency_symbol();
				if( $smof_data['ftc_show_sale_label_as'] == 'number' ){
					
					$symbol_pos = get_option('woocommerce_currency_pos', 'left');
					$price_display = '';
					switch( $symbol_pos ){
						case 'left':
						$price_display = '-'.$_price_symbol.$_off_price;
						break;
						case 'right':
						$price_display = '-'.$_off_price.$_price_symbol;
						break;
						case 'left_space':
						$price_display = '-'.$_price_symbol.' '.$_off_price;
						break;
						default: /* right_space */
						$price_display = '-'.$_off_price.' '.$_price_symbol;
						break;
					}
					
					echo '<span class="onsale amount" data-original="'.$price_display.'">'.$price_display.'</span>';
				}
				if( $smof_data['ftc_show_sale_label_as'] == 'percent' ){
					echo '<span class="onsale percent">-'.$_off_percent.'%</span>';
				}
			}
			else{
				echo '<span class="onsale">'.esc_html(stripslashes($smof_data['ftc_product_sale_label_text'])).'</span>';
			}
			
		}
		
		/* Hot label */
		if( $product->is_featured() && !$out_of_stock ){
			echo '<span class="featured">'.esc_html(stripslashes($smof_data['ftc_product_feature_label_text'])).'</span>';
		}
		
		/* Out of stock */
		if( $out_of_stock ){
			echo '<span class="out-of-stock">'.esc_html(stripslashes($smof_data['ftc_product_out_of_stock_label_text'])).'</span>';
		}
		?>
	</div>
	<?php
}

function ftc_template_loop_product_thumbnail(){
	global $product, $smof_data;
	$lazy_load = isset($smof_data['ftc_prod_lazy_load']) && $smof_data['ftc_prod_lazy_load'] && !( defined( 'DOING_AJAX' ) && DOING_AJAX );
	$placeholder_img_src = isset($smof_data['ftc_prod_placeholder_img'])?$smof_data['ftc_prod_placeholder_img']:wc_placeholder_img_src();
	
	if( defined( 'YITH_INFS' ) && (is_shop() || is_product_taxonomy()) ){ /* Compatible with YITH Infinite Scrolling */
		$lazy_load = false;
	}
	
	$prod_galleries = $product->get_gallery_image_ids();
	
	$has_back_image = (isset($smof_data['ftc_effect_product']) && (int)$smof_data['ftc_effect_product'] == 0)?false:true;
	
	if( !is_array($prod_galleries) || ( is_array($prod_galleries) && count($prod_galleries) == 0 ) ){
		$has_back_image = false;
	}
	
	if( wp_is_mobile() ){
		$has_back_image = false;
	}
	
	$image_size = apply_filters('ftc_loop_product_thumbnail', 'shop_catalog');
	
	$dimensions = wc_get_image_size( $image_size );
	
	echo '<span class="'.(($has_back_image)?'cover_image':'no-image').'">';
	if( !$lazy_load ){
		echo woocommerce_get_product_thumbnail( $image_size );
		if( $has_back_image ){
			echo wp_get_attachment_image( $prod_galleries[0], $image_size, 0, array('class' => 'product-hover-image') );
		}
	}
	else{
		$front_img_src = '';
		$alt = '';
		if( has_post_thumbnail( $product->get_id() ) ){
			$post_thumbnail_id = get_post_thumbnail_id($product->get_id());
			$image_obj = wp_get_attachment_image_src($post_thumbnail_id, $image_size, 0);
			if( isset($image_obj[0]) ){
				$front_img_src = $image_obj[0];
			}
			$alt = trim(strip_tags( get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true) ));
		}
		else if( wc_placeholder_img_src() ){
			$front_img_src = wc_placeholder_img_src();
		}
		
		echo '<img src="'.esc_url($placeholder_img_src).'" data-src="'.esc_url($front_img_src).'" class="attachment-shop_catalog wp-post-image ftc-lazy-load" alt="'.esc_attr($alt).'" width="'.$dimensions['width'].'" height="'.$dimensions['height'].'" />';
		echo '</span>';
		echo '<span class="hover_image">';
		if( $has_back_image ){
			$back_img_src = '';
			$alt = '';
			$image_obj = wp_get_attachment_image_src($prod_galleries[0], $image_size, 0);
			if( isset($image_obj[0]) ){
				$back_img_src = $image_obj[0];
				$alt = trim(strip_tags( get_post_meta($prod_galleries[0], '_wp_attachment_image_alt', true) ));
			}
			else if( wc_placeholder_img_src() ){
				$back_img_src = wc_placeholder_img_src();
			}
			
			echo '<img src="'.esc_url($placeholder_img_src).'" data-src="'.esc_url($back_img_src).'" class="product-hover-image ftc-lazy-load" alt="'.esc_attr($alt).'" width="'.$dimensions['width'].'" height="'.$dimensions['height'].'" />';
		}
	}
	echo '</span>';
}

function ftc_template_loop_product_title(){
	global $post, $product;
	$uri = esc_url(get_permalink($post->ID));
	echo "<h4 class=\"title_sub product-name\">";
	echo "<a href='{$uri}'>". esc_attr(get_the_title()) ."</a>";
	echo "</h4>";
}

function ftc_template_loop_add_to_cart(){
	global $smof_data;
	
	if( $smof_data['ftc_enable_catalog_mode'] ){
		return;
	}
	
	echo "<div class='ftc-add-to-cart add_to_cart_button'>";
	woocommerce_template_loop_add_to_cart();
	echo "</div>";
}

function ftc_template_loop_product_sku(){
	global $product, $post;
	echo "<span class=\"product-sku\">" . esc_attr($product->get_sku()) . "</span>";
}

function ftc_template_loop_short_description(){
	global $product, $post, $smof_data;
	$has_grid_list = get_option('ftc_enable_glt', 'yes') == 'yes';
	$grid_limit_words = absint($smof_data['ftc_prod_cat_grid_desc_words']);
	$show_grid_desc = $smof_data['ftc_prod_cat_grid_desc'];
	
	if( empty($post->post_excerpt) )
		return;
	
	if( !(is_tax( get_object_taxonomies( 'product' ) ) || is_post_type_archive('product')) ):
		?>
	<p class="product-short-meta">
		<?php ftc_the_excerpt_max_words($grid_limit_words, '', true, '', true); ?>
	</p>
	<?php
	else:
		if( $show_grid_desc ):
			?>
		<div class="product-short-meta grid" style="<?php echo ($has_grid_list)?'display: none':''; ?>" >
			<?php ftc_the_excerpt_max_words($grid_limit_words, '', true, '', true); ?>
		</div>
		<?php
		endif;
		endif;
	}

	function ftc_template_loop_short_description_listview(){
		global $product, $post, $smof_data;
		$list_limit_words = absint($smof_data['ftc_prod_cat_list_desc_words']);
		$show_list_desc = $smof_data['ftc_prod_cat_list_desc'];
		$is_archive = is_tax( get_object_taxonomies( 'product' ) ) || is_post_type_archive('product');
		if( $show_list_desc && $is_archive ):
			?>
		<div class="product-short-meta list" style="display: none" >
			<?php ftc_the_excerpt_max_words($list_limit_words, '', true, '', true); ?>
		</div>
		<?php
		endif;
	}

	function ftc_template_loop_categories(){
		global $product;        
		$categories_label = esc_html__('Categories: ', 'dove');
		echo wc_get_product_category_list($product->get_id(),', ', '<div class="product-categories"><span>'.$categories_label.'</span>', '</div>'); 
	}
	function ftc_change_products_per_page_shop(){
		global $smof_data;
		if( is_tax( get_object_taxonomies( 'product' ) ) || is_post_type_archive('product') ){
			if( isset($smof_data["ftc_prod_cat_per_page"]) && absint($smof_data["ftc_prod_cat_per_page"]) > 0){
				return absint($smof_data["ftc_prod_cat_per_page"]);
			}
		}
	}

	function ftc_get_empty_rating_html( $rating_html, $rating ){
		if( $rating == 0 ){
			$rating_html  = '<div class="star-rating no-rating" title="">';
			$rating_html .= '<span style="width:0%"></span>';
			$rating_html .= '</div>';
		}
		return $rating_html;
	}

	function ftc_shop_top_content_widget_area_button(){
		global $smof_data;
		if( is_active_sidebar('product-category-top-content') && $smof_data['ftc_prod_cat_top_content'] ){
			?>
			<div class="prod-cat-show-top-content-button"><a href="#"><?php esc_html_e('Filter', 'dove') ?></a></div>
			<?php
		}
	}

	/*** End Shop - Category ***/

	/*** Single Product ***/

	/* Remove hook */
	remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
	remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
	remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
	remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
	remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50);
	remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
	remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );

	/* Add hook */
	add_action('ftc_before_product_image', 'ftc_template_loop_product_label', 10);
	add_action('ftc_before_product_image', 'ftc_template_single_product_video_button', 20);

	add_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 0);
	add_action('woocommerce_single_product_summary', 'ftc_template_single_navigation', 1);
	add_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 2);
//add_action('woocommerce_single_product_summary', 'ftc_template_single_availability', 4);
	add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 6);
	add_action('woocommerce_single_product_summary', 'ftc_template_single_sku', 22);
	add_action('woocommerce_single_product_summary', 'ftc_template_single_meta', 21);
	add_action('woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 70);

	add_action('woocommerce_after_single_product_summary', 'ftc_product_ads_banner', 12);

	add_action('woocommerce_share', 'ftc_template_before_single_social_sharing', 9);
	add_action('woocommerce_share', 'ftc_template_social_sharing', 10);
	add_action('woocommerce_share', 'ftc_template_after_single_social_sharing', 11);

	if( function_exists('ftc_template_loop_time_deals') ){
		add_action('woocommerce_single_product_summary', 'ftc_template_loop_time_deals', 20);
	}

	add_filter('woocommerce_available_variation', 'ftc_variable_product_price_filter', 10, 3);

	add_filter('woocommerce_product_description_heading', create_function('', 'return "";'));
	add_filter('woocommerce_product_additional_information_heading', create_function('', 'return "";'));

	add_filter('woocommerce_output_related_products_args', 'ftc_output_related_products_args_filter');

	if( !is_admin() ){ /* Fix for WooCommerce Tab Manager plugin */
		add_filter( 'woocommerce_product_tabs', 'ftc_product_remove_tabs', 999 );
		add_filter( 'woocommerce_product_tabs', 'ftc_add_product_custom_tab', 90 );
	}

	add_action('wp_ajax_load_product_video', 'ftc_load_product_video_callback' );
	add_action('wp_ajax_nopriv_load_product_video', 'ftc_load_product_video_callback' );
	/*** End Product ***/

	function ftc_template_single_product_video_button(){
		if( wp_is_mobile() ){
			return;
		}
		global $product;
		$video_url = get_post_meta($product->get_id(), 'ftc_prod_video_url', true);
		if( !empty($video_url) ){
			$ajax_url = admin_url('admin-ajax.php', is_ssl()?'https':'http').'?ajax=true&action=load_product_video&product_id='.$product->get_id();
			echo '<a class="ftc-product-video-button" href="'.esc_url($ajax_url).'"></a>';
		}
	}

	/* Single Product Video - Register ajax */
	function ftc_load_product_video_callback(){
		if( empty($_GET['product_id']) ){
			die('Invalid Products');
		}
		
		$prod_id = absint($_GET['product_id']);

		if( $prod_id <= 0 ){
			die('Invalid Products');
		}
		
		$video_url = get_post_meta($prod_id, 'ftc_prod_video_url', true);
		ob_start();
		if( !empty($video_url) ){
			echo do_shortcode('[ftc_video src='.esc_url($video_url).']');
		}
		die( ob_get_clean() );
	}

	function ftc_template_single_navigation(){
		$prev_post = get_adjacent_post(false, '', true, 'product_cat');
		$next_post = get_adjacent_post(false, '', false, 'product_cat');
		?>
		<div class="detail-nav-summary">
			<?php 
			if( $prev_post ){
				$post_id = $prev_post->ID;
				$product = wc_get_product($post_id);
				?>
				<a href="<?php echo get_permalink($post_id); ?>" rel="prev">
					<div class="product-detail-nav prev-product-detail-nav">
						<?php echo $product->get_image(); ?>
						<span><?php echo esc_html($product->get_title()); ?></span>
						<span class="price"><?php echo $product->get_price_html(); ?></span>
						
					</div>
				</a>
				<?php
			}
			
			if( $next_post ){
				$post_id = $next_post->ID;
				$product = wc_get_product($post_id);
				?>
				<a href="<?php echo get_permalink($post_id); ?>" rel="next">
					<div class="product-detail-nav next-product-detail-nav">
						<?php echo $product->get_image(); ?>
						<span><?php echo esc_html($product->get_title()); ?></span>
						<span class="price"><?php echo $product->get_price_html(); ?></span>
						
					</div>
				</a>
				<?php
			}
			?>
		</div>
		<?php
	}

	function ftc_template_before_single_social_sharing(){
		?>
		<div class="social-sharing">
			<div class="print">
				<a href="javascript:window.print()" rel="nofollow"><i class="fa fa-print"></i><?php esc_html_e('Print', 'dove') ?></a>
			</div>
			<div class="email">
				<a href="mailto:?subject=<?php echo esc_attr(sanitize_title(get_the_title())); ?>&amp;body=<?php echo esc_url(get_permalink()); ?>">
					<i class="fa fa-envelope"></i>
					<?php esc_html_e('Email to a Friend', 'dove') ?>
				</a>
			</div>
			<ul class="ftc-social-sharing">

				<li class="facebook">
					<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook</a>
				</li>
				<li class="twitter">
					<a href="https://twitter.com/home?status=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i>Tweet</a>
				</li>

				<li class="pinterest">
					<?php $image_link  = wp_get_attachment_url( get_post_thumbnail_id() );?>
					<a href="https://pinterest.com/pin/create/button/?url=<?php echo esc_url(get_permalink()); ?>&amp;media=<?php echo esc_url($image_link);?>" target="_blank"><i class="fa fa-pinterest-square" aria-hidden="true"></i> Printerest</a>
				</li>
				
				<li class="google-plus">
					<a href="https://plus.google.com/share?url=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i> Google+</a>
				</li>
				
			</ul>
			<?php
		}

		function ftc_template_after_single_social_sharing(){
			?>
		</div>
		<?php
	}

	function ftc_template_single_meta(){
		global $product, $post, $smof_data;
		$cat_count = sizeof( get_the_terms( $post->ID, 'product_cat' ) );
		$tag_count = sizeof( get_the_terms( $post->ID, 'product_tag' ) );
		
		echo '<div class="product-meta">';
		do_action( 'woocommerce_product_meta_start' );
		if ($smof_data['ftc_prod_cat']) {
			echo wc_get_product_category_list($product->get_id(),', ', '<div class="caftc-link"><span>' . esc_html__('Categories', 'dove') . '</span><span class="cat-links">', '</span></div>');
		}
		if ($smof_data['ftc_prod_tag']) {
			echo wc_get_product_tag_list($product->get_id(),', ', '<div class="tags-link"><span>' . esc_html__('Tags', 'dove') . '</span><span class="tag-links">', '</span></div>');
		}
		do_action( 'woocommerce_product_meta_end' );
		echo '</div>';
	}

	function ftc_template_single_sku(){
		global $product;
		if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ){
			echo '<div class="sku-wrapper product_meta">' . '<span class="sku-title">' .esc_html__( 'Sku ', 'dove' ) .'</span>'. '<span class="sku" itemprop="sku">' . (( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'dove' )) . '</span></div>';
		}
	}
	function ftc_template_single_availability(){
		global $product;

		$product_stock = ftc_product_get_availability();
		$availability_text = empty($product_stock['availability'])?esc_html__('In Stock', 'dove'):esc_attr($product_stock['availability']);
		?>	
		<p class="availability stock <?php echo esc_attr($product_stock['class']); ?>" data-original="<?php echo esc_attr($availability_text) ?>" data-class="<?php echo esc_attr($product_stock['class']) ?>"><span><?php echo esc_html($availability_text); ?></span></p>	
		<?php
	}


	/*** Product tab ***/
	function ftc_product_remove_tabs( $tabs = array() ){
		global $smof_data;
		if( !$smof_data['ftc_prod_tabs'] ){
			return array();
		}
		return $tabs;
	}

	function ftc_add_product_custom_tab( $tabs = array() ){
		global $smof_data, $post;
		
		$custom_tab_title = $smof_data['ftc_prod_custom_tab_title'];
		
		$product_custom_tab = get_post_meta( $post->ID, 'ftc_prod_custom_tab', true );
		if( $product_custom_tab ){
			$custom_tab_title = get_post_meta( $post->ID, 'ftc_prod_custom_tab_title', true );
		}
		
		if( $smof_data['ftc_prod_custom_tab'] ){
			$tabs['ftc_custom'] = array(
				'title'    	=> esc_html( $custom_tab_title )
				,'priority' => 90
				,'callback' => "ftc_product_custom_tab_content"
				);
		} 
		return $tabs;
	}

	function ftc_product_custom_tab_content(){
		global $smof_data, $post;
		
		$custom_tab_content = $smof_data['ftc_prod_custom_tab_content'];
		
		$product_custom_tab = get_post_meta( $post->ID, 'ftc_prod_custom_tab', true );
		if( $product_custom_tab ){
			$custom_tab_content = get_post_meta( $post->ID, 'ftc_prod_custom_tab_content', true );
		}
		
		echo do_shortcode( stripslashes( htmlspecialchars_decode( $custom_tab_content ) ) );
	}

	/* Ads Banner */
	function ftc_product_ads_banner(){
		global $smof_data;
		
		if( $smof_data['ftc_prod_ads_banner'] && is_plugin_active('js_composer.js_composer.php')){
			$ads_banner_content = $smof_data['ftc_prod_ads_banner_content'];
			echo '<div class="ads-banner">';
			echo do_shortcode( stripslashes( htmlspecialchars_decode( $ads_banner_content ) ) );
			echo '</div>';
		}
	}

	/* Related Products */
	function ftc_output_related_products_args_filter( $args ){
		$args['posts_per_page'] = 6;
		$args['columns'] = 5;
		return $args;
	}

	/* Always show variable product price if they are same */
	function ftc_variable_product_price_filter( $value, $object = null, $variation = null ){
		if( $value['price_html'] == '' ){
			$value['price_html'] = '<span class="price">' . $variation->get_price_html() . '</span>';
		}
		return $value;
	}

	/*** General hook ***/

/*************************************************************
* Custom group button on product (quickshop, wishlist, compare) 
* Begin tag: 	10000
* Add To Cart: 	10001
* Wishlist:  	10002
* Compare:   	10003
* Quickshop: 	10004
* End tag:   	10005
**************************************************************/
add_action('woocommerce_after_shop_loop_item_title', 'ftc_template_loop_add_to_cart', 10001 );
function ftc_product_group_button_start(){
	global $smof_data;
	$num_icon = 0;
	
	if( $smof_data['ftc_effect_hover_product_style'] != 'style-3' ){
		if( has_action('woocommerce_after_shop_loop_item_title', 'ftc_template_loop_add_to_cart') && !$smof_data['ftc_enable_catalog_mode'] && apply_filters('ftc_display_add_to_cart_button_on_thumbnail', true) ){
			$num_icon++;
		}
	}
	else{
		remove_action('woocommerce_after_shop_loop_item_title', 'ftc_template_loop_add_to_cart', 10001 );
	}
	
	echo "<div class=\"button-in-product\" >";
}

function ftc_product_group_button_end(){
	echo "</div>";
}
function ftc_meta_start(){
	echo "<div class='meta_info'>";
}
function ftc_meta_end(){
	echo "</div>";
}
add_action('woocommerce_after_shop_loop_item_title', 'ftc_product_group_button_start', 10000 );
add_action('woocommerce_after_shop_loop_item_title', 'ftc_product_group_button_end', 10005 );
add_action('woocommerce_after_shop_loop_item', 'ftc_meta_start', 69 );
add_action('woocommerce_after_shop_loop_item', 'ftc_meta_end', 100 );
/* Wishlist */
if( class_exists('YITH_WCWL') ){
	function ftc_add_wishlist_button_to_product_list(){
		global $product, $yith_wcwl;
		
		$default_wishlists = is_user_logged_in() ? YITH_WCWL()->get_wishlists( array( 'is_default' => true ) ) : false;
		if( ! empty( $default_wishlists ) ){
			$default_wishlist = $default_wishlists[0]['ID'];
		}
		else{
			$default_wishlist = false;
		}
		
		$exists = YITH_WCWL()->is_product_in_wishlist( $product->get_id(), $default_wishlist );
		
		$wishlist_url = YITH_WCWL()->get_wishlist_url();
		
		$added_class = $exists?'added':'';
		
		echo '<div class="yith-wcwl-add-to-wishlist add-to-wishlist-'.$product->get_id().' '.$added_class.'">';
		echo '<a href="' . esc_url( add_query_arg( 'add_to_wishlist', $product->get_id() ) )
		. '" data-product-id="' . $product->get_id() . '" data-product-type="' . $product->get_type() 
		. '" class="add_to_wishlist wishlist" ><i class="fa fa-heart"></i><span class="ftc-note">'.esc_html__('Wishlist', 'dove').'</span></a>';
		echo '<img src="'. get_template_directory_uri() . '/assets/images/ajax-loader.gif' .'" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />';
		
		echo '<span class="yith-wcwl-wishlistaddedbrowse hide" style="display: none">';
		echo '<a href="'.esc_url($wishlist_url).'"><i class="fa fa-heart-o"></i><span class="ftc-note">'.esc_html__('Wishlist', 'dove').'</span></a>';
		echo '</span>';
		
		echo '<span class="yith-wcwl-wishlistexistsbrowse '.($exists?'show':'hide').'" style="'.($exists?'':'display: none').'">';
		echo '<a href="'.esc_url($wishlist_url).'"><i class="fa fa-heart-o"></i><span class="ftc-note">'.esc_html__('Wishlist', 'dove').'</span></a>';
		echo '</span>';
		
		echo '</div>';
	}
	add_action( 'woocommerce_after_shop_loop_item_title', 'ftc_add_wishlist_button_to_product_list', 10002 );
	add_action( 'woocommerce_after_shop_loop_item', 'ftc_add_wishlist_button_to_product_list', 69 );
}

/* Compare */
if( class_exists('YITH_Woocompare') && get_option('yith_woocompare_compare_button_in_products_list') == 'yes' ){
	global $yith_woocompare;
	$is_ajax = ( defined( 'DOING_AJAX' ) && DOING_AJAX );
	if( $yith_woocompare->is_frontend() || $is_ajax ) {
		if( $is_ajax ){
			if( defined('YITH_WOOCOMPARE_DIR') && !class_exists('YITH_Woocompare_Frontend') ){
				$compare_frontend_class = YITH_WOOCOMPARE_DIR . 'includes/class.yith-woocompare-frontend.php';
				if( file_exists($compare_frontend_class) ){
					require_once $compare_frontend_class;
				}
			}
			$yith_woocompare->obj = new YITH_Woocompare_Frontend();
		}
		remove_action( 'woocommerce_after_shop_loop_item', array( $yith_woocompare->obj, 'add_compare_link' ), 20 );
		function ftc_add_compare_button_to_product_list(){
			if( wp_is_mobile() )
				return;
			global $yith_woocompare, $product;
			
			echo '<a class="compare" href="'.$yith_woocompare->obj->add_product_url( $product->get_id() ).'" data-product_id="'.$product->get_id().'">'.get_option('yith_woocompare_button_text').'</a>';
		}
		add_action( 'woocommerce_after_shop_loop_item_title', 'ftc_add_compare_button_to_product_list', 10003 );
		add_action( 'woocommerce_after_shop_loop_item', 'ftc_add_compare_button_to_product_list', 70 );
		
		add_filter( 'option_yith_woocompare_button_text', 'ftc_compare_button_text_filter', 99 );
		function ftc_compare_button_text_filter( $button_text ){
			return '<i class="fa fa-retweet"></i><span class="ftc-note">'.esc_html($button_text).'</span>';
		}
	}
}
/* Compare - Add custom style */
if( isset($_GET['action']) && $_GET['action'] == 'yith-woocompare-view-table' ){
	add_action('wp_head', 'ftc_add_custom_style_compare_popup');
}
function ftc_add_custom_style_compare_popup(){
	global $smof_data;
	echo '<link rel="stylesheet" type="text/css" media="all" href="'.get_template_directory_uri().'/assets/css/default.css" />';
	echo '<link rel="stylesheet" type="text/css" media="all" href="'.get_template_directory_uri().'/style.css" />';
	echo '<link rel="stylesheet" type="text/css" media="all" href="'.get_template_directory_uri().'/assets/css/font-awesome.css" />';
	
	/* Add custom css for iframe */
	ftc_add_header_dynamic_css( true );
	
	/* Register google font for iframe */
	ftc_register_google_font( true );
}
/*** End General hook ***/

/*** Cart - Checkout hooks ***/
remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display', 10 );
add_action( 'woocommerce_after_cart', 'woocommerce_cross_sell_display', 10 );

add_action('woocommerce_proceed_to_checkout', 'ftc_cart_continue_shopping_button', 20);

/* Continue Shopping button */
function ftc_cart_continue_shopping_button(){
	echo '<a href="'.esc_url(wc_get_page_permalink('shop')).'" class="button button-secondary">'.esc_html__('Continue Shopping', 'dove').'</a>';
}
?>