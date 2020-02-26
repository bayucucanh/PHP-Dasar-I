<?php 

// Date
// Untuk menampilkan tanggal dengan format tertentu
// l (nama hari h), D/d (day/day dlm angka), j(day angka tanpa 0), M/m (month/dalam angka), Y (year/dalam angka)

echo date ("l, d-M-Y");
echo "<hr>";

// Time
// UNIX Timestamp / EPOCH Time (asal mula waktu di dunia komputer)
// detik yang sudah berlalu sejak 1 januari 1970
echo time();
echo "<hr>";

// cara mengetahui waktu kebelakang (-), kedepan (+)
// 60 (detik), 60 (jam), 24 (1 hari), 100 (mengetahui 100 hari kedepan/kebelakang)
echo date ("d-M-Y", time()-60*60*24*100); 
echo "<hr>";

// mktime
// membuat sendiri detik
// mktime(jam, menit, detik, bulan, tanggal, tahun)
echo mktime(0,0,0,3,27,2001);
echo "<hr>";

echo date ( "l", mktime(0,0,0,3,27,2001));
echo "<hr>";

// strtotime
// kebalikan mktime karna memasukannya string
echo date("l", strtotime("27 march 2001"));
echo "<hr>";



?>
