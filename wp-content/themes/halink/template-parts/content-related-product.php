<?php 
global $product;

?>
<div class="bs-item cf">
        <div class="bs-item-inner">
                <div class="item-img">
                        <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                        </a>
                </div>
                <div class="item-content">
                        <div class="star"></div>
                        <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                        <p><span class="devvn_woocommerce_price_prefix">Giá chỉ</span>
                        <?php echo $product->get_price_html(); ?>
                        </p>
                </div>
        </div>
</div>