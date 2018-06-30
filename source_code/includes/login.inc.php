<?php
session_start();
if(isset($_POST['submit']))
{
    include_once 'dbh.php';
    $uid = mysqli_real_escape_string($conn,$_POST['username']);
    $pwd = mysqli_real_escape_string($conn,$_POST['password']);

    //Error handlers
    //check if inputs are empty
    if(empty($uid) || empty($pwd))
    {
        header("Location: ../contact.php?username-or-password-wrong");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE user_uid='$uid'";
        $result = mysqli_query($conn,$sql);
        $resultcheck = mysqli_num_rows($result);
        if($resultcheck==0)
        {
            header("Location: ../contact.php?sorrycomptenotexiste $resultcheck");
            exit();
        }else{
            if($row = mysqli_fetch_assoc($result))
            {
                $hashedPwdCheck = password_verify($pwd,$row['user_pwd']);
                if($hashedPwdCheck == false)
                {
                   header("Location: ../contact.php?passwor-incorrect") ;
                   exit();
                }elseif($hashedPwdCheck == true){
                    //log in the user here
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_first'] = $row['user_first'];
                    $_SESSION['u_last'] = $row['user_last'];
                    $_SESSION['u_email'] = $row['user_email'];
                    $_SESSION['u_uid'] = $row['user_uid'];
                    header("Location: ../home.php?seccuss") ;
                    exit();
                }
            }
        }
    }
}else{
    header("Location: ../contact.php?login=ERROR");
    exit();
}