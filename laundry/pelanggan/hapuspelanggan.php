<?php
include("../koneksi.php");

//get id
$id = $_GET['id'];

$sql = "DELETE FROM tb_pelanggan WHERE id_pelanggan=$id";
$query = mysqli_query($db,$sql);

if($query){
    header('location: listpelanggan.php');
}else{
    echo "data gagal dihapus";
}
?>