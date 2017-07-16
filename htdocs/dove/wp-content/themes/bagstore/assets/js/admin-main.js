/** Advance Options **/
jQuery(document).ready(function($){
	"use strict";

	$('.vela_meta_box_upload_button').bind('click',function() {
		var button = $(this);
		var clear_button = $(this).siblings('.vela_meta_box_clear_image_button');
		var input_field = $(this).siblings('input.upload_field');   
		wp.media.editor.send.attachment = function(props, attachment){
			var attachment_url = '';
			attachment_url = attachment.sizes[props.size].url;
			input_field.val(attachment_url);
			if( input_field.siblings('.preview-image').length > 0 ){
				input_field.siblings('.preview-image').attr('src', attachment_url);
			}
			else{
				var img_html = '<img class="preview-image" src="' + attachment_url + '" />';
				input_field.parent().append(img_html);
			}
			clear_button.attr('disabled', false);
		}
		wp.media.editor.open(button);
	}); 
	
	$('.vela_meta_box_clear_image_button').bind('click', function(){
		var button = $(this);
		button.attr('disabled', true);
		button.siblings('input.upload_field').val('');
		button.siblings('.preview-image').fadeOut(250, function(){
			button.siblings('.preview-image').remove();
		});
	});
	
	$('.vela-meta-box-field .upload_field').bind('change', function(){
		var input_field = $(this);
		var input_value = input_field.val().trim();
		if( input_value == '' ){
			input_field.siblings('.vela_meta_box_clear_image_button').trigger('click');
		}
		else{
			if( input_field.siblings('.preview-image').length > 0 ){
				input_field.siblings('.preview-image').attr('src', input_value);
			}
			else{
				var img_html = '<img class="preview-image" src="' + input_value + '" />';
				input_field.parent().append(img_html);
			}
			input_field.siblings('.vela_meta_box_clear_image_button').attr('disabled', false);
		}
	});
	
	/* Gallery */
	var file_frame;
	var _add_img_button;
	$('.vela-gallery-box .add-image').bind('click', function(event){
		event.preventDefault();
		_add_img_button = jQuery(this);
        
        if ( file_frame ) {
            file_frame.open();
            return;
        }

        var _states = [new wp.media.controller.Library({
            filterable: 'uploaded',
            title: 'Select Images',
            multiple: true,
            priority:  20
        })];
			 
        file_frame = wp.media.frames.file_frame = wp.media({
            states: _states,
            button: {
                text: 'Insert URL'
            }
        });

        file_frame.on( 'select', function() {
			var object = file_frame.state().get('selection').toJSON();
			
			var img_html = '';
			if( object.length > 0 ){
				for( var i = 0; i < object.length; i++ ){
					var image_url = object[i].url;
					if( typeof object[i].sizes.thumbnail != "undefined" ){
						image_url = object[i].sizes.thumbnail.url;
					}
					img_html += '<li class="image"><span class="del-image"></span><img src="'+image_url+'" alt="" data-id="'+object[i].id+'"/></li>';
				}
			}
			
			_add_img_button.siblings('ul.images').append(img_html);
			
			var arr_ids = new Array();
			_add_img_button.siblings('ul.images').find('li img').each(function(index, ele){
				arr_ids.push( $(ele).data('id') );
			});
			
			_add_img_button.siblings('.meta-value').val(arr_ids.join(','));
        });
		 
        file_frame.open();
	});
	
	jQuery('.vela-gallery-box .del-image').live('click', function(){
		var image = jQuery(this).parent('.image');
		var container = jQuery(this).parents('.vela-gallery-box');
		image.fadeOut(300, function(){
			image.remove();
			var arr_ids = new Array();
			container.find('.images img').each(function(index, ele){
				arr_ids.push( $(ele).data('id') );
			});
			container.find('.meta-value').val(arr_ids.join(','));
		});
	});
	
	/* Colorpicker */
	if( typeof $.fn.wpColorPicker == 'function' ){
		$('.vela-meta-box-field .colorpicker').wpColorPicker();
	}
	
});
/** End Advance Options **/

/** Page Template - Page Options **/
jQuery(document).ready(function($){
	"use strict";
	
	if( $('select#page_template').length > 0 ){
		$('select#page_template').bind('change', function(){
			var template = $(this).val();
			$('#page_options .vela-meta-box-field').show();
			$('#vela_left_right_padding').parents('.vela-meta-box-field').hide();
			if( template == 'page-templates/fullwidth-template.php' ){
				$('#vela_page_layout, #vela_left_sidebar, #vela_right_sidebar').parents('.vela-meta-box-field').hide();
				$('#vela_left_right_padding').parents('.vela-meta-box-field').show();
			}
			if( template == 'page-templates/blank-page-template.php' ){
				$('#page_options').addClass('vela-hidden');
			}
			else{
				$('#page_options').removeClass('vela-hidden');
			}
		});
		$('select#page_template').trigger('change');
	}
	
	$('.vela-meta-box-field #vela_header_layout').bind('change', function(){
		var val = $(this).val();
		if( val == 'v3' || val == 'v5' ){
			$('#vela_header_transparent').parents('.vela-meta-box-field').show();
			$('#vela_header_text_color').parents('.vela-meta-box-field').show();
		}
		else{
			$('#vela_header_transparent').parents('.vela-meta-box-field').hide();
			$('#vela_header_text_color').parents('.vela-meta-box-field').hide();
			$('#vela_header_transparent').val('0');
		}
	});
	$('.vela-meta-box-field #vela_header_layout').trigger('change');
});
/** End Page Template **/

