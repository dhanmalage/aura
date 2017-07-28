<?php get_header(); ?>

<?php if(have_posts()):
        while(have_posts()):
            the_post(); global $post;
?>
    <div class="row-fluid">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding-right no-padding-left home-projects-wrap">
            <div class="home-project-item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/slide1.jpg);">
                <div class="home-project-item-content">
                    <h2>Stratton Court, Cirencester</h2>
                    <p>Nested in the heart of the beautiful Cotswolds in stunning surroundings, where every last detail has been considered for your ultimate comfort, requirements.</p>
                    <a href="javascript:void(0)">find out more</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding-right no-padding-left home-projects-wrap">
            <div class="home-project-item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/slide2.jpg);">
                <div class="home-project-item-content">
                    <h2>Stratton Court, Cirencester</h2>
                    <p>Nested in the heart of the beautiful Cotswolds in stunning surroundings, where every last detail has been considered for your ultimate comfort, requirements.</p>
                    <a href="javascript:void(0)">find out more</a>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding-right no-padding-left home-projects-wrap">
            <div class="home-project-item" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/slide3.jpg);">
                <div class="home-project-item-content">
                    <h2>Stratton Court, Cirencester</h2>
                    <p>Nested in the heart of the beautiful Cotswolds in stunning surroundings, where every last detail has been considered for your ultimate comfort, requirements.</p>
                    <a href="javascript:void(0)">find out more</a>
                </div>
            </div>
        </div>
    </div>

    <div class="clear"></div>

    <div class="container">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                <div class="home-main-content">
                    <h1><?php the_title(); ?></h1>
                    <hr>
                    <?php the_content(); ?>
                </div>
                <div class="our-clients">
                    <h3>Our Clients</h3>
                    <hr>
                    <div class="client-slider owl-carousel owl-theme">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/c1.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/c2.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/c3.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/c4.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/c1.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/c2.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/c3.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/c4.jpg">
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                <div class="twitter-sidebar">
                    <h2>Twitter feed <i class="fa fa-twitter" aria-hidden="true"></i></h2>
                    <a class="twitter-timeline" href="https://twitter.com/TwitterSupport" data-tweet-limit="4">Tweets by TwitterSupport</a>
                    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
        </div>
    </div>

<?php endwhile; endif; ?>

<!--The following script tags are the jQuery for styling-->
<script type="text/javascript">

    // Customize twitter feed
    var hideTwitterAttempts = 0;
    function hideTwitterBoxElements() {
        setTimeout( function() {
            jQuery(".twitter-timeline").contents().find(".timeline-InformationCircle-widgetParent").attr("style", "display: none !important;");//Hides tweet text field border
            jQuery(".twitter-timeline").contents().find(".TweetAuthor-name").attr("style", "display: none !important;");//Hides tweet text field border
            jQuery(".twitter-timeline").contents().find(".TweetAuthor-verifiedBadge").attr("style", "display: none !important;");//Hides tweet text field border
            jQuery(".twitter-timeline").contents().find(".TweetAuthor-screenName").attr("style", "display: none !important;");//Hides tweet text field border
            jQuery(".twitter-timeline").contents().find(".timeline-Tweet-media").attr("style", "display: none !important;");//Hides tweet text field border
            jQuery(".twitter-timeline").contents().find(".link.customisable").attr("style", "display: none !important;");//Hides tweet text field border
            jQuery(".twitter-timeline").contents().find(".timeline-Tweet-metadata").attr("style", "display: none !important;");//Hides tweet text field border
            jQuery(".twitter-timeline").contents().find(".timeline-Tweet-actions").attr("style", "display: none !important;");//Hides tweet text field border
            jQuery(".twitter-timeline").contents().find(".timeline-Tweet-retweetCredit").attr("style", "display: none !important;");//Hides tweet text field border
            jQuery(".twitter-timeline").contents().find(".timeline-Footer").attr("style", "display: none !important;");//Hides tweet text field border
            jQuery(".twitter-timeline").contents().find(".Emoji--forText").attr("style", "display: none !important;");//Hides tweet text field border
            jQuery(".twitter-timeline").contents().find(".timeline-Tweet-brand").attr("style", "display: none !important;");//Hides tweet text field border

            jQuery(".twitter-timeline").contents().find(".TweetAuthor-avatar").attr("style", "top: 7px !important;color: #777;");//Hides tweet text field border

            jQuery(".twitter-timeline").contents().find(".SandboxRoot.env-bp-430 .timeline-Tweet-text").attr("style", "font-size: 14px !important;color: #777;");//Hides tweet text field border

            jQuery(".twitter-timeline").contents().find(".Avatar--edge").attr("style", "border-radius: 0px !important;");//Hides tweet text field border
            jQuery(".twitter-timeline").contents().find(".timeline-Widget--edge").attr("style", "border-radius: 0px !important;");//Hides tweet text field border

            jQuery(".twitter-timeline").contents().find(".timeline-Tweet").attr("style", "background-color: #f3f3f3 !important;padding-top: 15px !important;padding-bottom: 15px !important;");//Hides tweet text field border
            /*
            jQuery(".twitter-timeline").contents().find(".thm-dark .tweet-box-button").attr("style", "border-color:#000033 !important;");//Hides tweet text field border

            jQuery(".twitter-timeline").contents().find("span.tco-display").attr("style", "color:#ffc600 !important;");//Recolor links

            jQuery(".twitter-timeline").contents().find(".customisable-border.thm-dark, .thm-dark .customisable-border").attr("style", "border-color:#000033 !important;");//Recolor some borders

            jQuery(".twitter-timeline").contents().find(".summary a.customisable-highlight").html("Follow me on Twitter!");//Change title words

            jQuery(".twitter-timeline").contents().find("a.follow-button.profile").attr("style", "background-color:#ffffff !important;background-image:none !important;border:none !important;color:#ffc600 !important;");//Follow button

            jQuery(".twitter-timeline").contents().find(".thm-dark").attr("style", "background-color:#000066 !important;border:none !important;");//Widget background color

            jQuery(".twitter-timeline").contents().find("img.u-photo.avatar").attr("style", "border-radius:50% !important;border:#fff solid 2px !important;");//Round avatars

            jQuery(".twitter-timeline").contents().find(".h-feed").attr("style", "background-color:#000033 !important;");//Tweet background color

            jQuery(".twitter-timeline").contents().find(".h-feed li").attr("style", "font-family:helvetica !important;border-color:#ffc600 !important;color:#ffffff !important;");//Tweet font, recolor tweet borders

            jQuery(".twitter-timeline").contents().find("button.load-more.customisable").attr("style", "color:#ffc600 !important;");//Load more button color
            */
            //Increase attempt count
            hideTwitterAttempts++;

            //Attempts to style widget 3 times, at 1.5s increments
            //Basically ensures that it gets styled
            if ( hideTwitterAttempts < 3 ) {
                hideTwitterBoxElements();
            }
        }, 1500);
    }
    //Trigger Styling
    hideTwitterBoxElements();
</script>

<script>
    window.twttr = (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0],
            t = window.twttr || {};
        if (d.getElementById(id)) return t;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js, fjs);

        t._e = [];
        t.ready = function(f) {
            t._e.push(f);
        };

        return t;
    }(document, "script", "twitter-wjs"));
</script>

<?php get_footer(); ?>
