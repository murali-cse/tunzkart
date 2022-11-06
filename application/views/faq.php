<div class="page-wrapper">
    <?php 
        $data = array(
            'active'=> 'home',
            'showNavbar' => false
        );
        
        $this->load->view('components/navbar',$data);
    ?>

    <main class="main">
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">F.A.Q<span>Frequently Asked Questions</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <br>

        <div class="page-content">
            <div class="container">
                <h2 class="title text-center mb-3">Shipping Information</h2><!-- End .title -->
                <div class="accordion accordion-rounded" id="accordion-1">
                    <div class="card card-box card-sm bg-light">
                        <div class="card-header" id="heading-1">
                            <h2 class="card-title">
                                <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true"
                                    aria-controls="collapse-1">
                                    How will my parcel be delivered?
                                </a>
                            </h2>
                        </div><!-- End .card-header -->
                        <div id="collapse-1" class="collapse show" aria-labelledby="heading-1"
                            data-parent="#accordion-1">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat
                                mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper
                                suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam
                                porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices
                                nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique
                                cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.
                            </div><!-- End .card-body -->
                        </div><!-- End .collapse -->
                    </div><!-- End .card -->

                    <div class="card card-box card-sm bg-light">
                        <div class="card-header" id="heading-2">
                            <h2 class="card-title">
                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2"
                                    aria-expanded="false" aria-controls="collapse-2">
                                    Do I pay for delivery?
                                </a>
                            </h2>
                        </div><!-- End .card-header -->
                        <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion-1">
                            <div class="card-body">
                                Ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis
                                eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper
                                suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.Lorem ipsum
                                dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                            </div><!-- End .card-body -->
                        </div><!-- End .collapse -->
                    </div><!-- End .card -->

                    <div class="card card-box card-sm bg-light">
                        <div class="card-header" id="heading-3">
                            <h2 class="card-title">
                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3"
                                    aria-expanded="false" aria-controls="collapse-3">
                                    Will I be charged customs fees?
                                </a>
                            </h2>
                        </div><!-- End .card-header -->
                        <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion-1">
                            <div class="card-body">
                                Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit,
                                posuere a, pede. Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit
                                amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Lorem
                                ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis
                                eros.
                            </div><!-- End .card-body -->
                        </div><!-- End .collapse -->
                    </div><!-- End .card -->

                    <div class="card card-box card-sm bg-light">
                        <div class="card-header" id="heading-4">
                            <h2 class="card-title">
                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4"
                                    aria-expanded="false" aria-controls="collapse-4">
                                    My item has become faulty
                                </a>
                            </h2>
                        </div><!-- End .card-header -->
                        <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion-1">
                            <div class="card-body">
                                Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit,
                                posuere a, pede. Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit
                                amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Lorem
                                ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis
                                eros.
                            </div><!-- End .card-body -->
                        </div><!-- End .collapse -->
                    </div><!-- End .card -->
                </div><!-- End .accordion -->

                <h2 class="title text-center mb-3">Orders and Returns</h2><!-- End .title -->
                <div class="accordion accordion-rounded" id="accordion-2">
                    <div class="card card-box card-sm bg-light">
                        <div class="card-header" id="heading2-1">
                            <h2 class="card-title">
                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse2-1"
                                    aria-expanded="false" aria-controls="collapse2-1">
                                    Tracking my order
                                </a>
                            </h2>
                        </div><!-- End .card-header -->
                        <div id="collapse2-1" class="collapse" aria-labelledby="heading2-1" data-parent="#accordion-2">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat
                                mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper
                                suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.
                            </div><!-- End .card-body -->
                        </div><!-- End .collapse -->
                    </div><!-- End .card -->

                    <div class="card card-box card-sm bg-light">
                        <div class="card-header" id="heading2-2">
                            <h2 class="card-title">
                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse2-2"
                                    aria-expanded="false" aria-controls="collapse2-2">
                                    I haven’t received my order
                                </a>
                            </h2>
                        </div><!-- End .card-header -->
                        <div id="collapse2-2" class="collapse" aria-labelledby="heading2-2" data-parent="#accordion-2">
                            <div class="card-body">
                                Ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis
                                eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper
                                suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.Lorem ipsum
                                dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                            </div><!-- End .card-body -->
                        </div><!-- End .collapse -->
                    </div><!-- End .card -->

                    <div class="card card-box card-sm bg-light">
                        <div class="card-header" id="heading2-3">
                            <h2 class="card-title">
                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse2-3"
                                    aria-expanded="false" aria-controls="collapse2-3">
                                    How can I return an item?
                                </a>
                            </h2>
                        </div><!-- End .card-header -->
                        <div id="collapse2-3" class="collapse" aria-labelledby="heading2-3" data-parent="#accordion-2">
                            <div class="card-body">
                                Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit,
                                posuere a, pede. Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit
                                amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Lorem
                                ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis
                                eros.
                            </div><!-- End .card-body -->
                        </div><!-- End .collapse -->
                    </div><!-- End .card -->
                </div><!-- End .accordion -->

                <h2 class="title text-center mb-3">Payments</h2><!-- End .title -->
                <div class="accordion accordion-rounded" id="accordion-3">
                    <div class="card card-box card-sm bg-light">
                        <div class="card-header" id="heading3-1">
                            <h2 class="card-title">
                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse3-1"
                                    aria-expanded="false" aria-controls="collapse3-1">
                                    What payment types can I use?
                                </a>
                            </h2>
                        </div><!-- End .card-header -->
                        <div id="collapse3-1" class="collapse" aria-labelledby="heading3-1" data-parent="#accordion-3">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat
                                mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper
                                suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.
                            </div><!-- End .card-body -->
                        </div><!-- End .collapse -->
                    </div><!-- End .card -->

                    <div class="card card-box card-sm bg-light">
                        <div class="card-header" id="heading3-2">
                            <h2 class="card-title">
                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse3-2"
                                    aria-expanded="false" aria-controls="collapse3-2">
                                    Can I pay by Gift Card?
                                </a>
                            </h2>
                        </div><!-- End .card-header -->
                        <div id="collapse3-2" class="collapse" aria-labelledby="heading3-2" data-parent="#accordion-3">
                            <div class="card-body">
                                Ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis
                                eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper
                                suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.Lorem ipsum
                                dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                            </div><!-- End .card-body -->
                        </div><!-- End .collapse -->
                    </div><!-- End .card -->

                    <div class="card card-box card-sm bg-light">
                        <div class="card-header" id="heading3-3">
                            <h2 class="card-title">
                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse3-3"
                                    aria-expanded="false" aria-controls="collapse3-3">
                                    I can't make a payment
                                </a>
                            </h2>
                        </div><!-- End .card-header -->
                        <div id="collapse3-3" class="collapse" aria-labelledby="heading3-3" data-parent="#accordion-3">
                            <div class="card-body">
                                Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit,
                                posuere a, pede. Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit
                                amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Lorem
                                ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis
                                eros.
                            </div><!-- End .card-body -->
                        </div><!-- End .collapse -->
                    </div><!-- End .card -->

                    <div class="card card-box card-sm bg-light">
                        <div class="card-header" id="heading3-4">
                            <h2 class="card-title">
                                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse3-4"
                                    aria-expanded="false" aria-controls="collapse3-4">
                                    Has my payment gone through?
                                </a>
                            </h2>
                        </div><!-- End .card-header -->
                        <div id="collapse3-4" class="collapse" aria-labelledby="heading3-4" data-parent="#accordion-3">
                            <div class="card-body">
                                Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit,
                                posuere a, pede. Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit
                                amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Lorem
                                ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis
                                eros.
                            </div><!-- End .card-body -->
                        </div><!-- End .collapse -->
                    </div><!-- End .card -->
                </div><!-- End .accordion -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->

        <div class="cta cta-display bg-image pt-4 pb-4"
            style="background-image: url(assets/images/backgrounds/cta/bg-7.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-9 col-xl-7">
                        <div class="row no-gutters flex-column flex-sm-row align-items-sm-center">
                            <div class="col">
                                <h3 class="cta-title text-white">If You Have More Questions</h3><!-- End .cta-title -->
                                <p class="cta-desc text-white">Quisque volutpat mattis eros</p><!-- End .cta-desc -->
                            </div><!-- End .col -->

                            <div class="col-auto">
                                <a href="<?php echo base_url('contact') ?>" class="btn btn-outline-white"><span>CONTACT
                                        US</span><i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .col-auto -->
                        </div><!-- End .row no-gutters -->
                    </div><!-- End .col-md-10 col-lg-9 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .cta -->
    </main><!-- End .main -->


