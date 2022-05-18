<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea</title>
</head>

<body>

    <?php

    $datos = (isset($_POST['tipo']) && isset($_POST['numero']));

    if ($datos) {
        $numero = intval($_POST['numero']);
        $tipo = $_POST['tipo'];

        $resultados = array();

        if ($tipo == 'for') {

            for ($i = 1; $i <= 10; $i++) {
                $operacion = $i * $numero;
                array_push($resultados, $operacion);
            }
            // FOR    
        } elseif ($tipo == 'while') {
            $i = 1;
            while ($i <= 10) {
                $operacion = $i * $numero;
                array_push($resultados, $operacion);
                $i++;
            }
            // While
        } elseif ($tipo == 'dowhile') {
            $i = 1;
            do {
                $operacion = $i * $numero;
                array_push($resultados, $operacion);
                $i++;
            } while ($i <= 10);
        }
        // Do while


    } else {
        $numero = 0;
        $tipo = 'for';
    }

    ?>





    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">

        <div>
            <label for="numero">Numero</label>
            <input type="number" value="<?= $numero ?>" id="numero" name="numero">
        </div>

        <div>
            <label for="">For</label>
            <input onchange="this.form.submit()" <?= (($tipo == "for" ? "checked" : "")); ?> type="radio" value="for" name="tipo">
        </div>
        <div>
            <label for="">While</label>
            <input onchange="this.form.submit()" <?= (($tipo == "while" ? "checked" : "")); ?> type="radio" value="while" name="tipo">
        </div>
        <div>
            <label for="">Do-While</label>
            <input onchange="this.form.submit()"  <?= (($tipo == "dowhile" ? "checked" : "")); ?> type="radio" value="dowhile" name="tipo">
        </div>


    </form>


    <div style="display: flex;justify-content: space-evenly;flex-wrap: wrap;">
        <div>
            <h1>RESULTADOS</h1>

            <?php
            if ($datos) {
                for ($i = 0; $i <= count($resultados) - 1; $i++) : ?>

                    <p><?= $i + 1  . " X " . $numero . " = " . $resultados[$i]  ?></p>

            <?php endfor;
            } ?>

        </div>



        <div>
            <h1>CODIGO</h1>
            <?php
            if ($datos) {

                if ($tipo == 'for') { ?>
                    <textarea  style="width: 385px; height: 134px;">$resultados = array();
for ($i = 1; $i &lt;= 10; $i++) {
    $operacion = $i * $numero;
    array_push($resultados, $operacion);
}
</textarea>
                <?php
                } elseif ($tipo == 'while') { ?>
                    <textarea  style="width: 325px; height: 159px;">$resultados = array();
 $i = 1;
 while ($i &lt;= 10) {
 $operacion = $i * $numero;
 array_push($resultados, $operacion);
 $i++;
}
</textarea>
                <?php
                } elseif ($tipo == 'dowhile') { ?>
                    <textarea  style="width: 329px; height: 140px;">$resultados = array();
$i = 1;
do {
$operacion = $i * $numero;
array_push($resultados, $operacion);
$i++;
} while ($i &lt;= 10);
</textarea>
            <?php }
            }

            ?>

        </div>


    </div>

   


</body>

</html>