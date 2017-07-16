<?php 
$options = array();

$options[] = array(
				'id'		=> 'logo_url'
				,'label'	=> esc_html__('Logo URL', 'bagstore')
				,'desc'		=> ''
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'logo_target'
				,'label'	=> esc_html__('Target', 'bagstore')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
							'_self'		=> esc_html__('Self', 'bagstore')
							,'_blank'	=> esc_html__('New Window Tab', 'bagstore')
						)
			);
?>