<?php
include 'ar_header.php';


if(isset($_POST['submit']))
{
	
   
   
  $folder_path = '../uploads/';

     $filename = basename($_FILES['image']['name']);
    $newname = $folder_path . $filename;

     $FileType = pathinfo($newname,PATHINFO_EXTENSION);

    if($FileType == "jpg" || $FileType == "pdf" || $FileType == "jpeg" || $FileType == "png" || $FileType == "JPG" || $FileType == "JPEG" || $FileType == "PDF" || $FileType == "PNG" || $FileType == "jpeg" || $FileType == "JPEG")
    {
     
        move_uploaded_file($_FILES['image']['tmp_name'], $newname);
        
    }

   $q="INSERT INTO gallery(a_id,image)VALUES('$l_id','$filename')";
    //var_dump($q);
    if($stmt1=mysqli_query($con,$q))
    {
     ?>
<SCRIPT LANGUAGE='JavaScript'>
        
        window.location.replace("messegeuser.php?cl_id=<?php echo $a_id; ?>");
        </SCRIPT>
        <?php
    }

}

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
                    <div class="page-masthead__subtitle">Works</div>
                    <div class="page-masthead__back_title">Work Uploads</div>
                    <h1 class="page-masthead__title text-white">Work Uploads</h1>
                  </div>
                </div>

               <!--  <div class="col-auto">
                  <div data-anim="slide-up delay-1" class="page-masthead-bread text-white md:mt-24">
                    <a data-barba href="index.html" class="page-masthead-bread__item">Home</a>
                    /
                    <a data-barba href="#" class="page-masthead-bread__item ">Work Uploads</a>
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
                    <div class="col-md-6">
                      <div class="shopCart-header__title">
                    Gallery
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="shopCart-header__title">
                        submit
                      </div>
                    </div>
                  
                  </div>
                </div>
                <div class="shopCart-products">
                 
                
                   
                   
              
<form action="gallery.php" method="post" enctype="multipart/form-data">
                  <div class="shopCart-products__item">
                    <div class="row no-gutters y-gap-10 justify-content-between">
                     

                      <div class="col-md-4">
                        <div class="shopCart-products__product">
                         
                          <div class="title"><input type="file" name="image" value="image"></div>
                        </div>
                      </div>

                      <div class="col-md-2 sm:mt-16">
                        <div class="d-flex h-100 align-items-center">
                          <div class="shopCart-products__title d-none sm:d-block mr-8">
                            
                          </div>

                          <div class="shopCart-products__price text-grey">
                            <input type="submit" name="submit" value="submit">
                          </div>
                        </div>
                      </div>

                     
                     
                    </div>
                  </div>
					</form>

                </div>
                

                <div class="shopCart-products">
                  <?php
 $sql="SELECT *  FROM gallery WHERE a_id=$l_id";
                    $result = $con->query($sql);
                               while($row= mysqli_fetch_array($result))
                                 {
                                  ?>
                
                   
                   
              

                  <div class="shopCart-products__item">
                    <div class="row no-gutters y-gap-10 justify-content-between">
                     

                      <div class="col-md-6">
                        <div class="shopCart-products__product">
                         
                          <div class="title">
                          <img src="../uploads/<?php echo  $b_status=$row['image']; ?>  " width="150px;"> 
                          
							  
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6 ">
                        <div class="d-flex h-100 align-items-center">
                          <div class="shopCart-products__title d-none sm:d-block mr-8">
                          
                          </div>

                          <div class="shopCart-products__price text-grey">
                         <a href="deletegallery.php?g_id=<?php echo  $b_status=$row['g_id']; ?>">   <input type="submit" name="button" value="Delete"></a>
                          </div>
                        </div>
                      </div>

                     

                      <div class="col-md-2">
                        <div class="d-flex h-100 align-items-center">
                          <div class="shopCart-products__title d-none sm:d-block mr-8">
                           
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