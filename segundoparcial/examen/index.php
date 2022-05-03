<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
</head>

<body>


    <?php
    $datos = (empty($_POST['peso']) && empty($_POST['altura']));

    if ($datos) {
        $peso = 0;
        $altura = 0;
        $imc = 0;
        $tipoIMC = "";
    } else {
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        $imc = $peso / ($altura**2);
        $tipoIMC = "";
        $mensaje ="";


        if($imc <18){
            $tipoIMC = "Peso bajo";
        }elseif($imc >18 && $imc <=24.9){
            $tipoIMC = "Normal";
        }elseif($imc >= 25 && $imc <=29.9){
            $tipoIMC = "Sobre peso";
        }elseif($imc >= 30 && $imc <=34.9){
            $tipoIMC = "Obsidad 1";
        }elseif($imc >=35 && $imc <=39.9){
            $tipoIMC = "Obesidad 2";
        }elseif($imc >=40){
            $tipoIMC = "UYYYYY";
        }

    }

    ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

        <label for="peso">peso</label>
        <input type="number" value="<?= $peso ?>" step="any" name="peso" placeholder="Peso">


        <label for="peso">altura</label>
        <input type="number" step="any" value="<?= $altura ?>" name="altura" placeholder="Peso">


        <input type="submit" value="Enviar">

    </form>


    <label for="">Tu imc</label>
    <input type="text" value="<?=$imc?>">


    <form action="./respuesta.php" method="POST">

        <label for="">Tipo de problema: </label>
        <input type="text" value="<?=$tipoIMC?>" name="tipoIMC" value="">

        <input type="submit" value="Enviar">
    </form>




</body>

</html>