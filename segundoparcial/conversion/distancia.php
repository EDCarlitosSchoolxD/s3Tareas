<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distancia</title>
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

            if( $iniciar == "Metros" && $conversion == "Metros"){
                $salida = $entrada;
            }else if ($iniciar == "Metros" && $conversion == "Kilometros"){
                $salida = $entrada * 0.001;
                
            }else if ($iniciar == "Metros" && $conversion == "Centimetros"){
                $salida = $entrada * 100;
                
            }else if ($iniciar == "Metros" && $conversion == "Yardas"){
                $salida = $entrada * 1.094;
                
            }else if ($iniciar == "Metros" && $conversion == "Pulgada"){
                $salida = $entrada * 39.37;
                
            }
            //METROSSS

            if( $iniciar == "Centimetros" && $conversion == "Centimetros"){
                $salida = $entrada;
            }else if ($iniciar == "Centimetros" && $conversion == "Kilometros"){
                $salida = $entrada * 0.00001;
                
            }else if ($iniciar == "Centimetros" && $conversion == "Metros"){
                $salida = $entrada * 0.01;
                
            }else if ($iniciar == "Centimetros" && $conversion == "Yardas"){
                $salida = $entrada * 0.0109;
                
            }else if ($iniciar == "Centimetros" && $conversion == "Pulgada"){
                $salida = $entrada * 0.394;
                
            }
            //CENTIMETROS

            if( $iniciar == "Kilometros" && $conversion == "Kilometros"){
                $salida = $entrada;
            }else if ($iniciar == "Kilometros" && $conversion == "Metros"){
                $salida = $entrada * 100;
                
            }else if ($iniciar == "Kilometros" && $conversion == "Centimetros"){
                $salida = $entrada * 100000;
                
            }else if ($iniciar == "Kilometros" && $conversion == "Yardas"){
                $salida = $entrada * 1093.63;
                
            }else if ($iniciar == "Kilometros" && $conversion == "Pulgada"){
                $salida = $entrada * 39370.079;
                
            } //KILOMETROS

            if( $iniciar == "Yardas" && $conversion == "Yardas"){
                $salida = $entrada;
            }else if ($iniciar == "Yardas" && $conversion == "Kilometros"){
                $salida = $entrada * 0.000914;
                
            }else if ($iniciar == "Yardas" && $conversion == "Metros"){
                $salida = $entrada * 0.914;
                
            }else if ($iniciar == "Yardas" && $conversion == "Centimetros" ){
                $salida = $entrada * 91.44;
                
            }else if ($iniciar == "Yardas" && $conversion == "Pulgada"){
                $salida = $entrada * 36;
                
            } //YARDASSSSSS

            if( $iniciar == "Pulgada" && $conversion == "Pulgada"){
                $salida = $entrada;
            }else if ($iniciar == "Pulgada" && $conversion == "Kilometros"){
                $salida = $entrada * 0.0000254;
                
            }else if ($iniciar == "Pulgada" && $conversion == "Metros"){
                $salida = $entrada * 0.0254;
                
            }else if ($iniciar == "Pulgada" && $conversion == "Yardas"){
                $salida = $entrada * 0.0278;
                
            }else if ($iniciar == "Pulgada" && $conversion == "Centimetros"){
                $salida = $entrada * 2.54;
                
            } //PULGADASSS

        
        }else{
            $iniciar = "Metros";
            $conversion = "Metros";


        }


        

?>

        
        <select name="iniciar" id="iniciar">
            <option <?=(($iniciar == "Metros"?"selected":""));?> value="Metros">Metros</option>
            <option <?=(($iniciar == "Centimetros"?"selected":""));?> value="Centimetros">Centimetros</option>
            <option <?=(($iniciar == "Kilometros"?"selected":""));?> value="Kilometros">Kilometros</option>
            <option <?=(($iniciar == "Yardas"?"selected":""));?> value="Yardas">Yardas</option>
            <option <?=(($iniciar == "Pulgada"?"selected":""));?> value="Pulgada">Pulgada</option>

            
        </select>

        <input type="number" required value="<?=$entrada?>"name="entrada" placeholder="Entrada">


        <input type="submit" value="Calcular">

        <div>

            <select name="conversion" id="conversion">
                <option <?=(($conversion == "Metros"?"selected":""));?> value="Metros">Metros</option>
                <option <?=(($conversion == "Centimetros"?"selected":""));?> value="Centimetros">Centimetros</option>
                <option <?=(($conversion == "Kilometros"?"selected":""));?> value="Kilometros">Kilometros</option>
                <option <?=(($conversion == "Yardas"?"selected":""));?> value="Yardas">Yardas</option>
                <option <?=(($conversion == "Pulgada"?"selected":""));?> value="Pulgada">Pulgada</option>
            </select>
            
            <input type="number" name="resultado" value="<?=$salida?>" placeholder="Resultado">
        </div>
    </form>
</body>
</html>