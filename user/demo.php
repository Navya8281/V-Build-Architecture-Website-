<?php 
include'../database.php';
session_start();
 $l_id=$_SESSION['l_id'];
                  $results = $con->query("select * from userregistration WHERE ul_id=$l_id");
                               while($rows= mysqli_fetch_array($results))
                                 {
                   $u_name= $rows['u_fname'];
                   $u_lname= $rows['u_lname'];
                   $u_address= $rows['u_address'];
                   $u_email= $rows['u_email'];
                   $u_phonenumber= $rows['u_phonenumber'];
                   
                 }
                                 ?>

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
                  <a data-barba href="#">Home</a>
                </div>

                <ul class="nav js-navList ">
                  <li class="text-white">
                    <a  href="userprofile.php">Profile</a>

                    
                  </li>


                
                  <li class="text-white">
                    <a href="logout.php">Logout</a>

                    
                  </li>   
                  <li class="text-white">
                    <a href="bookingdetails.php">Bookings</a>

                    
                  </li>                 

                        </ul>
                      </li>
                </ul>
              </div>

              <div class="mobile__footer js-mobile-footer">
                <div class="mobile__socials">
                  <a data-barba href="#">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a data-barba href="#">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a data-barba href="#">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                  <a data-barba href="#">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
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
                   <?php echo $u_name; ?>
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
                    <i class="icon text-white icon-search"></i>
                  </button>
                </div>

                <div class="header__menu">
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
              </div>
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

      <div class="content-wrapper  js-content-wrapper">
        <aside class="sidebar js-sidebar">
          <div class="sidebar__cross">
            <button class="button js-sidebar-close">
              <i class="icon icon-cross"></i>
            </button>
          </div>

          <div class="sidebar__header">
            <div class="sidebar__logo">
              <img src="img/general/logo-light.svg" alt="helix logo">
            </div>

            <h4 class="title">HELLIX</h4>
            <p class="subtitle">AN-AWARD WINNING ARCHITECTURE COMPANY</p>
          </div>

          <div class="sidebar__instagram">
            <h5 class="title">#hellix</h5>

            <div class="instagram">

              <a data-barba href="#" class="instagram__item">
                <div class="instagram__image">
                  <div class="ratio ratio-1:1 bg-image js-lazy" data-bg="img/main-sidebar/instagram/1.jpg"></div>
                </div>

                <div class="instagram__content">
                  <i class="icon fa fa-instagram" aria-hidden="true"></i>
                </div>
              </a>

              <a data-barba href="#" class="instagram__item">
                <div class="instagram__image">
                  <div class="ratio ratio-1:1 bg-image js-lazy" data-bg="img/main-sidebar/instagram/2.jpg"></div>
                </div>

                <div class="instagram__content">
                  <i class="icon fa fa-instagram" aria-hidden="true"></i>
                </div>
              </a>

              <a data-barba href="#" class="instagram__item">
                <div class="instagram__image">
                  <div class="ratio ratio-1:1 bg-image js-lazy" data-bg="img/main-sidebar/instagram/3.jpg"></div>
                </div>

                <div class="instagram__content">
                  <i class="icon fa fa-instagram" aria-hidden="true"></i>
                </div>
              </a>

              <a data-barba href="#" class="instagram__item">
                <div class="instagram__image">
                  <div class="ratio ratio-1:1 bg-image js-lazy" data-bg="img/main-sidebar/instagram/4.jpg"></div>
                </div>

                <div class="instagram__content">
                  <i class="icon fa fa-instagram" aria-hidden="true"></i>
                </div>
              </a>

              <a data-barba href="#" class="instagram__item">
                <div class="instagram__image">
                  <div class="ratio ratio-1:1 bg-image js-lazy" data-bg="img/main-sidebar/instagram/5.jpg"></div>
                </div>

                <div class="instagram__content">
                  <i class="icon fa fa-instagram" aria-hidden="true"></i>
                </div>
              </a>

              <a data-barba href="#" class="instagram__item">
                <div class="instagram__image">
                  <div class="ratio ratio-1:1 bg-image js-lazy" data-bg="img/main-sidebar/instagram/6.jpg"></div>
                </div>

                <div class="instagram__content">
                  <i class="icon fa fa-instagram" aria-hidden="true"></i>
                </div>
              </a>

            </div>
          </div>

          <div class="sidebar__info">
            <h5 class="title">Let's Start a Project</h5>
            <p class="text">
              T: +1 333 436 1747<br>
              M: hi@hellix.com
            </p>
            <p class="text">
              A: PO Box 16122 Collins Street West<br>
              Victoria 8007 Australia
            </p>

            <button class="button -simple">GET DIRECTIONS</button>
          </div>

          <div class="sidebar__socials">
            <div class="item">
              <a data-barba href="#">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
            </div>
            <div class="item">
              <a data-barba href="#">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
            </div>
            <div class="item">
              <a data-barba href="#">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
            <div class="item">
              <a data-barba href="#">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </aside>


        <section class="page-masthead">
          <div data-parallax="0.6" class="page-masthead__bg">
            <div data-parallax-target class="bg-image js-lazy" data-bg="img/backgrounds/13.jpg"></div>
          </div>

          <div class="container">
            <div class="page-masthead__content">
              <div class="row justify-content-between md:justify-content-center align-items-center">
                <div class="col-lg-9 col-md-10">
                  <div data-anim="slide-up delay-1">
                    <div class="page-masthead__subtitle">PRODUCTS</div>
                    <div class="page-masthead__back_title">Shop Checkout</div>
                    <h1 class="page-masthead__title text-white">Shop Checkout</h1>
                  </div>
                </div>

                <div class="col-auto">
                  <div data-anim="slide-up delay-1" class="page-masthead-bread text-white md:mt-24">
                    <a data-barba href="index.html" class="page-masthead-bread__item">Home</a>
                    /
                    <a data-barba href="#" class="page-masthead-bread__item ">Shop Checkout</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


        <section class="layout-pt-md layout-pb-md">
          <div class="container">
            <div class="row x-gap-60">
              <div class="col-lg">
                <div class="shopCheckout-form">
                  <form action="https://creativelayers.net/themes/hellix-html/post" class="row x-gap-24 y-gap-40">
                    <div class="col-12">
                      <h4 class="shopCheckout-form__title">Billing Details</h4>
                    </div>
                    <div class="col-sm-6">
                      <input type="text" name="firstName" placeholder="First name">
                    </div>

                    <div class="col-sm-6">
                      <input type="text" name="lastName" placeholder="Last name">
                    </div>

                    <div class="col-12">
                      <input type="text" name="company" placeholder="Company">
                    </div>

                    <div class="col-12">
                      <select class="selectize wide js-selectize">
                        <option data-display="Select">Country</option>
                        <option value="Greece">Greece</option>
                        <option value="USA">USA</option>
                        <option value="Germany">Germany</option>
                        <option value="France">France</option>
                      </select>
                    </div>

                    <div class="col-12">
                      <input type="text" name="address" placeholder="Street Address">
                    </div>

                    <div class="col-sm-6">
                      <input type="text" name="postcode" placeholder="Postcode / ZIP">
                    </div>

                    <div class="col-sm-6">
                      <input type="text" name="city" placeholder="Town / City">
                    </div>

                    <div class="col-sm-6">
                      <input type="text" name="province" placeholder="Province">
                    </div>

                    <div class="col-sm-6">
                      <input type="text" name="phone" placeholder="Phone">
                    </div>

                    <div class="col-12">
                      <input type="email" name="email" placeholder="YourEmail">
                    </div>

                    <div class="col-12">
                      <h4 class="shopCheckout-form__title pb-16">Additional information</h4>
                    </div>
                    <div class="col-12">
                      <textarea name="notes" id="form_notes" rows="4" placeholder="Order notes (optional)"></textarea>
                    </div>
                  </form>
                </div>
              </div>

              <div class="col-lg-auto">
                <div class="shopCart-sidebar">
                  <div class="shopCart-sidebar__totals">
                    <h5 class="title">
                      YOUR ORDER
                    </h5>

                    <div class="item">
                      <span class="fw-600 text-black">Product</span>
                      <span class="fw-600 text-black">Subtotal</span>
                    </div>

                    <div class="item">
                      <span class="text-grey">Hoodie x2</span>
                      <span class="text-grey">$59.00</span>
                    </div>

                    <div class="item -border-none">
                      <span class="text-grey">Seo Books x 1</span>
                      <span class="text-grey">$67.00</span>
                    </div>

                    <div class="item -border-none">
                      <span class="fw-600 text-black">Subtotal</span>
                      <span class="fw-600 text-black">$178.00</span>
                    </div>

                    <div class="item">
                      <span class="fw-600 text-black">Shipping</span>
                      <span class="fw-600 text-black">$178.00</span>
                    </div>

                    <div class="item">
                      <span class="fw-600 text-black">Total</span>
                      <span class="fw-600 text-black">$9,218.00</span>
                    </div>
                  </div>

                  <div class="shopCart-sidebar__button">
                    <button class="button -md -accent col-12 text-white">PROCEED TO CHECKOUT</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


        <?php
include 'footer.php';


?>
