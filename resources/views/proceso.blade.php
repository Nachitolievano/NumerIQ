<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="assets/NumerIQ.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NumerIQ</title>
    <link rel="stylesheet" href="assets/img/appis.css">
    <style> 

        /* Estilos personalizados */
        body {
            font-family: 'Nexa-ExtraLight', sans-serif; /* Aplicar fuente personalizada */
            background-color: #D5D5D5;
        }

        .maines-container {
            width: 100%;
            text-align: center; /* Centrar contenido dentro del contenedor */
        }

        .contenido {
            display: inline-block; /* Para que el contenido esté en la misma línea */
            width: 55%; /* Ancho del contenedor del contenido */
            vertical-align: top; /* Alinear el contenido a la parte superior */
        }

        .imagen-container {
            display: inline-block; /* Para que la imagen esté en la misma línea */
            width: 40%; /* Ancho del contenedor de la imagen */
        }
        
        .imagen-container img {
            width: 100%; /* Ancho máximo de la imagen dentro del contenedor */
            height: auto; /* Altura automática para mantener la proporción */
        }

        .testimonio-texto {
            margin-bottom: 35px;
            color: black; /* Aplicar color de texto */
            font-size: 25px; /* Aplicar tamaño de texto */
            line-height: 1.5; /* Ajustar altura de línea */
        }

        .masthead-title {
            font-size: 38px; /* Aplicar tamaño de texto */
            font-weight: 1000;
            text-align: center;
            margin-bottom: 22px; /* Agregar espacio inferior */
        }

        .masthead-subtitle {
            font-size: 30px; /* Aplicar tamaño de texto */
            font-weight: 1000;
            text-align: center;
            margin-bottom: 15px; /* Agregar espacio inferior */
        }

        .btn-xl {
            font-size: 30px; /* Aplicar tamaño de texto */
            padding: 15px 30px; /* Ajustar relleno del botón */
            background-color: #28ABDB; /* Color de fondo del botón */
            color: #000; /* Color de texto del botón */
            text-decoration: none; /* Eliminar subrayado del botón */
            transition: background-color 0.3s ease; /* Agregar transición suave al color de fondo */
        }

        .btn-xl:hover {
            background-color: #28ABDB; /* Cambiar color de fondo al pasar el mouse */
        }

        .text-container {
            text-align: center; /* Centra el contenido horizontalmente */
        }     
        
        .center-imagen-container {
            text-align: center; /* Centrar la imagen horizontalmente */
            margin-top: 20px; /* Ajustar el margen superior según sea necesario */
        }
        
        .center-imagen-container img {
            height: auto; /* Altura automática para mantener la proporción */
            display: block; /* Para centrar verticalmente la imagen */
            margin: 0 auto; /* Centrar la imagen horizontalmente */
            width: 850px; /* Ancho máximo deseado */
            height: 450px; /* Altura máxima deseada */
        }
        
        .columnas-container {
            display: flex;
            justify-content: space-between; /* Distribuye el espacio entre las columnas */
            max-width: 800px; /* Ancho máximo del contenedor */
            margin: 0 auto; /* Centra el contenedor horizontalmente */
        }
        
        .testimonio-item {
            width: 20% /* Ancho del 33.333% para cada columna y 20px de espacio entre ellas */
            margin-bottom: 30px; /* Espacio entre los cuadros */
            background-color: #b4b3b3; /* Fondo gris para los cuadros */
            text-align: center; /* Centrar el contenido del cuadro */
            border-radius: 10px; /* Bordes circulares */
            padding: 8px; /* Espacio interno del cuadro */
            max-width: 170px; /* Ancho máximo del cuadro */
        }
        
        @media (max-width: 992px) {
            .testimonio-item {
                width: calc(50% - 20px); /* En pantallas más pequeñas, cambia el ancho a 50% */
            }
        }
        
        @media (max-width: 768px) {
            .testimonio-item {
                width: 100%; /* En pantallas aún más pequeñas, el ancho es del 100% para ocupar toda la pantalla */
            }
        }        
                /* Ajustar tamaño de los íconos de nube */
                .testimonio-item svg {
                    margin-bottom: 5px; /* Agregar margen inferior para separar el ícono del texto */
                    width: 30px; /* Ajustar el tamaño del ícono */
                    height: 30px;
                }
        
                /* Estilos para el texto del testimonio */
                .testimonio-nombre {
                    margin-bottom: 5px; /* Reducir el espacio entre el nombre y el texto */
                    font-family: 'Nexa-ExtraLight', sans-serif; /* Aplicar fuente personalizada */
                    font-size: 14px; /* Tamaño de fuente del nombre */
                }
        
                .testimonio-texto {
                    font-size: 12px; /* Tamaño de fuente del texto */
                    font-family: 'Nexa-ExtraLight', sans-serif; /* Aplicar fuente personalizada */
                }

                .principio-texto {
                    margin-bottom: 35px;
                    color: black; /* Aplicar color de texto */
                    font-size: 25px; /* Aplicar tamaño de texto */
                    line-height: 1.5; /* Ajustar altura de línea */
                }

                .new-imagen-container {
                    margin-top: 20px; /* Ajustar el margen superior según sea necesario */
                    margin-right: 550px; /* Agregar un pequeño margen izquierdo */
                }
                
                .new-imagen-container img {
                    display: block; /* Para centrar verticalmente la imagen */
                    margin: 0 auto; /* Centrar la imagen horizontalmente */
                    width: 350px; /* Ancho máximo deseado */
                    height: 650px; /* Altura máxima deseada */
                }

                /* Estilos personalizados */
                .team-requirements-container {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                }

                .team-content {
                    display: flex;
                    justify-content: center;
                    align-items: flex-start;
                    margin-top: 20px;
                }

                .team-image-container {
                    margin-right: 80px;
                    width: auto; /* Mantener el ancho automático para mantener la proporción */
                    height: 450px; /* Ajustar la altura deseada */
                    
                }

                .team-text-container {
                    display: flex;
                    flex-direction: column;
                }

                .team-text {
                    background-color: #ababab;
                    padding: 15px;
                    border-radius: 10px;
                    margin-bottom: 10px;
                    width: 350px;
                }

                .team-subheading {
                    font-family: 'Nexa-ExtraLight', sans-serif;
                    font-size: 20px;
                    color: #333;
                }

                .team-description {
                    font-family: 'Nexa-ExtraLight', sans-serif;
                    font-size: 14px;
                    color: #666;
                }

                .team-button {
                    margin-top: 20px;
                }    
                
                .logo-text  a {
                    color: black;
                }
            
                .menu-link a {
                    color: black;
                }

                /* Estilos personalizados */
                .convocatoria-item {
                    margin-bottom: 30px; /* Espacio entre los cuadros */
                    background-color: #D5D5D5; /* Fondo gris para los cuadros */
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Efecto de sombra */
                    float: left; /* Hacer que los elementos floten hacia la izquierda */
                    width: calc(33.33% - 20px); /* Ancho de cada elemento (33.33% del contenedor menos el espacio entre ellos) */
                    margin-right: 20px; /* Espacio entre los elementos */
                }
                .convocatoria-nombre {
                    margin-top: 10px; /* Espacio superior */
                }
                .estrellas {
                    margin-top: 10px; /* Espacio superior */
                }
                .convocatoria-texto {
                    font-size: 14px; /* Tamaño del texto */
                }
    </style>
