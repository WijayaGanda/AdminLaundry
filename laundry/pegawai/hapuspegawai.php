<?php
include("../koneksi.php");

//get id
$id = $_GET['id'];

$sql = "DELETE FROM tb_pegawai WHERE id_pegawai = $id";
$query = mysqli_query($db,$sql);

if($query){
    header('location: listpegawai.php');
}else {
    echo "gagal dihapus";
}
?>