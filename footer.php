<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Andy Bassford
 */
?>

	</div><!-- #content -->

	<nav id="site-navigation" class="main-navigation" role="navigation">
		<a class="ac-NavAnchor ac-NavAnchor--top" href="#top"><b class="u-lVisuallyHidden">top</b></a>
		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	</nav><!-- #site-navigation -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'andy-bassford' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'andy-bassford' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'andy-bassford' ), 'Andy Bassford', '<a href="http://jeffmacaluso.com" rel="designer">Jeff Macaluso</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
