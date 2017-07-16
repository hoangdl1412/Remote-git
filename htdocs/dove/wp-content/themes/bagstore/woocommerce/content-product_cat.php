<?php
/**
 * The template for displaying product category thumbnails within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product_cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<div <?php wc_product_cat_class('category-slider product', $category); ?>>
    
	<?php do_action( 'woocommerce_before_subcategory', $category ); ?>
   
<div class="category-image">
	<?php
		/**
		 * woocommerce_before_subcategory_title hook
		 *
		 * @hooked woocommerce_subcategory_thumbnail - 10
		 */
		do_action( 'woocommerce_before_subcategory_title', $category );
	?>
	 </div>
	<div class="product-meta">
		<?php if( !isset($show_title) || (isset($show_title) && $show_title) ): ?>
            <h4 class="title_sub"><?php echo esc_html($category->name); ?></h4>
		
		<?php endif; ?>
		<?php 
			if ( $category->count > 0 ){
				echo apply_filters( 'woocommerce_subcategory_count_html', '<span class="count-product-category">' . sprintf( _n( '%s Product', '%s Products', $category->count, 'bagstore' ), $category->count ) . '</span>', $category );
			}
		?>
		<a href="<?php echo get_term_link( $category->slug, 'product_cat' ); ?>" class="category-button button"><?php esc_html_e('Shop Now', 'bagstore'); ?></a>
		                       
	</div>
	
	<?php
		/**
		 * woocommerce_after_subcategory_title hook
		 */
		do_action( 'woocommerce_after_subcategory_title', $category );
	?>

	<?php do_action( 'woocommerce_after_subcategory', $category ); ?>

</div>