<?php
include ('../koneksi.php');

//get data
$nama = $_POST['namapelanggan'];
$berat = $_POST['berat'];
$jenis = $_POST['jenislayanan'];
$petugas = $_POST['namapetugas'];
$harga = $_POST['harga'];
$tanggal = $_POST['tanggal'];

$query = mysqli_query($db, "INSERT INTO tb_transaksi ( id_pelanggan, berat, id_jenis, id_pegawai, harga, tanggal_keluar)
VALUES ( '$nama', '$berat', '$jenis', '$petugas', '$harga', '$tanggal')"); 


if($query){
    header('location: listtransaksi.php');

}else{
    echo "gagal disimpan";
}
        
?>