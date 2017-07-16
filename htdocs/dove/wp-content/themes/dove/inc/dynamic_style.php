<?php 
global $smof_data;
if( !isset($data) ){
	$data = $smof_data;
}

$data = ftc_array_atts(
 array(
    /* FONTS */
    'ftc_body_font_enable_google_font'					=> 1
    ,'ftc_body_font_family'								=> "Arial"
    ,'ftc_body_font_google'								=> "Ubuntu"

    ,'ftc_secondary_body_font_enable_google_font'		=> 1
    ,'ftc_secondary_body_font_family'					=> "Arial"
    ,'ftc_secondary_body_font_google'					=> "Ubuntu"

    /* COLORS */
    ,'ftc_primary_color'									=> "#23a997"

    ,'ftc_secondary_color'								=> "#444444"

    ,'ftc_body_background_color'								=> "#ffffff"

    ,'ftc_header_content_background_color'                               => "#3a3838"

    ,'ftc_menu_color_hover'                             => "#23a997"

    ,'ftc_menu_color_item'                             => "#000"

    /* RESPONSIVE */
    ,'ftc_responsive'									=> 1
    ,'ftc_layout_fullwidth'								=> 0
    ,'ftc_enable_rtl'									=> 0

    /* FONT SIZE */
    /* Body */
    ,'ftc_font_size_body'								=> 14
    ,'ftc_line_height_body'								=> 24

    /* Custom CSS */
    ,'ftc_custom_css_code'								=> ''
    ), $data);		

$data = of_filter_load_media_upload( $data ); /* Filter [site_url] */
$data = apply_filters('ftc_custom_style_data', $data);

extract( $data );

/* font-body */
if( $data['ftc_body_font_enable_google_font'] ){
	$ftc_body_font				= $data['ftc_body_font_google'];
}
else{
	$ftc_body_font				= $data['ftc_body_font_family'];
}

if( $data['ftc_secondary_body_font_enable_google_font'] ){
	$ftc_secondary_body_font		= $data['ftc_secondary_body_font_google'];
}
else{
	$ftc_secondary_body_font		= $data['ftc_secondary_body_font_family'];
}

?>	

/*
1. FONT FAMILY
2. GENERAL COLORS
*/


/* ============= 1. FONT FAMILY ============== */
<?php 
/* Custom Font */
if( $custom_font_woff && $custom_font_ttf && $custom_font_svg && $custom_font_eot ):
	?>
@font-face {
font-family: 'CustomFont';
src: url('<?php echo esc_url($custom_font_eot); ?>');
src:
url('<?php echo esc_url($custom_font_eot); ?>?#iefix') format('eot'),
url('<?php echo esc_url($custom_font_woff); ?>') format('woff'),
url('<?php echo esc_url($custom_font_ttf); ?>') format('truetype'),
url('<?php echo esc_url($custom_font_svg); ?>#CustomFont') format('svg');
font-weight: normal;
font-style: normal;
}
<?php
endif;
if( $custom_font_ttf && !($custom_font_woff && $custom_font_svg && $custom_font_eot) ):
	?>
@font-face {
font-family: 'CustomFont';
src:url('<?php echo esc_url($custom_font_ttf); ?>') format('truetype');
font-weight: normal;
font-style: normal;
}
<?php endif; ?>

