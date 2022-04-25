<?php
    include '../model/config.php';
    session_start();
    if(!isset($_SESSION['user'])){
        include 'inc/header.php';
    }else{
        include 'inc/header-login.php';
    }
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql=mysqli_query($conn,"SELECT * FROM truyen WHERE id_tuyen='$id'");
        $nguon = mysqli_query($conn,"SELECT * FROM nguon WHERE id_truyen='$id'");
        $row = mysqli_fetch_array($sql);
        
    }
?>
    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-4">
                <img src="img/<?php echo $row['img'] ?>" class="card-img-top" alt="..." height="300px" style="box-shadow: 0 0 3px #dfdfdf inset; border-radius: 10px;"> 
            </div>
            <div class="col-sm-8">
                <h2> <?php echo $row['ten'] ?> </h2>
                <div style="margin-top:30px;"></div>
                <div style="margin-top:30px;">
                    <h5>Nguồn đọc:</h5>
                    <?php foreach($nguon as $key => $value){
                        if($value['ngon_ngu']  == "Tiếng Việt"){
                            echo " Tieng Viet: <a href=".$value['link']."> ".$value['link']."</a> <br>";
                        }
                        if($value['ngon_ngu']  == "Tiếng Anh"){
                            echo "Tieng Anh: <a href=".$value['link']."> ".$value['link']."</a> <br>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div style="margin-top:30px;">
            <div>
                <a href="" style="text-decoration:none; color:red; font-size:20px;">  
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-exclamation-octagon-fill" viewBox="0 0 16 16">
                    <path d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>&ensp;Giới thiệu           
                </a> 
            </div>
            <div>
                <h5><?php echo $row['mo_ta'] ?></h5>
            </div>
        </div>
    </div>
<?php include 'inc/footer.php'; ?>