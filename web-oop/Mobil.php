<?php
class Mobil{
    var String $nama;
    var ?String $merk = null;
    var int $tahun;
    
    public function __construct(String $nama, ?String $merk, int $tahun){
        $this->nama = $nama;
        $this->merk = $merk;
        $this->tahun = $tahun;
    }

    public function infoMobil() {
        return "$this->nama, $this->merk, $this->tahun";
    }
}
?>