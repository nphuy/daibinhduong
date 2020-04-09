<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

<div class="widget-inner">
    <div class="carousel slide sw-related-product block" data-ride="carousel" data-interval="3000">
        <div class="block-title title1">
            <h2>
				<span>sản phẩm cùng loại</span>
			</h2>
			<div class="customNavigation nav-left-product">
				<a title="Previous" class="btn-bs prev-bs fa fa-angle-left" href="#" role="button" data-slide="prev"></a>
				<a title="Next" class="btn-bs next-bs fa fa-angle-right" href="#" role="button" data-slide="next"></a>
			</div>
    	</div>
	<div class="carousel-inner">
		
		<?php woocommerce_product_loop_start(); ?>

			<?php foreach ( $related_products as $index=> $related_product ) : ?>
				<?php if($index%4 == 0):
				?>
				<div class="item active">
				<?php endif; ?>

				<?php if(($index +1) % 4 == 0):
				?>
				</div>
				<?php endif; ?>
				
					<?php
					$post_object = get_post( $related_product->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

					get_template_part( 'template-parts/content-related', 'product' );
					?>

			<?php endforeach; ?>

		<?php woocommerce_product_loop_end(); ?>

		</div>
	<?php
endif;

wp_reset_postdata();
?>
</div>
</div>