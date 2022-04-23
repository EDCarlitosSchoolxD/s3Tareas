<?php include("../../../include/basicHead.php");?>
    <title>Document</title>
</head>
<body>
    <a href="./../signos.php">Regresar</a>

    <?php include("./datosCelta.php");?>

    
  
    <style>
        .posicionamiento{
            display: flex;
             justify-content:space-evenly;
            flex-wrap: wrap;
        }
    </style>


    <div class="posicionamiento">
        <div class="posicionamiento">
            <div class="card" style="width: 18rem;">
               <img src="<?=$imagen?>" class="card-img-top" alt="Imagen del signo">
            <div class="card-body">
                <h5 style="text-align:center;" class="card-title"><?=$celta?></h5>
                <p class="card-text"><?=$mensaje?></p>
            </div>
            </div>
        </div>
    </div>


</body>
</html>