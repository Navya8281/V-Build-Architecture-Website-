<?php
include 'ar_header.php';
$b_id=$_GET['b_id'];

?>
<?php
include'../database.php';
if(isset($_POST['plansubmit']))
{
  
 $pid=$_POST['pid'];
  $folder_path = '../uploads/';

     $filename = basename($_FILES['plan']['name']);
    $newname = $folder_path . $filename;

     $FileType = pathinfo($newname,PATHINFO_EXTENSION);

    if($FileType == "jpg" || $FileType == "pdf" || $FileType == "jpeg" || $FileType == "png" || $FileType == "JPG" || $FileType == "JPEG" || $FileType == "PDF" || $FileType == "PNG" || $FileType == "jpeg" || $FileType == "JPEG")
    {
     
        move_uploaded_file($_FILES['plan']['tmp_name'], $newname);
        
    }

   $q="UPDATE `requirement` SET `plan`='$filename' WHERE rb_id='$pid'";
   // var_dump($q);
    if($stmt1=mysqli_query($con,$q))
    {
     ?>
<SCRIPT LANGUAGE='JavaScript'>
        
         window.location.replace("booking.php");
        </SCRIPT>
        <?php
    }

}
?>
<!-- <input type="text" value="<?php  $b_id; ?>" name="ol" id="ol"> -->
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
                    <div class="page-masthead__subtitle">Requirement view</div>
                    <div class="page-masthead__back_title">Requirement view</div>
                    <h1 class="page-masthead__title text-white">Requirement view</h1>
                  </div>
                </div>

               <!--  <div class="col-auto">
                  <div data-anim="slide-up delay-1" class="page-masthead-bread text-white md:mt-24">
                    <a data-barba href="index.html" class="page-masthead-bread__item">Home</a>
                    /
                    <a data-barba href="#" class="page-masthead-bread__item ">Requirement view</a>
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
                       Requirement
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="shopCart-header__title">
                        Plan
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="shopCart-header__title">
                        Budget
                      </div>
                    </div>
                  
                  </div>
                </div>

                <div class="shopCart-products">
                  <?php
  $sql="SELECT *  FROM requirement WHERE b_id=$b_id";
                    $result = $con->query($sql);
                               while($row= mysqli_fetch_array($result))
                                 {
                                  ?>
                
                   
                   
              <?php    $rb_id= $row['rb_id']; ?>

                  <div class="shopCart-products__item">
                    <div class="row no-gutters y-gap-10 justify-content-between">
                     

                      <div class="col-md-4">
                        <div class="shopCart-products__product">
                         <!--  <div class="image">
                            <div class="bg-image js-lazy" data-bg="../uploads/<?php echo  $c_file= $row['c_file']; ?>"></div>
                          </div> -->
                          <div class="title"><?php echo  $r_requirement= $row['r_requirement']; ?></div>
                        </div>
                      </div>



                      <div class="col-md-4 ">
                        <div class="d-flex h-100 align-items-center">
                          <div class="shopCart-products__title d-none sm:d-block mr-8">
                            
                          </div>

                          <div class="shopCart-products__price text-grey">
                             <?php   $r_plan= $row['r_plan']; 
$vvv="Yes";
if($r_plan==$vvv)
{

  ?>
  <form action="" method="POST" enctype="multipart/form-data">
  <input type="file" name="plan">
  <input type="hidden" name="pid" value="<?php echo $rb_id; ?>">
  <input type="submit" name="plansubmit" value="submit">
</form>
  <?php
}



                             ?>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 ">
                        <div class="d-flex h-100 align-items-center">
                          <div class="shopCart-products__title d-none sm:d-block mr-8">
                           
                          </div>

                          <div class="shopCart-products__price text-grey">
                             <?php echo  $r_budget=$row['r_budget']; ?>
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
include 'ar_footer.php';

?>