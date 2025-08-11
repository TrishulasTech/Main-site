<footer class="footer-section">
    <div class="container">
        <div class="row footer-area">
            <div class="col-lg-3 col-sm-6 sm-padding">
                <div class="footer-widget">
                    <a class='footer-logo' href='index.html'><img src="<?= base_url('assets/img/logo-dark.png') ?>" alt="logo"></a>
                    <p>Our success in creating business solutions is due in part spacially to talented committed team.</p>
                    <ul class="footer-social">
                        <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                        <li><a href="#"><i class="lab la-twitter"></i></a></li>
                        <li><a href="#"><i class="lab la-youtube"></i></a></li>
                        <li><a href="#"><i class="lab la-behance"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 sm-padding">
                <div class="footer-widget">
                    <h3>Company</h3>
                    <ul class="footer-list">
                        <li><a href='about.html'>About Us</a></li>
                        <li><a href='contact.html'>Get in Touch</a></li>
                        <li><a href='faqs.html'>Help &amp; Faqs</a></li>
                        <li><a href='faqs.html'>Privacy Policy</a></li>
                        <li><a href='contact.html'>Support</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 sm-padding">
                <div class="footer-widget">
                    <h3>Information</h3>
                    <ul class="footer-list">
                        <li>
                            <p>3770 Hidden Meadow Drive Venturia, ND 58489</p>
                        </li>
                        <li><a href="tel:7045550127">+91 9511672478</a></li>
                        <li><a href="#">
                                <span>
                                    trishulastech@gmail.com</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 sm-padding">
                <div class="footer-widget subscribe">
                    <img class="subscribe-img" src="<?= base_url('assets/img/illustration06.png') ?>" alt="illustration">
                    <form action="https://te.dynamiclayers.net/softgen/php/mailchimp-subscribe.php" id="ajax_mc_form" class="subscribe-form">
                        <div class="mc-fields">
                            <input id="mc_email" class="form-control" type="email" name="mc_email" placeholder="Your Email" required>
                            <button class="submit">Subscribe</button>
                        </div>
                        <div class="clearfix"></div>
                        <div id="mc-form-messages" class="alert" role="alert"></div>
                    </form>
                    <p>Subscribe us and get all the benifits from today.</p>
                </div>
            </div>
        </div>
        <div class="copyright-text">
            © <span id="currentYear"></span> Trishulas Tech, All Rights Reserved.
        </div>
    </div>
</footer>
<!--/.footer-section-->

<div id="scrollup">
    <button id="scroll-top" class="scroll-to-top"><i class="las la-arrow-up"></i></button>
</div>
<!--scrollup-->

<!--jQuery Lib-->
<script data-cfasync="false" src="<?= base_url('cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') ?>"></script>
<script src="<?= base_url('assets/js/vendor/jquary-3.6.0.min.js') ?>"></script>
<script src="<?= base_url('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') ?>"></script>
<script src="<?= base_url('assets/js/vendor/atropos.min.js') ?>"></script>
<script src="<?= base_url('assets/js/vendor/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/js/vendor/popper.min.js') ?>"></script>
<script src="<?= base_url('assets/js/vendor/odometer.min.js') ?>"></script>
<script src="<?= base_url('assets/js/vendor/waypoints.min.js') ?>"></script>
<script src="<?= base_url('assets/js/vendor/venobox.min.js') ?>"></script>
<script src="<?= base_url('assets/js/vendor/swiper.min.js') ?>"></script>
<script src="<?= base_url('assets/js/vendor/smooth-scroll.js') ?>"></script>
<script src="<?= base_url('assets/js/vendor/wow.min.js') ?>"></script>
<script src="<?= base_url('assets/js/vendor/animated-text.min.js') ?>"></script>
<script src="<?= base_url('assets/js/vendor/gsap.min.js') ?>"></script>
<script src="<?= base_url('assets/js/vendor/scroll-trigger.min.js') ?>"></script>
<script src="<?= base_url('assets/js/vendor/parallax-scroll.min.js') ?>"></script>
<script src="<?= base_url('assets/js/mailchimp.js') ?>"></script>
<script src="<?= base_url('assets/js/main.js') ?>"></script>

<script>
    (function() {
        function c() {
            var b = a.contentDocument || a.contentWindow.document;
            if (b) {
                var d = b.createElement('script');
                d.innerHTML = "window.__CF$cv$params={r:'96b549a53b7adb88',t:'MTc1NDU1NDEyMy4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='<?= base_url('cdn-cgi/challenge-platform/h/b/scripts/jsd/8359bcf47b68/maind41d.js') ?>';document.getElementsByTagName('head')[0].appendChild(a);";
                b.getElementsByTagName('head')[0].appendChild(d)
            }
        }
        if (document.body) {
            var a = document.createElement('iframe');
            a.height = 1;
            a.width = 1;
            a.style.position = 'absolute';
            a.style.top = 0;
            a.style.left = 0;
            a.style.border = 'none';
            a.style.visibility = 'hidden';
            document.body.appendChild(a);
            if ('loading' !== document.readyState) c();
            else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
            else {
                var e = document.onreadystatechange || function() {};
                document.onreadystatechange = function(b) {
                    e(b);
                    'loading' !== document.readyState && (document.onreadystatechange = e, c())
                }
            }
        }
    })();
</script>
</body>


<!-- Mirrored from te.dynamiclayers.net/softgen/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Aug 2025 08:09:13 GMT -->

</html>