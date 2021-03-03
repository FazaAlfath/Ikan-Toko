<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Import Font -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <!-- Import Icons -->
    <script src="https://kit.fontawesome.com/4d20f1062f.js" crossorigin="anonymous"></script>
    <title>Hello, world!</title>
  </head>
  <body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
      <div class="container-fluid">
        <img class="Logo-Toko" src="../img/prof.png" width="35px" alt="logo">
          <a class="navbar-brand" href="#">Toko-Ikan</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
              <a class="nav-link" href="#about">About</a>
              <a class="nav-link" href="#">Pages</a>
              <a class="nav-link" href="#">Contact</a>
            </div>
          </div>
        </div>
      </div>
    </nav>
    {{-- Akhir Navbar --}}

    {{-- Jumbotron --}}
    <div id="content" >
    <div class="intro-home">
      <div class="preview-title">
          <h1>Selamat datang di Toko-Ikan</h1>
      </div>
      <div class="preview-desc">
          <p>Toko Ikan adalah Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem necessitatibus mollitia quas officia minus! Sapiente doloribus quisquam harum aliquam quos obcaecati velit omnis molestias a!
          </p>
          <div class="buttonmenu">
            <a href="#about" class="btn-get-started animated fadeInUp">Read More</a>
          </div>
      </div>
  </div>
    </div>
    {{-- Akhir-Jumbotron --}}
    {{-- Service --}}
    <section id="mu-service">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="mu-service-area">
              <!-- Start single service -->
              <div class="mu-service-single">
                <span class="fa fa-shipping-fast"></span>
                <h3>Pengiriman cepat & Aman</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, expedita.</p>
              </div>
              <!-- Start single service -->
              <!-- Start single service -->
              <div class="mu-service-single">
                <span class="fa fa-fish"></span>
                <h3>Produk Berkualitas</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, cumque! Lorem ipsum dolor sit amet</p>
              </div>
              <!-- Start single service -->
              <!-- Start single service -->
              <div class="mu-service-single">
                <span class="fa fa-dollar-sign"></span>
                <h3>Pembayaran</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis, iusto.</p>
              </div>
              <!-- Start single service -->
            </div>
            <p id="about"></p>
          </div>
        </div>
      </div>
    </section>
    {{-- Akhir-Service --}}

    {{-- About Us --}}
    <section id="mu-about-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-about-us-area">           
              <div class="row">
                <!-- Start Title -->
                <div align="center" class="mu-title" id="companyProfile">
                  <h2>Profil Toko</h2>
                </div>
                <!-- End Title -->
                <div class="col-lg-6 col-md-6">
                  <div class="mu-about-us-right mb-3" style="margin-bottom: 25px;">                            
                    <img src="../img/wallpaper.jpg" alt="img-about" style="width: 100%; margin-top: 6px">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="mu-about-us-left">
                    <p align="justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla rem soluta atque beatae perferendis eos adipisci. Vel, laborum reprehenderit error consequuntur omnis doloribus! Maxime dignissimos sint aut impedit odit voluptatibus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla rem soluta atque beatae perferendis eos adipisci. Vel, laborum reprehenderit error consequuntur omnis doloribus! Maxime dignissimos sint aut impedit odit voluptatibus!</p>
                    <p align="justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla rem soluta atque beatae perferendis eos adipisci. Vel, laborum reprehenderit error consequuntur omnis doloribus! Maxime dignissimos sint aut impedit odit voluptatibus! </p>
                  </div>
                  <div class="moto-toko">
                    <h3>#GAKCODGAKJAJAN</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- Akhir-About Us --}}

    {{-- Profile-Anggota, Toko, Produk, Pegawai --}}
    <section id="mu-abtus-counter">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-abtus-counter-area">
            <div class="row">
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-institution"></span>
                  <h4 class="counter">1</h4>
                  <p>Toko</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-fish"></span>
                  <h4 class="counter">130</h4>
                  <p>Ikan</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-utensils"></span>
                  <h4 class="counter">108</h4>
                  <p>Pakan Ikan</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single no-border">
                  <span class="fa fa-group"></span>
                  <h4 class="counter">533</h4>
                  <p>Pegawai</p>
                </div>
              </div>
              <!-- End counter item -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    {{-- Akhir - Profile-Anggota, Toko, Produk, Pegawai --}}

    {{-- Card-Product --}}
    
    {{-- Akhir - Card-Product --}}

    {{-- Footer --}}
    
    {{-- Akhir -Footer --}}
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
  <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-d83da866-bdd2-412e-99e4-84d8477f3b59"></div>
</html>