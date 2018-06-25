    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <?php foreach ($blog_id as $key) { ?>
      <h1 class="mt-4 mb-3"><?php echo $key->judul;?>
        <small>by
          <a href="#"><?php echo $key->penulis;?></a>
        </small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url();?>">Home</a>
        </li>
        <li class="breadcrumb-item active"><?php echo $key->kategori;?></li>
      </ol>

      <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Preview Image -->
          
          <img class="img-fluid rounded" src="<?php base_url(); ?> assets/images/<?php echo $key->gambar; ?>" width="900" alt="">

          <hr>

          <!-- Date/Time -->
          <p>Posted on <?php echo $key->tanggal;?></p>

          <hr>

          <!-- Post Content -->
        <?php $input = $key->isi; $pecah = explode("\r\n\r\n", $input); $text = ""; ?>
        <?php for ($i=0; $i<=count($pecah)-1; $i++) { ?>
        <?php $part = str_replace($pecah[$i], "<p>".$pecah[$i]."</p>", $pecah[$i]); $text .= $part; ?>
        <?php echo  $part;?>
        <?php } ?>

          <hr>
          <!-- Comments Form -->
          <div class="card my-4">
            <h5 class="card-header">Leave a Comment:</h5>
            <div class="card-body">
              <form role="form" action="<?php echo base_url('welcome/save');?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <input class="form-control" placeholder="ID" name="id" type="hidden" value="<?php echo $key->id;?>">
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="Ketik Nama" name="name" type="text" autofocus>
                </div>
                <?php echo form_error('name'); ?>
                <div class="form-group">
                  <textarea class="form-control" rows="3" placeholder="Ketik Komentar" name="comment" type="text"></textarea>
                </div>
                <?php echo form_error('comment'); ?>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
          <?php } ?>
          <!-- Single Comment -->
          <?php foreach ($comment_id as $key) { ?>
          <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
              <h5 class="mt-0"><?php echo $key->name;?></h5>
              <?php echo $key->comment;?>
            </div>
          </div>
          <?php } ?>
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