<?php

class Jugar
{
    public $numero;
    public $dinero;

    public function __construct($_numero, $_dinero)
    {
        $this->numero = $_numero;
        $this->dinero = $_dinero;  
    }

    public function jugar()
    {
        $pre1 = 70; $pre2 = 140; $pre3 = 210; $pre4 = 280; $pre5 = 350; $pre6 = 420;
        $pre7 = 490; $pre8 = 560; $pre9 = 630; $pre10 = 700;
        echo "Usted eligio el número (" . $this->numero .")";
        echo " con un precio de $" . $this->dinero . "<br>" . "<br>";

        if ($this->dinero == 1)
        {
            echo "El número ganador es el (5)" . "<br>";
            if ($this->numero == 5)
            {
                echo "Muchas felicidades, usted a ganado la cantidad de $" . $pre1;
            }
            else 
            {
                echo "Lo sentimo pero usted no gano..." . "<br>";
                echo "Suerte en la Proxima";
            }
        }

        else if ($this->dinero == 2)
        {
            echo "El número ganador es el (88)" . "<br>";
            if ($this->numero == 88)
            {
                echo "Muchas felicidades, usted a ganado la cantidad de $" . $pre2;
            }
            else 
            {
                echo "Lo sentimo pero usted no gano..." . "<br>";
                echo "Suerte en la Proxima";
            }
        }

        else if ($this->dinero == 3)
        {
            echo "El número ganador es el (88)" . "<br>";
            if ($this->numero == 90)
            {
                echo "Muchas felicidades, usted a ganado la cantidad de $" . $pre3;
            }
            else 
            {
                echo "Lo sentimo pero usted no gano..." . "<br>";
                echo "Suerte en la Proxima";
            }
        }

        else if ($this->dinero == 4)
        {
            echo "El número ganador es el (88)" . "<br>";
            if ($this->numero == 88)
            {
                echo "Muchas felicidades, usted a ganado la cantidad de $" . $pre4;
            }
            else 
            {
                echo "Lo sentimo pero usted no gano..." . "<br>";
                echo "Suerte en la Proxima";
            }
        }

        else if ($this->dinero == 5)
        {
            echo "El número ganador es el (88)" . "<br>";
            if ($this->numero == 88)
            {
                echo "Muchas felicidades, usted a ganado la cantidad de $" . $pre5;
            }
            else 
            {
                echo "Lo sentimo pero usted no gano..." . "<br>";
                echo "Suerte en la Proxima";
            }
        }

        else if ($this->dinero == 6)
        {
            echo "El número ganador es el (88)" . "<br>";
            if ($this->numero == 88)
            {
                echo "Muchas felicidades, usted a ganado la cantidad de $" . $pre6;
            }
            else 
            {
                echo "Lo sentimo pero usted no gano..." . "<br>";
                echo "Suerte en la Proxima";
            }
        }

        else if ($this->dinero == 7)
        {
            echo "El número ganador es el (88)" . "<br>";
            if ($this->numero == 88)
            {
                echo "Muchas felicidades, usted a ganado la cantidad de $" . $pre7;
            }
            else 
            {
                echo "Lo sentimo pero usted no gano..." . "<br>";
                echo "Suerte en la Proxima";
            }
        }
    }
}

$jugarAzar = new Jugar($_POST['numero'], $_POST['dinero']);
$jugarAzar->jugar();

echo "<br>" . "<br>" . "<a href = './Mi_Juego.html'>" . "<button = ''> Jugar de nuevo" . "</button = ''>" . "</a>";
?>