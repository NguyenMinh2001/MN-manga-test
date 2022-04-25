<?php
include '../model/config.php';
	session_start();
    if(!isset($_SESSION['user'])){
        header('location: index.php');
    }
	include 'inc/header-login.php';
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $truyen=mysqli_query($conn,"SELECT * FROM truyen where id_tuyen='$id'");
        $row=mysqli_fetch_array($truyen);
    }
    if(isset($_POST['submit'])){
        $ten = $_POST["tentruyen"];
        $mota = $_POST["Mota"];
        $username = $_SESSION['user'];
    
        if(isset($_FILES['poster']) ){
            $file = $_FILES['poster'];
            $file_name = $file['name'];
            if(!empty($file_name)){
                move_uploaded_file($file['tmp_name'],'img/'.$file_name);
            mysqli_query($conn,"UPDATE truyen SET img='$file_name' where id_tuyen='$id'");
            }
        }
    
        if(!empty($ten)){
            mysqli_query($conn,"UPDATE truyen SET ten='$ten' where id_tuyen='$id'");
        }
        if(!empty($mota)){
            mysqli_query($conn,"UPDATE truyen SET mo_ta='$mota' where id_tuyen='$id'");
        }
    }

?>
    
<div class="container">
	<form action="edit_comic.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data" style="margin-top: 30px;">
		<h3 style="text-align: center; ">Cập nhật truyện</h3>
		<div class="mb-3">
			<label class="form-label">Tên truyện:</label>
			<input type="text" class="form-control" id="tentruyen" name="tentruyen" placeholder="<?php echo $row['ten']?>">
		</div>
		<div class="mb-3">
			<label class="form-label">Mô tả truyện:</label>
			<textarea class="form-control" name="Mota" rows="7" cols="40" id="Mota" placeholder="<?php echo $row['mo_ta']?>"></textarea>
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
		<button type="submit" class="btn btn-outline-success mb-3"  name="submit">Sửa truyện</button>
	</form>
	
</div>


<?php include 'inc/footer.php'; ?>