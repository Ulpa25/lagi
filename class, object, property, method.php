<?php
// membuat penjualan produk
// sepatu tass baju

// class mendifinisikan object yang menyimpan data dan perilaku atau bisa juga disebut dengan property dan method
class produk{
    // ini adalah property
    // public ini adalah visibility yang ada 3 (public, private, dan protective)
    public  $nama_barang = "nama_barang",
            $berat = "berat",
            $stok = "stok",
            $harga = 0;
    

    public function penjualan() {
        return "$this->nama_barang, $this->harga";
    }
}
// object intance yang didefinisikan oleh class untuk membuatnya dengan menggunakan keyword new

$produk1 = new produk();
$produk1-> nama_barang="sepatu_gucci";
$produk1-> berat="23kg";
$produk1-> stok="300";
$produk1-> harga= 3000000;

echo "nama produk : ", $produk1->penjualan();

















?>