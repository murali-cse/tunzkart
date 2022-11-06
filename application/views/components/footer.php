<footer class="footer">
    <?php if(isset($showBanner) && $showBanner){ ?>
    <div class="cta bg-image bg-dark pt-4 pb-5 mb-0"
        style="background-image: url(assets/images/demos/demo-4/bg-5.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-8 col-lg-6">
                    <div class="cta-heading text-center">
                        <h3 class="cta-title text-white">Get The Latest Deals</h3>
                        <p class="cta-desc text-white">and receive <span class="font-weight-normal">₹20
                                coupon</span> for first shopping</p>
                    </div>
                    <form action="#">
                        <div class="input-group input-group-round">
                            <input type="email" class="form-control form-control-white"
                                placeholder="Enter your Email Address" aria-label="Email Adress" required>
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit"><span>Subscribe</span><i
                                        class="icon-long-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="widget widget-about">
                        <img src="assets/images/demos/demo-4/logo-footer.png" class="footer-logo" alt="Footer Logo"
                            width="105" height="25">
                        <p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate magna
                            eros eu erat. </p>

                        <div class="widget-call">
                            <i class="icon-phone"></i>
                            Got Question? Call us 24/7
                            <a href="tel:#" style="padding-top:5px">+0123 456 789</a>
                        </div><!-- End .widget-call -->
                    </div><!-- End .widget about-widget -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title">Useful Links</h4><!-- End .widget-title -->

                        <ul class="widget-list">
                            <li><a href="<?php echo base_url('about') ?>">About</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="<?php echo base_url('faq') ?>">FAQ</a></li>
                            <li><a href="<?php echo base_url('contact') ?>">Contact us</a></li>
                        </ul><!-- End .widget-list -->
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

                        <ul class="widget-list">
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Terms and conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul><!-- End .widget-list -->
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title">My Account</h4><!-- End .widget-title -->

                        <ul class="widget-list">
                            <li>
                                <a href="#signin-modal" data-toggle="modal" role="button" aria-haspopup="true"
                                    aria-expanded="false" data-display="static" title="Open Profile"
                                    aria-label="Open Profile">Sign In
                                </a>
                            </li>
                            <li><a href="<?php echo base_url('cart') ?>">View Cart</a></li>
                            <li><a href="<?php echo base_url('wishlist') ?>">My Wishlist</a></li>
                            <li><a href="#">Track My Order</a></li>
                        </ul><!-- End .widget-list -->
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-6 col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .footer-middle -->

    <div class="footer-bottom">
        <div class="container">
            <p class="footer-copyright">Copyright © <?php echo date("Y"); ?> <span> <a href="https://nutz.in"
                        target="_blank">Nutz
                        Technovation Pvt Ltd</a></span>. All Rights
                Reserved.</p>
            <!-- End .footer-copyright -->
            <!-- <figure class="footer-payments">
                <img src="assets/images/payments.png" alt="Payment methods" width="272" height="20">
            </figure> -->
        </div><!-- End .container -->
    </div><!-- End .footer-bottom -->
</footer>

<!-- Plugins JS File -->

<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.hoverIntent.min.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/superfish.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/bootstrap-input-spinner.js"></script>
<script src="assets/js/jquery.plugin.min.js"></script>
<script src="assets/js/nouislider.min.js"></script>
<script src="assets/js/wNumb.js"></script>

<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>

<!-- Main JS File -->

<script src="assets/js/demos/demo-4.js"></script>
</body>

</html>