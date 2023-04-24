<?php
class Recargas
{
    public $numBalas1 = 0;
    public $arma1 = 0;
    public function __construct($_numBalas1)
    {
        $this->numBalas1 = $_numBalas1;
    }

    public function recarga()
    {
        $arma1 = $this->arma1 + $this->numBalas1;;
        echo "La Ametralladora tiene " . $arma1 . " balas" . "<br>";
    }
}

$darBalas = new Recargas($_POST["numBalas1"]);
$darBalas->recarga();
?>
