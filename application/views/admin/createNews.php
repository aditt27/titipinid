        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Create News</h1>
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
                            <form role="form" enctype="multipart/form-data" method="POST" action="<?php echo base_url('admin/save_news'); ?>">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="form-group">
                                            <label>Author</label>
                                            <p class="form-control-static"><?php echo $this->session->userdata('nama');?></p>
                                            <input type="hidden" name="<?php echo 'id_author'; ?>" value="<?php echo $this->session->userdata('id');?>" style="display: none">
                                        </div>
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" name ="judul_news" placeholder="Enter title"
                                            <?php if(isset($message)) echo "value='".$judul_news."'";?>>
                                        </div>
                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <input type="file" name="input_gambar">
                                        </div>
                                    </div>
                                <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.row (nested) -->
                                <div class="row">
                                    <div class="col-lg-10 form-group">
                                        <label>Isi News</label>
                                        <textarea name="isi_news" style="margin-right:1000px;" class="ckeditor" id="ckeditor" ><?php if(isset($message)) echo $isi_news;?></textarea>
                                    </div>
                                    
                                    <div class="col-lg-10">
                                        <div class="form-group text-right">
                                            <button type="submit" value"simpan" class="btn btn-primary">Simpan</button>
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