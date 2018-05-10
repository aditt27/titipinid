    <!--footer -->
	<div class="footer-w3">
	    <div class="container">
	        <div class="footer-top">
	            <div class="col-md-3 footer-w3layouts">
	                <div class="footer-title">
	                    <h2>About Us</h2>
	                </div>
	                <div class="footer-text">
                        <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.  lacinia eget consectetur sed, convallis at tellus. Nulla porttitor accumsan tincidunt. Vestibulum ante ipsum primis in faucibus orci ultrices posuere cubilia Curae.</p>
                    </div>
                </div>
                <div class="col-md-3 footer-w3agile">
                    <div class="footer-title">
                        <h3>Office Hour</h3>
                    </div>
                    <div class="footer-office-hour">
                        <ul>
                            <li class="hd">Opening Days :</li>
                            <li>Monday – Friday : 9am to 20 pm</li>
                            <li>Saturday : 9am to 17 pm</li>
                        </ul>
                        <ul>
                            <li class="hd">Vacations :</li>
                            <li>All Sunday Days</li>
                            <li>All Official Holidays</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 footer-agileits">
                    <div class="footer-title">
                        <h3>Service List</h3>
                    </div>
                    <div class="footer-list">
                        <ul>
                            <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-long-arrow-right"></i>Eifs Systems</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-long-arrow-right"></i>Fiber Cement</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-long-arrow-right"></i>Vinyl Siding</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-long-arrow-right"></i>Air Barrier</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-long-arrow-right"></i>Thin Brick</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-long-arrow-right"></i>Stucco</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 footer-w3-agile">
                    <div class="footer-title">
                        <h3>Navigation</h3>
						<ul class="agileits_w3layouts_footer_grid_list">
							<li><i class="fa fa-hand-o-right" aria-hidden="true"></i><a href="index.html">Home</a></li>
							<li><i class="fa fa-hand-o-right" aria-hidden="true"></i><a href="about.html">About</a></li>
							<li><i class="fa fa-hand-o-right" aria-hidden="true"></i><a href="icons.html">Icons</a></li>
							<li><i class="fa fa-hand-o-right" aria-hidden="true"></i><a href="typography.html">Typography</a></li>
							<li><i class="fa fa-hand-o-right" aria-hidden="true"></i><a href="gallery.html">Gallery</a></li>
							<li><i class="fa fa-hand-o-right" aria-hidden="true"></i><a href="contact.html">Contact</a></li>
							<li><i class="fa fa-hand-o-right" aria-hidden="true"></i><a href="form.html">Form</a></li>
						</ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="copyrighttop">
				<ul>
					<li><h4>Follow us on:</h4></li>
					<li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a class="facebook" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a class="facebook" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li><a class="facebook" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="copyrightbottom">
				<p>© 2018 Metal Panel. All Rights Reserved | Design By <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!-- //copyright -->
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
            */
                                
            $().UItoTop({ easingType: 'easeOutQuart' });
                                
            });
    </script>
    <!-- //here ends scrolling icon -->
<!-- js for smooth scrollings -->
    <script src="<?php echo base_url('assets/')?>js/SmoothScroll.min.js"></script>
<!-- js for smooth scrollings -->

    <!-- for nav menu-js-file-->
        <script src="<?php echo base_url('assets/')?>js/classie.js"></script>
        <script src="<?php echo base_url('assets/')?>js/demo1.js"></script>
    <!-- for nav menu-js-file-->

<?php
if(isset($page))
{
    //khusus login page
    echo "<!--===============================================================================================-->
    <script src='".base_url('assets/login/')."vendor/jquery/jquery-3.2.1.min.js'></script>
<!--===============================================================================================-->
    <script src='".base_url('assets/login/')."vendor/animsition/js/animsition.min.js'></script>
<!--===============================================================================================-->
    <script src='".base_url('assets/login/')."vendor/bootstrap/js/popper.js'></script>
    <script src='".base_url('assets/login/')."vendor/bootstrap/js/bootstrap.min.js'></script>
<!--===============================================================================================-->
    <script src='".base_url('assets/login/')."vendor/select2/select2.min.js'></script>
<!--===============================================================================================-->
    <script src='".base_url('assets/login/')."vendor/daterangepicker/moment.min.js'></script>
    <script src='".base_url('assets/login/')."vendor/daterangepicker/daterangepicker.js'></script>
<!--===============================================================================================-->
    <script src='".base_url('assets/login/')."vendor/countdowntime/countdowntime.js'></script>
<!--===============================================================================================-->
    <script src='".base_url('assets/login/')."js/main.js'></script>
    ";
}
else
{
    echo "<!-- Resopnsive-Slider-JavaScript -->
            <script src='".base_url('assets/')."js/responsiveslides.min.js'></script>
            <script>
                $(function () {
                    $('#slider').responsiveSlides({
                        auto: true,
                        nav: true,
                        speed: 2000,
                        namespace: 'callbacks',
                        pager: true,
                    });
                });
            </script>
<!-- //Resopnsive-Slider-JavaScript -->
<!-- for testimonials slider-js-script-->
<!-- testimonials -->
    <!-- required-js-files-->
                            <link href='".base_url('assets/')."css/owl.carousel.css' rel='stylesheet'>
                                <script src='".base_url('assets/')."js/owl.carousel.js'></script>
                                    <script>
                                $(document).ready(function() {
                                  $('#owl-demo').owlCarousel({
                                    items : 1,
                                    lazyLoad : true,
                                    autoPlay : false,
                                    navigation : true,
                                    navigationText : true,
                                    pagination : true,
                                  });
                                });
                                </script>
                                 <!--//required-js-files-->

<!-- for testimonials slider-js-script-->
<!-- move to top-js-files -->
    <script type='text/javascript' src='".base_url('assets/')."js/move-top.js'></script>
    <script type='text/javascript' src='".base_url('assets/')."js/easing.js'></script>
<!-- //move to top-js-files -->
";
}
?>

<!-- Default-JavaScript-File -->
    <script type="text/javascript" src="<?php echo base_url('assets/')?>js/bootstrap.min.js"></script>
<!-- //Default-JavaScript-File -->
</body>
</html>
