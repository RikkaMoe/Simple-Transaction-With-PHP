<?php

function rupiah($angka){
  
  $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
  return $hasil_rupiah;
 
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kece</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Vesperr - v2.0.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body style="background-color: #fafeff">

  <!-- ======= Hero Section ======= -->

  <main id="main">

    <!-- ======= Clients Section ======= -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">
        
        <a href="../index.php">
          <div class="section-title" data-aos="fade-up">
            <h2>Menu</h2>
          </div>
        </a>

        <div class="row" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="icofont-business-man-alt-1"></i>
              <h3><a href="nasabah.php">Input Nasabah</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
              <h3><a href="rekening.php">Input Rekening</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="icofont-clip-board" style="color: green"></i>
              <h3><a href="setoran.php">Input Setoran</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="icofont-money" style="color: red"></i>
              <h3><a href="penarikan.php">Input Penarikan</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="icofont-paper" style="color: blue"></i>
              <h3><a href="saldo.php">Cek Saldo</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
              <h3><a href="transaksi.php">Cek Transaksi</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-database-2-line" style="color: #47aeff;"></i>
              <h3><a href="laporan.php">Cek Laporan</a></h3>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Cek Saldo</h2>
        </div>

        <div class="row">
          <div class="col-md-12" data-aos="fade-up" data-aos-delay="300">
            <table class="table">
              <tbody>
                <tr style="background-color: #CAC2C1">
                  <td scope="col" align="center"><b>ID Rekening</b></td>
                  <td scope="col" align="center"><b>Nama Nasabah</b></td>
                  <td scope="col" align="center"><b>Saldo</b></td>
                </tr>
              <?php
                include '../koneksi.php';
                $get_id = $_GET['rek'];
                $perintah = "SELECT id_rekening, nama_nasabah, saldo FROM rekening INNER JOIN nasabah ON rekening.id_nasabah = nasabah.id_nasabah WHERE id_rekening = '$get_id'";
                $query = mysqli_query($conn,$perintah);
                while($data = mysqli_fetch_array($query))
                {
              ?>
                <tr>
                  <td align="center"><?php echo $data['id_rekening'] ?></td>
                  <td align="center"><?php echo $data['nama_nasabah'] ?></td>
                  <td align="center"><?php echo rupiah($data['saldo']) ?></td>
                </tr>
              </tbody>
              <?php
                }
              ?>
            </table>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->


  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>