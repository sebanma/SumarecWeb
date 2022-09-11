<?php
include "conexion.php";

if ($_POST['correo'] != null && $_POST['correo'] != '' && $_POST['contrasena'] != null && $_POST['contrasena'] != '') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $contrasena = $_POST['contrasena'];
    $query = "INSERT INTO usuario (nombre,correo,telefono,contrasena) VALUES ('$nombre','$correo','$telefono','$contrasena')";
    if ($resultado = mysqli_query($conexion, $query)) {
?>
        <h3 style="text-align: center;">CUENTA CREADA CORRECTAMENTE</h3>
    <?php
        include 'login.php';
    } else {
    ?>
        <h3 style="text-align: center;">ERROR EN LA CREACION DE CUENTA</h3>
    <?php
        include 'login.php';
    }

    mysqli_close($conexion);
} else {
    ?>
    <h3 style="text-align: center;">ERROR EN LA CREACION DE CUENTA</h3>
<?php
    include 'login.php';
}
