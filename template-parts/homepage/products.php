 <!--product section start-->
 <?php 
  if( get_theme_mod( 'products_switch_setting', 'on' )==true ):
 ?>
 <section class="space-3 space-adjust">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8">
                    <div class="section-title text-center">
                        <h2 class="title "><?php echo get_theme_mod( 'product_text_setting', __( 'New Arrivals', 'kirki' ) ) ?></h2>
                        <div class="sub-title">
                            <?php echo get_theme_mod( 'product_sub_text_setting', __( '37 New fashion products arrived recently in our showroom for this winter', 'kirki' ) ); ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <?php echo do_shortcode("[products columns=4]"); ?>
                    <a href="#" class="view-all-product mt-md-5">View All Products</a>
                </div>

            </div>
        </div>
    </section>
    <?php 
    endif;
    ?>
    <!-- product section end-->