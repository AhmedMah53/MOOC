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
              <h2 class="mb0">Our areas of learning</h2>
            </div>
          </div>
        </div>
        <div class="probootstrap-tab-style-1">
          <ul class="nav nav-tabs probootstrap-center probootstrap-tabs no-border">
            <li class="active" ><a data-toggle="tab" href="#software">Software</a></li>
            <li><a data-toggle="tab" href="#math">Math MAjor</a></li>
            <li><a data-toggle="tab" href="#physic">Physics</a></li>
            <li><a data-toggle="tab" href="#astro">Astronomy</a></li>
          </ul>
        </div>
      </section>

       <section class="probootstrap-section probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              
              <div class="tab-content">
                
                
                
                
                <!--HADI 1-->



                <div id="software" class="tab-pane fade in active">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="probootstrap-service-2 probootstrap-animate">
                        <div class="image">
                          <div class="image-bg">
                            <img style="width: 200px; height: 240px;" src="img/web_1.png" alt="Free Bootstrap Template by uicookies.com">
                          </div>
                        </div>
                        <div class="text">
                          <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                          <h3>Web</h3>
                          <p>Web is chi haja tan9elbou 3liha.</p>
                          <p><a href="software.php" class="btn btn-primary">Get In</a></p>
                        </div>
                      </div>
        
                      <div class="probootstrap-service-2 probootstrap-animate">
                        <div class="image">
                          <div class="image-bg">
                            <img style="width: 200px; height: 240px;" src="img/adobe.jpg" alt="Free Bootstrap Template by uicookies.com">
                          </div>
                        </div>
                        <div class="text">
                          <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                          <h3>Design</h3>
                          <p>Design is the creation of a plan or convention of an object, system or measurable human interaction.</p>
                          <p><a href="design.php" class="btn btn-primary">Get In</a></p>
                        </div>
                      </div>
        
                    </div>
                    <div class="col-md-6">
                      <div class="probootstrap-service-2 probootstrap-animate">
                        <div class="image">
                          <div class="image-bg">
                            <img style="width: 360px; height: 360px;"src="img/prog.jpg" alt="Free Bootstrap Template by uicookies.com">
                          </div>
                        </div>
                        <div class="text">
                          <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                          <h3>Programming languages</h3>
                          <p>Programming languages is a formal language that specifies a set of instructions that can be used to produce various kinds of output. Programming languages generally consist of instructions for a computer.</p>
                          <p><a href="prog.php" class="btn btn-primary">Get In</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                   
                
                
                
                <!--HADI 2-->


                
                  
                
                <div id="math" class="tab-pane fade">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="probootstrap-service-2 probootstrap-animate">
                        <div class="image">
                          <div class="image-bg">
                            <img style="width: 200px; height: 260px;" src="img/algebra.jpg" alt="Free Bootstrap Template by uicookies.com">
                          </div>
                        </div>
                        <div class="text">
                          <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                          <h3>Algebra</h3>
                          <p>Algebra is one of the broad parts of mathematics, together with number theory, geometry and analysis.</p>
                          <p><a href="math.php" class="btn btn-primary">Get In</a></p>
                        </div>
                      </div>
        
                      <div class="probootstrap-service-2 probootstrap-animate">
                        <div class="image">
                          <div class="image-bg">
                            <img style="width: 200px; height: 240px;" src="img/analysis.jpg" alt="Free Bootstrap Template by uicookies.com">
                          </div>
                        </div>
                        <div class="text">
                          <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                          <h3>Analysis</h3>
                          <p>Analysis is one of the broad parts of mathematics, together with number theory, geometry and algebra.</p>
                          <p><a href="analysis.php" class="btn btn-primary">Get In</a></p>
                        </div>
                      </div>
        
                    </div>
                    <div class="col-md-6">
                      <div class="probootstrap-service-2 probootstrap-animate">
                        <div class="image">
                          <div class="image-bg">
                            <img style="width: 200px; height: 240px;" src="img/probability.jpg" alt="Free Bootstrap Template by uicookies.com">
                          </div>
                        </div>
                        <div class="text">
                          <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                          <h3>Probability</h3>
                          <p>Probability is the measure of the likelihood that an event will occur. See glossary of probability and statistics.</p>
                          <p><a href="proba.php" class="btn btn-primary">Get In</a></p>
                        </div>
                      </div>
        
                      <div class="probootstrap-service-2 probootstrap-animate">
                        <div class="image">
                          <div class="image-bg">
                            <img src="img/geometry.png" alt="Free Bootstrap Template by uicookies.com">
                          </div>
                        </div>
                        <div class="text">
                          <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                          <h3>Geometry</h3>
                          <p>Geometry is one of the broad parts of mathematics, together with number theory, analysis and algebra. </p>
                          <p><a href="geo.php" class="btn btn-primary">Get In</a></p>
                        </div>
                      </div>
        
                    </div>
                  </div>
                </div>
                 
                
                
                
                <!--HADI 3-->


                
              
              <div id="physic" class="tab-pane fade">
                <div class="row">
                  <div class="col-md-6">
                    <div class="probootstrap-service-2 probootstrap-animate">
                      <div class="image">
                        <div class="image-bg">
                          <img style="width: 200px; height: 240px;" src="img/meca.jpg" alt="Free Bootstrap Template by uicookies.com">
                        </div>
                      </div>
                      <div class="text">
                        <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                        <h3>Mechanical</h3>
                        <p>Mechanical is scinece of the laws of mouvement and balance of bodies as well as driving forces.</p>
                        <p><a href="physic.php" class="btn btn-primary">Get In</a></p>
                      </div>
                    </div>
      
                    <div class="probootstrap-service-2 probootstrap-animate">
                      <div class="image">
                        <div class="image-bg">
                          <img style="width: 200px; height: 240px;" src="img/electro.jpg" alt="Free Bootstrap Template by uicookies.com">
                        </div>
                      </div>
                      <div class="text">
                        <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                        <h3>Electromagnetic</h3>
                        <p>Electromagnetism is a branch of physics involving the study of the electromagnetic force, a type of physical interaction that occurs between electrically charged particles.</p>
                        <p><a href="electro.php" class="btn btn-primary">Get In</a></p>
                      </div>
                    </div>
      
                  </div>
                  <div class="col-md-6">
                    <div class="probootstrap-service-2 probootstrap-animate">
                      <div class="image">
                        <div class="image-bg">
                          <img style="width: 200px; height: 240px;" src="img/nuclear.jpg" alt="Free Bootstrap Template by uicookies.com">
                        </div>
                      </div>
                      <div class="text">
                        <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                        <h3>Nuclear physics</h3>
                        <p>Nuclear physics is the field of physics that studies atomic nuclei and their constituents and interactions.</p>
                        <p><a href="nuclear.php" class="btn btn-primary">Get In</a></p>
                      </div>
                    </div>
      
                    <div class="probootstrap-service-2 probootstrap-animate">
                      <div class="image">
                        <div class="image-bg">
                          <img style="width: 200px; height: 240px;" src="img/quantum.jpg" alt="Free Bootstrap Template by uicookies.com">
                        </div>
                      </div>
                      <div class="text">
                        <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                        <h3>Quantum</h3>
                        <p>This means that the magnitude of the physical property can take on only discrete values consisting of integer multiples of one quantum.</p>
                        <p><a href="quantum.php" class="btn btn-primary">Get In</a></p>
                      </div>
                    </div>
      
                  </div>
                </div>
              </div>
               
                
                
                
                <!--HADI 4-->


                
              
              <div id="astro" class="tab-pane fade">
                <div class="row">
                  <div class="col-md-6">
                    <div class="probootstrap-service-2 probootstrap-animate">
                      <div class="image">
                        <div class="image-bg">
                          <img style="width: 200px; height: 240px;" src="img/star.jpg" alt="Free Bootstrap Template by uicookies.com">
                        </div>
                      </div>
                      <div class="text">
                        <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                        <h3>Stellar astronomy</h3>
                        <p>The study of stars and stellar evolution is fundamental to our understanding of the Universe.</p>
                        <p><a href="astro.php" class="btn btn-primary">Get In</a></p>
                      </div>
                    </div>
      
                    <div class="probootstrap-service-2 probootstrap-animate">
                      <div class="image">
                        <div class="image-bg">
                          <img src="img/gala.jpg" alt="Free Bootstrap Template by uicookies.com">
                        </div>
                      </div>
                      <div class="text">
                        <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                        <h3>Galactic astronomy</h3>
                        <p>Our solar system orbits within the Milky Way, a barred spiral galaxy that is a prominent member of the Local Group of galaxies.</p>
                        <p><a href="gala.php" class="btn btn-primary">Get In</a></p>
                      </div>
                    </div>
      
                  </div>
                  <div class="col-md-6">
                    <div class="probootstrap-service-2 probootstrap-animate">
                      <div class="image">
                        <div class="image-bg">
                          <img style="width: 200px; height: 330px;" src="img/planet.jpg" alt="Free Bootstrap Template by uicookies.com">
                        </div>
                      </div>
                      <div class="text">
                        <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                        <h3>Planetary science</h3>
                        <p>Planetary science is the study of the assemblage of planets, moons, dwarf planets, comets, asteroids, and other bodies orbiting the Sun, as well as extrasolar planets.</p>
                        <p><a href="planet.php" class="btn btn-primary">Get In</a></p>
                      </div>
                    </div>
      
                    <div class="probootstrap-service-2 probootstrap-animate">
                      <div class="image">
                        <div class="image-bg">
                          <img style="width: 200px; height: 240px;" src="img/cosmo.jpg" alt="Free Bootstrap Template by uicookies.com">
                        </div>
                      </div>
                      <div class="text">
                        <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                        <h3>Cosmology</h3>
                        <p>Cosmology is the study of the origin, evolution, and eventual fate of the universe.</p>
                        <p><a href="cosmo.php" class="btn btn-primary">Get In</a></p>
                      </div>
                    </div>
      
                  </div>
                </div>
              </div>

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