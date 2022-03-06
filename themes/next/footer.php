<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NextTheme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="grid-container grid-x">
			<div class="cell large-3 coloumn1">
			<?php the_custom_logo(); ?>
				<?php dynamic_sidebar( 'footer Widget 1' );?>
				<?php dynamic_sidebar( 'social-media-links' );?>
			</div>

			<div class="cell large-3 coloumn">
				<?php dynamic_sidebar( 'footer Widget 2' );?>
			</div>

			<div class="cell large-3 coloumn">
				<?php dynamic_sidebar( 'footer Widget 3' );?>
			</div>

			<div class="cell large-3 coloumn">
				<?php dynamic_sidebar( 'footer Widget 4' );?>
			</div>
		</div>
		<p class="text-center footer-copyright"> &copy; Created by a <a href="http://jaideep.ca" target="_blank">Jaideep.</a></p>
	</footer>

<?php wp_footer();?>

</body>
</html>
