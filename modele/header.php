<header class="bg-primary py-5 mb-5">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-lg-12">
        <h1 class="display-4 text-white mt-5 mb-2"><?php echo $messageAccueil ?></h1>
        <p class="lead mb-5 text-white-50">Sur le serveur, nous sommes le <?php echo date("l d F Y").", il est ".date("H:i") ?> et en locale, nous sommes le <?php  echo strftime("%A %d %B %Y") ." et il est ".strftime("%H:%M")?></p>
      </div>
    </div>
  </div>
</header>