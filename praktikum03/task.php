<?php
$ar_prodi = ["SI" => "Sistem Informasi", "TI" => "Teknik Informatika", "BD" => "Bisnis Digital"];
$ar_skill = ["HTML" => 10, "CSS" => 10, "Javascript" => 20, "RWD Bootstrap" => 20, "PHP" => 30, "Python" => 30, "Java" => 20];
$ar_domisili = ["Jakarta", "Bogor", "Depok", "Tanggerang", "Bekasi", "Lainnya"];
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Tugas 3 Praktikum Web</title>
  <style>
    :root {
      --border-bold: 2px solid black;
      --rounded: 8px;
    }

    .bg-registration {
      border: var(--border-bold);
      border-radius: var(--rounded);
      background-color: beige;
    }

    .bg-info-regist {
      border: var(--border-bold);
      border-radius: var(--rounded);
    }
  </style>
</head>

<body>
  <div class="container p-3">

    <fieldset class="p-4 bg-registration">
      <legend>
        <h2>Form Registrasi IT Club Data Science</h2>
      </legend>
      <form method="POST" action="task.php">
        <div class="form-group row">
          <label for="nim" class="col-4 col-form-label">NIM</label>
          <div class="col-8">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-adn"></i>
                </div>
              </div>
              <input id="nim" name="nim" type="number" class="form-control">
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
          <div class="col-8">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-address-book"></i>
                </div>
              </div>
              <input id="nama" name="nama" type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4">Jenis Kelamin</label>
          <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
              <input name="jk" id="radio_0" type="radio" class="custom-control-input" value="L">
              <label for="radio_0" class="custom-control-label">Laki-Laki</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input name="jk" id="radio_1" type="radio" class="custom-control-input" value="P">
              <label for="radio_1" class="custom-control-label">Perempuan</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="select" class="col-4 col-form-label">Program Studi</label>
          <div class="col-8">
            <select id="prodi" name="prodi" class="custom-select">
              <?php
              foreach ($ar_prodi as $key => $value) {
                echo '<option key="' . $key . '" value="' . $key . '">' . $value . '</option>';
              }
              ?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-4">Skill Web & Programming</label>
          <div class="col-8">
            <?php
            foreach ($ar_skill as $key => $value) {
              echo '<div class="custom-control custom-checkbox custom-control-inline">
                <input name="skills[]" id="skills[]_' . $key . '" type="checkbox" class="custom-control-input" value="' . $key . '">
                <label for="skills[]_' . $key . '" class="custom-control-label">' . $key . '</label>
              </div>';
            }
            ?>
          </div>
        </div>
        <div class="form-group row">
          <label for="select1" class="col-4 col-form-label">Domisili</label>
          <div class="col-8">
            <select id="domisili" name="domisili" class="custom-select">
              <?php
              foreach ($ar_domisili as $key => $value) {
                echo '<option key="' . $key . '" value="' . $value . '">' . $value . '</option>';
              }
              ?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="text" class="col-4 col-form-label">Email</label>
          <div class="col-8">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-gg-circle"></i>
                </div>
              </div>
              <input id="email" name="email" type="email" class="form-control">
            </div>
          </div>
        </div>
        <div class="form-group row">
          <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
    </fieldset>

    <hr>

    <?php

    function skor_skill($skills)
    {
      $skor = 0;

      foreach ($skills as $s) {
        switch ($s) {
          case 'HTML':
            $skor += 10;
            break;
          case 'CSS':
            $skor += 10;
            break;
          case 'Javascript':
            $skor += 20;
            break;
          case 'Bootstrap':
            $skor += 20;
            break;
          case 'PHP':
            $skor += 30;
            break;
          case 'Python':
            $skor += 30;
            break;
          case 'Java':
            $skor += 50;
            break;
          default:
            $skor += 0;
            break;
        }
      }

      return $skor;
    }

    function category_skill($skor)
    {
      $category = "";
      if ($skor > 100 && $skor <= 150) {
        $category = "Sangat Baik";
      } elseif ($skor > 60 && $skor <= 100) {
        $category = "Baik";
      } elseif ($skor > 40 && $skor <= 60) {
        $category = "Cukup";
      } elseif ($skor > 0 && $skor <= 40) {
        $category = "Kurang";
      } elseif ($skor == 0) {
        $category = "Tidak Memadai";
      } else {
        $category = "Tidak diketahui";
      }
      return $category;
    }

    if (isset($_POST["submit"])) {
      $nim = $_POST["nim"];
      $nama = $_POST["nama"];
      $jk = $_POST["jk"];
      $prodi = $_POST["prodi"];
      $skills = $_POST["skills"];
      $email = $_POST["email"];
      $domisili = $_POST["domisili"];

      // Buat skor
      $skor = skor_skill($skills);
      $kategory = category_skill($skor);

      echo "<div class='bg-info-regist p-3'>";
      echo "<h2 class='text-center my-3'>Informasi Peserta IT Club Data Science</h2>";
      echo "NIM : " . $nim;
      echo "<br> Nama Lengkap : " . $nama;
      echo "<br> Jenis Kelamin : " . $jk;
      echo "<br> Program Studi : " . $prodi;
      echo "<br> Skill : ". join(", ", $skills);
      echo "<br> Skor Skill : " . skor_skill($skills);
      echo "<br> Kategori Skill : " . category_skill($skor);
      echo "<br> Email : " . $email;
      echo "<br> Domisili : " . $domisili;
      echo "</div>";
    }

    ?>

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