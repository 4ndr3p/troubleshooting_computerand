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
        <li class="breadcrumb-item active">About</li>
      </ol>

      <!-- Intro Content -->
      <?php foreach ($about as $key) { ?>
      <div class="row">
        <div class="col-lg-6">
          <img class="img-fluid rounded mb-4" src="<?php base_url(); ?> assets/photo/<?php echo $key->photo; ?>" width="750"" alt="">
        </div>
        <div class="col-lg-6">
          <h2><?php echo $key->judul;?></h2>
          <?php $input = $key->isi; $pecah = explode("\r\n\r\n", $input); $text = ""; ?>
          <?php for ($i=0; $i<=count($pecah)-1; $i++) { ?>
          <?php $part = str_replace($pecah[$i], "<p>".$pecah[$i]."</p>", $pecah[$i]); $text .= $part; ?>
          <p><?php echo  $part;?></p>
          <?php } ?>
        </div>
      </div>
      <?php } ?>
      <!-- /.row -->
    </div>
    <!-- /.container -->