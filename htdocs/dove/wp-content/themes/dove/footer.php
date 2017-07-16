<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage dove
 * @since 1.0
 * @version 1.0
 */

?>

</div><!-- #content -->
<div class="container top-footer">
	<?php
	if ( is_active_sidebar( 'footer-top' ) ) { ?>
	<div class="widget-column footer-top">
		<?php dynamic_sidebar( 'footer-top' ); ?>
	</div>
	<?php } ?>
</div>  
<footer id="colophon" class="site-footer">
	<?php
	get_template_part( 'template-parts/footer/footer', 'widgets' );
	?>
</footer><!-- #colophon -->
</div><!-- .site-content-contain -->
</div><!-- #page -->

<?php 
global $smof_data;
if( ( !wp_is_mobile() && $smof_data['ftc_back_to_top_button'] ) || ( wp_is_mobile() && $smof_data['ftc_back_to_top_button_on_mobile'] ) ): 
	?>
<div id="to-top" class="scroll-button">
	<a class="scroll-button" href="javascript:void(0)" title="<?php esc_html_e('Back to Top', 'dove'); ?>"><?php esc_html_e('Back to Top', 'dove'); ?></a>
</div>
<?php endif; ?>
<?php wp_footer(); ?>

</body>
</html>
