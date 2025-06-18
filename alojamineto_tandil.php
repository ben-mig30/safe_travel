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
            <h2>Mejores alojamientos de Tandil</h2>
            <div class="col-sm-3 p-3 colorfondo text-white">
                <div class="card" style="width:100%">
                <img class="card-img-top" src="imagenes/aloj_tandil/hotel_mulen.jpg" width="300" height="200">
                    <div class="card-body">
                        <h4 class="card-title">Mulen Hotel Tandil</h4>
                        <p class="card-text">Este un hotel ubicado en el centro de la ciudad, que ofrece una experiencia de alojamiento elegante y moderna, tanto para viajes de negocios como de placer</p> 4.3
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/meida_estrella.png" width="20" height="20"> 
                    </div>
                </div>
            </div>
            <div class="col-sm-3 p-3 colorfondo text-white">
                <div class="card" style="width:100%">
                <img class="card-img-top" src="imagenes/aloj_tandil/hotel_el_centinela.jpg" width="300" height="200">
                    <div class="card-body">
                        <h4 class="card-title">Chacra El Centinela</h4>
                        <p class="card-text">Ofrece cabañas, dormis y espacios de camping en un predio de 10.000 m² al pie del Cerro El Centinela. Las cabañas son monoambientes con capacidad para cuatro personas</p> 3.2
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                    </div>
                </div>
            </div>            
            <div class="col-sm-3 p-3 colorfondo text-white">
                <div class="card" style="width:100%">
                <img class="card-img-top" src="imagenes/aloj_tandil/hotel_elegance.jpg" width="300" height="200">
                    <div class="card-body">
                        <h4 class="card-title">Elegance hotel</h4>
                        <p class="card-text">Este hotel sencillo con vistas distantes de las sierras de Tandil se ubica sobre un cerro rural, a menos de 1 km de la ruta nacional 226, a 9 km del centro de Tandil y a 10 km del lago del Fuerte</p> 4.6
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/meida_estrella.png" width="20" height="20">
                    </div>
                </div>
            </div>          
            <div class="col-sm-3 p-3 colorfondo text-white">
                <div class="card" style="width:100%">
                <img class="card-img-top" src="imagenes/aloj_tandil/hotel_paraiso.jpg" width="300" height="200">
                    <div class="card-body">
                        <h4 class="card-title">Hotel Paraiso</h4>
                        <p class="card-text">Dormitorios sencillos en propiedad relajada que ofrece desayuno y estacionamiento gratuitos</p> 3.3
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