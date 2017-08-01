<?php
/**
Theme Name: AURA Care Construct
Theme URI: http://www.aura.com/
Author: Dhananjaya Maha Malage
Author URI: http://whenalive.com/
Description: Wordpress Theme developed for AURA Care Construct.
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: black, brown, orange, tan, white, yellow, light, one-column, two-columns, right-sidebar, flexible-width, custom-header, custom-menu, editor-style, featured-images, microformats, post-formats, rtl-language-support, sticky-post, translation-ready
Text Domain: aura-care-construct

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/
?>
<header>
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding-left no-padding-right">
            <nav id="auro-bootstrap-menu" class="navbar navbar-default " role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a>
                        <span>care construct</span>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                        </button>
                    </div>
                    <?php
                    wp_nav_menu( array(
                            'menu'              => 'primary',
                            'theme_location'    => 'primary',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse navbar-menubuilder',
                            'container_id'      => 'bs-example-navbar-collapse-1',
                            'menu_class'        => 'nav navbar-nav navbar-right',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker())
                    );
                    ?>
                </div>
            </nav> <!-- nav end -->
            <?php if(is_front_page() || is_home()): ?>
                <div class="header-carousel owl-carousel owl-theme">
                    <div class="header-carousel-slide" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/slide1.jpg);"></div>
                    <div class="header-carousel-slide" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/slide2.jpg);"></div>
                    <div class="header-carousel-slide" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/slide3.jpg);"></div>
                </div> <!-- header-carousel end -->
            <?php else: ?>
                <div class="inner-page-banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/slide3.jpg);"></div>
            <?php endif; ?>
        </div> <!-- col-xs-12 col-sm-12 col-md-12 col-lg-12 end -->
    </div>
</header>
<div class="clear"></div>