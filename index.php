<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>SPK BEASISWA</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">  
  <link href="assets2/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link href="assets2/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets2/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets2/lib/animate/animate.min.css" rel="stylesheet">
  <link href="assets2/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets2/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets2/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="assets2/css/style.css" rel="stylesheet">
</head>
<body>
  <header id="header" class="fixed-top">
    <div class="container">
      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
        
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="login_siswa.php">Login Siswa</a></li>
          <li><a href="login.php">Login Admin</a></li>         
        </ul>
      </nav>
    </div>
  </header>
  <section id="intro" class="clearfix">
    <div class="container">
      <?php 
        if(isset($_GET['alert'])){
          if($_GET['alert']=="daftar"){
            echo '<script type="text/javascript">alert("Akun Anda Sudah Didaftarkan");</script>';
          }elseif($_GET['alert']=="gagal"){
            echo '<script type="text/javascript">alert("NIS Anda Sudah Terdaftar");</script>';
          }elseif($_GET['alert']=="logout"){
            echo '<script type="text/javascript">alert("Silahkan Login Kembali");</script>';
          }
        }

       ?>
      <div class="intro-img">
        <img src="" alt="" class="img-fluid">
      </div>
      <div class="intro-info">
        <h2><br><font color="#000000">BEASISWA<br>BERPRESTASI</h2>
        </font><div>
          <button type="button" class="btn-get-started scrollto" data-toggle="modal" data-target="#register">REGISTER</button>
         <!-- <button type="button" class="btn-get-started scrollto" data-toggle="modal" data-target="#login">LOGIN</button>-->
          <div id="login" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <form action="login_siswa_act.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label> NIS</label>
                      <input type="number" name="nim" required="required" class="form-control">
                    </div>                                           
                    <div class="form-group">
                      <label> PASSWORD</label>
                      <input type="password" name="password" required="required" class="form-control">
                    </div>                    
                    <br/>
                    <input type="submit" value="Simpan" class="btn btn-primary">
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div id="register" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h3>Daftar Akun</h3>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <form action="daftar_act.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label> NIS</label>
                      <input type="number" name="nis" required="required" class="form-control">
                    </div>                        
                    <div class="form-group">
                      <label> NAMA</label>
                      <input type="text" name="nama" required="required" class="form-control">
                    </div>                        
                    <div class="form-group">
                      <label> KONTAK</label>
                      <input type="number" name="kontak" required="required" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> PASSWORD</label>
                      <input type="password" name="password" required="required" class="form-control">
                    </div>                    
                    <br/>
                    <input type="submit" value="Simpan" class="btn btn-primary">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <main id="main">
    <section id="about">
      <div class="container">
        <header class="section-header">
          <h3>Alamat</h3>
          <p>Jl. Tegal Rotan Raya No.9 A, Sawah Baru, Kec. Ciputat, Kota Tangerang Selatan, Banten 15412</p>
        </header>
        <div class="row about-container">
          <div class="col-lg-6 content order-lg-1 order-2">
            <p>
              <b>Beasiswa</b> merupakan bantuan biaya sehingga seorang pelajar bisa mengikuti kegiatan belajar dengan biaya yang lebih ringan.
            </p>
            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-users"></i></div>
              <h4 class="title"><a href="">Register Akun / Login</a></h4>
              <p class="description">Setiap siswa memiliki akun untuk aplikasi beasiswa berprestasi ini yang bisa diakses oleh masing-masing siswa.</p>
            </div>
            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-mortar-board"></i></div>
              <h4 class="title"><a href="">Daftar Beasiswa</a></h4>
              <p class="description">Setelah memiliki akun, siswa dapat mendaftarkan beasiswa yang disediakan oleh Sekolah.</p>
            </div>
            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-line-chart"></i></div>
              <h4 class="title"><a href="">Seleksi</a></h4>
              <p class="description">Data yang telah di-upload akan di seleksi untuk mendapatkan hasil. Lalu pengumuman bisa dilihat dari akun siswa sendiri.</p>
            </div>
          </div>
          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="assets2/img/Visual-2.png" class="img-fluid" alt="">
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer id="footer">   
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong></strong>. SPK Beasiswa
      </div>      
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <script src="assets2/lib/jquery/jquery.min.js"></script>
  <script src="assets2/lib/jquery/jquery-migrate.min.js"></script>
  <script src="assets2/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets2/lib/easing/easing.min.js"></script>
  <script src="assets2/lib/mobile-nav/mobile-nav.js"></script>
  <script src="assets2/lib/wow/wow.min.js"></script>
  <script src="assets2/lib/waypoints/waypoints.min.js"></script>
  <script src="assets2/lib/counterup/counterup.min.js"></script>
  <script src="assets2/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="assets2/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="assets2/lib/lightbox/js/lightbox.min.js"></script>
  <script src="assets2/js/main.js"></script>

</body>
</html>
