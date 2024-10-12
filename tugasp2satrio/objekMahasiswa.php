<?php
require_once "Mahasiswa.php";

$MahasiswaSatu = new Mahasiswa("23.240.0044", "Satrio", "Laki - Laki", 19, "Desa Wonosari");
$MahasiswaDua = new Mahasiswa("23.240.0049", "Ghilman", "Laki - Laki", 19, "Desa Gemek");
$MahasiswaTiga = new Mahasiswa("23.240.0042", "Ilham", "Laki - Laki", 20, "Desa Comal");
$MahasiswaEmpat = new Mahasiswa("23.240.0060", "Faiq", "Laki - Laki", 19, "Desa Kesesi");

echo $MahasiswaSatu->listMahasiswa() . PHP_EOL;
echo $MahasiswaDua->listMahasiswa() . PHP_EOL;
echo $MahasiswaTiga->listMahasiswa() . PHP_EOL;
echo $MahasiswaEmpat->listMahasiswa() . PHP_EOL;

?>