<?php
class produk{
            public  $merk,
                    $warna,
                    $harga;
// construct adalah unutk menyederhanakan property yang kita buat dalamm object
    public function __construct($merk="merk",$warna="warna",$harga=0){
        $this->merk = $merk;
        $this->warna = $warna;
        $this->harga= $harga;
    }
    public function ulfa(){
        return "merk :$this->merk, warna :$this->warna, harga :$this->harga";
    }
    // jka tanpa inherintance
    public function ulfalengkap(){
        $rky ="{$this->merk} : {$this->warna} : {$this->harga}";
            return $rky;
        }   
}
//inherintance :
// child class produk
class tas extends produk{
    public $garansi;
    public function __construct($merk="merk",$warna="warna",$harga=0,$garansi=0){
        parent::__construct($merk,$warna,$harga);
            $this->garansi = $garansi;
}
    public function ulfalengkap(){
        $rky ="tas : ". parent::ulfalengkap()." -{$this->garansi} garansi";
        return $rky;
    }
}
class mobil extends produk{
    public $car;
    public function __construct($merk="merk", $warna="warna", $harga=0, $car=0){
        parent::__construct($merk,$warna,$harga);
        $this->car=$car;
    }
    public function ulfalengkap(){
        // menggunakan overridingg
        $rky ="mobil : ". parent::ulfalengkap()." -{$this->car} model";
        return $rky;
    }
}          
//ini yang disebut object type yang berbentuk array
class informasiProduk{
    public function info($produk){
        $rky= "{$produk->ulfa()}";
        return $rky;
    }
} 
// Object dari class-class diatas
$produk1= new tas("gucci","milo","2000000", "5 tahun");
$produk2= new mobil("ferarri","red","1m", "f2022");


echo $produk1->ulfa();
echo"<br>";
echo $produk1->ulfalengkap();
echo"<br>";
echo $produk2->ulfalengkap();