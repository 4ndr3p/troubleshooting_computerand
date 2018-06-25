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
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <?php foreach ($contact as $key) { ?>
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo $key->latitude;?>,<?php echo $key->longitude;?>&hl=es;z=14&amp;output=embed"></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Contact Details</h3>
          <a href="https://www.maps.ie/coordinates.html">Untuk mencari koardinat alamat anda</a>
          <p><?php echo $key->alamat;?></p>
          <p>
            <abbr title="Phone">P</abbr>: <?php echo $key->telp;?>
          </p>
          <p>
            <abbr title="Email">E</abbr>:
            <a href="#"><?php echo $key->email;?>
            </a>
          </p>
          <p>
            <abbr title="Name">N</abbr>: <?php echo $key->nama;?>
          </p>
        </div>
        <?php } ?>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->