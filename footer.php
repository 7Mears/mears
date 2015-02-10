<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Mears
 */
?>

	</div><!-- #content -->

<footer class="site-footer">
	<?php if ( is_active_sidebar( 'footer' ) ) : ?>
	<div class="footer-widget">
		<?php dynamic_sidebar( 'footer' ); ?>
	</div><!-- #footer-widget -->
	<?php endif; ?>
</footer>

</div><!-- #nav wrapper -->

<nav id="site-navigation" class="main-navigation">
	<?php if ( is_active_sidebar( 'navigation' ) ) : ?>
	<div class="navigation-widget">
		<?php dynamic_sidebar( 'navigation' ); ?>
	</div><!-- #footer-widget -->
	<?php endif; ?>
</nav><!-- #site-navigation -->
<?php wp_footer(); ?>
<?php include_once("analyticstracking.php") ?>
</body>
</html>
