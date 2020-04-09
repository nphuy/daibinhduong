<?php 
global $the_query;
?>
<div class="products-nav">
        <div class="woocommerce-notices-wrapper"></div>
        <ul class="view-mode-wrap">
                <li class="view-grid sel" data-type="grid">
                    <a></a>
                </li>
                <li class="view-list" data-type="list">
                    <a></a>
                </li>
        </ul>
        <?php 
            $sorts = [
                'menu_order'=>'Sort by Default',
                'popularity'=>'Sort by Popularity',
                'rating'=>'Sort by Rating',
                'date'=>'Sort by Date',
                'price'=>'Sort by Price'

            ];
        ?>
        <div class="catalog-ordering clearfix">
            <div class="orderby-order-container">
                <ul class="orderby order-dropdown">
                    <li><span class="current-li"><span class="current-li-content"><a><?=isset($_GET['orderby']) && !empty($_GET['orderby']) ? $sorts[$_GET['orderby']] : 'Sort by Default' ?></a></span></span>
                        <?php 
                        $query_str = [];
                        if(isset($_GET['product_count']) && !empty($_GET['product_count'])){
                            $query_str['product_count'] = $_GET['product_count'];
                            
                        }
                        
                        ?>
                        <ul style="display: none; opacity: 1;">
                            <?php foreach($sorts as $sort_value => $sort_name): ?>
                            <?php 
                            $query_str['orderby'] = $sort_value;
                            ?>
                            <li class=""><a href="?<?=http_build_query($query_str)?>"><?=$sort_name?></a>
                            </li>
                            <?php endforeach; ?>
                            
                            </ul>
                        </li>
                    </ul>
                    <?php 
                        $query_str = [];
                        if(isset($_GET['orderby']) && !empty($_GET['orderby'])){
                            $query_str['orderby'] = $_GET['orderby'];
                            
                        }
                        
                    ?>
                    <!-- <ul class="order">
                        <li class="asc"><a href="?product_count=32&amp;product_order=desc"><i class="icon-arrow-down"></i></a>
                        </li>
                    </ul> -->
                    
                    <ul class="sort-count order-dropdown">
                    
                        <li><span class="current-li"><a>
                            <?=isset($_GET['product_count']) && !empty($_GET['product_count']) ? (int) $_GET['product_count'] : 32 ?>
                        </a></span>
                            <ul style="display: none; opacity: 1;">
                            <?php 
                                $query_str['product_count'] = 16;
                            ?>
                                <li class=""><a href="?<?=http_build_query($query_str)?>">16</a>
                                </li>
                                <?php 
                                    $query_str['product_count'] = 32;
                                ?>
                                <li class="current"><a href="?<?=http_build_query($query_str)?>">32</a>
                                </li>
                                <?php 
                                    $query_str['product_count'] = 48;
                                ?>
                                <li class=""><a href="?<?=http_build_query($query_str)?>">48</a>
                                </li>
                                </ul>
                            </li>
                        </ul>
                </div>
        </div>
        <nav class="woocommerce-pagination">
        <?php 
        $big = 999999999; // need an unlikely integer
         
        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?page=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $the_query->max_num_pages,
            'prev_text'=>'←',
            'next_text'=>'→',
        ) );
        ?>
        </nav>
        <!-- <nav class="woocommerce-pagination">
	<ul class="page-numbers">
	<li><a class="prev page-numbers" href="http://puremart.vn/danh-muc/thit-ca/page/1/?orderby=menu_order&amp;product_order=desc&amp;product_count=32">←</a></li>
	<li><a class="page-numbers" href="http://puremart.vn/danh-muc/thit-ca/page/1/?orderby=menu_order&amp;product_order=desc&amp;product_count=32">1</a></li>
	<li><span class="page-numbers current">2</span></li>
</ul>
</nav> -->
</div>