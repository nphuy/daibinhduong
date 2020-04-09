<div class="bran2-layout-slider clearfix">
    <div class="block-title title1 clearfix">
	    <h2><span>NHÃN HIỆU</span></h2>
		<a href="javascript:void(0)" class="view-all-brand pull-right">View All</a>			
	</div>
    <div class="bran2-slider">
    <ul class="bran2">
    <?php 
        $terms = get_terms( array(
            'taxonomy' => 'product_brand',
            'hide_empty' => false,
        ) );
    ?>
    <?php foreach($terms as $term):
    $thumbnail_id = get_field('thumbnail', $term);
    // var_dump(wp_get_attachment_image($thumbnail_id));
    ?>
		<li class="item item-brand-cat">					
			<div class="item-image">
				<a href="<?=get_term_link($term)?>"><img width="350" height="210" src="<?=wp_get_attachment_url($thumbnail_id)?>"></a>
            </div>
		</li>
    <?php endforeach; ?>
	</ul>
    </div>
</div>