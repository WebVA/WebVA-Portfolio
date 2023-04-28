<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- color of address bar in mobile browser -->
  <meta name="theme-color" content="#2B2B35">
  <!-- favicon  -->
  <link rel="shortcut icon" href="img/thumbnail.ico" type="image/x-icon">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/plugins/bootstrap.min.css">
  <!-- font awesome css -->
  <link rel="stylesheet" href="css/plugins/font-awesome.min.css">
  <!-- swiper css -->
  <link rel="stylesheet" href="css/plugins/swiper.min.css">
  <!-- fancybox css -->
  <link rel="stylesheet" href="css/plugins/fancybox.min.css">
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css">

  <title>Adrian</title>
</head>

<body>

  <!-- app -->
  <div class="dan-app">

    <!-- mobile top bar -->
    <div class="dan-mobile-top-bar"></div>

    <!-- app wrapper -->
    <div class="dan-app-wrapper">

      <!-- app container end -->
      <div class="dan-app-container">

        <?php include_once('./components/info-bar.php');?>

        <!-- content -->
        <div class="dan-content">

          <!-- curtain -->
          <div class="dan-curtain"></div>

          <!-- top background -->
          <div class="dan-top-bg" style="background-image: url(img/bg.jpg)">
            <!-- overlay -->
            <div class="dan-top-bg-overlay"></div>
            <!-- overlay end -->
          </div>
          <!-- top background end -->


          <!-- swup container -->
          <div class="transition-fade" id="swup">

            <!-- scroll frame -->
            <div id="scrollbar" class="dan-scroll-frame">

              <!-- container -->
              <div class="container-fluid">

                <!-- row -->
                <div class="row p-30-0">

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- section title -->
                    <div class="dan-section-title">
                      <!-- title frame -->
                      <div class="dan-title-frame">
                        <!-- title -->
                        <h4>Contact information</h4>
                      </div>
                      <!-- title frame end -->
                    </div>
                    <!-- section title end -->

                  </div>
                  <!-- col end -->
                  <!-- col -->
                  <div class="col-lg-4">
                    <!-- contact card -->
                    <div class="dan-a dan-card">
                      <div class="dan-table p-15-15">
                        <ul>
                          <li>
                            <h6>Country:</h6><span>China</span>
                          </li>
                          <li>
                            <h6>City:</h6><span>Shen Yang</span>
                          </li>

                          <!-- <li>
                            <h6>Street:</h6><span>Leicester</span>
                          </li> -->
                        </ul>
                      </div>
                    </div>
                    <!-- contact card end -->
                  </div>
                  <!-- col end -->
                  <!-- col -->
                  <div class="col-lg-4">
                    <!-- contact card -->
                    <div class="dan-a dan-card">
                      <div class="dan-table p-15-15">
                        <ul>
                          <li>
                            <h6>Email:</h6><span>adrianwang224@gmail.com</span>
                          </li>
                          <li>
                            <h6>Phone:</h6><span>+44 2032860022</span>
                          </li>
                          <li>
                            <h6>Linkedin:</h6><span>adrian-wang-301238226</span>
                          </li>
                          <li>
                            <h6>GitHub:</h6><span>webva</span>
                          </li>
                          <li>
                            <h6>Skype:</h6><span>live:.cid.7c02009c0e52a34d</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- contact card end -->
                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- section title -->
                    <div class="dan-section-title">
                      <!-- title frame -->
                      <div class="dan-title-frame">
                        <!-- title -->
                        <h4>Get in touch</h4>
                      </div>
                      <!-- title frame end -->
                    </div>
                    <!-- section title end -->

                    <!-- contact form frame -->
                    <div class="dan-a dan-card">

                      <!-- contact form -->
                      <form id="form" class="dan-contact-form">
                        <!-- form field -->
                        <div class="dan-form-field">
                          <!-- name input -->
                          <input id="name" name="name" class="dan-input" type="text" placeholder="Name" required>
                          <!-- label -->
                          <label for="name"><i class="fas fa-user"></i></label>
                        </div>
                        <!-- form field end -->
                        <!-- form field -->
                        <div class="dan-form-field">
                          <!-- email input -->
                          <input id="email" name="email" class="dan-input" type="email" placeholder="Email" required>
                          <!-- label -->
                          <label for="email"><i class="fas fa-at"></i></label>
                        </div>
                        <!-- form field end -->
                        <!-- form field -->
                        <div class="dan-form-field">
                          <!-- message textarea -->
                          <textarea id="message" name="text" class="dan-input" placeholder="Message" required></textarea>
                          <!-- label -->
                          <label for="message"><i class="far fa-envelope"></i></label>
                        </div>
                        <!-- form field end -->
                        <!-- button -->
                        <div class="dan-submit-frame">
                          <button class="dan-btn dan-btn-md dan-submit" type="submit"><span>Send message</span></button>
                          <!-- success -->
                          <div class="dan-success">Success <i class="fas fa-check"></i></div>
                        </div>
                      </form>
                      <!-- contact form end -->

                    </div>
                    <!-- contact form frame end -->

                  </div>
                  <!-- col end -->

                </div>
                <!-- row end -->

              </div>
              <!-- container end -->

              <?php include_once('./components/brand.php');?>

              <!-- footer -->
              <footer>
                <!-- copyright -->
                <div>© 2022 Adrian Wang.</div>
                <!-- author ( Please! Do not delete it. You are awesome! :) -->
                <div>Template author:&#160; <a href="https://themeforest.net/user/millerdigitaldesign" target="_blank">Nazar Miller</a></div>
              </footer>
              <!-- footer end -->

            </div>
            <!-- scroll frame end -->

          </div>
          <!-- swup container end -->

        </div>
        <!-- content end -->
        <?php $page = 'contact';?>
        <?php include_once('./components/sidebar.php')?>

      </div>
      <!-- app container end -->

    </div>
    <!-- app wrapper end -->

    <!-- preloader -->
    <div class="dan-preloader">
      <!-- preloader content -->
      <div class="dan-preloader-content">
        <!-- title -->
        <h4>Adrian Wang.</h4>
        <!-- progressbar -->
        <div id="preloader" class="dan-preloader-load"></div>
      </div>
      <!-- preloader content end -->
    </div>
    <!-- preloader end -->

  </div>
  <!-- app end -->

  <!-- jquery js -->
  <script src="js/plugins/jquery.min.js"></script>
  <!-- anime js -->
  <script src="js/plugins/anime.min.js"></script>
  <!-- swiper js -->
  <script src="js/plugins/swiper.min.js"></script>
  <!-- progressbar js -->
  <script src="js/plugins/progressbar.min.js"></script>
  <!-- smooth scrollbar js -->
  <script src="js/plugins/smooth-scrollbar.min.js"></script>
  <!-- overscroll js -->
  <script src="js/plugins/overscroll.min.js"></script>
  <!-- typing js -->
  <script src="js/plugins/typing.min.js"></script>
  <!-- isotope js -->
  <script src="js/plugins/isotope.min.js"></script>
  <!-- fancybox js -->
  <script src="js/plugins/fancybox.min.js"></script>
  <!-- swup js -->
  <script src="js/plugins/swup.min.js"></script>

  <!-- main js -->
  <script src="js/main.js"></script>

</body>

</html>