</head>
<body>

    <!-- Contenedor principal -->
    <div class="main-container">
 
 <!-- Encabezado superior -->
 <div class="social-bar">
     <div class="social-icon-container">
         <!-- Redes sociales Agregar enlaces correspondientes -->
         <img class="social-icon" src="assets/img/instagrams.svg" alt="Facebook" />
         <div class="social-text">Facebook</div>
         <img class="social-icon" src="assets/img/twitters.svg" alt="Twitter" />
         <div class="social-text">Twitter</div>
         <img class="social-icon" src="assets/img/instagrams.svg" alt="Instagram" />
         <div class="social-text">Instagram</div>
         <img class="social-icon" src="assets/img/youtubes.svg" alt="Youtube" />
         <div class="social-text">Youtube</div>
     </div>
 </div>
 
 
 <!-- Menú de navegación -->
 <div class="navigation-menu">
     <div class="logo-text-container">
         <!-- Logo -->
         <a href="{{ url('/welcome') }}">
            <img class="logo" src="assets/img/numerIQ.png" alt="NumerIQ Logo" />
        </a>
        
 
         <!-- Espacio entre el logo y el texto -->
     <div class="logo-text">NumerIQ</a></div>
 
     </div>
 
     <!-- Enlaces del menú enlaces correspondientes -->
     <div class="menu-links">
             <div class="menu-link"><a href="{{ url('/tutores') }}">Tutores</a></div>
             <div class="menu-link"><a href="{{ url('/tutorias') }}">Servicios</a></div>
             <div class="menu-link"><a href="{{ url('/proceso') }}">Ser Tutor</a></div>
             <div class="menu-link"><a href="{{ url('/blog') }}">Blog</a></div>
             <div class="menu-link"><a href="{{ url('/legal') }}">Legal</a></div>
 
         <a href="{{ url('/carritovacio_page') }}">
         <img class="cart-icon" src="assets/img/carrito.png" />
         </a>
 
 
         <div class="login-container">
             <a href="{{ route('login') }}">
     <img class="login-icon" src="assets/img/right-to-bracket-solid 1.svg" />
     <div class="menu-link"><a href="{{ url('/calendariotutorias') }}"></a></div>
 </a>
 
         </div>
     </div>
 </div>
  <!-- Fin contendedor principal -->


    <!-- Contenedor principal -->
    <div class="maines-container">
        <!-- Navbar -->
       
        <!-- Texto de testimonio -->
        <h2 class="masthead-title">Unete a nosotros y se un tutor</h2>

        <div class="imagen-container">
            <img src="https://via.placeholder.com/270" alt="Placeholder image">
        </div>

        <div class="contenido">
            <h3 class="masthead-subtitle">Comienza a dar clases y obten ganancias</h3>
            <p class="principio-texto">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh,
                fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus.
                Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.
            </p>
            <!-- Botón -->
            <a class="btn btn-xl rounded-pill" href="#" data-bs-toggle="modal" data-bs-target="#contactModal">
                <i class="fas fa-download me-2"></i>
                ¡Unete ya!
            </a>
        </div>
        <!-- Fin del primer contenedor  -->
    </div>

    <!-- Contenedor nuevo -->
    <div class="text-container">
        <!-- Titulo -->
        <h2 class="masthead-title">Razones por las cuales dar clases con nosotros</h2>
        <p class="principio-texto">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh,
            fringilla porta ante. Vestibulum sed lorem ultrices, mollis dui sit amet, auctor purus.
            Praesent ut odio sed dolor finibus tincidunt non non ligula. Nulla laoreet faucibus tortor.
        </p>
        <div class="center-imagen-container">
            <!-- Imagen -->
            <img src="https://via.placeholder.com/200" alt="Placeholder image">
        </div>
    </div>

    <!-- Ventajas de clases -->
    <div class="text-container">
        <!-- Titulo -->
        <h2 class="masthead-title">Ventajas de dar clase</h2>
    </div>
        <div class="columnas-container">
    
            <!-- Testimonio 1 -->
            <div class="col-md-4 text-white testimonio-item">
                <!-- Icono a la izquierda -->
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cloud" viewBox="0 0 16 16">
                    <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                </svg>
                <!-- Nombre -->
                <h4 class="testimonio-nombre">"Razon 1"</h4>
                <!-- Texto de testimonio -->
                <p class="testimonio-texto">Lorem ipsum dolor sit amet</p>
            </div>

    <!-- Testimonio 2 -->
    <div class="col-md-4 text-white testimonio-item">
        <!-- Icono a la izquierda -->
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cloud" viewBox="0 0 16 16">
            <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
        </svg>
        <!-- Nombre -->
        <h4 class="testimonio-nombre">"Razon 2"</h4>
        <!-- Texto de testimonio -->
        <p class="testimonio-texto">Lorem ipsum dolor sit amet</p>
    </div>

    <!-- Testimonio 3 -->
    <div class="col-md-4 text-white testimonio-item">
        <!-- Icono a la izquierda -->
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cloud" viewBox="0 0 16 16">
            <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
        </svg>
        <!-- Nombre -->
        <h4 class="testimonio-nombre">"Razon 3"</h4>
        <!-- Texto de testimonio -->
        <p class="testimonio-texto">Lorem ipsum dolor sit amet</p>
    </div>
