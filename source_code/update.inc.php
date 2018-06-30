<?php
session_start();
if(isset($_POST['update']))
{    
    include_once 'dbh.php';
    $id = mysqli_real_escape_string($conn,$_post['id']);
    $first = mysqli_real_escape_string($conn,$_POST['first']);
    $last = mysqli_real_escape_string($conn,$_POST['last']);
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $sql="UPDATE users SET user_first=$first,user_last=$last,user_uid=$username,user_email=$email WHERE user_id=$id;";
    mysqli_query($conn,$sql);
    $_SESSION['msg']="Information Updated";
                      header('Location: ../admin.php');
                      exit();
                      
}