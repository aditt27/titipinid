<div style="margin-top:50px;" class="container">
  <form>
    <h1>Akun Saya</h1>
    <fieldset>
      <h3 for="name">Name: <?php echo $this->session->userdata('nama');?></h3>
      <h3 for="name">Username: <?php echo $this->session->userdata('username');?></h3>
      <h3 for="name">Email: <?php echo $this->session->userdata('email');?></h3>
      <h3 for="name">Phone Number: <?php echo $this->session->userdata('phone');?></h3>
    <a href="<?php echo base_url('user/editprofile')?>" ><button type="button">Edit</button></a>
  </form>
</div>