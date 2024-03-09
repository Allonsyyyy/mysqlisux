<?php
include('../../config/config.php');
$tenloaisp = $_POST['tendanhmuc'];
$thutu = $_POST['thutu'];
if(isset($_POST['themdanhmuc'])){
    $sql_them = "INSERT INTO danhmuc(tendanhmuc,thutu) VALUES ('".$tenloaisp."',;'".$thutu."')";
    mysqli_query($mysqli,$sql_them);
    header('location:../../index.php?admin=quanlydanhmucsanpham');
}
?>