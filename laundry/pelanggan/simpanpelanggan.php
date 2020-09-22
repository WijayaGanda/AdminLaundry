<?php

//include koneksi database
include('../koneksi.php');

//get data dari form
$nama          = $_POST['namapelanggan'];
$alamat = $_POST['alamat'];
$nohp       = $_POST['nohp'];

//query insert data ke dalam database
$sql = "INSERT INTO tb_pelanggan (nama_pelanggan, alamat, no_telp) VALUES ('$nama', '$alamat', '$nohp')";
$query = mysqli_query($db,$sql);
//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($query) {

    //redirect ke halaman index.php 
    header("location: listpelanggan.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>