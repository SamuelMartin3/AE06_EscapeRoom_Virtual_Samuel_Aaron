<?php
session_start();

$respuesta = strtolower(trim($_POST['respuesta']));

if ($respuesta == "3") {  // Asegúrate de que esta es la respuesta correcta
    $_SESSION['reto3_completado'] = true; // Marcar el reto como completado
    header("Location: ../reto4.php"); // Redirigir al reto 4
    exit();
} else {
    header("Location: ../reto3.php?msg=❌ Respuesta incorrecta. Pista: No importa el número de piratas.");
    exit();
}
?>
