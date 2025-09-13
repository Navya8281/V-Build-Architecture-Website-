<!DOCTYPE html>
<html lang="en">



<head>

  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
 <!--  <link rel="stylesheet" href="css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
  <link rel="stylesheet" href="dist/leaflet.css"  />

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/vendors.css">
  <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/all.min.css"> 


  <!-- Favicon -->


  <title>Helix</title>
</head>

<body class="preloader-visible" data-barba="wrapper">


  <!-- preloader start -->
  <div class="preloader js-preloader">
    <div class="preloader__bg"></div>

    <div class="preloader__progress">
      <div class="preloader__progress__inner"></div>
      <img src="img/general/loader.svg" alt="preloader image" class="preloader__img">
    </div>
  </div>
  <!-- preloader end -->

  <!-- cursor start -->
  <div class="cursor js-cursor">
    <div class="cursor__wrapper">
      <div class="cursor__follower js-follower"></div>
      <div class="cursor__label js-label"></div>
      <div class="cursor__icon js-icon"></div>
    </div>
  </div>
  <!-- cursor end -->


  <!-- barba container start -->
  <div class="barba-container" data-barba="container">


    <main class="main-content  ">


      <!-- header start -->
      <header class="header  js-header">
        <div class="header__bar  js-header-bar">

          <div class="row justify-content-between align-items-center">

            <div class="col-auto z-5 js-header-item">
              <div class="header__item -margin-sm">
                <div class="header__logo text-white js-header-logo">
                  <a data-barba href="index.php">
                    <i class="icon icon-logo"></i>
                  </a>
                </div>
              </div>
            </div>


            <div class="menu js-menu ">
              <div class="mobile__background js-mobile-bg"></div>

              <div class="menu__container">
                <div class="mobile__back js-nav-list-back pointer-events-none">
                  <a data-barba href="index.php">Home</a>
                </div>

                <ul class="nav js-navList ">
                  <li class="text-white">
                    <a data-barba href="index.php">Home</a>

                    
                  </li>
                 
                  <!-- <li class="text-white menu-item-has-children">
                    <a data-barba href="#">Services</a>

                    
                  </li> -->
                  <!-- <li class="text-white -has-mega-menu menu-item-has-children">
                    <a data-barba href="#">Portfolio</a>
                  </li> -->
                  <!-- <li class="text-white menu-item-has-children">
                    <a data-barba href="#">Blog</a>

                    
                  </li> -->
                  <li class="text-white">
                    <a data-barba href="architecturecompany.php">Architect Company</a>

                    
                  </li>
                  <li class="text-white">
                    <a data-barba href="gallery2.php">Work Gallery</a>

                    
                  </li>
                  <li class="text-white">
                    <a data-barba href="budgethom.php">Budgeted homes</a>

                    
                  </li>



                  <!-- <li class="text-white">
                    <a data-barba href="#">Contacts</a>
                  </li> -->
                  <li class="text-white menu-item-has-children">
                        <a data-barba href="#">Registration</a>

                        <ul class="nav__submenu">

                          <li class="nav__submenu_item">
                            <a data-barba href="userregistrationform.php">User</a>
                          </li>

                          <li class="nav__submenu_item">
                            <a data-barba href="architectureregistration.php">Company</a>
                          </li>

                          <li class="nav__submenu_item">
                            <a data-barba href="realestateregistration.php">Realestate</a>
                          </li>

                          

                        </ul>
                      </li>
                </ul>
              </div>

              <div class="mobile__footer js-mobile-footer">
                <div class="mobile__socials">
                  <!-- <a data-barba href="#">
                     <i class="fa fa-facebook" aria-hidden="true"></i> 
                  </a> -->
                  <!-- <a data-barba href="#">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a data-barba href="#">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                  <a data-barba href="#">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a> -->
                </div>

                <div class="mobile__copyright">
                  <img src="img/general/logo-light.svg" alt="logo" class="icon">
                  <p>© 2021 Hellix. All rights reserved.</p>
                </div>
              </div>
            </div>


            <div class="col-auto z-5 sm:pos-unset js-header-item">
              <div class="header__icons ">
                <div class="header__cart">
                  <a data-barba href="login.php">
                    <!-- <i class="icon text-white icon-cart"></i> -->
                    LOGIN
                  </a>

                  <!-- <div class="headerCart js-headerCart">
                    
                    <div class="headerCart__footer">
                    

                      <div class="headerCart__buttons">
                        <a data-barba href="#" class="button -md -grey text-white col-12">LOGIN</a>
                        <a data-barba href="#" class="button -md -accent text-white col-12">REGISTER</a>
                      </div>
                    </div>
                  </div> -->
                </div>

                <div class="header__search">
                  <button class="js-headerSearch-open">
                    <!-- <i class="icon text-white icon-search"></i> -->
                  </button>
                </div>

                <!-- <div class="header__menu">
                  <button type="button" class="nav-button-open md:d-none js-sidebar-open">
                    <i class="icon text-white icon-menu"></i>
                  </button>

                  <button type="button" class="nav-button-open d-none md:d-block js-nav-open">
                    <i class="icon text-white icon-menu"></i>
                  </button>

                  <button type="button" class="nav-button-close d-none md:d-block pointer-events-none js-nav-close">
                    <i class="icon text-white icon-cross"></i>
                  </button>
                </div>
              </div> -->
            </div>
          </div>


          <div class="headerSearch js-headerSearch">
            <div class="headerSearch__line"></div>
            <form action="https://creativelayers.net/themes/hellix-html/POST">
              <i class="headerSearch__icon icon-search"></i>
              <input type="search" placeholder="Type Your Search">
            </form>
            <button class="headerSearch__close js-headerSearch-close">
              <i class="icon icon-cross text-white"></i>
            </button>
          </div>
        </div>
      </header>
      <!-- header end -->