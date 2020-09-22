<?php
include('..koneksi.php');

mysqli_query($db, "DELETE FROM tb_transaksi WHERE id_transaksi = '$_GET[id]'") 
or die (mysqli_error($db));

?>
