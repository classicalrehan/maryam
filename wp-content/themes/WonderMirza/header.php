<?php
if (!defined('ABSPATH')) {
    die();
}
?>
<!DOCTYPE html>
<html  <?php language_attributes(); ?> class=" js no-touch cssanimations csstransforms csstransforms3d csstransitions js no-touch cssanimations csstransforms csstransforms3d csstransitions">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <?php wp_head(); ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <title>Maryam Mirza | Explorer | Educator | Motivational Speaker</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="Maryam Mirza" />
        <meta name="keywords" content="Maryam Mirza, Explorer, Educator, Motivational Speaker" />
        <meta name="author" content="maryam" />        
    </head>

    <body >
        <!-- Animated Background -->
        <div class="lm-animated-bg" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/main_bg.png);"></div>
        <!-- /Animated Background -->

        <!-- Loading animation -->
        <div class="preloader">
            <div class="preloader-animation">
                <div class="preloader-spinner">
                </div>
            </div>
        </div>
        <!-- /Loading animation -->

        <div class="page">
            <div class="page-content">

                <header id="site_header" class="header mobile-menu-hide">
                    <div class="header-content">
                        <div class="header-photo">
                            <?php
                            do_action("logo", "logo", "", "Maryam Mirza");
                            ?>
                        </div>
                        <div class="header-titles">                            
                            <h2><?php echo get_field('title', 'option'); ?></h2>
                            <h4><?php echo get_field('tagline', 'option'); ?></h4>
                        </div>
                    </div>
                    <ul class="main-menu">
                        <?php
                        $primaryNav = wp_get_nav_menu_items(2);
                        foreach ($primaryNav as $key => $nav) {
                            ?>
                            <li class="<?php echo $key == 0 ? "active" : ""; ?>">
                                <a href="<?php echo site_url()."/".$nav->url; ?>" class="nav-anim ">
                                    <span class="menu-icon lnr <?php echo implode(" ", $nav->classes); ?>"></span>
                                    <span class="link-text"><?php echo $nav->post_title; ?></span>
                                </a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>

                    <div class="social-links">
                        <ul>
                            <?php
                            $linkedin = get_field('linkedin', 'option');
                            if (!empty($linkedin)) {
                                ?>
                                <li><a href="<?php echo $linkedin; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                <?php
                            }
                            ?>
                            <?php
                            $facebook = get_field('facebook', 'option');
                            if (!empty($facebook)) {
                                ?>
                                <li><a href="<?php echo $facebook; ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <?php
                            }
                            ?>
                            <?php
                            $twitter = get_field('twitter', 'option');
                            if (!empty($twitter)) {
                                ?>
                                <li><a href="<?php echo $twitter; ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <?php
                            }
                            ?>
                            <?php
                            $instagram = get_field('instagram', 'option');
                            if (!empty($instagram)) {
                                ?>
                                <li><a href="<?php echo $instagram; ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <?php
                            }
                            ?>
                            <?php
                            $youtube = get_field('youtube', 'option');
                            if (!empty($youtube)) {
                                ?>
                                <li><a href="<?php echo $youtube; ?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                <?php
                            }
                            ?>




                        </ul>
                    </div>                    
                </header>

                <!-- Mobile Navigation -->
                <div class="menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <!-- End Mobile Navigation -->
                <?php if (is_front_page()) { ?>
                    <!-- Arrows Nav -->
                    <div class="lmpixels-arrows-nav">
                        <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-right"></i></div>
                        <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-left"></i></div>
                    </div>
                <?php } ?>
                <!-- End Arrows Nav -->