        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">P8</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Read DataTables P8
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <?php echo anchor("P8_admin/create_P8",'CREATE',['class'=>'btn btn-primary']); ?>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Tipe</th>
                                        <th>Konten</th>
                                        <th>Detail</th>
                                        <th colspan="2">Aksi</th>
                                    </tr>
                                </thead>
                                <?php $nourut = 1; ?>
                                <?php foreach ($P8->result() as $key) { ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $nourut++;?></td>
                                        <td><?php echo $key->kode;?></td>
                                        <td><?php echo $key->tipe;?></td>
                                        <td><?php echo $key->konten;?></td>
                                        <td><?php echo $key->detail;?></td>
                                        <td><?php echo anchor("P8_admin/edit/{$key->id}",'UPDATE',['class'=>'btn btn-success']); ?></td>
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