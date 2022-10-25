<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pawsgang
 */

?>


	
<footer class="bg-info">
	<div class="container py-4">
		<div class="row text-dark">
			<div class="col-12 col-sm-4 text-center text-sm-start">
				<?php dynamic_sidebar( 'footer-widget-one' );  ?>
			</div>
			<div class="col-12 col-sm-4 text-center text-sm-center">
				<?php dynamic_sidebar( 'footer-widget-two' );  ?>
			</div>
			<div class="col-12 col-sm-4 text-center text-sm-end">
				<?php
				 dynamic_sidebar( 'footer-widget-three' );
				?>
			</div>
		</div>		
	</div>
</footer>

<footer class="bg-light">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-4">
				&copy;<?php echo bloginfo( 'name' );?><?php echo ' '.date( 'Y' );?>
			</div>
			<div class="col-8 text-end">
				<img class="w-50" src="<?php echo get_template_directory_uri(). '/img/payment.png'; ?>">
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
