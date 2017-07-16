<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage bagstore
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<?php global $smof_data, $vela_page_datas;; ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php 
    vela_theme_favicon();
    wp_head(); 
    ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
       <a class="skip-link screen-reader-text" href="#content"></a>
       <!-- Page Slider -->
       
			<?php if( is_page() && isset($vela_page_datas) ): ?>
				<?php if( $vela_page_datas['vela_page_slider'] && $vela_page_datas['vela_page_slider_position'] == 'before_header' ): ?>
					<div class="vela-rev-slider">
							<?php vela_show_page_slider(); ?>
						</div>
				<?php endif; ?>
			<?php endif; ?>
            
       <header id="masthead" class="site-header">

        <div class="header-vela header-<?php echo esc_attr($smof_data['vela_header_layout']); ?>">
            <div class="header-nav">
                <div class="container">
                    <div class="nav-left">
                    
                        <?php if( $smof_data['vela_header_contact_information'] ):?>
                            <div class="info-desc"><?php echo do_shortcode(stripslashes($smof_data['vela_header_contact_information'])); ?></div>
                        <?php endif; ?>
                    </div>
                    <span class="header_center">Welcome to <strong>BagStore</strong> </span>
                    <div class="nav-right">
                        
                        <?php if( $smof_data['vela_enable_tiny_account'] ): ?>
                            <div class="vela-sb-account"><?php echo vela_tiny_account(); ?></div>
                        <?php endif; ?>

                        <?php if( $smof_data['vela_header_language'] ): ?>
                            <div class="vela-sb-language"><?php vela_wpml_language_selector(); ?></div>
                        <?php endif; ?>
                        
                        <?php if( $smof_data['vela_header_currency'] ): ?>
                            <div class="header-currency"><?php vela_woocommerce_multilingual_currency_switcher(); ?></div>
                        <?php endif; ?>


                    </div>
                </div>
            </div>
            <div class="header-content">
                <div class="container">
                <div class="vela-logo"><?php echo vela_theme_logo(); ?></div>

                <?php if ( has_nav_menu( 'primary' ) ) : ?>
                <div class="navigation-primary">
                    
                        <?php get_template_part( 'template-parts/navigation/navigation', 'primary' ); ?>
                    
                </div><!-- .navigation-top -->
            <?php endif; ?>

                     <?php if( $smof_data['vela_enable_tiny_shopping_cart'] ): ?>
                        <div class="vela-shop-cart"><?php echo vela_tiny_cart(); ?></div>
                    <?php endif; ?>

                    <?php if( $smof_data['vela_enable_search'] ): ?>
                        <div class="vela-search-product"><?php vela_get_search_form_by_category(); ?></div>
                    <?php endif; ?>



                    <?php if( $smof_data['vela_middle_header_content'] ): ?>
                        <div class="custom_content"><?php echo do_shortcode(stripslashes($smof_data['vela_middle_header_content'])); ?></div>
                    <?php endif; ?>

                   
                </div>
            </div>
            
        </div>
    </header><!-- #masthead -->

			<?php if( is_page() && isset($vela_page_datas) ): ?>
				<?php if( $vela_page_datas['vela_page_slider'] && $vela_page_datas['vela_page_slider_position'] == 'before_main_content' ): ?>
					 <!-- Page Slider -->
 <div class="vela-rev-slider">
							<?php vela_show_page_slider(); ?>
						    </div>
				<?php endif; ?>
			<?php endif; ?>
        
    <div class="site-content-contain">
      <div id="content" class="site-content">
