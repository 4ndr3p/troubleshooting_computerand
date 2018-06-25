        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Update Form P3
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo base_url('P3_admin/save_edit');?>" method="post" enctype="multipart/form-data">                                     
                                        <?php foreach ($P3_id as $key) { ?>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="ID" name="id" type="hidden" value="<?php echo $key->id;?>">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Konten" name="konten" type="text" value="<?php echo $key->konten;?>" autofocus>
                                        </div>
                                        <?php echo form_error('konten'); ?>
                                        <div class="form-group">
                                            <label>Isi dengan detail dari pertanyaan / jawaban</label>
                                            <textarea class="form-control" name="detail" rows="5"><?php echo $key->detail;?></textarea>
                                            <p class="help-block">Tekan Tombol Enter dua kali (2x) untuk masuk ke paragraf baru</p>
                                        </div>
                                        <?php echo form_error('detail'); ?>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-default">Batal</button>
                                        <?php } ?>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
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