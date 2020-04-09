<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Halink
 */
global $hnp_options;
?>

<div id="main">
	<div class="container">
		<div class="row">
			<div id="contents" class="col-lg-12 col-md-12 col-sm-12">
				<div class="class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<?php 
					$slides = $hnp_options['home-slides'];
					?>
					<?php foreach($slides as $index=>$slide): ?>
					<div class="item<?=!$index ? ' active' : ''?>">
						<img style="width: 100%;" src="<?=$slide['image']?>" alt="<?=$slide['title']?>"">
					</div>
					<?php endforeach; ?>
				</div>
				</div>
			
			</div>
			
		</div>
		<div class="row" style="margin-top: 30px;">
				<div class="col-sm-12 col-lg-3 col-md-4">
					<div class="wpb_wrapper">
						<div class="vc_wp_custommenu wpb_content_element ">
							<div class="mega-left-title">
								<strong>SẢN PHẨM</strong>
							</div>
							<div class="wrapper_vertical_menu vertical_megamenu hnp-product-menu">
								<ul>
									<?php 
										$parent_terms = get_terms(['taxonomy' => 'product_cat','hide_empty' => false, 'parent' => 0]);

									?>
									<?php 
									foreach($parent_terms as $parent_term):
										$child_categories = get_term_children( $parent_term->term_id, 'product_cat' ); 

									?>
									<li class="<?=count($child_categories) ? 'dropdown' : ''?>"><a href="<?=get_term_link($parent_term->term_id)?>"><?=$parent_term->name?></a>
									<?php if(count($child_categories)): ?>
									<ul class="submenu">
										<?php 
											foreach($child_categories as $child_category_id):
											$child_category = get_term( $child_category_id, 'product_cat' );
										?>
										<li>
											<a href="<?=get_term_link($child_category_id)?>">
												<?=$child_category->name?>
											</a>
										</li>
										<?php endforeach; ?>
									</ul>
									<?php endif; ?>
									</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
						<?php 
							get_template_part( 'template-parts/home', 'bestseller' );
						?>
						<?php 
							get_template_part( 'template-parts/home', 'brand' );
						?>
					</div>
				</div>
				<div class="col-sm-12 col-lg-9 col-md-8">
					<?php dynamic_sidebar('main-home'); ?>
				</div>
			</div>
	</div>
</div>
<script language="JavaScript" type="text/javascript">
  jQuery(document).ready(function($){
    $('.carousel').carousel({
      interval: 2000
    })
  });    
</script>