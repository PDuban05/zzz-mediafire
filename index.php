<!DOCTYPE html>
<html class="no-js" lang="es">

<?php
include 'head.php';
?>

<body>


    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>



    <?php
    include 'header.php';
    include 'banner.php';
    include 'categorias.php';
    include 'grip.php';
    include 'categorias2.php';
    include 'plans.php';


    ?>






   


   


    <footer class="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">

                        <div class="single-footer mobile-app">
                            <h3>Mobile Apps</h3>
                            <div class="app-button">
                                <a href="javascript:void(0)" class="btn">
                                    <i class="lni lni-play-store"></i>
                                    <span class="text">
                                        <span class="small-text">Get It On</span>
                                        Google Play
                                    </span>
                                </a>
                                <a href="javascript:void(0)" class="btn">
                                    <i class="lni lni-apple"></i>
                                    <span class="text">
                                        <span class="small-text">Get It On</span>
                                        App Store
                                    </span>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6 col-12">

                        <div class="single-footer f-link">
                            <h3>Locations</h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li><a href="javascript:void(0)">Chicago</a></li>
                                        <li><a href="javascript:void(0)">New York City</a></li>
                                        <li><a href="javascript:void(0)">San Francisco</a></li>
                                        <li><a href="javascript:void(0)">Washington</a></li>
                                        <li><a href="javascript:void(0)">Boston</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li><a href="javascript:void(0)">Los Angeles</a></li>
                                        <li><a href="javascript:void(0)">Seattle</a></li>
                                        <li><a href="javascript:void(0)">Las Vegas</a></li>
                                        <li><a href="javascript:void(0)">San Diego</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6 col-12">

                        <div class="single-footer f-link">
                            <h3>Quick Links</h3>
                            <ul>
                                <li><a href="javascript:void(0)">About Us</a></li>
                                <li><a href="javascript:void(0)">How It's Works</a></li>
                                <li><a href="javascript:void(0)">Login</a></li>
                                <li><a href="javascript:void(0)">Signup</a></li>
                                <li><a href="javascript:void(0)">Help & Support</a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6 col-12">

                        <div class="single-footer f-contact">
                            <h3>Contact</h3>
                            <ul>
                                <li>23 New Design Str, Lorem Upsum 10<br> Hudson Yards, USA</li>
                                <li>Tel. +(123) 1800-567-8990 <br> Mail. <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="71020401011e030531121d1002021816031815025f121e1c">[email&#160;protected]</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="footer-bottom">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-12">
                            <div class="content">
                                <ul class="footer-bottom-links">
                                    <li><a href="javascript:void(0)">Terms of use</a></li>
                                    <li><a href="javascript:void(0)"> Privacy Policy</a></li>
                                    <li><a href="javascript:void(0)">Advanced Search</a></li>
                                    <li><a href="javascript:void(0)">Site Map</a></li>
                                    <li><a href="javascript:void(0)">Information</a></li>
                                </ul>
                                <p class="copyright-text">Designed and Developed by <a href="https://graygrids.com/" rel="nofollow" target="_blank">GrayGrids</a>
                                </p>
                                <ul class="footer-social">
                                    <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-youtube"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>


    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script type="text/javascript">
        //========= Category Slider 
        tns({
            container: '.category-slider',
            items: 3,
            slideBy: 'page',
            autoplay: false,
            mouseDrag: true,
            gutter: 0,
            nav: false,
            controls: true,
            controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 2,
                },
                768: {
                    items: 4,
                },
                992: {
                    items: 5,
                },
                1170: {
                    items: 6,
                }
            }
        });

        //========= testimonial 
        tns({
            container: '.testimonial-slider',
            items: 3,
            slideBy: 'page',
            autoplay: false,
            mouseDrag: true,
            gutter: 0,
            nav: true,
            controls: false,
            controlsText: ['<i class="lni lni-arrow-left"></i>', '<i class="lni lni-arrow-right"></i>'],
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 2,
                },
                1170: {
                    items: 2,
                }
            }
        });
    </script>
</body>

</html>