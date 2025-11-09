<?php
class Rumah
{
    public $warna;
    public $jumlahKamar;
    public $alamat;

    // Constructor
    public function __construct($warna = "putih", $jumlahKamar = 2, $alamat = "Tidak diketahui")
    {
        $this->warna = $warna;
        $this->jumlahKamar = $jumlahKamar;
        $this->alamat = $alamat;
    }

    public function kunciPintu()
    {
        return "Pintu rumah dikunci.";
    }

    public function nyalakanLampu()
    {
        return "Lampu rumah dinyalakan.";
    }

    public function gantiCat($warnaBaru)
    {
        $this->warna = $warnaBaru;
        return "Warna rumah diganti menjadi {$this->warna}.";
    }
}
