<?php
include("connect.php");
$sql = "SELECT service_des FROM service";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            // echo "Description: " . $row["service_des"];
            $auto_des=$row["service_des"];
        }
    } else {
        echo "0 results";
    }
?>
<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="IT Solutions &amp; Business Services Responsive HTML5 Bootstrap5  Website Template">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <!-- fav icon -->
        <link rel="icon" href="assets/images/fav-icon/fav-icon.png">
        
        <!-- bootstarp -->
        <link rel="stylesheet" href="css/vendors/bootstrap.min.css">
        
        <!-- animate.css file -->
        <link rel="stylesheet" href="css/vendors/animate.css">
        
        <!-- Fancybox -->
        <link rel="stylesheet" href="css/vendors/jquery.fancybox.min.css">
        
        <!-- flaticon -->
        <link rel="stylesheet" href="css/vendors/flaticon/flaticon.css">
        
        <!-- fontAwesome -->
        <link rel="stylesheet" href="css/vendors/all.min.css">
        
        <!-- bootstrap icons -->
        <link rel="stylesheet" href="css/vendors/bootstrap-icons-1.9.1/bootstrap-icons.css">
        
        <!-- Swiper -->
        <link rel="stylesheet" href="css/vendors/swiper-bundle.min.css">
        
        <!-- Font Family -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800&amp;display=swap">
        
        <!-- main-LTR -->
        <link rel="stylesheet" href="css/main-LTR.css">
        <title>DEV-FIX TECHNOLOGIES | Automation</title>
  </head>
  <body class=" dark-theme "> 
    <!--Start Page Header-->
    <header class=" page-header   inner-page-header header-basic" id="page-header">
      <div class="header-search-box">
        <div class="close-search"></div>
        <form class="nav-search search-form" role="search" method="get" action="#">
          <div class="search-wrapper"> 
            <label class="search-lbl">Search for:</label>
            <input class="search-input" type="search" placeholder="Search..." name="searchInput" autofocus="autofocus"/>
            <button class="search-btn" type="submit"><i class="bi bi-search icon"></i></button>
          </div>
        </form>
      </div>
      <div class="container">
        <nav class="menu-navbar">
          <div class="header-logo"><a class="logo-link" href="#">
            <img class="logo-img light-logo" loading="lazy" src="assets/images/logo/light_logo.png" alt="logo"/>
            <img class="logo-img  dark-logo" loading="lazy" src="assets/images/logo/dark.png" alt="logo"/></a></div>
          <div class="links menu-wrapper ">
            <ul class="list-js links-list">
              <li class="menu-item"><a class="menu-link  " href="index.php">Home  </a></li>
              <li class="menu-item"><a class="menu-link  " href="about-us.php">Our Company </a></li>
              <li class="menu-item has-sub-menu"><a class="menu-link  " href="#0">What We Do<i class="fas fa-plus  plus-icon"> </i></a>
                <ul class="sub-menu ">
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="services.php">services</a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="software_development.php">Software Development</a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="digital_marketing.php">Digital Marketing</a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="mobile_dev.php">Mobile & Development</a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="graphics.php">Graphics Designing</a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="digital_agency.php">Digital Agency</a></li>
                  <li class="menu-item sub-menu-item active"><a class="menu-link sub-menu-link  " href="automation.php">Automation</a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="training.php">Training & E-Services</a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="tax_business.php">Tax & Business Consultant</a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="event_mgt.php">Event Management & Digital Studio</a></li>
                  <!-- <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="services.php">services</a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="service-single.php">service single</a></li> -->
                </ul>
              </li>
              <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="our-team.php">Meet The Team</a></li>
              <li class="menu-item sub-menu-item"><a class="menu-link" href="career.php">Career</i></a></li>
              <!-- <li class="menu-item has-sub-menu"><a class="menu-link  " href="#0">portfolio <i class="fas fa-plus  plus-icon"> </i></a>
                <ul class="sub-menu ">
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="portfolio-grid.php">portfolio grid</a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="portfolio-blocks.php">portfolio blocks</a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="portfolio-slider.php">portfolio slider</a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="portfolio-single.php">portfolio single</a></li>
                </ul>
              </li> -->
              <!-- <li class="menu-item has-sub-menu"><a class="menu-link  " href="#0">blog<i class="fas fa-plus  plus-icon"> </i></a>
                <ul class="sub-menu ">
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="blog-home-1-col.php">blog home 1 colmun</a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="blog-home-2-col.php">blog home 2 columns</a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="blog-home-3-col.php">blog home 3 columns</a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="post-single.php">single post</a></li>
                </ul>
              </li> -->
              <!-- <li class="menu-item has-sub-menu"><a class="menu-link  " href="#0">pages<i class="fas fa-plus  plus-icon"> </i></a>
                <ul class="sub-menu ">
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="pricing.php">pricing plans</a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="our-team.php">our team</a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="career.php">team member</a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="faq.php">FAQ</a></li>
                  <li class="menu-item sub-menu-item"><a class="menu-link sub-menu-link  " href="404.php">404 page</a></li>
                </ul>
              </li> -->
              <li class="menu-item"><a class="menu-link  " href="contact-us.php">contact us </a></li>
            </ul>
          </div>
          <div class="controls-box">
            <!--Menu Toggler button-->
            <div class="control  menu-toggler"><span></span><span></span><span></span></div>
            <!--search Icon button-->
            <div class="control header-search-btn"><i class="bi bi-search icon"></i></div>
            <!--Dark/Light mode button-->
            <div class="mode-switcher ">
              <div class="switch-inner go-light " title="Switch To Light Mode "><i class="bi bi-sun icon "></i></div>
              <div class="switch-inner go-dark" title="Switch To Dark Mode "><i class="bi bi-moon icon "></i></div>
            </div>
            <!--mini shoping cart-->
          </div>
        </nav>
      </div>
    </header>
    <!--End Page Header-->
    <!-- Start inner Page hero-->
    <section class="d-flex align-items-center page-hero  inner-page-hero " id="page-hero">
      <div class="overlay-photo-image-bg parallax" data-bg-img="assets/images/hero/inner-page-hero.jpg" data-bg-opacity="1"></div>
      <div class="overlay-color" data-bg-opacity=".75"></div>
      <div class="container">
        <div class="hero-text-area centerd">
          <h1 class="hero-title  wow fadeInUp" data-wow-delay=".2s">Service Setails</h1>
          <nav aria-label="breadcrumb ">
            <ul class="breadcrumb wow fadeInUp" data-wow-delay=".6s">
              <li class="breadcrumb-item"><a class="breadcrumb-link" href="#0"><i class="bi bi-house icon "></i>Home</a></li>
              <li class="breadcrumb-item active">Service Details</li>
            </ul>
          </nav>
        </div>
      </div>
    </section>
    <!-- End inner Page hero-->
    <!-- Start inner Page hero-->
    <div class="service-single "> 
      <div class="container">
        <div class="row">
          <!--Start service content-->
          <div class="col-12 col-xl-8  ">
            <div class="service-content-area">
              <div class="featured-img-area part">
                <!-- <img class="feat-img img-fluid" src="assets/images/services/service-single-featured-img.jpg" alt="featured image"> -->
              </div>
              <div class="service-content">
                <!-- <div class="part">
                  <h2 class="service-title" id="1">Software Development</h2>
                  <p class="service-text" style="text-align: justify;">Software development is the process of designing, creating, testing, and maintaining software applications or systems. It involves identifying user needs, planning and designing the architecture, writing and testing code, and deploying the software.</p>
                  <p class="service-text" style="text-align: justify;">This process can involve various programming languages, tools, and methodologies to ensure the development of reliable, efficient, and user-friendly software that meets the needs of its intended users. Software development can be used to create a wide range of applications, from simple mobile apps to complex enterprise systems.</p>
                </div> -->
                <div class="part">
                  <div class="two-cols-img ">
                    <div class="row">
                      <div class="col-12 col-md-6 mb-3">
                      <h2 class="service-title">Automation</h2>
                       <p class="service-text" style="text-align: justify;">
                      <?php echo $auto_des; ?>  
                      </p>
                       <p class="service-text"> </p>
                        <!-- <div class="img-col"><img class="img-fluid" src="assets/images/services/service-single-img-col-1.jpg" loading="lazy" alt="service single image "></div> -->
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="img-col"><img class="img-fluid" src="assets/images/services/auto_4.png" loading="lazy" alt="service single image "></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="part">
                  <h2 class="service-title">Automation</h2>
                  <p class="service-text" style="text-align: justify;">We offer automating repetitive or manual tasks, such as data entry, scheduling, and reporting, as well as more complex processes, such as data analysis and machine learning. </p>
                  <p class="service-text"> </p>
                </div> -->
                <div class="part">
                  <div class="info-items-list">
                    <div class="row">
                      <div class="col-12 col-md-6 ">
                        <div class="info-item"><span class="info-number ">01.</span>
                          <div class="info-content">
                            <h5 class="info-title">Latest technologies </h5>
                            <p class="info-text"> Artificial intelligence and machine learning can be used to analyze data and make predictions, such as in finance and marketing.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 ">
                        <div class="info-item"><span class="info-number ">02.</span>
                          <div class="info-content">
                            <h5 class="info-title">Uniqe solutions </h5>
                            <p class="info-text">We use of sensors and IoT technology could also be used to track inventory levels and optimize stock placement, reducing the time required for inventory management and minimizing errors</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 ">
                        <div class="info-item"><span class="info-number ">03.</span>
                          <div class="info-content">
                            <h5 class="info-title">Powerful strategies </h5>
                            <p class="info-text">In automation services, having a powerful strategy is essential for achieving success and maximizing the benefits of automation.  </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 ">
                        <div class="info-item"><span class="info-number ">04.</span>
                          <div class="info-content">
                            <h5 class="info-title">Deliver just on time </h5>
                            <p class="info-text">We prioritize timely delivery of projects and ensure that our clients receive their software solutions within the agreed-upon timeframe.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="part">
                  <h2 class="service-title"> Most Asked Questions</h2>
                  <div class="faq">           
                    <!--Start Accordion List For FAQ-->
                    <div class="faq-accordion " id="accordion">
                      <div class="card mb-2">
                        <div class="card-header " id="heading-1">
                          <h5 class="mb-0 faq-title">
                            <button class="btn btn-link  faq-btn  collapsed " data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">are your service easy to use?</button>
                          </h5>
                        </div>
                        <div class="collapse " id="collapse-1" aria-labelledby="collapse-1" data-bs-parent="#accordion">
                          <div class="card-body">
                            <p class="faq-answer">Our services are designed to be user-friendly and easy to use, providing a seamless experience for our clients. We understand that simplicity is key when it comes to using
                              software solutions, and we strive to ensure that our services are intuitive and easy to navigate. </p>
                          </div>
                        </div>
                      </div>
                      <div class="card mb-2">
                        <div class="card-header " id="heading-2">
                          <h5 class="mb-0 faq-title">
                            <button class="btn btn-link  faq-btn  collapsed " data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">will i receive future updates?</button>
                          </h5>
                        </div>
                        <div class="collapse " id="collapse-2" aria-labelledby="collapse-2" data-bs-parent="#accordion">
                          <div class="card-body">
                            <p class="faq-answer">We offer future updates and ongoing maintenance are usually included in the service. </p>
                          </div>
                        </div>
                      </div>
                      <div class="card mb-2">
                        <div class="card-header " id="heading-3">
                          <h5 class="mb-0 faq-title">
                            <button class="btn btn-link  faq-btn  collapsed " data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="true" aria-controls="collapse-3">is this services work in my country?</button>
                          </h5>
                        </div>
                        <div class="collapse " id="collapse-3" aria-labelledby="collapse-3" data-bs-parent="#accordion">
                          <div class="card-body">
                            <p class="faq-answer">Yes offcourse </p>
                          </div>
                        </div>
                      </div>
                      <div class="card mb-2">
                        <div class="card-header " id="heading-4">
                          <h5 class="mb-0 faq-title">
                            <button class="btn btn-link  faq-btn  collapsed " data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="true" aria-controls="collapse-4">Question?</button>
                          </h5>
                        </div>
                        <div class="collapse " id="collapse-4" aria-labelledby="collapse-4" data-bs-parent="#accordion">
                          <div class="card-body">
                            <p class="faq-answer"> ans</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--Start service content-->
          <!-- Start service sidebar-->
          <div class="col-12 col-xl-4">
            <div class="service-sidebar ">
              <div class="sidebar-pane">
                <h2 class="sidebar-title">Services</h2>
                <ul class="list">
                  <li class="list-item "><i class="flaticon-web-development font-icon"></i><a href="#1"> Software Development<i class="bi bi-arrow-right icon "></i></a></li>
                  <li class="list-item "><i class="flaticon-nanotechnology font-icon"></i><a href="#2"> Digital Marketing<i class="bi bi-arrow-right icon "></i></a></li>
                  <li class="list-item"><i class="flaticon-web-domain font-icon"></i><a href="#3"> Mobile & Development <i class="bi bi-arrow-right icon "></i></a></li>
                  <li class="list-item"><i class="flaticon-profile font-icon"></i><a href="#4"> Graphics Designing<i class="bi bi-arrow-right icon "></i></a></li>
                  <li class="list-item"><i class="flaticon-search font-icon"></i><a href="#5">Digital Agency<i class="bi bi-arrow-right icon "></i></a></li>
                  <li class="list-item active"><i class="flaticon-virtual-reality font-icon"></i><a href="#6"> Automation<i class="bi bi-arrow-right icon "></i></a></li>
                  <li class="list-item"><i class="flaticon-medal font-icon"></i><a href="#7"> Training & E-Service<i class="bi bi-arrow-right icon "></i></a></li>
                  <li class="list-item"><i class="flaticon-basic-shapes font-icon"></i><a href="#8"> Tax & Business Consultant<i class="bi bi-arrow-right icon "></i></a></li>
                  <li class="list-item"><i class="flaticon-project-management font-icon"></i><a href="#9"> Event Management & Digital Studio<i class="bi bi-arrow-right icon "></i></a></li>
                </ul>
              </div>
              <!-- <div class="sidebar-pane">
                <div class="download-area">
                  <h2 class="sidebar-title">download assets</h2>
                  <p class="sidebar-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure minima distinctio dolores quidem ducimus! Illum.</p>
                  <ul class="list">
                    <li class="list-item"><i class="flaticon-downloading font-icon"></i><a href="#0">
                         service-report<i class="bi bi-arrow-right icon "></i></a></li>
                    <li class="list-item"><i class="flaticon-downloading font-icon"></i><a href="#0">
                         all services<i class="bi bi-arrow-right icon "></i></a></li>
                  </ul>
                </div>
              </div> -->
              <!-- <div class="sidebar-pane">
                <div class="social-area">
                  <h2 class="sidebar-title">follow us</h2>
                  <div class="sc-wrapper dir-row sc-size-40">
                    <ul class="sc-list">
                      <li class="sc-item " title="Facebook"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-facebook-f sc-icon"></i></a></li>
                      <li class="sc-item " title="youtube"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-youtube sc-icon"></i></a></li>
                      <li class="sc-item " title="instagram"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-instagram sc-icon"></i></a></li>
                      <li class="sc-item " title="twitter"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-twitter sc-icon"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
          <!-- End service sidebar-->
        </div>
      </div>
    </div>
    <!-- End inner Page hero-->
    <!-- Start  page-footer Section-->
    <footer class="page-footer dark-color-footer" id="page-footer">
      <div class="overlay-photo-image-bg" data-bg-img="assets/images/sections-bg-images/footer-bg-1.jpg" data-bg-opacity=".25"></div>
      <div class="container">
        <div class="row footer-cols">
          <div class="col-12 col-md-8 col-lg-4  footer-col ">
            <img class="img-fluid footer-logo" loading="lazy" src="assets/images/logo/light_logo.png" alt="logo"/>
          <h2 class=" footer-col-title    ">Contact Information</h2>
            <div class="footer-col-content-wrapper">       
            <div class="contact-info-card"><i class="bi bi-envelope icon"></i><a class="text-lowercase  info" href="info@d-fixtech.com">info@d-fixtech.com</a></div>
              <div class="contact-info-card"><i class="bi bi-geo-alt icon"></i><span class="  info">Near Mustafa Masjid,wallace road, sukkur,sindh</span></div>
              <div class="contact-info-card"><i class="bi bi-phone icon"></i><a class="info" href="tel:+20123456789">+92-3443805184  | +92-3248011017</a></div>
              <div class="contact-info-card">
                <div class="social-icons">
                  <div class="sc-wrapper dir-row sc-size-32">
                    <ul class="sc-list">
                      <li class="sc-item " title="Facebook"><a class="sc-link" href="https://www.facebook.com/devfixtechnoligies" title="social media icon"><i class="fab fa-facebook-f sc-icon"></i></a></li>
                      <!-- <li class="sc-item " title="youtube"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-youtube sc-icon"></i></a></li> -->
                      <li class="sc-item " title="instagram"><a class="sc-link" href="https://instagram.com/devfixtechnologies" title="social media icon"><i class="fab fa-instagram sc-icon"></i></a></li>
                      <!-- <li class="sc-item " title="twitter"><a class="sc-link" href="#" title="social media icon"><i class="fab fa-twitter sc-icon"></i></a></li> -->
                    </ul>
                  </div>
                </div>
              </div>
            </div>  
          <!-- <div class="footer-col-content-wrapper">        
              <p class="footer-text-about-us ">
                 Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Voluptatibus facere modi possimus dignissimos, 
                aliquam nobis eaque? Voluptatem magnam quisquam rem.
                
              </p>
            </div> -->
            <!-- <div class="form-area ">
              <div class="mailchimp-form ">
                <form class="one-field-form" method="post" action="#0">
                  <div class="field-group ">
                    <label class="email-label" for="email-input"> Subscribe to our news letter</label>
                    <input class="email-input " type="email" value="" name="EMAIL" id="email-input" placeholder="Email Address" autocomplete="off"/>
                    <div class="cta-area">
                      <input class="btn-solid subscribe-btn" type="submit" value="Subscribe" name="subscribe"/>
                    </div>
                  </div><span class="email-notice">*we will not share your personal info</span>
                </form>
              </div>
            </div> -->
          </div>
          <div class="col-6 col-lg-2  footer-col ">
            <h2 class=" footer-col-title    ">Expertise</h2>
            <!-- <div class="footer-col-content-wrapper">
              <ul class="footer-menu ">
                <li class="footer-menu-item"><i class="bi bi-arrow-right icon "></i><a class="footer-menu-link" href="#0">Google</a>
                </li>
                <li class="footer-menu-item"><i class="bi bi-arrow-right icon "></i><a class="footer-menu-link" href="#0">Dribbble</a>
                </li>
                <li class="footer-menu-item"><i class="bi bi-arrow-right icon "></i><a class="footer-menu-link" href="#0">linkedIn</a>
                </li>
                <li class="footer-menu-item"><i class="bi bi-arrow-right icon "></i><a class="footer-menu-link" href="#0">wikipedia</a>
                </li>
              </ul>
            </div> -->
          </div>
          <!-- <div class="col-6 col-lg-2 footer-col ">
            <h2 class=" footer-col-title    ">Resources</h2>
            <div class="footer-col-content-wrapper">
              <ul class="footer-menu">
                <li class="footer-menu-item"><i class="bi bi-arrow-right icon "></i><a class="footer-menu-link" href="#0">support</a>
                </li>
                <li class="footer-menu-item"><i class="bi bi-arrow-right icon "></i><a class="footer-menu-link" href="#0">dashboard</a>
                </li>
                <li class="footer-menu-item"><i class="bi bi-arrow-right icon "></i><a class="footer-menu-link" href="#0">drivers</a>
                </li>
                <li class="footer-menu-item"><i class="bi bi-arrow-right icon "></i><a class="footer-menu-link" href="#0">projects</a>
                </li>
              </ul>
            </div>
          </div> -->
          <div class="col-12     col-lg-4 footer-col ">
            <!-- <h2 class=" footer-col-title    ">contact information</h2>
            <div class="footer-col-content-wrapper">       
              <div class="contact-info-card"><i class="bi bi-envelope icon"></i><a class="text-lowercase  info" href="mailto:example@support.com">example@support.com</a></div>
              <div class="contact-info-card"><i class="bi bi-geo-alt icon"></i><span class="text-lowercase  info">5 Xyz st., Abc, alexandria, egypt.</span></div>
              <div class="contact-info-card"><i class="bi bi-phone icon"></i><a class="info" href="tel:+20123456789">+20123456789  </a></div>
              <div class="contact-info-card">
                <div class="social-icons">
                  <div class="sc-wrapper dir-row sc-size-32">
                    <ul class="sc-list">
                      <li class="sc-item " title="Facebook"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-facebook-f sc-icon"></i></a></li>
                      <li class="sc-item " title="youtube"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-youtube sc-icon"></i></a></li>
                      <li class="sc-item " title="instagram"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-instagram sc-icon"></i></a></li>
                      <li class="sc-item " title="twitter"><a class="sc-link" href="#0" title="social media icon"><i class="fab fa-twitter sc-icon"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
      <div class="copyrights ">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6 d-flex justify-content-start">
              <p class="creadits">
                 
                
                &copy; 2022
                Created by:
                
                           
              </p>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-end">
              <div class="terms-links"><a href="#0">Terms of Use </a>
                | <a href="#0">Privacy Policy</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End  page-footer Section-->
    <!-- Start loading-screen Component-->
    <div class="loading-screen" id="loading-screen"><span class="bar top-bar"></span><span class="bar down-bar"></span><span class="progress-line"></span><span class="loading-counter"> </span></div>
    <!-- End loading-screen Component-->
    <!-- Start back-to-top Component-->
    <div class="back-to-top" id="back-to-top"><i class="bi bi-arrow-up icon "></i>
    </div>
    <!-- End back-to-top Component-->   
        
        <!--     JQuery     -->
        <script src="js/vendors/jquery-3.6.1.min.js"></script>
        
        <!--     bootstrap     -->
        <script src="js/vendors/bootstrap.bundle.min.js"></script>
        
        <!--     fancybox     -->
        <script src="js/vendors/jquery.fancybox.min.js"></script>
        
        <!--     swiper     -->
        <script src="js/vendors/swiper-bundle.min.js"></script>
        
        <!--     wow     -->
        <script src="js/vendors/wow.min.js"></script>
        
        <!--     main     -->
        <script src="js/main.js"></script>
  </body>
</html>