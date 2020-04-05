<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Halink
 */

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
					<div class="item active">
						<img style="width: 100%;" src="http://puremart.vn/wp-content/uploads/2015/02/rau-mam-1.jpg" alt="">
					</div>
					<div class="item">
						<img style="width: 100%;" src="http://puremart.vn/wp-content/uploads/2015/02/thit-bo-my-2.jpg" alt="">
					</div>
					<div class="item">
						<img src="http://puremart.vn/wp-content/uploads/2015/02/6-thuc-pham-giau-vitamin-b12-deponline-1.jpg" alt="">
					</div>
				</div>
				</div>
			
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