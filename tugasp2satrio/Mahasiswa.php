<?php
class Mahasiswa{
    var String $nim;
    var String $nama;
    var String $jns_kelamin;
    var int $umur;
    var String $alamat;
    
    // Function contanct
    public function __construct(String $nim, String $nama, String $jns_kelamin, int $umur, String $alamat){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->jns_kelamin = $jns_kelamin;
        $this->umur = $umur;
        $this->alamat = $alamat;
        
    }

    // Function Info Mobil
    public function listMahasiswa(){
        return "
        Nim             : $this->nim
        Nama            : $this->nama
        Jenis Kelamin   : $this->jns_kelamin
        Umur            : $this->umur
        Alamat          : $this->alamat";
    }
}
?>