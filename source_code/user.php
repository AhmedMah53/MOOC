<?php
include 'header.php';
include 'includes/dbh.php';


$smya = $_SESSION['u_first'];
if(!isset($_SESSION['u_id']))
{
  header("Location: contact.php");
}


$nameError = $descriptionError = $videoError = $categoryError = $imageError = $name = $description = $price = $category = $image = $video = "";

    if(!empty($_POST)) 
    {
        $name               = checkInput($_POST['name']);
        $description        = checkInput($_POST['description']);
        $category           = checkInput($_POST['category']); 
        $image              = checkInput($_FILES["image"]["name"]);
        $imagePath          = 'img/'. basename($image);
        $imageExtension     = pathinfo($imagePath,PATHINFO_EXTENSION);
        $video              = checkInput($_FILES["Video"]["name"]);
        $videoPath          = 'vid/'. basename($video);
        $videoExtension     = pathinfo($videoPath,PATHINFO_EXTENSION);
        $isSuccess          = true;
        $isUploadSuccess    = false;
    
        
        if(empty($name)) 
        {
            $nameError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        }
        if(empty($description)) 
        {
            $descriptionError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        } 
        if(empty($category)) 
        {
            $categoryError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        }
        if(empty($image)) 
        {
            $imageError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        }
        if(empty($video)) 
        {
            $videoError = 'Ce champ ne peut pas être vide';
            $isSuccess = false;
        } 
        else
        {
            $isUploadSuccess = true;
            if($imageExtension != "jpg" && $imageExtension != "jpeg" && $imageExtension != "png") 
            {
                $imageError = "Les fichiers autorises sont: .jpg, .png...";
                $isUploadSuccess = false;
            }
            #if(file_exists($imagePath)) 
           # {
               # $imageError = "Le fichier existe deja";
              #  $isUploadSuccess = false;
           # }
            if($_FILES["image"]["size"] > 10000000000000) 
            {
                $imageError = "Le fichier ne doit pas depasser les 500KB";
                $isUploadSuccess = false;
            }
            if($isUploadSuccess) 
            {
                if(!move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath)) 
                {
                    $imageError = "Il y a eu une erreur lors de l'upload";
                    $isUploadSuccess = false;
                } 
            } 
            $isUploadSuccess = true;
            if($videoExtension != "mp4" && $videoExtension != "webm" && $videoExtension != "avi" && $videoExtension != "mpeg" ) 
            {
                $videoError = "Les fichiers autorises sont: .mp4, .webm, .avi, .mpeg";
                $isUploadSuccess = false;
            }
           # if(file_exists($videoPath)) 
            #{
             #   $videoError = "Le fichier existe deja";
              #  $isUploadSuccess = false;
            #}
            if($_FILES["Video"]["size"] > 100000000000000000000) 
            {
                $videoError = "Le fichier ne doit pas depasser les 500KB";
                $isUploadSuccess = false;
            }
            if($isUploadSuccess) 
            {
                if(!move_uploaded_file($_FILES["image"]["tmp_name"], $videoPath)) 
                {
                    $videoError = "Il y a eu une erreur lors de l'upload";
                    $isUploadSuccess = false;
                } 
            } 
        }
        
        if($isSuccess && $isUploadSuccess) 
        {
            $db = "INSERT INTO cours(c_categorie,c_name,c_desc,c_img,c_vid) VALUES('$category','$name','$description','$imagePath','$videoPath');";
            mysqli_query($conn,$db);
            $_SESSION['category']=$category;
            $_SESSION['cname']=$name;
            $_SESSION['desc']=$description;
            $_SESSION['img']=$imagePath;
            $_SESSION['vid']=$videoPath;

        }
    }

    function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

