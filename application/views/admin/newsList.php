        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">News List</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">Title</th>
                                        <th class="text-center">Author</th>
                                        <th class="text-center">Date</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $berita): ?>
                                    <tr class="text-center">
                                        <td ><?php echo $berita['id_news'];?></td>
                                        <td><?php echo $berita['judul_news']; ?></td>
                                        <td><?php echo $berita['author']; ?></td>
                                        <td><?php echo $berita['waktu_news']; ?></td>
                                        <td class="text-center">
                                            <a href="<?php echo base_url("news/detail/").$berita['id_news']; ?>"><button type="button" class="btn btn-primary">View</button></a>
                                            <a href="<?php echo base_url("admin/editNews/").$berita['id_news']; ?>"><button type="button" class="btn btn-success">Edit</button></a>
                                            <a href="<?php echo base_url("admin/deleteNews/").$berita['id_news']; ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                    <!--tr class="gradeU">
                                        <td>Other browsers</td>
                                        <td>All others</td>
                                        <td>-</td>
                                        <td class="center">-</td>
                                        <td class="center">U</td>
                                    </tr-->
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
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