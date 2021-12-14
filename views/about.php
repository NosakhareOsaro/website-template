<!DOCTYPE html>
<html lang="en">

<?php $active_page ="ABOUT";
 require_once('templetes/headlinks.php'); ?>


<body>
  <div class="wrapper">
    <div class="preloader">
      <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div><!-- /.preloader -->

    <!-- =========================
        Header
    =========================== -->
    <?php require_once('templetes/header.php'); ?>

    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout1 bg-overlay bg-overlay-2 bg-parallax">
      <div class="bg-img"><img src="assets/images/works/37.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <p class="h3 heading__title text-light">
              <?php echo $config['app_name']; ?> is an indigenous limited liability company company with registration number <?php echo $config['registration_number']; ?> incorporated in Nigeria. <br /><br />
              It has its head office at <?php echo $config['address']; ?>. <?php echo $config['app_name']; ?> has a vast experience in the area of Engineering, Procurement, Construction and Installation, Engineering Design, Commissioning and Maintenance. <br /><br />
              <?php echo $config['app_name']; ?> helps companies to maximize process efficiency and effective asset management by adding value to assets through the deployment of latest technology, materials and engineering dedicated solutions. <br /><br />
              <?php echo $config['app_name']; ?> is commmitted to delivering projects on schedule and on budget. On board, our workforce are seasoned and experienced professionals who have delivered turnkey projects, using cutting edge technology and international standards in operations. 
          </p>
            
            
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
      About Layout 2
    =========================== -->
    <section class="about-layout2">
      <div class="container-fluid">
        <div class="row">
          <div class="text-block">
            <div class="heading-layout2 mb-30">
              <span class="heading__subtitle">Leading The Way In Engineering, Procurement, Construction & Installation</span>
              <h2 class="heading__title">VISSION</h2>
              <p class="heading__desc mb-30 mt-40">
              To be recogniseed as a leader in engineering procurement, construction, installation, commissioning and maintenance of facilities in the oil and gas industry in Nigeria and globally </p> 
                <h2 class="heading__title">MISSION</h2>
              <p class="heading__desc mb-30 mt-40"> 
                To be the number one provider of detailed Engineering design, procurement, construction, installation and commissioning services to the onshore, swamp and offshore sectors of the Nigerian oil and gas industry.
              </p>
            </div><!-- /heading -->
          </div><!-- /.col-xl-7 -->
          
          <div class="imgs-block mt-50">
            <div class="about__img">
              <img src="assets/images/works/34.jpg" alt="about" class="img-fluid w-100">
            </div><!-- /.about-img -->
            <!-- /.video__box -->
          </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.About Layout 2 -->

    <!-- =========================
       Banner layout 1
      =========================== -->
    <section class="banner-layout1 p-0">
      <div class="container-fluid col-padding-0 bg-theme">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 background-banner">
            <div class="bg-img"><img src="assets/images/works/6.jpg" alt="background"></div>
            <div class="cta__banner">
              <div class="bg-img"><img src="assets/images/works/7.jpg" alt="background"></div>
              <h5 class="cta__title">A Leading Developer Of First
                Grade EPCI Projects! </h5>
              <p class="cta__desc">Today Promin has over 4,000 professionals on its payroll All Over The World.</p>
              <a href="#" class="btn btn__primary btn__link">
                <span>Learn More</span> <i class="icon-arrow-right"></i>
              </a>
            </div><!-- /.cta__banner -->
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="inner-padding">
              <div class="heading-layout2 heading-light mb-40">
                <h2 class="heading__title">Best A Grade EPCI Services</h2>
                <p class="heading__desc">Building bigger, better, faster & stronger products than ever before. We can
                  help you build on your past and prepare for future.</p>
              </div><!-- /.heading -->
              <div class="row fancybox-light">
                <!-- fancybox item #1 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="fancybox-item">
                    <div class="fancybox__icon">
                      <i class="icon-welding"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title">Powerfull Product<br> Strategy</h4>
                      <p class="fancybox__desc">Our facilities meet high security requirements and are certified to the
                        highest standards.</p>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-6 -->
                <!-- fancybox item #2 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="fancybox-item">
                    <div class="fancybox__icon">
                      <i class="icon-wrench5"></i>
                    </div><!-- /.fancybox-icon -->
                    <div class="fancybox__content">
                      <h4 class="fancybox__title">100% Satisfaction <br> Guarantee</h4>
                      <p class="fancybox__desc">Building relationships and projects that last. Serving an impressive list of
                        long-term clients.</p>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-6 -->
              </div><!-- /.row -->
              <a href="contact" class="btn btn__white btn__bordered btn__icon box-shadow-none">
                <span>Request A Quote</span><i class="icon-arrow-right"></i>
              </a>
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner layout 1 -->

    <!-- =========================== 
      portfolio standard carousel
    ============================= -->
    
    
    <?php require_once('templetes/recent_works.php'); ?>
    
    <!-- /.portfolio standard carousel -->

    <!-- =====================
         Clients
      ======================== -->
   
    <!-- =========================
       Banner layout 2
      =========================== -->
      <section class="banner-layout2 bg-overlay bg-parallax">
        <div class="bg-img"><img src="assets/images/works/15.jpg" alt="background"></div>
        <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="heading-layout2 heading-light mb-50">
              <span class="heading__subtitle">Leading The Way In Engineering And Construction</span>
              <h2 class="heading__title">Ready to Bring Bigger, Better, Faster And Stronger EPCI Projects Than Ever Before!!
              </h2>
            </div><!-- /.heading -->
            <ul class="list-items list-items-white list-unstyled mb-40">
              <li>Quality Control System, 100% Satisfaction Guarantee</li>
              <li>Highly Professional Staff, Accurate Testing Processes</li>
              <li>Unrivalled workmanship, Professional and Qualified</li>
            </ul>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="info-slider-wrapper d-flex justify-content-end">
              <div class="info__slider">
                <div class="slick-carousel" data-slick='{"slidesToShow": 1, "arrows": false, "dots": true}'>
                  <div class="info__slider-item">
                    <div class="info__slider-icon"><i class="icon-wrench5"></i></div>
                    <h5 class="info__slider-title">Utilising latest processing solutions, and decades of work
                      experience.</h5>
                  </div><!-- /.info__slider-item -->
                  <div class="info__slider-item">
                    <div class="info__slider-icon"><i class="icon-wheelbarrow"></i></div>
                    <h5 class="info__slider-title"> Engineering, Procurement, Designing, Construction, Installatio, Commissioning & General Maintanance </h5>
                  </div><!-- /.info__slider-item -->
                </div>
              </div><!-- /.info__slider -->
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner layout 2 -->

    <div>
      <div class="bg-img background-size-auto"><img src="assets/images/backgrounds/1.jpg" alt="background"></div>

      <!-- ==========================
          contact layout 2
      =========================== -->
      <section class="contact-layout2 p-0">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="contact-panel mt--140">
                <div class="contact__panel-info">
                  <div class="contact__panel-info-top">
                    <div class="contact-info-box">
                      <h4 class="contact__info-box-title">Our Location</h4>
                      <ul class="contact__info-list list-unstyled">
                        <li><?php echo $config['address']; ?></li>
                      </ul><!-- /.contact__info-list -->
                    </div><!-- /.contact-info-box -->
                    <div class="contact-info-box">
                      <h4 class="contact__info-box-title">Quick Contact</h4>
                      <ul class="contact__info-list list-unstyled">
                        <li>Email: <a href="<?php echo $config['email']; ?>"><?php echo $config['email']; ?></a></li>
                      </ul><!-- /.contact__info-list -->
                    </div><!-- /.contact-info-box -->
                  </div><!-- /.contact__panel-info-top -->
                  <div class="contact__panel-info-bottom">
                    <strong class="contact__panel-info-title">We will get back to you within 24 hours, or call us
                      everyday, 08:00 AM - 5:00 PM</strong>
                    <div class="contact__number d-flex align-items-center">
                      <i class="icon-phone"></i>
                      <a href="tel:<?php echo $config['telephone2']; ?>"><?php echo $config['telephone2']; ?></a>
                    </div>
                  </div><!-- /.contact__panel-info-bottom -->
                </div><!-- /.contact__panel-info -->
                <form method="post" action="assets/php/contact.php" id="contactForm" class="contact__panel-form">
                  <div class="row">
                    <div class="col-sm-12">
                      <h4 class="contact__panel-title">Get In Touch</h4>
                      <p class="contact__panel-desc mb-40">Complete control over products allows us to ensure our
                      customers receive the best quality prices and service. We take great pride in the services we render</p>
                  </p>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name"
                          required>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" id="contact-email"
                          name="contact-email" required>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                          name="contact-phone" required>
                      </div>
                    </div><!-- /.col-lg-6 -->
                    <!-- /.col-lg-6 -->
                    <div class="col-sm-6 col-md-6 col-lg-6">
                      <div class="form-group">
                        <select class="form-control" style="display: none;">
                          <option>select your industry</option>
                          <option>Petroleum &amp; Gas Energy</option>
                          <option>Construction &amp; Engineering</option>
                          <option>Mechanical Engineering</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <div class="form-group">
                        <textarea class="form-control" placeholder="Additional Details!" placeholder="Message"
                          id="contact-messgae" name="contact-messgae" required></textarea>
                      </div>
                    </div><!-- /.col-lg-12 -->
                    <div class="col-sm-12 col-md-12 col-lg-12">
                      <button type="submit" class="btn btn__primary btn__block  btn__lg">
                        <span class="mx-2">Submit Request</span><i class="icon-arrow-right mx-2"></i>
                      </button>
                      <div class="contact-result"></div>
                    </div><!-- /.col-lg-12 -->
                  </div><!-- /.row -->
                </form>
              </div><!-- /.contact__panel -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.contact layout 2 -->

      <!-- ========================= 
        Testimonials layout 1
     =========================  -->
      <!-- /.testimonials 1 -->
      <!-- =====================
         Clients
      ======================== -->
      <!-- /.clients -->

    </div>


    <!-- ========================
      Footer
    ========================== -->
    <?php require_once('templetes/footer.php'); ?>
    <!-- /.Footer -->
    <button id="scrollTopBtn"><i class="fa fa-long-arrow-up"></i></button>

  </div><!-- /.wrapper -->

  <?php require_once('templetes/footlinks.php'); ?>
</body>

</html>