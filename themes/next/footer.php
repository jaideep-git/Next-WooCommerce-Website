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
				<img src="<?php echo get_template_directory_uri() . '/assets/img/logo.png'?>" alt="..">
				<div class="footer-info"> <i class="fa fa-phone footer-icon"></i><p>1800-000-000</p></div>
				<div class="footer-info"> <i class="fa fa-envelope footer-icon"></i><p>info@instantgroceries.com</p></div>
				<div class="social-icons">
          <i class="fab fa-facebook icon"></i>
          <i class="fab fa-twitter icon"></i>
          <i class="fab fa-instagram icon"></i>
          <i class="fab fa-pinterest-p icon"></i>
        </div>
			</div>

			<div class="cell large-3 coloumn">
				<h4 class="footer-head">About Us</h4>
				<ul>
					<li>Privacy Policy</li>
					<li>Refund & Return Policy</li>
					<li>Contact Us</li>
					<li>Blog</li>
					<li>Careers</li>
				</ul>
			</div>

			<div class="cell large-3 coloumn">
				<h4 class="footer-head">My Account</h4>
					<ul>
						<li>My Orders</li>
						<li>Wishlist</li>
						<li>Return or Refund</li>
						<li>Shopping Cart</li>
						<li>Payments</li>
					</ul>
			</div>

			<div class="cell large-3 coloumn">
				<h4 class="footer-head">Our Store Locations</h4>
					<ul>
						<li>Torronto</li>
						<li>Oshawa</li>
						<li>Brampton</li>
						<li>Kitchner</li>
						<li>Miississauga</li>
					</ul>
			</div>

			
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
