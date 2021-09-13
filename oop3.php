<?php
class kucing
{
    public $warna = "coklat";
    public $jumlahkaki = 4;
    public $jenisbulu = "panjang";
    public $makananfavorit = "ikan pindang";

    public function __construct($warna)
    {
        $this->$warna = $warna;
    }

    public function bersuara()
    {
        return "meowng... meowng... meowng...";
    }

    public function berburu()
    {
        return "berburu ikan";
    }
}

$kucing1 = new kucing("Hitam");
echo "warna kucing 1: " . $kucing1->warna . "<br>";

$kucing2 = new kucing("Hijau");
echo "warna kucing 2: " . $kucing2->warna . "<br>";
