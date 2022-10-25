<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pawsgang
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
	
			<div class="row text-center bg-info bg-gradient">
				<div class="col-lg-4 d-md-flex justify-content-around">
					<a href="" class="m-1"><i class="bi bi-telephone rounded px-1"></i><span>01814418723</span></a>
					<a href="" class="m-1"><i class="bi bi-envelope rounded px-1"></i><span>mamoon@gmail.com</span></a>
				</div>
				<div class="col-lg-8 d-md-flex justify-content-around">
					<a href="" class="m-1"><i class="bi bi-truck rounded px-1"></i><span>Free Shipping</span></a>
					<a href="" class="m-1"><i class="bi bi-alarm rounded px-1"></i><span>30 Days Moneyback Guarentee</span></a>
					<a href="" class="m-1"><i class="bi bi-tools rounded px-1"></i><span>24/7 Days Services</span></a>
				</div>				  
			</div>
			<div id="top" class="row position-sticky top-0 align-items-center justify-content-between px-4 px-sm-0 bg-light pt-2">
				<div class="col-lg-3 text-center">
					<a href=""><?php the_custom_logo(); ?></a>
				</div>
				<div class="col-lg-6 col-sm-8 d-sm-block mx-auto">
					<?php aws_get_search_form( true ); ?>
				</div>
				<div class="col-lg-3 text-center">
					<i class="bi bi-bag"></i>
					<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( '<h4>View Your Cart</h4>' ); ?>">
						<?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?>
					</a>
				</div>
				<header id="masthead" class="site-header">
					<nav id="site-navigation" class="main-navigation my-2 py-2 d-flex justify-content-center">
						<div class="container d-flex justify-content-center">
							<div class="row w-100">
							<div class="col-12 d-flex justify-content-center">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'pawsgang' ); ?></button>
							</div>
							<div class="col-12 text-center">
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'primary-menu',
										)
									);
								?>
							</div>		
						</div>
						</div>
					</nav>
				</header>
			</div>
	


	
