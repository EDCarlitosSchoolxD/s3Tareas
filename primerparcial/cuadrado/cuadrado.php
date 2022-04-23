<?php include("../../include/basicHead.php")?>
    <title>Cuadrado</title>
</head>
<body>
<a href="../../index.php">HOME</a>

    <h1>Cuadrado</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?> " method="POST">

    <?php
            if(!empty($_POST['lado'])){
                $lado = $_POST['lado'];
                $area = intval($lado * $lado);
                $perimetro = intval($lado * 4);
            }else{
                $lado = 0;
                $area = 0;
                $perimetro = 0;
            }

        ?>



        <div class="input-container">
          <label for="lado">Lado</label>
          <input value="<?=$lado?>" id="lado" type="number" name="lado">
        </div>

        


        <div>
            <input type="submit" value="Calcular">
        </div>

       <div>
           <label for="area">Area</label>
           <input id="area" type="text" value="<?=$area?>" disabled>
       </div>

       <div>
           <label for="perimetro">Perimetro</label>
           <input id="perimetro" type="text" value="<?=$perimetro ?>" disabled>
       </div>

        <div class="cuadrado"></div>
    </form>
</body>
</html>