html, 
body,
.widget-title.title_sub,.newletter_sub_input .button.button-secondary,
#mega_main_menu.primary ul li .mega_dropdown > li.sub-style > .item_link .link_text
{
  font-family: <?php echo esc_html($ftc_body_font) ?>;
}
#mega_main_menu.primary ul li .mega_dropdown > li.sub-style > ul.mega_dropdown,
#mega_main_menu li.multicolumn_dropdown > .mega_dropdown > li .mega_dropdown > li,
#mega_main_menu.primary ul li .mega_dropdown > li > .item_link .link_text,
.info-open,
.info-phone,
.ftc-sb-account .ftc-account > a,
.ftc-sb-account,
.my-wishlist-wrapper *,
.dropdown-button span > span,
body p,
.wishlist-empty,
div.product .social-sharing li a,
.ftc-search form,
.ftc-shop-cart,
.conditions-box,
.product-meta .title_sub,
.product-meta .price,
.test-content .content,
.test-content .byline,
.widget-container ul.product-categories ul.children li a,
.widget-container:not(.ftc-product-categories-widget):not(.widget_product_categories):not(.ftc-items-widget) :not(.widget-title),
.ftc-product-category ul.tabs li span.title,
.woocommerce-pagination,
.woocommerce-result-count,
.woocommerce .products.list .product h3.product-name > a,
.woocommerce-page .products.list .product h3.product-name > a,
.woocommerce .products.list .product .price .amount,
.woocommerce-page .products.list .product .price .amount,
.products.list .product-short-meta.list,
div.product .single_variation_wrap .amount,
div.product div[itemprop="offers"] .price .amount,
.orderby-title,
.blogs .excerpt,
.blog .entry-info .entry-summary .short-content,
.single-post .entry-info .entry-summary .short-content,
.single-post article .entry-content .info-category,
.single-post article .entry-content .info-category,
#comments .comments-title,
#comments .comment-metadata a,
.post-navigation .nav-previous,
.post-navigation .nav-next,
.woocommerce div.product .product_title,
.woocommerce-review-link,
.ftc_feature_info,
.woocommerce div.product p.stock,
.woocommerce div.product .summary div[itemprop="description"],
.woocommerce div.product p.price,
.woocommerce div.product .woocommerce-tabs .panel,
.woocommerce div.product form.cart .group_table td.label,
.woocommerce div.product form.cart .group_table td.price,
footer,
footer a,
.blogs article .image-eff:before,
.blogs article a.gallery .owl-item:after
{
  font-family: <?php echo esc_html($ftc_secondary_body_font) ?>;
}
body,
.site-footer,
.woocommerce div.product form.cart .group_table td.label,
.woocommerce .product .conditions-box span,
.product-meta .meta_info .button-in.wishlist a, .product-meta .meta_info .button-in.compare a,
ul.product_list_widget li > a, h3.product-name > a,
h3.product-name, 
.detail-nav-summary a .product-detail-nav span,
.info-company li i,
.social-icons .ftc-note:before,
.widget-container ul.product-categories ul.children li,
.tagcloud a,
.details_thumbnails .owl-nav > div:before,
div.product .summary .yith-wcwl-add-to-wishlist a:before,
.pp_woocommerce div.product .summary .compare:before,
.woocommerce div.product .summary .compare:before,
.woocommerce-page div.product .summary .compare:before,
.woocommerce #content div.product .summary .compare:before,
.woocommerce-page #content div.product .summary .compare:before,
.woocommerce div.product form.cart .variations label,
.woocommerce-page div.product form.cart .variations label,
.pp_woocommerce div.product form.cart .variations label,
.ftc-product-category ul.tabs li span.title,
blockquote,
.ftc-number h3.ftc_number_meta,
.woocommerce .widget_price_filter .price_slider_amount,
.wishlist-empty,
.woocommerce div.product form.cart .button,
.woocommerce table.wishlist_table,
.woocommerce div.product .summary .woocommerce-product-details__short-description p,
p
{
    font-size: <?php echo esc_html($ftc_font_size_body) ?>px;
}
/* ========== 2. GENERAL COLORS ========== */
/* ========== Primary color ========== */

#mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link *,
#mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link *, 
#mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-item > .item_link *,
#mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link *, 
.ftc-tiny-cart-wrapper .cart-number, 
#mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link:focus .link_text,
#mega_main_menu.primary > .menu_holder.sticky_container > .menu_inner > ul > li.current-menu-item > .item_link *,
#mega_main_menu.primary > .menu_holder.sticky_container > .menu_inner > ul > li > .item_link:hover *,
.ftc-shop-cart .cart-number,
#mega_main_menu.primary > .menu_holder.sticky_container > .menu_inner > ul > li > .item_link > .link_content > .link_text

