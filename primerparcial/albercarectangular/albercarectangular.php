<?php include("../../include/basicHead.php")?>
    <title>Alberca rectangular</title>
</head>
<body>
<a href="../../index.php">HOME</a>


    <h1>Alberca Rectangular</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

    <?php
    $data = (empty($_POST['profundidad-baja'])&&empty($_POST['profundidad-alta'])&&empty($_POST['largo'])&&empty($_POST['ancho']));
    if(!$data){
        $profundidadAlta = $_POST['profundidad-alta'];
        $profundidadBaja = $_POST['profundidad-baja'];
        $ancho = $_POST['ancho'];
        $largo = $_POST['largo'];
        $profundidadMedia = ($profundidadBaja+$profundidadAlta)/2;
        $cantAgua = $largo*$ancho*$profundidadMedia;

    }else{
        $profundidadBaja = 0;
        $profundidadAlta = 0;
        $largo = 0;
        $ancho = 0;
        $cantAgua = 0;
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
            <label for="largo">Largo</label>
            <input required value="<?=$largo?>" type="number" name="largo" id="largo">
        </div>

        <div>
            <label for="ancho">Ancho</label>
            <input required value="<?=$ancho?>" type="number" name="ancho" id="ancho">
        </div>

        <input type="submit" value="Calcular">
    </div>
    <!--Resultado-->
    <div>
        <div>
            <label for="resultado">Cantidad de agua en la alberca:</label>
            <input value="<?=$cantAgua ." m3"?>" type="text"  disabled>
        </div>
    </div>

    </form>
</body>
</html>