        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Komentar</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Read DataTables Komentar
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Komentar</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <?php $nourut = 1; ?>
                                <?php foreach ($comment->result() as $key) { ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $nourut++;?></td>
                                        <td><?php echo $key->name;?></td>
                                        <td><?php echo $key->comment;?></td>
                                        <td><?php echo $key->tanggal;?></td>
                                        <td><?php echo anchor("Komentar/delete/{$key->id}",'DELETE',['class'=>'btn btn-danger']); ?></td>
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