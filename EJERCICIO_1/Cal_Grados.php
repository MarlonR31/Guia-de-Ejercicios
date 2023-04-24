<!-- EJERCICIO 1: Crear un codigo que permita calcular grados centigrados en Fahrenheit-->

<?php  
echo "<a href = './index.php'>" . "<button = ''> Inicio" . "</button = ''>" . "</a>" . "<br>"; 
Class Calcular_Grados
{
    public $numGrados;
    public function __construct($_numGrados)
    {
        $this->numGrados = $_numGrados;
    }

    public function operacion()
    {
        $Resultado = ($this->numGrados * 1.8) + 32;
        echo $this->numGrados . " grados centígrados convertidos a Fahrenheit es igual a " . $Resultado . " grados Fahrenheit";
    }
}
echo "<h3> Calculadora de Grados" . "<br>" . "</b>" . "<br>";
$calcular_grados = new Calcular_Grados($_POST['numGrados']);
$calcular_grados->operacion();
?>