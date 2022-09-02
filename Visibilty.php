<?php
// visibilty adalah konsep yang diugnakan untuk mengatur akses dari property dan method.
class produk{
    // keyword PUBLIC bisa di akses dimana saja(diluar class)
            public  $merk;
    //keyword PRIVATE hanya bisa di akses di classnya sendiri hihihi tdk bisa di akses diluar class meskipun child classnya,                
            private   $warna;
    //nah kalokk keyword ini alias protected itu juga ngk bisa diakses diluar class tapi bedanya sama private class, protected bisa diakses dalam childnya.
            protected   $harga,
                        $diskon=0;
// construct adalah unutk menyederhanakan property yang kita buat dalamm object
    public function __construct($merk="merk",$warna="warna",$harga=0){
        $this->merk = $merk;
        $this->warna = $warna;
        $this->harga= $harga;
    }
    // nah kalok ini di set dengan visibility private makanya di tarok diclassnya sendiri karena kalok di letakkan diluar class, dia tidak mengeksekusi dan error 
    public function getwarna(){
        return $this->warna;
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
// ini di set dengan visibilty protected, makanya bisa di akses di childnyaa
public function setdiskon($diskon){
    return $this->diskon =$diskon;

}
// sama juga dengan ini;
public function getharga(){
    return $this->harga-($this->harga*$this->diskon/100);
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


// Object dari class-class diatas
$produk1= new tas("gucci","milo","2000000", "5 tahun");
$produk2= new mobil("ferarri","red","1m", "f2022");


echo $produk1->ulfalengkap();
echo"<br>";
echo $produk2->ulfalengkap();
echo"<hr>";
$produk1->setdiskon(50);
echo$produk1->getharga();
echo"<br>";
echo$produk1->getwarna();
echo "<br>";
