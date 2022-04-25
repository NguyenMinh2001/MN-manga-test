<?php
include '../model/config.php';
session_start();
if(isset($_SESSION['user'])){
    if(isset($_SESSION['id'])){
       header('location: admin.php'); 
    }else{
        include 'inc/header-login.php';     
    }
}else{
     include 'inc/header.php';
}

?>

<div class="row" style="margin: 30px 20px;">
      <div class="col-12">
        <div id="banner" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#banner" data-slide-to="0" class="active"></li>
              <li data-target="#banner" data-slide-to="1"></li>
              <li data-target="#banner" data-slide-to="2"></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner ">
              <div class="carousel-item active">
                <img src="img/banner4.jpg" width="1100px" height="500px">
              </div>
              <div class="carousel-item">
                <img src="img/banner5.jpg" width="1100px" height="500px">
              </div>
              <div class="carousel-item">
                <img src="img/banner6.jpg" width="1100px" height="500px">
              </div>
            </div>
            
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#banner" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#banner" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
      </div>
  </div>
  <div class="container" style="margin-top:30px">
    <h1 id="title-h1">Truyện mới cập nhật</h1>
    <div class="row row-cols-4" id="fix-row-margintop">
        <!-- CARD 2 -->
        <?php foreach ($truyen as $key => $value){ ?>
        <div class="col item">
            <div class="card card-item" style="width: 16rem;">
                <img src="img/<?php echo $value['img'] ?>" class="card-img-top" alt="..." height="300px">
                <div class="card-body">
                <h5 class="card-title" style="text-align: center;"><?php echo $value['ten'] ?></h5>
                <h6 class="card-title"><?php echo $value['nguoi_dang'] ?></h6>
                <a href="chitiet.php?id=<?php echo $value['id_tuyen']?>" class="btn btn-primary">&ensp;&ensp;xem&ensp;&ensp;</a>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
 </div>
 <?php 
include 'inc/footer.php';
?>
<!-- footer -->
</body>
</html>