<?php include("../include/basicHead.php")?>
    <title>Ejercicios</title>
    

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
      
        <!--SEGUNDO PARCIAL -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Primer Parcial
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         
            <li><a class="dropdown-item" href="./circulo/circulo.php">Circulo</a></li>   
            <li><a class="dropdown-item" href="./cuadrado/cuadrado.php">Cuadrado</a></li> 
            <li><a class="dropdown-item" href="./rectangulo/rectangulo.php">Rectangulo</a></li>   
            <li><a class="dropdown-item" href="./trapecio/trapecio.php">Trapecio</a></li>   
            <li><a class="dropdown-item" href="./triangulo/triangulo.php">Triangulo</a></li>   
            <li><a class="dropdown-item" href="./hexagono/hexagono.php">Hexagono</a></li>
            <li><a class="dropdown-item" href="./albercacircular/albercacircular.php">Alberca circular</a></li>
            <li><a class="dropdown-item" href="./albercarectangular/albercarectangular.php">Alberca rectangular</a></li>
            <li><a  class="dropdown-item" href="./Examen/examen.php">Examen</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Segundo Parcial
          </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="./../segundoparcial/tipo-triangulo/tipo-triangulo.php">Tipo de triangulo</a>
          <li><a class="dropdown-item" href="./../segundoparcial/signos/signos.php">Signos</a></li>
        </ul>
        </li>
       
      </ul>
       
      </ul>
    </div>
  </div>
</nav>

    <style>
      h1{
        text-align:center;
      }
      .posicionamiento{
        display: flex;
        justify-content: space-evenly;
        flex-wrap: wrap;

      }
      .card{
        margin:20px;
      }
    </style>
    <header>
        <h1>Juan Carlos Uch Dzib</h1>
    </header>
        <hr>



      <div class="posicionamiento">

      

          <div class="card" style="width: 18rem;">
            <img src="./img/circulo.png" class="card-img-top" alt="circulo">
            <div class="card-body">
            <h5 class="card-title">Area de un circulo</h5>
              <p class="card-text">Area de figuras</p>
            <a class="btn btn-primary" href="./circulo/circulo.php">Circulo</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="./img/cuadrado.png" class="card-img-top" alt="cuadrado">
            <div class="card-body">
            <h5 class="card-title">Area de un Cuadrado</h5>
              <p class="card-text">Area de figuras</p>
            <a class="btn btn-primary" href="./cuadrado/cuadrado.php">Cuadrado</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="./img/rectangulo.png" class="card-img-top" alt="Rectangulo">
            <div class="card-body">
            <h5 class="card-title">Area de un Rectangulo</h5>
              <p class="card-text">Area de figuras</p>
            <a class="btn btn-primary" href="./rectangulo/rectangulo.php">Rectangulo</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="./img/trapecio.png" class="card-img-top" alt="Trapecio">
            <div class="card-body">
            <h5 class="card-title">Area de un Trapecio</h5>
              <p class="card-text">Area de figuras</p>
            <a class="btn btn-primary" href="./trapecio/trapecio.php">Trapecio</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="./img/triangulo.png" class="card-img-top" alt="Triangulo">
            <div class="card-body">
            <h5 class="card-title">Area de un Triangulo</h5>
              <p class="card-text">Area de figuras</p>
            <a class="btn btn-primary" href="./triangulo/triangulo.php">Triangulo</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="./img/hexagono.jpg" class="card-img-top" alt="Hexagono">
            <div class="card-body">
            <h5 class="card-title">Area de un Hexagono</h5>
              <p class="card-text">Area de figuras</p>
            <a class="btn btn-primary" href="./hexagono/hexagono.php">Hexagono</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="./img/albercacircular.jpg" class="card-img-top" alt="Alberca circular">
            <div class="card-body">
            <h5 class="card-title">Area de una alberca circular</h5>
              <p class="card-text">Area de figuras</p>
            <a class="btn btn-primary" href="./albercacircular/albercacircular.php">Alberca circular</a>
            </div>
          </div>

          <div class="card" style="width: 18rem;">
            <img src="./img/albercarectangulae.jpg" class="card-img-top" alt="Alberca rectangular">
            <div class="card-body">
            <h5 class="card-title">Area de una alberca rectangular</h5>
              <p class="card-text">Area de figuras</p>
            <a class="btn btn-primary" href="./albercarectangular/albercarectangular.php">Alberca rectangular</a>
            </div>
          </div>
      
          <div class="card" style="width: 18rem;">
            <img src="./img/examen.jpg" class="card-img-top" alt="Examen">
            <div class="card-body">
            <h5 class="card-title">Examen</h5>
              <p class="card-text">Conversor</p>
            <a class="btn btn-primary" href="./Examen/examen/examen.php">Examen</a>
            </div>
          </div>

        </div>
        <hr>

<?php include("../include/js.php");?>
</body>
</html>