?>
  
  <div id="navbar-collapse" class="navbar-collapse collapse">
  <ul class="nav navbar-nav navbar-right">
    <li><a href="home.php">Home</a></li>
    <li><a href="courses.php">Courses</a></li>
    <li><a href="teachers.php">Who are we ?</a></li>
    <li class="active"><a href="user.php"><?php echo $_SESSION['u_first'];?></a></li>
    <li><form action="includes/logout.inc.php" method="POST">
      <div class="just ">
        <br>
            <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Logout">
      </div>
  </form></li>
  </ul>
  
</div>
</div>
</nav>

<section class="probootstrap-section probootstrap-section-colored">
<div class="container">
<div class="row">
  <div class="col-md-12 text-left section-heading probootstrap-animate">
    <h1 class="mb0">Welcome  <?php echo $_SESSION['u_first'];?></h1>
  </div>
</div>
</div>
</section>
<section class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section" style="background-image: url(img/.jpg)">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate">
              <h2 class="mb0">DO what you want</h2>
            </div>
          </div>
        </div>
        <div class="probootstrap-tab-style-1">
          <ul class="nav nav-tabs probootstrap-center probootstrap-tabs no-border">
            <li class="active" ><a data-toggle="tab" href="#getintouch">Get in Touch</a></li>
            <li><a data-toggle="tab" href="#uploadone">Upload One</a></li>
          </ul>
        </div>
      </section>
      <section class="probootstrap-section probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          
          <div class="tab-content">

            <div id="getintouch" class="container tab-pane fade in active">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row probootstrap-gutter0">
                      <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
                        <h2>Get In Touch</h2>
                        <p>Contact us.</p>
                        <form action="#" method="post" class="probootstrap-form">
                          <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject">
                          </div>
                          <div class="form-group">
                            <label for="message">Message</label>
                            <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
                          </div>
                          <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Send Message">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
             </div>
             <div id="uploadone" class="tab-pane fade">
                <div class="container admin" id="probootstrap-content">
                    <div class="row">
                        <h1 class="mb0">Upload One</h1>
                        <br>
                        <form class="form" action="user.php" role="form" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                <span class="help-inline"><?php echo $nameError;?></span>
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <input type="text" class="form-control" id="description" name="description" placeholder="Description" value="<?php echo $description;?>">
                                <span class="help-inline"><?php echo $descriptionError;?></span>
                            </div>
                        <div class="form-group">
                                <label for="category">Catégorie:</label>
                                <select class="form-control" id="category" name="category">
                                <optgroup label="Software">
                                <option value="Web">Web</option>
                                <option value="Design">Design</option>
                                <option value="Programming Languages">Programming Languages</option>
                                </optgroup>
                    
                                <optgroup label="Major Math">
                                <option value="Algebra">Algebra</option>
                                <option value="Probability">Probability</option>
                                <option value="Analysis">Analysis</option>
                                <option value="Geometry">Geometry</option>
                                </optgroup>
                                
                                <optgroup label="Physics">
                                <option value="Mechanical">Mechanical</option>
                                <option value="Electromgnetic">Electromgnetic</option>
                                <option value="Nuclear Physics">Nuclear Physics</option>
                                <option value="Quantum">Quantum</option>
                                </optgroup>
                                
                                <optgroup label="Astronomy">
                                <option value="Stellar astronomy">Stellar astronomy</option>
                                <option value="Galactic astronomy">Galactic astronomy</option>
                                <option value="Planetary science">Planetary science</option>
                                <option value="Cosmology">Cosmology</option>
                                </optgroup>
                                
                                </select>
                                <span class="help-inline"><?php echo $categoryError;?></span>
                            </div>
                            <div class="form-group">
                                <label for="image">Image For advertising:</label>
                                <input type="file" id="image" name="image"> 
                                <span class="help-inline"><?php echo $imageError;?></span>
                            </div>
                            <div class="form-group">
                                <label for="video">Video:</label>
                                <input type="file" id="Video" name="Video"> 
                                <span class="help-inline"><?php echo $videoError;?></span>
                            </div>
                            <br>
                            <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="+ Upload">
                           </div>
                        </form>
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
  
  
  

