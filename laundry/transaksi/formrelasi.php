<?php
include("../koneksi.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Data</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH DATA TRANSAKSI
            </div>
            <div class="card-body">
              <form action="simpanrelasi.php" method="POST">
                
              <label>NAMA PELANGGAN</label>
              <select class="form-control" name="namapelanggan">
                <option value="">Pilih Nama </option>
                <?php
                $np = mysqli_query($db, "SELECT *FROM tb_pelanggan") or die (mysqli_error($db));
                while ($pelanggan = mysqli_fetch_array($np)){
                  echo '<option value="'.$pelanggan['id_pelanggan'].'">'.$pelanggan['nama_pelanggan'].'</option>';
                }
                ?>
              </select>

              <div class="form-group">
                <label>BERAT</label>
                <input type="text" name="berat" class="form-control">
              </div>
                
              <label>JENIS LAYANAN</label>
              <select class="form-control" name="jenislayanan">
                <?php
                $np = mysqli_query($db, "SELECT *FROM tb_jenis") or die (mysqli_error($db));
                while ($jenis = mysqli_fetch_array($np)){
                  echo '<option value="'.$jenis['id_jenis'].'">'.$jenis['jenis_layanan'].'</option>';
                }
                ?>
              </select>

              <label>NAMA PETUGAS</label>
              <select class="form-control" name="namapetugas">
                <option value="">Pilih Nama </option>
                <?php
                $np = mysqli_query($db, "SELECT *FROM tb_pegawai") or die (mysqli_error($db));
                while ($pegawai = mysqli_fetch_array($np)){
                  echo '<option value="'.$pegawai['id_pegawai'].'">'.$pegawai['nama_pegawai'].'</option>';
                }
                ?>
              </select>

              <div class="form-group">
                <label>HARGA</label>
                <select class="form-control" name="harga">
                  <?php
                    $np = mysqli_query($db, "SELECT *FROM tb_jenis") or die (mysqli_error($db));
                    while ($jenis = mysqli_fetch_array($np)){
                      echo '<option value="'.$jenis['id_jenis'].'">'.$jenis['harga'].'</option>';
                    }
                    ?>
                </select>  
              </div>
                
                <div class="form-group">
                  <label>TANGGAL KELUAR</label>
                  <input type="text" name="tanggal" class="form-control">
                </div>
                <button type="submit" name="simpan" class="btn btn-success">SIMPAN</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>

