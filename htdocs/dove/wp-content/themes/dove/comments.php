<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage dove
 * @since 1.0
 * @version 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
	<span class="comments-title">
		<?php
		$comments_number = get_comments_number();
		if ( '1' === $comments_number ) {
			/* translators: %s: post title */
			printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'dove' ), get_the_title() );
		} else {
			printf(
				/* translators: 1: number of comments, 2: post title */
				_nx(
					'%1$s Reply to &ldquo;%2$s&rdquo;',
					'%1$s Replies to &ldquo;%2$s&rdquo;',
					$comments_number,
					'comments title',
					'dove'
					),
				number_format_i18n( $comments_number ),
				get_the_title()
				);
		}
		?>
	</span>

	<ol class="comment-list">
		<?php
		wp_list_comments( array(
			'avatar_size' => 100,
			'style'       => 'ol',
			'short_ping'  => true,
			'reply_text'  => ftc_get_svg( array( 'icon' => 'mail-reply' ) ) . __( 'Reply', 'dove' ),
			) );
			?>
		</ol>

		<div class="commentPaginate">
			<?php paginate_comments_links( array('prev_text' => '&laquo;', 'next_text' => '&raquo;') ); ?>
		</div>
		<?php

	endif; // Check for have_comments().

	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<p class="no-comments"><?php _e( 'Comments are closed.', 'dove' ); ?></p>
	<?php
	endif;

	comment_form();
	?>

</div><!-- #comments -->
