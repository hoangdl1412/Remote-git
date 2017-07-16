<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage dove
 * @since 1.0
 * @version 1.0
 */

?>
<nav id="site-navigation" class="main-navigation" aria-label="<?php _e( 'Primary Menu', 'dove' ); ?>">
	<?php wp_nav_menu( array(
		'theme_location' => 'primary',
		'menu_id'        => 'primary-menu',
	) ); ?>
</nav><!-- #site-navigation -->
