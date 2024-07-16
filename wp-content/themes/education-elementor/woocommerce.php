<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package education-elementor
 */

get_header();
?>
<?php
    $sidebar_layout = get_theme_mod('education_elementor_sidebar_layout_section', 'right');
    if ($sidebar_layout == 'left') {
        $sidebar_layout = 'has-left-sidebar';
    } elseif ($sidebar_layout == 'right') {
        $sidebar_layout = 'has-right-sidebar';
    } elseif ($sidebar_layout == 'no') {
        $sidebar_layout = 'no-sidebar';
    }
?>
    <!-- Page Breadcrumb Start -->
    <?php  education_elementor_breadbrumb(); ?>
    <!-- Page Breadcrumb Ends -->

    <?php
    if ( have_posts() ) : ?>

	<!-- blog detail start-->
    <div class="sp-100 bg-w">
        <div class="container">
            <div class="row <?php echo esc_attr($sidebar_layout); ?>">
                
                <?php if( class_exists( 'WooCommerce' ) && is_product() || is_account_page() || is_cart() || is_checkout() || is_shop() || is_page( 'wishlist' )){ ?>
                        <div class="col-lg-12">
                <?php } else if(is_active_sidebar( 'woocommerce-widgets' )){ ?>
                        <div class="col-lg-8">
                <?php } else { ?>
                    <div class="col-lg-12">
                <?php } ?>



                <?php woocommerce_content();?>  

                </div>
                
                    <?php
                    //if (($sidebar_layout == 'has-left-sidebar') || ($sidebar_layout == 'has-right-sidebar') && class_exists( 'WooCommerce') && !is_product() && is_active_sidebar( 'woocommerce-widgets' )) { ?>
                    <?php
                    if (!is_shop() &&  !is_product() ) { ?>
                        <div class="col-lg-4">
    	                    <aside class="sidebar mt-5 mt-lg-0">
    	                        <?php dynamic_sidebar('woocommerce-widgets'); ?>
    	                    </aside>
                    	</div>
                    <?php } ?>    
                
            </div>
        </div>
    </div>
    <!-- blog detail ends-->

<?php 	
endif;
?>		

<?php
get_footer();
