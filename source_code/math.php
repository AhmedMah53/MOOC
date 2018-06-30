<?php

include 'header.php';
if(isset($_SESSION['u_id']))
{
  $rgh='@Rgh';
  $zah='@Zah';
  $mah='@Mah';
echo '
<div id="navbar-collapse" class="navbar-collapse collapse">
  <ul class="nav navbar-nav navbar-right">
    <li><a href="home.php">Home</a></li>
    <li class="active"><a href="courses.php">Courses</a></li>
    <li><a href="teachers.php">Who are we ?</a></li>';
    if($_SESSION['u_uid']==$rgh || $_SESSION['u_uid']==$zah || $_SESSION['u_uid']==$mah){
      echo '<li><a href="admin.php">'.$_SESSION['u_first'].'</a></li>';
    }else{
      echo '<li><a href="user.php">'.$_SESSION['u_first'].'</a></li>';
    }
   echo '<li><form action="includes/logout.inc.php" method="POST">
      <div class="just ">
        <br>
            <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Logout">
      </div>
  </form></li>
  </ul>
  
</div>
</div>
</nav>
';
}else{
echo '
<div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="home.php">Home</a></li>
              <li class="active"><a href="courses.php">Courses</a></li>
              <li><a href="teachers.php">Who are we ?</a></li>
              <li><a href="contact.php">Login</a></li>
            </ul>
          </div>
          </div>
      </nav>
';
}

