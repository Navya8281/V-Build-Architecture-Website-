<?php
include 'header.php';
include('database.php');
echo $cl_id=$_GET['cl_id'];

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
  color: orange;
}
</style>

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

            <!-- <h4 class="title">HELLIX</h4>
            <p class="subtitle">AN-AWARD WINNING ARCHITECTURE COMPANY</p> -->
          </div>

          <div class="sidebar__instagram">
            <!-- <h5 class="title">#hellix</h5>
 -->
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
                    <div class="page-masthead__subtitle"><!-- PRODUCTS --></div>
                    <div class="page-masthead__back_title">Reviews</div>
                    <h1 class="page-masthead__title text-white">Reviews</h1>
                  </div>
                </div>

               <!--  <div class="col-auto">
                  <div data-anim="slide-up delay-1" class="page-masthead-bread text-white md:mt-24">
                    <a data-barba href="index.html" class="page-masthead-bread__item">Home</a>
                    /
                    <a data-barba href="#" class="page-masthead-bread__item ">Reviews</a>
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
                 <!--  <div class="text-sm text-grey">Showing 1–9 of 25 results</div>
                  <div class="text-sm text-grey">Sort by latest</div> -->
                </div>

                <div class="row y-gap-32 mt-40 lg:mt-20">
                  <?php 
                  $result = $con->query("select * from rating  WHERE cl_id=$cl_id");
                               while($row= mysqli_fetch_array($result))
                                 {
                                 ?>

                  <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="shopCard text-center">
                      
                      <div class="shopCard__content mt-20">
                                                <h4 class="shopCard__title text-base mt-8">" <?php echo $row['review'];?> "</h4>
                                                <br>
                                              <p style="text-align: right;">  <?php $lll_id=$row['l_id'];
                                              $result1 = $con->query("select * from userregistration  WHERE ul_id=$lll_id");
                               while($row1= mysqli_fetch_array($result1))
                                 { 
echo $row1['u_fname'];
echo $row1['u_lname'];
                                 } ?>

                                            </p>
                        
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