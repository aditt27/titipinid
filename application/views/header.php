<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Jasa Titip, jual barang bekas, titip beli , titipin, Titip, Titipin, jual-beli, Jastip, Titip Jual Titip Beli, titipjual, titip, Titip, nitip, jual, beli, jastip, jastip terpercaya, jastip online, jastip murah, jual barang bekas, titip jual" />
	<link rel="shortcut icon"  href="<?php echo base_url('assets/');?>images/title.png">
	<title>Titipin.id - 
		<?php
		if(isset($page))
		{
			if($page == "login")
			{
				echo "Login";
			}
			elseif($page == "about")
			{
				echo "About Us";
			}
			else
			{
				echo "News";
			}
		}
		else
		{
			echo "Titip Jual dan Titip Beli";
		}
		?>
	</title>

	<link rel="stylesheet" href="<?php echo base_url('assets/')?>css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="<?php echo base_url('assets/')?>fa/css/fontawesome-all.min.css" type="text/css" media="all" />
	<link href="<?php echo base_url('assets/')?>css/nav.css" rel="stylesheet" type="text/css" media="all" />
	<script src="<?php echo base_url('assets/')?>js/modernizr.custom.js"></script>
	<link rel="stylesheet" href="<?php echo base_url('assets/')?>css/style.css" type="text/css" />

	<!-- fonts -->
	<link rel="stylesheet" href="https://d1azc1qln24ryf.cloudfront.net/114779/Socicon/style-cf.css?u8vidh">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- fonts -->

	<!-- Default-JavaScript-File -->
	<script src="<?php echo base_url('assets/')?>js/jquery-2.1.4.min.js"></script>
	<!-- //Default-JavaScript-File -->
	<?php
	if(isset($page))
	{
		if($page=="login")
		{
			//khusus login page
			echo "
			<!--===============================================================================================-->
			<link rel='stylesheet' type='text/css' href='".base_url('assets/login/')."fonts/font-awesome-4.7.0/css/font-awesome.min.css'>
			<!--===============================================================================================-->
			<link rel='stylesheet' type='text/css' href='".base_url('assets/login/')."fonts/Linearicons-Free-v1.0.0/icon-font.min.css'>
			<!--===============================================================================================-->
			<link rel='stylesheet' type='text/css' href='".base_url('assets/login/')."vendor/animate/animate.css'>
			<!--===============================================================================================-->	
			<link rel='stylesheet' type='text/css' href='".base_url('assets/login/')."vendor/css-hamburgers/hamburgers.min.css'>
			<!--===============================================================================================-->
			<link rel='stylesheet' type='text/css' href='".base_url('assets/login/')."vendor/animsition/css/animsition.min.css'>
			<!--===============================================================================================-->
			<link rel='stylesheet' type='text/css' href='".base_url('assets/login/')."vendor/select2/select2.min.css'>
			<!--===============================================================================================-->	
			<link rel='stylesheet' type='text/css' href='".base_url('assets/login/')."vendor/daterangepicker/daterangepicker.css'>
			<!--===============================================================================================-->
			<link rel='stylesheet' type='text/css' href='".base_url('assets/login/')."css/util.css'>
			<link rel='stylesheet' type='text/css' href='".base_url('assets/login/')."css/main.css'>
			<!--===============================================================================================-->
		";
		}
		else if($page=="news") {

		}
		else
		{
			echo "
			<!-- scrolling script -->
			<script type='text/javascript'>
				jQuery(document).ready(function($) {
					$('.scroll').click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
			<!-- //scrolling script -->
			";
		}
	}
	else
	{
		echo "
		<!-- scrolling script -->
		<script type='text/javascript'>
			jQuery(document).ready(function($) {
				$('.scroll').click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<!-- //scrolling script -->
		";
	}
	?>
</head>
<body>
	<!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      	<div class="container">
        	<div class="navbar-header">
          		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
	        	</button>
          		<a class="navbar-brand" href="<?php echo base_url();?>"><img style = "margin-top: -10px;" src="<?php echo base_url('assets/')?>images/logosmall.png" alt=""></a>
        	</div>
        	<div class="navbar-collapse collapse navbar-right">
          		<ul class="nav navbar-nav">
		            <li><a href="<?php echo base_url('about_us#jasa');?>">TITIP JUAL</a></li>
		            <li><a href="<?php echo base_url('about_us#jasa');?>">TITIP BELI</a></li>
		            <li <?php //style="border-left: 2px solid #E0DBD8;" ?> class="dropdown">
              			<a href="#" class="dropdown-toggle " data-toggle="dropdown">MENU <b class="caret"></b></a>
		              	<?php 
		              		if($this->session->userdata('role')!=null)
							{
								$data_user = $this->session->userdata('role');
								if($data_user == 3)
								{
									echo "<ul class='dropdown-menu' style='width:200px;'>";
									echo "<li><a href='".base_url('admin')."'>".$this->session->userdata('nama')."</a></li>";
									echo "<li><a href='". base_url('logout')."'>". "KELUAR</a></li>";
								}
							}
							else
							{
								echo "<ul class='dropdown-menu'>";
								echo "<li><a href='#'>DAFTAR</a></li>";
								echo "<li><a href='".base_url('login')."'>MASUK</a></li>";
								echo "<li><a href='#'>BANTUAN</a></li>";
							}
						?>
					</li>
				</ul>
        	</div><!--/.nav-collapse -->
      	</div>
    </div>
