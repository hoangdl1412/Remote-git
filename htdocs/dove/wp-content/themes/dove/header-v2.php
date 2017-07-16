<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage dove
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
       <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'dove' ); ?></a>

       <header id="masthead" class="site-header">

           <div class="header-ftc header-<?php echo esc_attr($smof_data['ftc_header_layout']); ?>">
            <div class="header-nav">
                <div class="container">
                    <div class="dropdown-button">
                        <span class="fa fa-cog"></span>
                    </div>
                    <div id="dropdown-list" class="drop">
                        <div class="nav-left">
                            <?php if( $smof_data['ftc_header_contact_information'] ):?>
                                <div class="info-desc"><?php echo do_shortcode(stripslashes($smof_data['ftc_header_contact_information'])); ?></div>
                            <?php endif; ?>
                        </div>

                        <div class="nav-center">
                            <ul class="group-social">
                                <li class="facebook">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                                </li>

                                <li class="twitter">
                                    <a href="https://twitter.com/home?status=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                                </li>   

                                <li class="google-plus">
                                    <a href="https://plus.google.com/share?url=<?php echo esc_url(get_permalink()); ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
                                </li>

                                <li class="pinterest">
                                    <?php $image_link  = wp_get_attachment_url( get_post_thumbnail_id() );?>
                                    <a href="https://pinterest.com/pin/create/button/?url=<?php echo esc_url(get_permalink()); ?>&amp;media=<?php echo esc_url($image_link);?>" target="_blank"><i class="fa fa-pinterest"></i></a>
                                </li>
                            </ul>
                        </div>

                        <div class="nav-right">

                            <?php if( $smof_data['ftc_header_currency'] ): ?>
                                <div class="header-currency"><?php ftc_woocommerce_multilingual_currency_switcher(); ?></div>
                            <?php endif; ?>

                            <?php if( $smof_data['ftc_header_language'] ): ?>
                                <div class="ftc-sb-language"><?php ftc_wpml_language_selector(); ?></div>
                            <?php endif; ?>

                            <?php if( $smof_data['ftc_enable_tiny_account'] ): ?>
                                <div class="ftc-sb-account"><?php echo ftc_tiny_account(); ?></div>
                            <?php endif; ?>


                        </div>
                    </div>
                </div>
            </div>
            <div class="header-content">
                <div class="container">
                    <div class="wrp-midle">

                        <div class="ftc-logo"><?php echo ftc_theme_logo(); ?></div>
                        
                        <?php if( $smof_data['ftc_enable_search'] ): ?>
                            <div class="ftc-search-product"><?php ftc_get_search_form_by_category(); ?></div>
                        <?php endif; ?>

                        <?php if( $smof_data['ftc_enable_tiny_shopping_cart'] ): ?>
                            <div class="ftc-shop-cart"><?php echo ftc_tiny_cart(); ?></div>
                        <?php endif; ?>

                        <?php if( $smof_data['ftc_middle_header_content'] ): ?>
                            <div class="custom_content"><?php echo do_shortcode(stripslashes($smof_data['ftc_middle_header_content'])); ?></div>
                        <?php endif; ?>
                    </div>

                </div>
                <div class="wrp-menu">

                    <?php if ( has_nav_menu( 'primary' ) ) : ?>
                        <div class="navigation-primary">
                            <div class="container">
                                <?php get_template_part( 'template-parts/navigation/navigation', 'primary' ); ?>

                            </div><!-- .navigation-top -->
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
        </div>
    </header><!-- #masthead -->

    <div class="site-content-contain">
      <div id="content" class="site-content">