?>

         
      
         <section class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate">
              <h2 class="mb0">Math Major</h2>
            </div>
          </div>
        </div>
        <div class="probootstrap-tab-style-1">
          <ul class="nav nav-tabs probootstrap-center probootstrap-tabs no-border">
            <li class="active" ><a data-toggle="tab" href="#algebra">Algebra</a></li>
            <li><a data-toggle="tab" href="#analysis">Analysis</a></li>
            <li><a data-toggle="tab" href="#proba">Probability</a></li>
            <li><a data-toggle="tab" href="#geo">Geometry</a></li>
          </ul>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              
              <div class="tab-content">
                
                
                
                
                <!--HADI 1-->



                <div id="algebra" class="tab-pane fade in active">
                  <div class="row">
                    <div class="col-md-12">
                      <?php 
                        if(isset($_SESSION['cname']))
                        {
                          $sql="SELECT * FROM cours";
                          $result=mysqli_query($conn,$sql);
                          foreach (mysqli_fetch_assoc($result) as  $value) {
                            if($_SESSION['category']=="Algebra")
                            {
                                echo '
                                  <div class="probootstrap-service-2 probootstrap-animate">
                                    <div class="image">
                                      <div class="image-bg">
                                        <img src="'.$value['c_img'].'" alt="Free Bootstrap Template by uicookies.com">
                                      </div>
                                    </div>
                        <div class="text">
                          <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                          <h3>'.$value['c_name'].'</h3>
                          <p>'.$value['C_desc'].'</p>
                          <p><a href='; if(isset($_SESSION['u_id'])){echo $value['c_vid'];}else{echo "img/gal_img_full_7.jpg";} echo ' class="btn btn-primary popup-vimeo">Watch It</a></p>
                        </div>
                      </div>
                                ';
                            }
                          }
                        }
                      ?>
        
                    </div>
                  </div>
                </div>
                   
                
                
                
                <!--HADI 2-->


                
                  
                
                <div id="analysis" class="tab-pane fade">
                  <div class="row">
                  <div class="col-md-12">
                      <?php 
                        if(isset($_SESSION['cname']))
                        {
                          $sql="SELECT * FROM cours";
                          $result=mysqli_query($conn,$sql);
                          foreach (mysqli_fetch_assoc($result) as  $value) {
                            if($_SESSION['category']=="Analysis")
                            {
                                echo '
                                  <div class="probootstrap-service-2 probootstrap-animate">
                                    <div class="image">
                                      <div class="image-bg">
                                        <img src="'.$value['c_img'].'" alt="Free Bootstrap Template by uicookies.com">
                                      </div>
                                    </div>
                        <div class="text">
                          <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                          <h3>'.$value['c_name'].'</h3>
                          <p>'.$value['C_desc'].'</p>
                          <p><a href='; if(isset($_SESSION['u_id'])){echo $value['c_vid'];}else{echo "img/gal_img_full_7.jpg";} echo ' class="btn btn-primary popup-vimeo">Watch It</a></p>
                        </div>
                      </div>
                                ';
                            }
                          }
                        }
                      ?>
        
                    </div>
                  </div>
                </div>
                 
                
                
                
                <!--HADI 3-->


                
              
              <div id="proba" class="tab-pane fade">
                <div class="row">
                <div class="col-md-12">
                      <?php 
                        if(isset($_SESSION['cname']))
                        {
                          $sql="SELECT * FROM cours";
                          $result=mysqli_query($conn,$sql);
                          foreach (mysqli_fetch_assoc($result) as  $value) {
                            if($_SESSION['category']=="Probability")
                            {
                                echo '
                                  <div class="probootstrap-service-2 probootstrap-animate">
                                    <div class="image">
                                      <div class="image-bg">
                                        <img src="'.$value['c_img'].'" alt="Free Bootstrap Template by uicookies.com">
                                      </div>
                                    </div>
                        <div class="text">
                          <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                          <h3>'.$value['c_name'].'</h3>
                          <p>'.$value['C_desc'].'</p>
                          <p><a href='; if(isset($_SESSION['u_id'])){echo $value['c_vid'];}else{echo "img/gal_img_full_7.jpg";} echo ' class="btn btn-primary popup-vimeo">Watch It</a></p>
                        </div>
                      </div>
                                ';
                            }
                          }
                        }
                      ?>
        
                   </div>

                </div>
              </div>




                        <!--HADI 4-->




              <div id="geo" class="tab-pane fade">
                  <div class="row">
                  <div class="col-md-12">
                      <?php 
                        if(isset($_SESSION['cname']))
                        {
                          $sql="SELECT * FROM cours";
                          $result=mysqli_query($conn,$sql);
                          foreach (mysqli_fetch_assoc($result) as  $value) {
                            if($_SESSION['category']=="Geometry")
                            {
                                echo '
                                  <div class="probootstrap-service-2 probootstrap-animate">
                                    <div class="image">
                                      <div class="image-bg">
                                        <img src="'.$value['c_img'].'" alt="Free Bootstrap Template by uicookies.com">
                                      </div>
                                    </div>
                        <div class="text">
                          <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                          <h3>'.$value['c_name'].'</h3>
                          <p>'.$value['C_desc'].'</p>
                          <p><a href='; if(isset($_SESSION['u_id'])){echo $value['c_vid'];}else{echo "img/gal_img_full_7.jpg";} echo ' class="btn btn-primary popup-vimeo">Watch It</a></p>
                        </div>
                      </div>
                                ';
                            }
                          }
                        }
                      ?>
        
                    </div>
                  </div>
                </div>
            </div>

              
            
      </section>

      
    
      
      <footer class="probootstrap-footer probootstrap-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>About Us</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro provident suscipit natus a cupiditate ab minus illum quaerat maxime inventore Ea consequatur consectetur hic provident dolor ab aliquam eveniet alias</p>
                <h3>Social</h3>
                <ul class="probootstrap-footer-social">
                  <li><a href="#"><i class="icon-twitter"></i></a></li>
                  <li><a href="#"><i class="icon-facebook"></i></a></li>
                  <li><a href="#"><i class="icon-github"></i></a></li>
                  <li><a href="#"><i class="icon-dribbble"></i></a></li>
                  <li><a href="#"><i class="icon-linkedin"></i></a></li>
                  <li><a href="#"><i class="icon-youtube"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-md-push-1">
              <div class="probootstrap-footer-widget">
                <h3>Links</h3>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Courses</a></li>
                  <li><a href="#">Teachers</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>Contact Info</h3>
                <ul class="probootstrap-contact-info">
                  <li><i class="icon-location2"></i> <span>National Schools of Applied Sciences Of Al Hoceima </span></li>
                  <li><i class="icon-mail"></i><span>oualidrghioui@gmail.com</span></li>
                  <li><i class="icon-phone2"></i><span>+212-658206268</span></li>
                </ul>
              </div>
            </div>
           
          </div>
          <!-- END row -->
          
        </div>

        <div class="probootstrap-copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-8 text-left">
                <p>L'Cours &copy; 2017</p>
              </div>
              <div class="col-md-4 probootstrap-back-to-top">
                <p><a href="#" class="js-backtotop">Back to top <i class="icon-arrow-long-up"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>

    </div>
    <!-- END wrapper -->
    

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>