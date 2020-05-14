<?php   
  session_start();
 
  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['akses']==""){
    header("location:Login/login.php?pesan=gagal");
  }
 
  ?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>SmartLamp</title>
        <meta name="description" content="A demo landing page for agencies or product oriented businesses built using Shards, a free, modern and lightweight UI toolkit based on Bootstrap 4.">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS Dependencies -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/shards.min.css?v=3.0.0">
        <link rel="stylesheet" href="css/shards-extras.min.css?version=3.0.0">
        <link rel="stylesheet" href="css/shards-extras.css">
    </head>
    <body class="shards-app-promo-page--1">
      <!-- Welcome Section -->
      <div class="welcome d-flex justify-content-center flex-column">
        <div class="container">
          <!-- Navigation -->
          <nav class="navbar navbar-expand-lg navbar-dark pt-4 px-0">
            <a class="navbar-brand mr-5" href="#">
              <img src="images/app-promo/shards-logo-green.svg" class="mr-2" alt="Shards - Agency Landing Page">
              SmartLamp
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="information.php">Information</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="testimoni.php">Testimonials</a>
                </li>
              </ul>

              <!-- Social Icons -->
              <ul class="header-social-icons navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href=""><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="22" height="22" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,21.5c-15.83216,0 -28.66667,12.8345 -28.66667,28.66667c0,15.83216 12.8345,28.66667 28.66667,28.66667c15.83216,0 28.66667,-12.8345 28.66667,-28.66667c0,-15.83216 -12.8345,-28.66667 -28.66667,-28.66667zM86,100.33333c-21.52867,0 -64.5,10.80733 -64.5,32.25v17.91667h129v-17.91667c0,-21.44267 -42.97133,-32.25 -64.5,-32.25z"></path></g></g></svg></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">Admin</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">
                  <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="22" height="22" viewBox="0 0 172 172" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,8.0625c-43,0 -77.9375,34.9375 -77.9375,77.9375c0,43 34.9375,77.9375 77.9375,77.9375c43,0 77.9375,-34.9375 77.9375,-77.9375c0,-43 -34.9375,-77.9375 -77.9375,-77.9375zM86,16.125c38.56562,0 69.875,31.30937 69.875,69.875c0,38.56562 -31.30938,69.875 -69.875,69.875c-38.56563,0 -69.875,-31.30938 -69.875,-69.875c0,-38.56563 31.30937,-69.875 69.875,-69.875zM86,34.9375c-2.28437,0 -4.03125,1.74688 -4.03125,4.03125v26.875c0,2.28437 1.74688,4.03125 4.03125,4.03125c2.28437,0 4.03125,-1.74688 4.03125,-4.03125v-26.875c0,-2.28437 -1.74688,-4.03125 -4.03125,-4.03125zM66.11407,47.06799c-0.78105,-0.05984 -1.58048,0.09816 -2.28595,0.50128c-13.70625,7.92812 -22.17187,22.57447 -22.17187,38.43072c0,24.45625 19.8875,44.34375 44.34375,44.34375c24.45625,0 44.34375,-19.8875 44.34375,-44.34375c0,-15.85625 -8.46563,-30.5026 -22.17187,-38.43072c-1.88125,-1.075 -4.43385,-0.40365 -5.50885,1.4776c-1.075,1.88125 -0.40365,4.43385 1.4776,5.50885c11.15313,6.45 18.14063,18.54428 18.14063,31.44428c0,20.02188 -16.25937,36.28125 -36.28125,36.28125c-20.02187,0 -36.28125,-16.25937 -36.28125,-36.28125c0,-12.9 6.9875,-24.99428 18.14063,-31.44428c1.88125,-1.075 2.5526,-3.6276 1.4776,-5.50885c-0.67187,-1.17578 -1.92114,-1.87915 -3.2229,-1.97888z"></path></g></g></svg>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="logout.php">Logout</a>
                </li>
              </ul>
            </div>
          </nav>
          <!-- / Navigation -->
        </div> <!-- .container -->

        <!-- Inner Wrapper -->
        <div class="inner-wrapper mt-auto mb-auto container">
          <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12 mt-auto mb-auto mr-3">
                <h1 class="welcome-heading display-4 text-white">Information about smartlamp</h1>
                <p class="text-muted">Let's see information in down bellow .</p>
            </div>

            <div class="col-lg-4 col-md-5 col-sm-12 ml-auto">
              <img class="iphone-mockup ml-auto" src="images/app-promo/iphone-app-screenshot.png" alt="iPhone App Mockup - Shards App Promo Demo">
            </div>
          </div>
        </div>
        <!-- / Inner Wrapper -->
      </div>
      <!-- / Welcome Section -->

      <!-- Features Section -->
      <div id="app-features" class="app-features section">
        <div class="container-fluid">
          <div class="row">
            <div class="app-screenshot col-lg-4 col-md-12 col-sm-12 px-0 py-5">
              <img class="mt-auto mb-auto" src="images/app-promo/iphone-app-screenshot.png" alt="App Screenshot - Shards App Promo Demo Page">
            </div>

            <!-- App Features Wrapper -->
            <div class="app-features-wrapper col-lg-4 col-md-6 col-sm-12 py-5 mx-auto">
              <div class="container">
                <h3 class="section-title underline--left my-5">Information</h3>
                <div class="feature py-4 d-flex">
                  <div class="icon text-white bg-success mr-5"><i class="fa fa-bar-chart"></i></div>
                  <div>
                      <h5>Speed Connection</h5>
                      <p>
Very fast remote control access with these lighting devices</p>
                  </div>
                </div>

                <div class="feature py-4 d-flex">
                  <div class="icon text-white bg-success mr-5"><i class="fa fa-shield"></i></div>
                  <div>
                      <h5>Security</h5>
                      <p>
Have a fairly secure security using the encryption method</p>
                  </div>
                </div>

                <div class="feature py-4 d-flex">
                  <div class="icon text-white bg-success mr-5"><i class="fa fa-share"></i></div>
                  <div>
                      <h5>Application Access</h5>
                      <p>Easy and simple just turn on or turn off and see monitor the indicator lights</p>
                  </div>
                </div>

                <div class="feature py-4 d-flex">
                  <div class="icon text-white bg-success mr-5"><i class="fa fa-globe"></i></div>
                  <div>
                      <h5>Access Anywhere</h5>
                      <p>Very practical access wherever you are and lots of conveniences</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- / Features Section -->

      <!-- JavaScript Dependencies -->
      <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
