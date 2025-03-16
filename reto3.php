<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape Room - Reto 3</title>
    <link rel="stylesheet" href="./css/stylereto.css">
</head>
<body class="body3">
    <header>
        <h1>🏴‍☠ Escape Room - Reto 3</h1>
    </header>

    <main>
        <!-- Columna izquierda -->
        <div class="columna1">
            <div class="c1">
                <img src="./img/cofre.png" alt="Cofre del tesoro" width="70%">
            </div>
            <div class="c2">
                <img src="./img/cofre.png" alt="Cofre del tesoro" width="70%">
            </div>
            <div class="c3">
                <img src="./img/cofre.png" alt="Cofre del tesoro" width="70%">
            </div>
        </div>

        <!-- Columna central con la puerta y el formulario -->
        <div class="texto-encima">
            <p> El Problema que nos ha dejado Barbanegra para poder abrir la habitacion de los tesoros es el siguiente:</p>
            <br>
            <p> "Si 3 piratas encuentran 3 tesoros en 3 días, ¿cuántos días tardarán 6 piratas en encontrar 6 tesoros?”
        </div>
        <div class="central">
            <div class="puerta">
                <form action="validaciones/val3.php" method="post">
                    <input type="text" name="respuesta" placeholder="Escribe tu respuesta..." required>
                    <button type="submit" name="enviar_respuesta">Enviar</button>
                </form>
            </div>
        </div>

        <!-- Columna derecha con el pirata -->
        <div class="pirata" onclick="mostrarBocadillo()">
            <img src="./img/pirata.png" alt="Barbanegra" width="100%">
        </div>

        <!-- Bocadillo del pirata (inicialmente oculto) -->
        <div id="bocadillo" class="bocadillo">
            <p>💬 ¿Realmente el número de piratas afecta el tiempo?'</p>
            <button onclick="cerrarBocadillo()">Cerrar</button>
        </div>
    </main>
<?php
// Mostrar el mensaje de error si está en la URL
if (isset($_GET['msg'])) {
    echo "<p class='error'>" . ($_GET['msg']) . "</p>";
}elseif(isset($_GET['error'])){  
        echo "<br>"; 
        echo " <p>No te pases de listo, calisto. </p>";
    }
?>
    <script>
        function mostrarBocadillo() {
            document.getElementById('bocadillo').style.display = 'block';
        }

        function cerrarBocadillo() {
            document.getElementById('bocadillo').style.display = 'none';
        }
    </script>
</body>
</html>
