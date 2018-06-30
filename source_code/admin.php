<?php
include_once 'includes/dbh.php';
include_once 'header.php';

if(!$_SESSION['u_id'])
{
  header('Location: contact.php');
  exit();
}

if(isset($_GET['edit']))
{
    $id = $_GET['edit'];
    $_SESSION['edit'] = $id;
    $res=mysqli_query($conn,"SELECT * FROM users WHERE user_id=$id");
    $check = mysqli_num_rows($res);
    if($check==1){
    $record = mysqli_fetch_array($res);
    $id = $record['user_id'];
    $first = $record['user_first'];
    $last = $record['user_last'];
    $username = $record['user_uid'];
    $email = $record['user_email'];
    }else{
        header('Location: admin.php');
        exit();
    }
}
if(isset($_GET['mdf']))
{
    $id = $_GET['mdf'];
    $_SESSION['mdf'] = $id;
    $res=mysqli_query($conn,"SELECT * FROM cours WHERE c_id=$id");
    $check = mysqli_num_rows($res);
    if($check==1){
    $record = mysqli_fetch_array($res);
    $id = $record['c_id'];
    $name = $record['c_name'];
    $descreption = $record['c_desc'];
    $category = $record['c_categorie'];
    $img = $record['c_img'];
    $vid = $record['c_vid'];
    }else{
        header('Location: admin.php');
        exit();
    }
}
?>

<div id="navbar-collapse" class="navbar-collapse collapse">
  <ul class="nav navbar-nav navbar-right">
    <li><a href="home.php">Home</a></li>
    <li><a href="courses.php">Courses</a></li>
    <li><a href="teachers.php">Who are we ?</a></li>
    <li class="active"><a href="amin.php"><?php echo $_SESSION['u_first']?></a></li>
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
    <h1 class="mb0">Welcome <?php echo $_SESSION['u_first'] ?> .</h1>
    <p> THE ADMIN </p>
  </div>
</div>
</div>
</section>

<section class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section" style="background-image: url()">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate">
              <h2 class="mb0">MY control</h2>
            </div>
          </div>
        </div>
        <div class="probootstrap-tab-style-1">
          <ul class="nav nav-tabs probootstrap-center probootstrap-tabs no-border">
            <li class="active" ><a data-toggle="tab" href="#users">USERS</a></li>
            <li><a data-toggle="tab" href="#cours">COURSES</a></li>
          </ul>
        </div>
      </section>

