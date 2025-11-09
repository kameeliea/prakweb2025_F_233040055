<?php
class Produk
{
    private $judul;
    private $penulis;
    private $harga;

    public function __construct($judul, $penulis, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->harga = $harga;
    }

    // Getter
    public function getJudul()
    {
        return $this->judul;
    }
    public function getPenulis()
    {
        return $this->penulis;
    }
    public function getHarga()
    {
        return $this->harga;
    }

    // Setter
    public function setJudul($judul)
    {
        $this->judul = $judul;
    }
    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }
    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function getInfoProduk()
    {
        return "{$this->judul} | {$this->penulis} (Rp {$this->harga})";
    }
}
