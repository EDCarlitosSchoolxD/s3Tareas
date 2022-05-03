<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zodiaco</title>
</head>
<body>
    <h1>TAREA</h1>
    <h2>Juan Carlos Uch Dzib</h2>
     <h2>María José Euan Xool</h2>

    
    <form method="POST" action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

    <?php
        $datos = (empty($_POST['dia'])&&empty($_POST['mes'])&&empty($_POST['año']));

        if(!$datos){
            $dia = $_POST['dia'];
            $mes = $_POST['mes'];
            $año = $_POST['año'];
            // Signo Zodiacal
            if($dia >= 21  && $mes ==3  || $dia <= 19 && $mes ==4 ){
                $zodiaco = "Aries";
            }elseif($dia >=20 && $mes ==4 || $dia <=21 && $mes==5){
                $zodiaco = "Tauro";
            }elseif($dia >=21 && $mes==5 || $dia <=20 && $mes==6 ){
                $zodiaco="Géminis";
            }elseif($dia >=21 && $mes==6 || $dia <=22 && $mes==7 ){
                $zodiaco="Cáncer";
            }elseif($dia >=23 && $mes==7 || $dia <=22 && $mes==8 ){
                $zodiaco="Leo";
            }elseif($dia >=23 && $mes==8 || $dia <=22 && $mes==9 ){
                $zodiaco="Virgo";
            }elseif($dia >=23 && $mes==9 || $dia <=22 && $mes==10 ){
                $zodiaco="Libra";
            }elseif($dia >=23 && $mes==10 || $dia <=21 && $mes==11 ){
                $zodiaco="Escorpión";
            }elseif($dia >=22 && $mes==11 || $dia <=21 && $mes==12 ){
                $zodiaco="Sagitario";
            }elseif($dia >=22 && $mes==12 || $dia <=20 && $mes==1 ){
                $zodiaco="Capricornio";
            }elseif($dia >=21 && $mes==1 || $dia <=18 && $mes==2 ){
                $zodiaco="Acuario";
            }elseif($dia >=19 && $mes==2 || $dia <=20 && $mes==3 ){
                $zodiaco="Piscis";
            }
            else{
                echo "No existe";
            }
            // Termina signo zodiacal
            $chino;
            $residuo = $año % 12;

            echo $año % 12;

            //Signo CHINO
            switch ($residuo) {
                case 4:
                    $chino = "Rata";
                    break;
                case  5 :
                    $chino = "Buey";
                break;
                case 6:
                    $chino = "Tigre";
                    break;
                    case  7 :
                        $chino="Conejo";
                    break;
                    case 8 :
                        $chino="Dragón";
                    break ;           
                    case 9 :
                        $chino="Serpiente";
                    break ; 
                    case 10 :
                        $chino="Caballo";
                    break ;
                    case 11 :
                        $chino="Cabra";
                    break ;
                    case 0 :
                        $chino="Mono";
                    break ;
                    case 1 :
                        $chino="Gallo";
                    break ; 
                    case 2 :
                        $chino="Perro";
                    break ; 
                    case 3 :
                        $chino="Cerdo";
                    break ;                                           

                default:
                    $chino = "No hay";
                    break;
            }

            //Signo celta
            $celta;

            if($dia >=24 && $mes ==12 || $dia <=20 && $mes ==1){
                $celta = "Ciervo";
            }elseif($dia >=21 && $mes == 1 || $dia <= 17 && $mes ==2){
                $celta = "Gato";
            }elseif($dia >=18 && $mes == 2 || $dia <= 17 && $mes ==3){
                $celta = "Serpiente";
            }elseif($dia >=18 && $mes == 3 || $dia <= 14 && $mes ==4){
                $celta = "Zorro";
            }elseif($dia >=15 && $mes == 4 || $dia <= 12 && $mes == 5){
                $celta = "Toro";
            }elseif($dia >=13 && $mes == 5 || $dia <= 9 && $mes ==6){
                $celta = "Caballo de mar";
            }elseif($dia >=10 && $mes == 6 || $dia <= 7 && $mes ==7){
                $celta = "Cuervo";
            }elseif($dia >=8 && $mes == 7 || $dia <= 4 && $mes ==8){
                $celta = "Caballo";
            }elseif($dia >=5 && $mes == 8 || $dia <= 1 && $mes ==9){
                $celta = "Salmón";
            }elseif($dia >=2 && $dia <= 29 && $mes == 9){
                $celta = "Cisne";
            }elseif($dia >=30 && $mes == 9 || $dia <= 27 && $mes ==10){
                $celta = "Mariposa";
            }elseif($dia >=28 && $mes == 10 || $dia <= 24 && $mes ==11){
                $celta = "Lobo";
            }elseif($dia >=25 && $mes == 11 || $dia <= 23 && $mes ==12){
                $celta = "Halcón";
            }

        }else{
            $dia = 0;
            $mes = 0;
            $año = 0;
            $zodiaco = "";
            $delta = "";
            $chino = "";
        }
    
    ?>


        <div>
            <div>
                <label for="dia">Dia</label>
                <input  min="1" max="31" value="<?=$dia?>" id="dia" type="number" required placeholder="Dia" name="dia">
            </div>
            <div>
                <label for="mes">Mes</label>
                <input  min="1" max="12" value="<?=$mes?>" type="number" required placeholder="Mes" name="mes">
            </div>
            <div>
                <label for="año">Año</label>
                <input  min="1" max="3000" value="<?=$año?>" type="number" required placeholder="Año" name="año">
            </div>
        </div>
        
        <br>

        <input type="submit" value="Enviar">
    </form>
    <hr>
        <form action="./zodiaco/zodiaco.php" method="POST">
            <div>
                <label for="zodiaco">Zodiaco</label>
                <input  value="<?=$zodiaco?>" name="zodiaco" type="text"  placeholder="Signo del Zodiaco"  >
                <input type="submit" value="Zodiacio">
           
           
            </div>
           

        </form>


        <form action="./chino/chino.php" method="POST">
        <div>
                <label for="chino">Chino</label>
                <input  value="<?=$chino?>" name="chino" type="text"  placeholder="Signo del Chino"  >
            <input type="submit" value="Chino">

            </div>
           
        </form>

        <form action="./celta/celta.php" method="POST">
            <div>
                <label for="celta">celta</label>
                <input  value="<?=$celta?>" name="celta" type="text"  placeholder="Signo del celta"  >
            <input type="submit" value="celta">

            </div>
           
        </form>

  
</body>
</html>