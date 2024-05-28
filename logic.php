<?php 


class Rental {
    public $nama,
            $jenis,
            $diskon = 0.05,
            $namaMember,
            $waktuPeminjaman;
            
    protected $hargaJenis = [
        "beet" => 70000,
        "mio" => 80000,
        "suzuki" => 90000,
        "supra" => 50000
    ];

    protected $pajak = 10000;



    public function __construct($nama, $jenis,$diskon, $waktuPeminjaman,$namaMember = ['sobo','januar', 'dinda'])
    {
        $this->nama = $nama;
        $this->jenis = $jenis;
        $this->diskon = $diskon;
        $this->waktuPeminjaman = $waktuPeminjaman;
    }

    public function setPajak()
    {
        $this->pajak = 0.05;
    }



}

class Beli extends Rental {

    public function __construct($nama, $jenis, $waktuPeminjaman, $diskon = 0.05)
    {
        parent::__construct($nama, $jenis, $diskon, $waktuPeminjaman);
    }
 
    public function hargaBeli()
    {
        
         return $this->waktuPeminjaman * $this->hargaJenis[$this->jenis];
        
    }
    
    public function namaMember(){
        return in_array($this->nama, $this->namaMember);
    }


    
    public function setDiskon()
    {
        if(in_array($this->nama && $this->namaMember)){
            $diskonMember = 0.05; // Diskon khusus untuk member
            return ($this->hargaBeli() * ( $diskonMember + $this->pajak));
        }
    }
}

