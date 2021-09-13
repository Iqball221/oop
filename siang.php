<?php
class ucapan
{
    public function siang()
    {
        return "Hai selamat siang";
    }

    public function sore()
    {
        return "Hai selamat sore";
    }

    public function __construct()
    {
        echo "Selamat pagi <br>";
    }
}

$selamat = new Ucapan();
echo $selamat->siang() . "<br>";
echo $selamat->sore();
