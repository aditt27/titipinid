<div style="margin-top:80px; margin-bottom: 60px" class="container">
	<div class="row">
		<h1>Akun Saya</h1>
		<hr style="border-color: #EF7F22; height: 5px">
		<div class="col-md-8">
			<h1 for="name"><?php echo $this->session->userdata('nama');?></h1>
			<br> <br>
			<div class="row">
				<div class="col-xs-3">
					<p style="font-size: 20px">Username:</p>
					<p style="font-size: 20px">Email:</p>
					<p style="font-size: 20px">Nomor Hp:</p>
				</div>
				<div class="col-xs-9">
					<p style="font-size: 20px" for="name"><?php echo $this->session->userdata('username');?></p>
					<p style="font-size: 20px" for="name"><?php echo $this->session->userdata('email');?></p>
					<p style="font-size: 20px" for="name"><?php echo $this->session->userdata('phone');?></p>
				</div>
			</div>
			<br>
		</div>
		<div class="col-md-4">
			<h3>Pengaturan</h3>
			<hr style="border-color: #EF7F22; height: 5px">
			<a style="font-size: 15px" href="<?php echo base_url('user/editprofile')?>">Ubah Profil</a>
		</div>
	</div>
	<div class="text-center" style="padding-top: 180px">
		<h3>Terimakasih telah mendaftar. Tunggu info lebih lanjut dari kami.</h3>
	</div>
</div>
