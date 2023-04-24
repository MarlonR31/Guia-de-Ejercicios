<!--- EJERCICIO 2: Crear un codigo que permita evaluar la temperatura en grados centigrados.
Temperatura <= 0 Imprimir en color azul el texto "Temperatura maxima FRIA" 
Temperatura <= 30 Imprimir en color amarrillo del texto "Temperatura Estable"
Temperatura >= 31 Imprimir en color rojo del texto "Temperatura Caliente"-->
<?php

echo "<a href = './index.php'>" . "<button = ''> Inicio" . "</button = ''>" . "</a>";
class Termometro
{
    public $temperatura;
    public function __construct($_temperatura)
    {
        $this->temperatura = $_temperatura;
    }

    public function operacion()
    {
        if ($this->temperatura <= 0)
        {
            echo  "<b>" . "Su temperatura es de " . "<font Color = 'Blue'>" . "TEMPERATURA MAXIMA FRIA" ;
        }
        else if ($this->temperatura <= 30)
        {
            echo  "<b>" . "Su temperatura es de " . "<font Color = 'yellow'>" . "TEMPERATURA ESTABLE" ;
        }
        else if ($this->temperatura >= 31)
        {
            echo  "<b>" . "Su temperatura es de " . "<font Color = 'red'>" . "TEMPERATURA CALIENTE" ;
        }
    }
}
echo "<h3> Su temperatura es de " . $_POST["temperatura"] . " grados <br> </h3>";
$temperatura_ambiente = new Termometro($_POST['temperatura']);
$temperatura_ambiente->operacion();
?>