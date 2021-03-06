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
                                            <input required class="form-control" name ="judul_news" placeholder="Enter title"
                                            <?php if(isset($message)) echo "value='".$judul_news."'";?>>
                                        </div>
                                        <div class="form-group">
                                            <label>Tag : </label>
                                            <?php for($i=0; $i<count($tag); $i++)
                                            {
                                                echo "<label class='radio-inline'>
                                                <input ";
                                                if($i==0) echo "checked";
                                                echo " onclick='check()' type='radio' name='tag' value='".$tag[$i]['id_tag']."'>".$tag[$i]['nama_tag']."
                                            </label>";
                                            }
                                            ?>
                                            
                                            <label class="radio-inline">
                                                <input onclick="check()" type="radio" name="tag" id="newtag" value="-1">add a new tag: 
                                            </label>
                                            <label><input disabled onkeydown="upperCaseF(this)" maxlength="20" class="form-control" type="text" name="new_tag" id="new_tag" placeholder="Enter new tag"></label>
                                        </div>
                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <input required type="file" name="input_gambar">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div style ="margin-top: 105px;" class="form-group">
                                            <label>
                                                <input type="checkbox" name='PinFlag' value='1'> Pin This News
                                            </label>
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