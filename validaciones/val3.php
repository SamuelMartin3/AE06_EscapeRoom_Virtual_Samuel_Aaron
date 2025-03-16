<?php
session_start(); 

if(isset($_POST['enviar_respuesta'])){
    $respuesta = strtolower(trim($_POST['respuesta']));
}
    if($respuesta == '3'){
        $_SESSION['index'] = 'check';
        header('Location: ../reto4.php');
        exit();
    } else {
        // Si fallas en el  reto, quédate en reto3.php con un error en la URL
        if(!isset($_SESSION['reto3'])) {
            header('Location: ../reto3.php?msg=Prueba a preguntarle al pirata');
        }
    }
?>