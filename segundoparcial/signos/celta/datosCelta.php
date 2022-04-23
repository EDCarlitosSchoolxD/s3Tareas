<?php
    $datos = (empty($_POST['celta']));
    
    if($datos){
        echo "No hay datos";
    }else{
        $celta =  $_POST['celta'];
        echo $celta;

        switch ($celta) {
            case "Ciervo":
                $mensaje = "Es un signo noble, de ideales y paciente. Suele tener éxito porque es perseverante, autosuficiente y orgulloso. Además es un trabajador incansable y un buscador de justicia.";
                $imagen = "./img/ciervo.jpg";
                break;
            case "Gato":
                $mensaje = "Al igual que el animal que los represente, los nacidos bajo el signo del gato son rápidos y astutos. Suelen tener un sexto sentido y, en ocasiones, cuesta reconocer sus verdaderas aspiraciones. Son personas poco convencionales, originales y con mucho talento artístico.";
                $imagen = "./img/gato.png";
                break;
            case "Serpiente":
                $mensaje = "Suelen ser personas persuasivas porque saben comunicarse muy bien. Por momentos pueden resultar impredecibles al extremo de llegar a incomodar a las personas que tiene al lado. Son poco dadas a resolver los problemas de una manera diferente a la que tienen pensada.";
                $imagen = "./img/serpiente.png";
                break;
            case "Zorro":
                $mensaje = "El zorro es astuto y carismático, es fácil verlo rodeado de gente a su alrededor. Saben transmitir y narrar historias y anécdotas. Aunque al principio pareciera que ser su amigo es imposible, con el paso del tiempo es algo que puedes conseguir.";
                $imagen = "./img/zorro.jpg";
                break;
            case "Toro":
                $mensaje = "Es uno de los animales que más estabilidad posee. El compañero ideal de malos momentos. Es honesto, sincero y calmo. Es bastante terco y reacio a intercambiar opiniones, a menudo su carácter parece tosco, pero es una persona de confianza y muy reservada.";
                $imagen = "./img/toro.jpg";
                break;
            case "Caballo de mar":
                $mensaje = "Sea Horse es un signo de protección y seguridad, que se puede ver en cómo a este signo le gusta cuidar y atender a los demás.";
                $imagen = "./img/caballodemar.jpg";
                break;
            case "Cuervo":
                $mensaje = "El cuervo es animal ingenioso, abierto y predispuesto. Le gusta cuidar y proteger y son capaces de mantenerse serenos y en calma en la peor de las situaciones. Pese a las connotaciones negativas que tienen en nuestra cultura son animales honestos, con alto sentido de la moral y la responsabilidad.";
                $imagen = "./img/cuervo.jpg";
                break;
            case "Caballo":
                $mensaje = "El caballito de mar era un símbolo de los dioses para los celtas, y significaba tanto fuerza como poder. Debido a que este animal habita en el mar, tiene una profunda conexión con los sentimientos, la imaginación, la creatividad y la sensualidad.";
                $imagen = "./img/caballo.jpg";
                break;
            case "Salmón":
                $mensaje = "Así como el salmón se sumerge en el mar, la persona nacida bajo este signo es introspectiva y tranquila. Tiene mucha intuición y mucho mundo interior, al que nutre constantemente. Es solitario y difícil de seguir, pero con ideas brillantes y que destacan por sobre las demás.";
                $imagen = "./img/salmon.jpg";
                break;
            case "Cisne":
                $mensaje = "Son personas con mucho desarrollo personal, de ideas avanzadas y con un estilo característico. La belleza los enloquece y todo lo que la rodea, también. Es una persona apasionada, ligeramente fría y muy elocuente.";
                $imagen = "./img/cisne.jpg";
                break;
            case "Mariposa":
                $mensaje = "Las mariposas son almas gentiles que no puedan amarrarse por mucho tiempo. Les encanta soñar, expresar nuevas ideas y hablar sobre sus planes con todos sus amigos. Estas personas alegran cualquier día oscuro con su alegría y su brillante personalidad.";
                $imagen = "./img/mariposa.jpg";
                break;
            case "Lobo":
                $mensaje = "Pocos animales son tan valientes y audaces como el lobo. Son héroes por naturaleza y muy buenos compañeros de batallas.";
                $imagen = "./img/lobo.png";
                break;
            case "Halcón":
                $mensaje = "./img/halcon.jpg";
                $imagen = "Cuando quiere algo, nada ni nadie podrá evitarlo. Lo mismo sucede cuando no siente interés, volará tan lejos que será imposible contar con él. Le gusta el conocimiento, la filosofía y la esencia de los sentimientos. Son buenos profesores y personas comprometidas con su trabajo. De mente abierta y de creencias muy fuertes.";
                break;
                                
            default:
                $mensaje ="No existe";
                $imagen = "";
                break;
        }
        







    }
    
    
    
    
    
    
    
?>