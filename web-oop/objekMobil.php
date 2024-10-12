<?php
require_once "Mobil.php";

$mobilSatu = new Mobil("Bajai", "TigaRoda", 1999);
$mobilDua = new Mobil("Brio", null, 2020);

echo $mobilSatu->infoMobil() . PHP_EOL;
echo $mobilDua->infoMobil();
?>