<?php
// buat class bmiPasien

class BmiPasien
{
  // tulis property dan method
  public $nama, $berat, $tinggi, $umur, $jk;
  // bikin method construc
  public function __construct($nama, $berat, $tinggi, $umur, $jk)
  {
    // akses property
    $this->nama = $nama;
    $this->berat = $berat;
    $this->tinggi = $tinggi;
    $this->umur = $umur;
    $this->jk = $jk;
  }

  // bikin method hasil bmi
  public function hasilBmi()
  {
    // tinggi dalam meter
    $tinggi_m = $this->tinggi / 100;

    // rumus bmi
    $bmi = $this->berat / ($tinggi_m * $tinggi_m);

    return round($bmi);
  }

  // bikin method status
  public function statusBmi()
  {
    $bmi = $this->hasilBmi();

    if ($bmi < 18.5) {
      return "Kekurangan Berat Badan";
    } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
      return "Berat Badan Normal (Ideal)";
    } elseif ($bmi >= 25 && $bmi <= 29.9) {
      return "Kelebihan Berat Badan";
    } else {
      return "Kegemukan (Obesitas)";
    }
  }
}
// inisiasi object class
// $pasien = new BmiPasien("Ahmad Waluyo", 80, 178, 28, "Laki-laki");
// // menampilkan isi property class
// echo $pasien->nama . "<br>";
// echo $pasien->berat . "<br>";
// echo $pasien->hasilBmi(). "<br>";
// echo $pasien->statusBmi();
