<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Daniel
 * @since 1.0
 * @version 1.0
 */

?>
<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_html_e( 'Primary Menu', 'daniel' ); ?>">
    <?php wp_nav_menu( array(
		'theme_location' => 'primary',
		'menu_id'        => 'primary-menu',
	) ); ?>
</nav><!-- #site-navigation -->
