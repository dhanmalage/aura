<footer>
    <div class="container">
        <div class="row-fluid">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="footer-col-1">
                    <div class="footer-logo-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
                        <span>care construct</span>
                    </div>
                    <div class="footer-social-icons">
                        <ul>
                            <li><a href="javascript:void(0);" target="_blank" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:void(0);" target="_blank" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="javascript:void(0);" target="_blank" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="footer-copyright">
                        <p>&copy; Copyright <?php echo date("Y"); ?> - Aura Care Living</p>
                    </div>
                </div> <!-- footer-col-1 end -->
            </div> <!-- column 1 grid end -->
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="footer-col-2">
                    <div class="footer-enquire-now">
                        <h4>Enquire Now</h4>
                        <div class="address">
                            <ul>
                                <li>Court House Manor, Hale Lane, Painswick,</li>
                                <li>Gloucestershire, GL6 6QE</li>
                                <li>E. <a href="mailto:info@auracareliving.com">info@auracareliving.com</a></li>
                            </ul>
                        </div>
                        <div class="tel">
                            <ul>
                                <li>T. 01452 203 301</li>
                                <li>Phone lines open: 10am - 4pm, Mon - Sat</li>
                            </ul>
                        </div>
                        <div class="footer-nav">
                            <?php wp_nav_menu('footer-nav'); ?>
                        </div>
                    </div>
                </div> <!-- footer-col-2 end -->
            </div> <!-- column 2 grid end -->
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="footer-col-3">
                    <div class="footer-newsletter">
                        <h4>Signup to our newsletter</h4>
                        <p>Enter your details below to be kept up to date with Aura Care Construct's latest developments.</p>
                        <form>
                            <div class="form-group">
                                <input class="form-control input-lg" id="inputName" type="text" placeholder="Enter your first name">
                            </div>
                            <div class="form-group">
                                <input class="form-control input-lg" id="inputEmail" type="email" placeholder="enter your email">
                            </div>
                            <button class="btn">sign up</button>
                        </form>
                    </div>
                </div> <!-- footer-col-3 end -->
            </div> <!-- column 3 grid end -->
        </div>
    </div>
</footer>
<div class="footer-credit">
    <div class="container">
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <p>Photography / CGIs on this website is indicative only. All trade marks, copyright, design right and other intellectual property rights in the graphics, images and text are owned by Aura Group.</p>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 footer-question">
            <div class="question-form-wrap">
                <div class="question-form-wrap-head">
                    <p>Ask a question</p><span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                </div>
                <div class="question-form">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="questionName" placeholder="Enter your first name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="questionEmail" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="questionText" placeholder="Enter your question" rows="4"></textarea>
                        </div>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>