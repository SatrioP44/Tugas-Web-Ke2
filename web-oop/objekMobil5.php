<?php
    require_once "Mobil5.php";

    $mobilSatu = new Mobil5();
    $mobilSatu->nama;
    $mobilSatu->merk="Baluun";
    $mobilSatu->warna=null;
    $mobilSatu->tahun=1998;
    $mobilSatu->kecepatanMaksimal=999;
    
    echo "Nama : $mobilSatu->nama" . PHP_EOL;
    echo "Merk : $mobilSatu->merk" . PHP_EOL;
    echo "Warna : $mobilSatu->warna" . PHP_EOL;
    echo "Tahun : $mobilSatu->tahun" . PHP_EOL;
    echo "Kecepatan Maksimal : $mobilSatu->kecepatanMaksimal" . PHP_EOL;
    
    $mobilSatu->tambahKecepatan();
    $mobilSatu->infoMobil("Xenia");
    echo Mobil5::AUTHOR;
?>