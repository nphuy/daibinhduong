<?php 
    global $product;
?>
<div class="products-entry clearfix">
        <div class="products-thumb">
                <?php if($product->is_on_sale()): ?>
                <span class="onsale">Giảm giá!</span>
                <?php endif; ?>
                <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
                </a>
        </div>
        <div class="products-content">
                <div class="reviews-content">
                        <div class="star"></div>
                </div>
                <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> <?php the_title(); ?> </a></h4>
                <div class="item-price">
                        <span>
					<span class="devvn_woocommerce_price_prefix">Giá chỉ</span>          
                        <?=$product->get_price_html()?>
                    </span>
                </div>
                <div class="desc std">
                </div>
                <div class="item-bottom clearfix">
                        <a href="<?php the_permalink(); ?>" data-quantity="1" class="button product_type_simple" data-product_id="8757"
                        data-product_sku="" aria-label="Đọc thêm về “<?php the_title(); ?>”" rel="nofollow"><span>Mua hàng</span></a>
                        
                        <div class="clear"></div>
                </div>
        </div>
</div>