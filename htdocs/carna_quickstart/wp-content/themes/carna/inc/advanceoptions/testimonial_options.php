<?php 
$options = array();

$options[] = array(
				'id'		=> 'gravatar_email'
				,'label'	=> esc_html__('Gravatar Email Address', 'carna')
				,'desc'		=> esc_html__('Enter in an e-mail address, to use a Gravatar, instead of using the "Featured Image". You have to remove the "Featured Image".', 'carna')
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'byline'
				,'label'	=> esc_html__('Byline', 'carna')
				,'desc'		=> esc_html__('Enter a byline for the customer giving this testimonial (for example: "CEO of ThemeFTC").', 'carna')
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'url'
				,'label'	=> esc_html__('URL', 'carna')
				,'desc'		=> esc_html__('Enter a URL that applies to this customer (for example: http://themeftc.com/).', 'carna')
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'rating'
				,'label'	=> esc_html__('Rating', 'carna')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
						'-1'	=> esc_html__('no rating', 'carna')
						,'0'	=> esc_html__('0 star', 'carna')
						,'0.5'	=> esc_html__('0.5 star', 'carna')
						,'1'	=> esc_html__('1 star', 'carna')
						,'1.5'	=> esc_html__('1.5 star', 'carna')
						,'2'	=> esc_html__('2 stars', 'carna')
						,'2.5'	=> esc_html__('2.5 stars', 'carna')
						,'3'	=> esc_html__('3 stars', 'carna')
						,'3.5'	=> esc_html__('3.5 stars', 'carna')
						,'4'	=> esc_html__('4 stars', 'carna')
						,'4.5'	=> esc_html__('4.5 stars', 'carna')
						,'5'	=> esc_html__('5 stars', 'carna')
				)
			);
?>