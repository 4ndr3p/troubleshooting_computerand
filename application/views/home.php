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
      </ol>

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <!-- Blog Post -->
          <?php foreach ($blog->result() as $key) { ?>
          <div class="card mb-4">
            <img class="card-img-top" src="<?php base_url(); ?> assets/images/<?php echo $key->gambar; ?>" width="750" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title"><?php echo $key->judul;?></h2>
              <p class="card-text">                
                <?php  $artikel = $key->isi; $potong = substr($artikel, 0, 300); echo $potong; ?></p>
              <a href="<?php echo base_url('welcome/readmore/'.$key->id);?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo $key->tanggal;?> by
              <a href="#"><?php echo $key->penulis;?></a>
            </div>
          </div>
          <?php } ?>

          <!-- Pagination -->
          <?php echo $pagination; ?>
          <!--<ul class="pagination justify-content-center mb-4">-->
          <!--  <li class="page-item">-->
          <!--    <a class="page-link" href="#">&larr; Older</a>-->
          <!--  </li>-->
          <!--  <li class="page-item disabled">-->
          <!--    <a class="page-link" href="#">Newer &rarr;</a>-->
          <!--  </li>-->
          <!--</ul>-->
        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <?php foreach ($kategori as $key) { ?>
                    <li>
                      <a href="<?php echo base_url('welcome/artikel_kategori/'.$key->id);?>"><?php echo $key->kategori;?></a>
                    </li>
                    <?php } ?>
              </div>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

    </div>