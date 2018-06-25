    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <?php foreach ($judul as $key) { ?>
      <h1 class="mt-4 mb-3"><?php echo $key->judul;?>
        <small><?php echo $key->sub_judul;?></small>
      </h1>
      <?php } ?>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url();?>">Home</a>
        </li>
        <li class="breadcrumb-item active">Aplikasi</li>
      </ol>

      <p><b><i><u>HALAMAN USER / PENGGUNA</u></i></b></p><br>
      <p><b>Halaman ini merupakan tampilan untuk <i>User</i> atau pengguna</b></p>
      <p>Petunjuk penggunaan:</p>
      <p>1. Seumua isian akan terisi secara otomatis sesuai dengan <b><i>solusi</i></b> yang didapatkan</p>
      <p>2. Kemudian tekan tombol  <b>DIAGNOSIS LAGI</b> untuk memilih permasalahan jika masih memerlukan diagnosis lebih lanjut</p>
      <p>3. Maka kita akan berpindah ke <u><b><i>Halaman Baru</i></b> </u></p><br>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" action="<?php echo base_url('aplikasi/solusi');?>" method="post" enctype="multipart/form-data">
                                        <?php foreach ($id_masalah as $key) { ?>
                                        <div class="form-group">
                                            <label for="id_konten">Kode Tabel yang pilih</label>
                                            <input class="form-control" placeholder="ID_table" name="id_table" type="text" value="<?php echo $key->kode;?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="id_konten">Dengan Permasalahan</label>
                                            <input class="form-control" placeholder="ID_table" name="id_table" type="text" value="<?php echo $key->permasalahan;?>" readonly>
                                        </div>
                                        <?php } ?>
                                        <?php foreach ($solusi as $key) { ?>
                                        <div class="form-group">
                                            <label for="id_konten">Kode Jawaban yang didapatkan</label>
                                            <input class="form-control" placeholder="ID_jawaban" name="id_jawaban" type="text" value="<?php echo $key->kode;?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="id_konten">Dengan Jawaban</label>
                                            <input class="form-control" placeholder="Jawaban" name="jawaban" type="text" value="<?php echo $key->konten;?>" readonly>
                                        </div>
                                        <fieldset disabled>
                                        <div class="form-group">
                                            <label>Solusi</label>
                                            <textarea class="form-control" name="isi" rows="3"><?php echo $key->detail;?></textarea>
                                            <p class="help-block">Isian ini akan terisi secara otomoatis sesuai dengan solusi yang didapatkan</p>
                                        </div>
                                        <?php } ?>
                                        </fieldset>
                                    </form>
                                </div>
                                <!-- /.col-lg-12 (nested) -->
                                <div class="col-lg-12">
                                    <form role="form" action="<?php echo base_url('aplikasi/proses1');?>" method="post" enctype="multipart/form-data">
                                        <label><b>Masih ada masalah, tekan tombol di bawah ini:<b></label>
                                        <div class="form-group">
                                            <label for="id">Pilih Jenis Permasalahan dan Tekan Proses</label>
                                            <select id="id" name="id" class="form-control">
                                                <?php foreach ($masalah as $key) { ?>
                                                <option value="<?php echo $key->kode;?>"><?php echo $key->permasalahan;?></option><?php } ?>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-lg btn-block"><b>DIAGNOSIS LAGI</b></button>
                                      </div>
                                      </form>
                                </div>
                                <!-- /.col-lg-12 (nested) -->
                            <!--     <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.tools.min.js"></script>-->
                            <!--    <script>flashembed("domba", "SejarahKomputer.swf");</script> -->
                            <!--    <div id="domba"></div> -->
                            <!--</div>-->
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
    <!-- /.container -->