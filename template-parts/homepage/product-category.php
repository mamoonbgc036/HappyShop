<?php 
if ( true == get_theme_mod( 'category_switch_setting', 'on' ) ) :
?>
	<!--shop category start-->
    <section class="space-3">
        <div class="container sm-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2 class="title"><?php echo get_theme_mod( 'category_text_setting', __('Shop By Category','kirki') ); ?></h2>
                    </div>
                </div>

                <div class="col-md-12">
                    <?php 
                        $cat_col_num = get_theme_mod( 'category_col_num_setting',3 );
                        echo do_shortcode("[product_categories columns={$cat_col_num}]"); 
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!--shop category end-->
<?php endif; ?>

