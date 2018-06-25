        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Slide Header</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Create, Read & Delete Slide Header
                        </div>
                        <div class="panel-body">
                            <h3>Create</h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="<?php echo base_url('header/save');?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Judul Slide</label>
                                            <input class="form-control" name="judul1" type="text">
                                            <p class="help-block">Sebagai Slide Header</p>
                                        </div>
                                        <?php echo form_error('judul1'); ?>
                                          <div class="form-group">
                                              <input class="form-control" placeholder="Deskripsi Slide Header" name="deskripsi1" type="text" autofocus>
                                          </div>
                                          <?php echo form_error('deskripsi1'); ?>
                                          <div class="form-group">
                                              <input class="form-control" placeholder="File Pertama" name="file1" type="file" onchange="tampilkanPreview(this,'preview')"/>
                                          </div>
<!--                                           <img id="preview" width="350px"/> -->
                                        <div class="form-group">
                                            <label>Judul Slide</label>
                                            <input class="form-control" name="judul2" type="text">
                                            <p class="help-block">Sebagai Slide Header</p>
                                        </div>
                                        <?php echo form_error('judul2'); ?>
                                          <div class="form-group">
                                              <input class="form-control" placeholder="Deskripsi Slide Header" name="deskripsi2" type="text" autofocus>
                                          </div>
                                          <?php echo form_error('deskripsi2'); ?>                                          
                                          <div class="form-group">
                                              <input class="form-control" placeholder="File Kedua" name="file2" type="file">
                                          </div>
                                        <div class="form-group">
                                            <label>Judul Slide</label>
                                            <input class="form-control" name="judul3" type="text">
                                            <p class="help-block">Sebagai Slide Header</p>
                                        </div>
                                        <?php echo form_error('judul3'); ?>
                                          <div class="form-group">
                                              <input class="form-control" placeholder="Deskripsi Slide Header" name="deskripsi3" type="text" autofocus>
                                          </div>
                                          <?php echo form_error('deskripsi3'); ?>
                                          <div class="form-group">
                                              <input class="form-control" placeholder="File Ketiga" name="file3" type="file">
                                          </div>
                                        <?php echo form_error('sub_judul'); ?>
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
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Nama File</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Nama File</th>
                                        <th>Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Nama File</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <?php $nourut = 1; ?>
                                <?php foreach ($header as $key) { ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $nourut++;?></td>
                                        <td><?php echo $key->judul1;?></td>
                                        <td><?php echo $key->deskripsi1;?></td>
                                        <td><?php echo $key->file1;?></td>
                                        <td><?php echo $key->judul2;?></td>
                                        <td><?php echo $key->deskripsi2;?></td>
                                        <td><?php echo $key->file2;?></td>
                                        <td><?php echo $key->judul3;?></td>
                                        <td><?php echo $key->deskripsi3;?></td>
                                        <td><?php echo $key->file3;?></td>
                                        <td><?php echo anchor("header/delete/{$key->id}",'DELETE',['class'=>'btn btn-danger']); ?></td>
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
<script type="text/javascript">
function tampilkanPreview(userfile,idpreview)
{
  var gb = userfile.files;
  for (var i = 0; i < gb.length; i++)
  {
    var gbPreview = gb[i];
    var imageType = /image.*/;
    var preview=document.getElementById(idpreview);
    var reader = new FileReader();
    if (gbPreview.type.match(imageType))
    {
      //jika tipe data sesuai
      preview.file = gbPreview;
      reader.onload = (function(element)
      {
        return function(e)
        {
          element.src = e.target.result;
        };
      })(preview);
      //membaca data URL gambar
      reader.readAsDataURL(gbPreview);
    }
      else
      {
        //jika tipe data tidak sesuai
        alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
      }
  }
}
</script>