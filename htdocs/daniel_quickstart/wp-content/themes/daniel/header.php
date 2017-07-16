<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Daniel
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<?php global $smof_data; ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php 
ftc_theme_favicon();
wp_head(); 
?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_attr( 'Skip to content', 'daniel' ); ?></a>

	<header id="masthead" class="site-header">

                <div class="header-ftc header-<?php echo esc_attr($smof_data['ftc_header_layout']); ?>">
                    <?php if( $smof_data['ftc_middle_header_content'] ): ?>
                    <div class="custom_content"><?php echo do_shortcode(stripslashes($smof_data['ftc_middle_header_content'])); ?></div>
                    <?php endif; ?>
                    
                    <div class="header-content">
                            <div class="container">
                                    <div class="logo-wrapper"><?php echo ftc_theme_logo(); ?></div>
                                    <?php if ( has_nav_menu( 'primary' ) ) : ?>
                                    <div class="navigation-primary">
                                                    <?php get_template_part( 'template-parts/navigation/navigation', 'primary' ); ?>
                                    </div><!-- .navigation-top -->
                                    <?php endif; ?>
                                    <div class="header-top-right">
                                        <?php if( $smof_data['ftc_header_language'] ): ?>
                                        <div class="ftc-sb-language"><?php ftc_wpml_language_selector(); ?></div>
                                        <?php endif; ?>

                                        <?php if( $smof_data['ftc_header_currency'] ): ?>
                                        <div class="header-currency"><?php ftc_woocommerce_multilingual_currency_switcher(); ?></div>
                                        <?php endif; ?>

                                        <?php if( $smof_data['ftc_enable_tiny_shopping_cart'] ): ?>
                                        <div class="ftc-shop-cart"><?php echo ftc_tiny_cart(); ?></div>
                                        <?php endif; ?>
                                        
                                        <?php if( $smof_data['ftc_enable_search'] ): ?>
                                        <div class="ftc-search-product"><?php ftc_get_search_form_by_category(); ?></div>
                                        <?php endif; ?>
                                        
                                        <?php if( $smof_data['ftc_enable_tiny_account'] ): ?>
                                        <div class="ftc-sb-account"><?php echo ftc_tiny_account(); ?></div>
                                        <?php endif; ?>
                                    </div>
                            </div>
                    </div>
                </div>
	</header><!-- #masthead -->

	<div class="site-content-contain">
		<div id="content" class="site-content">
