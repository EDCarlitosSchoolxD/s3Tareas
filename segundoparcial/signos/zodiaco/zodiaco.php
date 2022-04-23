<?php include("../../../include/basicHead.php");?>
    <title>Signo de zodiaco</title>
</head>
<body>

    <style>
        .posicionamiento{
            display: flex;
             justify-content:space-evenly;
            flex-wrap: wrap;
        }
    </style>


    <?php include("./datos.php");?>





    <a href="./../signos.php">Regresar</a>

    <div class="posicionamiento">
        <div class="card" style="width: 18rem;">
            <img src="<?=$imagen?>" class="card-img-top" alt="Imagen del signo">
        <div class="card-body">
            <h5 style="text-align:center;" class="card-title"><?=$zodiaco?></h5>
            <p class="card-text"><?=$mensaje?></p>
        </div>
        </div>

    </div>

        
</body>
</html>