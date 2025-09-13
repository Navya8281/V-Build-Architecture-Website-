<?php
include 'aheader.php';
echo $id=$_GET['id'];
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

       

          
        </aside>


        <section class="page-masthead">
          <div data-parallax="0.6" class="page-masthead__bg">
            <div data-parallax-target class="bg-image js-lazy" data-bg="img/backgrounds/6.jpg"></div>
          </div>

          <div class="container">
            <div class="page-masthead__content">
              <div class="row justify-content-between md:justify-content-center align-items-center">
                <div class="col-lg-9 col-md-10">
                  <div data-anim="slide-up delay-1">
                    <div class="page-masthead__subtitle"></div>
                    <div class="page-masthead__back_title">COMPANY DETAILS</div>
                    <h1 class="page-masthead__title text-white">COMPANY DETAILS</h1>
                  </div>
                </div>

                <div class="col-auto">
                  <div data-anim="slide-up delay-1" class="page-masthead-bread text-white md:mt-24">
                    <a data-barba href="index.php" class="page-masthead-bread__item">Home</a>
                    /
                    <a data-barba href="#" class="page-masthead-bread__item ">Company Details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


        <section class="layout-pt-lg layout-pb-xl md:pb-64">
          <div class="container">
            <div class="row no-gutters">
              <div class="col-xl-7 col-lg-7 z-1">
                
              </div>

              <div class="col-xl-4 col-lg-4 offset-lg-1">
                <div class="md:pt-40 md:pb-40">
                  <div class="sectionHeading -left-line">
                    <span class="sectionHeading__subtitle">REGISTRATION FORM</span>
                    <h2 class="sectionHeading__title">REGISTRATION FORM</h2>
                  </div>

                  <div class="text-sm text-black leading-4xl mt-48 md:mt-16">
                    
                  </div>

                  

                  <div class="socialsSection mt-24">

                    
                  </div>
                </div>
              </div>

              <div class="col-xl-7 col-lg-7 offset-lg-5 z-5">
                <div class="mt-minus-xl md:mt-0">
                  <div class="sectionHeading -left-line bg-dark py-48 px-48 md:py-20 md:px-20">
           <?php 
                  $result = $con->query("select * from company_registration WHERE cl_id=$id");
                               while($row= mysqli_fetch_array($result))
                                 {
                                 ?>

                    <form class="" action="companyupdate.php" method="POST">
                       <div class="col-12 mt-20">
                        <div class="js-input-group">
                         <input type="hidden" name="id" value="<?php echo $row['cl_id'];?>" data-required placeholder="First Name">
                          <input type="text" name="cname" value="<?php echo $row['c_companyname'];?>" data-required placeholder="First Name">
                          <span class="form__error"></span>
                        </div>
                      </div>
                      
                      <div class="col-12">
                        <div class="js-input-group">
                          <textarea name="address" rows="5" placeholder="Address"><?php echo $row['c_address'];?></textarea>
                          <span class="form__error"></span>
                        </div>
                      </div>
                     
                      <div class="col-12 mt-20">
                        <div class="js-input-group">
                          <input type="email" name="email" value="<?php echo $row['c_email'];?>" data-required placeholder=" Email">
                          <span class="form__error"></span>
                        </div>
                      </div>
                      <div class="col-12 mt-20">
                        <div class="js-input-group">
                          <input type="text" name="password" value="<?php echo $row['c_password'];?>" placeholder="Password">
                          <span class="form__error"></span>
                        </div>
                      </div>
                      <div class="col-12 mt-20">
                        <div class="js-input-group">
                          <input type="text" name="phonenumber" value="<?php echo $row['c_phonenumber'];?>" placeholder="phone Number">
                           <span class="form__error"></span>
                        </div>
                      </div>
                      <div class="col-12 ajax-form-alert js-ajax-form-alert">
                        <div class="ajax-form-alert__content"></div>
                      </div>
                      <div class="col-12 mt-20">
                        <div class="js-input-group">
                          <select name="status">
                          	<option>Approved</option>
                          	<option>Not Approved</option>
                          </select>
                           <span class="form__error"></span>
                        </div>
                      </div>

                      <div class="col-12 mt-32">
                        <button type="submit" name="submit" class="button -md -accent text-white">
                          UPDATE
                        </button>
                      </div>
                    </form>
                    
                      <?php
 
 
}
?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

 <?php
include 'afooter.php';
?>