<?php
include '../model/config.php';
	session_start();
	if(!isset($_SESSION['user'])){
        header('location: index.php');
    }
	include 'inc/header-login.php';
	if(isset($_POST['submit']) && $_POST["tentruyen"] != '' && $_POST["Mota"] != ''){
    $ten = $_POST["tentruyen"];
    $mota = $_POST["Mota"];
	$username = $_SESSION['user'];

	if(isset($_FILES['poster'])){
		$file = $_FILES['poster'];
		$file_name = $file['name'];
		move_uploaded_file($file['tmp_name'],'img/'.$file_name);
	}

	if(!empty($ten) && !empty($mota)){
		$sql="INSERT INTO truyen (ten,mo_ta,img,nguoi_dang) VALUE ('$ten','$mota','$file_name','$username')";
		mysqli_query($conn,$sql);
	}
}
?>

<div class="container">
	<form action="add_comic.php" method="post" enctype="multipart/form-data" style="margin-top: 30px;">
		<h3 style="text-align: center; ">Thêm Truyện Mới </h3>
		<div class="mb-3">
			<label class="form-label">Tên truyện:</label>
			<input type="text" class="form-control" id="tentruyen" name="tentruyen" placeholder="Thêm vào một tên truyện ...">
		</div>
		<div class="mb-3">
			<label class="form-label">Mô tả truyện:</label>
			<textarea class="form-control" name="Mota" rows="7" cols="40" id="Mota" placeholder="Thêm vào mô tả truyện..."></textarea>
		</div>

		<div class="input-group mb-3">
			<div class="input-group-prepend">
			<span class="input-group-text">Upload</span>
		</div>
		<div class="custom-file">
			<input type="file" class="custom-file-input" id="inputGroupFile01"  value="Upload" name="poster">
			<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
		</div>
		<!-- <p><input type="submit" name="submit" value="Thêm Trích dẫn này!"></p> -->
	
		</div>
		<button type="submit" class="btn btn-outline-success mb-3"  name="submit">Đăng truyện</button>
	</form>
	
</div>


<?php include 'inc/footer.php'; ?>