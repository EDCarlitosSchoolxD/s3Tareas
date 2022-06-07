<?php include("../include/basicHead.php"); ?>
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
          <li><a class="dropdown-item" href="../segundoparcial/tipo-triangulo/tipo-triangulo.php">Tipo de triangulo</a>
          <li><a class="dropdown-item" href="../segundoparcial/signos/signos.php">Signos</a></li>
          
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


  <div style="display: flex;flex-direction: column;">
    <a href="./check_y_radio/index.php">Check y Radio</a>
    <a href="./tablas_multi/index.php">Tablas de multiplicar</a>  
    <a href="./adivinaphp/index.php">Adivina PHP</a>
    <a href="./fibonaci/index.php">Fibonaci</a>
    <a href="./project/index.php">Base de datos</a>
</div>



<?php include("../include/js.php") ?>
</body>
</html>
