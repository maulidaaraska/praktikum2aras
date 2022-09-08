<?php
require ('Form.php');
Class Siswa{
    var $nis;
    public $nama;
    protected $tahun;
    protected $kota;

    //function __construct(){
        //$this->nis="K4131";
        //$this->nama="Maulida";
        //$this->tahun="2006";
        //$this->kota="Bogor";
        //$this->CetakData();
    //}

    function IsiData($nis,$nama,$tahun,$kota){
        $this->nis=$nis;
        $this->nama=$nama;
        $this->tahun=$tahun;
        $this->kota=$kota;
    }

    public function CetakData(){
        echo"NIS Siswa ".$this->nis."</br>";
        echo"Nama Siswa ".$this->nama."</br>";
        echo"Tahun Lahir Siswa ".$this->tahun."</br>";
        echo"Kota Asal Siswa ".$this->kota."</br>";
        echo"Umur Siswa ".$this->HitungUmur()."</br>";
    }

    protected function HitungUmur(){
        $umur=date('Y') - $this->tahun;
        return $umur;
    }

    public function InputForm(){
        $FormSiswa=new Form('','Input Siswa');
        $FormSiswa->AddField('nis','NIS Siswa');
        $FormSiswa->AddField('nama','Nama Siswa');
        $FormSiswa->AddField('tahun','Tahun Lahir Siswa');
        $FormSiswa->AddField('kota','Kota Asal Siswa');
        if(isset($_POST['tombol'])){
            $data=$formSiswa->GetData();
            $this->nis=$data[0];
            $this->nama=$data[1];
            $this->tahun=$data[2];
            $this->kota=$data[3];
            $this->CetakData();
        }
        else {
            $formSiswa->DisplayForm();
    }
}
}
?>