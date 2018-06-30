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
    <li class="active"><a href="home.php">Home</a></li>
    <li><a href="courses.php">Courses</a></li>
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
              <li class="active"><a href="home.php" style="color: #20b2aa !important;">Home</a></li>
              <li><a href="courses.php">Courses</a></li>
              <li><a href="teachers.php">Who are we ?</a></li>
              <li><a href="contact.php">Login</a></li>
            </ul>
          </div>
          </div>
      </nav>
';
}

?>


      <section class="flexslider">
        <ul class="slides">
          <li style="background-image: url(img/gal_img_full_1.jpg)" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">Change Is The End Result Of All True Learning</h1>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li style="background-image: url(img/gal_img_full_2.jpg)" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">All Real Education Is The Architecture Of The Soul</h1>
                  </div>
                </div>
              </div>
            </div>
            
          </li>
          <li style="background-image: url(img/gal_img_full_3.jpg)" class="overlay">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="probootstrap-slider-text text-center">
                    <h1 class="probootstrap-heading probootstrap-animate">Knowledge Is The Movement From Darkness To Light </h1>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </section>
      
      <section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1>Welcome to <span style="font-family: 'Lobster', cursive;">FEDNI</span> </h1>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="probootstrap-flex-block">
                <div class="probootstrap-text probootstrap-animate">
                  <h3>About Us</h3>
                  <p>At <span style="font-family: 'Lobster', cursive;">FEDNI</span>, we believe everyone deserves to have a website or online store. Innovation and simplicity makes us happy: our goal is to remove any technical or financial barriers that can prevent business owners from making their own website. We're excited to help you on your journey!</p>
                </div>
                <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/gal_img_full_4.jpg)">
                  <a href="vid/avengers.mp4" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section" id="probootstrap-counter">
        <div class="container ">
          
          <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-users2" style="color: #20b2aa"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="20203" data-speed="55555555" data-refresh-interval="50">1</span>
                  </span>
                  <span class="probootstrap-counter-label">Visitors</span>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-user-tie" style="color: #20b2aa"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="139" data-speed="55555555" data-refresh-interval="50">1</span>
                  </span>
                  <span class="probootstrap-counter-label">Speakers</span>
                </div>
              </div>
            </div>
            
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
               
               <div class="probootstrap-counter-wrap">
                <div class="probootstrap-icon">
                  <i class="icon-smile2" style="color: #20b2aa"></i>
                </div>
                <div class="probootstrap-text">
                  <span class="probootstrap-counter">
                    <span class="js-counter" data-from="0" data-to="100" data-speed="555555" data-refresh-interval="50">1</span>%
                  </span>
                  <span class="probootstrap-counter-label">Visitors Satisfaction</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section" style="background-image: url(img/gal_img_sm_1.jpg)">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate">
              <h2 class="mb0">Highlights</h2>
            </div>
          </div>
        </div>
        <div class="probootstrap-tab-style-1">
          <ul class="nav nav-tabs probootstrap-center probootstrap-tabs no-border">
            <li class="active" ><a data-toggle="tab" href="#featured-news">Featured News</a></li>
            <li><a data-toggle="tab" href="#upcoming-events">Upcoming Events</a></li>
          </ul>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              
              <div class="tab-content">

                <div id="featured-news" class="tab-pane fade in active">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="owl-carousel" id="owl1">
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/new1.jpg"  class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>My Flatmate Experience in London</h3>
                              <p>I was so looking forward to start my Erasmus in London. I always dreamed about moving to London and live there for a while, either as a student or at least do my internship there.</p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2018</span>
                              
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/new2.jpg"  class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>187,138 Moroccan Students Pass Baccalaureate</h3>
                              <p>The Ministry of Education, Vocational Training, Higher Education, and Scientific Research revealed on Friday that 187,138 students have passed the exam in the June session, representing a passing rate of 57.36 percent.</p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2018</span>
                              
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/new3.jpg"  class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>French-Moroccan Actor Said Taghmaoui Joins Oscars’ Academy</h3>
                              <p>He is the third Moroccan to join the prestigious academy. Following Moroccan filmmakers Nabil Ayouch and Khadija Alami in 2017, French-Moroccan actor Said Taghmaoui has accepted to be part of the Oscars’ Academy of Motion Pictures and Sciences.</p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2018</span>
                              
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/new4.jpg"  class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>1st Workshop of Moroccan Experts in France to be Held in Morocco’s Skhirat</h3>
                              <p>The Moroccan Delegate Ministry for Moroccans Residing Abroad has announced the organization of a two-day workshop that will convene Moroccan experts, entrepreneurs, and professionals living in France.</p>
                              <span class="probootstrap-date"><i class="icon-calendar"></i> June 29, 2018</span>
                              
                              
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                      </div>
                    </div>
                  </div>
                  <!-- END row -->
                  
                </div>
                <div id="upcoming-events" class="tab-pane fade">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="owl-carousel" id="owl2">
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/tech.jpg"  class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Tech Experience 4.0</h3>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>Avrile 26,27,28 2019</span>
                              <span class="probootstrap-location"><i class="icon-location2"></i>National Schools Of Applied Sciences Alhoceima</span>
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/img_sm_6.jpg"  class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Devoxx Maroc</h3>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>November 27,28,29, 2018</span>
                              <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/event1.jpg"  class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>Social Media Day - Morocco</h3>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>July 14, 2018</span>
                              <span class="probootstrap-location"><i class="icon-location2"></i>Casablanca, Casablanca-Settat</span>
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                        <div class="item">
                          <a href="#" class="probootstrap-featured-news-box">
                            <figure class="probootstrap-media"><img src="img/event2.jpg"  class="img-responsive"></figure>
                            <div class="probootstrap-text">
                              <h3>PMP® Workshop</h3>
                              <span class="probootstrap-date"><i class="icon-calendar"></i>September 9, 2018</span>
                              <span class="probootstrap-location"><i class="icon-location2"></i>Casablanca Technopark Boulevard Dammam Casablanca, 20150</span>
                            </div>
                          </a>
                        </div>
                        <!-- END item -->
                      </div>
                    </div>
                  </div>
                  
                </div>

              </div>
            
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-bg-white probootstrap-border-top">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2>Our Areas Of Learning</h2>
            </div>
          </div>
          <!-- END row -->
          <div class="row">
            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/cours_2.jpg" >
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                  <h3>Software</h3>
                  <p>The application of engineering to the development of software in a systematic method.</p>
                  <p><a href="software.php" class="btn btn-primary">Get In</a></p>
                </div>
              </div>

              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/cours_3.jpg" >
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                  <h3>Physics</h3>
                  <p>Physics is really nothing more than a search for ultimate simplicity, but so far all we have is a kind of elegant messiness.</p>
                  <p><a href="physic.php" class="btn btn-primary">Get In</a></p>
                </div>
              </div>

            </div>
            <div class="row">
            <div class="col-md-6">
              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/cours_1.jpg" >
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                  <h3>Math Major</h3>
                  <p>Mathematics is a place where you can do things which you can't do in the real world.</p>
                  <p><a href="math.php" class="btn btn-primary">Get In</a></p>
                </div>
              </div>

              <div class="probootstrap-service-2 probootstrap-animate">
                <div class="image">
                  <div class="image-bg">
                    <img src="img/cours_4.jpg">
                  </div>
                </div>
                <div class="text">
                  <span class="probootstrap-meta"><i class="icon-calendar2"></i> July 10, 2017</span>
                  <h3>Astronomy</h3>
                  <p>Astronomy is, not without reason, regarded, by mankind, as the sublimest of the natural sciences. Its objects so frequently visible, and therefore familiar, being always remote and inaccessible, do not lose their dignity.</p>
                  <p><a href="astro.php" class="btn btn-primary">Get In</a></p>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      
      
      <section class="probootstrap-section probootstrap-bg probootstrap-section-colored probootstrap-testimonial" style="background-image: url(img/slider_4.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
              <h2 style="font-family: 'Lobster', cursive; font-size: 50px;">The Creators</h2>
            </div>
          </div>
          <!-- END row -->
          <div class="row">
            <div class="col-md-12 probootstrap-animate">
              <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth">
                <div class="item">

                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/Ahmed.jpg" >
                    </figure>
                    <blockquote class="quote">&ldquo;Design must be functional and functionality must be translated into visual aesthetics, without any reliance on gimmicks that have to be explained.&rdquo; <cite class="author"> &mdash; <span>Ahmed Mahroug</span></cite></blockquote>
                  </div>

                </div>
                <div class="item">
                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/person_2.jpg" >
                    </figure>
                    <blockquote class="quote">&ldquo;Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while.&rdquo; <cite class="author"> &mdash;<span>Oualid Rghioui</span></cite></blockquote>
                  </div>
                </div>
                <div class="item">
                  <div class="probootstrap-testimony-wrap text-center">
                    <figure>
                      <img src="img/person_3.jpg" >
                    </figure>
                    <blockquote class="quote">&ldquo;I think design would be better if designers were much more skeptical about its applications. If you believe in the potency of your craft, where you choose to dole it out is not something to take lightly.&rdquo; <cite class="author">&mdash; <span>Ahmed Zahlan</span></cite></blockquote>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <!-- END row -->
        </div>
      </section>
      
      <footer class="probootstrap-footer probootstrap-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="probootstrap-footer-widget">
                <h3>About Us</h3>
                <p>At <span style="font-family: 'Lobster', cursive;">FEDNI</span>, we believe everyone deserves to have a website or online store. Innovation and simplicity makes us happy: our goal is to remove any technical or financial barriers that can prevent business owners from making their own website. We're excited to help you on your journey!</p>
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
                  <li><a href="home.php">Home</a></li>
                  <li><a href="Courses.php">Courses</a></li>
                  <li><a href="teachers.php">Who are we?</a></li>
                  <li><a href="contact.php">Contact</a></li>
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
                <p>L'Cours &copy; 2018</p>
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