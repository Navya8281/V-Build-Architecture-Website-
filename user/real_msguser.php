<?php include 'uheader.php' ;
 $cl_id=$_GET['cl_id'];

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
                    <div class="page-masthead__subtitle">Messege</div>
                    <div class="page-masthead__back_title">Chat</div>
                    <h1 class="page-masthead__title text-white">Chat</h1>
                  </div>
                </div>

                <!-- <div class="col-auto">
                  <div data-anim="slide-up delay-1" class="page-masthead-bread text-white md:mt-24">
                    <a data-barba href="index.html" class="page-masthead-bread__item">Home</a>
                    /
                    <a data-barba href="#" class="page-masthead-bread__item ">Messeges</a>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </section>


        <section class="layout-pt-md layout-pb-md">
          <div class="container">
            <div class="row no-gutters justify-content-center">
              <div class="col-xl-7">
                <div class="shopCompleted-header">
                  <div class="icon">
                    <i data-feather="check"></i>
                  </div>
                  <h2 class="title">
                     Messages
                  </h2>
                  
                </div>

           
                <div class="shopCompleted-footer">
                
                  
 </div>
<?php
 $results = $con->query("select * from real_message WHERE l_id=$l_id AND r_id=$cl_id");
                               while($rows= mysqli_fetch_array($results))
                                 {
                                  ?>
                 
                 
                  
                    <div style="    
    justify-content: space-between;
    width: 100%;
 
    font-size: 0.875rem;
    line-height: 2.8125rem;
    float:left;
    ">
                      <span  style="float:left;"><?php  echo $replay= $rows['rm_replay']; ?></span>
                    
                    </div>
                   
                     <div style="    
    justify-content: space-between;
    width: 100%;
  
    font-size: 0.875rem;
    line-height: 2.8125rem;
    float:left;
    ">
                     
                    <span  style="float:right; text-align: right;"><?php  echo $message= $rows['rm_message']; ?> </span>
                    </div>
<?php  }
                   ?>


                 <form action="real_msgsubmit.php" method="POST"> 

                 <div style="    
    justify-content: space-between;
    width: 100%;
    
    font-size: 0.875rem;
    line-height: 2.8125rem;
    float:left;
    ">
<input type="hidden" name="l_id" value="<?php echo $l_id; ?>" >
                      <input type="hidden" name="cl_id" value="<?php echo $cl_id; ?>" >
                      <input type="text" name="r_id" placeholder="Type Your Doubts" style="border: 0;
    font-size: 0.875rem;
    line-height: 1.3;
    font-weight: 400;
    width: 70%;
    padding: 0.875rem 0;

    color: black;
   
    transition: border 0.15s cubic-bezier(0.165, 0.84, 0.44, 1);">
                      <input type="submit" class="button -md -grey text-white" name="submit" value="Enter">
                      
                   
                </div>
              </form>
              </div>
            </div>
          </div>
        </section>

<?php include 'ufooter.php' ?>