<?php include("../../include/basicHead.php")?>

    <title>Rectangulo</title>
<body>
<a href="../../index.php">HOME</a>
    
    <h1>Rectangulo</h1>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        
    <?php
    $data = (empty($_POST['base'])&&empty($_POST['altura']));

    if(!$data){
        $base = $_POST['base'];
        $altura = $_POST['altura'];
        
        $perimetro = ($base * 2)+($altura*2);
        $area = $base*$altura;
       
    }else{
        $base = 0;
        $altura = 0;
    }
    ?>
    
     <!--Data-->
        <div>
            <div>
                <label for="base">Base</label>
                <input required type="number" name="base" id="base" value="<?=$base?>">
            </div>

            <div>
                <label for="altura">Altura</label>
                <input required type="number" name="altura" id="altura" value="<?=$altura?>">
            </div>

            <div>
                <input type="submit">
            </div>
        </div>
       <!--Resultados-->
        <div >
            <div>
                <label for="area">Area</label>
                <input value="<?=$area?>" type="number" name="area" id="area" disabled>
            </div>

            <div>
                <label for="perimetro">Perimetro</label>
                <input value="<?=$perimetro?>" type="number" name="perimetro" id="perimetro" disabled>
            </div>

        </div>

        

    </form>

</body>
</html>