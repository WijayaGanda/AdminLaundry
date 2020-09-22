<?php
include("../koneksi.php");

?>
<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="admin.css">
        <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">


        <title>Daftar Jenis Layanan</title>
    </head>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN <b>| LAUNDRY</b></a>
        </div>
    </nav>

    <style>
        .nav-link:hover {
            background-color: gold;
        }
    </style>

    <body>
    <div class="row no-gutters mt-5">
        <div class="sidebar bg-dark  mt-2 pr-4 pt-5">
            <ul class="nav flex-column ml-4 mb-5">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="../index.php"><i class="fas fa-pager mr-2"></i>Halaman Utama</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../transaksi/listtransaksi.php"><i class="fas fa-sticky-note mr-2"></i>Data laundry</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../pelanggan/listpelanggan.php"><i class="fab fa-intercom mr-2"></i>Data Pelanggan</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../pegawai/listpegawai.php"><i class="fas fa-user-tag mr-2"></i>Data Pegawai</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="listjenis.php"><i class="fas fa-tshirt mr-2"></i>Jenis Layanan</a>
                    <hr class="bg-secondary">
                </li>

            </ul>
        </div>
        <div class="utama">
        <h3 <i class="fas fa-tshirt ml-5 mt-5"></i>JENIS LAYANAN</h3>
        <div class="tombol">
            <a href="formjenis.php"><button type="submit" class="btn btn-primary ml-5 mt-1">Tambah Layanan</button></a>
        </div>
        <table class="table table-bordered ml-5 mt-3">
            <thead>
                <tr>
                <th scope="col">KODE JENIS</th>
                <th scope="col">JENIS LAYANAN</th>
                <th scope="col">HARGA</th>
                <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM tb_jenis";
                $query = mysqli_query($db,$sql);

                while($jenis = mysqli_fetch_array($query)){
                ?>

                <tr>
                    <td><?php echo $jenis['id_jenis'] ?></td>
                    <td><?php echo $jenis['jenis_layanan'] ?></td>
                    <td><?php echo $jenis['harga'] ?></td>
                    <td class="text-center">
                        <a href="editjenis.php?id=<?php echo $jenis['id_jenis'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapusjenis.php?id=<?php echo $jenis['id_jenis'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                    </td>
                </tr>

                <?php } ?>
            </tbody>
        </table>
        
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="admin.js"></script>
    </body>
</html>