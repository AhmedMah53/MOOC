<?php

$dbSevername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsysteme";


$conn = mysqli_connect($dbSevername,$dbUsername,$dbPassword,$dbName);
$sql = "SELECT * FROM users WHERE user_uid=@Rgh";
        $result = mysqli_query($conn,$sql);
        $resultcheck = mysqli_num_rows($result);
        echo $resultcheck;