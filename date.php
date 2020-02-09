<?php 

// Date
// Untuk menampilkan tanggal dengan format tertentu
echo date ("l, d-M-Y");
echo "<hr>";

// Time
// UNIX Timestamp / EPOCH Time
// detik yang sudah berlalu sejak 1 januari
echo time();
echo "<hr>";

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
// kebalikan mktime
echo date("l", strtotime("27 march 2001"));
echo "<hr>";



?>