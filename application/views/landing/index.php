<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?php echo base_url('assets/') ?>/css/landing.css" rel="stylesheet" >
    <link href="<?php echo base_url('assets/') ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="">
</head>
<body>
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Tracer Study</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
        <a class="nav-link" href="#">Info</a>
        <a class="nav-link" href="#">Proses</a>
        <a class="nav-link" href="<?= base_url('index.php/auth')?>"><button class="btn btn-primary">Masuk</button></a>
        
      </div>
    </div>
  </div>
</nav>

    <!-- end navbar -->
    <!-- hero -->

    <section id="hero" class="hero d-flex align-items-center ">
        <div class="hero-content">
        <h1>Website Tracer Study</h1>
        <h1>SMK Muhammadiyah 1 Yogyakarta</h1>
    
        <button type="button" class="btn btn-register btn-light">Buat Akun</button>
        <button type="button" class="btn btn-login btn-outline-light">Masuk</button>
        </div>
    </section>
    <!-- hero end -->

    <!-- info -->
    <section id="info" class="info">
      <div class="info-content ">
        
        <div class="row ">
          <div class="col-md-6 d-flex justify-content-center">
            
          <img src="<?php echo base_url('assets/img/hero.png')?>" alt="" class="hero-image">
            
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <span>
              <h2>Apa Itu Tracer Study?</h2>
          <p>Tracer study adalah Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolore laboriosam, corporis optio amet repellendus vero at, tenetur sint iure blanditiis beatae, veniam sit? Molestias dicta quisquam doloremque voluptatibus eos. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus voluptatem iusto fugit ducimus? Ipsam, incidunt harum eius numquam asperiores impedit?</p>
          
            </span>
          </div>
        </div>
      </div>
    </section>
    <section id="step" class="step">
      <div class="step-content row d-flex ms-auto me-auto justify-content-center">
          <div class="col-md-4  step-item">
            <span>
               <center>
                <div class="circle bg-primary"><h1>1</h1></div></center>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum dolore ex quidem amet, asperiores corrupti, fugiat nulla eligendi fugit exercitationem ea incidunt assumenda! Laborum autem voluptatum, quas ipsa architecto corporis.</p>
                </span>
          </div>
          <div class="col-md-4  step-item">
            <span>
            <center>
             <div class="circle bg-primary"><h2>2</h2></div>
            </center>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum dolore ex quidem amet, asperiores corrupti, fugiat nulla eligendi fugit exercitationem ea incidunt assumenda! Laborum autem voluptatum, quas ipsa architecto corporis.</p>
            </span>
          </div>
          <div class="col-md-4  step-item">
          <span>
            <center>
             <div class="circle bg-primary"><h2>3</h2></div>
            </center>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum dolore ex quidem amet, asperiores corrupti, fugiat nulla eligendi fugit exercitationem ea incidunt assumenda! Laborum autem voluptatum, quas ipsa architecto corporis.</p>
            </span>
          </div>
          </div>
      </div>
    </section>
    <section>

    </section>
    <!-- info -->
<script src="<?php echo base_url('assets/')?>bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>