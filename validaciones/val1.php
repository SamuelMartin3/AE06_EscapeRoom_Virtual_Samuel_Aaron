<?php
session_start(); // Iniciar sesión

if (isset($_POST['latitud']) && isset($_POST['longitud'])) {
    $latitud = trim($_POST['latitud']);
    $longitud = trim($_POST['longitud']);
    
    if ($latitud == '30' && $longitud == '60') {
        $_SESSION['reto1_completado'] = true; 
        header('Location: ../reto2.php');
        exit();
    } else {
        // Si fallas en el reto, quédate en reto1.php con un error en la URL
        if (!isset($_SESSION['reto1_completado'])) {
            header('Location: ../reto1.php?msg=❌ Coordenadas incorrectas. Pista: La latitud es menor de 50.');
            exit();
        }
    }
}
?>
