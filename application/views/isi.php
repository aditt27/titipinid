<!--titipin.id-->
<div style="background: whitesmoke">
	<div class="container" style="padding-top: 60px; padding-bottom: 60px">
		<div class="row">
			<div class="col-md-4">
				<img src="<?php echo base_url('assets/');?>images/logo.png" class="img-responsive">
			</div>
			<div class="col-md-8">
				<br>
				<h4 style="text-transform: uppercase; font-weight: bold; font-size: 18px; color: #EF7F22">Mempermudah Jual-Beli Kamu!</h4>
				<br>
				<p align="Justify" style="font-family: Open Sans">Titipin.id adalah sebuah startup yang mewujudkan proses jual beli menjadi lebih mudah, aman dan transparan dengan menyajikan pelayanan Titip Jual & Titip Beli.</p>
				<div class="find-about">
					<a href="<?php echo base_url('about_us')?>">Tentang Kami</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!--our services-->
<div>
	<div class="container" style="padding: 50px 40px 60px 40px">
		<div class="row">
			<div class="col-md-12 text-center" style="padding-bottom: 50px">
				<h2 style="color: #EF7F22; font-weight: bold">OUR SERVICES</h2>
			</div>

			<div class="col-md-6">
				<div style="border-style: solid; border-color: #EF7F22; border-radius: 30px; padding: 60px 40px 60px 40px">
					<h1 style="font-size: 100px" class="text-center">TITIP<br>JUAL</h1>
					<br>
					<p style="text-align: justify">Kami akan membantu proses menjual barang anda dengan metode <i>Mass Advertising</i>. barang yang akan dijual melalu Titipin.id akan diiklankan secara massal ke situs-situs jual-beli online terkemuka di Indonesia dan dunia melalui akun dari Titipin.id. Kami akan selalu memantau dan memperbaharui iklan dari barang tersebut hingga barang terjual. Oleh karena itu, customer (pihak penjual) tidak perlu mengiklankan barang secara pribadi dan melalui akun pribadi. </p>
					<br>
					<img class="img-responsive" src="<?php echo base_url('assets/');?>images/titipjual.jpg">
				</div>
			</div>

			<div class="col-md-6">
				<div style="border-style: solid; border-color: #EF7F22; border-radius: 30px; padding: 60px 40px 60px 40px">
					<h1 style="font-size: 100px" class="text-center">TITIP<br>BELI</h1>
					<br>
					<p style="text-align: justify;">Titip beli adalah suatu jasa yang membantu masyarakat untuk membeli sesuatu dengan lebih mudah. Pangsa pasar kami adalah masyarakat yang ingin membeli sesuatu diluar domisili mereka atau tidak memiliki waktu untuk membeli barang tersebut. Barang yang kami pasarkan bersifat global (makanan, barang, dan lain lain) ataupun event-based (tiket bioskop, tiket event, dan tiket-tiket lainnya)</p>
					<br>
					<img class="img-responsive" src="<?php echo base_url('assets/');?>images/titipbeli.jpg">
				</div>
			</div>
		</div>
	</div>
</div>

<div style="background: orange; padding-top: 50px">
	<div class="container">
		<div class="text-center" style="padding-bottom: 50px">
			<?php
			if($this->session->userdata('role')!=null)
			{
			$data_user = $this->session->userdata('role');
			if($data_user != 3)
			{
				echo "<h2 style=\"color: white; font-weight: bold; padding: 20px\">THANK YOU</h2>";
				echo "<p style=\"font-size: 20px; font-weight: bold; font-family: Open Sans, sans-serif\">Terimakasih telah menjadi bagian dari kami.</p>";
				echo "<br>";
				echo "<a href=\"".base_url('user')."\" class=\"btn btn-default\" style=\"font-size: 20px; color: #EF7F22; font-weight: bold; padding: 16px\">Ke Profil Anda</a>";
			}
			}
			else {
				echo "<h2 style=\"color: white; font-weight: bold; padding: 20px\">JOIN US</h2>";
				echo "<p style=\"font-size: 20px; font-weight: bold; font-family: Open Sans, sans-serif\">Permudah keinginan menitip anda dengan menjadi bagian dari kami.</p>";
				echo "<br>";
				echo "<a href=\"".base_url('login')."\" class=\"btn btn-default\" style=\"font-size: 20px; color: #EF7F22; font-weight: bold; padding: 16px\">Daftar Sekarang</a>";
			}
			?>
		</div>
	</div>
</div>
