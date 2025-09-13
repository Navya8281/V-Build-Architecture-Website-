<?php
include 'uheader.php';
 $uuu=$_SESSION['l_id'];
$results = $con->query("select * from userregistration WHERE ul_id=$uuu");
                               while($rows= mysqli_fetch_array($results))
                                 {
                   $u_id= $rows['u_id'];
                   }
if(!$u_id){
  ?>
  <script>
 window.location="../login.php"; 
 </script>
 <?php
}


 $rl_id=$_GET['rl_id'];
 $cccid=$_GET['cccid'];
include('../database.php');
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

          <!-- <div class="sidebar__info">
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
          </div> -->

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
                    <div class="page-masthead__subtitle">REAL ESTATE BOOKING</div>
                    <div class="page-masthead__back_title">Real estate booking</div>
                    <h1 class="page-masthead__title text-white">Real estate booking</h1>
                  </div>
                </div>

                <!-- <div class="col-auto">
                  <div data-anim="slide-up delay-1" class="page-masthead-bread text-white md:mt-24">
                    <a data-barba href="index.html" class="page-masthead-bread__item">Home</a>
                    /
                    <a data-barba href="#" class="page-masthead-bread__item ">Real estate booking</a>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </section>


        <section class="layout-pt-md layout-pb-md">
          <div class="container">
            <div class="row y-gap-60">
              <div class="col-lg-7">
                <div class="shopSingle-preview js-shop-slider">
                  <div class="shopSingle-preview__imageList js-slider-pagination">
                    <?php 
                  $result1 = $con->query("select * from land_details WHERE rl_id=$cccid");
                               while($row1= mysqli_fetch_array($result1))
                                 {
                                 ?>

                    <div data-cursor class="gallery__item">
                      <div class="ratio ratio-62:60">
                        <img class="ratio-img" src="../uploads/<?php echo $row1['l_image'];?>" alt="land image">
                      </div>
                    </div>
                   <?php } ?>
                    

              
                  </div>

                  <div class="shopSingle-preview__image js-slider-slider">
                    <div class="swiper-wrapper">
                      <?php 
                  $result2 = $con->query("select * from land_details WHERE rl_id=$cccid");
                               while($row2= mysqli_fetch_array($result2))
                                 {
                                 ?>

                      <div class="swiper-slide">
                        <a href="../uploads/<?php echo $row2['l_image'];?>" class="gallery__item js-gallery" data-gallery="gallery1">
                          <div class="ratio ratio-62:60">
                            <img class="ratio-img" src="../uploads/<?php echo $row2['l_image'];?>" alt="land image">
                          </div>

                          <div class="gallery__button -bottom-right">
                            <i class="icon" data-feather="plus"></i>
                          </div>
                        </a>
                      </div>
                      <?php } ?> 

                      

                      

                      

                    </div>
                  </div>
                </div>
              </div>


               <?php 
                  $result = $con->query("select * from real_estate_registration WHERE rl_id=$rl_id");
                               while($row= mysqli_fetch_array($result))
                                 {
                                 ?>
              <div class="col-xl-4 col-lg-4 offset-lg-1">
                <div class="md:pt-40 md:pb-40">
                  <div class="sectionHeading -left-line">
                    <span class="sectionHeading__subtitle">OUR CONTACT DETAILS</span>
                    <h2 class="sectionHeading__title"><?php echo $row['r_fname'];?><?php echo $row['r_lname'];?></h2>
                   
                  </div>

                  <div class="text-sm text-black leading-4xl mt-48 md:mt-16">
                    <p>PHONE NUMBER: <?php echo $row['r_mobilenumber'];?></p>
                    <p>ADDRESS: <?php echo $row['r_address'];?></p>
                    <p>EMAIL: <?php echo $row['r_email'];?></p>

                    <br>
                    
                  </div>

                 

                  <div class="socialsSection mt-24">
                   <div class="col-auto">
                    <form action="real_booking.php" method="post">
                      <input type="hidden" name="booking_id" value="<?php echo $row['rl_id'];?>">
                      <input type="submit" name="Booking" value="Booking" class="button -md -dark text-white">
                     
                    </form>
                    </div>
                  </div>
                </div>
              </div>

             <?php }
                   ?> 
            </div>
          </div>
        </section>




        


       <?php
include 'ufooter.php';

?>