{
    color: <?php echo esc_html($ftc_menu_color_item) ?>;
}

#mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link,
#mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link,
#mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link:hover,
#mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link:focus,
#mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-item > .item_link,
.ftc-shop-cart .cart-number
{
background-color:<?php echo esc_html($ftc_menu_color_hover) ?>;
}

.header-content,#mega_main_menu.primary > .menu_holder > .mmm_fullwidth_container,
#mega_main_menu.direction-horizontal > .menu_holder.sticky_container > .mmm_fullwidth_container,
.ftc-sub-product-categories .sub-product-categories,
.navigation-primary,
#mega_main_menu.primary > .menu_holder.sticky_container > .menu_inner
{
    background-color:<?php echo esc_html($ftc_header_content_background_color) ?>;
}

.header-currency:hover .ftc-currency > a,
.ftc-sb-language:hover li .ftc_lang,
.woocommerce a.remove:hover,
.ftc_shopping_form .ftc_cart_check > a.button.btn_cart:hover,
.my-wishlist-wrapper a:hover,
.ftc-sb-account .ftc-account > a:hover,
.header-currency .ftc-currency ul li:hover,
.dropdown-button span:hover,
body.wpb-js-composer .vc_general.vc_tta-tabs .vc_tta-tab.vc_active > a,
body.wpb-js-composer .vc_general.vc_tta-tabs .vc_tta-tab > a:hover,
body.wpb-js-composer .summary .vc_general.vc_tta-tabs .vc_tta-tab.active > a,
.blogs article h3.title_sub a,        
#mega_main_menu.primary .mega_dropdown > li > .item_link:hover *,
#mega_main_menu.primary .mega_dropdown > li.current-menu-item > .item_link *,       
.woocommerce .products .product .price,
.woocommerce div.product p.price,
.woocommerce div.product span.price,
.woocommerce .products .star-rating,
.woocommerce-page .products .star-rating,
.star-rating:before,
div.product div[itemprop="offers"] .price .amount,
div.product .single_variation_wrap .amount,
.pp_woocommerce .star-rating:before,
.woocommerce .star-rating:before,
.woocommerce-page .star-rating:before,
.woocommerce-product-rating .star-rating span,
ins .amount,
.ftc-meta-widget .price ins,
.ftc-meta-widget .star-rating,
.ul-style.circle li:before,
.woocommerce form .form-row .required,
.blogs .comment-count i,
.blog .comment-count i,
.single-post .comment-count i,
.single-post article .entry-content .info-category,
.single-post article .entry-content .info-category .cat-links a,
.single-post article .entry-content .info-category .vcard.author a,
.breadcrumb-title .breadcrumbs-container,
.breadcrumb-title .breadcrumbs-container a:hover,
.ftc-meta-widget.product-meta .meta_info a:hover,
.ftc-meta-widget.product-meta .meta_info .yith-wcwl-add-to-wishlist a:hover,
.grid_list_nav a.active,
.shortcode-icon .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-color-orange .vc_icon_element-icon,
.comment-reply-link .icon,
body table.compare-list tr.remove td > a .remove:hover:before,
a:hover,
a:focus,
.vc_toggle_title h4:hover,
.vc_toggle_title h4:before,
.blogs article h3.title_sub a:hover,
.ftc-tiny-account-wrapper::before, #ftc_language > ul > li::before, .header-currency .ftc-currency::before,
#mega_main_menu.primary ul li .mega_dropdown > li.sub-style > .item_link .link_text,
.ftc-sb-testimonial .test-content .name a,
.header_center strong,
.woocommerce-page nav.woocommerce-pagination ul li span.current,
.woocommerce ul.product_list_widget .price .amount,
h3.product-name > a:hover,
.ftc-shop-cart .price .amount,
#ftc_search_drop ul li .price .amount,
.woocommerce nav.woocommerce-pagination ul li a:hover, 
.woocommerce-page nav.woocommerce-pagination ul li a:hover,
.woocommerce nav.woocommerce-pagination ul li a.next:hover, 
.woocommerce-page nav.woocommerce-pagination ul li a.next:hover,
.woocommerce nav.woocommerce-pagination ul li a.prev:hover, .woocommerce-page nav.woocommerce-pagination ul li a.prev:hover,
.woocommerce div.product .woocommerce-tabs ul.tabs li.active a,
.woocommerce div.product .woocommerce-tabs ul.tabs li a:hover,
h4.product-name > a:hover,
.blogs .item h3.title_sub a:hover,
.woocommerce .products .star-rating.no-rating,
.woocommerce-page .products .star-rating.no-rating,
body .orderby .dropdown > li > a:hover,
body.wpb-js-composer .vc_general.vc_tta-tabs .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab.vc_active > a span, 
body.wpb-js-composer .vc_general.vc_tta-tabs .vc_tta-tabs-container .vc_tta-tabs-list .vc_tta-tab.vc_active > a:hover span,
body.wpb-js-composer .vc_general.vc_tta-tabs .vc_tta-tab.vc_active > a, 
body.wpb-js-composer .vc_general.vc_tta-tabs .vc_tta-tab > a:hover,
body .owl-nav > div.owl-prev:hover:before, body .owl-nav > div.owl-next:hover:before,
#colophon .copyright > p > a:hover, #colophon .info-phone a:hover, #colophon .info-address a:hover, #colophon .info-sitemap a:hover,
#colophon .wrp-list ul>li > a:hover,
.ftc-sb-testimonial .test-content .test_name a,
body .ftc-sb-testimonial .owl-nav > div.owl-prev:hover:before, body .ftc-sb-testimonial .owl-nav > div.owl-next:hover:before,
.blogs .item .entry-header > .title_sub a:hover,
.item .content-meta a.button-readmore,
.ftc-sb-blogs .content-meta .wrp-time-info .byline a:hover,
.woocommerce div.product .woocommerce-tabs ul.tabs li.active a:after,
body .owl-nav > div:hover:before,
body .rev_slider_wrapper .tparrows.tp-leftarrow:before,
body .rev_slider_wrapper .tparrows.tp-rightarrow:before,
.ftc-shop-cart:hover .ftc-shoppping-cart .ftc_cart:before,
.woocommerce div.product-type-grouped div.summary .group_table .price > span,
.woocommerce div.product-type-grouped div.summary .group_table .price> ins span,
.widget-container ul > li a:hover,
.ftc-shop-cart:hover .ftc-shoppping-cart .ftc_cart:before,
.item .content-meta a.button-readmore,
.ftc-feature .ftc_feature_content h3 a:hover,
body .vc_tta.vc_tta-accordion .vc_tta-panel.active .vc_tta-panel-title > a, body .vc_tta.vc_tta-accordion .vc_tta-panel .vc_tta-panel-title > a:hover, body div.pp_details a.pp_close:hover:before,
.woocommerce .widget_layered_nav ul li a:hover,
body .entry-content .entry-bottom .caftc-link .cat-links a, body .entry-content .entry-bottom .vcard.author a,
.pp_woocommerce div.product div.summary .price ins span, .pp_woocommerce div.product div.summary .price > span,
body .vc_tta.vc_tta-accordion .vc_tta-panel.active .vc_tta-controls-icon:before,
body #mega_main_menu.primary ul .mega_dropdown > li > .item_link:focus,
.entry-content .entry-info .title_sub:hover,
.entry-content .entry-info .entry-bottom .tag-links a,
.pp_woocommerce div.product.product-type-grouped div.summary  > form .group_table td.price ins span, .pp_woocommerce div.product.product-type-grouped div.summary  > form .group_table td.price > span,
.comment-meta a:hover,
.woocommerce .star-rating span,
.ftc_login .login:hover span,
.woocommerce-info::before
{
    color: <?php echo esc_html($ftc_primary_color) ?>;
}
.ftc_account_form .ftc_cart_check > a.button.checkout:hover,
.woocommerce .widget_price_filter .price_slider_amount .button:hover,
.woocommerce-page .widget_price_filter .price_slider_amount .button:hover,
body input.wpcf7-submit:hover,
.woocommerce .product .product-image .button-in-product > div a:hover,
.woocommerce .products.list .product .product-wrapper .product-meta .button-in a:not(.quickshop):hover,
.woocommerce .products.list .product .product-wrapper .product-meta .button-in.quickshop i:hover,
.counter-wrapper > div,
.tp-bullets .tp-bullet:after,
.woocommerce .product .conditions-box .onsale,
.woocommerce #respond input#submit:hover, 
.woocommerce a.button:hover,
.woocommerce button.button:hover, 
.woocommerce input.button:hover,
.woocommerce .products .product .product-wrapper .product-image .button-in:hover a:hover,
.vc_color-orange.vc_message_box-solid,
.woocommerce nav.woocommerce-pagination ul li span.current,
.woocommerce-page nav.woocommerce-pagination ul li span.current,
.woocommerce nav.woocommerce-pagination ul li a.next:hover,
.woocommerce-page nav.woocommerce-pagination ul li a.next:hover,
.woocommerce nav.woocommerce-pagination ul li a.prev:hover,
.woocommerce-page nav.woocommerce-pagination ul li a.prev:hover,
.woocommerce nav.woocommerce-pagination ul li a:hover,
.woocommerce-page nav.woocommerce-pagination ul li a:hover,
.woocommerce .form-row input.button:hover,
.load-more-wrapper .button:hover,
body .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab:hover,
body .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab.vc_active,
.woocommerce div.product form.cart .button:hover,
.woocommerce div.product div.summary p.cart a:hover,
div.product .summary .yith-wcwl-add-to-wishlist a:hover,
.woocommerce #content div.product .summary .compare:hover,
.woocommerce div.product .woocommerce-tabs ul.tabs li.active,
.tagcloud a:hover,
.woocommerce .wc-proceed-to-checkout a.button.alt:hover,
.woocommerce .wc-proceed-to-checkout a.button:hover,
.woocommerce-cart table.cart input.button:hover,
.owl-dots > .owl-dot span:hover,
.owl-dots > .owl-dot.active span,
footer .style-3 .newletter_sub .button.button-secondary.transparent,
.woocommerce .widget_price_filter .ui-slider .ui-slider-range,
body div.pp_details a.pp_close:hover:before,
.vc_toggle_title h4:after,
body.error404 .page-header a,
body .button.button-secondary,
.pp_woocommerce div.product form.cart .button,
.shortcode-icon .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-orange.vc_icon_element-background,
.style1 .ftc-countdown .counter-wrapper > div,
.style2 .ftc-countdown .counter-wrapper > div,
.style3 .ftc-countdown .counter-wrapper > div,
#cboxClose:hover,
body > h1,
table.compare-list .add-to-cart td a:hover,
.vc_progress_bar.wpb_content_element > .vc_general.vc_single_bar > .vc_bar,
div.product.vertical-thumbnail .details-img .owl-controls div.owl-prev:hover,
div.product.vertical-thumbnail .details-img .owl-controls div.owl-next:hover,
ul > .page-numbers.current,
ul > .page-numbers:hover,
article a.button-readmore:hover,
.tp-rightarrow,.tp-leftarrow,
body.wpb-js-composer .vc_general.vc_tta-tabs.default_no_border .vc_tta-tab.vc_active > a, body.wpb-js-composer .vc_general.vc_tta-tabs.default_no_border .vc_tta-tab > a:hover,
.vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-size-md,
.bannerfree,
.ftc-sb-button a.ftc-button-1,
body > h1:first-child,
table.compare-list .add-to-cart td a:hover,
.ftc-quickshop-wrapper .cart a.single_add_to_cart_button,
.woocommerce .products .product .product-wrapper .product-image .button-in-product a:hover,
#to-top a:hover,
.woocommerce .product .product-wrapper .product-meta .meta_info a:hover, 
.woocommerce .product-wrapper .product-meta .meta_info > .compare:hover i, .woocommerce .product-wrapper .product-meta .meta_info >.yith-wcwl-add-to-wishlist > a:hover, 
.woocommerce .product-wrapper .product-meta .meta_info >.yith-wcwl-add-to-wishlist  a:hover i,
.ftc-sb-testimonial .test-content .test_meta:after,
.ftc-feature .feature-content > a:before,
div.loading-more .button,
.widget-container.widget_categories .widget-title-wrapper .widget-title,
.widget-container.ftc-blogs-widget .widget-title-wrapper .widget-title,
.widget-container.widget_tag_cloud .widget-title-wrapper .widget-title,
.widget-container.ftc-recent-comments-widget .widget-title-wrapper .widget-title,
.woocommerce div.product form.cart .single_add_to_cart_button,
.woocommerce #review_form #respond .form-submit input:hover,
.ftc-product-categories-widget .widget-title-wrapper, .widget-container.widget_text .widget-title-wrapper,
.woocommerce #content nav.woocommerce-pagination ul.page-numbers li span.current, 
.woocommerce #content nav.woocommerce-pagination ul.page-numbers > li a:hover,
.woocommerce #content nav.woocommerce-pagination ul.page-numbers li a.next:hover, 
.woocommerce #content nav.woocommerce-pagination ul.page-numbers li a.prev:hover, 
.woocommerce #content nav.woocommerce-pagination ul.page-numbers li a.next:hover:before, 
.woocommerce #content nav.woocommerce-pagination ul.page-numbers li a.prev:hover:before,
.ftc-feature.feature-service-top .ftc_feature_content,
.text_service > div >a,
.st-row-feature .ftc-feature .feature-content > a:before,
button:hover,
button:focus,
input[type="button"]:hover,
input[type="button"]:focus,
input[type="submit"]:hover,
input[type="submit"]:focus 
{
    background-color: <?php echo esc_html($ftc_primary_color) ?>;
}

