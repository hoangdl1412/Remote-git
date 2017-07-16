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
	
        html, 
	body,
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
        .my-wishlist-wrapper *,
        .dropdown-button span > span,
        body p,
        .wishlist-empty,
        div.product .social-sharing li a,
        .ftc-search form,
        .ftc-shop-cart,
        .conditions-box,
        .meta-wrapper .product_title,
        .meta-wrapper .price,
        .testimonial-content .content,
        .testimonial-content .byline,
        .widget-container ul.product-categories ul.children li a,
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
        .blogs .excerpt,
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
        .blogs article .smooth-thumbnail:before,
        .blogs article a.gallery .owl-item:after
	{
		font-family: <?php echo esc_html($ftc_secondary_body_font) ?>;
	}
	body,
        .site-footer,
        .woocommerce div.product form.cart .group_table td.label,
        .woocommerce .product .conditions-box span,
        .meta-wrapper .meta_info .yith-wcwl-add-to-wishlist a, .meta-wrapper .meta_info .compare a,
        ul.product_list_widget li > a,
        h3.product-name, 
        .single-navigation a .product-info span,
        .info-company li i,
        .social-icons .ftc-tooltip:before,
        .widget-container ul.product-categories ul.children li,
        .tagcloud a,
        .details_thumbnails .owl-nav > div:before,
        div.product .summary .yith-wcwl-add-to-wishlist a:before,
        .pp_woocommerce div.product .summary .compare:before,
        .woocommerce div.product .summary .compare:before,
        .woocommerce-page div.product .summary .compare:before,
        .woocommerce #content div.product .summary .compare:before,
        .woocommerce-page #content div.product .summary .compare:before,
        .ftc-products-category ul.tabs li span.title,
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
	.post-info a:hover,
        .comment-content a:hover,
        a:hover,
        a:active,
        .ftc-shoppping-cart a:hover,
        .ftc-search .search-button:hover,
        .ftc-sb-language li .ftc_lang:hover,
        .header-currency a:hover,
        .ftc-shoppping-cart a.ftc_cart:hover,
        #mega_main_menu.primary ul li .mega_dropdown > li.sub-style > .item_link .link_text,
        .ftc-account .ftc_account_form:before,
        .ftc-sb-language > ul > li > ul:before,
        .ftc-shop-cart .ftc_shopping_form:before,
        .header-currency > ul:before,
        .ftc-sb-account .ftc-account .daniel-login:before,
        .header-currency ul li:hover,
        .header-currency:hover > a,
        .ftc-sb-language:hover li .ftc_lang,
        .header-currency:hover,
        .ftc-sb-language li:hover,
        .ftc-shop-cart .total > span.amount,
        .widget_shopping_cart .total .amount,
        .dropdown-container .ftc_cart_check > a.button.view-cart:hover,
        .header-v4 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link,
        .header-v4 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link:hover,
        .header-v4 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link:focus,
        .header-v4 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link *,
        .header-v4 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link,
        .header-v4 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link > .link_content>.link_text,
        .header-v4 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-page-ancestor > .item_link *,
        .header-v4 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-post-ancestor > .item_link *,
        .header-v4 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-item > .item_link *,
        .header-v4 .ftc-shoppping-cart > a:hover,
        .header-v4 .ftc-search .search-button:hover,
        .header-v4 .ftc-sb-language li .ftc_lang:hover,
        .header-v4 .header-currency a:hover,
        .comment-meta a:hover,
        .comment-reply-link .icon,
        .main-navigation li li.focus > a,
	.main-navigation li li:focus > a,
	.main-navigation li li:hover > a,
	.main-navigation li li a:hover,
	.main-navigation li li a:focus,
	.main-navigation li li.current_page_item a:hover,
	.main-navigation li li.current-menu-item a:hover,
	.main-navigation li li.current_page_item a:focus,
	.main-navigation li li.current-menu-item a:focus,
        article .post-info a:hover, article .comment-content a:hover,
        .woocommerce  .product .item-description .product-cate a:hover,
        #mega_main_menu.primary .mega_dropdown > li.current-menu-item > .item_link *,
        #mega_main_menu.primary .mega_dropdown > li > .item_link:focus *,
        #mega_main_menu.primary .mega_dropdown > li > .item_link:hover *,
        #mega_main_menu.primary li.post_type_dropdown > .mega_dropdown > li > .processed_image:hover > .cover > a > i,
        .my-wishlist-wrapper a:hover,
        .ftc-sb-account .ftc_login > a:hover,
        body.wpb-js-composer .vc_general.vc_tta-tabs .vc_tta-tab.vc_active > a,
        body.wpb-js-composer .vc_general.vc_tta-tabs .vc_tta-tab > a:hover,
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
        .ftc-wg-meta .price ins,
        .ftc-wg-meta .star-rating,
        .ul-style.circle li:before,
        .woocommerce form .form-row .required,
        .blogs .comment-count i,
        .blog .comment-count i,
        .single-post .comment-count i,
        .single-post article .post-info .info-category,
        .single-post article .post-info .info-category .cat-links a,
        .single-post article .post-info .info-category .vcard.author a,
        .breadcrumb-title .breadcrumbs-container,
        .breadcrumb-title .breadcrumbs-container span.current,
        .breadcrumb-title .breadcrumbs-container a:hover,
        .feature-content .feature-title a:hover,
        .breadcrumb-title-wrapper .breadcrumbs-container,
        .woocommerce .product .item-image .group-button-product .add-to-cart a:hover,
        .woocommerce .product .item-description .meta_info a:hover,
        .woocommerce-page .product .item-description .meta_info a:hover,
        .ftc-wg-meta.item-description .meta_info a:hover,
        .ftc-wg-meta.item-description .meta_info .yith-wcwl-add-to-wishlist a:hover,
        .price,
        h3.product-name > a:hover,
        .woocommerce nav.woocommerce-pagination ul li span.current,
        .woocommerce-page nav.woocommerce-pagination ul li span.current,
        .woocommerce nav.woocommerce-pagination ul li a:hover,
        .woocommerce-page nav.woocommerce-pagination ul li a:hover,
        .woocommerce nav.woocommerce-pagination ul li a:focus,
        .woocommerce-page nav.woocommerce-pagination ul li a:focus,
        footer a:hover,
        .gridlist-toggle a.active,
        .widget-container.ftc-product-categories-widget ul.product-categories li:hover span.icon-toggle:before,
        .woocommerce div.product p.stock,
        div.ftc-quickshop-wrapper.product p.stock,
        .banner .ftc-feature .feature-content .feature-icon:hover,
        .vc_toggle_title h4:hover,
        .vc_toggle_title h4:before,
        .ftc-quickshop-wrapper .owl-nav > div.owl-next:hover,
        .ftc-quickshop-wrapper .owl-nav > div.owl-prev:hover,
        .pp_woocommerce div.product .owl-nav > div.owl-prev:hover:before,
        .pp_woocommerce div.product .owl-nav > div.owl-next:hover:before,
        .owl-nav > div:hover,
        .blogs article h3.blog_title a:hover,
        .blog-home.blog-home3 .blogs article:hover .post-info h3.blog_title a:hover,
        .shortcode-icon .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-color-orange .vc_icon_element-icon,
        #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link,
        #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link:hover,
        #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link:focus,
        #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link *,
        #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link,
        #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link *,
        #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-page-ancestor > .item_link *,
        #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-post-ancestor > .item_link *,
        #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-item > .item_link *,
        article .post-info .cat-links a,article .post-info .tags-link a,
        .vcard.author a,article .entry-header .caftc-link .cat-links a,
        .navigation.pagination .page-numbers.current,.woocommerce-info::before,.header-v4 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover> .item_link > .link_content>.link_text,.header-v4 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-item> .item_link > .link_content>.link_text
        {
                color: <?php echo esc_html($ftc_primary_color) ?>;
        }
        .woocommerce a.remove:hover,
        body table.compare-list tr.remove td > a .remove:hover:before
        {
                color: <?php echo esc_html($ftc_primary_color) ?> !important;
        }
        .ftc-account:hover .ftc_login .icon-ftc_login:before,
        .ftc-account:hover .ftc_login .icon-ftc_login:after,
        .ftc-shop-cart a.ftc_cart .cart-number,
        .dropdown-container .ftc_cart_check > a.button.checkout:hover,
        .woocommerce .widget_price_filter .price_slider_amount .button:hover,
        .woocommerce-page .widget_price_filter .price_slider_amount .button:hover,
        body input.wpcf7-submit:hover,
        #cboxClose:hover,
        .header-v4 .ftc-account:hover .ftc_login .icon-ftc_login:before,
        .header-v4 .ftc-account:hover .ftc_login .icon-ftc_login:after,
        .woocommerce .products.list .product .item-description .add-to-cart a:hover,
        .woocommerce .products.list .product .item-description .meta_info a:not(.quickview):hover,
        .woocommerce .products.list .product .item-description .quickview i:hover,
        .ftc-product-deals-slider-wrapper .counter-wrapper,
        .counter-wrapper > div,
        .one-categories,
        .woocommerce .product .conditions-box .onsale,
        .woocommerce .products .product .item-image .yith-wcwl-add-to-wishlist:hover a:hover,
        .woocommerce .products .product .item-image .compare:hover,
        .woocommerce .products .product .item-image .quickview:hover,
        .vc_color-orange.vc_message_box-solid,
        .load-more-wrapper .button:hover,
        body .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab:hover,
        body .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab.vc_active,
        .woocommerce div.product form.cart .button:hover,
        .woocommerce div.product div.summary p.cart a:hover,
        div.product .summary .yith-wcwl-add-to-wishlist a:hover,
        .woocommerce #content div.product .summary .compare:hover,
        div.product .social-sharing li a:hover,
        .tagcloud a:hover,
        .woocommerce .wc-proceed-to-checkout a.button.alt:hover,
        .woocommerce .wc-proceed-to-checkout a.button:hover,
        .woocommerce-cart table.cart input.button:hover,
        div.product.vertical-thumbnail .details-img .owl-controls div.owl-prev:hover,
        div.product.vertical-thumbnail .details-img .owl-controls div.owl-next:hover,
        ul > .page-numbers.current,
        ul > .page-numbers:hover,
        .ftc-sb-testimonial .owl-dots > div.active > span:before,
        .ftc-sb-testimonial .owl-dots > div > span:hover:before,
        .owl-dots > .owl-dot span:hover,
        .owl-dots > .owl-dot.active span,
        .vc_progress_bar.vc_progress-bar-color-bar_grey .vc_general.vc_single_bar .vc_bar,
        .widget-container ul.product-categories li > a:hover > span,
        .woocommerce .widget_price_filter .ui-slider .ui-slider-range,
        .details_thumbnails .owl-nav .owl-prev:hover,
        .details_thumbnails .owl-nav .owl-next:hover,
        .pp_woocommerce .quantity .minus:hover,
        .pp_woocommerce .quantity .plus:hover,
        .woocommerce #content .quantity .minus:hover,
        .woocommerce #content .quantity .plus:hover,
        .woocommerce .quantity .minus:hover,
        .woocommerce .quantity .plus:hover,
        .woocommerce-page #content .quantity .minus:hover,
        .woocommerce-page #content .quantity .plus:hover,
        .woocommerce-page .quantity .minus:hover,
        .woocommerce-page .quantity .plus:hover,
        .pp_woocommerce .quantity .minus:focus,
        .pp_woocommerce .quantity .plus:focus,
        .woocommerce #content .quantity .minus:focus,
        .woocommerce #content .quantity .plus:focus,
        .woocommerce .quantity .minus:focus,
        .woocommerce .quantity .plus:focus,
        .woocommerce-page #content .quantity .minus:focus,
        .woocommerce-page #content .quantity .plus:focus,
        .woocommerce-page .quantity .minus:focus,
        .woocommerce-page .quantity .plus:focus,
        body .vc_tta.vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-panel-title > a,
        body .vc_tta.vc_tta-accordion .vc_tta-panel .vc_tta-panel-title > a:hover,
        body div.pp_details a.pp_close:hover:before,
        body.error404 .page-header a,
        body .button.button-secondary,
        .pp_woocommerce div.product form.cart .button,
        article a.button-readmore:hover,
        .blog-home .blogs article:hover .post-info,
        .shortcode-icon .vc_icon_element.vc_icon_element-outer .vc_icon_element-inner.vc_icon_element-background-color-orange.vc_icon_element-background,
        .style1 .ftc-countdown .counter-wrapper > div,
        .style2 .ftc-countdown .counter-wrapper > div,
        .style3 .ftc-countdown .counter-wrapper > div,
        body > h1:first-child,
        table.compare-list .add-to-cart td a:hover,
        .ftc-list-category-slider .products .product.product-category .button a:hover,
        .subcribe-banner .ftc_newletter_sub,
        .text_service a,.vc_toggle_title h4:before,.vc_toggle_active .vc_toggle_title h4:before
        {
                background-color: <?php echo esc_html($ftc_primary_color) ?>;
        }
	.woocommerce #respond input#submit:hover, 
        .woocommerce a.button:hover,
        .woocommerce button.button:hover, 
        .woocommerce input.button:hover{
                background-color: <?php echo esc_html($ftc_primary_color) ?> !important;
        }
        .dropdown-container .ftc_cart_check > a.button.view-cart:hover,
        .dropdown-container .ftc_cart_check > a.button.checkout:hover,
        .woocommerce .widget_price_filter .price_slider_amount .button:hover,
        .woocommerce-page .widget_price_filter .price_slider_amount .button:hover,
        body input.wpcf7-submit:hover,
        #cboxClose:hover,
        .counter-wrapper > div,
        .woocommerce .product .item-image .group-button-product .add-to-cart a:hover,
        .woocommerce .product .item-description .meta_info a:hover,
        .woocommerce-page .product .item-description .meta_info a:hover,
        .ftc-wg-meta.item-description .meta_info a:hover,
        .ftc-wg-meta.item-description .meta_info .yith-wcwl-add-to-wishlist a:hover,
        .ftc-sb-testimonial .owl-dots > div.active > span,
        .ftc-sb-testimonial .owl-dots > div > span:hover,
        .newletter_sub input[type="text"]:focus,
        .details_thumbnails .owl-nav .owl-prev:hover,
        .details_thumbnails .owl-nav .owl-next:hover,
        body .vc_tta.vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-panel-title > a,
        body .vc_tta.vc_tta-accordion .vc_tta-panel .vc_tta-panel-title > a:hover,
         body div.pp_details a.pp_close:hover:before,
         .wpcf7 p input:focus,
        .wpcf7 p textarea:focus,
        .woocommerce form .form-row .input-text:focus,
        body .button.button-secondary,
        .ftc-quickshop-wrapper .owl-nav > div.owl-next:hover,
        .ftc-quickshop-wrapper .owl-nav > div.owl-prev:hover
        {
                border-color: <?php echo esc_html($ftc_primary_color) ?>;
        }
        .ftc-sb-account .ftc-account .daniel-login,
        .ftc-sb-language ul ul,
        .header-currency ul,
        .ftc-account .dropdown-container,
        .ftc-shop-cart .dropdown-container,
        body.wpb-js-composer .vc_general.vc_tta-tabs .vc_tta-tabs-container,
        .ftc-list-category-slider .header-title,.woocommerce-info
        {
                border-top-color: <?php echo esc_html($ftc_primary_color) ?>;
        }
        .header-v3,
        footer#colophon .ftc-footer .widget-title:before,
        #customer_login h2 span:before,
        .cart_totals  h2 span:before
        {
                border-bottom-color: <?php echo esc_html($ftc_primary_color) ?>;
        }
        
        /* ========== Secondary color ========== */
        body,
        button,
        input,
        select,
        textarea,
        .woocommerce .widget_price_filter .price_slider_amount,
        h2,
        h3,
        h4,
        a,
        .home .header-layout1 .ftc-shoppping-cart > a:hover,
        .home .header-layout1 .ftc-search .search-button:hover,
        .home .header-layout1 .ftc-sb-language li .ftc_lang:hover,
        .home .header-layout1 .header-currency a:hover,
        .home .header-layout1 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link,
        .home .header-layout1 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link:hover,
        .home .header-layout1 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link:focus,
        .home .header-layout1 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link *,
        .home .header-layout1 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link,
        .home .header-layout1 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link *,
        .home .header-layout1 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-page-ancestor > .item_link *,
        .home .header-layout1 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-post-ancestor > .item_link *,
        .home .header-layout1 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-item > .item_link *,
        .home .header-layout1 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link,
        .home .header-layout1 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link:hover,
        .home .header-layout1 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li > .item_link:focus,
        .home .header-layout1 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li:hover > .item_link *,
        .home .header-layout1 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link,
        .home .header-layout1 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-ancestor > .item_link *,
        .home .header-layout1 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-page-ancestor > .item_link *,
        .home .header-layout1 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-post-ancestor > .item_link *,
        .home .header-layout1 #mega_main_menu.primary > .menu_holder > .menu_inner > ul > li.current-menu-item > .item_link *,
        .info-desc > span,
        .ftc-sb-account .ftc_login > a,
        .info-desc span,
        .ftc-sb-account,
        .header-currency ul li,
        .ftc-sb-language li,
        .header-currency,
        .ftc-search .search-button,
        .comment-meta a,
        .comment-metadata,
        article .post-info a, article .comment-content a,
        .breadcrumbs-container a:before,
        body.wpb-js-composer .vc_general.vc_tta-tabs.vc_tta-tabs-position-left .vc_tta-tab,
        .woocommerce .products .star-rating.no-rating,
        .woocommerce-page .products .star-rating.no-rating,
        .star-rating.no-rating:before,
        .pp_woocommerce .star-rating.no-rating:before,
        .woocommerce .star-rating.no-rating:before,
        .woocommerce-page .star-rating.no-rating:before,
        .feature-content a.feature-icon:hover,
        .feature-content .feature-title a,
        .ftc-footer .social li .fa,
        .owl-nav > div,
        .blogs article h3.blog_title a,
        .blog-home.blog-home3 .blogs article:hover .post-info h3.blog_title a,
        .style1 .ftc-countdown .counter-wrapper > div .ref-wrapper,
        .style2 .ftc-countdown .counter-wrapper > div .ref-wrapper,
        .style3 .ftc-countdown .counter-wrapper > div .ref-wrapper,
        .style4 .ftc-countdown .counter-wrapper > div .number-wrapper .number,
        .style4 .ftc-countdown .counter-wrapper > div .ref-wrapper,
        table.compare-list tr.image th,
        table.compare-list tr.image td,
        table.compare-list tr.title th,
        table.compare-list tr.title td,
        table.compare-list tr.price th,
        table.compare-list tr.price td
        {
                color: <?php echo esc_html($ftc_secondary_color) ?>;
        }
        .woocommerce a.remove,
        body table.compare-list tr.remove td > a .remove:before,
        .vc_progress_bar .vc_single_bar .vc_label,
        .vc_btn3.vc_btn3-size-sm.vc_btn3-style-outline,
        .vc_btn3.vc_btn3-size-sm.vc_btn3-style-outline-custom,
        .vc_btn3.vc_btn3-size-md.vc_btn3-style-outline,
        .vc_btn3.vc_btn3-size-md.vc_btn3-style-outline-custom,
        .vc_btn3.vc_btn3-size-lg.vc_btn3-style-outline,
        .vc_btn3.vc_btn3-size-lg.vc_btn3-style-outline-custom
        {
                color: <?php echo esc_html($ftc_secondary_color) ?> !important;
        }
        .home .header-layout1 .ftc-account:hover .ftc_login .icon-ftc_login:before,
        .home .header-layout1 .ftc-account:hover .ftc_login .icon-ftc_login:after,
        .home .header-layout1 .ftc-shop-cart a.ftc_cart .cart-number,
        .ftc-account .ftc_login .icon-ftc_login,
        .ftc-account .ftc_login .icon-ftc_login:before,
        .ftc-account .ftc_login .icon-ftc_login:after,
        .dropdown-container .ftc_cart_check > a.button.checkout,
        .pp_woocommerce div.product form.cart .button:hover,
        .woocommerce #respond input#submit.alt, .woocommerce a.button.alt,
        .woocommerce button.button.alt, .woocommerce input.button.alt,
        #cboxClose,
        body .button.button-secondary:hover,
        div.pp_default .pp_close, body div.pp_woocommerce.pp_pic_holder .pp_close,
        body div.ftc-product-video.pp_pic_holder .pp_close,
        body .ftc-lightbox.pp_pic_holder a.pp_close
        {
                background-color: <?php echo esc_html($ftc_secondary_color) ?>;
        }
        .woocommerce div.product .woocommerce-tabs ul.tabs li
        {
                border-right-color: <?php echo esc_html($ftc_secondary_color) ?>;
        }
        .dropdown-container .ftc_cart_check > a.button.checkout,
        .pp_woocommerce div.product form.cart .button:hover,
        .woocommerce #respond input#submit.alt, .woocommerce a.button.alt,
        .woocommerce button.button.alt, .woocommerce input.button.alt,
        #cboxClose,
        body .button.button-secondary:hover
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