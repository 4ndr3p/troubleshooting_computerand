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
      <p>1. Halaman ini merupakan kelanjutn dari halaman sebelumnya yaitu <b><i><u>Pemilihan Masalah</u></i></b></p>
      <p>2. Kemudian jawablah pertanyaan awal</p>
      <p>3. Setelah itu tekan tombol  <b>YES/YA</b> jika jawaban anda <b>YA</b> dan tekan tombol <b>NO/TIDAK</b> jika jawaban anda <b>TIDAK</b></p>
      <p>4. Maka akan tampil pertanyaan sesuai dengan jawaban yang telah di jawab jika masih ada pertanyaan</p>
      <p>5. Ulangi lagi <b><i>langkah 3</i></b></p>
      <p>5. Pada akhirnya akan tampil jawaban sesuai pertanyaan yang telah dilalui sebagai <b><i><u>SOLUSI</u></i></b></p>
      <p>6. Untuk <i><b>melihat solusi</b></i> tekan tombol <b>LIHAT SOLUSI</b></p>
      <p>7. Maka kita akan berpindah ke <u><b><i>Halaman Baru</i></b> </u></p><br>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">   
                                <div class="col-lg-12">
                                    <form role="form" action="<?php echo base_url('aplikasi/proses_pertanyaan_awal');?>" method="post" enctype="multipart/form-data">
                                        <fieldset hidden>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Table" name="table" type="text" value="<?php echo $table;?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <?php foreach ($id_masalah as $key) { ?>
                                            <input class="form-control" placeholder="ID_masalah" name="id_masalah" type="text" value="<?php echo $key->id;?>" readonly>
                                            <?php } ?>     
                                        </div>
                                        </fieldset>
                                        <fieldset disabled>
                                        <div class="form-group">
                                            <label for="id_awal">Jawablah pertanyaan Awal di bawah ini</label>
                                            <select id="id_awal" name="id_awal" class="form-control">
                                                <?php foreach ($tanya as $key) { ?>
                                                <option value="<?php echo $key->id_masalah;?>"><?php echo $key->konten;?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        </fieldset>
                                        <div class="form-group">
                                        <button type="submit" name="ya" class="btn btn-warning" value="1"><b>YES / YA</b></button>
                                        <button type="submit" name="tidak" class="btn btn-danger" value="0"><b>NO / TIDAK</b></button>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><b>Detail Pertanyaaan Awal</b></button>
                                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>  
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="?" method="post">
                                                                <div class="form-group">
                                                                    <label for="table">Berasal dari tabel</label>
                                                                    <input class="form-control" placeholder="Table" name="table" type="text" value="<?php echo $table;?>" readonly>
                                                                </div>
                                                                <?php foreach ($id_masalah as $key) { ?>
                                                                <div class="form-group">
                                                                     <label for="table">dengan id permasalahan</label>
                                                                    <input class="form-control" placeholder="ID_masalah" name="id_masalah" type="text" value="<?php echo $key->id;?>" readonly>   
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="id_konten">dan permasalahannya yaitu</label>
                                                                    <textarea class="form-control" placeholder="Detail" name="detail" type="text" rows="5"><?php echo $key->permasalahan;?></textarea>    
                                                                </div>
                                                                <?php } ?>
                                                            </form>
                                                        </div>    
                                                        <div class="modal-footer">
                                                            Created by Vokasi.net
                                                        </div>
                                                    </div>
                                                </div>  
                                        </div>
                                        </div>
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