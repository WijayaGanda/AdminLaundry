<?php
include ('../koneksi.php');

$id_jenis = $_POST['id_jenis'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];

$sql = "UPDATE tb_jenis SET jenis_layanan = '$jenis', harga = '$harga' WHERE id_jenis='$id_jenis' ";
$query = mysqli_query($db,$sql);

if($query){
    header('location: listjenis.php');
}else {
    echo "gagal update";
}
?>