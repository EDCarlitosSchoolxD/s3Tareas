<?php include("../../include/basicHead.php")?>

    <title>Hexagono</title>
</head>
<body>
<a href="../../index.php">HOME</a>

    <h1>Hexagono</h1>    


    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        
    
        <?php
        $data = (empty($_POST['lado'])&&empty($_POST['apotema']));

        if(!$data){
            $lado = intval($_POST['lado']);
            $apotema = floatval($_POST['apotema']);
            $perimetro = $lado * 6;
            $area = ($perimetro * $apotema)/2;

            

        }else{
            $apotema = 0;
            $lado = 0;
            $perimetro = 0;
            $area = 0;
        }
        ?>
    
    
        
    
    
        <div>
            <div>
                <label for="lado">Lado</label>
                <input value="<?=$lado?>" type="number" name="lado" id="lado" required>
            </div>

            <div>
                <label for="apotema">Apotema</label>
                <input value="<?=$apotema?>" type="text" name="apotema" id="apotema" required>
            </div>

            <div>
                <input type="submit" value="Calcular">
            </div>

        </div>
        
        


        <!--Resultados-->
        <div>
            <div>
                <label  for="perimetro">Perimetro</label>
                <input value="<?=$perimetro?>" type="number" disabled >
            </div>

            <div>
                <label for="area">Area</label>
                <input value="<?=$area?>" type="number" disabled>
            </div>
        </div>
        

    </form>





</body>
</html>