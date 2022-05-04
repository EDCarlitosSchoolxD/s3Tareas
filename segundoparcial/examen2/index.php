<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen 2</title>
</head>
<body>

    <?php

    $datos = (empty($_POST['sexo'])&&empty($_POST['peso'])&&empty($_POST['edad']));

    if(!$datos){
        $sexo = $_POST['sexo'];
        $peso = $_POST['peso'];
        $edad = $_POST['edad'];

        if($sexo === 'hombre'){

            if($edad <3){
                $total = (59.512* $peso)-30.1;

            }elseif($edad >=3 && $edad < 10){
                $total = (22.706*$peso)-504;

            }elseif($edad >=10 && $edad < 18){
                $total = (17.686*$peso)-658;

            }elseif($edad >=18 && $edad < 30){
                $total = (14.18*$peso)-692;
                
            }elseif($edad >=30 && $edad < 60){
                $total = (11.472*$peso)-873;

            }

        }elseif($sexo === 'mujer'){

            if($edad <3){
                $total = (58.3* $peso)-31.1;

            }elseif($edad >=3 && $edad < 10){
                $total = (20.30*$peso)-485.9;

            }elseif($edad >=10 && $edad < 18){
                $total = (13.30*$peso)-692.6;

            }elseif($edad >=18 && $edad < 30){
                $total = (14.74*$peso)-486.6;
                
            }elseif($edad >=30 && $edad < 60){
                $total = (8.12*$peso)-845.6;

            }
        }else{
            $edad = "";
            $sexo = "";
            $peso = "";
            $total = "";
        }
    }


    ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">

        <label>Sexo</label>
        <select name="sexo" >
            <option <?=(($sexo == "hombre"?"selected":""));?> value="hombre">Hombre</option>
            <option <?=(($sexo == "mujer"?"selected":""));?> value="mujer">Mujer</option>
        </select>

        <label>Edad</label>
        <input type="number" value="<?=$edad?>" placeholder="Tu edad" name="edad">


        <label>Peso</label>
        <input type="text" value="<?=$peso?>" placeholder="Tu peso" name="peso">

        <input type="submit" value="Calcular">

        <label for="">Total</label>
        <input type="text" value="<?=$total?>">
    </form>


</body>
</html>