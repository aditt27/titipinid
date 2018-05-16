<div style="margin-top:50px;" class="container">
  <form onsubmit="return checkInput()" action="<?php echo base_url('daftar')?>" method="post">
    <?php if(isset($alert)) echo "<div style ='text-align: center;'class='alert alert-danger alert-dismissable'>
                            <button style ='text-align: center; type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            <h4>".$alert."</h4>
                            </div>";?>
    <h1>Daftar Akun</h1>
    <fieldset>
      <label for="name">Name: <a style="color:red;">*</a></label>
      <input required class="inputForm" type="text" id="name" name="name" placeholder="Enter Name" value="<?php if(isset($alert)) echo $post['nama_pengguna']?>">

      <label for="name">Username: <a style="color:red;">*</a></label>
      <input required class="inputForm" type="text" id="username" name="username" placeholder="Enter Username" value="<?php if(isset($alert)) echo $post['username_pengguna']?>">
      
      <label for="mail">Email: <a style="color:red;">*</a></label>
      <input required class="inputForm" type="email" id="mail" name="email" placeholder="Enter Email" value="<?php if(isset($alert)) echo $post['email_pengguna']?>">

      <label for="password">Password: <a style="color:red;">*</a></label>
      <input required class="inputForm" type="password" id="password" name="password" placeholder="Enter Password">

      <label for="password">Confirm Password: <a style="color:red;">*</a></label>
      <input required class="inputForm" type="password" id="passwordconf" placeholder="Confirm Password">

      <label for="password">Phone Number: </a></label>
      <input class="inputForm" type="text" id="phone" name="phone" placeholder="Enter Phone Number" pattern="\d*" maxlength="15" title="Masukkan hanya angka" value="<?php if(isset($alert)) echo $post['no_hp_pengguna']?>">
    </fieldset>
    <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
    <button type="submit">Daftar</button>
    <div class="text-center">
      <span class="txt1" >
        Already have account?
      </span>

      <a href="<?php echo base_url('login');?>" class="txt2 hov1">
        Sign in
      </a>
    </div>
  </form>
</div>

<script>
  var pwd = document.getElementById('password');
  var confpwd = document.getElementById('passwordconf');
  function checkInput() {
    var value1 = pwd.value;
    var value2 = confpwd.value;
    if (value1 || value2) {
      if(value1!=value2)
      {
          alert("Password confirmation doesn't match Password");
          return false;
      }
    } 
  }
</script>