<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape Room - Reto 4</title>
    <link rel="stylesheet" href="./css/stylereto.css">
    <script>
        // Función para mostrar el anuncio cuando se hace clic en la X
        function mostrarAnuncio() {
            document.getElementById('anuncio').style.display = 'block';
        }

        // Función para cerrar el anuncio
        function cerrarAnuncio() {
            document.getElementById('anuncio').style.display = 'none';
        }
    </script>
</head>
<body class="body4">
    <header class="header">
        <h1>El difícil acertijo que nos llevará a la gloria</h1>
    </header>

    <!-- Contenedor del barco de fondo -->
    <div id="fondo-barco">
        <p>¡Ahora que sabemos cómo abrir la puerta tendremos que saber dónde está la habitación tripulante!</p>

        
        <div id="mapa">
            <img src="./img/MAPAbueno-removebg-preview.png" alt="Mapa" usemap="#mapa">

            <map name="mapa">
                
                <area shape="rect" coords="170,330,340,100" href="javascript:void(0);" alt="X" onclick="mostrarAnuncio()">
            </map>

            
            <div id="anuncio">
                <p>💬 ‘Avanza 5 pasos al norte, 3 al este, 2 al sur y 4 al oeste. ¿Dónde terminas?’</p>
                <form action="validaciones/val4.php" method="post">
                    <input type="text" name="respuesta" placeholder="Escribe tu respuesta..." required>
                    <button type="submit" name="enviar_respuesta">Enviar</button>
                </form>
                <button id="boton-cerrar" onclick="cerrarAnuncio()">Cerrar</button>
            </div>
        </div>

        <div>
            <div class="letter-box norte">
                <img src="./img/n.jpg" alt="Letra 1">
            </div>
            <div class="letter-box este">
                <img src="./img/e.png" alt="Letra 2">
            </div>
            <div class="letter-box sur">
                <img src="./img/s.jpg" alt="Letra 3">
            </div>
            <div class="letter-box oeste">
                <img src="./img/o.jpeg" alt="Letra 4" >
            </div>
        </div>
    </div>
    <?php
// Mostrar el mensaje de error si está en la URL
if (isset($_GET['msg'])) {
    echo "<p class='error'>" . ($_GET['msg']) . "</p>";
}elseif(isset($_GET['error'])){  
        echo "<br>"; 
        echo " <p>No te pases de listo, calisto. </p>";
    }
?>
</body>
</html>
