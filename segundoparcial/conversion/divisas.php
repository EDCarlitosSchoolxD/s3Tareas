<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisas</title>
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
 

             if($iniciar == "Euro" && $conversion == "Euro"){
                    $salida = $entrada;
                }
            elseif($iniciar == "Euro" && $conversion == "Pesos"){
                $salida = $entrada * 22.17;
            }elseif($iniciar == "Euro" && $conversion == "Dolar"){
                $salida = $entrada * 1.10;
            }elseif($iniciar == "Euro" && $conversion == "Yuan"){
                $salida = $entrada * 7;
            }
            // EUROOOO
            if($iniciar == "Pesos" && $conversion == "Euro"){
                $salida = $entrada *  0.045;
            }elseif($iniciar == "Pesos" && $conversion == "Pesos"){
                $salida = $entrada;
            }elseif($iniciar == "Pesos" && $conversion == "Dolar"){
                $salida = $entrada *  0.050;
            } elseif($iniciar == "Pesos" && $conversion == "Yuan"){
                $salida = $entrada * 0.32 ;
            }
            //PESOOOOOSSSS
            if($iniciar == "Dolar" && $conversion == "Euro"){
                $salida = $entrada *  0.91;
            }elseif($iniciar == "Dolar" && $conversion == "Dolar"){
                $salida = $entrada;
            }elseif($iniciar == "Dolar" && $conversion == "Pesos"){
                $salida = $entrada *  20.17;
            } elseif($iniciar == "Dolar" && $conversion == "Yuan"){
                $salida = $entrada * 6.37 ;
            }
            //Dolarrrrr
            if($iniciar == "Yuan" && $conversion == "Euro"){
                $salida = $entrada *  0.14;
            }elseif($iniciar == "Yuan" && $conversion == "Yuan"){
                $salida = $entrada;
            }elseif($iniciar == "Yuan" && $conversion == "Pesos"){
                $salida = $entrada *  3.17;
            } elseif($iniciar == "Yuan" && $conversion == "Dolar"){
                $salida = $entrada * 0.16 ;
            }
            //YUANNNNN

        }else{
            $iniciar = "Euro";
            $conversion = "Euro";


        }
        ?>


        

        <select  name="iniciar" id="iniciar">
            <option <?=(($iniciar == "Euro"?"selected":""));?> value="Euro">Euro</option>
            <option <?=(($iniciar == "Pesos"?"selected":""));?> value="Pesos">Pesos</option>
            <option <?=(($iniciar == "Dolar"?"selected":""));?> value="Dolar">Dolar</option>
            <option <?=(($iniciar == "Yuan"?"selected":""));?> value="Yuan">Yuan</option>
        </select>

        <input type="number" value="<?=$entrada?>" name="entrada" placeholder="Entrada">


        <input type="submit" value="Calcular">

        <div>
            <select name="conversion" id="conversion" >
                <option <?=(($conversion == "Euro"?"selected":""));?>  value="Euro">Euro</option>
                <option <?=(($conversion == "Pesos"?"selected":""));?> value="Pesos">Pesos</option>
                <option <?=(($conversion == "Dolar"?"selected":""));?> value="Dolar">Dolar</option>
                <option <?=(($conversion == "Yuan"?"selected":""));?>  value="Yuan">Yuan</option>
            </select>
            
            <input type="number" name="resultado" value="<?=$salida?>" placeholder="Resultado">
        </div>
         
    </form>

</body>
</html>