<?php
    $fa = "-alt";
    if(isset($page))
    {
        if($page=='login')
        {
            $fa="";
        }
    }
?>
    <!--footer -->
	<div class="footer-w3">
	    <div class="container">
	        <div class="footer-top">
	            <div class="col-md-3 footer-w3layouts">
	                <div class="footer-text">
                        <p><strong><a style="color:#EF7F22; ">Titipin.id</a> adalah website untuk membantu mahasiswa/masyarakat untuk menjual dan membeli barang secara mudah, aman, dan transparan.<strong></p>
                    </div>
                </div>
                <div class="col-md-3 footer-w3agile">
                    <div class="footer-title">
                        <h3>Titip Sekarang!</h3>
                    </div>
                    <div class="footer-office-hour">
                        <ul>
                            <li><a href="#"><i class="far fa-hand-point-right"></i> Titip Jual</a></li>
                            <li><a href="#"><i class="far fa-hand-point-right"></i> Titip Beli</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 footer-agileits">
                    <div class="footer-title">
                        <h3>Halaman</h3>
                    </div>
                    <div class="footer-list">
                        <ul>
                            <li><a href="<?php echo base_url('');?>"><i class="fa fa-long-arrow<?php echo $fa?>-right"></i>Home</a></li>
                            <li><a href="<?php echo base_url('about_us');?>"><i class="fa fa-long-arrow<?php echo $fa?>-right"></i>About Us</a></li>
                            <li><a href="#"><i class="fa fa-long-arrow<?php echo $fa?>-right"></i>Our Team</a></li>
                            <li><a href="<?php echo base_url('news');?>"><i class="fa fa-long-arrow<?php echo $fa?>-right"></i>News</a></li>
                            <li><a href="#"><i class="fa fa-long-arrow<?php echo $fa?>-right"></i>Terms of Service</a></li>
                            <li><a href="#"><i class="fa fa-long-arrow<?php echo $fa?>-right"></i>Privacy and Policy</a></li>
                            <li><a href="#"><i class="fa fa-long-arrow<?php echo $fa?>-right"></i>FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 footer-w3-agile">
                    <div class="footer-title">
                        <h3>Navigation</h3>
						<ul class="agileits_w3layouts_footer_grid_list">
							<!--li><i class="fa fa-hand-o-right" aria-hidden="true"></i><a href="index.html">Home</a></li>
							<li><i class="fa fa-hand-o-right" aria-hidden="true"></i><a href="about.html">About</a></li>
							<li><i class="fa fa-hand-o-right" aria-hidden="true"></i><a href="icons.html">Icons</a></li>
							<li><i class="fa fa-hand-o-right" aria-hidden="true"></i><a href="typography.html">Typography</a></li>
							<li><i class="fa fa-hand-o-right" aria-hidden="true"></i><a href="gallery.html">Gallery</a></li>
							<li><i class="fa fa-hand-o-right" aria-hidden="true"></i><a href="contact.html">Contact</a></li>
							<li><i class="fa fa-hand-o-right" aria-hidden="true"></i><a href="form.html">Form</a></li-->
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
					<li><a class="facebook" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
					<li><a class="facebook" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
					<li><a class="facebook" href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
					<li><a class="facebook" href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
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
    if($page=="login")
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
        if($page=="about")
        {
            echo "<script type='text/javascript'>
    function showHideContent(id1,id2){
        if(document.getElementById(id1).style.display==''){
            document.getElementById(id1).style.display='none';
        }else{
            if(document.getElementById(id2).style.display==''){
                document.getElementById(id2).style.display='none';
            }
            document.getElementById(id1).style.display='';
        }
    }    
</script>";
        }
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
