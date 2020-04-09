<?php
/*
Plugin Name: Custom Widget
Plugin URI: https://halink.vn
Description: Thiết kế website giá rẻ.
Author: Halink
Version: 1.0
Author URI: https://halink.vn
*/
class HNP_Product_Widget extends WP_Widget {

    function __construct() {
        parent::__construct (
            'hnp_product_widget',
            'Home Product Widget',
       
            array(
                'description' => 'Home product widget'
            )
          );
    }

    function form( $instance ) {
        $instance = wp_parse_args( (array) $instance);
        $category = esc_attr($instance['category']);
 
        echo '<p>Chọn danh mục ';
        $cat_args = array(
            'hide_empty' => false,
        );
        $product_categories = get_terms( 'product_cat', $cat_args );
        // var_dump($product_categories);
        echo '<select name="'.$this->get_field_name('category').'">';
        foreach($product_categories as $product_category): ?>
        <option<?=$product_category->term_id == $category ? ' selected="selected"' : ''?> value="<?=$product_category->term_id?>"><?=$product_category->name?></option>
        <?php
        endforeach;
        echo '</select></p>';
 
    }

    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['category'] = $new_instance['category'];
        return $instance;
    }

    function widget( $args, $instance ) {
        extract($args);
        $category_id = $instance['category'];
        $category = get_term_by('id',$category_id, 'product_cat');
        $child_categories = get_term_children( $category_id, 'product_cat' );


        // var_dump($category, $category_id);
    ?>
    <div class="wpb_wrapper">
        <div class="sw-woo-container-slider">
            <div class="block-title  title1">
                <h2><span><a style="text-transform: uppercase;" title="<?=$category->name?>" href="<?=get_term_link($category)?>"><?=$category->name?></a></span></h2>
                <div class="category-wrap-cat">
			        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#<?php echo esc_attr($nav_id); ?>" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-bar"></span>
                    <span class="fa fa-bar"></span>
                    <span class="fa fa-bar"></span>
			        </button>			
                    <ul class="cat-list">
                    <?php foreach($child_categories as $child_category_id):
                        $child_category = get_term( $child_category_id, 'product_cat' );

                    ?>
                        <li class="item">
                            <a style="text-transform: uppercase;" href="<?=get_term_link($child_category_id)?>">
                            <?=$child_category->name?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>					
		</div></div>
        <div class="resp-slider-container sw-woo-container-slider">
            <div class="slider hnp-slider-<?=$category_id?>">
            <?php 
                $args = array( 'post_type' => 'product','posts_per_page' => -1,'product_cat' => $category->slug);
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
                global $product; 
            ?>
            
                <div class="item">
                <div class="item-wrap">
                    <div class="item-detail">
                        <div class="item-img products-thumb">
                            <a href="<?php the_permalink(); ?>" tabindex="0"><?php echo get_the_post_thumbnail(); ?>
                            </a>
                        </div>
                        <div class="item-content">
                            <div class="reviews-content">
                                <div class="star"></div>
                            </div>
                            <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" tabindex="0"><?php the_title(); ?></a></h4>
                            <div class="item-price">
                                <?php echo $product->get_price_html(); ?>
                            </div>
                            <div class="item-bottom-grid clearfix"><a rel="nofollow" href="/?add-to-cart=9395" data-quantity="1" data-product_id="9395" data-product_sku="" class="button button add_to_cart_button ajax_add_to_cart" tabindex="0">Mua hàng</a>
                            <div class="yith-wcwl-add-to-wishlist add-to-wishlist-9395">
                                <div class="yith-wcwl-add-button show" style="display:block">
                                    <a href="/?add_to_wishlist=9395" rel="nofollow" data-product-id="9395" data-product-type="simple" class="add_to_wishlist" tabindex="0">
                                    Add to Wishlist
                                    </a>
                                </div>
                                
                            </div>
                        <div class="clear"></div>
                        </div>
                    </div>
                </div>
                </div>

                </div>
                <!-- //end item -->
                <?php endwhile;wp_reset_query(); ?>
            </div>
        </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.hnp-slider-<?=$category_id?>').slick({
                // dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 5,
                slidesToScroll: 5,
                responsive: [
                    {
                    breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            arrows: false
                        }
                    },
                ]
            });
        });
    </script>
    <?php 
    }
}
add_action( 'widgets_init', 'create_product_widget' );
function create_product_widget() {
    register_widget('HNP_Product_Widget');
}