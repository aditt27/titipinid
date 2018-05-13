        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit News</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php //Basic Form Elements?>
                        </div>
                        <div class="panel-body">
                            <form role="form" enctype="multipart/form-data" method="POST" 
                            action="<?php echo base_url('admin/update_news'); ?>">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="form-group">
                                            <label>Author</label>
                                            <p class="form-control-static"><?php echo $this->session->userdata('nama');?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input required class="form-control" name ="judul_news" placeholder="Enter title" 
                                            value="<?php echo $data['judul_news'];?>"
                                            >
                                        </div>
                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <?php 
                                                if(isset($gambar))
                                                {
                                                    echo "</div>
                                                        <div class='form-group'>
                                                            <img src='".base_url('uploads/img/news/')."".$gambar['nama_file']."'>
                                                        </div>
                                                        <div class='form-group'>
                                                            <label>Ganti Gambar?</label>
                                                            <input type='file' name='input_gambar'>
                                                        </div>";
                                                }
                                                else
                                                {
                                                    echo "<input type='file' name='input_gambar'>
                                                        </div>";
                                                }
                                            ?>
                                    </div>
                                    <div class="col-lg-2">
                                        <div style ="margin-top: 105px;" class="form-group">
                                            <label>
                                                <input <?php if($data['PinFlag'] == '1') echo 'checked'; ?> type="checkbox" name='PinFlag' value='1'> Pin This News
                                            </label>
                                        </div>
                                    </div>
                                <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.row (nested) -->
                                <div class="row">
                                    <div class="col-lg-10 form-group">
                                        <label>Isi News</label>
                                        <textarea required="required" name="isi_news" style="margin-right:1000px;" class="ckeditor" id="ckeditor" ><?php echo $data['isi_news'];?></textarea>
                                        <input type="hidden" name="id_author" 
                                        value="<?php echo $this->session->userdata('id');?>" style="display: none">
                                        <input type="hidden" name="id_news" 
                                        value="<?php echo $data['id_news'];?>" style="display: none">
                                        <?php
                                        if(isset($gambar))
                                        {
                                            echo "<input type='hidden' name='id_gambar' 
                                        value='".$gambar['id']."' style='display: none'>
                                        <input type='hidden' name='nama_file' 
                                        value='".$gambar['nama_file']."' style='display: none'>";
                                        }
                                        ?>
                                    </div>
                                    <div class="col-lg-10 form-group">
                                        <label>Preview News</label>
                                        <textarea required="required" name="preview_news" style="margin-right:1000px;" class="form-control" maxlength="300"><?php echo $data['preview_news'];?></textarea>
                                    </div>
                                    
                                    <div class="col-lg-10">
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
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->