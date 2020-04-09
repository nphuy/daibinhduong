<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="products-wrapper">
            <div class="listing-title">
                <h1><span><?=single_term_title()?></span></h1>
            </div>
            <?php 
            // var_dump(get_queried_object_id());
            $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
                // var_dump($paged);
                $args = array(
                    'paged'=>$paged,
                    'post_status' => 'publish',
                    'post_type'=>'product',
                    'tax_query' => array(
                         'taxonomy' => 'product_cat',
                         'field'    => 'term_id',
                         'terms'     =>  [get_queried_object_id()], // When you have more term_id's seperate them by komma.
                         'operator'  => 'IN'
                         )
                );
                $order_by = isset($_GET['hover']) && !empty($_GET['orderby']) ? $_GET['orderby'] : "";
                switch ($order_by){
                    case 'price':
                        $args['orderby'] = 'meta_value_num';
                        $args['meta_key'] = '_price';
                        $args['order'] = 'desc';
                        break;

                    case 'rating':
                        $args['orderby'] = 'meta_value_num';
                        $args['meta_key'] = '_wc_average_rating';
                        $args['order'] = 'desc';
                        break;
    
                    case 'popularity':
                        $args['orderby'] = 'meta_value_num';
                        $args['meta_key'] = 'total_sales';
                        $args['order'] = 'desc';
                        break;
                }
                global $the_query;
                $the_query = new WP_Query($args);
                
                ?>
            <?php 
                get_template_part( 'template-parts/content-product_cat', 'nav' );
            ?>
            <div class="clear"></div>
            <ul class="products-loop row grid clearfix">
            <?php
                while($the_query->have_posts()): $the_query->the_post();
                global $product;
                ?>
                <li class="col-lg-3 col-md-4 col-sm-6">
                    <?php 
                        get_template_part( 'template-parts/content-product_cat', 'item' );
                    ?>
                </li>
                <?php 
                // echo get_the_title();
                endwhile;
                // woo_pagination();
        
        wp_reset_postdata();

            ?>
            </ul>
        </div>
    </main>
</div>
<script>
jQuery(document).ready(function($){
    $('.view-mode-wrap li').click(function(){
        $('.view-mode-wrap li').removeClass('sel');
        let hnp = $(this);
        hnp.addClass('sel');
        $('.products-loop').fadeOut(1000);
        $('.products-loop').fadeIn();
        setTimeout(function(){
            $('.products-loop').removeClass('grid');
            $('.products-loop').removeClass('list');
            let type = hnp.data('type');
            $('.products-loop').addClass(type);
        }, 1000);
        
        
        
        

    });
    $('.order-dropdown').hover(function(){
        $(this).find('ul').show();
    }, function(){
        $(this).find('ul').hide();
    });
});
</script>