</div>

<!-- Ventajas de clases con numeriq -->
<div class="text-container">
    <!-- Titulo -->
    <h2 class="masthead-title">Ventajas de dar clase con numeriq</h2>

    <!-- Primera sección con 3 columnas -->
<div class="columnas-container">
    <!-- Testimonio 1 -->
    <div class="col-md-4 text-white testimonio-item">
        <!-- Icono a la izquierda -->
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cloud" viewBox="0 0 16 16">
            <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
        </svg>
        <!-- Nombre -->
        <h4 class="testimonio-nombre">"Razon 1"</h4>
        <!-- Texto de testimonio -->
        <p class="testimonio-texto">Lorem ipsum dolor sit amet</p>
    </div>

    <!-- Testimonio 2 -->
    <div class="col-md-4 text-white testimonio-item">
        <!-- Icono a la izquierda -->
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cloud" viewBox="0 0 16 16">
            <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
        </svg>
        <!-- Nombre -->
        <h4 class="testimonio-nombre">"Razon 2"</h4>
        <!-- Texto de testimonio -->
        <p class="testimonio-texto">Lorem ipsum dolor sit amet</p>
    </div>

    <!-- Testimonio 3 -->
    <div class="col-md-4 text-white testimonio-item">
        <!-- Icono a la izquierda -->
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cloud" viewBox="0 0 16 16">
            <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
        </svg>
        <!-- Nombre -->
        <h4 class="testimonio-nombre">"Razon 3"</h4>
        <!-- Texto de testimonio -->
        <p class="testimonio-texto">Lorem ipsum dolor sit amet</p>
    </div>
