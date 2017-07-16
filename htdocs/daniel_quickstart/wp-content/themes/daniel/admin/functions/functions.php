<?php 
function ftc_before_save_of_data_filter( $data ){
	global $smof_data;
	if( isset($smof_data['ftc_color_scheme'], $data['ftc_color_scheme']) && $smof_data['ftc_color_scheme'] != $data['ftc_color_scheme'] ){
		/* Load xml file */
		$color_name = $data['ftc_color_scheme'];
		$xml_folder = get_template_directory() . '/admin/color_xml/';
		$file_path = $xml_folder . $color_name . '.xml';
		if( file_exists($file_path) ){
			$obj_xml = simplexml_load_file( $file_path );
			foreach($obj_xml->children() as $child ){
				if( isset($child->name, $child->value) ){
					$name = (string)$child->name;
					$value = (string)$child->value;
					if( isset($data[$name]) ){
						$data[$name] = $value;
					}
				}
			}
		}
	}
	
	return $data;
}
add_filter('of_options_before_save', 'ftc_before_save_of_data_filter', 10, 1);
?>