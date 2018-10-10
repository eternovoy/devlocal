<?php
/**
 * Header
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Set up Meta -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <?php wp_head(); ?>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122669130-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	
	  gtag('config', 'UA-122669130-1');
	</script>
</head>

<body <?php body_class(); ?>>
<div id="before-load"></div>
<!--
    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div class="logo">
                        <a href="<?php bloginfo('url'); ?>"><img class="img-responsive" src="<?php //echo get_header_image(); ?>" /></a>
                    </div>
                </div>
                <div class="col-sm-8 col-xs-12">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                                <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="navbar-collapse">
                            <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'fallback_cb' => 'bootstrap_menu', 'menu_class' => 'nav navbar-nav', 'walker' => new bootstrap_navigation() ) ); ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
-->
