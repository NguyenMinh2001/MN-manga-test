<?php
    session_start();
    include '../model/config.php';
    if(isset($_GET['id']) && isset($_POST['submit']) && $_POST['link'] != ''){
        $id=$_GET['id'];
        $link = $_POST['link'];
        $ngonngu=$_POST['ngonngu'];
        $nguon=mysqli_query($conn,"SELECT link FROM nguon where link='$link'");
        if(!empty($nguon)){
            $sql = "INSERT INTO nguon (link,ngon_ngu,id_truyen) VALUES ('$link','$ngonngu','$id')";
            mysqli_query($conn,$sql);
            $_SESSION['al']=1;
            header("location:../public/my_comic.php");
        }
        $_SESSION['al']=0;
        header("location:../public/my_comic.php");
    }
        $_SESSION['al']=0;
    if(isset($_SESSION['id'])){
        header("location:../public/admin.php");
    }else{
        header("location:../public/my_comic.php");
    }
?>