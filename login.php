<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="DC WebDev">
    <meta name="description" content="Sumarec es una empresa con la capacidad de sumistrar y emprender proyectos, así como el mantenimiento, reparación y
        puesta en marcha de sistemas en sectores industriales, tecnologicos, mineros, energeticos y quimicos; ubicado en Barrancabermeja.">
    <title>Login y registro</title>
    <link rel="icon" href="build/img/logoS.png">
    <link rel="preload" href="build/css/app.css" as="style" />
    <link rel="stylesheet" href="build/css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="build/css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="build/js/app.js"></script>

</head>

<body>
<header class="border">
        <a class="logo" href="index.php">
            <picture>
                <source srcset="build/img/logoBlanco.avif" type="image/avif" />
                <source srcset="build/img/logoBlanco.webp" type="image/webp" />
                <img loading="Lazy" src="build/img/logoBlanco.png" alt="logo Sumarec blanco" />
            </picture>
        </a>
        <div class="menu">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="36" height="36" viewBox="0 0 24 24" stroke-width="2.5" stroke="#d21314" fill="none" stroke-linecap="round" stroke-linejoin="round">

                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <line x1="4" y1="6" x2="20" y2="6" />
                <line x1="4" y1="12" x2="20" y2="12" />
                <line x1="4" y1="18" x2="20" y2="18" />
            </svg>
        </div>
        <nav>
            <a class="active" href="index.php">Inicio</a>
            <a href="servicios.php">Servicios</a>
            <a href="contacto.php">Contacto</a>

           <?php if (isset($_SESSION['correo'])) { ?>
                
           <?php } else {

           }?>
            <a href="login.php"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="80" height="30" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <circle cx="12" cy="12" r="9" />
                    <circle cx="12" cy="10" r="3" />
                    <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                </svg></a>

                <a href="salir.php"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-back" width="80" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M9 11l-4 4l4 4m-4 -4h11a4 4 0 0 0 0 -8h-1" />
</svg>  </a>
        </nav>
    </header>

    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="validar.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input name="correo_login" required type="text" placeholder="Correo Electronico">
                    <input name="contrasena_login" required type="password" placeholder="Contraseña">
                    <button type="submit">Entrar</button>
                </form>

                <!--Register-->
                <form action="insertar.php" method="POST" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input name="nombre" type="text" placeholder="Nombre completo">
                    <input name="correo" required type="text" placeholder="Correo Electronico">
                    <input name="telefono" type="tel" placeholder="Telefono">
                    <input name="contrasena" required type="password" placeholder="Contraseña">
                    <button type="submit">Regístrarse</button>
                </form>
            </div>
        </div>

    </main>

    <script src="build/js/js.js"></script>
</body>

</html>
