<?php
//Buat Array
$animals = ["burung", "kucing", "nyamuk", "singa"];
echo $animals[1] . "<br>";

echo $animals[3] . "<br>";

foreach ($animals as $animal) {
    echo $animal . "<br>";
}

// Buat Array Asosiatif
$mahasiswa = ["nama"=>"Reyvaldo", "jurusan"=>"TI", "semester =>6"];
echo $mahasiswa["jurusan"] . "<br>";

// Nampilin Semua Data
foreach ($mahasiswa as $key=>$value){
    echo "key : " . $key . "Value : " . $value . "<br>";
}

// buat array multidemensi

$siswa = [
    ["alpian","TI"],
    ["asad", "lord"]
];

echo $siswa[0][0];

// 00 01 10 11 20 21
