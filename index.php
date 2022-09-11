<?php
session_start();

if (isset($_SESSION['correo'])) {
    echo $_SESSION["correo"];
} else {
    echo 'no existe';
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="DC WebDev">
    <meta name="title" content="Sumarec-Reparación y Mantenimiento en diferentes sectores">
    <meta name="description" content="Sumarec es una empresa de barrancabermeja con la capacidad de sumistrar y emprender proyectos, así como el mantenimiento, 
    reparación y puesta en marcha de sistemas en diferentes sectores.">
    <meta name="keywords" content="sumarec,industria petroquimica,barrancabermeja,industria minera,industria tecnológica,industria energética,emprender proyectos,mantenimiento,suministro">
    <meta http-equiv="Content-Type" content="text/html; ISO-8859-1">
    <meta name="robots" content="NOODP">
    <title>Sumarec</title>
    <link rel="shortcut icon" href="build/img/logoS.png">
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
    <div class="menu-hide" style="display: none;">
        <ul>
            <li><a class="active-hide" href="index.php">Inicio</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </div>
    <main>
        <section class="banner">
            <div class="slide">
                <div class="slide-inner">
                    <input class="slide-open" type="radio" id="slide-1" name="slide" aria-hidden="true" hidden="" checked="checked" />
                    <div class="slide-item">
                        <div class="banner1-image">
                            <div class="banner-info">
                                <h2>¿Conoces nuestros servicios?</h2>
                                <p>Creemos tener la mejor solución para lo que estás
                                    buscando. Conoce nuestro portafolio aquí:
                                </p>
                                <a href="servicios.php">
                                    <input type="button" value="Servicios">
                                </a>
                            </div>
                        </div>
                        <picture>
                            <source srcset="build/img/logoBlanco.avif" type="image/avif" />
                            <source srcset="build/img/logoBlanco.webp" type="image/webp" />
                            <img loading="Lazy" src="build/img/logoBlanco.png" alt="logo Sumarec blanco" />
                        </picture>
                    </div>
                    <input class="slide-open" type="radio" id="slide-2" name="slide" aria-hidden="true" hidden="" />
                    <div class="slide-item">
                        <div class="banner2-image">
                            <div class="banner2-info">
                                <h2>¿Ya saben como contactarnos?</h2>
                                <p>Contamos con variedad de opciones para poderte dar el mejor servicio.</p>
                                <a href="contacto.php"><input type="button" value="¡Contáctanos Ya!"></a>
                                <div class="banner-redes">
                                    <a href="#" target="_blank">
                                        <picture class="red1">
                                            <source srcset="build/img/facebook.avif" type="image/avif" />
                                            <source srcset="build/img/facebook.webp" type="image/webp" />
                                            <img loading="Lazy" src="build/img/facebook.png" alt="logo whatsapp" />
                                        </picture>
                                    </a>
                                    <a href="https://wa.me/573204292908" target="_blank">
                                        <picture>
                                            <source srcset="build/img/whatsapp.avif" type="image/avif" />
                                            <source srcset="build/img/whatsapp.webp" type="image/webp" />
                                            <img loading="Lazy" src="build/img/whatsapp.png" alt="logo facebook" />
                                        </picture>
                                    </a>
                                    <a href="#" target="_blank">
                                        <picture>
                                            <source srcset="build/img/instagram.avif" type="image/avif" />
                                            <source srcset="build/img/instagram.webp" type="image/webp" />
                                            <img loading="Lazy" src="build/img/instagram.png" alt="logo instagram" />
                                        </picture>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <picture>
                            <source srcset="build/img/logoBlanco.avif" type="image/avif" />
                            <source srcset="build/img/logoBlanco.webp" type="image/webp" />
                            <img loading="Lazy" src="build/img/logoBlanco.png" alt="logo Sumarec blanco" />
                        </picture>
                    </div>
                    <input class="slide-open" type="radio" id="slide-3" name="slide" aria-hidden="true" hidden="" />
                    <div class="slide-item">
                        <div class="banner3-image">
                            <div class="banner3-info">
                                <h2>Nuestra Ubicación</h2>
                                <p>Estamos ubicados en Carrera 22 # 49-46 Barrio Colombia
                                    municipio de Barrancabermeja,
                                    Colombia. Te estamos esperando para brindarte la mejor
                                    atención posible!
                                </p>
                                <a target="_blank" href="https://www.google.es/maps/place/Cra.+22+%2349-46,+Barrancabermeja,+Santander/@7.0598294,-73.8577981,17z/data=!3m1!4b1!4m5!3m4!1s0x8e42eca676c821fd:0x2565b29412c50f5!8m2!3d7.0598241!4d-73.8556094?hl=es">
                                    <input type="button" value="Cómo Llegar">
                                </a>
                            </div>
                        </div>
                        <picture>
                            <source srcset="build/img/logoBlanco.avif" type="image/avif" />
                            <source srcset="build/img/logoBlanco.webp" type="image/webp" />
                            <img loading="Lazy" src="build/img/logoBlanco.png" alt="logo Sumarec blanco" />
                        </picture>

                    </div>
                    <div class="slide-control prev control-1 slide-inner">
                        <label for="slide-3">‹</label>
                    </div>
                    <div class="slide-control next control-1 slide-inner">
                        <label for="slide-2">›</label>
                    </div>
                    <div class="slide-control prev control-2 slide-inner">
                        <label for="slide-1">‹</label>
                    </div>
                    <div class="slide-control next control-2 slide-inner">
                        <label for="slide-3">›</label>
                    </div>
                    <div class="slide-control prev control-3 slide-inner">
                        <label for="slide-2">‹</label>
                    </div>
                    <div class="slide-control next control-3 slide-inner">
                        <label for="slide-1">›</label>
                    </div>
                    <ol class="slide-indicador">
                        <li>
                            <label for="slide-1" class="slide-circulo">•</label>
                        </li>
                        <li>
                            <label for="slide-2" class="slide-circulo">•</label>
                        </li>
                        <li>
                            <label for="slide-3" class="slide-circulo">•</label>
                        </li>
                    </ol>
                </div>
            </div>
        </section>

        <section class="nosotros border">
            <div class="text">
                <h2>¿Quienes Somos?</h2>
                <p>
                    Somos una compañía que nace en 2022 con el objetivo de brindar
                    soluciones a nuestros futuros clientes, ofreciendo resultados de
                    calidad en el desarrollo de procesos propios teniendo la capacidad de suministrar, emprender proyectos, así como el mantenimiento, reparación y puesta en marcha de sistemas de la industria petroquímica, minera, tecnológica y energética del país y el extranjero.
                </p>
            </div>
            <picture>
                <source srcset="build/img/logo.avif" type="image/avif" />
                <source srcset="build/img/logo.webp" type="image/webp" />
                <img loading="Lazy" src="build/img/logo.png" alt="logo Sumarec" />
            </picture>
        </section>

        <section class="campos border">
            <div class="campos-content">
                <div class="text">
                    <h2>Nuestros Campos de Acción</h2>
                    <p>
                        Tenemos la capacidad de sumistrar y emprender proyectos, así como
                        el mantenimiento, reparación y puesta en marcha de sistemas en
                        sectores tales como:
                    </p>
                </div>
                <svg width="190" height="164" viewBox="0 0 190 164" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_22_593)">
                        <path d="M174.82 20.6947H11.5068C11.3462 20.6947 11.1894 20.7368 11.0572 20.8156C10.925 20.8943 10.8236 21.0058 10.7666 21.1355L-3.21817 52.6952C-3.25961 52.789 -3.27976 52.8887 -3.27754 52.989C-3.18322 55.8619 -1.78215 58.5872 0.622475 60.5752C3.0271 62.5632 6.2419 63.6539 9.57121 63.6115C10.6683 63.6052 11.7601 63.4801 12.821 63.239C16.1174 62.5285 18.9538 60.7203 20.71 58.2097C20.7778 58.1012 20.8784 58.0106 21.001 57.9474C21.1236 57.8843 21.2638 57.8509 21.4066 57.8509C21.5494 57.8509 21.6896 57.8843 21.8122 57.9474C21.9349 58.0106 22.0355 58.1012 22.1033 58.2097C23.2707 59.8558 24.9081 61.2156 26.8588 62.1591C28.8094 63.1025 31.008 63.5979 33.244 63.5979C35.48 63.5979 37.6786 63.1025 39.6292 62.1591C41.5799 61.2156 43.2173 59.8558 44.3847 58.2097C44.4526 58.1012 44.5531 58.0106 44.6758 57.9474C44.7984 57.8843 44.9386 57.8509 45.0814 57.8509C45.2242 57.8509 45.3644 57.8843 45.487 57.9474C45.6097 58.0106 45.7102 58.1012 45.7781 58.2097C46.9457 59.855 48.583 61.2141 50.5333 62.1571C52.4835 63.1 54.6815 63.5951 56.9168 63.5951C59.1522 63.5951 61.3501 63.1 63.3004 62.1571C65.2506 61.2141 66.8879 59.855 68.0556 58.2097C68.1231 58.1004 68.2237 58.0089 68.3468 57.9452C68.4699 57.8814 68.6107 57.8478 68.7542 57.8478C68.8977 57.8478 69.0386 57.8814 69.1616 57.9452C69.2847 58.0089 69.3854 58.1004 69.4529 58.2097C70.6205 59.855 72.2578 61.2141 74.2081 62.1571C76.1583 63.1 78.3563 63.5951 80.5916 63.5951C82.827 63.5951 85.0249 63.1 86.9752 62.1571C88.9254 61.2141 90.5627 59.855 91.7304 58.2097C91.7979 58.1004 91.8985 58.0089 92.0216 57.9452C92.1447 57.8814 92.2855 57.8478 92.429 57.8478C92.5725 57.8478 92.7134 57.8814 92.8364 57.9452C92.9595 58.0089 93.0602 58.1004 93.1277 58.2097C94.2953 59.855 95.9326 61.2141 97.8828 62.1571C99.8331 63.1 102.031 63.5951 104.266 63.5951C106.502 63.5951 108.7 63.1 110.65 62.1571C112.6 61.2141 114.238 59.855 115.405 58.2097C115.473 58.1004 115.573 58.0089 115.696 57.9452C115.819 57.8814 115.96 57.8478 116.104 57.8478C116.247 57.8478 116.388 57.8814 116.511 57.9452C116.634 58.0089 116.735 58.1004 116.802 58.2097C117.97 59.855 119.607 61.2141 121.558 62.1571C123.508 63.1 125.706 63.5951 127.941 63.5951C130.177 63.5951 132.375 63.1 134.325 62.1571C136.275 61.2141 137.912 59.855 139.08 58.2097C139.148 58.1012 139.248 58.0106 139.371 57.9474C139.494 57.8843 139.634 57.8509 139.777 57.8509C139.919 57.8509 140.06 57.8843 140.182 57.9474C140.305 58.0106 140.405 58.1012 140.473 58.2097C141.641 59.855 143.278 61.2141 145.228 62.1571C147.179 63.1 149.377 63.5951 151.612 63.5951C153.847 63.5951 156.045 63.1 157.996 62.1571C159.946 61.2141 161.583 59.855 162.751 58.2097C162.818 58.1004 162.919 58.0089 163.042 57.9452C163.165 57.8814 163.306 57.8478 163.449 57.8478C163.593 57.8478 163.734 57.8814 163.857 57.9452C163.98 58.0089 164.081 58.1004 164.148 58.2097C165.303 59.8661 166.937 61.2347 168.89 62.1812C170.843 63.1276 173.047 63.6193 175.287 63.608C175.556 63.608 175.809 63.5568 176.078 63.5431C179.264 63.4225 182.278 62.2651 184.515 60.3039C186.752 58.3426 188.046 55.723 188.136 52.972C188.138 52.8803 188.122 52.789 188.088 52.702L175.568 21.156C175.514 21.0214 175.413 20.9047 175.279 20.822C175.145 20.7393 174.985 20.6948 174.82 20.6947Z" fill="#FF0000" fill-opacity="0.2" />
                        <path d="M151.854 77.6541H102.434C99.1545 77.6541 96.4962 79.9486 96.4962 82.7791V111.154C96.4962 113.985 99.1545 116.279 102.434 116.279H151.854C155.133 116.279 157.791 113.985 157.791 111.154V82.7791C157.791 79.9486 155.133 77.6541 151.854 77.6541Z" fill="#FF0000" fill-opacity="0.2" />
                        <path d="M65.1739 85.8335H38.1306C36.5691 85.8353 35.0722 86.3715 33.9681 87.3246C32.8639 88.2776 32.2427 89.5697 32.2406 90.9175V138.491H71.0639V90.9175C71.0618 89.5697 70.4406 88.2776 69.3365 87.3246C68.2323 86.3715 66.7354 85.8353 65.1739 85.8335Z" fill="#FF0000" fill-opacity="0.2" />
                        <path d="M175.287 69.3584C173.047 69.369 170.843 68.877 168.89 67.9306C166.938 66.9842 165.304 65.6159 164.148 63.96C164.081 63.8507 163.98 63.7593 163.857 63.6955C163.734 63.6318 163.593 63.5981 163.449 63.5981C163.306 63.5981 163.165 63.6318 163.042 63.6955C162.919 63.7593 162.818 63.8507 162.751 63.96C161.587 65.6086 159.951 66.971 158 67.9164C156.05 68.8618 153.851 69.3583 151.614 69.3583C149.377 69.3583 147.178 68.8618 145.228 67.9164C143.277 66.971 141.642 65.6086 140.477 63.96C140.41 63.8498 140.309 63.7576 140.186 63.6932C140.062 63.6289 139.921 63.5948 139.777 63.5948C139.632 63.5948 139.491 63.6289 139.367 63.6932C139.244 63.7576 139.143 63.8498 139.076 63.96C137.912 65.6086 136.276 66.971 134.326 67.9164C132.375 68.8618 130.176 69.3583 127.939 69.3583C125.702 69.3583 123.503 68.8618 121.553 67.9164C119.603 66.971 117.967 65.6086 116.803 63.96C116.735 63.8507 116.634 63.7593 116.511 63.6955C116.388 63.6318 116.247 63.5981 116.104 63.5981C115.96 63.5981 115.82 63.6318 115.696 63.6955C115.573 63.7593 115.473 63.8507 115.405 63.96C114.238 65.6053 112.6 66.9645 110.65 67.9074C108.7 68.8503 106.502 69.3455 104.266 69.3455C102.031 69.3455 99.8332 68.8503 97.8829 67.9074C95.9327 66.9645 94.2954 65.6053 93.1277 63.96C93.0602 63.8507 92.9596 63.7593 92.8365 63.6955C92.7134 63.6318 92.5726 63.5981 92.4291 63.5981C92.2855 63.5981 92.1447 63.6318 92.0217 63.6955C91.8986 63.7593 91.7979 63.8507 91.7304 63.96C90.5628 65.6053 88.9255 66.9645 86.9752 67.9074C85.025 68.8503 82.827 69.3455 80.5917 69.3455C78.3563 69.3455 76.1584 68.8503 74.2081 67.9074C72.2579 66.9645 70.6206 65.6053 69.4529 63.96C69.3854 63.8507 69.2848 63.7593 69.1617 63.6955C69.0386 63.6318 68.8978 63.5981 68.7543 63.5981C68.6108 63.5981 68.4699 63.6318 68.3469 63.6955C68.2238 63.7593 68.1231 63.8507 68.0556 63.96C66.888 65.6053 65.2507 66.9645 63.3005 67.9074C61.3502 68.8503 59.1522 69.3455 56.9169 69.3455C54.6815 69.3455 52.4836 68.8503 50.5333 67.9074C48.5831 66.9645 46.9458 65.6053 45.7781 63.96C45.7103 63.8515 45.6097 63.7609 45.4871 63.6978C45.3644 63.6346 45.2243 63.6013 45.0815 63.6013C44.9387 63.6013 44.7985 63.6346 44.6759 63.6978C44.5532 63.7609 44.4526 63.8515 44.3848 63.96C43.2174 65.6061 41.5799 66.9659 39.6293 67.9094C37.6786 68.8528 35.4801 69.3482 33.2441 69.3482C31.0081 69.3482 28.8095 68.8528 26.8589 67.9094C24.9082 66.9659 23.2708 65.6061 22.1033 63.96C22.0355 63.8515 21.9349 63.7609 21.8123 63.6978C21.6897 63.6346 21.5495 63.6013 21.4067 63.6013C21.2639 63.6013 21.1237 63.6346 21.0011 63.6978C20.8784 63.7609 20.7778 63.8515 20.71 63.96C19.0602 66.3262 16.4456 68.0749 13.3792 68.8629C13.2195 68.9021 13.0788 68.9848 12.9782 69.0988C12.8776 69.2127 12.8224 69.3518 12.8211 69.495V139.537C12.667 141.491 13.4117 143.419 14.8938 144.902C16.3758 146.385 18.4756 147.304 20.7377 147.46H168.162C170.424 147.304 172.524 146.385 174.006 144.902C175.488 143.419 176.233 141.491 176.079 139.537V69.3071C175.813 69.3208 175.56 69.3584 175.287 69.3584ZM75.0223 141.894H28.2823V90.9175C28.2854 88.6638 29.324 86.5032 31.1703 84.9096C33.0165 83.316 35.5197 82.4196 38.1306 82.4169H65.174C67.785 82.4196 70.2881 83.316 72.1343 84.9096C73.9806 86.5032 75.0192 88.6638 75.0223 90.9175V141.894ZM161.753 111.144C161.753 113.41 160.711 115.582 158.855 117.184C156.999 118.786 154.482 119.686 151.857 119.686H102.434C99.8092 119.686 97.2922 118.786 95.4364 117.184C93.5805 115.582 92.5379 113.41 92.5379 111.144V82.7859C92.5379 80.5205 93.5805 78.3479 95.4364 76.746C97.2922 75.1441 99.8092 74.2442 102.434 74.2442H151.857C153.157 74.2442 154.444 74.4651 155.644 74.8944C156.845 75.3236 157.936 75.9528 158.855 76.746C159.774 77.5392 160.503 78.4808 161 79.5171C161.497 80.5534 161.753 81.6642 161.753 82.7859V111.144Z" fill="#FF0000" fill-opacity="0.2" />
                    </g>
                    <defs>
                        <clipPath id="clip0_22_593">
                            <rect width="190" height="164" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <div class="campos-icon">
                <div id="1" class="icon-card">
                    <h4>INDUSTRÍA<br> PETROQUÍMICA</h4>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-droplet" width="60" height="60" viewBox="0 0 24 24" stroke-width="2" stroke="#d21314" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M6.8 11a6 6 0 1 0 10.396 0l-5.197 -8l-5.2 8z" />
                    </svg>
                </div>
                <div id="2" class="icon-card">
                    <h4>INDUSTRÍA<br> MINERA</h4>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-diamond" width="60" height="60" viewBox="0 0 24 24" stroke-width="2" stroke="#d21314" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M6 5h12l3 5l-8.5 9.5a0.7 .7 0 0 1 -1 0l-8.5 -9.5l3 -5" />
                        <path d="M10 12l-2 -2.2l.6 -1" />
                    </svg>
                </div>
                <div id="3" class="icon-card">
                    <h4>INDUSTRÍA<br> TECNOLÓGICA</h4>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-mobile" width="60" height="60" viewBox="0 0 24 24" stroke-width="2" stroke="#d21314" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <rect x="7" y="4" width="10" height="16" rx="1" />
                        <line x1="11" y1="5" x2="13" y2="5" />
                        <line x1="12" y1="17" x2="12" y2="17.01" />
                    </svg>
                </div>
                <div id="4" class="icon-card">
                    <h4>INDUSTRÍA<br> ENERGÉTICA</h4>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bulb" width="60" height="60" viewBox="0 0 24 24" stroke-width="2" stroke="#d21314" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 12h1m8 -9v1m8 8h1m-15.4 -6.4l.7 .7m12.1 -.7l-.7 .7" />
                        <path d="M9 16a5 5 0 1 1 6 0a3.5 3.5 0 0 0 -1 3a2 2 0 0 1 -4 0a3.5 3.5 0 0 0 -1 -3" />
                        <line x1="9.7" y1="17" x2="14.3" y2="17" />
                    </svg>
                </div>
        </section>

        <section class="vision border">

            <picture>
                <source srcset="build/img/mision.avif" type="image/avif" />
                <source srcset="build/img/mision.webp" type="image/webp" />
                <img loading="Lazy" src="build/img/mision.png" alt="logo Sumarec blanco" />
            </picture>
            <div class="vision-text">
                <h3>Visión</h3>
                <p>Para el año 2030 SUMAREC S.A.S. será una empresa líder en el diseño, suministro, mantenimiento,
                    reparación y construcción de soluciones tecnológicas, impulsando la implementación de tecnologías
                    limpias bajo cumplimiento de normas y estándares nacionales e internacionales; para las industrias
                    petroquimica, minera, tecnológica y energética, acompañando y asesorando a sus clientes desde la
                    fase de inicio hasta la puesta en marcha de cada solución.</p>
                <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-rocket" width="40"
                    height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#06065c" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M4 13a8 8 0 0 1 7 7a6 6 0 0 0 3 -5a9 9 0 0 0 6 -8a3 3 0 0 0 -3 -3a9 9 0 0 0 -8 6a6 6 0 0 0 -5 3" />
                    <path d="M7 14a6 6 0 0 0 -3 6a6 6 0 0 0 6 -3" />
                    <circle cx="15" cy="9" r="1" />
                </svg> -->
            </div>
            <div class="vision-text bg-azul">
                <h3>Misión</h3>
                <p>Diseñar y desarrollar soluciones integrales, amigables con el medio ambiente y oportunas a la
                    necesidad y expectativas del cliente, para dar una solución efectiva y eficiente a partir de la
                    intervención y puesta en marcha de un proceso determinado.<br />

                    Generar nuevas tecnologías a partir de procesos investigativos que incorporen el método de
                    estudio adecuado y la correcta disposición del desarrollo innovador.
                </p>
                <!-- <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-target" width="40"
                    height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d21314" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <circle cx="12" cy="12" r="1" />
                    <circle cx="12" cy="12" r="5" />
                    <circle cx="12" cy="12" r="9" />
                </svg> -->
            </div>
            <picture>
                <source srcset="build/img/vision.avif" type="image/avif" />
                <source srcset="build/img/vision.webp" type="image/webp" />
                <img loading="Lazy" src="build/img/vision.png" alt="logo Sumarec blanco" />
            </picture>
        </section>
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
                <a class="active" href="index.php">Inicio</a>
                <a href="servicios.php">Servicios</a>
                <a href="contacto.php">Contacto</a>
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
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <rect x="4" y="4" width="16" height="16" rx="4" />
                        <circle cx="12" cy="12" r="3" />
                        <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
                    </svg></a>
                <a href="#" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                    </svg></a>
                <a href="https://wa.me/573204292908" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-whatsapp" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                        <path d="M9 10a0.5 .5 0 0 0 1 0v-1a0.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a0.5 .5 0 0 0 0 -1h-1a0.5 .5 0 0 0 0 1" />
                    </svg>
                </a>
            </div>
        </div>
    </footer>
</body>

</html>