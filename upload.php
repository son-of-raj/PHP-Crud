<?php
include 'connection.php';
    if(isset($_POST['done'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $details = $_POST['details'];
    $photo = $_FILES['photo']['tmp_name']; 
    $imgContent = addslashes(file_get_contents($photo)); 

    // $photo = $_POST['photo'];
    $q = " INSERT INTO `users`(`username`, `password`,`details`,`photo`) VALUES ( '$username', '$password','$details', '$imgContent' )";
    $query = mysqli_query($con,$q);
    header('location:display.php');
    }
?>