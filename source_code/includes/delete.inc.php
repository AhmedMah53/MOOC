<?php 
session_start();
if(isset($_GET['del']))
{
    include 'dbh.php';
    $id=$_GET['del'];
    mysqli_query($conn,"DELETE FROM users WHERE user_id=$id");
    $_SESSION['msg']="user deleted";
    header('Location: ../admin.php');
    exit();
}