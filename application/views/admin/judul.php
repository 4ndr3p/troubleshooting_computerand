        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Blog Home & Subheading</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Create, Read & Delete Blog Home & Subheading
                        </div>
                        <div class="panel-body">
                            <h3>Create</h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo base_url('judul/save');?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Judul Blog</label>
                                            <input class="form-control" name="judul" type="text" value="vokasi.net" readonly>
                                            <p class="help-block">Ini tidak dapat di ubah</p>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Sub Judul" name="sub_judul" type="text" autofocus>
                                        </div>
                                        <?php echo form_error('sub_judul'); ?>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-default">Batal</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                        <div class="panel-body">
                            <h3>Read & Delete</h3>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Blog Home</th>
                                        <th>Subheading</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <?php $nourut = 1; ?>
                                <?php foreach ($judul as $key) { ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $nourut++;?></td>
                                        <td><?php echo $key->judul;?></td>
                                        <td><?php echo $key->sub_judul;?></td>
                                        <td><?php echo anchor("judul/delete/{$key->id}",'DELETE',['class'=>'btn btn-danger']); ?></td>
                                    </tr>
                                </tbody>
                                <?php } ?>
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