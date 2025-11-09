<?php
require_once 'Produk.php';

class Game extends Produk
{
    private $waktuMain;

    public function __construct($judul, $penulis, $harga, $waktuMain)
    {
        parent::__construct($judul, $penulis, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        return parent::getInfoProduk() . " - Game, waktu main {$this->waktuMain} jam.";
    }
}
