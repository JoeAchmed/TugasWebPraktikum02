<?php
// buat class bmiPasien

class PersegiPanjang
{
  // tulis property dan method
  public $lebar, $panjang;
  // bikin method construc
  public function __construct($lebar, $panjang)
  {
    // akses property
    $this->lebar = $lebar;
    $this->panjang = $panjang;
  }

  public function hitungKeliling()
  {
    return 2 * ($this->panjang + $this->lebar);
  }

  public function hitungLuas()
  {
    return $this->panjang * $this->lebar;
  }
}
