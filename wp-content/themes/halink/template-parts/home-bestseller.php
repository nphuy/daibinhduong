<div class="sw-best-seller-product vc_element carousel slide bestsale-block">
	<div class="block-title title1">
		<h2><span>ĐANG BÁN CHẠY</span></h2>
		<div class="customNavigation nav-left-product">
			<a title="Previous" class="btn-bs prev-bs fa fa-angle-left" href="#bestsale" role="button" data-slide="prev"></a>
			<a title="Next" class="btn-bs next-bs fa fa-angle-right" href="#bestsale" role="button" data-slide="next"></a>
		</div>
	</div>
	<div class="carousel-inner">
		<?php 
			$query = new WP_Query( array(
				'posts_per_page' => 12,
				'post_type' => 'product',
				'post_status' => 'publish',
				'ignore_sticky_posts' => 1,
				'meta_key' => 'total_sales',
				'orderby' => 'meta_value_num',
				'order' => 'DESC',
			) );
			$i = 0;
			if($query->have_posts()) :
				while($query->have_posts()) : $query->the_post();
				
		?>
		<?php if($i%4 == 0):
		?>
		<div class="item <?=$i==0?'active':''?>">
		<?php endif; ?>

		<?php if(($i +1) % 4 == 0 || $i == $query->post_count-1):
		?>
		</div>
		<?php endif; ?>
		
		<?php 
			get_template_part( 'template-parts/content-related', 'product' );
			$i++;
			endwhile;
			wp_reset_postdata();
		endif;
		?>
	</div>
</div>