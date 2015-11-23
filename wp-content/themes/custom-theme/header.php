<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package SKT White
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Amatic+SC' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500|Titillium+Web:400,600|Playfair+Display:400,700|Cabin:400,700|Hind:400,600|Raleway:400,600|Roboto:400,700' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( (of_get_option('innerpageslider', true) != 'hide') || is_home() || is_front_page() ) { ?>
	<div class="slider-main">
    <?php $slide_title = '<h1>Anne Hayward</h1>'; ?>
            <div class="top-bar">
                <?php echo of_get_option( 'header_title', $slide_title ); ?>
            </div><!-- top-bar -->
            <a href="<?php echo esc_url(get_site_url().'/#services'); ?>" class="arrow-down"></a>
    <div id="slider" class="nivoSlider">
       <?php

			$default_images = array(
				1 => array(
					'slide_image' => get_template_directory_uri()."/images/slides/slider1.jpg",
				),
				2 => array(
					'slide_image' => get_template_directory_uri()."/images/slides/slider2.jpg",
				),
				3 => array(
					'slide_image' => get_template_directory_uri()."/images/slides/slider3.jpg",
				),
				// 4 => array(
				// 	'slide_image' => get_template_directory_uri()."/images/slides/slider4.png",
				// ),
				// 5 => array(
				// 	'slide_image' => get_template_directory_uri()."/images/slides/slider2.jpg",
				// )
			);
			for ($i=1; $i<6; $i++) {
				if( of_get_option('slide'.$i,true) != '') {
				?>
                	<img src="<?php echo of_get_option('slide'.$i,$default_images[$i]['slide_image']); ?>"  />
				<?php }
			}
               ?>
    </div><!-- slider -->
    </div><!-- slider-main -->
<?php } ?>

<div class="header">
            		<div class="header-inner">
                    		<div class="logo">
                            		<a href="<?php echo esc_url( home_url('/')); ?>">
                                    	<?php if( of_get_option( 'logo', true ) != '' ) { ; ?>
                                        	<?php if( of_get_option('logo',true) == 1 ) { ?>
                                            	<h1><?php bloginfo('name'); ?></h1>
                                            <?php } else { ?>
 	                                       <img src="<?php echo esc_url( of_get_option( 'logo', true )); ?>" / >
                                        <?php } } else { ?>
    	                                    <h1><?php bloginfo('name'); ?></h1>
                                        <?php } ?>
                                        <p><?php bloginfo('description'); ?></p>
                                    </a>
                             </div><!-- logo -->
                            <div class="toggle">
                            <a class="toggleMenu" href="#"><?php _e('Menu','skt-white'); ?></a>
                            </div><!-- toggle -->
                            <div class="nav">
								<?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
                            </div><!-- nav --><div class="clear"></div>
                    </div><!-- header-inner -->
            </div><!-- header -->
      <div class="main-container">
         <?php if( function_exists('is_woocommerce') && is_woocommerce() ) { ?>
		 	<div class="content-area">
                <div class="middle-align content_sidebar">
                	<div id="sitemain" class="site-main">
         <?php } ?>
