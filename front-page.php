<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pawsgang
 */

get_header();
?>
<div class="container my-2">
	<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="<?php echo get_template_directory_uri().'/img/banner.jpg'?>" class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="<?php echo get_template_directory_uri().'/img/banner_5.jpg'?>" class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="<?php echo get_template_directory_uri().'/img/banner_6.jpg'?>" class="d-block w-100" alt="...">
	    </div>
	  </div>
	  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Previous</span>
	  </button>
	  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Next</span>
	  </button>
	</div>

	<!-- CATEGORY SECTION -->
	<main id="primary" class="site-main px-4 px-sm-0 mt-3">
		<div id="popular_products">
			<div class="img_with_category">
				<h3 class="text-center text-decoration-underline bg-light"><img src="<?php echo get_template_directory_uri(). '/img/category.jpg'?>"><span>OUR CATEGORIES</span></h3>
			</div>
		</div>
		<div class="categories text-center">
			<div class="row justify-content-center">
				<?php 
					$categories = get_categories(array(
						'taxonomy'=>'product_cat',
						'hide_empty'      => false,
					));
					foreach ($categories as $category) {
						$thumbnail_id = get_woocommerce_term_meta( $category->cat_ID, 'thumbnail_id', true );
						$image = wp_get_attachment_url( $thumbnail_id );
						?>
						<a href="" class="col-4 col-md-2 col-sm-3 p-2 m-2 bg-info text-primary"><img class="" src="<?php echo $image; ?>"><span class="text-white"><?php echo $category->name; ?></span></a>
						<?php 
					}
				?>
			</div>
		</div>
	</main>

	<!-- POPULAR PRODUCT SECTION -->

	<main id="primary" class="site-main px-4 px-sm-0 mt-3">
		<?php 
				$thumbnail_id = get_woocommerce_term_meta( 43, 'thumbnail_id', true );
				$image = wp_get_attachment_url( $thumbnail_id );
		?>
		<div id="popular_products">
			<div>
				<h3 class="text-center bg-light"><img src="<?php echo $image; ?>"><span>Popular Products</span></h3>
			</div>
		</div>
		<div class="popular_products text-center mt-4">
			<?php echo do_shortcode( '[products category="popular" cat_operator="AND"]' ) ?>
		</div>
	</main>


	<main id="primary" class="site-main px-4 px-sm-0 mt-3">
		<?php 
				$thumbnail_id = get_woocommerce_term_meta( 44, 'thumbnail_id', true );
				$image = wp_get_attachment_url( $thumbnail_id );
		?>
		<div id="popular_products bg-light">
			<div>
				<h3 class="text-center bg-light"><img src="<?php echo $image; ?>"><span>Special Offers</span></h3>
			</div>
		</div>
		<div class="popular_products text-center mt-4">
			<?php echo do_shortcode( '[products category="special" cat_operator="AND"]' ) ?>
		</div>
	</main>

</div>
<?php
get_footer();
