<?php

$datos = (empty($_POST['tipoIMC']));

if($datos){
    echo "No hay datos";
}else{

    $tipoIMC = $_POST['tipoIMC'];
    $mensaje = "";
    if($tipoIMC === "Peso bajo"){
        $mensaje = "Tienes un IMC de: PESO BAJO";
    }elseif($tipoIMC === "Normal"){
        $mensaje = "Tienes un IMC de: PESO Normal";
    }elseif($tipoIMC === "Sobre peso"){
        $mensaje = "Tienes un IMC de: Sobre peso";
    }elseif($tipoIMC === "Obsidad 1"){
        $mensaje = "Tienes un IMC de: Obesidad 1";
    }elseif($tipoIMC === "Obesidad 2"){
        $mensaje = "Tienes un IMC de: Obesidad 2";
    }elseif($tipoIMC === "UYYYYY"){
        $mensaje = "UYYY cuidado";        
    }else{
        $mensaje = 'No c';
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
</head>
<body>

    <h1><?php echo $mensaje;?></h1>

    
</body>
</html>
