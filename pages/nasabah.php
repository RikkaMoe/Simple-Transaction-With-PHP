<?php
include '../koneksi.php';
function randomString($length)
{
    $str        = "";
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
    $max        = strlen($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $rand = mt_rand(0, $max);
        $str .= $characters[$rand];
    }
    return $str;
} 

if (isset($_POST['simpan'])) 
{
   $kodep = $_POST['kode'];
   $namap = $_POST['nama'];
   $tlpp = $_POST['tlp'];
   $alamatp = $_POST['alamat'];

  if (empty($kodep) || empty($namap) || empty($tlpp) || empty($alamatp))
  {
    echo " <script>alert('Gagal, Data tidak lengkap'); </script> ";
  }
  else {
    $perintah = "INSERT INTO nasabah (id_nasabah, nama_nasabah, alamat_nasabah, tlp_nasabah) VALUES ('$kodep', '$namap', '$alamatp', '$tlpp')";
    $query=mysqli_query($conn,$perintah);
    if ($query) 
    {
       echo " <script>alert('Berhasil, Data disimpan'); </script> ";
    }
    else
    {
        echo " <script>alert('Gagal, Data gagal disimpan'); </script> ";
    }
  } 
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

    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Input Nasabah</h2>
        </div>

        <div class="row">
          <div class="col-md-12" data-aos="fade-up" data-aos-delay="300">
            <form method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" name="kode" class="form-control" data-rule="minlen:4" value="<?php echo randomString(5); ?>" readonly/>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="nama" placeholder="Nama Anda" data-msg="Tolong isi nama anda" autocomplete="off" data-rule="minlen:4"/>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <div class="input-group flex-nowrap">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="addon-wrapping">+62</span>
                  </div>
                  <input type="text" class="form-control" placeholder="No Telephone Anda" name="tlp" aria-describedby="addon-wrapping" data-msg="Tolong isi no telephone anda" autocomplete="off" data-rule="minlen:4">
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="alamat" rows="5" data-rule="required" data-msg="Tolong isi alamat anda" placeholder="Alamat Anda"></textarea>
                <div class="validate"></div>
              </div>
              <div class="text-center">
                <button type="submit" name="simpan">Simpan</button>
              </div>
            </form>
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