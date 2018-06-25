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
        <li class="breadcrumb-item active">Permasalahan</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-3 mb-4">
          <div class="list-group">
            <?php foreach ($permasalahan as $key) { ?>
            <a href="<?php echo base_url($key->kode);?>" class="list-group-item"><?php echo $key->permasalahan;?></a>
            <?php } ?>
          </div>
        </div>
        <!-- Content Column -->
        <div class="col-lg-9 mb-4">
          <h2>Tabel Detail dari Permasalahan</h2>
          <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Kode</th>
                      <th>Tipe</th>
                      <th>Konten</th>
                      <th>Detail</th>
                  </tr>
              </thead>
              <?php $nourut = 1; ?>
              <?php foreach ($P9 as $key) { ?>
              <tbody>
                  <tr>
                      <td><?php echo $nourut++;?></td>
                      <td><?php echo $key->kode;?></td>
                      <td><?php echo $key->tipe;?></td>
                      <td><?php echo $key->konten;?></td>
                      <td><?php echo $key->detail;?></td>
                  </tr>
              </tbody>
              <?php } ?>
          </table>
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->