<?php include("../../include/basicHead.php")?>

    <title>Area de un trapecio</title>
</head>
<body>
<a href="../../index.php">HOME</a>

    <h1>Trapecio</h1>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">

    <?php

    $data = (empty($_POST['baseMayor'])&&empty($_POST['baseMenor'])&&empty($_POST['altura']));

    if(!$data){
        $baseMenor = $_POST['baseMenor'];
        $baseMayor = $_POST['baseMayor'];
        $altura = $_POST['altura'];

        $area = (($baseMenor + $baseMayor)*$altura)/2;

    }else{
        $baseMayor = 0;
        $baseMenor = 0;
        $altura = 0;
        $area = 0;
    }


    ?>




    <div>
        <div>
            <label for="baseMayor">Base mayor (B)</label>
            <input required value="<?=$baseMayor?>" type="number" name="baseMayor" id="baseMayor">
        </div>

        <div>
            <label for="baseMenor">Base menor(b)</label>
            <input required value="<?=$baseMenor?>" type="number" name="baseMenor" id="baseMenor">
        </div>

        <div>
            <label for="altura">Altura</label>
            <input required value="<?=$altura?>" type="number" name="altura" id="altura">
        </div>

        <div>
            <input type="submit" value="Calcular">
        </div>

    </div>




    
    <!--Resultados-->
    <div>
        <label for="area">Area</label>
        <input value="<?=$area?>" type="number" id="area" disabled>
    </div>



    </form>

</body>
</html>