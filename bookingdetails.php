<?php
include 'uheader.php';
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
                    <div class="page-masthead__subtitle">Booking</div>
                    <div class="page-masthead__back_title">Booking Details</div>
                    <h1 class="page-masthead__title text-white">Booking Details</h1>
                  </div>
                </div>

                <!-- <div class="col-auto">
                  <div data-anim="slide-up delay-1" class="page-masthead-bread text-white md:mt-24">
                    <a data-barba href="index.html" class="page-masthead-bread__item">Home</a>
                    /
                    <a data-barba href="#" class="page-masthead-bread__item ">Booking Details</a>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </section>


        <section class="layout-pt-md layout-pb-md">
          <div class="container">
            <div class="row x-gap-60">
              <div class="col-lg">
                <div class="shopCart-header sm:d-none">
                  <div class="row no-gutters justify-content-between">
                    <div class="col-md-4">
                      <div class="shopCart-header__title">
                        Company
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="shopCart-header__title">
                        Date
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="shopCart-header__title">
                        Status
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="shopCart-header__title">
                        Cancel
                      </div>
                    </div>
                  </div>
                </div>

                <div class="shopCart-products">
                  <?php

                    $result = $con->query("SELECT company_registration.c_companyname,company_booking.b_date,company_booking.b_status,company_registration.c_file,company_booking.b_id  FROM company_booking INNER JOIN company_registration ON company_booking.bcl_id=company_registration.c_id WHERE company_booking.bl_id=$l_id");
                               while($row= mysqli_fetch_array($result))
                                 {
                                  ?>
                
                   
                   
              

                  <div class="shopCart-products__item">
                    <div class="row no-gutters y-gap-10 justify-content-between">
                     

                      <div class="col-md-4">
                        <div class="shopCart-products__product">
                          <div class="image">
                            <div class="bg-image js-lazy" data-bg="../uploads/<?php echo  $c_file= $row['c_file']; ?>"></div>
                          </div>
                          <div class="title"><?php echo  $c_companyname= $row['c_companyname']; ?></div>
                        </div>
                      </div>

                      <div class="col-md-2 sm:mt-16">
                        <div class="d-flex h-100 align-items-center">
                          <div class="shopCart-products__title d-none sm:d-block mr-8">
                            <?php echo  $b_date= $row['b_date']; ?>
                          </div>

                          <div class="shopCart-products__price text-grey">
                             <?php echo  $b_date=$row['b_date']; ?>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="d-flex h-100 align-items-center">
                          <div class="shopCart-products__title d-none sm:d-block mr-8">
                            
                          </div>

                          <div class="shopCart-products__quantity text-grey">




                            <?php 
  $b_status=$row['b_status'];

if($b_status=='Accepted')
{
 ?>
 <a href="enterdetails.php?b_id=<?php echo $row['b_id']; ?>">Accepted</a>
 <?php
}
else
{
  echo "Booked";
}



                             ?>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="d-flex h-100 align-items-center">
                          <div class="shopCart-products__title d-none sm:d-block mr-8">
                           
                          </div>

                          <div class="shopCart-products__subtotal text-grey">
                            <div class="shopCart-products__cross">
                       <a href="deletebooking.php?b_id=<?php echo $row['b_id']; ?>"> <i class="icon" data-feather="x"></i></a>
                      </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                <?php   }
                                 ?>


                </div>

                
              </div>

              </div>
          </div>
        </section>

       <?php
include 'ufooter.php';

?>