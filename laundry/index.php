<?php
include('koneksi.php')
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


    <title>Halaman Admin | Laundry</title>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
    <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN <b>| LAUNDRY</b></a>
    </div>
</nav>

<style>
    .card-body-icon{
        position: absolute;
        z-index: 0;
        top: 25px;
        right: 4px;
        opacity: 0.4;
        font-size: 90px;
    }

    .nav-link:hover {
    background-color: gold;
    }

    .display-4 {
    font-weight: bold;
    }
</style>

<div class="row no-gutters mt-5">
    <div class="sidebar bg-dark  mt-2 pr-4 pt-5">
        <ul class="nav flex-column ml-4 mb-5">
            <li class="nav-item">
                <a class="nav-link active text-white" href="index.php"><i class="fas fa-pager mr-2"></i>Halaman Utama</a>
                <hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="transaksi/listtransaksi.php"><i class="fas fa-sticky-note mr-2"></i>Data laundry</a>
                <hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="pelanggan/listpelanggan.php"><i class="fab fa-intercom mr-2"></i>Data Pelanggan</a>
                <hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="pegawai/listpegawai.php"><i class="fas fa-user-tag mr-2"></i>Data Pegawai</a>
                <hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="jenis/listjenis.php"><i class="fas fa-tshirt mr-2"></i>Jenis Layanan</a>
                <hr class="bg-secondary">
            </li>

        </ul>
    </div>
    <div class="utama">
        <h3 <i class="fas fa-pager ml-5 mt-5 pr-3">
            </i>Dashboard</h3>
            <div class="row text-white ml-5 mt-3">
            <div class="card bg-info" style="width: 18rem;">
                <div class="card-body">
                    <div class="card-body-icon"><i class="fab fa-intercom mr-2"></i></div>
                    <h5 class="card-title">JUMLAH PELANGGAN</h5>
                    <div class="display-4">
                        <?php
                            include('koneksi.php');
                            $sql = "SELECT *FROM tb_pelanggan";
                            $query = mysqli_query($db,$sql);
    
                            ?>
                            <p>
                                <?php echo mysqli_num_rows($query)?>
                            </p>
                    </div>
                    <a href="pelanggan/listpelanggan.php">
                        <p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right
                                ml-2"></i></p>
                    </a>

                </div>
            </div>

            <div class="card bg-success  ml-3" style="width: 18rem;">
                <div class="card-body">
                    <div class="card-body-icon"><i class="fas fa-user-tag mr-2"></i></div>
                    <h5 class="card-title">JUMLAH PEGAWAI</h5>
                    <div class="display-4">
                        <?php
                            include('koneksi.php');
                            $sql = "SELECT *FROM tb_pegawai";
                            $query = mysqli_query($db,$sql);
    
                            ?>
                            <p>
                                <?php echo mysqli_num_rows($query)?>
                            </p>
                    </div>
                    <a href="pegawai/listpegawai.php">
                        <p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right
                                ml-2"></i></p>
                    </a>

                </div>
            </div>

            <div class="card bg-danger ml-3" style="width: 18rem;">
                <div class="card-body">
                    <div class="card-body-icon"><i class="fas fa-tshirt mr-2"></i></div>
                    <h5 class="card-title">JUMLAH JENIS LAYANAN</h5>
                    <div class="display-4">
                        <?php
                            include('koneksi.php');
                            $sql = "SELECT *FROM tb_jenis";
                            $query = mysqli_query($db,$sql);
    
                            ?>
                            <p>
                                <?php echo mysqli_num_rows($query)?>
                            </p>
                    </div>
                    <a href="jenis/listjenis.php">
                        <p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right
                                ml-2"></i></p>
                    </a>

                </div>
            </div>

            <div class="card bg-success ml-3" style="width: 18rem;">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="fas fa-sticky-note mr-2"></i>
                    </div>
                    <h5 class="card-title">JUMLAH DATA LAUNDRY</h5>
                    <div class="display-4">
                        <?php
                            include('koneksi.php');
                            $sql = "SELECT *FROM tb_transaksi";
                            $query = mysqli_query($db,$sql);
    
                            ?>
                            <p>
                                <?php echo mysqli_num_rows($query)?>
                            </p>
                    </div>
                    <a href="transaksi/listtransaksi.php">
                        <p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right
                                ml-2"></i></p>
                    </a>

                </div>
            </div>
        </div>

        

    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="admin.js"></script>

</body>

</html>