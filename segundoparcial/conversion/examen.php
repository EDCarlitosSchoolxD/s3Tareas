<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<center><title>Conversión de tu dinero MXC</title></center>
</head>
<body>
	<body bgcolor="lightyellow">
	<div class="division1">
		<center>

		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> " method="post">

			<h1>-Convierte tu dinero mexicano-</h1>
			<br>
			<img src="dinero.jpg" id = Figura width = 10% ></img>
			<br>
			<br>
			Pesos: <input type="number" name="pesos" claas="form1" placeholder="Resultado"
		    value="<?=$pesos?>">
			<br>
			<br>
			<input type="submit" name="calcular" class="btn btn-cal" value="Calcular">
			<br>
			<?php
			$datos =(isset($_POST['pesos'])&&!empty($_POST['pesos']));
			if ($datos) {
				//code...
				$pesos =htmlspecialchars($_POST['pesos']);
				$euro = ($pesos * 0.048);
				$dolar = ($pesos * 0.048);
				$libra = ($pesos * 0.036);
				$yuan =($pesos * 3);
				
			}
			?>
			<br>
			<br>
			Euro: <input type="number" name="euro" claas="form1" placeholder="Resultado"
		    value="<?=$euro?>">
		    <br>
		    <br>
		    Dólar: <input type="number" name="dolar" claas="form1" placeholder="Resultado"
		    value="<?=$dolar?>">
		    <br>
		    <br>
		    Libra: <input type="number" name="libra" claas="form1" placeholder="Resultado"
		    value="<?=$libra?>">
		    <br>
		    <br>
		    Yuan: <input type="number" name="yuan" claas="form1" placeholder="Resultado"
		    value="<?=$yuan?>">
		    <br>
		    <br> 
		
		</form>
	</center>
	
	</div>
</body>
</html>