<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Pelanggan</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH PELANGGAN
            </div>
            <div class="card-body">
              <form action="simpanpelanggan.php" method="POST">
                
              
                <div class="form-group">
                  <label>Nama Pelanggan</label>
                  <input type="text" name="namapelanggan" placeholder="Masukkan Nama Pelanggan" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" placeholder="Masukkan Alamat" class="form-control">
                </div>

                <div class="form-group">
                  <label>NO Telepon</label>
                  <input type="text" name="nohp" class="form-control">
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

