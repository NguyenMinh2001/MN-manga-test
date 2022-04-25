<?php
include '../model/config.php';
session_start();
if(isset($_POST['dangki']) && $_POST["username"] != '' && $_POST["email"] != '' && $_POST["password"] != '' && $_POST["repassword"] != ''){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];
    if($password != $repassword) {
        $_SESSION['rs']=0;
        header("location:../public/index.php");     
        die();
    }
    $sql = "SELECT * FROM user where username='$username' ";
    $old = mysqli_query($conn,$sql);
    $password = md5($password);
    if(mysqli_num_rows($old) > 0){
        $_SESSION['rs']=1;
        header("location:../public/index.php");
        die();
    }
    $sql = "INSERT INTO user (username,password,email) VALUES ('$username','$password','$email')";
    mysqli_query($conn,$sql);
    $_SESSION['rs']=2;
    header("location:../public/index.php");
}else{
    $_SESSION['rs']=3;
    header("location:../public/index.php");
}
?>