<?php include("../../include/basicHead.php")?>

    <title>Alberca circular</title>
</head>
<body>
<a href="../../index.php">HOME</a>

    <h1>Alberca Circular</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">

        <?php
            $data = (empty($_POST['profundidad-baja'])&&empty($_POST['profundidad-alta'])&&empty($_POST['diametro']));
        
            if(!$data){
                $profundidadAlta = $_POST['profundidad-alta'];
                $profundidadBaja = $_POST['profundidad-baja'];
                $diametro = $_POST['diametro'];
                $profundidadMedia = ($profundidadBaja+ $profundidadAlta)/2;
                $resultado = (($diametro**2)*$profundidadMedia)*0.79;
            }else{
                $profundidadAlta = 0;
                $profundidadBaja = 0;
                $diametro = 0;
                $resultado = 0;
            }
        ?>
        <div>
            <div>
                <label for="profundidad-baja">Profundidad mas Baja</label>
                <input required value="<?=$profundidadBaja?>" type="number" name="profundidad-baja" id="profundidad-baja">
            </div>
            <div>
                <label for="profundidad-alta">Profundidad mas Alta</label>
                <input required value="<?=$profundidadAlta?>" type="number" name="profundidad-alta" id="profundidad-alta">
            </div>
            <div>
                <label for="diametro">Diametro</label>
                <input value="<?=$diametro?>" type="number" required name="diametro">
            </div>
            <input type="submit" value="Calcular" id="diametro">
        </div>
        <div>
            <div>
                <label for="resultado">Resultado</label>
                <input value="<?=$resultado ." m3"?>" type="text" disabled>
            </div>
        </div>

    </form>
</body>
</html>