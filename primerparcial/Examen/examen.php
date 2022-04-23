<?php include("../../../include/basicHead.php")?>

    <title>Litros a...</title>
</head>
<body>
<a href="../../index.php">HOME</a>
    
    <h1>Examen Juan Carlos Uch Dzib</h1>
    
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

    <?php

    $data = (empty($_POST['litros']));


    if(!$data){
        $litros = $_POST['litros'];
        $mililitros = $litros * 1000;
        $onza = $litros* 33.814;
        $galon = $litros / 3.78541;

    }else{
        $litros = 0;
        $onza = 0;
        $galon = 0;
        $mililitros = 0;
    }

    ?>







    <div>
        <label for="litros">Ingrese los litros</label>
        <input value="<?=$litros?>" type="number" name="litros" id="litros" required>
    </div>
    <div>
        <input type="submit" value="enviar">
    </div>

    <div>
        <h2>Resultados</h2>
        <div>
            <label for="onza">Onza</label>
            <input value="<?=$onza . "Hz"?>" disabled type="text" id="onza">
        </div>

        <div>
            <label for="galon">Galon</label>
            <input value="<?=$galon . "Ga"?>" disabled type="text" id="galon">
        </div>

        <div>
            <label for="mililitros">Mililitros</label>
            <input value="<?=$mililitros ."ml" ?>" disabled type="text" id="mililitros">

        </div>

    </div>



    </form>



</body>
</html>