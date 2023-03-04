<?php

  $customer = $_POST["customer"];
  $produk = $_POST["produk"];
  $jumlah = $_POST["jumlah"];
  $total_belanja;
  
  switch($produk) {
    case "TV":
      $total_belanja = 4200000 * $jumlah;
      break;
    case "Kulkas":
      $total_belanja = 3100000 * $jumlah;
      break;
    case "Mesin Cuci":
      $total_belanja = 3800000 * $jumlah;
      break;
    default:
      $total_belanja = 0;
      break;
  }
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <title>Form Belanja</title>
</head>

<body>
  <div class="container-fluid">
    <div class="p-4">
      <div class="row">
        <div class="col-md-8">
          <h2 class="pb-2">Belanja Online</h2>
          <form class="pt-4 pb-4 border-top border-bottom" method="POST" action="form_belanja.php">
            <div class="form-group row">
              <label for="customer" class="col-4 col-form-label">Customer</label>
              <div class="col-8">
                <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-4">Pilih Produk</label>
              <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" required>
                  <label for="produk_0" class="custom-control-label">TV</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas" required>
                  <label for="produk_1" class="custom-control-label">KULKAS</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci" required>
                  <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
              <div class="col-8">
                <input id="jumlah" name="jumlah" placeholder="Jumlah" type="number" class="form-control" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-success">Kirim</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-4">
          <ul class="list-group">
            <li class="list-group-item active" aria-current="true">Daftar Harga</li>
            <li class="list-group-item">TV : 4.200.000</li>
            <li class="list-group-item">Kulkas : 3.100.000</li>
            <li class="list-group-item">MESIN CUCI : 3.800.000</li>
            <li class="list-group-item active" aria-current="true">Harga Dapat Berubah Setiap Saat</li>
          </ul>
        </div>
      </div>
      <div class="row pt-4">
        <div class="col-md-2">
          <p>Nama Customer</p>
          <p>Produk Pilihan</p>
          <p>Jumlah Beli</p>
          <p>Total Belanja</p>
        </div>
        <div>
          <p>: <?= $customer ?></p>
          <p>: <?= $produk ?></p>
          <p>: <?= $jumlah ?></p>
          <p>: <?= 'Rp '.strrev(implode('.',str_split(strrev(strval($total_belanja)),3))) ?></p>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>