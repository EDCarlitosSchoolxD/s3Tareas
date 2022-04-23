<?php include("../../include/basicHead.php")?>

    <title>Circulo</title>
</head>
<body>
<a href="../../index.php">HOME</a>

    <h1>Circulo</h1>    

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">

        <?php
        define('PI',3.1416);


        $data = (empty($_POST['radio']));

        if(!$data){
            $radio = $_POST['radio'];
            $area = PI * ($radio**2);
            $perimetro = (2*PI)*$radio;
        }else{
            $radio = 0;
            $area = 0;
            $perimetro = 0;
        }

        ?>
        <!--Data -->
        <div>
            <label for="radio">Radio</label>
            <input value="<?=$radio?>" type="number" name="radio" id="radio">
        </div>

        <div>
            <input type="submit">
        </div>
        <!--Resultados -->
        <div>
            <div>
                <label for="area">Area</label>
                <input value="<?=$area?>" type="number" id="area" disabled>
            </div>
            <div>
                <label for="perimetro">Perimetro</label>
                <input value="<?=$perimetro?>" type="number" id="perimetro" disabled>
            </div>
        </div>
       


<!--P = pi x Diametro-->

    
    </form>

</body>
</html>