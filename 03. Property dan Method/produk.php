<?php


class produk {
    // Property
    public $judul = "Judul",
    $penulis = "Penulis",
    $penerbit = "Penerbit",
    $harga = 0 ;
    
    // public function sayHello () {
    //     return "Hello World!";
    // }

    // Method
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1 -> judul = "Rapunzel";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2 -> judul = "Frozen";
// $produk2 -> tambahProperty = "two";
// var_dump($produk2);

$produk3 = new Produk();
$produk3 -> judul = "Rapunzel";
$produk3 -> penulis = "Aupeeh";
$produk3 -> penerbit = "Hiru";
$produk3 -> harga = 50000;

// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo "<br>";
// echo $produk3->sayHello();

// echo $produk3->getLabel();
// echo "<hr>";

$produk4 = new Produk();
$produk4->judul = "Brave";
$produk4->penulis = "Yowi";
$produk4->penerbit = "Yomiya";
$produk4->harga = 60000;

echo "Komik: " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
?>