<!DOCTYPE html>
<html lang="en">

<?php $active_page ="HOME";
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
    
    <!-- /.Header -->

    <!-- ============================
        Slider
    ============================== -->
    <section class="slider slider-layout1">
      <div class="slick-carousel carousel-arrows-light m-slides-0"
        data-slick='{"slidesToShow": 1, "arrows": true, "dots": true, "speed": 700,"fade": true,"cssEase": "linear"}'>
        <div class="slide-item align-v-h bg-overlay bg-overlay-2">
          <div class="bg-img"><img src="assets/images/works/1.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-9">
                <div class="slide__content">
                  <h4 class=" slide__title"> Webod Limited Provides Effective Engineering Solutions!</h4>
                  <p class="slide__desc">Excellent in assisting companies maximize process efficiency & effective asset management by adding value to assets through the deployment of latest technology, materials & engineering dedicated solutions</p>
                  
                  </p>
                  <a href="services" class="btn btn__primary btn__icon btn__lg mr-30">
                    <span>Our Services</span><i class="icon-arrow-right"></i>
                  </a>
                  <a href="about" class="btn btn__white">More About Us!</a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-9 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item align-v-h bg-overlay">
          <div class="bg-img"><img src="assets/images/sliders/2.jpeg" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-9">
                <div class="slide__content">
                  <h2 class="slide__title">Bigger, Better, <br> Faster & Stronger</h2>
                  <p class="slide__desc">
                    
                  <a href="services" class="btn btn__primary btn__icon btn__lg mr-30">
                    <span>Our Services</span><i class="icon-arrow-right"></i>
                  </a>
                  <a href="about" class="btn btn__white">More About Us!</a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-9 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
      </div><!-- /.carousel -->
    </section><!-- /.slider -->

    <!-- ==========================
       Contact Info
    ============================ -->
    <section class="contact-info-layout2 pt-60 pb-30">
      <div class="container">
        <div class="row align-items-end">
          <!-- Contact panel #1 -->
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="contact-info-box d-flex align-items-center">
              <div class="contact__info-box-icon">
                <i class="icon-envelope"></i>
              </div>
              <div class="contact__info-box-content">
                <h4 class="contact__info-box-title">Quick Contact</h4>
                <ul class="contact__info-list list-unstyled">
                  <li><a href="mailto:<?php echo $config['email']; ?>"><?php echo $config['email']; ?></a></li>
                  <li>Phone 1: <a href="tel:<?php echo $config['telephone1']; ?>"><?php echo $config['telephone1']; ?></a></li>
                  <li>Phone 2: <a href="tel:<?php echo $config['telephone2']; ?>"><?php echo $config['telephone2']; ?></a></li>
                </ul><!-- /.contact__info-list -->
              </div><!-- /.contact__info-box-content -->
            </div><!-- /.contact-info-box -->
          </div><!-- /.col-lg-3 -->
          <!-- Contact panel #2 -->
          <div class="col-sm-12 col-md-6 col-lg-3">
            <div class="contact-info-box d-flex align-items-center">
              <div class="contact__info-box-icon">
                <i class="icon-location"></i>
              </div>
              <div class="contact__info-box-content">
                <h4 class="contact__info-box-title">Our Location</h4>
                <ul class="contact__info-list list-unstyled">
                  <li><?php echo $config['address']; ?></li>
                </ul><!-- /.contact__info-list -->
              </div><!-- /.contact__info-box-content -->
            </div><!-- /.contact-info-box -->
          </div><!-- /.col-lg-3 -->
          <!-- Contact panel #3 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="cta__banner">
              <h5 class="cta__title color-white">Highly experienced in Engineering, Procurement, Installation & Construction, Engineering Design, Commissioning & Maintainance</h5>
              <p class="cta__desc color-gray">Webod Limited has seasoned & experienced professionals who have delivered turnkey projects, using cutting edge technology & international standards in operations.</p>
              <a href="services" class="btn btn__primary btn__link color-white">
                <span>Learn More</span> <i class="icon-arrow-right"></i>
              </a>
            </div><!-- /.cta__banner -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Contact Info -->

    <!-- ========================
        Services Layout 2
    =========================== -->
    <section class="services-layout2 pt-120 bg-gray">
      <div class="services-bg">
        <div class="bg-img"><img src="assets/images/backgrounds/map.png" alt="background"></div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
            <div class="heading text-center mb-40">
              <span class="heading__subtitle">The Best A Grade Engineering, Procurement, Construction & Installation Services</span>
              <h2 class="heading__title">High Quality Engineering Solutions
                For Residentials & Industries!</h2>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-10 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__content">
                <div class="service__icon">
                  <i class="icon-brick-wall"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Civil Engineering</h4>
                <p class="service__desc">
                  Construction/Civil Works/Maintenance of Buildings, Road, Drainage & Estate Agency
                </p>
                <p class="service__desc">
                  Buying & Selling of Electrical Materials & Aluminium Works.
                </p>
                <p class="service__desc">
                  General Supply of equipment, wood works, interlocking, store coated roof tiles, electric poles, ring well, block production services, sales & supply of granite, cement, & supply of labour services to individuals, firm, company or organisation.
                </p>
                
              </div><!-- /.service-content -->
              <div class="service__overlay bg-overlay bg-overlay-theme">
                <div class="bg-img"><img src="assets/images/services/service-overlay.png" alt="background"></div>
              </div><!-- /.service__overlay -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__content">
                <div class="service__icon">
                  <i class="icon-engineer3"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Mechanical & Electrical <br> Engineering</h4>
                <p class="service__desc">Wiring of buildings, sales/supplies, repair & servicing of electrical/electronic appliances & fittings. </p>
                <p class="service__desc"> Installation of electricity, sales/services/installation of diesel generators, air conditioning systems, installation of inverters, maintenance of telecommunication sites & equipment</p>
              </div><!-- /.service-content -->
              <div class="service__overlay bg-overlay bg-overlay-theme">
                <div class="bg-img"><img src="assets/images/services/service-overlay.png" alt="background"></div>
              </div><!-- /.service__overlay -->
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service__content">
                <div class="service__icon">
                  <i class="icon-crane2"></i>
                </div><!-- /.service__icon -->
                <h4 class="service__title">Procurement & Installation</h4>
                <p class="service__desc">Supply & serving of engineering equipment, installation, equipment leasing/hiring /maintanance & servicing of plant/machinery & heavy duty equipment, road transportation, oil field service support, supplies of oilfield tools, welding & fabrication, dredging, scaffolding, machinery parts, old & new parts</p>
              </div><!-- /.service-content -->
              <div class="service__overlay bg-overlay bg-overlay-theme">
                <div class="bg-img"><img src="assets/images/services/service-overlay.png" alt="background"></div>
              </div><!-- /.service__overlay -->
            </div><!-- /.service-item -->
          </div>
          
          <!-- /.col-lg-4 -->
          <!-- /.col-lg-4 -->
        </div>



        
        <!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <p class="text__link">Offering high quality Engineering, Procurement, Construction & Installation solutions. <a href="contact">Build Your Dream
                Now!</a>
            </p>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services Layout 2 -->

    <!-- =========================
       Banner layout 4
      =========================== -->
    <section class="banner-layout4 mt--100 pb-0">
      <div class="container-fluid col-padding-0">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <div class="inner-padding bg-theme ">
              <div class="heading-layout2 heading-light mb-40">
                <p class="heading__subtitle">Nigeria's Leading Industry Corporation!</p>
                <h2 class="heading__title">Best A Grade EPCI Services</h2>
                <p class="heading__desc">The world is changing faster than ever before, business is no exception, yet
                  those that embrace change are thriving, building bigger, better, faster & stronger products than ever
                  before. We can help you build on your past & prepare for future.</p>
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
                        highest local standards.</p>
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
                      <p class="fancybox__desc">Building relationships & projects that last. Serving an impressive list of
                        long-term clients.</p>
                    </div><!-- /.fancybox-content -->
                  </div><!-- /.fancybox-item -->
                </div><!-- /.col-lg-6 -->
              </div><!-- /.row -->
            </div>
          </div><!-- /.col-xl-6 -->
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 background-banner">
            <div class="bg-img">
              <img src="assets/images/banners/a1.jpg" alt="banner">
            </div>
            <!-- /.video__box -->
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner layout 4 -->

    <!-- =========================== 
      portfolio standard carousel
    ============================= -->
    
    <?php require_once('templetes/recent_works.php'); ?>
    
    <!-- =====================
         Clients
      ======================== -->
   
    <!-- =========================
       Banner layout 2      banners/a3.jpg
      =========================== -->
      <section class="banner-layout2 bg-overlay bg-parallax">
        <div class="bg-img"><img src="assets/images/banners/a3.jpg" alt="background"></div>
        <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="heading-layout2 heading-light mb-50">
              <span class="heading__subtitle">Leading The Way In Engineering & Construction</span>
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
                    <h5 class="info__slider-title">Utilising latest processing solutions, & decades of work
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
                      customers receive the best quality prices & service. We take great pride in the services we render</p>
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

    <!-- ======================
      Blog carousel
    ========================= -->
    
    

    <!-- /.blog carousel -->

    <!-- ========================= 
            Google Map
    =========================  -->
   

    <!-- ========================
      Footer
    ========================== -->
    
    <?php require_once('templetes/footer.php'); ?>


    <button id="scrollTopBtn"><i class="fa fa-long-arrow-up"></i></button>

  </div><!-- /.wrapper -->
  <?php require_once('templetes/footlinks.php'); ?>
  
</body>

</html>