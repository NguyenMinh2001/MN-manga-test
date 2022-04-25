<?php
include '../model/config.php';
$q = $_REQUEST["q"];
$tim=mysqli_query($conn,"SELECT * From truyen where ten like '%$q%' ");
$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  foreach($tim as $key=>$value) {
      if ($hint === "") {
        $hint = "<li class='list-group-item'><a href='chitiet.php?id=".$value['id_tuyen']."' style='text-decoration: none; color: black;'><img src='img/".$value['img']."' height='60px' width='40px' > &emsp;".$value['ten']." </a></li>";
      } else {
        $hint .= "<li class='list-group-item'><a href='chitiet.php?id=".$value['id_tuyen']."'style='text-decoration: none; color: black;'><img src='img/".$value['img']."' height='60px' width='40px' > &emsp;".$value['ten']." </a></li>";
      }
    
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "không tìm thấy kết quả..." : $hint;
?>