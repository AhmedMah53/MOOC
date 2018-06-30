<?php 

if(isset($_POST['submit']))
{
    include_once 'dbh.php';
    $_first = mysqli_real_escape_string($conn,$_POST['first']);
    $_last = mysqli_real_escape_string($conn,$_POST['last']);
    $_username = mysqli_real_escape_string($conn,$_POST['username']);
    $_email = mysqli_real_escape_string($conn,$_POST['email']);
    $_password = mysqli_real_escape_string($conn,$_POST['password']);
    $_copassword = mysqli_real_escape_string($conn,$_POST['Copassword']); 

    //Error
    //check for empty fields
    if(empty($_first) || empty($_last) || empty($_username) || empty($_email) || empty($_password) || empty($_copassword)){
        header("Location: ../contact.php?contact=empty");
        exit();
    }else{
        if(!preg_match("/^[a-zA-Z]*$/",$_first) || !preg_match("/^[a-zA-Z]*$/",$_last))
        {
            header("Location: ../contact.php?contact=invalid");
            exit();
        }else{
            //check for the email
            if(!filter_var($_email,FILTER_VALIDATE_EMAIL))
            {
                header("Location: ../contact.php?sign=email");
            }else{
                $sql= "SELECT*FROM users WHERE username='$_username';";
                $result = mysqli_query($conn,$sql);
                $resultcheck = mysqli_num_rows($result);
                if($resultcheck>0)
                {
                    header("Location: ../contact.php?contact=usertaken");
                    exit();
                }else{
                    //hashing the password
                    if($_password!==$_copassword)
                    {
                        header("Location: ../contact.php?contact=passwordsnotequal");
                        exit();
                    }else{
                        $hashedPwd = password_hash($_password,PASSWORD_DEFAULT);
                        //insert the user into the database
                        $sql="INSERT INTO users (user_first,user_last,user_email,user_uid,user_pwd) VALUES ('$_first','$_last','$_email','$_username','$hashedPwd');";
                        mysqli_query($conn,$sql);
                        header("Location: ../contact.php?contact=success");
                        exit();
                    }
                }
            }
        }
    }
}else{
    header("location: ../.php");
    exit();
}