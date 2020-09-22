<?php
include("../koneksi.php");
$id = $_GET['id'];
$sql = "SELECT * FROM tb_pelanggan WHERE id_pelanggan=$id LIMIT 1";
$query = mysqli_query ($db, $sql);
$pelanggan = mysqli_fetch_assoc($query);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Pelanggan</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT PELANGGAN
            </div>
            <div class="card-body">
              <form action="prosesedit.php" method="POST">
                
                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama" value="<?php echo $pelanggan['nama_pelanggan'] ?>" class="form-control">
                  <input type="hidden" name="id_pelanggan" value="<?php echo $pelanggan['id_pelanggan'] ?>" />
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" value="<?php echo $pelanggan['alamat'] ?>" placeholder="Masukkan Alamat Pelanggan" class="form-control">
                </div>

                <div class="form-group">
                  <label>No Telepon</label>
                  <input type="text" name="nohp" value="<?php echo $pelanggan['no_telp'] ?>" placeholder="Masukkan Nomor telepon" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>

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