</div><!-- End .page-wrapper -->
<button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

<!-- Mobile Menu -->
<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-close"></i></span>

        <form action="#" method="get" class="mobile-search">
            <label for="mobile-search" class="sr-only">Search</label>
            <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..."
                required>
            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
        </form>

        <nav class="mobile-nav">
            <ul class="mobile-menu">
                <li class="active">
                    <a href="index.html">Home</a>

                    <ul>
                        <li><a href="index-1.html">01 - furniture store</a></li>
                        <li><a href="index-2.html">02 - furniture store</a></li>
                        <li><a href="index-3.html">03 - electronic store</a></li>
                        <li><a href="index-4.html">04 - electronic store</a></li>
                        <li><a href="index-5.html">05 - fashion store</a></li>
                        <li><a href="index-6.html">06 - fashion store</a></li>
                        <li><a href="index-7.html">07 - fashion store</a></li>
                        <li><a href="index-8.html">08 - fashion store</a></li>
                        <li><a href="index-9.html">09 - fashion store</a></li>
                        <li><a href="index-10.html">10 - shoes store</a></li>
                        <li><a href="index-11.html">11 - furniture simple store</a></li>
                        <li><a href="index-12.html">12 - fashion simple store</a></li>
                        <li><a href="index-13.html">13 - market</a></li>
                        <li><a href="index-14.html">14 - market fullwidth</a></li>
                        <li><a href="index-15.html">15 - lookbook 1</a></li>
                        <li><a href="index-16.html">16 - lookbook 2</a></li>
                        <li><a href="index-17.html">17 - fashion store</a></li>
                        <li><a href="index-18.html">18 - fashion store (with sidebar)</a></li>
                        <li><a href="index-19.html">19 - games store</a></li>
                        <li><a href="index-20.html">20 - book store</a></li>
                        <li><a href="index-21.html">21 - sport store</a></li>
                        <li><a href="index-22.html">22 - tools store</a></li>
                        <li><a href="index-23.html">23 - fashion left navigation store</a></li>
                        <li><a href="index-24.html">24 - extreme sport store</a></li>
                    </ul>
                </li>
                <li>
                    <a href="category.html">Shop</a>
                    <ul>
                        <li><a href="category-list.html">Shop List</a></li>
                        <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                        <li><a href="category.html">Shop Grid 3 Columns</a></li>
                        <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                        <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span
                                        class="tip tip-hot">Hot</span></span></a></li>
                        <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                        <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                        <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span
                                        class="tip tip-new">New</span></span></a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="wishlist.html">Wishlist</a></li>
                        <li><a href="#">Lookbook</a></li>
                    </ul>
                </li>
                <li>
                    <a href="product.html" class="sf-with-ul">Product</a>
                    <ul>
                        <li><a href="product.html">Default</a></li>
                        <li><a href="product-centered.html">Centered</a></li>
                        <li><a href="product-extended.html"><span>Extended Info<span
                                        class="tip tip-new">New</span></span></a></li>
                        <li><a href="product-gallery.html">Gallery</a></li>
                        <li><a href="product-sticky.html">Sticky Info</a></li>
                        <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                        <li><a href="product-fullwidth.html">Full Width</a></li>
                        <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages</a>
                    <ul>
                        <li>
                            <a href="about.html">About</a>

                            <ul>
                                <li><a href="about.html">About 01</a></li>
                                <li><a href="about-2.html">About 02</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>

                            <ul>
                                <li><a href="contact.html">Contact 01</a></li>
                                <li><a href="contact-2.html">Contact 02</a></li>
                            </ul>
                        </li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="faq.html">FAQs</a></li>
                        <li><a href="404.html">Error 404</a></li>
                        <li><a href="coming-soon.html">Coming Soon</a></li>
                    </ul>
                </li>
                <li>
                    <a href="blog.html">Blog</a>

                    <ul>
                        <li><a href="blog.html">Classic</a></li>
                        <li><a href="blog-listing.html">Listing</a></li>
                        <li>
                            <a href="#">Grid</a>
                            <ul>
                                <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Masonry</a>
                            <ul>
                                <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Mask</a>
                            <ul>
                                <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Single Post</a>
                            <ul>
                                <li><a href="single.html">Default with sidebar</a></li>
                                <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="elements-list.html">Elements</a>
                    <ul>
                        <li><a href="elements-products.html">Products</a></li>
                        <li><a href="elements-typography.html">Typography</a></li>
                        <li><a href="elements-titles.html">Titles</a></li>
                        <li><a href="elements-banners.html">Banners</a></li>
                        <li><a href="elements-product-category.html">Product Category</a></li>
                        <li><a href="elements-video-banners.html">Video Banners</a></li>
                        <li><a href="elements-buttons.html">Buttons</a></li>
                        <li><a href="elements-accordions.html">Accordions</a></li>
                        <li><a href="elements-tabs.html">Tabs</a></li>
                        <li><a href="elements-testimonials.html">Testimonials</a></li>
                        <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                        <li><a href="elements-portfolio.html">Portfolio</a></li>
                        <li><a href="elements-cta.html">Call to Action</a></li>
                        <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                    </ul>
                </li>
            </ul>
        </nav><!-- End .mobile-nav -->

        <div class="social-icons">
            <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->

<!-- Sign in / Register Modal -->
<?php $this->load->view('components/auth_model') ?>