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

	<div class="main-navigation">
		<nav id="site-navigation" role="navigation">
			<a class="ac-NavAnchor ac-NavAnchor--top" href="#top"><b class="u-lVisuallyHidden">top</b></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>
	</div><!-- #site-navigation -->

	<div class="site-footer">
		<footer id="colophon" role="contentinfo">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'andy-bassford' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'andy-bassford' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'andy-bassford' ), 'Andy Bassford', '<a href="http://jeffmacaluso.com" rel="designer">Jeff Macaluso</a>, Webmaster to the Stars' ); ?>
			</div><!-- .site-info -->
		</footer>
	</div><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
