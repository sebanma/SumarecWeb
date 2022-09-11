<?php

class UserSession{
    public function construct(){
        session_start();
    }
    public function setCorreo($correo){
        $_SESSION['correo'] = $correo;
    }
    public function getCorreo(){
        return $_SESSION['correo'];
    }
    public function closeSession(){
        session_unset();
        session_destroy();
        header("Location:index.php");
    }
}
