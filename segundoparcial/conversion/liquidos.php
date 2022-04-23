<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liquidos</title>
</head>
<body>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
        
    
        <?php 

        $datos = (empty($_POST['iniciar'])&&empty($_POST['entrada'])&&empty($_POST['conversion'])&&empty($_POST['resultado']));


        if(!$datos){
            $iniciar = $_POST['iniciar'];
            $entrada = $_POST['entrada'];
            $conversion = $_POST['conversion'];

            $salida = 0;
 

             if($iniciar == "Litro" && $conversion == "Litro"){
                $salida = $entrada;
            }elseif($iniciar == "Litro" && $conversion == "Mililitro"){
                $salida = $entrada * 1000;
            }elseif($iniciar == "Litro" && $conversion == "Onza"){
                $salida = $entrada * 33.814;
            }elseif($iniciar == "Litro" && $conversion == "Galon"){
                $salida = $entrada * 0.264172;
            }
            // Litro
            if($iniciar == "Mililitro" && $conversion == "Mililitro"){
                    $salida = $entrada;
            }elseif($iniciar == "Mililitro" && $conversion == "Litro"){
                $salida = $entrada * 0.001;
            }elseif($iniciar == "Mililitro" && $conversion == "Onza"){
                $salida = $entrada * 0.033814;
            }elseif($iniciar == "Mililitro" && $conversion == "Galon"){
                $salida = $entrada * 0.000264172;
            }
            //Mililitro
            if($iniciar == "Onza" && $conversion == "Onza"){
                    $salida = $entrada;
            }elseif($iniciar == "Onza" && $conversion == "Mililitro"){
                $salida = $entrada * 29.5735;
            }elseif($iniciar == "Onza" && $conversion == "Litro"){
                $salida = $entrada * 0.0295735;
            }elseif($iniciar == "Onza" && $conversion == "Galon"){
                $salida = $entrada * 0.0078125;
            }
            //Dolarrrrr
            if($iniciar == "Galon" && $conversion == "Galon"){
                    $salida = $entrada;
            }elseif($iniciar == "Galon" && $conversion == "Mililitro"){
                $salida = $entrada * 3785.41;
            }elseif($iniciar == "Galon" && $conversion == "Onza"){
                $salida = $entrada * 128;
            }elseif($iniciar == "Galon" && $conversion == "Litro"){
                $salida = $entrada * 3.78541;
            }
            //YUANNNNN

        }else{

            $iniciar = "Litro";
            $conversion = "Litro";
        }
        ?>


        

        <select  name="iniciar" id="iniciar">
            <option <?=(($iniciar == "Litro"?"selected":""));?> value="Litro">Litro</option>
            <option <?=(($iniciar == "Mililitro"?"selected":""));?> value="Mililitro">Mililitro</option>
            <option <?=(($iniciar == "Onza"?"selected":""));?> value="Onza">Onza</option>
            <option <?=(($iniciar == "Galon"?"selected":""));?> value="Galon">Galon</option>
        </select>

        <input type="number" value="<?=$entrada?>" name="entrada" placeholder="Entrada">


        <input type="submit" value="Calcular">

        <div>
            <select name="conversion" id="conversion" >
                <option <?=(($conversion == "Litro"?"selected":""));?>  value="Litro">Litro</option>
                <option <?=(($conversion == "Mililitro"?"selected":""));?> value="Mililitro">Mililitro</option>
                <option <?=(($conversion == "Onza"?"selected":""));?> value="Onza">Onza</option>
                <option <?=(($conversion == "Galon"?"selected":""));?>  value="Galon">Galon</option>
            </select>
            
            <input type="number" name="resultado" value="<?=$salida?>" placeholder="Resultado">
        </div>
         
    </form>
    
</body>
</html>