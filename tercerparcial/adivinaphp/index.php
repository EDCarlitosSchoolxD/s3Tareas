<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adivina PHP</title>
</head>
<body>

    <?php
    
        $datos = (isset($_POST['numero']) || isset($_POST['random']) || isset($_POST['vidas']));

        $random = rand(1,10);

        if(isset($_POST['random'])){
            $random = $_POST['random'];
            echo $random;
        }


        if($datos){
            $numero = $_POST['numero'];
            $postRandom = $_POST['random'];
            $vidas = $_POST['vidas'];

            
                if($vidas >0){
                    if($numero === $postRandom){
                        echo "FELICIDADES GANASTE";
                    }else{
                        $vidas --;
                    }
                }
        }

        
    ?>

    <form action="<?=htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <label for="numero">Numero:</label>
        <input type="number" name="numero">
        <input type="submit" value="Enviar">


        <input style="display: none;" type="number" value="<?=$random?>" name="random">
        <input style="display: none;" type="number" value="<?=((isset($vidas)?$vidas:"3"))?>" name="vidas">
    </form>

        <h1>VIDAS: <?=((isset($vidas)?$vidas:"3"))?></h1>

    
</body>
</html>