<?php
session_start();

if (isset($_SESSION['correo'])) { ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario servicios</title>
    <link rel="stylesheet" href="build/css/form.css">
    
    <link rel="preload" href="build/css/app.css" as="style" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    
</head>
<body>

    
    <div class="content">

        <h1 class="logo">Servicios<span>Sumarec</span></h1>
        <a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-back" width="80" height="50" viewBox="0 0 24 24" stroke-width="2.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M9 11l-4 4l4 4m-4 -4h11a4 4 0 0 0 0 -8h-1" />
</svg>  </a>

        <div class="contact-wrapper animated bounceInUp">
            <div class="contact-form">
                <h3>Diligenciar</h3>
                <form action="insertar_form.php" method="POST">
                    <p>
                        <label>Nombre Completo</label>
                        <input type="text" name="fullname">
                    </p>
                        <input type="correo" hidden name="correo" value="<?php echo $_SESSION["correo"]; ?>">
                    <p>
                        <label>Celular</label>
                        <input type="tel" name="phone">
                    </p>
                    <p>
                        <label>servicio a solicitar</label>
                        <select type="text" name="affair">
                       
                     <option value="Mantenimiento Electronico">Mantenimiento Electronico</option>
                      <option value="Diseño y Fabricación de cables">Diseño y Fabricación de cables</option>
                      <option value="Automatización">Automatización</option>
                      <option value="Sistemas de Seguridad">Sistemas de Seguridad</option>
                      <option value="Diseño electrónico y Elaboración de Componentes con Impresión 3D">Diseño electrónico y Elaboración de Componentes con Impresión 3D</option>
                      <option value="Obras Electricas">Obras Electricas</option>
                      <option value="Montaje de Tuberia">Montaje de Tuberia</option>
                      <option value="Diseño e ingenieria">Diseño e ingenieria</option>
                      <option value="Obras Civiles">Obras Civiles</option>
                      <option value="Pruebas Hidrostaticas">Pruebas Hidrostaticas</option>
                      <option value="Limpieza y pintura">Limpieza y pintura</option>
                      <option value="Obras de instrumentación y control">Obras de instrumentación y control</option>
                     
                       </select>

                        
                    </p>
                    <p class="block">
                       <label>Datos para la entrega</label> 
                        <textarea name="message" rows="3"></textarea>
                    </p>
                    <p class="block">
                        <button>
                            Enviar
                        </button>
                    </p>
                </form>
            </div>
            <div class="contact-info">
                <h4>Mas Información</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Sumarec.SAS</li>
                    <li><i class="fas fa-phone"></i> 311 5157 558</li>
                    <li><i class="fas fa-envelope-open-text"></i> Antonio maya</li>
                </ul>
                <p>En la sección de contactos se encuentran los enlaces a la ubicación de la empresa y al whatsapp del ingeniero</p>
                <p>sumarec@gmail.com</p>
                <a class="logo" href="form.php">
            <picture>
                <source srcset="build/img/logoBlanco.avif" type="image/avif" />
                <source srcset="build/img/logoBlanco.webp" type="image/webp" />
                <img loading="Lazy" src="build/img/logoBlanco.png" alt="logo Sumarec blanco" />
            </picture>
        </a>
            </div>
        </div>

    </div>

</body>
</html>
<?php } else {
    header('location:index.php');
}
?>