        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Account Information
                        </div>
                        <?php 
                        if(isset($update))
                        {
                            echo "<div class='alert alert-success alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            Data berhasil disimpan
                        </div>";
                        }
                        ?>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <form onsubmit="return checkInput()" name="form" enctype="multipart/form-data" method="POST" 
                            action="<?php echo base_url('admin/dashboard'); ?>">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label>Username </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="form-group">
                                            <label>: </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <p style="margin-top:-7px; margin-left: -57px;" class="form-control-static"><?php echo $this->session->userdata('username');?></p>
                                        </div>
                                    </div>
                                <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.row (nested) -->
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label>Nama </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="form-group">
                                            <label>: </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input style="margin-top:-7px; margin-left: -70px;" required class="form-control" name ="nama" placeholder="Enter Name"
                                            value="<?php echo $this->session->userdata('nama');?>"
                                            >
                                        </div>
                                    </div>
                                <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.row (nested) -->
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label>E-mail </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="form-group">
                                            <label>: </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="YOUR@EXAMPLE.COM" style="margin-top:-7px; margin-left: -70px;" required class="form-control" name ="email" placeholder="Enter email"
                                            value="<?php echo $this->session->userdata('email');?>"
                                            >
                                        </div>
                                    </div>
                                <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.row (nested) -->
                                <!-- /.row (nested) -->
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label>Phone Number </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="form-group">
                                            <label>: </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input pattern="\d*" maxlength="15" title="Masukkan hanya angka" style="margin-top:-7px; margin-left: -70px;" required class="form-control" name ="phone" placeholder="Enter Phone Number"
                                            value="<?php echo $this->session->userdata('phone');?>"
                                            >
                                        </div>
                                    </div>
                                <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.row (nested) -->
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label>Change Password </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="form-group">
                                            <label>: </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input id="pwd" type="password" style="margin-top:-7px; margin-left: -70px;" class="form-control" name ="password" placeholder="Enter New Password">
                                        </div>
                                    </div>
                                <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.row (nested) -->
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label>Confirm Password </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="form-group">
                                            <label>: </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input id="confpwd" type="password" style="margin-top:-7px; margin-left: -70px;" class="form-control" name ="confirmpassword" placeholder="Enter New Password">
                                        </div>
                                    </div>
                                <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.row (nested) -->
                                    <div style="margin-left: 20px;" class="col-lg-8">
                                        <div class="form-group text-right">
                                            <button type="submit" value="simpan" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <script>
    var pwd = document.getElementById('pwd');
    var confpwd = document.getElementById('confpwd');
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