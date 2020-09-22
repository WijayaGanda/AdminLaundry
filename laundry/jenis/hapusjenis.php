<?php
include ('../koneksi.php');

//get id
$id = $_GET['id'];

$sql = "DELETE FROM tb_jenis WHERE id_jenis = $id";
$query = mysqli_query($db,$sql);

if($query){
    header('location: listjenis.php');

}else {
    echo "gagal dihapus";
}
?>