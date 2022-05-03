<?php include("../include/basicHead.php");?>
    <title>Tercer parcial</title>
</head>
<body>

<style>
      h1{
        text-align:center;
      }
      .posicionamiento{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
      }
      .card{
        margin:20px;
      }
    </style>





<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
      
        <!--SEGUNDO PARCIAL -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Primer Parcial
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         
            <li><a class="dropdown-item" href="../primerparcial/circulo/circulo.php">Circulo</a></li>   
            <li><a class="dropdown-item" href="../primerparcial/cuadrado/cuadrado.php">Cuadrado</a></li> 
            <li><a class="dropdown-item" href="../primerparcial/rectangulo/rectangulo.php">Rectangulo</a></li>   
            <li><a class="dropdown-item" href="../primerparcial/trapecio/trapecio.php">Trapecio</a></li>   
            <li><a class="dropdown-item" href="../primerparcial/triangulo/triangulo.php">Triangulo</a></li>   
            <li><a class="dropdown-item" href="../primerparcial/hexagono/hexagono.php">Hexagono</a></li>
            <li><a class="dropdown-item" href="../primerparcial/albercacircular/albercacircular.php">Alberca circular</a></li>
            <li><a class="dropdown-item" href="../primerparcial/albercarectangular/albercarectangular.php">Alberca rectangular</a></li>
            <li><a  class="dropdown-item" href="../primerparcial/Examen/examen.php">Examen</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Segundo Parcial
          </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="./tipo-triangulo/tipo-triangulo.php">Tipo de triangulo</a>
          <li><a class="dropdown-item" href="./signos/signos.php">Signos</a></li>
          
        </ul>
        </li>
       
      </ul>
       
      </ul>
    </div>
  </div>
</nav>

  <header>
      <h1>Juan Carlos Uch Dzib</h1>
  </header>

      <div class="posicionamiento">

     

            <div class="card" style="width: 18rem;">
              <img src="./img/triangulos.png" class="card-img-top" alt="Examen">
              <div class="card-body">
              <h5 class="card-title">Tipo de triangulo</h5>
                <p class="card-text">Que tipo de triangulo es segun sus 3 lados</p>
              <a class="btn btn-primary" href="./tipo-triangulo/tipo-triangulo.php">Tip de triangulo</a>
              </div>
            </div>
          

           <div class="card" style="width: 18rem;">
              <img src="./img/signos.jpg" class="card-img-top" alt="Examen">
              <div class="card-body">
              <h5 class="card-title">Signos</h5>
                <p class="card-text">Que signo zodiacal, chino, y celda eres con solo colocar tu tarjeta de credito :D</p>
              <a class="btn btn-primary" href="./signos/signos.php">Signos</a>
              </div>
            </div>

            <div class="card" style="width: 18rem;">
              <img src="./img/conversion.png" class="card-img-top" alt="Examen">
              <div class="card-body">
              <h5 class="card-title">Conversion</h5>
                <p class="card-text">Conversion de monedas,distancia y liquidos</p>
                <a class="btn btn-primary" href="./conversion/index.php">Conversion</a>
              </div>
            </div>
          

          <div class="card">
            <img class="card-img-top" src="" alt="">
            <div class="card-body">
              <h4 class="card-title">Proyecto</h4>
              <p class="card-text">Proyecto de s3</p>
              <a class="btn btn-primary" href="./proyectoFinalS3/index.php">Proyecto</a>
            </div>
          </div>

          <div class="card">
            <img class="card-img-top" src="" alt="">
            <div class="card-body">
              <h4 class="card-title">Examen</h4>
              <p class="card-text">Examen 2</p>
              <a class="btn btn-primary" href="./examen/index.php">Examen</a>
            </div>
          </div>
        </div>

 
  <?php include("../include/js.php")?>
</body>
</html>
