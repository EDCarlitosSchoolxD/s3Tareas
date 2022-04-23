<?php include("./include/basicHead.php")?>
    <title>Tareas S3</title> 
</head>
<body>
<!--NAVEGACION -->
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
          <!--xd-->     
        <!--SEGUNDO PARCIAL -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Primer Parcial
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         
            <li><a class="dropdown-item" href="./primerparcial/circulo/circulo.php">Circulo</a></li>   
            <li><a class="dropdown-item" href="./primerparcial/cuadrado/cuadrado.php">Cuadrado</a></li> 
            <li><a class="dropdown-item" href="./primerparcial/rectangulo/rectangulo.php">Rectangulo</a></li>   
            <li><a class="dropdown-item" href="./primerparcial/trapecio/trapecio.php">Trapecio</a></li>   
            <li><a class="dropdown-item" href="./primerparcial/triangulo/triangulo.php">Triangulo</a></li>   
            <li><a class="dropdown-item" href="./primerparcial/hexagono/hexagono.php">Hexagono</a></li>
            <li><a class="dropdown-item" href="./primerparcial/albercacircular/albercacircular.php">Alberca circular</a></li>
            <li><a class="dropdown-item" href="./primerparcial/albercarectangular/albercarectangular.php">Alberca rectangular</a></li>
            <li><a  class="dropdown-item" href="./primerparcial/Examen/examen.php">Examen</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Segundo Parcial
          </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="./segundoparcial/tipo-triangulo/tipo-triangulo.php">Tipo de triangulo</a>
          <li><a class="dropdown-item" href="./segundoparcial/signos/signos.php">Signos</a></li>
        </ul>
        </li>
       
      </ul>
    </div>
  </div>
</nav>




   <h1>Juan Carlos Uch Dzib</h1>

  <div>
    <a href="./primerparcial/index.php">Primer Parcial</a>
  </div>  
  <div>
    <a href="./segundoparcial/index.php">Segundo Parcial</a>
  </div>

<?php include("./include/js.php")?>  
</body>
</html>
