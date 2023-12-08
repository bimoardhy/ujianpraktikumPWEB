<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $nama_barang = $_POST['nama_barang'];
   $qty = $_POST['qty'];
   $tgl_masuk = $_POST['tgl_masuk'];
   $tgl_keluar = $_POST['tgl_keluar'];
   $harga = $_POST['harga'];

   $sql = "INSERT INTO `tb_barang`(`id`, `nama_barang`, `qty`, `tgl_masuk`, `tgl_keluar`,`harga`) VALUES (NULL,'$nama_barang','$qty','$tgl_masuk','$tgl_keluar','$harga')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=New record created successfully");
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

   <link rel="stylesheet" href="style-from.css" type="text/css">
   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>UJIAN PWEB</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5">
      Ujian Praktikum
   </nav>

   <div class="container">
      <div class="text-center mb-4">
         <h3>Tambah Barang</h3>
         <p class="text-muted">Isi Data Barang pada Form dibawah</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Nama barang</label>
                  <input type="text" class="form-control" name="nama_barang" placeholder="">
               </div>

               <div class="col">
                  <label class="form-label">Quantity</label>
                  <input type="text" class="form-control" name="qty" placeholder="">
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Tanggal Masuk</label>
               <input type="date" name="tgl_masuk" value="2023-01-01" min="2000-01-01" max="2023-12-31" placeholder="2023-10-27">
            </div>

            <div class="mb-3">
               <label class="form-label">Tanggal Keluar</label>
               <input type="date" name="tgl_keluar" value="2023-01-01" min="2000-01-01" max="2023-12-31" placeholder="2023-10-31">
            </div>

            <div class="mb-3">
                  <label class="form-label">Harga</label>
                  <input type="text" class="form-control" name="harga" placeholder="Rp.10.000.000">
               </div>


            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
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