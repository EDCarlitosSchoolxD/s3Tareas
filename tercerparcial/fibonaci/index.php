<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonaci</title>
</head>
<body>
<style>
    body{
        background-color: #FFFFF4;
    }
</style>
<?php 
error_reporting(0);
$datos=(!empty($_POST['numero']));
if($datos){
$number=$_POST['numero'];

function isPerfectNumber($N)
{
    // To store the sum
    $sum = 0;
       
    // Traversing through each number
    // In the range [1,N)
    for ($i = 1; $i < $N; $i++)
    {
        if ($N % $i == 0)
        {
            $sum = $sum + $i;
        }      
    }
      
    // returns True is sum is equal
    // to the original number.
    return $sum == $N;
}
   
// Driver's code
$N = 6;
  
if (isPerfectNumber($_POST['numero']))
    $numero =  " Numero Perfecto";
else
    $numero = "No es un numero perfecto";


function Fibonacci($number){
      

    if ($number == 0)
        return 0;    
    else if ($number == 1)
        return 1;    
      
    else
        return (Fibonacci($number-1) + 
                Fibonacci($number-2));
}
  
$resultado="";
$number = $_POST['numero'];
for ($counter = 0; $counter <= $number; $counter++){  
    $resultado .= Fibonacci($counter).' ';
}
}else{
    $number = "";
}


?>
<center>
    <h1>Serie Fibonaci</h1>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">

    <input type="number" value="<?=$number?>" name="numero" >
    <input type="submit">
     </form>

        <p><?=$resultado;?></p>
        <p><?=$numero;?></p>

        </center>

</body>
</html>