(function ($) {
    "use strict";

      // Show hide popover
    $(".dropdown-button").click(function () {
        $(this).find("#dropdown-list").slideToggle("fast");
    });
    
    $(".menu-ftc").click(function () {
        $('#primary-menu').slideToggle("fast");
    });
    $('#mega_main_menu').parent().addClass('menu-fix');
    
      
    $('img.ftc-image').each(function () {
        if ($(this).data('src')) {
            $(this).attr('src', $(this).data('src'));
        }
    });
    
    // FTC Owl slider
    $('.ftc-sb-blogs,.ftc-sb-brandslider,.ftc-product-slider,.ftc-list-category-slider,.ftc-product-time-deal').each(function () { 
        var margin = $(this).data('margin');
        var columns = $(this).data('columns');
        var nav = $(this).data('nav') == 1;                 
        var auto_play = $(this).data('auto_play') == 1;             
        var slider = $(this).data('slider') == 1;
        var desksmall_items = $(this).data('desksmall_items');
        var tabletmini_items = $(this).data('tabletmini_items');
        var tablet_items = $(this).data('tablet_items');
        var mobile_items = $(this).data('mobile_items');
        var mobilesmall_items = $(this).data('mobilesmall_items');        
        
            if( slider ){ 
            var _slider_data ={
                loop: true
                , nav: nav
                , dots: false
                , navSpeed: 1000
                ,navText: [,]
                , rtl: $('body').hasClass('rtl')
                , margin: margin
                , autoplay: auto_play
                , autoplayTimeout: 5000
                , autoplaySpeed: 1000
                , responsiveBaseElement: $('body')
                , responsiveRefreshRate: 400
                , responsive: {
                    0:{
                  items: mobilesmall_items
                },
                480:{
                  items: mobile_items
                },
                640:{
                  items: tabletmini_items
                },
                768:{
                  items: tablet_items
                },
                991:{
                  items: desksmall_items
                },
                1199:{
                  items:columns
                }
                }
                ,onInitialized: function(){
                    $(this).addClass('loaded').removeClass('loading');
                }
            };
    $(this).find('.meta-slider > div').owlCarousel(_slider_data);
        }

    });
     
     // Woocommerce Quantity on GitHub
       $( document ).on( 'click', '.plus, .minus', function() {

        // Get values
        var $qty        = $( this ).closest( '.quantity' ).find( '.qty' ),
        currentVal  = parseFloat( $qty.val() ),
        max         = parseFloat( $qty.attr( 'max' ) ),
        min         = parseFloat( $qty.attr( 'min' ) ),
        step        = $qty.attr( 'step' );

        // Format values
        if ( ! currentVal || currentVal === '' || currentVal === 'NaN' ) currentVal = 0;
        if ( max === '' || max === 'NaN' ) max = '';
        if ( min === '' || min === 'NaN' ) min = 0;
        if ( step === 'any' || step === '' || step === undefined || parseFloat( step ) === 'NaN' ) step = 1;

        // Change the value
        if ( $( this ).is( '.plus' ) ) {

            if ( max && ( max == currentVal || currentVal > max ) ) {
                $qty.val( max );
            } else {
                $qty.val( currentVal + parseFloat( step ) );
            }

        } else {

            if ( min && ( min == currentVal || currentVal < min ) ) {
                $qty.val( min );
            } else if ( currentVal > 0 ) {
                $qty.val( currentVal - parseFloat( step ) );
            }

        }

        // Trigger change event
        $qty.trigger( 'change' );

    });
    
      if ($('.single-product').length > 0) { 
        $('.single-product .product .thumbnails.loading').each(function(){
            $(this).find('.details_thumbnails').owlCarousel({
                loop: true
                , nav: true
                , navText: [, ]
                , dots: false
                , navSpeed: 1000
                , rtl: $('body').hasClass('rtl')
                , margin: 16
                , autoplaySpeed: 1000
                , responsiveRefreshRate: 1000
                , responsive: {
                    0: {
                        items: 1
                    },
                    100: {
                        items: 2
                    },
                    290: {
                        items: 3
                    }
                }
            });
        });
    }
    
    $('.single-product .related .products').each(function () {
     $(this).addClass('loaded').removeClass('loading');
     $(this).owlCarousel({ 
        loop: true
        , nav: false
        , navText: [, ]
        , dots: false
        , navSpeed: 1000
        , slideBy: 1
        , rtl: jQuery('body').hasClass('rtl')
        , margin: 30
        , autoplayTimeout: 5000
        , responsiveRefreshRate: 400
        , responsive: {
            0: {
                items: 1
            },
            736: {
                items: 2
            },
            800: {
                items: 3
            },
            1400: {
                items: 4
            }
        }       
    });

 });


    $('.single-post .related-posts.loading .meta-slider .blogs').each(function () {
     $(this).addClass('loaded').removeClass('loading');
     $(this).owlCarousel({ 
        loop: true
        , nav: false
        , navText: [, ]
        , dots: false
        , navSpeed: 1000
        , slideBy: 1
        , rtl: jQuery('body').hasClass('rtl')
        , margin: 30
        , autoplayTimeout: 5000
        , responsiveRefreshRate: 400
        , responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            800: {
                items: 2
            },
            1400: {
                items: 3
            }
        }       
    });

 });
 
 
 $(document).on('click', '.widget_categories span.icon-toggle', function(){
        if (!$(this).parent().hasClass('active')) {
            $(this).parent().find('ul.children:first').slideDown(300);
            $(this).parent().addClass('active');
        } else {
            $(this).parent().find('ul.children').slideUp(300);
            $(this).parent().removeClass('active');
            $(this).parent().find('li.cat-parent').removeClass('active');
        }
    });
    $('.widget_categories li.current-cat').siblings('.icon-toggle').parents('ul.children').trigger('click').slideUp(300); 

    $(document).on('click', '.widget-container.ftc-product-categories-widget .icon-toggle', function(){

        if (!$(this).parent().hasClass('active')) {
            $(this).parent().addClass('active');
            $(this).parent().find('ul.children:first').slideDown(300);
        } else {
           $(this).parent().find('ul.children').slideUp(300);
           $(this).parent().removeClass('active');
           $(this).parent().find('li.cat-parent').removeClass('active');
       }
   });

    $('.widget-container.ftc-product-categories-widget').each(function (){  
        $(this).find('ul.children').parent('li').addClass('cat-parent');
        $(this).find('li.current').parents('ul.children').siblings('.icon-toggle').trigger('click');
    });


    $('.widget-title-wrapper a.block-control').bind('click', function (e) {
        e.preventDefault();
        $(this).parent().siblings().slideToggle(400);
        $(this).toggleClass('active');
    });

    ftc_widget_on_off();
    if (!on_touch) {
        $(window).bind('resize', $.throttle(250, function () {
            ftc_widget_on_off();
        }));
    }
    
        $('form.woocommerce-ordering ul.orderby ul a').bind('click', function (e) {
        e.preventDefault();
        if ($(this).hasClass('current')) {
            return;
        }
        $(this).closest('form.woocommerce-ordering').find('select.orderby').val($(this).attr('data-orderby'));
        $(this).closest('form.woocommerce-ordering').submit();
    });

    function ftc_slider_products_categorytabs_is_slider(element, show_nav, auto_play, columns, responsive, margin) {
        if (element.find('.products .product-row').length > 0) {
            show_nav = (show_nav == 1) ? true : false;
            auto_play = (auto_play == 1) ? true : false;
            columns = parseInt(columns);
            var _slider_data = {
                loop: true
                , nav: show_nav
                , navText: [, ]
                , dots: false
                , navSpeed: 1000
                , slideBy: 1
                , rtl: $('body').hasClass('rtl')
                , margin: 0
                , navRewind: false
                , autoplay: auto_play
                , autoplayTimeout: 5000
                , autoplayHoverPause: false
                , autoplaySpeed: 1000
                , mouseDrag: true
                , touchDrag: true
                , responsiveBaseElement: $('body').find('.products')
                , responsiveRefreshRate: 400
                , responsive: {
                    0: {
                        items: 1
                    },
                    320: {
                        items: 2
                    },
                    470: {
                        items: 3
                    },
                    670: {
                        items: 4
                    },
                    870: {
                        items: 5
                    },
                    1100: {
                        items: columns
                    }
                }
                , onInitialized: function () {

                }
            };

            if (responsive != undefined) {
                _slider_data.responsive = responsive;
            }

            if (margin != undefined) {
                _slider_data.margin = margin;
            }

            element.find('.products').owlCarousel(_slider_data);
        }
    }

    var ftc_type_of_products_data = [];
    
    $('.ftc-products-category .row-tabs .tab-item').bind('click', function () {
        /* Tab */
        if ($(this).hasClass('current') || $(this).parents('.ftc-products-category').find('.row-content').hasClass('loading')) {
            return;
        }
        $(this).parents('.ftc-products-category').find('.row-tabs .tab-item').removeClass('current');
        $(this).addClass('current')

        var element =$(this).parents('.ftc-products-category') ;
        var atts = element.data('atts');
        var margin = 0; 
        var responsive = {
            0: {
                items: 1
            }, 
            600: {
                items: 2
            }, 
            900: {
                items: 3
            }, 
            1000: {
                items: atts.columns
            }
        };              
        if (ftc_type_of_products_data[$(this).parents('.ftc-products-category').attr('id')] != undefined) {          
            if (typeof ftc_quickshop_process_action == 'function') {
                ftc_quickshop_process_action();
            }
            $(this).parents('.ftc-products-category').find('.lazy-loading img').each(function () {
                if ($(this).data('src')) {
                    $(this).attr('src', $(this).data('src'));
                }
            });
            $(this).parents('.ftc-products-category').find('.lazy-loading').removeClass('lazy-loading').addClass('lazy-loaded');           
        }
        $(this).parents('.ftc-products-category').find('.row-content').addClass('loading');

        $.ajax({
            type: "POST",
            timeout: 30000,
            url: ftc_shortcode_params.ajax_uri,
            data: {action: 'ftc_get_product_content_in_category_tab_2', atts: atts, product_cat: $(this).data('product_cat')},
            error: function (xhr, err) {
            },
            success: function (response) {
                if (response) {                    
                    element.find('.column-products .products.owl-carousel').owlCarousel('destroy');
                    element.find('.row-content > div').remove();
                    element.find('.row-content').append(response);
                    if (typeof ftc_quickshop_process_action == 'function') {
                        ftc_quickshop_process_action();
                    } 
                    ftc_countdown(element.find('.product .counter-wrapper'));
                    ftc_slider_products_categorytabs_is_slider(element, atts.show_nav, atts.auto_play, atts.columns, responsive, margin);
                }
                element.find('.row-content').removeClass('loading');
            }
        });
    });

    $('.ftc-products-category').each(function () {
        var current_tab = 1;
        var count_tab = $(this).find('.row-tabs .tab-item').length;
        var atts = $(this).data('atts');
        if (atts.current_tab != undefined) {
            var defined_current_tab = parseInt(atts.current_tab);
            if (defined_current_tab > 1 && defined_current_tab <= count_tab) {
                current_tab = defined_current_tab;
            }
        }

        $(this).find('.row-tabs .tab-item').eq(current_tab - 1).trigger('click');
    });


    function ftc_countdown(countdown) {
        if (countdown.length > 0) {
            var interval = setInterval(function () {
                countdown.each(function (index,countdown) {
                    var day = 0;
                    var hour = 0;
                    var minute = 0;
                    var second = 0;

                    var delta = 0;
                    var time_day = 60 * 60 * 24;
                    var time_hour = 60 * 60;
                    var time_minute = 60;

                    $(countdown).find('.days .number-wrapper .number').each(function (i, e) {
                        day = parseInt($(e).text());
                    });
                    $(countdown).find('.hours .number-wrapper .number').each(function (i, e) {
                        hour = parseInt($(e).text());
                    });
                    $(countdown).find('.minutes .number-wrapper .number').each(function (i, e) {
                        minute = parseInt($(e).text());
                    });
                    $(countdown).find('.seconds .number-wrapper .number').each(function (i, e) {
                        second = parseInt($(e).text());
                    });

                    if (day != 0 || hour != 0 || minute != 0 || second != 0) {
                        delta = (day * time_day) + (hour * time_hour) + (minute * time_minute) + second;
                        delta--;

                        day = Math.floor(delta / time_day);
                        delta -= day * time_day;

                        hour = Math.floor(delta / time_hour);
                        delta -= hour * time_hour;

                        minute = Math.floor(delta / time_minute);
                        delta -= minute * time_minute;

                        if (delta > 0) {
                            second = delta;
                        } else {
                            second = '0';
                        }

                        day = (day < 10) ? ftc_start_number_timer(day, 2) : day.toString();
                        hour = (hour < 10) ? ftc_start_number_timer(hour, 2) : hour.toString();
                        minute = (minute < 10) ? ftc_start_number_timer(minute, 2) : minute.toString();
                        second = (second < 10) ? ftc_start_number_timer(second, 2) : second.toString();

                        $(countdown).find('.days .number-wrapper .number').each(function (i, e) {
                            $(e).text(day);
                        });

                        $(countdown).find('.hours .number-wrapper .number').each(function (i, e) {
                            $(e).text(hour);
                        });

                        $(countdown).find('.minutes .number-wrapper .number').each(function (i, e) {
                            $(e).text(minute);
                        });

                        $(countdown).find('.seconds .number-wrapper .number').each(function (i, e) {
                            $(e).text(second);
                        });
                    }

                });
            }, 1000);
        }
    }

    ftc_countdown($('.product .counter-wrapper, .ftc-countdown .counter-wrapper'));
    function ftc_start_number_timer(str, max) {
        str = str.toString();
        return str.length < max ? ftc_start_number_timer('0' + str, max) : str;
    }

    $('.ftc-sb-testimonial.ftc-slider').each(function () {
        var slider = true;
        if ($(this).find('.item').length <= 1) {
            slider = false;
        }

        if (slider) {
         var nav = $(this).data('nav') == 1;
         var dots = $(this).data('dots') == 1;
         var autoplay = $(this).data('autoplay') == 1;                
         $(this).addClass('loaded').removeClass('loading');
         $(this).owlCarousel({
            items: 1
            , loop: true
            , nav: nav
            , dots: dots
            , animateIn: 'fadeIn'
            , animateOut: 'fadeOut'
            , navText: [, ]
            , navSpeed: 1000
            , rtl: $('body').hasClass('rtl')
            , margin: 0
            , autoplay: autoplay
            , autoplayTimeout: 5000
            , center: true
            , responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                }
            }
        });
     }
 });


    function ftc_googlemap_start_up(map_content_obj, address, zoom, map_type, title) {
        var geocoder, map;
        geocoder = new google.maps.Geocoder();

        geocoder.geocode({'address': address}, function (results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                var _ret_array = new Array(results[0].geometry.location.lat(), results[0].geometry.location.lng());
                map.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                    map: map
                    , title: title
                    , position: results[0].geometry.location
                });
            }
        });

        var mapCanvas = map_content_obj.get(0);
        var mapOptions = {
            center: new google.maps.LatLng(44.5403, -78.5463)
            , zoom: zoom
            , mapTypeId: google.maps.MapTypeId[map_type]
            , scrollwheel: false
            , zoomControl: true
            , panControl: true
            , scaleControl: true
            , streetViewControl: false
            , overviewMapControl: true
            , disableDoubleClickZoom: false
        }
        map = new google.maps.Map(mapCanvas, mapOptions)
    }

    $(window).bind('load resize', function () {
        $('.google-map-container').each(function () {
            var element = $(this);
            var map_content = $(this).find('> div');
            var address = element.data('address');
            var zoom = element.data('zoom');
            var map_type = element.data('map_type');
            var title = element.data('title');
            ftc_googlemap_start_up(map_content, address, zoom, map_type, title);
        });
    });
    
 
    $('.ftc-product-items-widget.ftc-slider').each(function () {      
        var nav = $(this).data('nav') == 1;
        var auto_play = $(this).data('auto_play') == 1;
        var columns = $(this).data('columns');
        var margin = $(this).data('margin');

        $(this).owlCarousel({
            loop: true
            , items: 1
            , nav: nav
            , navText: [, ]
            , dots: false
            , navSpeed: 1000
            , slideBy: 1
            , rtl: $('body').hasClass('rtl')
            , navRewind: false
            , columns: columns
            , margin: margin
            , autoplay: auto_play
            , autoplayTimeout: 5000
            , responsiveRefreshRate: 1000
            , responsive: {
                0: {
                    items: columns
                }
            }
        });
    });

    function ftc_update_information_tini_wishlist() {
        if (typeof ftc_shortcode_params.ajax_uri == 'undefined') {
            return;
        }
        var wishlist = jQuery('.ftc-my-wishlist');
        if (wishlist.length == 0) {
            return;
        }

        wishlist.addClass('loading');
        jQuery.ajax({
            type: 'POST'
            , url: ftc_shortcode_params.ajax_uri
            , data: {action: 'update_tini_wishlist'}
            , success: function (response) {
                var first_icon = wishlist.children('i.fa:first');
                wishlist.html(response);
                if (first_icon.length > 0) {
                    wishlist.prepend(first_icon);
                }
                wishlist.removeClass('loading');
            }
        });
    }
    $('body').bind('added_to_wishlist', function () {
        ftc_update_information_tini_wishlist();
        $('.yith-wcwl-wishlistaddedbrowse.show, .yith-wcwl-wishlistexistsbrowse.show').closest('.yith-wcwl-add-to-wishlist').addClass('added');
    });
    $(document).on('click', '#yith-wcwl-form table tbody tr td a.remove, #yith-wcwl-form table tbody tr td a.add_to_cart_button', function () {
        var old_num_product = $('#yith-wcwl-form table tbody tr[id^="yith-wcwl-row"]').length;
        var count = 1;
        var time_interval = setInterval(function () {
            count++;
            var new_num_product = $('#yith-wcwl-form table tbody tr[id^="yith-wcwl-row"]').length;
            if (old_num_product != new_num_product || count == 20) {
                clearInterval(time_interval);
                ftc_update_information_tini_wishlist();
            }
        }, 500);
    });

    function ftc_quickshop_process_action() {
        jQuery('a.quickview').prettyPhoto({
            deeplinking: false
            , opacity: 0.9
            , social_tools: false
            , default_width: 900
            , default_height: 450
            , theme: 'pp_woocommerce'
            , changepicturecallback: function () {
                jQuery('.pp_inline').find('form.variations_form').wc_variation_form();
                jQuery('.pp_inline').find('form.variations_form .variations select').change();
                jQuery('body').trigger('wc_fragments_loaded');

                jQuery('.pp_inline .variations_form').on('click', '.reset_variations', function () {
                    jQuery(this).closest('.variations').find('.ftc-product-attribute .option').removeClass('selected');
                });

                jQuery('.pp_woocommerce').addClass('loaded');

                var _this = jQuery('.ftc-quickshop-wrapper .images-slider-wrapper');

                if (_this.find('.image-item').length <= 1) {
                    return;
                }

                var owl = _this.find('.image-items').owlCarousel({
                    items: 1
                    , loop: true
                    , nav: true
                    , navText: [, ]
                    , dots: false
                    , navSpeed: 1000
                    , slideBy: 1
                    , rtl: jQuery('body').hasClass('rtl')
                    , margin: 10
                    , navRewind: false
                    , autoplay: false
                    , autoplayTimeout: 5000
                    , autoplayHoverPause: false
                    , autoplaySpeed: false
                    , mouseDrag: true
                    , touchDrag: true
                    , responsiveBaseElement: _this
                    , responsiveRefreshRate: 1000
                    , onInitialized: function () {
                        _this.addClass('loaded').removeClass('loading');
                    }
                });

            }
        });

    }
    ftc_quickshop_process_action();
    function ftc_widget_on_off() {
        if (typeof ftc_shortcode_params._ftc_enable_responsive != 'undefined' && !ftc_shortcode_params._ftc_enable_responsive) {
            return;
        }
        jQuery('.wpb_widgetised_column .widget-title-wrapper a.block-control, .footer-container .widget-title-wrapper a.block-control').remove();
        var window_width = jQuery(window).width();
        window_width += ftc_take_width_of_scrollbar();
        if (window_width >= 768) {
            jQuery('.widget-title-wrapper a.block-control').removeClass('active').hide();
            jQuery('.widget-title-wrapper a.block-control').parent().siblings().show();
        } else {
            jQuery('.widget-title-wrapper a.block-control').removeClass('active').show();
            jQuery('.widget-title-wrapper a.block-control').parent().siblings().hide();
            jQuery('.wpb_widgetised_column .widget-title-wrapper, .footer-container .widget-title-wrapper').siblings().show();
        }
    }


    (function (a) {
        jQuery.browser.ftc_mobile = /android.+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i.test(a.substr(0, 4))
    })(navigator.userAgent || navigator.vendor || window.opera);
    function ftc_is_device_like_smartphone() {
        var is_touch = !!("ontouchstart" in window) ? true : false;
        if (jQuery.browser.ftc_mobile) {
            is_touch = true;
        }
        return is_touch;
    }
    var on_touch = ftc_is_device_like_smartphone();

    function ftc_take_width_of_scrollbar() {
        var $inner = jQuery('<div style="width: 100%; height:200px;">test</div>'),
        $outer = jQuery('<div style="width:200px;height:150px; position: absolute; top: 0; left: 0; visibility: hidden; overflow:hidden;"></div>').append($inner),
        inner = $inner[0],
        outer = $outer[0];

        jQuery('body').append(outer);
        var width1 = inner.offsetWidth;
        $outer.css('overflow', 'scroll');
        var width2 = outer.clientWidth;
        $outer.remove();

        return (width1 - width2);
    }
})(jQuery);
