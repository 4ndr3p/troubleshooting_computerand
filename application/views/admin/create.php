        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Artikel</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Create Form Artikel
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo base_url('artikel/save');?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Judul" name="judul" type="text" autofocus>
                                        </div>
                                        <?php echo form_error('judul'); ?>
                                        <div class="form-group">
                                            <label>isi Blog</label>
                                            <textarea class="form-control" name="isi" rows="5"></textarea>
                                            <p class="help-block">Tekan Tombol Enter dua kali (2x) untuk masuk ke paragraf baru</p>
                                        </div>
                                        <?php echo form_error('isi'); ?>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Kategori" name="kategori" type="text">
                                        </div>
                                        <?php echo form_error('kategori'); ?>
                                        <div class="form-group">
                                            <label>Masukkan Gambar</label>
                                            <input class="form-control" name="gambar" type="file">
                                            <p class="help-block">Max: 2 MB</p>
                                        </div>
                                        <div class="form-group">
                                            <select name="penulis" class="form-control selectpicker">
                                                <option value="<?php echo $this->session->userdata("username"); ?>"><?php echo $this->session->userdata("username"); ?></option>
                                            </select>
                                        </div>                                        
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-default">Batal</button>
                                    </form>
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