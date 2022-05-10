<?php include("../../include/basicHead.php")?>

    <title>Triangulo</title>

</head>
<body>
<a href="../../index.php">HOME</a>

    <h1>Triangulo</h1>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <?php
    
    if(!empty($_POST['altura'])){
        $altura = $_POST['altura'];
        
    }else{
        $altura = 0;
    }

    if(!empty($_POST['base'])){
        $base = $_POST['base'];
        $perimetro = $base * 3;
        $area = ($base * $altura) / 2;
    }else{
        $base = 0;
        $perimetro = 0;
        $area = 0;
    }
    ?>

    <!--Inputs-->
    <div>
        <div>
            <label for="base">Base</label>
            <input required value="<?=$base?>" type="number" name="base" id="base">
        </div>

        <div>
            <label for="altura">Altura</label>
            <input required value="<?=$altura?>" type="number" name="altura" id="altura">
        </div>

        <div>
            <input type="submit" value="Calcular">
        </div>
    </div>
    <!--Termina inputs -->


    <!--Resultados-->
    <div>
        <div>
            <label for="area">Area</label>
            <input type="text" value="<?=$area?>" disabled>
        </div>
        <div>
            <label for="perimetro">Perimetro</label>
            <input type="text" value="<?=$perimetro?>"  disabled>
        </div>
    </div>
    <!--Termina Resultados -->

</form>  




</body>
</html>