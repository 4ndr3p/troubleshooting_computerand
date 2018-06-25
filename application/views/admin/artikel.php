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
                            Read DataTables Artikel
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <?php echo anchor("artikel/create",'CREATE',['class'=>'btn btn-primary']); ?>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Judul</th>
                                        <th>Isi</th>
                                        <th>Penulis</th>
                                        <th>Kategori</th>
                                        <th>Tanggal</th>
                                        <th colspan="2">Aksi</th>
                                    </tr>
                                </thead>
                                <?php $nourut = 1; ?>
                                <?php foreach ($artikel->result() as $key) { ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $nourut++;?></td>
                                        <td><img src="<?php base_url(); ?> assets/images/<?php echo $key->gambar; ?>" width="100" height="100"></td>
                                        <td><?php echo $key->judul;?></td>
                                        <?php $artikel = $key->isi; $potong = substr($artikel, 0, 100); ?>
                                        <td><?php echo $potong;?></td>
                                        <td><?php echo $key->penulis;?></td>
                                        <td><?php echo $key->kategori;?></td>
                                        <td><?php echo $key->tanggal;?></td>
                                        <td><?php echo anchor("artikel/edit/{$key->id}",'UPDATE',['class'=>'btn btn-success']); ?></td>
                                        <td><?php echo anchor("artikel/delete/{$key->id}",'DELETE',['class'=>'btn btn-danger']); ?></td>
                                    </tr>
                                </tbody>
                                <?php } ?>
                            </table>
                            <?php echo $pagination; ?>
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