</div>

<!-- Segunda sección con 3 columnas -->
<!-- Agregar espacio entre secciones -->
    <div style="padding-bottom: 50px;"></div> <!-- me dio flojera entonces aqui esta el espacio -->
<div class="columnas-container">
    <!-- Testimonio 4 -->
    <div class="col-md-4 text-white testimonio-item">
        <!-- Icono a la izquierda -->
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cloud" viewBox="0 0 16 16">
            <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
        </svg>
        <!-- Nombre -->
        <h4 class="testimonio-nombre">"Razon 4"</h4>
        <!-- Texto de testimonio -->
        <p class="testimonio-texto">Lorem ipsum dolor sit amet</p>
    </div>

    <!-- Testimonio 5 -->
    <div class="col-md-4 text-white testimonio-item">
        <!-- Icono a la izquierda -->
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cloud" viewBox="0 0 16 16">
            <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
        </svg>
        <!-- Nombre -->
        <h4 class="testimonio-nombre">"Razon 5"</h4>
        <!-- Texto de testimonio -->
        <p class="testimonio-texto">Lorem ipsum dolor sit amet</p>
    </div>

    <!-- Testimonio 6 -->
    <div class="col-md-4 text-white testimonio-item">
        <!-- Icono a la izquierda -->
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cloud" viewBox="0 0 16 16">
            <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383m.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
        </svg>
        <!-- Nombre -->
        <h4 class="testimonio-nombre">"Razon 6"</h4>
        <!-- Texto de testimonio -->
        <p class="testimonio-texto">Lorem ipsum dolor sit amet</p>
    </div>
</div>

<!-- Requisitos del equipo -->
<div class="team-requirements-container">
    <!-- Titulo -->
    <h2 class="masthead-title">Requisitos para unirnos al equipo</h2>

    <!-- Contenido -->
    <div class="team-content">
        <!-- Imagen a la izquierda -->
        <div class="team-image-container">
            <img src="https://via.placeholder.com/410" alt="Placeholder image">
        </div>

        <!-- Bloques de Texto -->
        <div class="team-text-container">
            <div class="team-text">
                <h3 class="team-subheading">Requisito 1</h3>
                <p class="team-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id,
                    fringilla porta ante.
                </p>
            </div>
            <div class="team-text">
                <h3 class="team-subheading">Requisito 2</h3>
                <p class="team-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id,
                    fringilla porta ante.
                </p>
            </div>
            <div class="team-text">
                <h3 class="team-subheading">Requisito 3</h3>
                <p class="team-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id,
                    fringilla porta ante.
                </p>
            </div>
        </div>
    </div>

    <!-- Botón -->
    <div class="team-button">
        <a class="btn btn-xl btn-outline-light active rounded-pill" href="#" data-bs-toggle="modal" data-bs-target="#contactModal">
            <i class="fas fa-download me-2"></i>
            ¡Únete ya!
        </a>
    </div>
</div>

<!-- Testimonios Section -->

<div class="text-container">
    <!-- Titulo -->
    <h2 class="masthead-title">Testimonios de tutores</h2>
