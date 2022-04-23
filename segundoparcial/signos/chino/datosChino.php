<?php
    $datos = (empty($_POST['chino']));
    
    if($datos){
        echo "No hay datos";
    }else{
        $chino=  $_POST['chino'];
        
        switch ($chino) {
            case 'Rata':
                $imagen = "./img/rata.jpg";
                    $mensaje = "La rata en la astrología china, era bienvenida en tiempos antiguos como un protector y traedor de prosperidad material. Es el primero de los animales del ciclo de 12 años que aparece en el zodíaco chino relacionado al calendario chino.";
                break;
           case "Buey":
                $imagen = "./img/buey.png";
                $mensaje = "Las personas nacidas Buey son persistentes, sencillas y tranquilas, pacientes e incansables. Aunque puedan ser introvertidas por naturaleza, cuando se presenta la oportunidad sorprenden con su elocuencia. También se enfrentan a los peligros sin temor, pues tienen una confianza natural y muy grande en sí mismas.";
                break;
           case "Tigre":
                $imagen = "./img/tigre.jpg";
                $mensaje = "El signo del tigre en la astrología china simboliza el poder, pintoresco e impredecible. Los tigres son el tercer animal del Horóscopo Chino y las personas bajo este signo necesitan de la aventura, disfrutan plenamente de la vida y la valentía, a veces lo lleva a extremos peligrosos.";
                break;
           case "Conejo":
                $imagen = "./img/conejo.jpg";
                $mensaje = "El signo del conejo o liebre (como es conocido en la mitología china), es según la astrología china, emblema de la longevidad. En este caso el Conejo simboliza la gracia, los buenos modales, el consejo sano, la bondad y la sensibilidad. Es similar al gato en el antiguo Egipto.";
                break;
           case "Dragón":
                $imagen = "./img/dragon.png";
                $mensaje = "El signo del Dragón (龍) es la única criatura mítica en el zodiaco chino. En China, la figura del dragón se asocia con la fuerza, con la salud, con la armonía y con la buena suerte;​ se colocan encima de las puertas o encima de los techos para desterrar a los demonios y a los espíritus malignos.";
                break;
           case "Serpiente":
                $imagen = "./img/serpiente.png";
                $mensaje = "El signo de la serpiente dentro de la astrología china, según las creencias culturales ancestrales es considerado como un animal sagrado, de aspecto negativo y para el género femenino es bueno, también relacionado con la sabiduría.";
                break;
           case "Caballo":
                $imagen = "./img/caballo.jpg";
                $mensaje = "El Caballo es el signo más alegre del horóscopo chino, y el símbolo de la comunicación también; las personas nacidas Caballo son flexibles y saben adaptarse a las circunstancias del entorno; activas e inteligentes, buscan la libertad individual y la felicidad constantemente.";
                break;
           case "Cabra":
                $imagen = "./img/cabra.png";
                $mensaje = "La Cabra se sitúa en la octava posición del horóscopo chino, y según la tradición china el número 8 simboliza la paz y la prosperidad. Este signo se caracteriza por ser melancólico, tímido y sentimental por naturaleza, también por su generosidad y bondad hacia los demás.";
                break;
           case "Mono":
                $imagen = "./img/mono.png";
                $mensaje = "Símbolo del ingenio, el Mono es el signo más fiestero del horóscopo chino, también el más turbador: algunas personas le verán como a alguien simpático, alegre y divertido, otras en cambio, pensarán que es un ser frívolo, pedante y amoral.";
                break;
           case "Gallo":
                $imagen = "./img/gallo.jpg";
                $mensaje = "El Gallo es el signo más excéntrico e incomprendido de todos los animales del horóscopo chino; se caracteriza por su buen criterio, conocimientos, perfeccionismo, confianza y certeza, pero también, como defectos, por su falta de flexibilidad y tolerancia que van de la mano de su aparente arrogancia.";
                break;
           case "Perro":
                $imagen = "./img/perro.jpg";
                $mensaje = "El signo del zodiaco chino del Perro es símbolo de fidelidad y de protección. El Perro contempla a los nacidos en 1910, 1922, 1934, 1946, 1958, 1970, 1982, 1994, 2006. El próximo año del perro será en 2030. Todos los años pares se rigen por el Yang y los impares por el Ying.";
                break;
           case "Cerdo":
                $imagen = "./img/cerdo.png";
                $mensaje = "El signo del zodiaco chino del Cerdo es símbolo de prosperidad, organización y de fertilidad . El Cerdo contempla a los nacidos en 1923, 1935, 1947, 1959, 1971, 1983, 1995, 2007, 2019. El próximo año del cerdo será en 2031. Todos los años pares se rigen por el Yang y los impares por el Ying.";
                break;
            default:
                $imagen = "";
                $mensaje = "NO EXISTE";
        }
    
     


    }
    ?>