        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Contact</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Create, Read & Delete Contact
                        </div>
                        <div class="panel-body">
                            <h3>Create</h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo base_url('contact_admin/save');?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Alamat di Peta</label>
                                            <input class="form-control" placeholder="Latitude" name="latitude" type="text">
                                            <input class="form-control" placeholder="Longitude" name="longitude" type="text">
                                            <a href="https://www.maps.ie/coordinates.html">Untuk mencari koardinat alamat anda</a>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Lengkap</label>
                                            <textarea class="form-control" name="alamat" rows="5"></textarea>
                                            <p class="help-block">Isi dengann alamat lengkap</p>
                                        </div>
                                        <?php echo form_error('alamat'); ?>
                                        <div class="form-group">
                                            <label>Nama, Nomor Telpon/HP, dan e-mail</label>
                                            <input class="form-control" placeholder="Nama" name="nama" type="text">
                                            <input class="form-control" placeholder="Telpon/ HP" name="telp" type="text">
                                            <input class="form-control" placeholder="e-mail" name="e-mail" type="text">
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
                                        <th>Blog Home</th>
                                        <th>Subheading</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <?php $nourut = 1; ?>
                                <?php foreach ($contact as $key) { ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $nourut++;?></td>
                                        <td><?php echo $key->latitude;?></td>
                                        <td><?php echo $key->longitude;?></td>
                                        <td><?php echo $key->alamat;?></td>
                                        <td><?php echo $key->nama;?></td>
                                        <td><?php echo $key->telp;?></td>
                                        <td><?php echo $key->email;?></td>
                                        <td><?php echo anchor("contact_admin/delete/{$key->id}",'DELETE',['class'=>'btn btn-danger']); ?></td>
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