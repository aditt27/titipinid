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
<div style="background-color: #F5F5F5; border-top:2px solid #E3E3E3; padding-top: 50px; padding-bottom: 50px">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<p><strong><a style="color:#EF7F22; ">Titipin.id</a> adalah website untuk membantu mahasiswa/masyarakat untuk menjual dan membeli barang secara mudah, aman, dan transparan.<strong></p>
				<br>
			</div>

			<div class="col-md-4">
				<h3 style="color: #EF7F22">Halaman</h3>
				<br>
				<a style="color: black" href="<?php echo base_url('');?>">Home</a>
				<br>
				<a style="color: black" href="<?php echo base_url('about_us');?>">About Us</a>
				<br>
				<a style="color: black" href="#"></i>Our Team</a>
				<br>
				<a style="color: black" href="<?php echo base_url('news');?>">News</a>
				<br>
				<a style="color: black" href="#">Terms of Service</a>
				<br>
				<a style="color: black" href="#">Privacy and Policy</a>
				<br>
				<a style="color: black" href="#">FAQ</a>
				<br>
				<br>
			</div>

			<div class="col-md-4">
				<h3 style="color: #EF7F22">Contact Us</h3>
				<br>
				<div class="row text-center">
					<div class="col-xs-6" style="padding: 6px">
						<p class="fab fa-instagram" style="font-size: 40px; color: #EF7F22; padding: 5px"></p>
						<p style="vertical-align: text-top">@titipin.id</p>
					</div>
					<div class="col-xs-6" style="padding: 6px">
						<p class="fab fa-line" style="font-size: 40px; color: #EF7F22; padding: 5px"></p>
						<p>@cbi4965</p>
					</div>
					<div class="col-xs-6" style="padding: 6px">
						<p class="glyphicon glyphicon-earphone" style="font-size: 40px; color: #EF7F22; padding: 5px"></p>
						<p>+6281237217211</p>
					</div>
					<div class="col-xs-6" style="padding: 6px">
						<p class="glyphicon glyphicon-envelope" style="font-size: 40px; color: #EF7F22; padding: 5px"></p>
						<p>support@titipin.id</p>
					</div>
				</div>



			</div>

		</div>
	</div>
</div>

<!-- copyright -->
<div style="background-color: #FFFFFF; border-top:2px solid #E3E3E3; padding-top: 15px; padding-bottom: 15px">
	<div class="container">
		<p>Copyright © 2018 Titipin.id</p>
	</div>
</div>



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
		echo "
			<!--===============================================================================================-->
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
			echo "
				<script type='text/javascript'>
					function showHideContent(id1,id2){
						if(document.getElementById(id1).style.display==''){
							document.getElementById(id1).style.display='none';
						}
						else{
							if(document.getElementById(id2).style.display==''){
								document.getElementById(id2).style.display='none';
							}
							document.getElementById(id1).style.display='';
						}
					}    
				</script>
			";
		}
		echo "
			<!-- Resopnsive-Slider-JavaScript -->
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
	echo "
		<!-- Resopnsive-Slider-JavaScript -->
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
