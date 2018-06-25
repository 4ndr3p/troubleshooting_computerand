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
                            Update Form Artikel
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <?php foreach ($artikel_id as $key) { ?>
                                    <form role="form" action="<?php echo base_url('artikel/save_edit');?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="ID" name="id" type="hidden" value="<?php echo $key->id;?>">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Judul" name="judul" type="text" value="<?php echo $key->judul;?>" autofocus>
                                        </div>
                                        <?php echo form_error('judul'); ?>
                                        <div class="form-group">
                                            <label>Isi Blog</label>
                                            <textarea class="form-control" name="isi" rows="5"><?php echo $key->isi;?></textarea>
                                            <p class="help-block">Tekan Tombol Enter dua kali (2x) untuk masuk ke paragraf baru</p>
                                        </div>
                                        <?php echo form_error('isi'); ?>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Kategori" name="kategori" type="text" value="<?php echo $key->kategori;?>" readonly>
                                        </div>
                                        <?php echo form_error('kategori'); ?>
                                        <div class="form-group">
                                            <select name="penulis" class="form-control selectpicker">
                                                <option value="<?php echo $this->session->userdata("username"); ?>"><?php echo $this->session->userdata("username"); ?></option>
                                            </select>
                                        </div>                                        
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