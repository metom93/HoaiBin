<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <?php if (is_search()){ ?>
        <meta name="robots" content="noindex, nofollow" />
    <?php } ?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <title>
        <?php bloginfo('name'); ?>
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    
    <!-- core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/animate.min.css" rel="stylesheet">

    <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet">
    
    <link href="<?php bloginfo('template_url'); ?>/css/responsive.css" rel="stylesheet">
    <?php wp_head();?>
</head><!--End head-->
<body <?php body_class(); ?>>
    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +0123 456 789</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
                       </div>
                    </div>
                </div>
            </div><!--End container-->
        </div><!--End top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="<?php bloginfo('template_url'); ?>/images/logohb.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html" class="active">Trang chủ</a></li>
                        <li><a href="gioithieu.html">Giới thiệu</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dịch vụ <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="thietkewebsite.html">Thiết kế website</a></li>
                                <li><a href="seo.html">Seo</a></li>
                            </ul>
                        </li>
                        <li><a href="tintuc.html">Tin tức</a></li>
                        <li>
                            
                        <a href="lienhe.html">Liên hệ</a>
                        </li>                     
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->