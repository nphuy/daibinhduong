<div id="main" class="theme-clearfix">
    <div class="bcn container" style="padding: 11px 0;">
    <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
    </div>
    <div class="container">
        <div class="row">
            <aside class="sidebar col-lg-3 col-md-4 col-sm-4">
            </aside>
            <div id="contents" class="content col-lg-9 col-md-8 col-sm-8">
                <?php 
                    get_template_part( 'template-parts/content-product_cat', 'list' );
                ?>
                
            </div>
        </div>
    </div>
</div>