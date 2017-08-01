<?php
/**
 * Template Name: Projects
 *
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
<?php get_header(); ?>

<?php if(have_posts()):
    while(have_posts()):
        the_post(); global $post;
?>
<div class="container">
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="inner-page-title">
                <h1><?php the_title(); ?></h1>
                <hr>
            </div>
        </div>
    </div>
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="projects-main-height">
                <div class="projects-main-wrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/mp1.jpg);">
                    <div class="projects-main-inner">
                        <div class="projects-main-content">
                            <p>Nestled in the heart of the beautiful Cotswolds,
                                just a short distance from Cirencester, Stratton Court has been
                                specifically designed for a new generation of over 55's who
                                expect the highest standards. A place where  you can enjoy
                                the  freedom of your retirement in  stunning surroundings,
                                where every last detail has been considered for your ultimate
                                comfort, creating a vibrant environment in which you can live
                                life to the full.</p>
                            <a href="javascript:void(0)">find out more</a>
                        </div>
                    </div>
                </div>
                <div class="project-main-desc">
                    <h3>Cirencester Care Village, Stratton Place</h3>
                    <div class="row no-background">
                        <div class="col-xs-12 col-sm-6">
                            <p><span>Location: </span>Cirencester</p>
                            <p><span>Architects: </span>Aura Design Collective</p>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <p><span>Client: </span>Aura Care Living</p>
                            <p><span>Date: </span>December 2017</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="projects-main-height">
                <div class="projects-main-wrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/mp3.jpg);">
                    <div class="projects-main-inner">
                        <div class="projects-main-content">
                            <p>Nestled in the heart of the beautiful Cotswolds,
                                just a short distance from Cirencester, Stratton Court has been
                                specifically designed for a new generation of over 55's who
                                expect the highest standards. A place where  you can enjoy
                                the  freedom of your retirement in  stunning surroundings,
                                where every last detail has been considered for your ultimate
                                comfort, creating a vibrant environment in which you can live
                                life to the full.</p>
                            <a href="javascript:void(0)">find out more</a>
                        </div>
                    </div>
                </div>
                <div class="project-main-desc">
                    <h3>Camberley Care Village, Kings Lodge</h3>
                    <div class="row no-background">
                        <div class="col-xs-12 col-sm-6">
                            <p><span>Location: </span>Cirencester</p>
                            <p><span>Architects: </span>Aura Design Collective</p>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <p><span>Client: </span>Aura Care Living</p>
                            <p><span>Date: </span>December 2017</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="projects-main-height">
                <div class="projects-main-wrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/mp3.jpg);">
                    <div class="projects-main-inner">
                        <div class="projects-main-content">
                            <p>Nestled in the heart of the beautiful Cotswolds,
                                just a short distance from Cirencester, Stratton Court has been
                                specifically designed for a new generation of over 55's who
                                expect the highest standards. A place where  you can enjoy
                                the  freedom of your retirement in  stunning surroundings,
                                where every last detail has been considered for your ultimate
                                comfort, creating a vibrant environment in which you can live
                                life to the full.</p>
                            <a href="javascript:void(0)">find out more</a>
                        </div>
                    </div>
                </div>
                <div class="project-main-desc">
                    <h3>Orpington Care Village, Orpington</h3>
                    <div class="row no-background">
                        <div class="col-xs-12 col-sm-6">
                            <p><span>Location: </span>Cirencester</p>
                            <p><span>Architects: </span>Aura Design Collective</p>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <p><span>Client: </span>Aura Care Living</p>
                            <p><span>Date: </span>December 2017</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
