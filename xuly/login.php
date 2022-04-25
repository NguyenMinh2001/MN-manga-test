<?php
    session_start();
    include '../model/config.php';
    if(isset($_POST['dangnhap']) && $_POST["username"] != '' && $_POST["password"] != ''){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $password = md5($password);
        $sql = "SELECT * FROM user Where username ='$username' AND password ='$password'";
        $user=mysqli_query($conn,$sql);
        if(mysqli_num_rows($user)>0){
            $row=mysqli_fetch_array($user);
            if($row['lv'] != 1){
                $_SESSION['lg']=1;
                $_SESSION['user'] = $username;
                header('location:../public/index.php');
            }else{
                $_SESSION['lg']=1;
                $_SESSION['user'] = $username;
                $_SESSION['id'] = $row['id'];
                header('location:../public/admin.php');
            }
        }else{
            $_SESSION['lg']=0;
            header("location:../public/index.php");
        }
    }else{
        $_SESSION['lg']=0;
        header("location:../public/index.php");    
    }
?>