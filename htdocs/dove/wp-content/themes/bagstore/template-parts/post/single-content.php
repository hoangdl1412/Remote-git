<?php 
global $post, $wp_query, $smof_data;
$post_format = get_post_format(); /* Video, Audio, Gallery, Quote */
$post_class = 'post-item hentry ';
$show_blog_thumbnail = $smof_data['vela_blog_thumbnail'];
?>
<article <?php post_class($post_class) ?>>

	<?php if( $post_format != 'quote' ): ?>
	
		<header class="entry-format">
			<?php 
			
			if( $show_blog_thumbnail ){
			
				if( $post_format == 'gallery' || $post_format === false || $post_format == 'standard' ){
				?>
					<a class="single-featured-image-header thumbnail <?php echo esc_attr($post_format); ?> <?php echo ($post_format == 'gallery')?'loading':''; ?>" href="<?php the_permalink() ?>">
					
						<?php 
							if( $post_format == 'gallery' ){
								$gallery = get_post_meta($post->ID, 'vela_gallery', true);
								$gallery_ids = explode(',', $gallery);
								if( is_array($gallery_ids) && has_post_thumbnail() ){
									array_unshift($gallery_ids, get_post_thumbnail_id());
								}
								foreach( $gallery_ids as $gallery_id ){
									echo wp_get_attachment_image( $gallery_id, 'vela_blog_thumb', 0, array('class' => 'thumbnail-blog') );
								}
								
								if( !has_post_thumbnail() && empty($gallery) ){ /* Fix date position */
									$show_blog_thumbnail = 0;
								}
							}
						
							if( $post_format === false || $post_format == 'standard' ){
								if( has_post_thumbnail() ){
									the_post_thumbnail('vela_blog_thumb', array('class' => 'thumbnail-blog'));
								}
								else{ /* Fix date position */
									$show_blog_thumbnail = 0;
								}
							}
						?>
						
						<div class="image-eff"></div>
					</a>
				<?php
				}
				
				if( $post_format == 'video' ){
					$video_url = get_post_meta($post->ID, 'vela_video_url', true);
					if( $video_url != '' ){
						echo do_shortcode('[vela_video src="'.esc_url($video_url).'"]');
					}
				}
				
				if( $post_format == 'audio' ){
					$audio_url = get_post_meta($post->ID, 'vela_audio_url', true);
					if( strlen($audio_url) > 4 ){
						$file_format = substr($audio_url, -3, 3);
						if( in_array($file_format, array('mp3', 'ogg', 'wav')) ){
							echo do_shortcode('[audio '.$file_format.'="'.$audio_url.'"]');
						}
						else{
							echo do_shortcode('[vela_soundcloud url="'.$audio_url.'" width="100%" height="166"]');
						}
					}
				}
									
			}
			?>
                    <!-- Blog Date -->
			<?php if( $smof_data['vela_blog_date'] && ( !$show_blog_thumbnail || ( $post_format != 'gallery' && $post_format !== false && $post_format != 'standard' ) ) ) : ?>
			<div class="date-time">
				<span><?php echo get_the_time('d'); ?></span>
				<span><?php echo get_the_time('M'); ?></span>
			</div>
			<?php endif; ?>
		</header>
		<div class="entry-content">
			
			<div class="entry-info">
				<!-- Blog Title -->
				<?php if( $smof_data['vela_blog_title'] ): ?>
				<h3 class="title_sub entry-title">
					<a class="post-title title_sub" href="<?php the_permalink() ; ?>"><?php the_title(); ?></a>
				</h3>
				<?php endif; ?>
				<div class="info-category">
                                        <!-- Blog Date -->
                                        <?php if( $smof_data['vela_blog_date'] && $show_blog_thumbnail && ( $post_format == 'gallery' || $post_format === false || $post_format == 'standard' ) ): ?>
                                        <div class="date-time">
                                                <span><?php echo get_the_time('d'); ?></span>
                                                <span><?php echo get_the_time('M'); ?></span>
                                                <span><?php echo get_the_time('Y'); ?></span>
                                        </div>
                                        <?php endif; ?>
                                        
                                        <?php 
                                                $categories_list = get_the_category_list(', ');
                                                if ( ($categories_list && $smof_data['vela_blog_categories']) || $smof_data['vela_blog_author'] ): 
                                        ?>
                                                <!-- Blog Categories -->
                                                <?php if ( $categories_list && $smof_data['vela_blog_categories'] ): ?>
                                                <div class="cavela-link">
                                                        <span class="cat-links"><?php echo trim($categories_list); ?></span>
                                                </div>
                                                <?php endif; ?>

                                                <!-- Blog Author -->
                                                <?php if( $smof_data['vela_blog_author'] ): ?>
                                                <span class="vcard author"><?php the_author_posts_link(); ?></span>
                                                <?php endif; ?>	
                                        <?php endif; ?>
                                                
                                        <!-- Blog Comment -->
					<?php if( $smof_data['vela_blog_comment'] ): ?>
					<span class="comment-count">
						<i class="fa fa-comments-o"></i>
						<span class="number">
							<?php 
							$comments_count = wp_count_comments($post->ID); 
							$comment_number = $comments_count->approved;
							if( $comment_number > 0 ){
								echo zeroise($comment_number, 2); 
							}else{
								echo esc_html($comment_number); 
							} 
							?> Comments
						</span>
					</span>
					<?php endif; ?>
                                        
                                </div>
				<div class="entry-summary">
					<!-- Blog Excerpt -->
					<?php if( $smof_data['vela_blog_excerpt'] ): ?>
					<div class="short-content">
						<?php 
						$max_words = (int)$smof_data['vela_blog_excerpt_max_words']?(int)$smof_data['vela_blog_excerpt_max_words']:125;
						$strip_tags = $smof_data['vela_blog_excerpt_strip_tags']?true:false;
						vela_the_excerpt_max_words($max_words, $post, $strip_tags, '', true); 
						?>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
		
	<?php else: /* Post format is quote */ ?>
	
		<blockquote class="blockquote-bg">
			<?php 
			$quote_content = get_the_excerpt();
			if( !$quote_content ){
				$quote_content = get_the_content();
			}
			echo do_shortcode($quote_content);
			?>
		</blockquote>
		
		<div class="blockquote-meta">
			<!-- Blog Date -->
			<?php if( $smof_data['vela_blog_date'] ): ?>
			<span class="date-time">
				<i class="fa fa-calendar"></i>
				<?php echo get_the_time( get_option('date_format')); ?>
			</span>
			<?php endif; ?>
			
			<!-- Blog Author -->
			<?php if( $smof_data['vela_blog_author'] ): ?>
			<span class="vcard author"><?php the_author_posts_link(); ?></span>
			<?php endif; ?>	
		</div>
		
	<?php endif; ?>
	
</article>
<!-- Related Posts-->
<?php 
    if( !is_singular('vela_feature') && $smof_data['vela_blog_details_related_posts'] ){
        get_template_part('template-parts/post/related-posts');
    }
?>