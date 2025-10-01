<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $basededatos = "proyecto";

    $enlace = mysqli_connect ($servidor, $usuario, $clave, $basededatos);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGA</title>

    <link rel="icon" href="imagenes/logo.png">
    <link rel="stylesheet" href="css/Pract.css">
</head>
<body id="menu">
    <section id="interfas">
        <article id="inter">
            <div id="titulo">
                <img class="logo" src="imagenes/logo.png">
                <h1 id="titul">SIGA</h1>
                <img class="logo" src="imagenes/logo.png">
            </div>
            <div class="part">
                <a class="quitar" href="#contenedor" data-desplazamiento="90">Inicio</a>
            </div>
            <div class="part">
                Información
            </div>
            <div class="part">
                <a class="quitar" href="#contacto" data-desplazamiento="80px">Contacto</a>
            </div>
        </article>
    </section>
    <section id="contenedor">
        <div>
            <a target="_blank" href="https://uiverse.io/elements"><img class="opciones" src="imagenes/opcion.png"></a>
        </div>
        <div>
            <a target="_blank" href="https://uiverse.io/elements"><img class="opciones" src="imagenes/opcion1.png"></a>
        </div>        
    </section>


    <footer id="contacto">
        <article class="minic1">
            <div id="config">
                <p class="cont">Contacto</p>
            </div>
        </article>
        <article class="minic1">
                <label id="con">Gmail:</label>    
                <a class="quitar" href="mailto:urbanodiaze@gmail.com">urbanodiaze@gmail.com</a>
        </article>
        <article class="minic1">
                <fieldset id="caja">
                    <form action="#" name="proyecto" method="post">
                        <label for="gmail">Gmail:</label>
                        <input name="gmail" id="gmail" type="email" cols="15px" placeholder="example@gmail.com">
                        <br>
                        <br>
                        <section class="cont1">
                            <div>
                                <label for="coment">Comentario: </label>
                            </div>
                            <div>
                                <textarea name="comentario" id="coment" cols="25px" rows="8px" placeholder="Comentario..."></textarea>
                            </div>  
                        </section>
                        <br>
                        <button class="boton" name="mejoramiento" type="submit">Enviar</button>
                        <button class="boton" type="reset">Borrar</button>                    
                    </form>                        
                </fieldset>
        </article>
        <br>
        <br>
        <br>
    </footer>


    <script>
        // Esperar a que el documento esté listo
        document.addEventListener('DOMContentLoaded', function() {
            console.log('JavaScript cargado correctamente!');
            
            // Seleccionar todos los enlaces con data-desplazamiento
            const enlaces = document.querySelectorAll('a[data-desplazamiento]');
            
            // Agregar evento a cada enlace
            enlaces.forEach(function(enlace) {
                enlace.addEventListener('click', function(evento) {
                    evento.preventDefault(); // Evitar el comportamiento por defecto
                    
                    // Obtener el destino y el desplazamiento
                    const href = this.getAttribute('href');
                    const destinoId = href.substring(1); // Quitar el #
                    const desplazamiento = parseInt(this.getAttribute('data-desplazamiento')) || 0;
                    
                    // Buscar el elemento destino
                    const destino = document.getElementById(destinoId);
                    
                    if (destino) {
                        // Calcular la posición final
                        const posicionDestino = destino.offsetTop;
                        const posicionFinal = posicionDestino - desplazamiento;
                        
                        // Hacer scroll suave
                        window.scrollTo({
                            top: posicionFinal,
                            behavior: 'smooth'
                        });
                        
                        console.log('Navegando a: ' + destinoId + ' con desplazamiento: ' + desplazamiento + 'px');
                    } else {
                        console.warn('No se encontró el elemento con id: ' + destinoId);
                    }
                });
            });
        });
    </script>

    
</body>
</html>

<?php

    if(isset($_POST['mejoramiento'])){
        $gmail = $_POST ['gmail'];
        $comentario = $_POST ['comentario'];

        $insertarDatos = "INSERT INTO comentarios VALUES ('$gmail', '$comentario', '')";

        $ejecutarInsertar = mysqli_query ($enlace, $insertarDatos);
    }
?>