<header class="header header-transparent header-layout1">
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="home">
            <img src="assets/images/logo/webod-logo.png" class="logo-light p-2 pl-4 pr-4" alt="logo" style="background-color: #ffffff;">
            <img src="assets/images/logo/webod-logo.png" class="logo-dark" alt="logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav">
              <li class="nav__item with-dropdown">
                <a href="home" class="dropdown-toggle nav__item-link <?php  echo  $active = ($active_page == "HOME") ? "active" : "";?> ">Home</a>
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="about" class="dropdown-toggle nav__item-link <?php  echo  $active = ($active_page == "ABOUT") ? "active" : "";?>">About Us</a>
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="services" class="dropdown-toggle nav__item-link <?php  echo  $active = ($active_page == "SERVICES") ? "active" : "";?>">Services</a>
                <i class="fa fa-angle-down" data-toggle="dropdown"></i>
              </li><!-- /.nav-item -->
              <li class="nav__item with-dropdown">
                <a href="projects" class="dropdown-toggle nav__item-link <?php  echo  $active = ($active_page == "PROJECTS") ? "active" : "";?>">Projects</a>
              </li><!-- /.nav-item -->
              
              
              <li class="nav__item nav__item-btn d-none d-md-block">
                <a href="contacts" class="btn btn__primary action__btn-request <?php  echo  $active = ($active_page == "CONTACTS") ? "active" : "";?>">
                  <span>Contact Us</span><i class="icon-arrow-right"></i>
                </a>
              </li>
            </ul><!-- navbar-nav -->
          </div><!-- /.navbar-collapse -->
          <div class="contact__number d-flex align-items-center">
            <i class="icon-phone"></i>
            <a href="tel: <?php echo $config['telephone1']; ?> " ><?php echo $config['telephone1']; ?> </a>
          </div><!-- /.contact__numbr -->
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header>   