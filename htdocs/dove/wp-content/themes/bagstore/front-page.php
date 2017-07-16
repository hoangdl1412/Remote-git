<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage bagstore
 * @since 1.0
 * @version 1.0
 */

get_header( $smof_data['vela_header_layout'] ); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" >

		<?php // Show the selected frontpage content.
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/page/content', 'front-page' );
			endwhile;
		else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
			get_template_part( 'template-parts/post/content', 'none' );
		endif; ?>

		<?php
		// Get each of our panels and show the post data.
		if ( 0 !== vela_panel_count() || is_customize_preview() ) : // If we have pages to show.

			/**
			 * Filter number of front page sections in bagstore.
			 *
			 * @since bagstore 1.0
			 *
			 * @param $num_sections integer
			 */
			$num_sections = apply_filters( 'vela_front_page_sections', 4 );
			global $velacounter;

			// Create a setting and control for each of the sections available in the theme.
			for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
				$velacounter = $i;
				vela_front_page_section( null, $i );
			}

	endif; // The if ( 0 !== vela_panel_count() ) ends here. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();