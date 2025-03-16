<?php
session_start(); // Iniciar sesión

// Verificar si ya completó el Reto 1
if (isset($_SESSION['reto1_completado']) && $_SESSION['reto1_completado'] === true) {
    header("Location: ./reto2.php"); // Si ya completó el reto, redirigir a reto 2
    exit();
}

if (isset($_SESSION['mensaje'])) {
    echo "<p style='color: red;'>" . $_SESSION['mensaje'] . "</p>";
    unset($_SESSION['mensaje']); // Limpiar mensaje de sesión
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 1 - La Isla Escondida</title>
    <link rel="stylesheet" href="./css/stylereto.css">
</head>
<body class="body1">
    <div class="reto1-container">
        <h1>🏝️ La Isla Escondida</h1>
        <p>📜 El mapa muestra un acertijo: <br>"Para encontrar la isla correcta, resuelve esta ecuación:</p>
        <p>🧩 (50 ÷ 2) + 10 - 5 = ? (Latitud)</p>
        <p>🔢 La Longitud es el doble de la latitud.</p>

        <form action="validaciones/val1.php" method="POST">
            <input type="number" name="latitud" placeholder="Latitud" required>
            <input type="number" name="longitud" placeholder="Longitud" required>
            <button type="submit">⚓ Encontrar Isla</button>
        </form>
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
