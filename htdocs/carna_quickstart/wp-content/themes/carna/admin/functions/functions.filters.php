<?php

/**
 * SMOF Option filters
 *
 * @package     WordPress
 * @subpackage  SMOF
 * @since       1.4.0
 * @author      Jonah Dahlquist
 */

/**
 * Filter URLs from uploaded media fields and replaces them with keywords.
 * This is to keep from storing the site URL in the database to make
 * migrations easier.
 * 
 * @since 1.4.0
 * @param $data Options array
 * @return array
 */
function of_filter_save_media_upload($data) {

    if(!is_array($data)) return $data;
	
    foreach ($data as $key => $value) {
        if (is_string($value)) {
            $data[$key] = str_replace(
                array(
                    site_url('', 'http'),
                    site_url('', 'https'),
                ),
                array(
                    '[site_url]',
                    '[site_url_secure]',
                ),
                $value
            );
        }
    }

    return $data;
}
add_filter('of_options_before_save', 'of_filter_save_media_upload');

/**
 * Filter URLs from uploaded media fields and replaces the site URL keywords
 * with the actual site URL.
 * 
 * @since 1.4.0
 * @param $data Options array
 * @return array
 */
function of_filter_load_media_upload($data) {
    
    if(!is_array($data)) return $data;
	
    foreach ($data as $key => $value) {
        if (is_string($value)) {
            $data[$key] = str_replace(
                array(
                    '[site_url]', 
                    '[site_url_secure]',
                ),
                array(
                    site_url('', 'http'),
                    site_url('', 'https'),
                ),
                $value
            );
        }
    }

    return $data;
}
add_filter('of_options_after_load', 'of_filter_load_media_upload');

/* Fix URL Background Image */
function ftc_filter_load_background_image( $bg_url ){
	if( is_string($bg_url) ){
		$bg_url = str_replace(
					array(
						'[site_url]', 
						'[site_url_secure]',
					),
					array(
						site_url('', 'http'),
						site_url('', 'https'),
					),
					$bg_url
				);
	}
	return $bg_url;
}
add_filter('theme_mod_background_image', 'ftc_filter_load_background_image');

/* Allow upload font files */
if( is_admin() ){
	global $pagenow;
	if( $pagenow == 'themes.php' && isset($_GET['page']) && $_GET['page'] == 'optionsframework' ){
		add_filter('upload_mimes', 'ftc_allow_upload_font_files');
		function ftc_allow_upload_font_files( $existing_mimes = array() ){
			$existing_mimes['ttf'] = 'font/ttf';
			$existing_mimes['woff'] = 'font/woff';
			$existing_mimes['svg'] = 'font/svg';
			$existing_mimes['eot'] = 'font/eot';
			return $existing_mimes;
		}
	}
}