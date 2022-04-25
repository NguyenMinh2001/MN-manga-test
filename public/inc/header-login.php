<?php $truyen = mysqli_query($conn,"SELECT * FROM truyen ORDER BY id_tuyen DESC LIMIT 12;");
          $name = $_SESSION['user'];
          $sql=mysqli_query($conn,"SELECT * FROM user where username='$name'");
          $row=mysqli_fetch_array($sql);
          $id=$row['id'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>MN MANGA</title>
    <link rel="shortcut icon" href="img/icon.png">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>     
  $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
function get_id(id) {
			var option = confirm('Bạn có chắc chắn muốn xoá danh mục này không?')
			if(!option) {
				return;
			}

			console.log(id)
			//ajax - lenh post
			$.post('delete.php', {
				'id': id,
				'action': 'delete'
			}, function(data) {
				location.reload()
			})
		}
</script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <style>
        /* Make the image fully responsive */

    </style>
  </head>
  <body data-new-gr-c-s-check-loaded="14.1011.0" data-gr-ext-installed="">
    <?php
        if(isset($_SESSION['lg'])){
          if($_SESSION['lg']==1){
            echo "<div >
            <div class='alert alert-success' style='width: 100%; text-align: center;'>
            <strong>Đăng nhập thành công !</strong>
            </div>
            </div>";
            unset($_SESSION['lg']);
          }
        }
        if(isset($_SESSION['al'])){
          if($_SESSION['al']==1){
            echo "<div >
            <div class='alert alert-success' style='width: 100%; text-align: center;'>
            <strong>Thêm nguồn thành công !</strong>
            </div>
            </div>";
          }else{
            echo "<div >
            <div class='alert alert-danger' style='width: 100%; text-align: center;'>
            <strong>Thêm nguồn thất bại !</strong>
            </div>
            </div>";
          }
          unset($_SESSION['al']);
        }
    ?>
  <!--header-->
  <div class="jumbotron text-center" style="margin-bottom:0">
    <h1>MN MANGA</h1>
    <p></p> 
  </div>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="index.php">Trang Chủ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse col-2" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <div class="dropdown">
            <a class="nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
              Quản lý truyện
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="add_comic.php">Đăng truyện</a>
              <a class="dropdown-item" href="my_comic.php">Truyện đã đăng</a>
            </div>
          </div>
        <li class="nav-item">
          <a class="nav-link" href="#">Giới thiệu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Liên hệ</a>
        </li>    
      </ul>
    </div>  
    <div class="input-group rounded col-6">
    <input onkeyup="showHint(this.value)" id="myInput" type="search" class="form-control rounded" placeholder="Bạn muốn tìm kiếm gì.." aria-label="Search" aria-describedby="search-addon" />
        <span class="input-group-text border-0" id="search-addon">
            <svg xmlns="http://www.w3.org/2000/svg" name="search" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg>
        </span>
      </div>
  <div class="col-3 dropdown">
    <button class="btn btn-gray dropdown-toggle" type="button" data-toggle="dropdown">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
              </svg>
              <a style="text-decoration: none; color: rgb(10, 10, 10);">Tài khoản</a>
      </button>
      <ul class="dropdown-menu">
      <li>&ensp; id: <?php echo $id ?> </li>
      <li>&ensp; username: <?php echo $name ?>&ensp;</li>
      <hr>
      <li><a href="../xuly/logout.php?name=<?php echo $name ?>" name="logout"> &ensp;Logout</a></li>
    </ul>
<!-- đăng nhập -->
</div>
</nav>
<div class="col-5"  style="left: 23%; border-radius: 3px;  position: absolute; z-index: 2;">
  <ul class="list-group" id="txtHint" style=" overflow: auto; max-height: 400px;">

    </ul>
  </div>
