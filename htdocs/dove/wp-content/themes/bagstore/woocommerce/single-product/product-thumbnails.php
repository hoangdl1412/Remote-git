<?php
/**
 * Single Product Thumbnails
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/details_thumbnails.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.2
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $post, $product, $smof_data;

$attachment_ids = $product->get_gallery_image_ids();

$vertical_thumbnail = isset($smof_data['vela_prod_thumbnails_style']) && $smof_data['vela_prod_thumbnails_style'] == 'vertical';

if ( $attachment_ids ) {
	if( is_array($attachment_ids) && has_post_thumbnail() && $smof_data['vela_prod_cloudzoom'] == 1 ){
		array_unshift($attachment_ids, get_post_thumbnail_id());
	}
	$count_product = count($attachment_ids);
	?>
	<div class="thumbnails vela-slider <?php echo ( $count_product > 1 )?'loading':''; ?>">
            <div class="details_thumbnails <?php if(isset($smof_data['vela_prod_thumbnails_style']) && $smof_data['vela_prod_thumbnails_style'] != 'vertical'): ?>owl-carousel<?php endif; ?>">
		<?php
		$loop = 0;
		$columns = apply_filters( 'woocommerce_product_thumbnails_columns', 3 );

		foreach ( $attachment_ids as $attachment_id ) {

			$classes = array( 'zoom' );

			if ( $loop === 0 || $loop % $columns === 0 ) {
				$classes[] = 'first';
			}

			if ( ( $loop + 1 ) % $columns === 0 ) {
				$classes[] = 'last';
			}
			$image_class 	= esc_attr( implode( ' ', $classes ) );
			$props       	= wc_get_product_attachment_props( $attachment_id, $post );
			$image_link 	= $props['url'];

			if ( ! $image_link ){
				continue;
			}
			
			if( $smof_data['vela_prod_cloudzoom'] == 1 ){
				$image_title 	= esc_attr( $product->get_title() );
				$thumb_size 	= apply_filters( 'single_product_large_thumbnail_size', 'shop_single' );
				$image       	= wp_get_attachment_image( $attachment_id, apply_filters( 'single_product_small_thumbnail_size', 'shop_thumbnail' ), 0, array( 'alt' => $image_title, 'title' => $image_title ) );
				$image_src   	= wp_get_attachment_image_src( $attachment_id, $thumb_size );
				$image_class 	.= ' cloud-zoom-gallery ';
				echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', sprintf( '<a href="%s" class="%s" title="%s"  data-rel="useZoom: \'product_zoom\', smallImage: \'%s\'">%s</a>', $image_link, $image_class, $image_title, $image_src[0], $image ), $attachment_id, $post->ID, $image_class );
			}
			else{
				$image       = wp_get_attachment_image( $attachment_id, apply_filters( 'single_product_small_thumbnail_size', 'shop_thumbnail' ), 0, $props );
				$image_title = esc_attr( $props['caption'] );
				echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', sprintf( '<a href="%s" class="%s" title="%s" data-rel="prettyPhoto[product-gallery]">%s</a>', $image_link, $image_class, $image_title, $image ), $attachment_id, $post->ID, $image_class );
			}

			$loop++;
		}
	?>
		</div>
		
		<?php if( $vertical_thumbnail ): ?>
		<div class="owl-controls">
			<div class="owl-nav">
				<div class="owl-prev"></div>
				<div class="owl-next"></div>
			</div>
		</div>
		<?php endif; ?>
		
	</div>
	<?php
}