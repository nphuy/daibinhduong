<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Halink
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<style>
	.item-img.products-thumb img, .products-thumb img {
		min-height: 150px;
	}
	.hnp-product-menu ul li a{
		display: block;
		padding: 10.5px 15px;
		position: relative;
		color: #444;
		text-transform: uppercase;
		font-weight: bold;
		font-size: 14px;
	}
	.hnp-product-menu ul li.dropdown > a:after{
		content: "\f105";
		font-family: FontAwesome;
		position: absolute;
		right: 15px;
		top: 10px;
		font-size: 13px;
	}
	.hnp-product-menu .submenu{
		position: absolute;
		display: none;
		min-width: 160px;
		top: 0px;
		left: 100%;
		z-index: 1000;
		background-color: #fff;
    	border: 1px solid rgba(0,0,0,0.15);
	}
	
	.hnp-product-menu .submenu > li +li {
		border-color: #d9d9d9;
		border-style: solid;
		border-width: 1px 0 0;
	}
	.hnp-product-menu ul li.dropdown:hover .submenu{
		display: block;
	}
	
	</style>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="body-wrapper theme-clearfix">
<?php 
get_template_part( 'template-parts/header' );

?>
