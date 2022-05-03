<?php
    $datos = (empty($_POST['zodiaco']));
    
    if($datos){
        echo "No hay datos";
    }else{
       $zodiaco=  $_POST['zodiaco'];
    
       if($zodiaco === "Tauro"){
        $mensaje = "En astrología, Tauro es el segundo signo del zodiaco y el primero de cualidad fija y negativa/femenina.​​ Perteneciente a los signos fijos junto a Leo, Escorpio y Acuario.​ Su signo opuesto y complementario a la vez es Escorpio";
 
        $imagen = "./img/tauro.jpg";
        
        }elseif($zodiaco == "Aries"){
           $mensaje = "Los nacidos bajo el signo de Aries suelen ser personas muy adaptables, que pueden llevarse bien con los demás por su creatividad y espontaneidad. Son detallistas y observadores.";

           $imagen = "./img/aries.jpg";
       }elseif($zodiaco == "Géminis"){
           $mensaje = "La inteligencia es una de sus cualidades más conocidas y reconocidas, pero no sólo de mente, también a la hora de actuar. Suelen ser personas equilibradas, adaptables y muy entregadas al amor.";

           $imagen = "./img/geminis.jpg";
       }elseif($zodiaco == "Cáncer"){
        $mensaje = "Son personas hogareñas, románticas y muy apasionadas. Les encanta compartir en familia todos los momentos, además de ser entregadas y dedicadas. Suelen ser personas admiradas y muy simpáticas, por lo que le suelen caer bien a todo el mundo.";

        $imagen = "./img/cancer.jpg";
       }elseif($zodiaco == "Leo"){
        $mensaje =  "Les gusta ser líderes, apoyándose en sus ideas y convicciones. Les encanta llamar la atención y tener la de los demás siempre sobre de ellos, aunque hay veces que les gana la soberbia.";

        $imagen = "./img/leo.jpg";
        }elseif($zodiaco == "Virgo"){
        $mensaje = "Son personas de carácter fuerte, con ideas firmes y claras, pues cuando quieren algo lo consiguen a como dé lugar. Tienen habilidad para convencer a los demás, para ser el centro de atracción y el alma de las fiestas o las reuniones.";
        $imagen = "./img/virgo.jpg";
        }elseif($zodiaco == "Libra"){
            $mensaje =  "El equilibrio siempre está presente en su vida, al ser amante de la estabilidad y la paridad en todos los sentidos. Es gente tranquila, a la que le gusta la armonía y hasta la soledad en algunos momentos, aunque también puede resultar todo lo contrario, con desorden y ruido.";
            $imagen = "./img/libra.jpg";
        }elseif($zodiaco == "Escorpión"){
            $mensaje = "De mente calculadora, con carácter fuerte, pero bondadoso en el fondo. Hábiles para negociar o alcanzar sus metas. Los obstáculos se convierten en retos que por lo regular superan sin miramientos. También son apasionados.";
            $imagen = "./img/escorpio.jpg";
        }elseif($zodiaco == "Sagitario"){
            $mensaje =  "Suelen ser desordenados, atrabancados o hasta berrinchudos si las cosas no se dan como las pensaron. En contraparte, son capaces de enfocar toda su energía para solucionar dificultades.";
            $imagen = "./img/sagitario.jpg";
        }elseif($zodiaco ==  "Capricornio"){
            $mensaje = "Prácticas, con una habilidad nata para encontrarle solución a las cosas, aunque parezcan casos perdidos. Son amantes del orden, la estabilidad y de que todo camine conforme lo han planeado.";
            $imagen = "./img/capricornio.jpg";
        }elseif($zodiaco == "Acuario"){
            $mensaje = "Amorosas, cariñosas y muy sensibles suelen ser las personas nacidas bajo este signo. Les gustan las causas nobles y el dar sin esperar algo a cambio.";
            $imagen = "./img/acuario.jpg";
        }elseif($zodiaco == "Piscis"){
            $mensaje = "La honestidad puede llegar a ser una de sus mejores cualidades. Manejan un carácter tranquilo, muy alivianado y consolador. Creen en los demás, aunque eso les pueda acarrear alguna dificultad al ser mal pagados.";
            $imagen = "./img/piscis.jpg";
        }
    }
    ?>