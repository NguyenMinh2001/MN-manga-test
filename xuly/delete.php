<?php
include '../model/config.php';
    session_start();
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql="DELETE FROM truyen where id_tuyen='$id'";
        mysqli_query($conn,$sql);
        header("location:../public/my_comic.php");
        if(isset($_SESSION['id'])){
            header("location:../public/admin.php");
        }else{
            header("location:../public/my_comic.php");
        }
       
    }
    if(isset($_GET['id_user'])){
        $id=$_GET['id_user'];
        $sql="DELETE FROM user where id='$id'";
        mysqli_query($conn,$sql);
        header("location:../public/admin.php");
    }  

?>