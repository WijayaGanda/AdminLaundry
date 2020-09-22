<?php
include("../koneksi.php");
$id = $_GET['id'];
$sql = "SELECT * FROM tb_jenis WHERE id_jenis=$id LIMIT 1";
$query = mysqli_query($db,$sql);
$jenis = mysqli_fetch_array($query);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Layanan</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT LAYANAN
            </div>
            <div class="card-body">
              <form action="prosesedit.php" method="POST">
                
                <div class="form-group">
                  <label>Jenis Layanan</label>
                  <input type="text" name="jenis" value="<?php echo $jenis['jenis_layanan'] ?>" class="form-control">
                  <input type="hidden" name="id_jenis" value="<?php echo $jenis['id_jenis'] ?>" />
                </div>

                <div class="form-group">
                  <label>Harga</label>
                  <input type="text" name="harga" value="<?php echo $jenis['harga'] ?>"class="form-control">
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