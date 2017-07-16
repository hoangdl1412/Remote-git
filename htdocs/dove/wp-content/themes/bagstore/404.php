<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage bagstore
 * @since 1.0
 * @version 1.0
 */

get_header( $smof_data['vela_header_layout'] ); ?>

<div class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" >

			<section class="error-404 not-found">
				<header class="page-header">
                                        <h1>404</h1>
					<h2 class="page-title"><?php _e( 'Oops! Page Not Found.', 'bagstore' ); ?></h2>
                                        <?php echo sprintf('<p>The page you are looking for was moved, 
                                            removed, renamed or might never existed.</p>
					<a href="%s">Back to homepage</a>'
					, 'bagstore', esc_url( home_url('/') ) ); ?>
				</header><!-- .page-header -->
				<div class="page-content">
					<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