</div>
<div class="container">
    <div class="row">
        <!-- Primer elemento -->
        <div class="col-md-4">
            <div class="convocatoria-item">
                <div class="convocatoria-content">
                    <!-- Icono a la izquierda -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 16 16">
                        <!-- Círculo blanco más grande -->
                        <circle cx="8" cy="8" r="8" fill="#FFF"/>
                        <!-- Icono de persona azul -->
                        <path fill="#28ABDB" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg>
                    <!-- Nombre -->
                    <h4 class="convocatoria-nombre">Fulanito Pérez</h4>
                    <!-- Icono de estrellas -->
                    <div class="estrellas">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <!-- Texto de testimonio -->
                    <p class="convocatoria-texto">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices.
                    </p>
                </div>
            </div>
        </div>
        <!-- Segundo elemento -->
        <div class="col-md-4">
            <div class="convocatoria-item">
                <div class="convocatoria-content">
                    <!-- Icono a la izquierda -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 16 16">
                        <!-- Círculo blanco más grande -->
                        <circle cx="8" cy="8" r="8" fill="#FFF"/>
                        <!-- Icono de persona azul -->
                        <path fill="#28ABDB" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg>
                    <!-- Nombre -->
                    <h4 class="convocatoria-nombre">Fulanito Pérez</h4>
                    <!-- Icono de estrellas -->
                    <div class="estrellas">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <!-- Texto de testimonio -->
                    <p class="convocatoria-texto">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices.
                    </p>
                </div>
            </div>
        </div>
        <!-- Tercer elemento -->
        <div class="col-md-4">
            <div class="convocatoria-item">
                <div class="convocatoria-content">
                    <!-- Icono a la izquierda -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 16 16">
                        <!-- Círculo blanco más grande -->
                        <circle cx="8" cy="8" r="8" fill="#FFF"/>
                        <!-- Icono de persona azul -->
                        <path fill="#28ABDB" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg>
                    <!-- Nombre -->
                    <h4 class="convocatoria-nombre">Fulanito Pérez</h4>
                    <!-- Icono de estrellas -->
                    <div class="estrellas">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <!-- Texto de testimonio -->
                    <p class="convocatoria-texto">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Cuarto elemento -->
        <div class="col-md-4">
            <div class="convocatoria-item">
                <div class="convocatoria-content">
                    <!-- Icono a la izquierda -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 16 16">
                        <!-- Círculo blanco más grande -->
                        <circle cx="8" cy="8" r="8" fill="#FFF"/>
                        <!-- Icono de persona azul -->
                        <path fill="#28ABDB" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg>
                    <!-- Nombre -->
                    <h4 class="convocatoria-nombre">Fulanito Pérez</h4>
                    <!-- Icono de estrellas -->
                    <div class="estrellas">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <!-- Texto de testimonio -->
                    <p class="convocatoria-texto">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices.
                    </p>
                </div>
            </div>
        </div>
        <!-- Quinto elemento -->
        <div class="col-md-4">
            <div class="convocatoria-item">
                <div class="convocatoria-content">
                    <!-- Icono a la izquierda -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 16 16">
                        <!-- Círculo blanco más grande -->
                        <circle cx="8" cy="8" r="8" fill="#FFF"/>
                        <!-- Icono de persona azul -->
                        <path fill="#28ABDB" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg>
                    <!-- Nombre -->
                    <h4 class="convocatoria-nombre">Fulanito Pérez</h4>
                    <!-- Icono de estrellas -->
                    <div class="estrellas">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <!-- Texto de testimonio -->
                    <p class="convocatoria-texto">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices.
                    </p>
                </div>
            </div>
        </div>
        <!-- Sexto elemento -->
        <div class="col-md-4">
            <div class="convocatoria-item">
                <div class="convocatoria-content">
                    <!-- Icono a la izquierda -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 16 16">
                        <!-- Círculo blanco más grande -->
                        <circle cx="8" cy="8" r="8" fill="#FFF"/>
                        <!-- Icono de persona azul -->
                        <path fill="#28ABDB" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                    </svg>
                    <!-- Nombre -->
                    <h4 class="convocatoria-nombre">Fulanito Pérez</h4>
                    <!-- Icono de estrellas -->
                    <div class="estrellas">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <!-- Texto de testimonio -->
                    <p class="convocatoria-texto">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi massa, finibus ac nibh id, fringilla porta ante. Vestibulum sed lorem ultrices.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


@include('layouts.footer')
</body>

</html>
