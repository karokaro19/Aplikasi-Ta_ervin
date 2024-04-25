        <!--================= Footer Section Start Here =================-->
        <footer id="react-footer" class="react-footer home-main">
            <div class="copyright">
                <div class="container">
                    <div class="react-copy-left">© 2023 {{ config('app.name') }}</div>
                    <div class="react-copy-right">
                        <ul class="social-links">
                            <li class="follow">Follow us</li>
                            <li><a href="#"><span aria-hidden="true" class="social_facebook"></span></a></li>
                            <li><a href="#"><span aria-hidden="true" class="social_twitter"></span></a></li>
                            <li><a href="#"><span aria-hidden="true" class="social_linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--================= Footer Section End Here =================-->

        <!--================= Scroll to Top Start =================-->
        <div id="backscrollUp" class="home">
            <span aria-hidden="true" class="arrow_carrot-up"></span>
        </div>
        <!--================= Scroll to Top End =================-->

        <!--================= Jquery latest version =================-->
        <script src="{{ url('assetsdepan/js/jquery.min.js')}}"></script>
        <!--================= Modernizr js =================-->
        <script src="{{ url('assetsdepan/js/modernizr-2.8.3.min.js')}}"></script>
        <!--================= Bootstrap js =================-->
        <script src="{{ url('assetsdepan/js/bootstrap.min.js')}}"></script>
        <!--================= Owl Carousel js =================-->
        <script src="{{ url('assetsdepan/js/owl.carousel.min.js')}}"></script>
        <!--================= Swiper Slider js =================-->
        <script src="{{ url('assetsdepan/js/swiper-bundle.min.js')}}"></script>
        <!--================= Magnific Popup =================-->
        <script src="{{ url('assetsdepan/js/jquery.magnific-popup.min.js')}}"></script>
        <!--================= Counter up js =================-->
        <script src="{{ url('assetsdepan/js/jquery.counterup.min.js')}}"></script>
        <script src="{{ url('assetsdepan/js/waypoints.min.js')}}"></script>
        <!--================= Wow js =================-->
        <script src="{{ url('assetsdepan/js/wow.min.js')}}"></script>
        <script src="{{ url('assetsdepan/js/imagesloaded.pkgd.min.js')}}"></script> 
        <!--================= menus js =================-->
        <script src="{{ url('assetsdepan/js/menus.js')}}"></script>
        <!--================= Plugins js =================-->
        <script src="{{ url('assetsdepan/js/plugins.js')}}"></script>
        <!--================= Main js =================-->
        <script src="{{ url('assetsdepan/js/main.js')}}"></script>

        <script>
            // dropdown show & hide
            $(".campus-dropdown-item > .showed").on("click", function () {
                var element = $(this).parent(".campus-dropdown-item");
                if (element.hasClass("active")) {
                    element.removeClass("active");
                } else {
                    element.siblings(".campus-dropdown-item").removeClass('active');
                    element.addClass("active");
                }
            });
        </script>
</body>

</html>