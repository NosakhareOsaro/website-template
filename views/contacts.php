<!DOCTYPE html>
<html lang="en">

<?php $active_page ="CONTACT";
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

    <!-- ========================= 
            Google Map
    =========================  -->
    <section class="page-title page-title-layout1 bg-overlay bg-overlay-2 bg-parallax">
      <div class="bg-img"><img src="assets/images/works/7.jpg" alt="background"></div>
      <div class="container">
      <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="contact-panel">
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
                  <div class="contact__number  d-flex align-items-center">
                    <i class="icon-phone"></i>
                    <a href="tel:<?php echo $config['telephone1']; ?>"><?php echo $config['telephone1']; ?></a>
                  </div>
                </div><!-- /.contact__panel-info-bottom -->
              </div><!-- /.contact__panel-info -->
              <form method="post" action="assets/php/contact.php" id="contactForm" class="contact__panel-form">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="contact__panel-title">Get In Touch</h4>
                    <p class="contact__panel-desc mb-40">Complete control over products allows us to ensure our
                      customers receive the best quality prices and service. We take great pride in the services we render</p>
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
    </section><!-- /.GoogleMap -->

    <!-- ==========================
        contact layout 1
    =========================== -->
    <!-- /.contact layout 1 -->

    <!-- ==========================
       Contact Info
    ============================ -->
    <!-- /.Contact Info -->

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