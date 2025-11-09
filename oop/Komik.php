<?php
require_once 'Produk.php';

class Komik extends Produk
{
    private $jmlHalaman;

    public function __construct($judul, $penulis, $harga, $jmlHalaman)
    {
        parent::__construct($judul, $penulis, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        return parent::getInfoProduk() . " - Komik, {$this->jmlHalaman} halaman.";
    }
}
