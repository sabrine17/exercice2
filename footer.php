<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-sc
 */

?>

	<footer id="colophon" class="site-footer">
		
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'theme-sc' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				//printf( esc_html__( 'Proudly powered by %s', 'theme-sc' ), 'WordPress' );
				?>
			</a>
			
				
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<div class="footer">
	<h2> Collège de Maisonneuve </h2>
		</div>	
<?php wp_footer(); ?>

</body>
</html>
