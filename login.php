<?php

class orangtua
{
    protected $noatm = "2121,0808,2911,2004";
    private $pinatm = "2904";

    public function noatm()
    {
        return $this->noatm;
    }
    public function pinatm()
    {
        return $this->pinatm;
    }
}
class anak extends orangtua
{
    public function noatm()
    {
        return $this->noatm;
    }

}

$orangtua = new orangtua();
$anak = new anak();

//ingin mengetahui data atm dari object orang tua
echo "no kartu atm BCA: " . $orangtua->noatm() . "<br>";
echo "pin kartu atm BCA : " . $orangtua->pinatm() . "<br>";

//anak ingin mengetahui data atm dari class orang tua

 