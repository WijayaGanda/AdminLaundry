<?php
include('../koneksi.php');

$id_pegawai = $_POST['id_pegawai'];
$nama = $_POST['nama'];
$nohp = $_POST['nohp'];

$sql = "UPDATE tb_pegawai SET nama_pegawai = '$nama', no_hp = '$nohp' WHERE id_pegawai='$id_pegawai' ";
$query = mysqli_query($db,$sql);

if($query){
    header('location: listpegawai.php');
}else{
    echo "gagal update";
}
?>