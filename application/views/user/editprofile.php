<div style="margin-top:50px;" class="container">
  <form onsubmit="return checkInput()" action="<?php echo base_url('user/editProfile')?>" method="post">
    <?php if(isset($update)) 
    {
      if($update=='true')
      {
        echo "<div style ='text-align: center;'class='alert alert-success alert-dismissable'>
                            <button style ='text-align: center; type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            <h4>Data Updated</h4>
                            </div>";
      }
      else
      {
        echo "<div style ='text-align: center;'class='alert alert-danger alert-dismissable'>
                            <button style ='text-align: center; type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            <h4>Update Data Gagal, Email telah digunakan User lain</h4>
                            </div>";
      }
    }?>
    <h1>Edit Profile</h1>
    <fieldset>
      <label for="name">Name: <a style="color:red;">*</a></label>
      <input required class="inputForm" type="text" id="name" name="name" placeholder="Enter Name" value="<?php echo $this->session->userdata('nama')?>">

      <label for="name">Username:</label>
      <input disabled class="inputForm" type="text" id="username" name="username" placeholder="Enter Username" value="<?php echo $this->session->userdata('username')?>">
      
      <label for="mail">Email: <a style="color:red;">*</a></label>
      <input required class="inputForm" type="email" id="mail" name="email" placeholder="Enter Email" value="<?php echo $this->session->userdata('email')?>">

      <label for="password">Change Password:</label>
      <input class="inputForm" type="password" id="password" name="password" placeholder="Enter Password">

      <label for="password">Confirm Password:</label>
      <input class="inputForm" type="password" id="passwordconf" placeholder="Confirm Password">

      <label for="password">Phone Number: </a></label>
      <input class="inputForm" type="text" id="phone" name="phone" placeholder="Enter Phone Number" pattern="\d*" maxlength="15" title="Masukkan hanya angka" value="<?php echo $this->session->userdata('phone')?>">
    </fieldset>
    <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
    <button type="submit">Simpan</button>
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