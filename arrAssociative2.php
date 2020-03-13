<?php
// $mahasiswa = [
//     ["Bayu Cucan", "193040058", "bayucucan36@gmail.com ", "Teknik Informatika"],
//     ["Dadang Bedog", "193040001", "begogunity@gmail.com ", "Teknik Bacok"],
//     ["Usep Daniel", "193040002", "udaniel@gmail.com ", "Teknik Ngebon"]
// ];

// Array Associative
// key Adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Bayu Cucan",
        "nrp" => "193040058",
        "email" => "bayucucan36@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "cokcok.JPG"
    ],
    [
        "nama" => "Bayu Cucan",
        "nrp" => "193040058",
        "email" => "bayucucan36@gmail.com",
        "jurusan" => "Teknik Informatika" 
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Daftar Mahasiswa</h2>
<?php foreach($mahasiswa as $mhs1) : ?>
<ul>
    <li>
        <img src="img/<?= $mhs1["gambar"]; ?>">
    </li>
    <li>Nama    : <?= $mhs1["nama"]; ?></li>
    <li>nrp     : <?= $mhs1["nrp"]; ?></li>
    <li>Email   : <?= $mhs1["email"]; ?></li>
    <li>Jurusan : <?= $mhs1["jurusan"]; ?></li>
</ul>
<?php endforeach; ?>
</body>
</html>
