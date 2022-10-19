<?php if ( true == get_theme_mod( 'category_switch_setting', 'on' ) ) : ?>
	<!--shop category start-->
    <section class="space-3">
        <div class="container sm-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="title"><?php echo get_theme_mod( 'Ecom_text_setting' ) ?></h2>
                    </div>
                </div>

                <div class="col-md-12">
                    <?php echo do_shortcode('[product_categories columns=3]'); ?>
                </div>
            </div>
        </div>
    </section>
    <!--shop category end-->
<?php endif; ?>

