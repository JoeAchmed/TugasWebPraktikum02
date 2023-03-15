<?php 

// Buat fungsi hitung umur
function hitungUmur($thn_lahir) {
  $thn_sekarang = 2023;

  $umur = $thn_sekarang = 2023;
  // hitung umur
  $umur = $thn_sekarang - $thn_lahir;

  return $umur;
}

echo hitungUmur(1995);

?>