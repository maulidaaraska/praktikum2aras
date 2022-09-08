<?php
require('SiswaRpl.php');
$Siswa3 = new SiswaRpl();
$Siswa3->IsiData("K4161","Windy","2005","Jakarta");
$Siswa3->CetakData();
$Siswa3->JudulLaporan("Laporan PKL MUI");
$Siswa3->CetakData();
?>