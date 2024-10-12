<?php
    class Mobil4{
        var ? String $nama = "Avanza";
        var String $merk;
        var ? String $warna = null;
        var int $tahun;
        var int $kecepatanMaksimal;

        function infoMobil(? String $nama){
            if(is_null($nama)){
                echo "Nama mobil adalah {$this->nama}" . PHP_EOL;
            }
            else{
                echo "Mobil anda adalah $nama" . PHP_EOL;
            }
        }
    }
?>