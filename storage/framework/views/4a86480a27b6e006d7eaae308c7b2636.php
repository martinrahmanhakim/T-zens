<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Acara</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/acara.css">
    <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
    <link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  </head>
  <body>

    <nav>
      <div>
        <img src="<?php echo e(asset('assets/pics/tzens-untexted.png')); ?>" alt="">
        <h4>T-Zens</h4>
      </div>

      <ul>
        <li  onclick="window.location.href='<?php echo e(url('/')); ?>'">Home</li>
        <li class="active" onclick="window.location.href='<?php echo e(url('/acara')); ?>'">Acara</li>
        <li onclick="window.location.href='<?php echo e(url('/organisasi')); ?>'">Organisasi</li>
        <li onclick="window.location.href='<?php echo e(url('/kontak')); ?>'">Kontak</li>
        <li><button class="button daftar" onclick="window.location.href='<?php echo e(url('/sign-up')); ?>'">Daftar</button></li>
      </ul>
    </nav>

    <section class="sec-1">
      <div class="img">
        <h1>Acara</h1>
        <img src="/assets/pics/Saly-10.png" alt="">
      </div>
      <div class="teks">
        <h1>Temukan dan Ikuti acara untuk mengembangkan
        Bakat Kalian</h1>
        <a href="#acara"><button>Cari Acara</button></a>
      </div>
    </section>

    <section class="sec-2">
      <div class="search">

        <span class="material-symbols-outlined">
          search
        </span>

        <input type="text" placeholder="Search">

      </div>
    </section>

    <section class="sec-3" id="acara">
      <div class="card" onclick="window.location.href='<?php echo e(url('/acara/detil-acara')); ?>'">
        <img src="/assets/pics/extra-artdinary.png" alt="">
        <div class="teks">
            <h5>Extra Artdinary</h5>
            <div class="content-1">
                <p>waktu</p>
                <p>15 Februari 2000</p>
            </div>
            <div class="content-2">
                <p class="type">Online</p>
                <p>Free</p>
            </div>
        </div>
      </div>
    </section>

    <script src="" async defer></script>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\applications\T-zens\resources\views/acara.blade.php ENDPATH**/ ?>