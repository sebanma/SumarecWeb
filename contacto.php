<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="DC WebDev">
    <meta name="description"
        content="Sumarec es una empresa con la capacidad de sumistrar y emprender proyectos, así como el mantenimiento, reparación y
        puesta en marcha de sistemas en sectores industriales, tecnologicos, mineros, energeticos y quimicos; ubicado en Barrancabermeja.">
    <title>Sumarec</title>
    <link rel="icon" href="build/img/logoS.png">
    <link rel="preload" href="build/css/app.css" as="style" />
    <link rel="stylesheet" href="build/css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
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
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="36" height="36"
                viewBox="0 0 24 24" stroke-width="1.5" stroke="#d21314" fill="none" stroke-linecap="round"
                stroke-linejoin="round">

                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <line x1="4" y1="6" x2="20" y2="6" />
                <line x1="4" y1="12" x2="20" y2="12" />
                <line x1="4" y1="18" x2="20" y2="18" />
            </svg>
        </div>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="servicios.php">Servicios</a>
            <a class="active" href="contacto.php">Contacto</a>
        </nav>
    </header>
    <div class="menu-hide" style="display: none;">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li><a class="active-hide" href="contacto.php">Contacto</a></li>
        </ul>
    </div>
    <main class="main_contacto">
        <h1>Contacto</h1>
        <div class="contacto">
            <a target="_blank"
                href="https://www.google.es/maps/place/Cra.+22+%2349-46,+Barrancabermeja,+Santander/@7.0598294,-73.8577981,17z/data=!3m1!4b1!4m5!3m4!1s0x8e42eca676c821fd:0x2565b29412c50f5!8m2!3d7.0598241!4d-73.8556094?hl=es">
                <div class="contacto-maps bg-img">
                    <h3>Ubicación</h3>
                    <p>Para mayor información estamos ubicados en la Carrera 22#49-46, Barrio Colombia en el distrito de
                        Barrancabermeja, Santander.<br><br>

                        <b>Presiona aquí para que puedas ubicarnos más fácil:</b>
                    </p>
                </div>
            </a>
            <div class="contacto-redes">
                <div class="redes-wpp bg-img">
                    <h3>WhatsApp</h3>
                    <p>Presiona en los siguientes números para contactarte directamente con nuestros asesores SUMAREC:
                    </p>
                    <ul>
                        <li><a href="https://wa.me/573113607519"target="_blank">+57 311 360 7519</a></li>
                        <li><a href="https://wa.me/573204292908" target="_blank">+57 320 429 2908</a></li>
                        <li><a href="https://wa.me/573115157558" target="_blank">+57 311 515 7558</a></li>
                    </ul>
                </div>
                <div class="redes-content">
                    <a target="_blank" href="">
                        <div class="redes-fb bg-img">
                            <h3>Facebook</h3>
                            <p>Presiona aquí para visitar el Facebook oficial de SUMAREC:</p>
                        </div>
                    </a>
                    <a target="_blank" href="">
                        <div class="redes-ig bg-img">
                            <h3>Instagram</h3>
                            <p>Presiona aquí para visitar el Instagram oficial de SUMAREC:</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-content">
            <a class="logo" href="index.php">
                <picture>
                    <source srcset="build/img/logoBlanco.avif" type="image/avif" />
                    <source srcset="build/img/logoBlanco.webp" type="image/webp" />
                    <img loading="Lazy" src="build/img/logoBlanco.png" alt="logo Sumarec blanco" />
                </picture>
            </a>
            <nav>
                <a href="index.php">Inicio</a>
                <a href="servicios.php">Servicios</a>
                <a class="active" href="contacto.php">Contacto</a>
            </nav>
        </div>

        <div class="footer-info">
            <div class="footer-text">
                <p>Carrera 22 # 49-46 Barrio Colombia </p>
                <p>Barrancabermeja-Santander</p>
            </div>
            <h4>2022 SUMAREC S.A.S</h4>
            <div class="footer-redes">
                <a href="#" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram"
                        width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <rect x="4" y="4" width="16" height="16" rx="4" />
                        <circle cx="12" cy="12" r="3" />
                        <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
                    </svg></a>
                <a href="#" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook"
                        width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                    </svg></a>
                <a href="https://wa.me/573204292908" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp"
                        width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                        <path
                            d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1" />
                    </svg>
                </a>
            </div>
        </div>
    </footer>
</body>

</html>