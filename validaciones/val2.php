
<?php
session_start();

$respuesta = strtolower(trim($_POST['gema']));

if ($respuesta == "amarillo") { // Cambia "amarillo" si la respuesta es diferente
    $_SESSION['reto2_completado'] = true; // Marcar reto 2 como completado
    header("Location: ../reto3.php"); // Redirigir al reto 3
    exit();
} else {
    header("Location: ../reto2.php?msg=❌ Respuesta incorrecta. Pista: Mezclado con azul da verde.");
    exit();
}
?>