<?php
    require_once "Mobil2.php";

    $mobilSatu = new Mobil2();
    $mobilSatu->nama="TukTuk";
    $mobilSatu->merk="Roiroles";
    $mobilSatu->warna="UnguPink";
    $mobilSatu->tahun=1998;
    $mobilSatu->kecepatanMaksimal=999;

    echo "Nama : $mobilSatu->nama" . PHP_EOL;
    echo "Merk : $mobilSatu->merk" . PHP_EOL;
    echo "Warna : $mobilSatu->warna" . PHP_EOL;
    echo "Tahun : $mobilSatu->tahun" . PHP_EOL;
    echo "Kecepatan Maksimal : $mobilSatu->kecepatanMaksimal" . PHP_EOL;

    $mobilDua = new Mobil2();
    $mobilDua->nama="bambogini";
    $mobilDua->merk="kudagas";
    $mobilDua->warna="pinkcerah";
    $mobilDua->tahun=2045;
    $mobilDua->kecepatanMaksimal=18300;

    var_dump($mobilDua);
?>