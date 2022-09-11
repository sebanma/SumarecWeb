<?php 
include "conexion.php"; 
include "session.php"; 
if($_POST['correo_login']!=null && $_POST['correo_login']!='' && $_POST['contrasena_login']!=null && $_POST['contrasena_login']!=''){
    $correo = $_POST['correo_login'];
    $contra = $_POST['contrasena_login'];
    $query = "SELECT correo FROM usuario WHERE correo = '$correo' AND contrasena = '$contra'";
    $resultado = mysqli_query($conexion, $query);
    $session = new UserSession();

    if(mysqli_num_rows($resultado)==1){
        $session->construct();
        while($row = mysqli_fetch_array($resultado)){
            $session->setCorreo($row['correo']);
        }
        header('location:index.php');
    } else {
        ?>
            <h3 style="text-align: center;">ERROR EN LA AUTENTIFICACION</h3>
        <?php
        include 'login.php';
    }
} 
mysqli_free_result($resultado);
mysqli_close($conexion);

