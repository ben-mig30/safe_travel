<html>
    <head>
        <title>Safe Travel</title>
        <link rel="icon" type="image/x-icon" href="imagenes/iconos/icono_pagina_mod.ico">
        <meta charset="utf-8">
        <link rel="stylesheet" href="estilos.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <?php include("pag.php");?>
    </head>
    <body class="colorfondo">
    <div class="row">
    <div class="col-sm-12 p-3 colorfondo text-white"></div>
    </div>
        <?php 
            echo encabezado();
        ?>
        <!--  fin encabezado  -->
            <div class="container colorfondo text-white">
        <div class="row">
            <h2>Mejores alojamientos de España</h2>
            <div class="col-sm-3 p-3 colorfondo text-white">
                <div class="card" style="width:100%">
                <img class="card-img-top" src="imagenes/aloj_espana/hotel_cudillero.jpg" width="300" height="200">
                    <div class="card-body">
                        <h4 class="card-title">Hotel Wecamp Cudillero</h4>
                        <p class="card-text">Se encuentra a 3 km del Eucaliptón y ofrece una piscina, lo que garantiza una estancia relajante.</p> 3.6
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/meida_estrella.png" width="20" height="20"> 
                    </div>
                </div>
            </div>
            <div class="col-sm-3 p-3 colorfondo text-white">
                <div class="card" style="width:100%">
                <img class="card-img-top" src="imagenes/aloj_espana/safestay_hostal_madrid.jpg" width="300" height="200">
                    <div class="card-body">
                        <h4 class="card-title">El Hotel Trafalgar</h4>
                        <p class="card-text">Es un establecimiento ubicado en el centro de Madrid, España, concretamente en el barrio de Chamberí. Ofrece habitaciones con aire acondicionado y TV de plasma</p> 3.2
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/meida_estrella.png" width="20" height="20">
                    </div>
                </div>
            </div>            
            <div class="col-sm-3 p-3 colorfondo text-white">
                <div class="card" style="width:100%">
                <img class="card-img-top" src="imagenes/aloj_espana/hilton_balcelona.jpg" width="300" height="200">
                    <div class="card-body">
                        <h4 class="card-title">Hilton Balcelona</h4>
                        <p class="card-text">Es un hotel situado en la Avenida Diagonal, en el barrio de Les Corts. Ofrece habitaciones con vistas a la ciudad, WiFi gratuito, gimnasio 24 horas y un restaurante de cocina catalana y mediterránea.</p> 4.0
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                    </div>
                </div>
            </div>          
            <div class="col-sm-3 p-3 colorfondo text-white">
                <div class="card" style="width:100%">
                <img class="card-img-top" src="imagenes/aloj_espana/Hotel_Suite_Generis.jpg"
                     width="300" height="200">
                    <div class="card-body">
                        <h4 class="card-title">Hotel Suite Generis</h4>
                        <p class="card-text">El Hotel Boutique Suite Generis es un hotel boutique de 2 estrellas ubicado en el centro histórico de Córdoba, España. Es conocido por su ambiente acogedor y diseño único, inspirado en la arquitectura andaluza. Ofrece habitaciones con aire acondicionado, baño privado, acceso con tarjeta y Wi-Fi gratuito.</p> 5.0
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                    </div>
                </div>
            </div>
        </div>
    </div> 
        <!-- empieza pie-->
        <?php 
            echo pie();
        ?>
    </body>
</html>