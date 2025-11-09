<?php
require_once 'Rumah.php';

// Membuat objek rumah1
$rumah1 = new Rumah("biru", 3, "Jalan Daffodil No. 37");

// Membuat objek rumah2
$rumah2 = new Rumah("hijau", 2, "Jalan Red Velvet No. 5");

echo "<h2>Data Rumah</h2>";

echo "<b>Rumah 1</b><br>";
echo "Warna: {$rumah1->warna}<br>";
echo "Jumlah kamar: {$rumah1->jumlahKamar}<br>";
echo "Alamat: {$rumah1->alamat}<br>";
echo $rumah1->kunciPintu() . "<br>";
echo $rumah1->nyalakanLampu() . "<br><br>";

echo "<b>Rumah 2</b><br>";
echo "Warna: {$rumah2->warna}<br>";
echo "Jumlah kamar: {$rumah2->jumlahKamar}<br>";
echo "Alamat: {$rumah2->alamat}<br>";
echo $rumah2->gantiCat('merah') . "<br>";
echo "Warna sekarang: {$rumah2->warna}<br>";
