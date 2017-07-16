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
				,'ftc_body_font_google'								=> "Dosis"
				
				,'ftc_secondary_body_font_enable_google_font'		=> 1
				,'ftc_secondary_body_font_family'					=> "Arial"
				,'ftc_secondary_body_font_google'					=> "Raleway"
				
				/* COLORS */
				,'ftc_primary_color'									=> "#f69e22"

				,'ftc_secondary_color'								=> "#444444"
				
                                ,'ftc_body_background_color'								=> "#ffffff"
				/* RESPONSIVE */
				,'ftc_responsive'									=> 1
				,'ftc_layout_fullwidth'								=> 0
				,'ftc_enable_rtl'									=> 0
				
				/* FONT SIZE */
				/* Body */
				,'ftc_font_size_body'								=> 12
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

    body{
        line-height: <?php echo esc_html($ftc_line_height_body)."px"?>;
    }
	
        html, 
	body,.widget-title.heading-title,
        .widget-title.product_title,.newletter_sub_input .button.button-secondary,
        #mega_main_menu.primary ul li .mega_dropdown > li.sub-style > .item_link .link_text
	{
		font-family: <?php echo esc_html($ftc_body_font) ?>;
	}
	
	#mega_main_menu.primary ul li .mega_dropdown > li.sub-style > ul.mega_dropdown,
        #mega_main_menu li.multicolumn_dropdown > .mega_dropdown > li .mega_dropdown > li,
        #mega_main_menu.primary ul li .mega_dropdown > li > .item_link .link_text,
        .info-open,
        .info-phone,
        .ftc-sb-account .ftc_login > a,
        .ftc-sb-account,
        .ftc-my-wishlist *,
        .dropdown-button span > span,
        body p,
        .wishlist-empty,
        div.product .social-sharing li a,
        .ftc-search form,
        .ftc-shop-cart,
        .conditions-box,
         .item-description .product_title,
         .item-description .price,
        .testimonial-content .info,
        .testimonial-content .byline,
        .widget-container ul.product-categories ul.children li a,
        .widget-container:not(.ftc-product-categories-widget):not(.widget_product_categories):not(.ftc-items-widget) :not(.widget-title),
        .ftc-products-category ul.tabs li span.title,
        .woocommerce-pagination,
        .woocommerce-result-count,
        .woocommerce .products.list .product h3.product-name > a,
        .woocommerce-page .products.list .product h3.product-name > a,
        .woocommerce .products.list .product .price .amount,
        .woocommerce-page .products.list .product .price .amount,
        .products.list .short-description.list,
        div.product .single_variation_wrap .amount,
        div.product div[itemprop="offers"] .price .amount,
        .orderby-title,
        .blogs .post-info,
        .blog .entry-info .entry-summary .short-content,
        .single-post .entry-info .entry-summary .short-content,
        .single-post article .post-info .info-category,
        .single-post article .post-info .info-category,
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
         .item-description .meta_info .yith-wcwl-add-to-wishlist a,  .item-description .meta_info .compare,
        .info-company li i,
        .social-icons .ftc-tooltip:before,
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
        blockquote,
        .ftc-number h3.ftc_number_meta,
        .woocommerce .widget_price_filter .price_slider_amount,
        .wishlist-empty,
        .woocommerce div.product form.cart .button,
        .woocommerce table.wishlist_table
        {
                font-size: <?php echo esc_html($ftc_font_size_body) ?>px;
        }
	/* ========== 2. GENERAL COLORS ========== */
        /* ========== Primary color ========== */
	.header-currency:hover .ftc-currency > a,
        .ftc-sb-language:hover li .ftc_lang,
        .woocommerce a.remove:hover,
        .dropdown-container .ftc_cart_check > a.button.view-cart:hover,
        .ftc-my-wishlist a:hover,
        .ftc-sb-account .ftc_login > a:hover,
        .header-currency .ftc-currency ul li:hover,
        .dropdown-button span:hover,
        body.wpb-js-composer .vc_general.vc_tta-tabs .vc_tta-tab.vc_active > a,
        body.wpb-js-composer .vc_general.vc_tta-tabs .vc_tta-tab > a:hover,
        #mega_main_menu.primary > .menu_holder.sticky_container > .menu_inner > ul > li > .item_link:hover *,
        #mega_main_menu.primary > .menu_holder.sticky_container > .menu_inner > ul > li.current-menu-item > .item_link *,
        #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link,
        #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link *,
        #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link *,
        #mega_main_menu.primary .mega_dropdown > li > .item_link:hover *,
        #mega_main_menu.primary .mega_dropdown > li.current-menu-item > .item_link *,
        #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-item > .item_link *,
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
        .single-post article .post-info .info-category,
        .single-post article .post-info .info-category .cat-links a,
        .single-post article .post-info .info-category .vcard.author a,
        .ftc-breadcrumb-title .ftc-breadcrumbs-content,
        .ftc-breadcrumb-title .ftc-breadcrumbs-content span.current,
        .ftc-breadcrumb-title .ftc-breadcrumbs-content a:hover,
        .woocommerce .product   .item-description .meta_info a:hover,
        .woocommerce-page .product   .item-description .meta_info a:hover,
        .ftc-meta-widget.item-description .meta_info a:hover,
        .ftc-meta-widget.item-description .meta_info .yith-wcwl-add-to-wishlist a:hover,
        .grid_list_nav a.active,
        .ftc-quickshop-wrapper .owl-nav > div.owl-next:hover,
        .ftc-quickshop-wrapper .owl-nav > div.owl-prev:hover,
        .shortcode-icon .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-color-orange .vc_icon_element-icon,
        .comment-reply-link .icon,
        body table.compare-list tr.remove td > a .remove:hover:before,
        a:hover,
        a:focus,
        .vc_toggle_title h4:hover,
        .vc_toggle_title h4:before,
        .blogs article h3.product_title a:hover,
        article .post-info a:hover,
        article .comment-content a:hover,
        .main-navigation li li.focus > a,
        .owl-dot.active,
        .brands.owl-prev:hover:before,
        #blog-later h4:after,
        #product-later h4:after,
        .ftc_newletter_sub .newletter_sub h2:after,
	.main-navigation li li:focus > a,
	.main-navigation li li:hover > a,
	.main-navigation li li a:hover,
	.main-navigation li li a:focus,
	.main-navigation li li.current_page_item a:hover,
	.main-navigation li li.current-menu-item a:hover,
	.main-navigation li li.current_page_item a:focus,
	.main-navigation li li.current-menu-item a:focus,.woocommerce-account .woocommerce-MyAccount-navigation li.is-active a, article .post-info .cat-links a,article .post-info .tags-link a,
    .vcard.author a,article .entry-header .caftc-link .cat-links a,.woocommerce-page .products.list .product h3.product-name a:hover,
    .woocommerce .products.list .product h3.product-name a:hover,.tparrows:hover:before,.vc_tta-tab::before{
                color: <?php echo esc_html($ftc_primary_color) ?>;
        }
        .dropdown-container .ftc_cart_check > a.button.checkout:hover,
        .woocommerce .widget_price_filter .price_slider_amount .button:hover,
        .woocommerce-page .widget_price_filter .price_slider_amount .button:hover,
        body input.wpcf7-submit:hover,
        .woocommerce .products.list .product   .item-description .add-to-cart a:hover,
        .woocommerce .products.list .product   .item-description .button-in a:hover,
        .woocommerce .products.list .product   .item-description .meta_info  a:not(.quickview):hover,
        .woocommerce .products.list .product   .item-description .quickview i:hover,
        .counter-wrapper > div,
        .tp-bullets .tp-bullet:after,
        .woocommerce .product .conditions-box .onsale,
        .woocommerce #respond input#submit:hover, 
        .woocommerce a.button:hover,
        .woocommerce button.button:hover, 
        .woocommerce input.button:hover,
        .woocommerce .products .product  .item-image .button-in:hover a:hover,
        .woocommerce .products .product  .item-image a:hover,
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
        div.product .social-sharing li a:hover,
        .woocommerce div.product .woocommerce-tabs ul.tabs li.active,
        .tagcloud a:hover,
        .woocommerce .wc-proceed-to-checkout a.button.alt:hover,
        .woocommerce .wc-proceed-to-checkout a.button:hover,
        .woocommerce-cart table.cart input.button:hover,
        .owl-dots > .owl-dot span:hover,
        .owl-dots > .owl-dot.active span,
        footer .style-3 .newletter_sub .button.button-secondary.transparent,
        .woocommerce .widget_price_filter .ui-slider .ui-slider-range,
        body .vc_tta.vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-panel-title > a,
        body .vc_tta.vc_tta-accordion .vc_tta-panel .vc_tta-panel-title > a:hover,
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
        article a.button-readmore:hover,.text_service a,.vc_toggle_title h4:before,.vc_toggle_active .vc_toggle_title h4:before,
        .post-item.sticky .post-info .entry-info .sticky-post,
        .woocommerce .products.list .product   .item-description .compare.added:hover
        {
                background-color: <?php echo esc_html($ftc_primary_color) ?>;
        }
	.dropdown-container .ftc_cart_check > a.button.view-cart:hover,
        .dropdown-container .ftc_cart_check > a.button.checkout:hover,
        .woocommerce .widget_price_filter .price_slider_amount .button:hover,
        .woocommerce-page .widget_price_filter .price_slider_amount .button:hover,
        body input.wpcf7-submit:hover,
        .counter-wrapper > div,
        .woocommerce .products .product:hover ,
        .woocommerce-page .products .product:hover ,
        #right-sidebar .product_list_widget:hover li,
        .woocommerce .product   .item-description .meta_info a:hover,
        .woocommerce-page .product   .item-description .meta_info a:hover,
        .ftc-meta-widget.item-description .meta_info a:hover,
        .ftc-meta-widget.item-description .meta_info .yith-wcwl-add-to-wishlist a:hover,
        .woocommerce .products .product:hover ,
        .woocommerce-page .products .product:hover ,
        .ftc-products-category ul.tabs li:hover,
        .ftc-products-category ul.tabs li.current,
        body .vc_tta.vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-panel-title > a,
        body .vc_tta.vc_tta-accordion .vc_tta-panel .vc_tta-panel-title > a:hover,
         body div.pp_details a.pp_close:hover:before,
        .wpcf7 p input:focus,
        .wpcf7 p textarea:focus,
        .woocommerce form .form-row .input-text:focus,
        body .button.button-secondary,
        .ftc-quickshop-wrapper .owl-nav > div.owl-next:hover,
        .ftc-quickshop-wrapper .owl-nav > div.owl-prev:hover,
        #cboxClose:hover, .woocommerce-account .woocommerce-MyAccount-navigation li.is-active,
        .ftc-product-items-widget .ftc-meta-widget.item-description .meta_info .compare:hover,
        .ftc-product-items-widget .ftc-meta-widget.item-description .meta_info .add_to_cart_button a:hover,
        .woocommerce .product   .item-description .meta_info .add-to-cart a:hover,
        .ftc-meta-widget.item-description .meta_info .add-to-cart a:hover 
        {
                border-color: <?php echo esc_html($ftc_primary_color) ?>;
        }
        #ftc_language ul ul,
        .header-currency ul,
        .ftc-account .dropdown-container,
        .ftc-shop-cart .dropdown-container,
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
        .woocommerce .product .conditions-box .out-of-stock:before
        {
                border-top-color: <?php echo esc_html($ftc_primary_color) ?>;
        }
        .woocommerce .products.list .product:hover  .item-description:after,
        .woocommerce-page .products.list .product:hover  .item-description:after
        {
                border-left-color: <?php echo esc_html($ftc_primary_color) ?>;
        }
        footer#colophon .ftc-footer .widget-title:before,
        .woocommerce div.product .woocommerce-tabs ul.tabs,
        #customer_login h2 span:before,
        .cart_totals  h2 span:before
        {
                border-bottom-color: <?php echo esc_html($ftc_primary_color) ?>;
        }
        
        /* ========== Secondary color ========== */
        body,
        .ftc-shoppping-cart a.ftc_cart:hover,
        #mega_main_menu.primary ul li .mega_dropdown > li.sub-style > .item_link .link_text,
        .woocommerce a.remove,
        body.wpb-js-composer .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab,
        .woocommerce .products .star-rating.no-rating,
        .woocommerce-page .products .star-rating.no-rating,
        .star-rating.no-rating:before,
        .pp_woocommerce .star-rating.no-rating:before,
        .woocommerce .star-rating.no-rating:before,
        .woocommerce-page .star-rating.no-rating:before,
        .woocommerce .product .item-image .group-button-product > div a,
        .woocommerce .product .item-image .group-button-product > a, 
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
        .dropdown-container .ftc_cart_check > a.button.checkout,
        .pp_woocommerce div.product form.cart .button:hover,
        .info-company li i,
        body .button.button-secondary:hover,
        div.pp_default .pp_close, body div.pp_woocommerce.pp_pic_holder .pp_close,
        body div.ftc-product-video.pp_pic_holder .pp_close,
        body .ftc-lightbox.pp_pic_holder a.pp_close,
        #cboxClose
        {
                background-color: <?php echo esc_html($ftc_secondary_color) ?>;
        }
        .dropdown-container .ftc_cart_check > a.button.checkout,
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