<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>
  <?php
        $subject = $_GET['subject'];
        $folder = $_GET['folder'];
        ?>
    <?= $subject ?>
  </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="./assets/img/siglogo.png">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Imperial - v5.9.1
  * Template URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo mr-auto"><img src="assets/img/siglogo.png" alt=""></a>
      <!-- Uncomment below if you prefer to use a text logo -->
      <!-- <h1 class="logo mr-auto"><a href="index.html">Imperial</a></h1> -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.html#hero">หน้าหลัก</a></li>
          <li><a class="nav-link scrollto" href="index.html#about">เกี่ยวกับ</a></li>
          <li><a class="nav-link scrollto" href="index.html#services">หน่วยงาน</a></li>
          <li><a class="nav-link scrollto " href="index.html#portfolio">คู่มืออุปกรณ์สื่อสาร</a></li>
          <li><a href="https://sites.google.com/signalschool.ac.th/signal-school-qa"
              class="nav-link scrollto">สำนักงานประกันคุณภาพการศึกษา</a></li>
          <li><a class="nav-link scrollto" href="index.html#testimonials">เอกสารตำราโรงเรียนทหารสื่อสาร</a></li>

          <li class="dropdown"><a href="#"><span>ระบบงาน</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="http://elearning.signalschool.net/">E-learning</a></li>
              <li><a href="http://exam.signalschool.net/login/index.php">คลังข้อสอบ</a></li>
              <li><a href="https://drive.google.com/drive/folders/1pvKJMB-xhSABfKqH-A_yTLNOXR_saiyp">KM (Knowledge Management)</a></li>
              <li><a href="https://www.signalschool.ac.th/mis/">MIS ระบบฐานข้อมูลเพื่อการจัดการ</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">ติดต่อเรา</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <?php
        $subject = $_GET['subject'];
        $folder = $_GET['folder'];
        ?>
        <div class="d-flex justify-content-between align-items-center">
          <h2><?= $subject ?></h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><?= $subject ?></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <?php
                $dir_name = 'assets/' . $folder . '/' . $subject . '/img/';
                $images = glob($dir_name . "*.png");
                $dir_file = 'assets/' . $folder . '/' . $subject . '/brochure/';
                $file = glob($dir_file . "*.pdf");
                if ($folder == "PRC" || $folder == "ETE") {
                  $dir_video = 'assets/' . $folder . '/' . $subject . '/video/';
                  $video = glob($dir_video . "*.mp4");
                } else {
                  $dir_video = 'assets/' . $folder . '/video/';
                  $video = glob($dir_video . "*.mp4");
                }
                foreach ($images as $image) { ?>
                  <div class="swiper-slide">
                    <img src="<?= $image ?>" alt="">
                  </div>
                <?php
                }
                ?>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>คู่มือการใช้งานฉบับย่อ(แผ่นผับ)</h3>
              <ul>
                <li>
                  <!-- Large modal -->
                  <center>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">ดูเอกสาร</button>
                  </center>
                  <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">คู่มือการใช้งานฉบับย่อ</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>

                        </div>
                        <div class="modal-body">
                          <?php foreach ($file as $files) { ?>

                            <iframe src="<?= $files ?>" frameborder="0" width="100%" height="1000px"></iframe>

                          <?php } ?>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>

                </li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>วีดีทัศน์สื่อการสอน</h2>
              <p>
              <ul><?php foreach ($video as $videos) { ?>
                  <li>
                    <a href="#" class="video" id="<?= $videos ?>" data="<?= basename($videos); ?>"><?= basename($videos); ?></a>
                  </li>

                <?php } ?>
              </ul>
              </p>
              <div class="modal fade" id="openvideo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">
                        <div id="namevideo"></div>
                      </h5>
                      <button type="button" class="close_modal" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>

                    </div>
                    <div class="modal-body">
                      <div id="playvideo">
                        <video width="100%" height="auto" controls>
                          <source src="" type="video/mp4">
                        </video>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary close_modal" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright Signalschool 2023 all rights reserved.<br>
            <!-- Counter visitor -->
            <script type="text/javascript" src="//counter.websiteout.net/js/7/6/2059/0"></script>
            <!-- End Counter visitor -->
          </div>
          <div class="credits">
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script>
    $(function() {
      $('.video').on('click', function() {
        var video = $(this).attr('id');
        var namevideo = $(this).attr('data');

        $('#playvideo video source').attr('src', video);
        $('#namevideo').html(namevideo);
        $('#playvideo video')[0].load();
        $('#openvideo').modal('show');
      })
      $('.close_modal').on('click', function() {
        $('#playvideo video')[0].pause();
        $('#openvideo').modal('hide');
      })
    });
  </script>

</body>

</html>