        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Permasalahan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Update Form Permasalahan
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php foreach ($permasalahan_id as $key) { ?>
                                    <form role="form" action="<?php echo base_url('permasalahan/save_edit');?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="ID" name="id" type="hidden" value="<?php echo $key->id;?>">
                                        </div>
                                       <div class="form-group">
                                            <label>Kode</label>
                                            <input class="form-control" name="kode" type="text" value="<?php echo $key->kode;?>" readonly>
                                            <p class="help-block">Kode ini akan tampil secara otomatis</p>
                                        </div>
                                        <?php echo form_error('kode'); ?>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Permasalahan" name="permasalahan" type="text" value="<?php echo $key->permasalahan;?>" autofocus>
                                        </div>
                                        <?php echo form_error('permasalahan'); ?>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-default">Batal</button>
                                    </form>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
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