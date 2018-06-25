    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <?php foreach ($judul as $key) { ?>
      <h1 class="mt-4 mb-3"><?php echo $key->judul;?>
        <small><?php echo $key->sub_judul;?></small>
      </h1>
      <?php } ?>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <?php foreach ($kategori_select as $key) { ?>
        <li class="breadcrumb-item active"><?php echo $key->kategori;?></li>
        <?php } ?>
      </ol>

      <!-- Blog Post -->
      <?php foreach ($kategori_id as $key) { ?>
      <div class="card mb-4">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <a href="#">
                <img class="img-fluid rounded" src="<?php base_url(); ?> assets/images/<?php echo $key->gambar; ?>" width="750" alt="">
              </a>
            </div>
            <div class="col-lg-6">
              <h2 class="card-title"><?php echo $key->judul;?></h2>
              <p class="card-text"><?php  $artikel = $key->isi; $potong = substr($artikel, 0, 300); echo $potong; ?></p>
              <a href="<?php echo base_url('welcome/readmore/'.$key->id);?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
          </div>
        </div>
        <div class="card-footer text-muted">
          Posted on <?php echo $key->tanggal;?> by
          <a href="#"><?php echo $key->penulis;?></a>
        </div>
      </div>
      <?php } ?> 
      <!-- Pagination -->
      <ul class="pagination justify-content-center mb-4">
        <li class="page-item">
          <a class="page-link" href="#">&larr; Older</a>
        </li>
        <li class="page-item disabled">
          <a class="page-link" href="#">Newer &rarr;</a>
        </li>
      </ul>

    </div>