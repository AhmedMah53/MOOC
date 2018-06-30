<?php
session_start();
if(isset($_POST['submit']))
{

    include_once 'dbh.php';
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    if(!empty($email)){
        $sql="SELECT user_id,user_email FROM users";
        $resultat = mysqli_query($conn,$sql);
        $merrat = mysqli_num_rows($resultat);
        if($merrat>0)
        {
            while($lign=mysqli_fetch_assoc($resultat))
            {
                if($email==$lign['user_email'])
                {
                      $_SESSION['msg']="The user is in ID number ".$lign['user_id']." ";
                      header('Location: ../admin.php');
                      exit();
                }
            }
        }else{
            header('Location : ../admin.php? NOT FOUND');
            exit();
        }
    }else{
        header('Location: ../admin.php?plz enter some email ');
        exit();
    }

}else{
    header('Location : ../admin.php');
    exit();
}