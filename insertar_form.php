<?php
include "conexion.php";

if ($_POST['correo'] != null && $_POST['correo'] != '' && $_POST['affair'] != null && $_POST['affair'] != ''&& $_POST['message'] != null && $_POST['message'] != '') {
    $nombre = $_POST['fullname'];
    $correo = $_POST['correo'];
    $telefono = $_POST['phone'];
    $servicio = $_POST['affair'];
    $datos = $_POST['message'];
    $query = "INSERT INTO servicios (nombre,correo,telefono,servicio,datos) VALUES ('$nombre','$correo','$telefono','$servicio','$datos')";
    if ($resultado = mysqli_query($conexion, $query)) {
?>
        <h3 style="text-align: center;">FORMULARIO ENVIADO CORRECTAMENTE</h3>
    <?php
        include 'index.php';
    } else {
    ?>
        <h3 style="text-align: center;">ERROR EN EL ENVIO DEL FORMULARIO</h3>
    <?php
        include 'form.php';
    }

    mysqli_close($conexion);
} else {
    ?>
    <h3 style="text-align: center;">ERROR EN EL ENVIO DEL FORMULARIO</h3>
<?php
    include 'form.php';
}
