<?php
    $truyen = mysqli_query($conn,"SELECT * FROM truyen ORDER BY id_tuyen DESC LIMIT 12;");
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

</script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    <style>
        /* Make the image fully responsive */

    </style>
  </head>
  <body data-new-gr-c-s-check-loaded="14.1011.0" data-gr-ext-installed=""id="tb">
    <?php
        if(isset($_SESSION['rs'])){
          if($_SESSION['rs']==2){
            echo "<div >
            <div class='alert alert-success' style='width: 100%; text-align: center;'>
            <strong>Đăng ký thành công ! </strong>
            </div>
            </div>";
          }if($_SESSION['rs']==1){
            echo "<div >
            <div class='alert alert-danger' style='width: 100%; text-align: center;'>
            <strong>Đăng ký thất bại ! </strong> tài khoản đã tồn tại.
            </div>
            </div>";
          }if($_SESSION['rs']==0){
            echo "<div >
            <div class='alert alert-danger' style='width: 100%; text-align: center;'>
            <strong>Đăng ký thất bại ! </strong> mật khẩu không khớp.
            </div>
            </div>";
          }
          unset($_SESSION['rs']);
        }
        if(isset($_SESSION['lg'])){
          if($_SESSION['lg']==0){
            echo "<div >
            <div class='alert alert-danger' style='width: 100%; text-align: center;'>
            <strong>Đăng nhập thất bại ! </strong>thông tin tài khoản không tồn tại hoặc chưa đúng.
            </div>
            </div>";
            unset($_SESSION['lg']);
          }
        }
          
       
    ?>
    <!-- <div >
    <div class="alert alert-success" style="width: 100%; text-align: center;">
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
    </div>
    </div> -->

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
        <li class="nav-item">
          <a class="nav-link" href="#">Giới thiệu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Liên hệ</a>
        </li>    
      </ul>
    </div>  
    <div class="input-group rounded col-6">
    <input onkeyup="showHint(this.value)" id="" type="search" class="form-control rounded" placeholder="Bạn muốn tìm kiếm gì.." aria-label="Search"  />
        <span class="input-group-text border-0" id="search-addon">
            <svg xmlns="http://www.w3.org/2000/svg" name="search" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg>
        </span>
      </div>
      <div class="col-3">
<button class="btn btn-gray">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
              </svg>
              <a style="text-decoration: none; color: rgb(10, 10, 10);"  href="inc/login.php" data-toggle="modal" data-target="#modal">Đăng nhập</a>
</button>
<!-- đăng nhập -->
<div id="modal" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-ceter d-block">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                            <h2 style="text-align: center;">Đăng nhập</h2>
                    </div>
                    <div class="modal-body">
                        <form action='../xuly/login.php' method='POST'>
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" id="username" placeholder="Nhập vào tên người dùng" name="username">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Nhập vào mật khẩu" name="password">
                            </div>
                            <div class="form-group form-check">
                                <input class="form-check-input" type="checkbox" id="rme">
                                <label class="form-check-label" for="rme">Ghi nhớ tôi</label>
                            </div>
                            <button class="btn btn-success btn-block" name="dangnhap" id="login" >Đăng nhập</button>
                        </form>         
                    </div>   
                    <div class="modal-footer">
                             <a href="#">Quên mật khẩu?</a></p>
                    </div>         
                </div>
            </div>
        </div>

<!-- đăng ký -->
 <button class="btn btn-gray" >
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="s16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
              <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
            </svg> 
            <a style="text-decoration: none; color: black;" href="" data-toggle="modal" data-target="#modal1">Đăng ký</a>
</button>
<div id="modal1" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header text-ceter d-block">
                      <button type="button" class="close" data-dismiss="modal">×</button>
                          <h2 style="text-align: center;">Đăng ký</h2>
                  </div>
                  <div class="modal-body">
                      <form action="../xuly/register.php" method="post">
                          <div class="form-group">
                              <label for="text">Tên tài khoản:</label>
                              <input type="text" class="form-control" id="text" placeholder="Nhập vào tên tài khoản..." name="username">
                          </div>
                          <div class="form-group">
                              <label for="email">Email:</label>
                              <input type="email" class="form-control" id="email" placeholder="Nhập vào email..." name="email">
                          </div>
                          <div class="form-group">
                              <label for="pwd">Mật khẩu:</label>
                              <input type="password" class="form-control" id="pwd" placeholder="Nhập vào mật khẩu..." name="password">
                          </div>
                          <div class="form-group">
                              <label for="re-pwd">Nhập lại mật khẩu:</label>
                              <input type="password" class="form-control" id="re-pwd" placeholder="Nhập lại mật khẩu..." name="repassword"> 
                          </div>
                          <div  class="form-group form-check">
                              <input class="form-check-input" type="checkbox" id="rme" name="checkbox">
                              <label class="form-check-label" for="rme" name="check">Bằng việc đăng ký, bạn đồng ý với chúng tôi về <a href="#">Điều khoản dịch vụ</a> & <a href="#">Chính sách bảo mật</a></label>
                          </div>
                          <button class="btn btn-success btn-block" name="dangki">Đăng ký</button>
                      </form>
                  </div>         
              </div>
          </div>
      </div>
      </div>
  </nav>
  <div class="col-5"  style="left: 23%; border-radius: 3px;  position: absolute; z-index: 2;">
  <ul class="list-group" id="txtHint" style=" overflow: auto; max-height: 400px;">

    </ul>
  </div>

    <!-- <p><b>Start typing a name in the input field below:</b></p>
<form action="">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
</form> -->