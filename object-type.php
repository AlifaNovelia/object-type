<?php
class produk{
    public $namabarang,
           $merk,
           $harga;

     public function getcetak(){
         return "$this->merk,(Rp $this->harga)";
     }      
    public function __construct($namabarang="nama barang", $merk="merk", $harga=0){
        $this->namabarang = $namabarang;
        $this->merk = $merk;
        $this->harga = $harga;
    }
   
}
class cetakinfoproduk{
    public function cetakinfo($produk){
        $str="$produk->namabarang, $produk->merk, $produk->harga";
        return $str;    
    }
    }

$produk1 = new produk("idepad 310", "Lenovo", 7000000);
$produk2 = new produk("Flasdisk","Sandisk",100000);
$produk3 = new produk("Macbook air","Apple",25000000);
$produk4 = new produk("Mouse","logitech",120000);
$infoproduk = new cetakinfoproduk();

echo "Nama barang laptop: " . $produk1->getcetak();
echo "<br>";
echo "Nama barang laptop: " . $produk2->getcetak();
echo "<br>";
echo "Nama barang laptop: " . $produk3->getcetak();
echo "<br>";
echo "Nama barang aksesoris: " . $produk4->getcetak();
echo "<br>";
echo $infoproduk->cetakinfo($produk1);