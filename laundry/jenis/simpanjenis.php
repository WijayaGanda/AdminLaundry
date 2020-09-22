<?php
include ("../koneksi.php");

//get data
$jenis = $_POST['jenislayanan'];
$harga = $_POST['harga'];

//query
$sql = "INSERT INTO tb_jenis (jenis_layanan, harga) VALUES ('$jenis', '$harga') ";
$query = mysqli_query($db,$sql);

if($query){
    header('location: listjenis.php');
}else {
    echo "gagal disimpan";
}
?>