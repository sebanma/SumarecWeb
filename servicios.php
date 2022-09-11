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
    <div class="modal">
        <div class="modal-content servicios-card">
            <div class="servicios-svg">
                <h2></h2>
                <svg width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d21314" fill="none"></svg>
            </div>
            <p></p>
            <picture>
                <source class="modal-avif" srcset="" type="image/avif" />
                <source class="modal-webp" srcset="" type="image/webp" />
                <img loading="Lazy" class="modal-png" loading="Lazy" src="" alt="" />
            </picture>
        </div>
        <button class="modal-close">X</button>
    </div>
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
            <a class="active" href="servicios.php">Servicios</a>
            <a href="contacto.php">Contacto</a>
            <a href="form.php"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-archive" width="80" height="30" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <rect x="3" y="4" width="18" height="4" rx="2" />
  <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10" />
  <line x1="10" y1="12" x2="14" y2="12" />
</svg> </a>
        </nav>
    </header>
    <div class="menu-hide" style="display: none;">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a class="active-hide" href="servicios.php">Servicios</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </div>
    <main class="border content">
        <h1>Nuestros Servicios</h1>
        <div class="servicios">
            <div id="1" class="servicios-card">
                <h4>Mantenimiento Electrónico.</h4>
                <p>Mantenimiento, suministro y reparación de variadores de velocidad y de frecuencia, arrancadores
                    suaves, tarjetas de control para equipos de bombeo mecánico, tarjetas analógicas para medición de
                    pozos, tarjetas de expansión y de comunicación, fuentes conmutadas, controlador lógico programable
                    (PLC), pantallas táctiles (panelview), sistema de alimentación ininterrumpida (UPS), Switch, Router,
                    transmisor de presión, de nivel, de temperatura, de flujo, switch de nivel. Mantenimiento a equipos
                    de medición de instrumentación (temperatura, voltaje, presión, flujo, corriente de lazo, etc.) </p>
                <div class="servicios-svg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-devices" width="40"
                        height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d21314" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <rect x="13" y="8" width="8" height="12" rx="1" />
                        <path d="M18 8v-3a1 1 0 0 0 -1 -1h-13a1 1 0 0 0 -1 1v12a1 1 0 0 0 1 1h9" />
                        <line x1="16" y1="9" x2="18" y2="9" />
                    </svg>
                    <button class="modal-open">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                            width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#d21314" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                            <line x1="13" y1="18" x2="19" y2="12" />
                            <line x1="13" y1="6" x2="19" y2="12" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="2" class="servicios-card">
                <h4>Diseño y Fabricación de Cables.</h4>
                <p>Suministro, mantenimiento, reparación y construcción con actividades de conexionado de celdas de
                    cargas para machines y sistemas de bombeo mecánico, fabricación de cables de celdas de carga.</p>
                <div class="servicios-svg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shape-2" width="40"
                        height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d21314" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <circle cx="5" cy="5" r="2" />
                        <circle cx="19" cy="19" r="2" />
                        <circle cx="19" cy="5" r="2" />
                        <circle cx="5" cy="19" r="2" />
                        <path d="M6.5 17.5l11 -11m-12.5 .5v10m14 -10v10" />
                    </svg>
                    <button class="modal-open">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                            width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#d21314" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                            <line x1="13" y1="18" x2="19" y2="12" />
                            <line x1="13" y1="6" x2="19" y2="12" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="3" class="servicios-card">
                <h4>Automatización.</h4>
                <p>Desarrollo de aplicaciones tecnológicas aplicadas a la industria y requerimientos según el cliente,
                    programación de PLC, microcontroladores, desarrollo de lógica de contactores, configuración de
                    equipos de comunicación, redes de datos e información.</p>
                <div class="servicios-svg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings-automation"
                        width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d21314" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                        <path d="M10 9v6l5 -3z" />
                    </svg>
                    <button class="modal-open">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                            width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#d21314" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                            <line x1="13" y1="18" x2="19" y2="12" />
                            <line x1="13" y1="6" x2="19" y2="12" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="4" class="servicios-card">
                <h4>Sistemas de Seguridad.</h4>
                <p>Instalación de sistemas de circuito cerrado para local, empresa y zona residencial. Comunicación web
                    con el punto de monitoreo.</p>
                <div class="servicios-svg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shield-lock" width="40"
                        height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d21314" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3" />
                        <circle cx="12" cy="11" r="1" />
                        <line x1="12" y1="12" x2="12" y2="14.5" />
                    </svg>
                    <button class="modal-open">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                            width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#d21314" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                            <line x1="13" y1="18" x2="19" y2="12" />
                            <line x1="13" y1="6" x2="19" y2="12" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="5" class="servicios-card">
                <h4>Diseño electrónico y Elaboración de Componentes con Impresión 3D.</h4>
                <p>Elaboración de tarjetas PCB para procesos electrónicos puntuales de equipos
                    electrónicos. Elaboración y desarrollo de componentes en impresión 3D con materiales de alta calidad
                    (ABS, Fibra de carbono, PLA). </p>
                <div class="servicios-svg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-3d-cube-sphere"
                        width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d21314" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M6 17.6l-2 -1.1v-2.5" />
                        <path d="M4 10v-2.5l2 -1.1" />
                        <path d="M10 4.1l2 -1.1l2 1.1" />
                        <path d="M18 6.4l2 1.1v2.5" />
                        <path d="M20 14v2.5l-2 1.12" />
                        <path d="M14 19.9l-2 1.1l-2 -1.1" />
                        <line x1="12" y1="12" x2="14" y2="10.9" />
                        <line x1="18" y1="8.6" x2="20" y2="7.5" />
                        <line x1="12" y1="12" x2="12" y2="14.5" />
                        <line x1="12" y1="18.5" x2="12" y2="21" />
                        <path d="M12 12l-2 -1.12" />
                        <line x1="6" y1="8.6" x2="4" y2="7.5" />
                    </svg>
                    <button class="modal-open">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                            width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#d21314" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                            <line x1="13" y1="18" x2="19" y2="12" />
                            <line x1="13" y1="6" x2="19" y2="12" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="6" class="servicios-card">
                <h4>Obras Eléctricas.</h4>
                <p>Suministro, mantenimiento, reparación y construcción con actividades de desmantelamiento de sistemas
                    eléctricos, instalación de tubería Conduit, instalación de bandejas porta cable, cableado
                    estructurado, conexionado, instalación y pruebas a tableros para baja, media, alta tensión y puesta
                    en marcha de sistemas eléctricos.</p>
                <div class="servicios-svg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bolt" width="40"
                        height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d21314" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <polyline points="13 3 13 10 19 10 11 21 11 14 5 14 13 3" />
                    </svg>
                    <button class="modal-open">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                            width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#d21314" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                            <line x1="13" y1="18" x2="19" y2="12" />
                            <line x1="13" y1="6" x2="19" y2="12" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="7" class="servicios-card">
                <h4>Montaje de Tubería.</h4>
                <p>Suministro, mantenimiento, reparación y construcción con actividades a sistemas de tubería para
                    refinerías, estaciones de bombeo, compresión; oleoductos y gasoductos, sistemas de tubería
                    sanitaria, sistemas en tuberías plásticas y puesta en marcha de los sistemas anteriormente
                    mencionados. </p>
                <div class="servicios-svg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-droplet" width="40"
                        height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d21314" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M6.8 11a6 6 0 1 0 10.396 0l-5.197 -8l-5.2 8z" />
                    </svg>
                    <button class="modal-open">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                            width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#d21314" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                            <line x1="13" y1="18" x2="19" y2="12" />
                            <line x1="13" y1="6" x2="19" y2="12" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="8" class="servicios-card">
                <h4>Diseño e Ingeniería.</h4>
                <p>Desarrollo de ingeniería básica y de detalle en cualquier proceso de la industria, realizando
                    levantamientos en campo, elaboración de memorias de cálculo, elaboración de especificaciones
                    técnicas, elaboración de planos requeridos para todo proceso constructivo de las especialidades de
                    proceso, mecánica, instrumentación, eléctrica y civil en diseños 2D y 3D, caracterización y
                    catalogación, dosieres, planos Red Line y As Built.</p>
                <div class="servicios-svg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-wallpaper" width="40"
                        height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d21314" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M8 6h10a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-12" />
                        <circle cx="6" cy="18" r="2" />
                        <path d="M8 18v-12a2 2 0 1 0 -4 0v12" />
                    </svg>
                    <button class="modal-open">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                            width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#d21314" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                            <line x1="13" y1="18" x2="19" y2="12" />
                            <line x1="13" y1="6" x2="19" y2="12" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="9" class="servicios-card">
                <h4>Obras Civiles.</h4>
                <p>Suministro, mantenimiento, reparación y construcción con actividades de demolición, excavación,
                    rellenos, estructuras en concreto, estructuras metálicas, pavimentación de vías flexibles, rígido y
                    articulado, construcción de edificaciones, sistemas de alcantarillado y plomería. </p>
                <div class="servicios-svg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-building-skyscraper"
                        width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d21314" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <line x1="3" y1="21" x2="21" y2="21" />
                        <path d="M5 21v-14l8 -4v18" />
                        <path d="M19 21v-10l-6 -4" />
                        <line x1="9" y1="9" x2="9" y2="9.01" />
                        <line x1="9" y1="12" x2="9" y2="12.01" />
                        <line x1="9" y1="15" x2="9" y2="15.01" />
                        <line x1="9" y1="18" x2="9" y2="18.01" />
                    </svg>
                    <button class="modal-open">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                            width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#d21314" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                            <line x1="13" y1="18" x2="19" y2="12" />
                            <line x1="13" y1="6" x2="19" y2="12" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="10" class="servicios-card">
                <h4>Pruebas Hidrostáticas.</h4>
                <p>Realizamos pruebas hidrostáticas y neumáticas a sistemas de tubería de proceso, oleoductos,
                    gasoductos, recipientes a presión y válvulas.</p>
                <div class="servicios-svg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-manual-gearbox"
                        width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d21314" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <circle cx="5" cy="6" r="2" />
                        <circle cx="12" cy="6" r="2" />
                        <circle cx="19" cy="6" r="2" />
                        <circle cx="5" cy="18" r="2" />
                        <circle cx="12" cy="18" r="2" />
                        <line x1="5" y1="8" x2="5" y2="16" />
                        <line x1="12" y1="8" x2="12" y2="16" />
                        <path d="M19 8v2a2 2 0 0 1 -2 2h-12" />
                    </svg>
                    <button class="modal-open">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                            width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#d21314" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                            <line x1="13" y1="18" x2="19" y2="12" />
                            <line x1="13" y1="6" x2="19" y2="12" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="11" class="servicios-card">
                <h4>Limpieza y Pintura.</h4>
                <p>Suministro, mantenimiento y reparación con actividades de limpieza con chorro abrasivo, manual
                    mecánica y todo esquema de pintura según el requerimiento del cliente a sistemas de tubería, recipientes a presión, tanques de
                    almacenamiento y estructuras metálicas.</p>
                <div class="servicios-svg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-paint" width="40"
                        height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d21314" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <rect x="5" y="3" width="14" height="6" rx="2" />
                        <path d="M19 6h1a2 2 0 0 1 2 2a5 5 0 0 1 -5 5l-5 0v2" />
                        <rect x="10" y="15" width="4" height="6" rx="1" />
                    </svg>
                    <button class="modal-open">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                            width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#d21314" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                            <line x1="13" y1="18" x2="19" y2="12" />
                            <line x1="13" y1="6" x2="19" y2="12" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="12" class="servicios-card">
                <h4>Obras de Instrumentación y Control.</h4>
                <p>Suministro, mantenimiento y reparación de instrumentación asociada a sistemas de medición industriales, incluyendo montaje de instrumentos, pruebas de lazo, 
                    calibraciones en laboratorio y en sitio, mantenimiento correctivo y preventivo de equipos y sistemas electrónicos de potencia y control, medición
                    y registro de variables. </p>
                <div class="servicios-svg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye-check" width="40"
                        height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#d21314" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <circle cx="12" cy="12" r="2" />
                        <path
                            d="M12 19c-4 0 -7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7c-.42 .736 -.858 1.414 -1.311 2.033" />
                        <path d="M15 19l2 2l4 -4" />
                    </svg>
                    <button class="modal-open">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                            width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#d21314" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                            <line x1="13" y1="18" x2="19" y2="12" />
                            <line x1="13" y1="6" x2="19" y2="12" />
                        </svg>
                    </button>
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
                <a class="active" href="servicios.php">Servicios</a>
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