.ftc_shopping_form .ftc_cart_check > a.button.btn_cart:hover,
.ftc_account_form .ftc_cart_check > a.button.checkout:hover,
.woocommerce .widget_price_filter .price_slider_amount .button:hover,
.woocommerce-page .widget_price_filter .price_slider_amount .button:hover,
body input.wpcf7-submit:hover,
.counter-wrapper > div,
.woocommerce .products .product:hover .product-wrapper,
.woocommerce-page .products .product:hover .product-wrapper,
#right-sidebar .product_list_widget:hover li,
.ftc-meta-widget.product-meta .meta_info a:hover,
.ftc-meta-widget.product-meta .meta_info .yith-wcwl-add-to-wishlist a:hover,
.woocommerce .products .product:hover .product-wrapper,
.woocommerce-page .products .product:hover .product-wrapper,
.ftc-product-category ul.tabs li:hover,
.ftc-product-category ul.tabs li.current,
body div.pp_details a.pp_close:hover:before,
.wpcf7 p input:focus,
.wpcf7 p textarea:focus,
.woocommerce form .form-row .input-text:focus,
body .button.button-secondary,
.ftc-quickshop-wrapper .owl-nav > div.owl-next:hover,
.ftc-quickshop-wrapper .owl-nav > div.owl-prev:hover,
#cboxClose:hover,
body .owl-nav > div.owl-next:hover,
body .owl-nav > div.owl-prev:hover,
body.wpb-js-composer .vc_general.vc_tta-tabs .vc_tta-tabs-container .vc_tta-tabs-list::after, .ftc-product-slider .header-title .bg-heading::after, .site-content .related.products h2 .bg-heading::after, .vc_separator.vc_separator_align_center h4::after, .ftc-heading h1::after, .related-posts .bg-heading::after,
.vc_tta-container > h2::after, .ftc-items-widget .widgettitle::after,
.site-content .related.products h2::after, .site-content .related.products h2 .bg-heading::after, .ftc-heading h1::after, #right-sidebar .widget-title::before,
.ftc-slider .header-title .title_sub::after,
#to-top a,
.ftc-sb-testimonial .test-content .test_avatar,
.ftc-feature .feature-content > a:after,
.ftc-feature .feature-content:before,
.widget.newletter_sub form .newletter_sub_input input[type="text"]:focus,
.ftc-feature.feature-service .feature-content:before,
.single-product .post-password-form label input:focus,
.st-row-feature  .ftc-feature .feature-content:before,
.st-row-feature .ftc-feature .feature-content > a:after
{
    border-color: <?php echo esc_html($ftc_primary_color) ?>;
}
#ftc_language ul ul,
.header-currency ul,
.ftc-tiny-account-wrapper .ftc_shopping_form,
.ftc-shop-cart .ftc_shopping_form,
#mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current_page_item,
#mega_main_menu > .menu_holder > .menu_inner > ul > li:hover,
#mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link,
#mega_main_menu > .menu_holder > .menu_inner > ul > li.current_page_item > a:first-child:after,
#mega_main_menu > .menu_holder > .menu_inner > ul > li > a:first-child:hover:before,
#mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link:before,
#mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current_page_item > .item_link:before,
#mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .mega_dropdown,
.woocommerce .product .conditions-box .onsale:before,
.woocommerce .product .conditions-box .featured:before,
.woocommerce .product .conditions-box .out-of-stock:before,
body.wpb-js-composer .st-row-tab-category .vc_general.vc_tta-tabs .vc_tta-tab.active > a,
.wpb-js-composer .vc_tta-tabs:not([class*=vc_tta-gap]):not(.vc_tta-o-no-fill).vc_tta-tabs-position-top .vc_tta-tab.vc_active>a::after, body.wpb-js-composer .vc_general.vc_tta-tabs .vc_tta-tab > a:hover:after,
body.wpb-js-composer .vc_tta-tabs:not([class*=vc_tta-gap]):not(.vc_tta-o-no-fill).vc_tta-tabs-position-top .vc_tta-tab.vc_active>a::after, 
body.wpb-js-composer .vc_general.vc_tta-tabs .vc_tta-tab > a:hover:after,
body.wpb-js-composer .st-row-tab-category .vc_general.vc_tta-tabs .vc_tta-tab > a:hover,
body.wpb-js-composer .vc_tta-tabs:not([class*=vc_tta-gap]):not(.vc_tta-o-no-fill).vc_tta-tabs-position-top .vc_tta-tab.vc_active>a,
.woocommerce-info
{
    border-top-color: <?php echo esc_html($ftc_primary_color) ?>;
}
body.wpb-js-composer .st-row-tab-category .vc_general.vc_tta-tabs .vc_tta-tab.active> a,
body.wpb-js-composer .vc_tta-tabs:not([class*=vc_tta-gap]):not(.vc_tta-o-no-fill).vc_tta-tabs-position-top .vc_tta-tab.vc_active>a,
body.wpb-js-composer .vc_tta-tabs:not([class*=vc_tta-gap]):not(.vc_tta-o-no-fill).vc_tta-tabs-position-top .vc_tta-tab.vc_active>a::before, body.wpb-js-composer .vc_general.vc_tta-tabs .vc_tta-tab > a:hover:before,
body.wpb-js-composer .vc_tta-tabs:not([class*=vc_tta-gap]):not(.vc_tta-o-no-fill).vc_tta-tabs-position-top body.vc_tta-tab.vc_active>a::before, 
body.wpb-js-composer .vc_general.vc_tta-tabs .vc_tta-tab > a:hover:before,
body.wpb-js-composer .st-row-tab-category .vc_general.vc_tta-tabs .vc_tta-tab > a:hover,
.ftc-search-product .ftc_search_ajax input[type="text"]:focus
{
    border-bottom-color: <?php echo esc_html($ftc_primary_color) ?>;
}
.woocommerce .products.list .product:hover .product-wrapper .product-meta:after,
.woocommerce-page .products.list .product:hover .product-wrapper .product-meta:after,
body.wpb-js-composer .vc_tta-tabs:not([class*=vc_tta-gap]):not(.vc_tta-o-no-fill).vc_tta-tabs-position-top .vc_tta-tab.vc_active>a::before, body.wpb-js-composer .vc_general.vc_tta-tabs .vc_tta-tab > a:hover:before,
body.wpb-js-composer  .vc_tta-tabs:not([class*=vc_tta-gap]):not(.vc_tta-o-no-fill).vc_tta-tabs-position-top .vc_tta-tab.vc_active>a::before, body.wpb-js-composer .vc_general.vc_tta-tabs .vc_tta-tab > a:hover:before
{
    border-left-color: <?php echo esc_html($ftc_primary_color) ?>;
}
body.wpb-js-composer .vc_tta-tabs:not([class*=vc_tta-gap]):not(.vc_tta-o-no-fill).vc_tta-tabs-position-top .vc_tta-tab.vc_active>a::after, body.wpb-js-composer .vc_general.vc_tta-tabs .vc_tta-tab > a:hover:after{
    border-right-color: <?php echo esc_html($ftc_primary_color) ?>;
}
footer#colophon .ftc-footer .widget-title:before,
.woocommerce div.product .woocommerce-tabs ul.tabs,
#customer_login h2 span:before,
.cart_totals  h2 span:before
{
    border-color: <?php echo esc_html($ftc_primary_color) ?>;
}

