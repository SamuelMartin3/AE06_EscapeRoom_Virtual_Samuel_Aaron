<?php
session_start(); 

if (isset($_POST['enviar_respuesta'])) { 
    $respuesta = strtolower(trim($_POST['respuesta'])); 
}
    // Comprobar si la respuesta es correcta
    if ($respuesta == '3n 1o') { 
        $_SESSION['index'] = 'check';
        header('Location: ../final.php');
        exit();
    } else { 
        // Redirigir de nuevo a reto4.php con un mensaje de error
        if(!isset($_SESSION['reto4'])) {
        header('Location: ../reto4.php?msg=Mal contestado, prueba a sumar y restar mejor.');
    }
}
?>
