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
      <p>1. Pilih permasalahan yang dialami dengan memilih <i>Combo Box</i> di bawah ini</p>
      <p>2. Kemudian tekan tombol  <b>DIAGNOSIS</b> untuk memilih permasalahan tersebut</p>
      <p>3. Untuk <i><b>memulai diagnosis</b></i> tekan tombol <b>MULAI DIAGNOSIS</b></p>
      <p>4. Maka kita akan berpindah ke <u><b><i>Halaman Baru</i></b> </u></p><br>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                              <fieldset hidden>
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo base_url('aplikasi/proses');?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="id">Pilih Jenis Permasalahan dan Tekan Proses</label>
                                            <select id="id" name="id" class="form-control">
                                                <?php foreach ($masalah as $key) { ?>
                                                <option value="<?php echo $key->kode;?>"><?php echo $key->permasalahan;?></option><?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <button type="submit" class="btn btn-success"><b>DIAGNOSIS</b></button>
                                      </div>
                                      </form>
                                </div>
                                </fieldset>
                                <!-- /.col-lg-6 (nested) -->
                             <div class="col-lg-12">
                                    <form role="form" action="<?php echo base_url('aplikasi/proses_pertanyaan');?>" method="post" enctype="multipart/form-data">
                                        <label for="id_konten">Tekan Tombol Mulai Diagnosis untuk Memulai Menjawab Pertanyaan</label>
                                        <button type="submit" class="btn btn-primary btn-lg btn-block"><b>MULAI DIAGNOSIS</b></button>
                                        <fieldset hidden>
                                        <div class="form-group">
                                            <label for="id_konten">Kode Permasalahan sesuai dengan Database</label>
                                            <input class="form-control" placeholder="Kode" name="kode" type="text" value="<?php echo $diagnosis;?>" readonly>
                                        </div>
                                        </fieldset>
                                    </form>
                                </div>
                                <!-- /.col-lg-12 (nested) -->   
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
    <!-- /.container -->