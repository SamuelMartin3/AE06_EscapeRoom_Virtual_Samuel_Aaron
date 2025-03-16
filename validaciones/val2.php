<?php
session_start(); // Iniciar sesión

if (isset($_POST['gema'])) {
    $gema = strtolower(trim($_POST['gema']));
    
    if ($gema == 'amarillo') {
        $_SESSION['reto2'] = 'check';
        header('Location: ../reto3.php');
        exit();
    } else {
        // Si fallas en el reto, quédate en reto2.php con un mensaje de error en la URL
        if (!isset($_SESSION['reto2'])) {
            header('Location: ../reto2.php?msg=❌ Respuesta incorrecta. Pista: Recuerda las mezclas de colores.');
            exit();
        }
    }
}
?>
