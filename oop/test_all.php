<?php
require_once 'init_autoload.php';

echo "<h3>Uji Komik & Game</h3>";
$komik = new Komik("Naruto", "Masashi Kishimoto", 40000, 100);
$game = new Game("GTA V", "Rockstar", 250000, 60);
echo $komik->getInfoProduk() . "<br>";
echo $game->getInfoProduk() . "<br><br>";

echo "<h3>Uji Static</h3>";
ContohStatic::tambah();
ContohStatic::tambah();
echo "Nilai static: " . ContohStatic::$angka . "<br><br>";

echo "<h3>Uji Constant</h3>";
echo CobaConstant::NAMA . "<br><br>";

echo "<h3>Uji Abstract</h3>";
$cat = new Cat();
echo $cat->run();
