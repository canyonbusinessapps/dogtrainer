<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <?php wp_head(); ?>
        <!--<link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&display=swap" rel="stylesheet">-->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Noto+Serif:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet"> 
        <link href='https://fonts.googleapis.com/css?family=Courgette' rel='stylesheet'>
    </head>

    <body <?php body_class(); ?>>
        <div class="mainbg-wrapperd">
            <a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'DogTrainerUS'); ?></a>
            <header id="masthead" class="site-header" role="banner">
                <div class="top_header_tag">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 top_tag">
                                <?php
                                if (is_active_sidebar('header-1')) {
                                    dynamic_sidebar('header-1');
                                }
                                ?>                           
                            </div>
                            <div class="col-md-4 top_social_menu">
                                <?php
                                if (is_active_sidebar('header-2')) {
                                    dynamic_sidebar('header-2');
                                }
                                ?>                           
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top_header">
                    <div class="container">
                        <div class="row inner_container">
                            <div class="col-md-2 inner_container">
                                <?php the_custom_logo(); ?>
                            </div>
                            <div class="col-md-10">
                                <nav class="navbar navbar-default navbar-right" data-spy="affix" data-offset-top="60" data-offset-bottom="200">
                                    <div class="container flex-container">
                                        <div id="navbar" class="navbar-collapse collapse">
                                            <?php if (has_nav_menu('top')) : ?>
                                                <?php
                                                wp_nav_menu(array(
                                                    'container' => '',
                                                    'theme_location' => 'top',
                                                    'menu_id' => 'top-menu',
                                                ));
                                                ?>
                                            <?php endif; ?>
                                        </div>
                                        <!--/.nav-collapse -->
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>                
            </header><!-- #masthead -->

            <div id="skicky_header" class="clearfix hidden-xs">
                <?php if (has_nav_menu('top')) : ?>
                    <?php
                    wp_nav_menu(array(
                        'container' => '',
                        'theme_location' => 'top',
                        'menu_id' => 'top-menu',
                    ));
                    ?>
                <?php endif; ?>
                <?php if (has_nav_menu('social')) : ?>
                    <?php
                    wp_nav_menu(array(
                        'container' => '',
                        'theme_location' => 'social',
                        'menu_id' => 'social-links',
                    ));
                    ?>
                <?php endif; ?>
            </div>
            <div class="home_slider">
                <?php add_revslider('slider-1', 'homepage'); ?>
            </div>
            <?php if (is_front_page() || is_home()) { ?>
                <div class="home_box_services">
                    <div class="container ">
                        <?php dynamic_sidebar('home-box'); ?>
                    </div>
                </div>
            <?php } ?>
            <div id="content" class="site-content">
                <div class="container">
