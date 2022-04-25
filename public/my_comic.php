<?php
include '../model/config.php';
	session_start();
    if(!isset($_SESSION['user'])){
        header('location: index.php');
    }
    include 'inc/header-login.php';
    $username = $_SESSION['user'];
    $mycomic =mysqli_query($conn,"SELECT * FROM truyen WHERE nguoi_dang ='$username'");  
?>
<div class="container" style="margin-top: 30px">
    <h2>Truyện của tôi</h2>
    <div class="row row-cols-4" id="fix-row-margintop">
        <!-- CARD 2 -->
        <?php foreach ($mycomic as $key => $value){ ?>
            <div class="col item">
                <div class="card card-item" style="width: 17rem;">
                <a href="chitiet.php?id=<?php echo $value['id_tuyen'] ?>" style="text-decoration: none; color: black;">
                <img src="img/<?php echo $value['img'] ?>" class="card-img-top" alt="..." height="300px">
                    <div class="card-body">
                <h5 class="card-title"><?php echo $value['ten'] ?></h5>
                </a>
                   
            
                        <a href="edit_comic.php?id=<?php echo $value['id_tuyen']?>" class="btn btn-warning">Edit</a>
                        <form action="../xuly/delete.php" class="delete" method="POST" style="display: inline;">
                            <input type="hidden" name="id">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mymodal<?php echo $value['id_tuyen']?>">
                                    Delete
                                    </button>

                                    <!-- The modal -->
                                    <div class="modal" id="mymodal<?php echo $value['id_tuyen']?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                        <!-- modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Thông báo</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- modalbody -->
                                        <div class="modal-body">
                                            Bạn có chắc muốn xóa truyện <?php echo $value['ten'] ?>
                                        </div>

                                        <!-- modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                            <a class="btn btn-danger" href="../xuly/delete.php?id=<?php echo $value['id_tuyen']?>">delete</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                             </form>
                        <button class="btn btn-success" data-toggle="modal" data-target="#add-link<?php echo $value['id_tuyen']?>">add link</button>
                        <form action="../xuly/add_link.php?id=<?php echo $value['id_tuyen']?>" class="" method="POST" style="display: inline;" >
                        <div class="modal" id="add-link<?php echo $value['id_tuyen']?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                        <!-- modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Thông báo</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            
                                        </div>

                                        <!-- modalbody -->
                                        <div class="modal-body">
                                        <label for="exampleFormControlInput1">Link:</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="thêm link vào.." name="link">
                                        <label for="exampleFormControlInput1">Ngôn ngữ:</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="ngonngu">
                                            <option value="Tiếng Việt">Tiếng việt</option>
                                            <option value="Tiếng Anh" >English</option>
                                        </select>
                                        </div>

                                        <!-- modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success" name="submit">Add link</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                                            
                    </div>
                </div>
            </div>  
        <?php }?> 
    </div>
</div>
    
<?php include 'inc/footer.php'?>