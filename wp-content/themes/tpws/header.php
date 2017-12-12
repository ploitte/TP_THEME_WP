<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tpWS
 */

 add_action("wp_enqueue_scripts", "myScripts");

 function myScripts(){
	wp_enqueue_script("goToTop", get_template_directory_uri()."/js/scrollTop.js", array("jquery"));
 }

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="myPage">

	<div id="goTop"></div>

	<header>
		<div id="leftHeader">
			<img src="https://www.indeep.be/wp-content/uploads/2017/01/smiley-face-png-96527038_o.png" id="logo">
		</div>

		<div id="rightHeader">
			<?php if(has_nav_menu("menu-1")){
				wp_nav_menu(array(
					"theme_location" => "menu-1"
				));
			} ?>
		</div>
	</header>

<div id="contSlider">
	
