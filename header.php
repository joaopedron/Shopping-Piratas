<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _asv
 */
?>
<!doctype html>
<html ng-app="myApp" ng-controller="AppController" lang="pt_BR">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon.png">
    
    <!-- Owl Carousel 2 -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/styles/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/styles/owl.theme.default.css">
    
    <!-- Flag icon -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/flag-icon-css/css/flag-icon.min.css">
    
    <!-- animate.css -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/animate.css/animate.min.css">
    
    <!-- Playfair font -->
    <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet">
    
    <!-- Merriweather font -->
    <link href="//fonts.googleapis.com/css?family=Merriweather:300,400,700" rel="stylesheet">
    
    <!-- Fonte awesome icons -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/styles/font-awesome.min.css">
    
    <!-- Angular CDN -->
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.0-rc.3/angular.min.js"></script>
    <script src="http://code.angularjs.org/1.2.0rc1/angular-route.min.js"></script>
    <script src="http://code.angularjs.org/1.2.0rc1/angular-touch.min.js"></script>

    <!-- Mega menu -->
    <script>

    var app = angular.module('myApp', ['ngRoute','ngTouch']);

        app.controller("AppController", function($scope){
            //default the menu to not show
            $scope.showmenu = false;

            //this is the toggle function
            $scope.toggleMenu = function(){
                $scope.showmenu = ($scope.showmenu) ? false : true;
            }

        });

    </script>
    <!-- Mega menu -->

    <?php wp_head(); ?>
</head>
<body>
    <!--[if lt IE 9]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div id="page">
        
        <!-- header -->
        <header id="header" class="site-header" role="banner">
            <div class="wrapper">
                <!-- logo -->
                <div class="site-branding">
                    <?php if(is_mobile()): ?>
                        <a class="logo-mobile" href="<?= esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                    <?php endif; ?>
                    <?php if(!is_mobile()): ?>
                        <a class="logo-desktop" href="<?= esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                    <?php endif; ?>
                </div>
                <!-- #logo -->

                <!-- search form -->
                <!-- <i class="fa fa-search"></i> -->
                <!-- #search form -->

                <!-- menu -->
                <div class="site-menu">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                </div>
                <!-- #menu -->
                <a href="#" class="menu-mobile" ng-click="toggleMenu()">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
            
            <!-- Mega menu -->
            <section class="mega-menu" ng-class="{ hide: !showmenu, slide: showmenu }">
                
                <div class="wrapper">
                    <a href="#" class="menu-close" ng-click="toggleMenu()">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                    
                    <header class="menu-header">
                        <h1>Navegação</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic architecto autem delectus omnis eveniet consequatur repudiandae, vel ex, beatae quia amet illum deserunt dolores atque natus fuga. Aspernatur, blanditiis, et.</p>
                    </header>
                    
                    <section class="menu-content">
                        <ul>
                            <li><a href="#">1-link</a></li>
                            <li><a href="#">2-link</a></li>
                            <li><a href="#">3-link</a></li>
                            <li><a href="#">4-link</a></li>
                        </ul>
                    </section>
        
                </div>
                
            </section>
            <!-- #mega-menu -->

        </header>
        <!-- #header -->

        <?php if(is_home() && !is_single()): ?>
    
        <section class="destaque">
            <?= do_shortcode('[rev_slider alias="homeslider_fullscreen"]'); ?>
        </section>

        <?php endif; ?>
        <!-- #slide-home -->
    	<div id="content" class="site-content">
       