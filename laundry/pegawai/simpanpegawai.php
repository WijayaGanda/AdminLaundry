<?php
//include koneksi database
include('../koneksi.php');

//get data dari form
$nama = $_POST['namapegawai'];
$nohp = $_POST['nohp'];

//query insert
$sql = "INSERT INTO tb_pegawai (nama_pegawai, no_hp) VALUES ('$nama', '$nohp')";
$query = mysqli_query($db,$sql);

if($query){
    header('location: listpegawai.php');

}else{
    echo "gagal disimpan";
}
?>