<section class="probootstrap-section probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          
          <div class="tab-content">
            <div id="users" class="container tab-pane fade in active">
            <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
                <form action="includes/update.inc.php" method="POST" class="probootstrap-form needs-validation">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-group">
                      <label for="name">First Name</label>
                      <input type="name" class="form-control" id="first" name="first" value="<?php if(!empty($first)){echo $first;} ?>">
                    </div>
                    <div class="form-group">
                      <label for="name">Last Name</label>
                      <input type="name" class="form-control" id="last" name="last" value="<?php if(!empty($last)){echo $last;}?>">
                    </div>
                    <div class="form-group">
                      <label for="username">UserName</label>
                      <input type="text" class="form-control" id="username" name="username" placeholder="@username" value="<?php if(!empty($username)){echo $username;} ?>">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" value="<?php if(!empty($email)){echo $email;} ?>">
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-lg btn-block" id="submit" name="update" value="Update">
                    </div>
                  </form>
            </div>
            
                <div class="row">
         
         <div class="col-md-12  probootstrap-animate" id="probootstrap-content">
           <!-- Website Overview -->
           <div class="panel panel-default">
             <div class="panel-heading main-color-bg">
               <h3>Users</h3>
             </div>
             <div class="panel-body">
               <div class="row">
                     <div class="col-md-12">
                         <form action="includes/search.inc.php" method="POST">
                            <input class="form-control" type="email" name="email" placeholder="Enter Email"><br>
                            <input class="btn btn-primary" type="submit" name="submit" value="Search">
                         </form>
                     </div>
                     <?php if(isset($_SESSION['msg'])){
                     echo '<div class="text-center" style="color: #3c763d; ">';
                          
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                         
                     echo '</div>';}
                     ?>
               </div>
               <br>
               <table class="table table-striped table-hover">
                     <tr>
                       <th>ID</th>
                       <th>First Name</th>
                       <th>Last Name</th>
                       <th>Username</th>
                       <th>Email</th>
                       <th></th>
                       <th></th>
                     </tr>
                     <?php
                        $requete="SELECT user_id,user_first,user_last,user_uid,user_email FROM users";
                        $resultat= mysqli_query($conn,$requete);
                        $nbart=mysqli_num_rows($resultat);
                        if($nbart>0)
                        {
                        while($lign=mysqli_fetch_assoc($resultat))
                        {
                            echo '<tr>';
                            foreach ($lign as $value) {
                                echo "<td>".$value."</td>";
                            }
                            echo '<td><a href="admin.php?edit='.$lign['user_id'].'" class="btn btn-success">Edit</a></td>';
                            echo '<td><a href="includes/delete.inc.php?del='.$lign['user_id'].'" class="btn btn-danger">Delete</a></td>';
                            echo '</tr>';
                        }
                        }
                     ?>
                   </table>
              </div>
             </div>

         </div>
       </div>
       </div>


        <div id="cours" class="container tab-pane fade">
            <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
                <form action="includes/update.inc.php" method="POST" class="probootstrap-form needs-validation">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="first" name="first" value="<?php if(!empty($name)){echo $name;} ?>">
                    </div>
                    <div class="form-group">
                      <label for="desc">Descreption</label>
                      <input type="text" class="form-control" id="descreption" name="descreption" value="<?php if(!empty($descreption)){echo $descreption;}?>">
                    </div>
                    <div class="form-group">
                      <label for="Category">Category</label>
                      <input type="text" class="form-control" id="Category" name="Category" placeholder="Category" value="<?php if(!empty($category)){echo $category;} ?>">
                    </div>
                    <div class="form-group">
                      <label for="image">image</label>
                      <input type="text" class="form-control" id="image" name="image" placeholder="you@example.com" value="<?php if(!empty($img)){echo $img;} ?>">
                    </div>
                    <div class="form-group">
                      <label for="video">video</label>
                      <input type="text" class="form-control" id="video" name="video" placeholder="you@example.com" value="<?php if(!empty($vid)){echo $img;} ?>">
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-lg btn-block" id="submit" name="update" value="Update">
                    </div>
                  </form>
            </div>
            
                <div class="row">
         
         <div class="col-md-12  probootstrap-animate" id="probootstrap-content">
           <!-- Website Overview -->
           <div class="panel panel-default">
             <div class="panel-heading main-color-bg">
               <h3>Users</h3>
             </div>
             <div class="panel-body">
               <div class="row">
                     <div class="col-md-12">
                         <form action="includes/search.inc.php" method="POST">
                            <input class="form-control" type="email" name="email" placeholder="Enter Email"><br>
                            <input class="btn btn-primary" type="submit" name="submit" value="Search">
                         </form>
                     </div>
                     <?php if(isset($_SESSION['msg'])){
                     echo '<div class="text-center" style="color: #3c763d; ">';
                          
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                         
                     echo '</div>';}
                     ?>
               </div>
               <br>
               <table class="table table-striped table-hover">
                     <tr>
                       <th>ID</th>
                       <th>Category</th>
                       <th>Name</th>
                       <th>image</th>
                       <th>video</th>
                       <th></th>
                       <th></th>
                     </tr>
                     <?php
                        $requete="SELECT c_id,c_categorie,c_name,c_img,c_vid FROM cours";
                        $resultat= mysqli_query($conn,$requete);
                        $nbart=mysqli_num_rows($resultat);
                        if($nbart>0)
                        {
                        while($lign=mysqli_fetch_assoc($resultat))
                        {
                            echo '<tr>';
                            foreach ($lign as $value) {
                                echo "<td>".$value."</td>";
                            }
                            echo '<td><a href="admin.php?mdf='.$lign['c_id'].'" class="btn btn-success">Edit</a></td>';
                            echo '<td><a href="includes/delete.inc.php?del='.$lign['c_id'].'" class="btn btn-danger">Delete</a></td>';
                            echo '</tr>';
                        }
                        }
                     ?>
                   </table>
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
    <br><br><br>

<footer class="probootstrap-footer probootstrap-bg">
<div class="probootstrap-copyright">
<div class="container">
  <div class="row">
    <div class="col-md-8 text-left">
      <p>L\'Cours &copy; 2017</p>
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