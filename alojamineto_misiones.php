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
            <h2>Mejores alojamientos de Misiones</h2>
            <div class="col-sm-3 p-3 colorfondo text-white">
                <div class="card" style="width:100%">
                <img class="card-img-top" src="imagenes/aloj_misiones/hoter_beer.jpg" width="300" height="200">
                    <div class="card-body">
                        <h4 class="card-title">Hotel Beer</h4>
                        <p class="card-text">Este hostal animado se encuentra a 7 minutos a pie del límite del parque nacional Iguazú, a 1 km del parque ecológico La Aripuca y a 14 km del aeropuerto internacional de Foz do Iguaçu.</p> 3.8
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/meida_estrella.png" width="20" height="20"> 
                    </div>
                </div>
            </div>
            <div class="col-sm-3 p-3 colorfondo text-white">
                <div class="card" style="width:100%">
                <img class="card-img-top" src="imagenes/aloj_misiones/hotel_libretador.jpg" width="300" height="200">
                    <div class="card-body">
                        <h4 class="card-title">Hotel El Libertador</h4>
                        <p class="card-text">Es un alojamiento ubicado en el centro de la ciudad, ofrece habitaciones con comodidades como aire acondicionado, TV por cable, teléfono, calefacción, ventilador de techo y baño privado.</p> 3.9
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/meida_estrella.png" width="20" height="20">
                    </div>
                </div>
            </div>            
            <div class="col-sm-3 p-3 colorfondo text-white">
                <div class="card" style="width:100%">
                <img class="card-img-top" src="imagenes/aloj_misiones/hotel_melia.jpg" width="300" height="200">
                    <div class="card-body">
                        <h4 class="card-title">El Gran Meliá</h4>
                        <p class="card-text"> Iguazú es un hotel de lujo ubicado dentro del Parque Nacional Iguazú, con vistas a las cataratas. Ofrece 183 habitaciones y suites, varias piscinas, spa, restaurantes y bares, y está diseñado para brindar una experiencia inmersiva en la naturaleza y el lujo.</p> 4.6
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/meida_estrella.png" width="20" height="20">
                    </div>
                </div>
            </div>          
            <div class="col-sm-3 p-3 colorfondo text-white">
                <div class="card" style="width:100%">
                <img class="card-img-top" src="imagenes/aloj_misiones/hotel_rainforest.jpg" width="300" height="200">
                    <div class="card-body">
                        <h4 class="card-title">Hotel Rainforest</h4>
                        <p class="card-text">Enclavado en una selva tropical, este impactante hotel ecochic con detalles modernos está a 2 km del Biocentro Iguazú y a 14 km del zoológico Parque das Aves.</p> 3.6
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/meida_estrella.png" width="20" height="20">
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