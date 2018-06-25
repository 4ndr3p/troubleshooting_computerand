        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Pakar</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Create, Read & Delete Pakar
                        </div>
                        <div class="panel-body">
                            <h3>Create</h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo base_url('pakar_tambah/save');?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Nama" name="nama" type="text" autofocus>
                                        </div>
                                        <?php echo form_error('nama'); ?>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Username" name="username" type="text">
                                        </div>
                                        <?php echo form_error('username'); ?>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Password" name="password" type="password">
                                        </div>
                                        <?php echo form_error('password'); ?>
                                        <div class="form-group">
                                            <label>Tentang Pakar</label>
                                            <textarea class="form-control" name="tentang" rows="5"></textarea>
                                            <p class="help-block">Tekan Tombol Enter dua kali (2x) untuk masuk ke paragraf baru</p>
                                        </div>
                                        <?php echo form_error('tentang'); ?>
                                        <div class="form-group">
                                            <label>Masukkan Photo</label>
                                            <input class="form-control" name="photo" type="file">
                                            <p class="help-block">Max: 2 MB</p>
                                        </div>                                       
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
                                        <th>Photo</th>
                                        <th>Judul</th>
                                        <th>Isi</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <?php $nourut = 1; ?>
                                <?php foreach ($pakar as $key) { ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $nourut++;?></td>
                                        <td><img src="<?php base_url(); ?> assets/photo/<?php echo $key->photo; ?>" width="100" height="100"></td>
                                        <td><?php echo $key->nama;?></td>
                                        <td><?php echo $key->username;?></td>
                                        <td><?php echo $key->password;?></td>
                                        <td><?php echo $key->tentang;?></td>
                                        <td><?php echo $key->tanggal;?></td>
                                        <td><?php echo anchor("pakar_tambah/delete/{$key->id}",'DELETE',['class'=>'btn btn-danger']); ?></td>
                                    </tr>
                                </tbody>
                                <?php } ?>
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