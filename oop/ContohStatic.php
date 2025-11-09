<?php
class ContohStatic
{
    public static $angka = 0;

    public static function tambah()
    {
        self::$angka++;
    }

    public static function getAngka()
    {
        return self::$angka;
    }
}
