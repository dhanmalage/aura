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
<?php get_header(); ?>

    <div class="container">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?php
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post();
                        ?>
                        <div class="inner-page-title">
                            <h1><?php the_title(); ?></h1>
                            <hr>
                        </div>
                        <div class="inner-page-content">
                            <?php the_content(); ?>
                        </div>
                        <?php
                    } // end while
                } // end if
                ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>