/* ========== Secondary color ========== */
body,
.ftc-shoppping-cart a.ftc_cart:hover,

.woocommerce a.remove,
body.wpb-js-composer .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab,
.woocommerce .product .product-image .button-in-product > div a,
.vc_progress_bar .vc_single_bar .vc_label,
.vc_btn3.vc_btn3-size-sm.vc_btn3-style-outline,
.vc_btn3.vc_btn3-size-sm.vc_btn3-style-outline-custom,
.vc_btn3.vc_btn3-size-md.vc_btn3-style-outline,
.vc_btn3.vc_btn3-size-md.vc_btn3-style-outline-custom,
.vc_btn3.vc_btn3-size-lg.vc_btn3-style-outline,
.vc_btn3.vc_btn3-size-lg.vc_btn3-style-outline-custom,
.style1 .ftc-countdown .counter-wrapper > div .countdown-meta,
.style2 .ftc-countdown .counter-wrapper > div .countdown-meta,
.style3 .ftc-countdown .counter-wrapper > div .countdown-meta,
.style4 .ftc-countdown .counter-wrapper > div .number-wrapper .number,
.style4 .ftc-countdown .counter-wrapper > div .countdown-meta,
body table.compare-list tr.remove td > a .remove:before,
.woocommerce-page .products.list .product h3.product-name a
{
    color: <?php echo esc_html($ftc_secondary_color) ?>;
}
.ftc_account_form .ftc_cart_check > a.button.checkout,
.pp_woocommerce div.product form.cart .button:hover,
.info-company li i,
body .button.button-secondary:hover,
div.pp_default .pp_close, body div.pp_woocommerce.pp_pic_holder .pp_close,
body div.ftc-product-video.pp_pic_holder .pp_close,
body .ftc-lightbox.pp_pic_holder a.pp_close,
#cboxClose, .ftc-quickshop-wrapper .cart a.single_add_to_cart_button:hover
{
    background-color: <?php echo esc_html($ftc_secondary_color) ?>;
}
.ftc_account_form .ftc_cart_check > a.button.checkout,
.pp_woocommerce div.product form.cart .button:hover,
body .button.button-secondary:hover,
#cboxClose
{
    border-color: <?php echo esc_html($ftc_secondary_color) ?>;
}

/* ========== Body Background color ========== */
body
{
    background-color: <?php echo esc_html($ftc_body_background_color) ?>;
}
/* Custom CSS */
<?php 
if( !empty($ftc_custom_css_code) ){
  echo html_entity_decode( trim( $ftc_custom_css_code ) );
}
?>