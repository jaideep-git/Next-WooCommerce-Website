<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NextTheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'next' ); ?></a>

	<div class="top-bar">
        <div class="grid-container top-bar">
            <div class="social-icons">
                <i class="fab fa-facebook icon"></i>
                <i class="fab fa-twitter icon"></i>
                <i class="fab fa-instagram icon"></i>
                <i class="fab fa-pinterest-p icon"></i>
            </div>
            <div class="account-info">
                <h6>My account</h6>
                <h6>Wishlist</h6>
            </div>
        </div>
	</div>

	<header id="masthead" class="site-header">
        <div class="grid-container top-bar" id="navbar">
            <div class="logo">
                <?php the_custom_logo(); ?>
            </div>
            <div class="search-bar">
                <ul class="menu-bar">
                    <li><input type="search" placeholder="Search" id="input-bar"></li>
                    <li><button type="button" class="button" id="search-btn"><i class="fa fa-search"></i></button></li>
                </ul>
                <i class="fas fa-shopping-cart cart-icon"></i>
            </div>
        </div>
        <nav id="site-navigation" class="main-navigation">
            <div class="grid-container">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                    )
                );
                ?>
            </div>
		</nav><!-- #site-navigation -->


		
	</header><!-- #masthead -->
