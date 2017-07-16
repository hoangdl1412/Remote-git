<?php 
$options = array();

$options[] = array(
				'id'		=> 'gravatar_email'
				,'label'	=> esc_html__('Gravatar Email Address', 'daniel')
				,'desc'		=> esc_html__('Enter in an e-mail address, to use a Gravatar, instead of using the "Featured Image". You have to remove the "Featured Image".', 'daniel')
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'byline'
				,'label'	=> esc_html__('Byline', 'daniel')
				,'desc'		=> esc_html__('Enter a byline for the customer giving this testimonial (for example: "CEO of ThemeFTC").', 'daniel')
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'url'
				,'label'	=> esc_html__('URL', 'daniel')
				,'desc'		=> esc_html__('Enter a URL that applies to this customer (for example: http://themeftc.com/).', 'daniel')
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'rating'
				,'label'	=> esc_html__('Rating', 'daniel')
				,'desc'		=> ''
				,'type'		=> 'select'
				,'options'	=> array(
						'-1'	=> esc_html__('no rating', 'daniel')
						,'0'	=> esc_html__('0 star', 'daniel')
						,'0.5'	=> esc_html__('0.5 star', 'daniel')
						,'1'	=> esc_html__('1 star', 'daniel')
						,'1.5'	=> esc_html__('1.5 star', 'daniel')
						,'2'	=> esc_html__('2 stars', 'daniel')
						,'2.5'	=> esc_html__('2.5 stars', 'daniel')
						,'3'	=> esc_html__('3 stars', 'daniel')
						,'3.5'	=> esc_html__('3.5 stars', 'daniel')
						,'4'	=> esc_html__('4 stars', 'daniel')
						,'4.5'	=> esc_html__('4.5 stars', 'daniel')
						,'5'	=> esc_html__('5 stars', 'daniel')
				)
			);
?>