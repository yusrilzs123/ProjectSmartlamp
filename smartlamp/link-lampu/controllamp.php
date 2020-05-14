<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>SmartLamp</title>
        <meta name="description" content="A demo landing page for agencies or product oriented businesses built using Shards, a free, modern and lightweight UI toolkit based on Bootstrap 4.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.css" rel="stylesheet">
        <link rel="stylesheet" href="css/1.css">
        <!-- CSS Dependencies -->
    </head>
    <body>
        <div class="container">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
            <h1 class="h3 mb-0 text-gray-800">&nbsp&nbsp<i class="fas fa-lightbulb" aria-hidden="true"></i> ControlLamp</h1>
          </div>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <i class="fas fa-info-circle fa-1x"></i>
            <strong class="text-md">Pentunjuk</strong><br>
            <div class="btn btn-success btn-circle mt-2">
                        <i class="fas fa-bolt"></i>
                        </div>
                         <b>Menghidupkan /</b> 
            <div class="btn btn-danger btn-circle mt-2">
                        <i class="fas fa-power-off"></i>
                        </div>
                         <b>Mematikan</b>
          </div>
          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-bottom-primary shadow h-100 py-2 bg-gradient-info">
                <div class="card-body bg-gradient-info">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-md font-weight-bold text-white text-uppercase mb-1">Kamar 1</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <a href="#" class="btn btn-success btn-circle" onclick="location.href='proses_update.php?status=ON1'">
                        <i class="fas fa-bolt"></i>
                        </a>&nbsp&nbsp
                        <a href="#" class="btn btn-danger btn-circle" onclick="location.href='proses_update.php?status=offA'">
                        <i class="fas fa-power-off"></i>
                        </a>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-bed fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-bottom-success shadow h-100 py-2 bg-gradient-info">
                <div class="card-body bg-gradient-info">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-md font-weight-bold text-white text-uppercase mb-1">Kamar 2</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <a href="#" class="btn btn-success btn-circle" onclick="location.href='proses_update.php?status=ON2'">
                        <i class="fas fa-bolt"></i>
                        </a>&nbsp&nbsp
                        <a href="#" class="btn btn-danger btn-circle" onclick="location.href='proses_update.php?status=offB'">
                        <i class="fas fa-power-off"></i>
                        </a>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-bed fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-bottom-info shadow h-100 py-2 bg-gradient-info">
                <div class="card-body bg-gradient-info">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-md font-weight-bold text-white text-uppercase mb-1">Kamar 3</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                            <a href="#" class="btn btn-success btn-circle" onclick="location.href='proses_update.php?status=ON3'">
                            <i class="fas fa-bolt"></i>
                            </a>&nbsp&nbsp
                            <a href="#" class="btn btn-danger btn-circle" onclick="location.href='proses_update.php?status=offC'">
                            <i class="fas fa-power-off"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-bed fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-bottom-warning shadow h-100 py-2 bg-gradient-info">
                <div class="card-body bg-gradient-info">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-md font-weight-bold text-white text-uppercase mb-1">
                      TERAS
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <a href="#" class="btn btn-success btn-circle" onclick="location.href='proses_update.php?status=ON4'">
                            <i class="fas fa-bolt"></i>
                            </a>&nbsp&nbsp
                            <a href="#" class="btn btn-danger btn-circle" onclick="location.href='proses_update.php?status=offD'">
                            <i class="fas fa-power-off"></i>
                            </a>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-warehouse fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <i class="fas fa-info-circle fa-1x"></i>
            <strong class="text-md">Indikator-Lampu</strong><br>
            <img src="gambar/gelap.png" class="img-fluid mt-2" alt="Responsive image"><b> Mati /</b>
            <img src="gambar/nyala.png" class="img-fluid mt-2" alt="Responsive image"><b> Hidup </b>
          </div>
          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7 text-center">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Status Lampu</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="text-center">
                    <!--Show Status Device-->
                    <?php
                        include 'koneksi.php';

                        $LED1 = "SELECT `status` FROM lampu WHERE `id_lampu` = '1'";
                        $LED2 = "SELECT `status` FROM lampu WHERE `id_lampu` = '2'";
                        $LED3 = "SELECT `status` FROM lampu WHERE `id_lampu` = '3'";
                        $LED4 = "SELECT `status` FROM lampu WHERE `id_lampu` = '4'";
                        $LED5 = "SELECT `status` FROM lampu WHERE `id_lampu` = '5'";
                    ?>
                    <!-- end -->
                    <?php $query_sql = mysqli_query($conn, $LED1) or die(mysqli_error($conn)); while ($data = mysqli_fetch_assoc($query_sql)) {$data['status'];  if($data['status'] == 'ON1'){ 
                        echo '<img src="gambar/nyalakamar111.png" class="img-fluid" alt="" style="z-index: 1; position: absolute;">';}
                        else{ 
                        echo '<img src="gambar/gelap111.png" class="img-fluid" style="z-index: 1; position: absolute;">';} 
                        } 
                        ?>
                    <?php $query_sql = mysqli_query($conn, $LED2) or die(mysqli_error($conn)); while ($data = mysqli_fetch_assoc($query_sql)) {$data['status'];  if($data['status'] == 'ON2'){ 
                        echo '<img src="gambar/nyalakamar22.png" class="img-fluid" alt="Responsive image" style="z-index: 1; position: absolute;">';}
                        else{ 
                        echo '<img src="gambar/gelapkamar22.png" class="img-fluid" alt="Responsive image" style="z-index: 1; position: absolute;">';} 
                        } 
                        ?>
                    <?php $query_sql = mysqli_query($conn, $LED3) or die(mysqli_error($conn)); while ($data = mysqli_fetch_assoc($query_sql)) {$data['status'];  if($data['status'] == 'ON3'){ 
                        echo '<img src="gambar/nyalakamar33.png" class="img-fluid" alt="Responsive image" style="z-index: 1; position: absolute;">';}
                        else{ 
                        echo '<img src="gambar/gelapkamar33.png" class="img-fluid" alt="Responsive image" style="z-index: 1; position: absolute;">';} 
                        } 
                        ?>
                   <?php $query_sql = mysqli_query($conn, $LED4) or die(mysqli_error($conn)); while ($data = mysqli_fetch_assoc($query_sql)) {$data['status'];  if($data['status'] == 'ON4'){ 
                        echo '<img src="gambar/nyalateras1.png" class="img-fluid" alt="Responsive image" style="z-index: 1; position: absolute;">';}
                        else{ 
                        echo '<img src="gambar/gelapteras1.png" class="img-fluid" alt="Responsive image" style="z-index: 1; position: absolute;">';} 
                        } 
                        ?>
                    <img class="img-fluid" src="gambar/uts21.png" alt="" style="z-index: 0; position: relative;">
                  </div>
                  </div>
              </div>
            </div>

            <!-- Pie Chart -->
            </div>
          </div>
        </div>
        <a href="../index.php" class="btn btn-lg btn-secondary btn-pill align-self-center float">Back to menu <img src="https://img.icons8.com/flat_round/24/000000/circled-left-2--v1.png"/>
        </a>

      <!-- JavaScript Dependencies -->
      <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script type="js/1.js"></script>   

    </body>
</html>
