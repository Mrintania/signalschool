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
  <meta content="โรงเรียนทหารสื่อสาร กรมการทหารสื่อสาร" name="description">
  <meta content="โรงเรียนทหารสื่อสาร, รร.ส.สส., โรงเรียนทหารสื่อสาร กรมการทหารสื่อสาร, Signal School, Signalschool Signaldepartment, กรมการทหารสื่อสาร, ทหารสื่อสาร, signal-elearning, moodle-signalschool" name="keywords">

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

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

  <header id="header" class="d-flex align-items-center">
    <!-- Start Navbar -->
    <?php include_once 'nav.php'; ?>
    <!-- End Navbar -->
  </header>

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <!-- This is ULR form aws S3 "https://signalschool-web-db.s3.ap-southeast-1.amazonaws.com/assets/" get from this via php -->
        <!-- php get subject and folder on aws s3 -->
        <?php
        $subject = $_GET['subject'];
        $folder = $_GET['folder'];
        $subject_aws_s3 = 'assets/' . $folder . '/' . $subject . '/img/';
        $subject_aws_s3 = preg_replace('/\s+/', '', $subject_aws_s3);
        ?>
        <div class="d-flex justify-content-between align-items-center">
          <h2><?= $subject ?></h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><?= $subject ?></li>
          </ol>
        </div>

      </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <?php

                require 'vendor/autoload.php';
                use Aws\S3\S3Client;
                use Aws\S3\Exception\S3Exception;
                try {
                  $s3 = new S3Client([
                    'version' => 'latest',
                    'region'  => 'ap-southeast-1',
                    'credentials' => [
                      'key'    => 'AKIAX7Z7ZQ4ZQ',
                      'secret' => '',
                    ],
                  ]);
                } catch (AwsException $e) {
                  // output error message if fails
                  error_log($e->getMessage());
                }

                try {
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
                } catch (AwsException $e) {
                  // output error message if fails
                  error_log($e->getMessage());
                }
                ?>

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
              <ul>
                <?php foreach ($video as $videos) { ?>
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
    </section>
    <!-- End Portfolio Details Section -->

  </main>
  <!-- End #main -->

  <footer>
    <?php include 'footer.php'; ?>
  </footer>

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