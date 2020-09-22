<?php
include("../koneksi.php");
//get data dari form
$id_pelanggan = $_POST['id_pelanggan'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];

$sql = "UPDATE tb_pelanggan SET nama_pelanggan = '$nama', alamat = '$alamat', no_telp = '$nohp' WHERE id_pelanggan='$id_pelanggan'" ;
$query = mysqli_query($db,$sql);

if($query){
    header('location: listpelanggan.php');
}else{
    echo "gagal";
}
?>