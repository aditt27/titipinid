	<div style="margin-top: 50px;" class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<?php if(isset($alert)) echo "<div style ='text-align: center;'class='alert alert-danger alert-dismissable'>
                            <button style ='text-align: center; type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            <h4>Username atau Password salah</h4>
                            </div>";?>
				<form class="login100-form validate-form" method="POST" accept-charset="utf-8" action="<?php echo base_url('login'); ?>">
					<span class="login100-form-title p-b-33">
						Account Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button type="submit" class="login100-form-btn">
							Sign in
						</button>
					</div>

					<?php /*<div class="text-center p-t-45 p-b-4">
						<span class="txt1">
							Forgot
						</span>

						<a href="#" class="txt2 hov1">
							Username / Password?
						</a>
					</div>*/;?>

					<div class="text-center">
						<span class="txt1">
							Create an account?
						</span>

						<a href="<?php echo base_url('daftar');?>" class="txt2 hov1">
							Sign up
						</a>
					</div>
					<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
				</form>
			</div>
		</div>
	</div>