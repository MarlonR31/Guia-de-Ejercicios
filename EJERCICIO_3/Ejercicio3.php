<?php

class Imagenes
{
    public function imagen()
    {
        echo '<img src="img/kong.jpg" width="500" height="600">';
    }
}

$imagen = new Imagenes();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
</head>
<body>
    <H1>Formulario de Pruebas</H1>
    <form action="Ejercicio3.php" method="POST">
        <input type="number" name="numero" require> <br> <br>
        <button type="submit">Enviar imagen</button>

    </form>

    <?php
        for($i = 1; $i<= $_POST["numero"]; $i++)
        {
            $imagen->imagen();
        }
    ?>
    
</body>
</html>