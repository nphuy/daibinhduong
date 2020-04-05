<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div style="margin-top: 20px;" id="product-<?php the_ID(); ?>" <?php wc_product_class( 'container', $product ); ?>>
<div class="bcn">
<?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

	<div class="row">
		<div class="sidebar col-lg-3 col-md-4 col-sm-4">
			<div class="ya_relate_product widget">
				<?php
					woocommerce_related_products();
					// get_template_part( 'template-parts/product-single', 'related' );
				?>
			</div>
			<div class="widget woocommerce_product_tag_cloud-1 woocommerce widget_product_tag_cloud">
				<div class="widget-inner">
					<div class="block-title-widget">
						<h2><span>Product Tags</span></h2>
					</div>
					<div class="tagcloud">
					<?php wp_tag_cloud( array(
						'smallest' => 8, // size of least used tag
						'largest'  => 22, // size of most used tag
						'unit'     => 'px', // unit for sizing the tags
						'number'   => 45, // displays at most 45 tags
						'orderby'  => 'name', // order tags alphabetically
						'order'    => 'ASC', // order tags by ascending order
						'taxonomy' => 'product_cat' // you can even make tags for custom taxonomies
						) ); ?>
					</div>
				</div>
			</div>
		</div>
	<div class="content col-lg-9 col-md-8 col-sm-8 col-xs-12">
	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	//do_action( 'woocommerce_after_single_product_summary' );
	?>
<!-- </div> -->

<?php do_action( 'woocommerce_after_single_product' ); ?>
<div class="clearfix"></div>
<div class="row">	
	<div class="col-lg-12">
		<div class="widget-1 widget-first widget sw_related_upsell_widget-1 sw_related_upsell_widget" data-scroll-reveal="enter bottom move 20px wait 0.2s">
		<div class="widget-inner"></div>
		</div>
	</div>
</div>
<div class="block-title title1">
	<h2><span>Ý KIẾN KHÁCH HÀNG </span></h2>
</div>
<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="10" data-colorscheme="light" data-width="100%"></div>
</div>
</div>