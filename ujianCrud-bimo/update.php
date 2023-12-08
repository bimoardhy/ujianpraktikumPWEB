<?php
include "db_conn.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
  $nama_barang = $_POST['nama_barang'];
  $qty = $_POST['qty'];
  $tgl_masuk = $_POST['tgl_masuk'];
  $tgl_keluar = $_POST['tgl_keluar'];
  $harga = $_POST['harga'];

  $sql = "UPDATE `tb_barang` 
  SET 
  `nama_barang`='$nama_barang',
  `qty`='$qty',
  `tgl_masuk`='$tgl_masuk',
  `tgl_keluar`='$tgl_keluar',
  `harga`='$harga' 
  WHERE id = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: index.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="style-form.css" type="text/css">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>UJIAN PWEB</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5">
    UJIAN PRAKTIKUM
  </nav>

  <div class="container">
    <div class="text-center mb-4">
      <h3>Edit barang</h3>
      <p class="text-muted">Klik update setelah mengubah data barang</p>
    </div>

    <?php
    $sql = "SELECT * FROM `tb_barang` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">Nama barang:</label>
            <input type="text" class="form-control" name="nama_barang" value="<?php echo $row['nama_barang'] ?>">
          </div>

          <div class="col">
            <label class="form-label">Quantity</label>
            <input type="text" class="form-control" name="qty" value="<?php echo $row['qty'] ?>">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Tanggal Masuk</label>
          <input type="text" name="tgl_masuk" value="2023-01-01" min="2000-01-01" max="2023-12-31" value="<?php echo $row['tgl_masuk'] ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Tanggal Keluar</label>
          <input type="text" name="tgl_keluar" value="2023-01-01" min="2000-01-01" max="2023-12-31" value="<?php echo $row['tgl_keluar'] ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Harga</label>
          <input type="text" class="form-control" name="harga" value="<?php echo $row['harga'] ?>">
        </div>

    
        <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <div class="teks-bawah">
  <a>Moch Bimo Ardhy - 51421613</a>
  </div>
  
</body>

</html>