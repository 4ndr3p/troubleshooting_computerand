        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Create Form P2
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo base_url('P2_admin/proses');?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="id">Pilih Jenis Permasalahan dan Tekan Proses</label>
                                            <select id="id" name="id" class="form-control">
                                                <?php foreach ($permasalahan_select as $key) { ?>
                                                <option value="<?php echo $key->id;?>"><?php echo "$key->permasalahan || $key->kode";?></option>                                               
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-default">Proses</button>                                       
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo base_url('P2_admin/proses_pertanyaan');?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="id_konten">Pilih Pertanyaan Sebelumnya dan Tekan Proses</label>
                                            <?php foreach ($permasalahan_select_id as $key) { ?>
                                            <fieldset hidden>
                                            <input class="form-control" placeholder="ID" name="id" type="text" value="<?php echo $key->id;?>" readonly>
                                            </fieldset>
                                            <?php } ?>
                                             <select id="id_konten" name="id_konten" class="form-control">
                                                <?php foreach ($konten_select_id as $key) { ?>
                                                <option value="<?php echo $key->kode;?>"><?php echo "$key->konten";?></option>                                               
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-default">Proses</button>                                       
                                    </form>
                                    <form role="form" action="<?php echo base_url('P2_admin/save');?>" method="post" enctype="multipart/form-data">                                     
                                        <fieldset hidden>
                                        <div class="form-group">
                                            <label>Kode</label>
                                            <?php foreach ($permasalahan_select_id as $key) { ?>
                                            <input class="form-control" placeholder="ID" name="id" type="text" value="<?php echo $key->id;?>" readonly>
                                            <?php } ?>
                                            <p class="help-block">Sesuai dengan permasalahan yang dipilih sebelumnya</p>
                                             <input class="form-control" placeholder="ID_kode" name="id_kode" type="text" value="<?php echo $key->id;?>" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Kode</label>
                                            <input class="form-control" placeholder="ID_kode" name="id_kode" type="text" value="<?php echo $kode_select_id;?>" readonly>
                                            <p class="help-block">Sesuai dengan permasalahan yang dipilih sebelumnya</p>
                                        </div>
                                        </fieldset>
                                        <div class="form-group">
                                            <label>Pilih Tipe</label>
                                            <select name="tipe" class="form-control">
                                                <option value="Q">Question / Pertanyaan</option>
                                                <option value="A">Answer / Jawaban</option>
                                            </select>
                                        </div>
                                        <?php echo form_error('tipe'); ?>
                                        <div class="form-group">
                                            <label>Pilih Jawaban</label>
                                            <select name="jawaban" class="form-control">
                                                <option value="-">Pertanyaan Awal</option>
                                                <option value="1">Yes / Ya</option>
                                                <option value="0">No / Tidak</option>
                                            </select>
                                        </div>
                                        <?php echo form_error('jawaban'); ?>                                        
                                        <div class="form-group">
                                            <label>Ketikkan Pertanyaan atau Jawaban</label>
                                            <input class="form-control" placeholder="Konten" name="konten" type="text">
                                        </div>
                                        <?php echo form_error('konten'); ?>
                                        <div class="form-group">
                                            <label>Ketikkan Detail dari Pertanyaan atau Jawaban</label>
                                            <textarea class="form-control" rows="3" name="detail" type="text"></textarea>
                                        </div>
                                        <?php echo form_error('detail'); ?>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button type="reset" class="btn btn-default">Batal</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
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