/** Custom Sidebar **/
jQuery(document).ready(function($){
	"use strict";
	
	var add_sidebar_form = $('#vela-form-add-sidebar');
	if( add_sidebar_form.length > 0 ){
		var add_sidebar_form_new = add_sidebar_form.clone();
		add_sidebar_form.remove();
		jQuery('#widgets-right').append('<div style="clear:both;"></div>');
		add_sidebar_form = jQuery('#widgets-right').append(add_sidebar_form_new);
		
		$('#vela-add-sidebar').bind('click', function(e){
			e.preventDefault();
			var sidebar_name = $.trim( $(this).siblings('#sidebar_name').val() );
			if( sidebar_name != '' ){
				$(this).attr('disabled', true);
				var data = {
					action: 'vela_add_custom_sidebar'
					,sidebar_name: sidebar_name
				};
				
				$.ajax({
					type : 'POST'
					,url : ajaxurl	
					,data : data
					,success : function(response){
						window.location.reload(true);
					}
				});
			}
		});
	}
	
	if( $('.sidebar-vela-custom-sidebar').length > 0 ){
		var delete_button = '<span class="delete-sidebar dashicons-before dashicons-trash"></span>';
		$('.sidebar-vela-custom-sidebar .sidebar-name').prepend(delete_button);
		
		$('.sidebar-vela-custom-sidebar .delete-sidebar').bind('click', function(){
			var sidebar_name = $(this).parent().find('h2').text();
			var widget_block = $(this).parents('.widgets-holder-wrap');
			var ok = confirm('Do you want to delete this sidebar?');
			if( ok ){
				widget_block.hide();
				var data = {
					action: 'vela_delete_custom_sidebar'
					,sidebar_name: sidebar_name
				};
				
				$.ajax({
					type : 'POST'
					,url : ajaxurl	
					,data : data
					,success : function(response){
						if( response != '' ){
							widget_block.remove();
						}
						else{
							widget_block.show();
							alert('Cant delete the sidebar. Please try again');
						}
					}
				});
			}
		});
	}
});

/** Product Category **/
jQuery(document).ready(function($){
	"use strict";
	
	/* Only show the "remove image" button when needed */
	$('.vela-product-cat-upload-field').each(function(){
		if( ! $(this).find('.value-field').val() ){
			$(this).find('.remove-button').hide();
		}
	});

	/* Uploading files */
	var file_frame;
	var upload_button;

	$( document ).on( 'click', '.vela-product-cat-upload-field .upload-button', function( event ) {

		event.preventDefault();
		
		upload_button = $(this);

		/* If the media frame already exists, reopen it. */
		if ( file_frame ) {
			file_frame.open();
			return;
		}

		/* Create the media frame. */
		file_frame = wp.media.frames.downloadable_file = wp.media({
			title: 'Choose an image',
			button: {
				text: 'Use image'
			},
			multiple: false
		});

		/* When an image is selected, run a callback. */
		file_frame.on( 'select', function() {
			var attachment = file_frame.state().get( 'selection' ).first().toJSON();
			var thumb_url = attachment.url;
			if( typeof attachment.sizes.thumbnail != 'undefined' ){
				thumb_url = attachment.sizes.thumbnail.url;
			}

			upload_button.siblings('.value-field').val( attachment.id );
			upload_button.parents('.vela-product-cat-upload-field').find('.preview-image img').attr( {'src': thumb_url, 'width': '', 'height': ''} );
			upload_button.siblings('.remove-button').show();
		});

		/* Finally, open the modal. */
		file_frame.open();
	});

	$( document ).on( 'click', '.vela-product-cat-upload-field .remove-button', function() {
		var button = $(this);
		button.parents('.vela-product-cat-upload-field').find('.preview-image img').remove();
		button.parents('.vela-product-cat-upload-field').find('.preview-image').append( '<img src="' + button.siblings('.placeholder-image-url').val() + '" class="woocommerce-placeholder wp-post-image" width="60" height="60" alt="Placeholder" />' );
		button.siblings('.value-field').val('');
		button.hide();
		return false;
	});
	
	if( typeof $.fn.wpColorPicker == 'function' ){
		$('.vela-color-picker').wpColorPicker();
	}
});