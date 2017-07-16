<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Daniel
 * @since 1.0
 * @version 1.0
 */

get_header( $smof_data['ftc_header_layout'] ); ?>

<div class="container">

	<header class="page-header">
		<?php if ( have_posts() ) : ?>
            <h1 class="page-title"><?php echo esc_html__( 'Search Results for:', 'daniel' ). get_search_query();?></h1>
		<?php else : ?>
			<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'daniel' ); ?></h1>
		<?php endif; ?>
	</header><!-- .page-header -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" >

		<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/post/content', 'excerpt' );

			endwhile; // End of the loop.

			the_posts_pagination( array(
					'prev_text' => ftc_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous page', 'daniel' ) . '</span>',
					'next_text' => '<span class="screen-reader-text">' . __( 'Next page', 'daniel' ) . '</span>' . ftc_get_svg( array( 'icon' => 'arrow-right' ) ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'daniel' ) . ' </span>',
				) );


		else : ?>

			<p><?php esc_attr( 'Sorry, but nothing matched y<?php _e(our search terms. Please try again with some different keywords.', 'daniel' ); ?></p>
			<?php
				get_search_form();

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .container -->

<?php get_footer();
