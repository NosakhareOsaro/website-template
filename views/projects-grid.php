<!DOCTYPE html>
<html lang="en">

<?php $active_page ="PROJECTS";
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

    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout7 bg-overlay bg-overlay-2 bg-parallax text-center">
      <div class="bg-img"><img src="assets/images/works/25.jpg" alt="background"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <h1 class="pagetitle__heading mb-0">Projects</h1>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- =========================== 
      portfolio Grid 
    ============================= -->
    <section class="portfolio-grid">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <ul class="portfolio-filter d-flex flex-wrap justify-content-center list-unstyled">
              <li><a class="filter active" href="#" data-filter="all">ALL Works</a></li>
              <li><a class="filter" href="#" data-filter=".filter-engineering">Engineering</a></li>
              <li><a class="filter" href="#" data-filter=".filter-construction">Construction</a></li>
              <li><a class="filter" href="#" data-filter=".filter-installation">Installation</a></li>
              <li><a class="filter" href="#" data-filter=".filter-commissioning">Commisioning</a></li>
              <li><a class="filter" href="#" data-filter=".filter-maintenance">Maintenance</a></li>
            </ul><!-- /.portfolio-filter  -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
        <div id="filtered-items-wrap" class="row">
          <!-- portfolio item #1 -->
          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-engineering">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="assets/images/works/20.jpg" alt="portfolio img">
              </div><!-- /.portfolio-img -->
              <div class="portfolio__content">
                <h4 class="portfolio__title"><a href="#">Pressure Vessel Integrity Test..Don Mac Ltd</a></h4>
                <div class="portfolio__cat">
                  <a href="#">Engineering</a><a href="#">Construction</a>
                </div><!-- /.portfolio-cat -->
              </div><!-- /.portfolio-content -->
            </div><!-- /.portfolio-item -->
          </div><!-- /.col-lg-4 -->
          <!-- portfolio item #5 -->
          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-construction filter-engineering">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="assets/images/works/25.jpg" alt="portfolio img">
              </div><!-- /.portfolio-img -->
              <div class="portfolio__content">
                <h4 class="portfolio__title"><a href="#">Oredo Well "P" Flow Line Construction ...NPDC</a></h4>
                <div class="portfolio__cat">
                  <a href="#">Engineering</a><a href="#"> Construction</a>
                </div><!-- /.portfolio-cat -->
              </div><!-- /.portfolio-content -->
            </div><!-- /.portfolio-item -->
          </div><!-- /.col-lg-4 -->
          <!-- portfolio item #6 -->
          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-construction filter-installation ">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="assets/images/works/7.jpg" alt="portfolio img">
              </div><!-- /.portfolio-img -->
              <div class="portfolio__content">
                <h4 class="portfolio__title"><a href="#">Construction & Installation of Ovade/ Ogharefe LPG Storage Tank..Fode/Pan Ocean</a></h4>
                <div class="portfolio__cat">
                  <a href="#">Construction</a><a href="#">Installation</a>
                </div><!-- /.portfolio-cat -->
              </div><!-- /.portfolio-content -->
            </div><!-- /.portfolio-item -->
          </div>

          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-installation filter-maintenance ">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="assets/images/works/9.jpg" alt="portfolio img">
              </div><!-- /.portfolio-img -->
              <div class="portfolio__content">
                <h4 class="portfolio__title"><a href="#">Pump Alignment ..Pan Ocean</a></h4>
                <div class="portfolio__cat">
                  <a href="#">Installation</a><a href="#">Maintenance</a>
                </div><!-- /.portfolio-cat -->
              </div><!-- /.portfolio-content -->
            </div><!-- /.portfolio-item -->
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-installation filter-commissioning">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="assets/images/works/6.jpg" alt="portfolio img">
              </div><!-- /.portfolio-img -->
              <div class="portfolio__content">
                <h4 class="portfolio__title"><a href="#">Instrument Installation LPG ..Pan Ocean</a></h4>
                <div class="portfolio__cat">
                  <a href="#">Installation</a><a href="#">Commissioning</a>
                </div><!-- /.portfolio-cat -->
              </div><!-- /.portfolio-content -->
            </div><!-- /.portfolio-item -->
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-engineering filter-installation">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="assets/images/works/3.jpg" alt="portfolio img">
              </div><!-- /.portfolio-img -->
              <div class="portfolio__content">
                <h4 class="portfolio__title"><a href="#">Instrumentation Works at Gbaran Flow Station..SPDC</a></h4>
                <div class="portfolio__cat">
                  <a href="#">Engineering</a><a href="#">Installatiin</a>
                </div><!-- /.portfolio-cat -->
              </div><!-- /.portfolio-content -->
            </div><!-- /.portfolio-item -->
          </div>


          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-engineering filter-installation">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="assets/images/works/1.jpg" alt="portfolio img">
              </div><!-- /.portfolio-img -->
              <div class="portfolio__content">
                <h4 class="portfolio__title"><a href="#">Instrument Functionality Test & Installation Gbaran NAG..SPDC</a></h4>
                <div class="portfolio__cat">
                  <a href="#">Engineering</a><a href="#">Installation</a>
                </div><!-- /.portfolio-cat -->
              </div><!-- /.portfolio-content -->
            </div><!-- /.portfolio-item -->
          </div><!-- /.col-lg-4 -->
          <!-- portfolio item #2 -->
          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-maintenance filter-engineering">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="assets/images/works/32.jpg" alt="portfolio img">
              </div><!-- /.portfolio-img -->
              <div class="portfolio__content">
                <h4 class="portfolio__title"><a href="#">Cleaning & Integrity Test..AGIP</a></h4>
                <div class="portfolio__cat">
                  <a href="#">Maintenance</a><a href="#">Engineering</a>
                </div><!-- /.portfolio-cat -->
              </div><!-- /.portfolio-content -->
            </div><!-- /.portfolio-item -->
          </div><!-- /.col-lg-4 -->
          <!-- portfolio item #3 -->
          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-maintenance filter-engineering">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="assets/images/works/31.jpg" alt="portfolio img">
              </div><!-- /.portfolio-img -->
              <div class="portfolio__content">
                <h4 class="portfolio__title"><a href="#">Cleaning & Integrity Test..AGIP</a></h4>
                <div class="portfolio__cat">
                  <a href="#">Maintenance</a><a href="#">Engineering</a>
                </div><!-- /.portfolio-cat -->
              </div><!-- /.portfolio-content -->
            </div><!-- /.portfolio-item -->
          </div><!-- /.col-lg-4 -->
          <!-- portfolio item #4 -->
          <!-- /.col-lg-4 -->


          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-engineering filter-installation">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="assets/images/works/17.jpg" alt="portfolio img">
              </div><!-- /.portfolio-img -->
              <div class="portfolio__content">
                <h4 class="portfolio__title"><a href="#">Valve Installation..Pan Ocean</a></h4>
                <div class="portfolio__cat">
                  <a href="#">Engineering</a><a href="#">Installation</a>
                </div><!-- /.portfolio-cat -->
              </div><!-- /.portfolio-content -->
            </div><!-- /.portfolio-item -->
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-construction filter-engineering">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="assets/images/works/22.jpg" alt="portfolio img">
              </div><!-- /.portfolio-img -->
              <div class="portfolio__content">
                <h4 class="portfolio__title"><a href="#">Hydro Testing of Pressure Vessel..Don Mac Ltd</a></h4>
                <div class="portfolio__cat">
                  <a href="#">Engineering</a><a href="#">Construction</a>
                </div><!-- /.portfolio-cat -->
              </div><!-- /.portfolio-content -->
            </div><!-- /.portfolio-item -->
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-engineering filter-construction">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="assets/images/works/16.jpg" alt="portfolio img">
              </div><!-- /.portfolio-img -->
              <div class="portfolio__content">
                <h4 class="portfolio__title"><a href="#">Meji De bottle necking spools Hydro testing..Chevron</a></h4>
                <div class="portfolio__cat">
                  <a href="#">Engineering</a><a href="#">Construction</a>
                </div><!-- /.portfolio-cat -->
              </div><!-- /.portfolio-content -->
            </div><!-- /.portfolio-item -->
          </div>



          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-maintenance filter-construction">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="assets/images/works/36.jpg" alt="portfolio img">
              </div><!-- /.portfolio-img -->
              <div class="portfolio__content">
                <h4 class="portfolio__title"><a href="#">Sectional repair ..Bonny field ..SPDC</a></h4>
                <div class="portfolio__cat">
                  <a href="#">Maintenance</a><a href="#">Construction</a>
                </div><!-- /.portfolio-cat -->
              </div><!-- /.portfolio-content -->
            </div><!-- /.portfolio-item -->
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-construction filter-instalation">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="assets/images/works/38.jpg" alt="portfolio img">
              </div><!-- /.portfolio-img -->
              <div class="portfolio__content">
                <h4 class="portfolio__title"><a href="#"> Well "p" flow line construction ..NPDC</a></h4>
                <div class="portfolio__cat">
                  <a href="#">Construction</a><a href="#">Installation</a>
                </div><!-- /.portfolio-cat -->
              </div><!-- /.portfolio-content -->
            </div><!-- /.portfolio-item -->
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-engineering filter-construction">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="assets/images/works/39.jpg" alt="portfolio img">
              </div><!-- /.portfolio-img -->
              <div class="portfolio__content">
                <h4 class="portfolio__title"><a href="#">Instrumentation works ..Chevron</a></h4>
                <div class="portfolio__cat">
                  <a href="#">Engineering</a><a href="#">Construction</a>
                </div><!-- /.portfolio-cat -->
              </div><!-- /.portfolio-content -->
            </div>
            <!-- /.portfolio-item -->
          </div>

          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-engineering">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="assets/images/works/13.jpg" alt="portfolio img">
              </div><!-- /.portfolio-img -->
              <div class="portfolio__content">
                <h4 class="portfolio__title"><a href="#">Instrument calibration..SPDC</a></h4>
                <div class="portfolio__cat">
                  <a href="#">Engineering</a><a href="#">Installation</a>
                </div><!-- /.portfolio-cat -->
              </div><!-- /.portfolio-content -->
            </div><!-- /.portfolio-item -->
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-maintenance filter-engineering">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="assets/images/works/33.jpg" alt="portfolio img">
              </div><!-- /.portfolio-img -->
              <div class="portfolio__content">
                <h4 class="portfolio__title"><a href="#">Cleaning and integrity test..AGIP</a></h4>
                <div class="portfolio__cat">
                  <a href="#">Maintenance</a><a href="#">Engineering</a></a>
                </div><!-- /.portfolio-cat -->
              </div><!-- /.portfolio-content -->
            </div><!-- /.portfolio-item -->
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mix filter-engineering filter-maintenance">
            <div class="portfolio-item">
              <div class="portfolio__img">
                <img src="assets/images/works/40.jpg" alt="portfolio img">
              </div><!-- /.portfolio-img -->
              <div class="portfolio__content">
                <h4 class="portfolio__title"><a href="#">Flush Pump</a></h4>
                <div class="portfolio__cat">
                  <a href="#">Engineering</a><a href="#">Maintenance</a>
                </div><!-- /.portfolio-cat -->
              </div><!-- /.portfolio-content -->
            </div><!-- /.portfolio-item -->
          </div>

        </div><!-- /.row -->
        <div class="row">
          <!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.portfolio Grid -->

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