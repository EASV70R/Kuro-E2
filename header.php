<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KuroE
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<header id="masthead" class="site-header">

		<div class="container pt-2 pb-2">

			<div class="row align-items-center">
	
				<div class="col site-header__logo d-flex justify-content-center justify-content-md-start">
					<!-- <?php the_custom_logo(); ?> -->
					<a href="<?php echo get_home_url(); ?>" class="navbar-brand">
						<img class="logo" width=75% height="72px" src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.svg">
					</a> <!-- brand end.// -->
				</div>

				<div class="col-sm-12 col-md-5">
					<?php if ( function_exists( 'aws_get_search_form' ) ) { aws_get_search_form(); } ?>
				</div>

				<div class="col cart d-flex justify-content-center justify-content-md-end align-items-center pt-2">
					<a href="<?php echo wc_get_cart_url(); ?>"><i class="bi bi-bag-dash p-2"></i></a>
					<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
					<?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); 
					?> – <?php echo WC()->cart->get_cart_total(); ?></a>
				</div>

			</div>

		</div>

		<nav class="navbar navbar-light bg-white border-top border-bottom navbar-expand-lg">
		<div class="container">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" ria-controls="navbarSupportedContent" aria-expanded="false"
                ria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php wp_nav_menu(array(
            "theme_location" => "menu-1",
            'depth'           => 1,
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'navbarSupportedContent',
            'menu_class'      => 'navbar-nav mr-auto',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
            
            )); 
          ?>
		</div> <!-- container end.// -->
	</nav> <!-- navbar end.// -->



		



	</header><!-- #masthead -->
