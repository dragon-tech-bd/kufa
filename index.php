<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:27:43 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kufa - Personal Portfolio HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="/kufa/includes/frontend/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="/kufa/includes/frontend/css/bootstrap.min.css">
        <link rel="stylesheet" href="/kufa/includes/frontend/css/animate.min.css">
        <link rel="stylesheet" href="/kufa/includes/frontend/css/magnific-popup.css">
        <link rel="stylesheet" href="/kufa/includes/frontend/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="/kufa/includes/frontend/css/flaticon.css">
        <link rel="stylesheet" href="/kufa/includes/frontend/css/slick.css">
        <link rel="stylesheet" href="/kufa/includes/frontend/css/aos.css">
        <link rel="stylesheet" href="/kufa/includes/frontend/css/default.css">
        <link rel="stylesheet" href="/kufa/includes/frontend/css/style.css">
        <link rel="stylesheet" href="/kufa/includes/frontend/css/responsive.css">
    </head>
    <body class="theme-bg">

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-start -->
        <header>
            <div id="header-sticky" class="transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                  <?php
                                  require_once 'includes/db.php';
                                  $logo_read_query = "SELECT * FROM logos";
                                  $logos = mysqli_query($db_connect, $logo_read_query);
                                  ?>
                                  <?php foreach ($logos as $logo): ?>

                                    <a href="index.php" class="navbar-brand logo-sticky-none"><img src="/kufa/uploads/logo/<?=$logo['logo']?>" alt="Logo"></a>
                                    <a href="index.php" class="navbar-brand s-logo-none"><img src="/kufa/uploads/logo/<?=$logo['logo']?>" alt="Logo"></a>
                                  <?php endforeach; ?>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-btn">
                                        <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offcanvas-start -->
            <div class="extra-info">
                <div class="close-icon menu-close">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
                <div class="logo-side mb-30">
                    <a href="index-2.html">
                        <img src="/kufa/includes/frontend/img/logo/logo.png" alt="" />
                    </a>
                </div>
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p>123/A, Miranda City Likaoli
                            Prikano, Dope</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p>+0989 7876 9865 9</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p>info@example.com</p>
                    </div>
                </div>
                <div class="social-icon-right mt-20">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offcanvas-end -->
        </header>
        <!-- header-end -->

        <!-- main-area -->
        <main>

            <!-- banner-area -->
            <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                      <?php
                      require_once 'includes/db.php';
                      $banner_read_query = "SELECT * FROM banners";
                      $banners = mysqli_query($db_connect, $banner_read_query);
                      ?>
                      <?php foreach ($banners as $banner): ?>

                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s"><?=$banner['your_name']?></h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s"><?=$banner['your_desc']?></p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                    <ul>
                                      <?php
                                      require_once 'includes/db.php';
                                      $banner_social_read_query = "SELECT * FROM banner_icons";
                                      $links = mysqli_query($db_connect, $banner_social_read_query);
                                      ?>
                                      <?php foreach ($links as $link): ?>
                                        <li><a href="<?=$link['social_link']?>"><i class="<?=$link['social_icon']?>"></i></a></li>
                                      <?php endforeach; ?>
                                    </ul>
                                </div>
                                  <?php
                                  require_once 'includes/db.php';
                                  $portfolio_link_read_query = "SELECT * FROM portfolio_links";
                                  $portfolio_links = mysqli_query($db_connect, $portfolio_link_read_query);
                                  ?>
                                  <?php foreach ($portfolio_links as $portfolio_link): ?>
                                <a href="<?=$portfolio_link['portfolio_link']?>" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img src="/kufa/uploads/banner/<?=$banner['your_img']?>" alt="">
                            </div>
                        </div>
                      <?php endforeach; ?>
                    </div>
                </div>
                <div class="banner-shape"><img src="/kufa/includes/frontend/img/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>
            <!-- banner-area-end -->

            <!-- about-area-->
            <section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                          <?php
                          require_once 'includes/db.php';
                          $about_image_read_query = "SELECT * FROM about_images";
                          $about_images = mysqli_query($db_connect, $about_image_read_query);
                          ?>
                          <?php foreach ($about_images as $about_image): ?>
                            <div class="col-lg-6">
                            <div class="about-img">
                                <img src="/kufa/uploads/about/<?=$about_image['image']?>" title="me-01" alt="me-01">
                            </div>
                        </div>
                      <?php endforeach;?>
                        <div class="col-lg-6 pr-90">
                          <?php
                          require_once 'includes/db.php';
                          $about_detail_read_query = "SELECT * FROM about_details";
                          $about_details = mysqli_query($db_connect, $about_detail_read_query);
                          ?>
                          <?php foreach ($about_details as $about_detail): ?>
                            <div class="section-title mb-25">
                                <span><?=$about_detail['about_subhead']?></span>
                                <h2><?=$about_detail['about_head']?></h2>
                            </div>
                            <div class="about-content">
                                <p><?=$about_detail['about_description']?></p>
                                <h3>Education:</h3>
                            </div>
                          <?php endforeach; ?>

                            <!-- Education Item -->
                              <?php
                              require_once 'includes/db.php';
                              $skill_read_query = "SELECT * FROM skills";
                              $skills = mysqli_query($db_connect, $skill_read_query);
                              ?>
                              <?php foreach ($skills as $skill): ?>
                            <div class="education">
                                <div class="year"><?=$skill['skill_year']?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?=$skill['skill_title']?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?=$skill['skill_parcent']?>%;" aria-valuenow="<?=$skill['skill_parcent']?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          <?php endforeach; ?>
                            <!-- End Education Item -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- Services-area -->
            <section id="service" class="services-area pt-120 pb-50">
				<div class="container">
                    <div class="row justify-content-center">
                      <?php
                      require_once 'includes/db.php';
                      $service_read_query = "SELECT * FROM service_headings";
                      $service_headings = mysqli_query($db_connect, $service_read_query);
                      ?>
                      <?php foreach ($service_headings as $service_heading): ?>
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span><?=$service_heading['service_head_one']?></span>
                                <h2><?=$service_heading['service_head_two']?></h2>
                            </div>
                        </div>
                      <?php endforeach; ?>
                    </div>
					<div class="row">
            <?php
            require_once 'includes/db.php';
            $service_read_query = "SELECT * FROM services ORDER BY id DESC LIMIT 6";
            $services = mysqli_query($db_connect, $service_read_query);
            ?>
            <?php foreach ($services as $service): ?>
						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                <i class="<?=$service['service_icon']?>"></i>
								<h3><?=$service['service_title']?></h3>
								<p>
									<?=$service['service_description']?>
								</p>
							</div>
						</div>
            <?php endforeach; ?>
					</div>
				</div>
			</section>
            <!-- Services-area-end -->

            <!-- Portfolios-area -->
            <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                      <?php
                      require_once 'includes/db.php';
                      $portfolio_read_query = "SELECT * FROM portfolio_headings";
                      $portfolios = mysqli_query($db_connect, $portfolio_read_query);
                      ?>
                      <?php foreach ($portfolios as $portfolio): ?>
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span><?=$portfolio['portfolio_subheading']?></span>
                                <h2><?=$portfolio['portfolio_heading']?></h2>
                            </div>
                        </div>
                          <?php endforeach; ?>
                    </div>
                    <div class="row">
                      <?php
                      require_once 'includes/db.php';
                      $portfolio_item_read_query = "SELECT * FROM portfolio_items ORDER BY id DESC LIMIT 6";
                      $portfolio_items = mysqli_query($db_connect, $portfolio_item_read_query);
                      ?>
                      <?php foreach ($portfolio_items as $portfolio_item): ?>
                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
          								<div class="speaker-thumb">
          									<img src="/kufa/uploads/portfolio/<?=$portfolio_item['portfolio_image']?>" alt="<?=$portfolio_item['portfolio_image']?>">
          								</div>
          								<div class="speaker-overlay">
          									<span><?=$portfolio_item['portfolio_title']?></span>
          									<h4><a href="#"><?=$portfolio_item['portfolio_head']?></a></h4>
          									<a href="#" class="arrow-btn">More information <span></span></a>
          								</div>
							       </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
            <!-- services-area-end -->


            <!-- fact-area -->
            <section class="fact-area">
                <div class="container">
                    <div class="fact-wrap">
                        <div class="row justify-content-between">
                            <?php
                            require_once 'includes/db.php';
                            $counter_read_query = "SELECT * FROM counters ORDER BY id DESC LIMIT 4";
                            $counters = mysqli_query($db_connect, $counter_read_query);
                            ?>
                            <?php foreach ($counters as $counter): ?>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="<?=$counter['counter_icon']?>"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?=$counter['counter_number']?></span></h2>
                                        <span><?=$counter['counter_title']?></span>
                                    </div>
                                </div>
                            </div>
                          <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- fact-area-end -->

            <!-- testimonial-area -->
            <section class="testimonial-area primary-bg pt-115 pb-115">
                <div class="container">
                    <div class="row justify-content-center">
                      <?php
                      require_once 'includes/db.php';
                      $testimonial_heading_read_query = "SELECT * FROM testimonial_headings";
                      $testimonial_headings = mysqli_query($db_connect, $testimonial_heading_read_query);
                      ?>
                      <?php foreach ($testimonial_headings as $testimonial_heading): ?>
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span><?=$testimonial_heading['testimonial_subheading']?></span>
                                <h2><?=$testimonial_heading['testimonial_heading']?></h2>
                            </div>
                        </div>
                      <?php endforeach;?>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="testimonial-active">
                              <?php
                              require_once 'includes/db.php';
                              $client_review_read_query = "SELECT * FROM client_reviews";
                              $client_reviews = mysqli_query($db_connect, $client_review_read_query);
                              ?>
                              <?php foreach ($client_reviews as $client_review): ?>
                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img src="/kufa/uploads/testimonial/<?=$client_review['client_image']?>" alt="<?=$client_review['client_image']?>">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span><?=$client_review['client_review']?> <span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?=$client_review['client_name']?></h5>
                                            <span><?=$client_review['client_designation']?></span>
                                        </div>
                                    </div>
                                </div>
                              <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- brand-area -->
            <div class="barnd-area pt-100 pb-100">
                <div class="container">
                    <div class="row brand-active">
                      <?php
                      $partner_logo_read_query = "SELECT * FROM partners";
                      $partners = mysqli_query($db_connect, $partner_logo_read_query);
                      ?>
                      <?php foreach ($partners as $partner): ?>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="/kufa/uploads/partner/<?=$partner['partners']?>" alt="<?=$partner['partners']?>">
                            </div>
                        </div>
                      <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- contact-area -->
            <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                      <?php
                      $contact_info_read_query = "SELECT * FROM contact_infos";
                      $infos = mysqli_query($db_connect, $contact_info_read_query);
                      ?>
                      <?php foreach ($infos as $info): ?>

                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span><?=$info['contact_head_sm']?></span>
                                <h2><?=$info['contact_main_head']?></h2>
                            </div>
                            <div class="contact-content">
                                <p><?=$info['contact_info_description']?></p>
                                <h5>OFFICE IN <span><?=$info['office']?></span></h5>
                                <div class="contact-list">
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>Address :</span><?=$info['address']?></li>
                                        <li><i class="fas fa-headphones"></i><span>Phone :</span><?=$info['phone']?></li>
                                        <li><i class="fas fa-globe-asia"></i><span>e-mail :</span><?=$info['email']?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      <?php endforeach; ?>
                        <div class="col-lg-6">
                            <div class="contact-form">
                                <form method="post" action="contact_message_post.php">
                                    <input type="text" placeholder="your name *" name="contact_name">
                                    <input type="email" placeholder="your email *" name="contact_email">
                                    <textarea id="message" placeholder="your message *" name="contact_message"></textarea>
                                    <button type="submit" class="btn">SEND</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>Copyright© <span>Kufa</span> | All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->
          <!--Start of Tawk.to Script-->
            <script type="text/javascript">
              var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
              (function(){
              var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
              s1.async=true;
              s1.src='https://embed.tawk.to/5f0f20895b59f94722bac98f/default';
              s1.charset='UTF-8';
              s1.setAttribute('crossorigin','*');
              s0.parentNode.insertBefore(s1,s0);
              })();
            </script>
          <!--End of Tawk.to Script-->





		<!-- JS here -->
        <script src="/kufa/includes/frontend/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="/kufa/includes/frontend/js/popper.min.js"></script>
        <script src="/kufa/includes/frontend/js/bootstrap.min.js"></script>
        <script src="/kufa/includes/frontend/js/isotope.pkgd.min.js"></script>
        <script src="/kufa/includes/frontend/js/one-page-nav-min.js"></script>
        <script src="/kufa/includes/frontend/js/slick.min.js"></script>
        <script src="/kufa/includes/frontend/js/ajax-form.js"></script>
        <script src="/kufa/includes/frontend/js/wow.min.js"></script>
        <script src="/kufa/includes/frontend/js/aos.js"></script>
        <script src="/kufa/includes/frontend/js/jquery.waypoints.min.js"></script>
        <script src="/kufa/includes/frontend/js/jquery.counterup.min.js"></script>
        <script src="/kufa/includes/frontend/js/jquery.scrollUp.min.js"></script>
        <script src="/kufa/includes/frontend/js/imagesloaded.pkgd.min.js"></script>
        <script src="/kufa/includes/frontend/js/jquery.magnific-popup.min.js"></script>
        <script src="/kufa/includes/frontend/js/plugins.js"></script>
        <script src="/kufa/includes/frontend/js/main.js"></script>
    </body>

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:28:17 GMT -->
</html>
