<!DOCTYPE html>
<html>
<head lang="es">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>

  <h1>Tipo de triangulo</h1>

  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

<?php
  $data = (empty($_POST['lado1'])&&empty($_POST['lado2'])&&empty($_POST['lado3']));

  if(!$data){
    $lado1 = $_POST['lado1'];
    $lado2 = $_POST['lado2'];
    $lado3 = $_POST['lado3'];

    if($lado1 === $lado2 && $lado2 === $lado3){
      $img = "./img/equilatero.png";
      $alt = "equilatero";
    }elseif($lado1 === $lado2 || $lado2 === $lado3 || $lado3 === $lado1){
      $img = "./img/isosceles.png";
      $alt = "Isosceles";
    }else{
      $img = "./img/escaleno.png";
      $alt = "escaleno";
    }

  }else{
    $lado1 = 0;
    $lado2 = 0;
    $lado3 = 0;
    $img = "";
    $alt = "";
  }
?>


    <div>
      <div>
        <label for="lado1">Lado 1</label>
        <input id="lado1" name="lado1" type="number" required value="<?=$lado1?>" placeholder="Lado 1">
      </div>  
      
      <div>
        <label for="lado2">Lado 2</label>
        <input id="lado2" name="lado2" type="number" required value="<?=$lado2?>" placeholder="Lado 2">
      </div>

      <div>
        <label for="lado3">Lado 3</label>
        <input id="lado3" name="lado3" type="number" required value="<?=$lado3?>" placeholder="Lado 3">
      </div>
    </div>
    <div>
    <input type="submit" value="Enviar">
    </div>
      
    <div>
      <div>
         <label for="resultado">Es un triangulo...</label>
         <input type="text" disabled value="<?=$alt?>">
      </div>        
      <div class="img">
        <img src="<?=$img?>" alt="<?=$alt?>" > 
      </div> 
   </div>

  </form>


</body>
</html>
