<?php
include 'header.php';
include('database.php');
 
?>


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
                    <div class="page-masthead__back_title">Architecture Companies</div>
                    <h1 class="page-masthead__title text-white">Architecture Companies</h1>
                  </div>
                </div>

                <!-- <div class="col-auto">
                  <div data-anim="slide-up delay-1" class="page-masthead-bread text-white md:mt-24">
                    <a data-barba href="index.html" class="page-masthead-bread__item">Home</a>
                    /
                    <a data-barba href="#" class="page-masthead-bread__item ">Shop List</a>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </section>


        <section class="layout-pt-md layout-pb-md">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="d-flex justify-content-between">
                
                </div>

                <div class="row y-gap-32 mt-40 lg:mt-20">
                  <?php 

 $sqllll="SELECT * FROM `gallery`";
                  $result = $con->query($sqllll);
                               while($row= mysqli_fetch_array($result))
                                 {
                                 ?>

                  <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="shopCard text-center">
                      <div class="shopCard__image ratio ratio-29:33">
                        <img class="ratio-img" src="uploads/<?php echo $row['image'];?>" alt="Product image">

<!--
                        <a href="company_single.php?c_id=<?php echo $row['c_id'];?>" class="shopCard__button">
                          <i class="icon" data-feather="shopping-bag"></i>
                          Company Profile
                        </a>
-->
                      </div>

                      <div class="shopCard__content mt-20">
                        
                        <h4 class="shopCard__title text-base mt-8"><?php  $a_id= $row['a_id'];
							
							
 $sqll="SELECT * FROM `company_registration` WHERE cl_id=$a_id";
                  $result1 = $con->query($sqll);
                               while($row1= mysqli_fetch_array($result1))
                                 {
									 echo $row1['c_companyname'];
								 }
							
							?></h4>
                        
                      </div>
                    </div>
                  </div>

         <?php }
                   ?>

                </div>

                <div class="row justify-content-center mt-48">
                  <div class="col-auto">
                    <div class="pagination -section">
                      <div class="pagination__nav">
                        <a data-barba href="#" class="nav-icon -left">
                          <!-- <div class="nav-icon__circle">
                            <i class="icon icon-left-arrow"></i>
                          </div> -->
                        </a>
                      </div>

                      <!-- <div class="pagination__content">
                        <a data-barba href="#">1</a>
                        <a data-barba href="#">2</a>
                        <a data-barba href="#" class="is-active">3</a>
                        <a data-barba href="#">4</a>
                        <span>...</span>
                        <a data-barba href="#">16</a>
                      </div> -->

                      <div class="pagination__nav">
                        <a data-barba href="#" class="nav-icon -right">
                          <!-- <div class="nav-icon__circle">
                            <i class="icon icon-right-arrow"></i>
                          </div> -->
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

<?php
include 'footer.php';

?>
       