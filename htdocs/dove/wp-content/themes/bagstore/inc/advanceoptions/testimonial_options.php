<?php 
$options = array();

$options[] = array(
				'id'		=> 'gravatar_email'
				,'label'	=> esc_html__('Gravatar Email Address', 'bagstore')
				,'desc'		=> esc_html__('Enter in an e-mail address, to use a Gravatar, instead of using the "Featured Image". You have to remove the "Featured Image".', 'bagstore')
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'byline'
				,'label'	=> esc_html__('Byline', 'bagstore')
				,'desc'		=> esc_html__('Enter a byline for the customer giving this testimonial (for example: "CEO of Velatemplates").', 'bagstore')
				,'type'		=> 'text'
			);
			
$options[] = array(
				'id'		=> 'url'
				,'label'	=> esc_html__('URL', 'bagstore')
				,'desc'		=> esc_html__('Enter a URL that applies to this customer (for example: http://velatemplates.com/).', 'bagstore')
				,'type'		=> 'text'
			);

?>