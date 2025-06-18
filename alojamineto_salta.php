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
            <h2>Mejores alojamientos de Salta</h2>
            <div class="col-sm-3 p-3 colorfondo text-white">
                <div class="card" style="width:100%">
                <img class="card-img-top" src="imagenes/aloj_salta/hotel_la_linda.jpg" width="300" height="200">
                    <div class="card-body">
                        <h4 class="card-title">Hotel de la Linda</h4>
                        <p class="card-text">Las habitaciones son sencillas, tienen mobiliario discreto y se ubican alrededor de un patio. Cuentan con capacidad para 6 huéspedes</p> 4.2
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
                <img class="card-img-top" src="imagenes/aloj_salta/holtel_tradicion.avif" width="300" height="200">
                    <div class="card-body">
                        <h4 class="card-title">Hotel Tradicion</h4>
                        <p class="card-text">Es un alojamiento ubicado en el centro de la ciudad de Salta, cerca de la plaza principal. Ofrece habitaciones privadas, un ambiente bien decorado y un buen servicio de atención al cliente</p> 4.3
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
                <img class="card-img-top" src="imagenes/aloj_salta/hotel_el_cerrito.jpg" width="300" height="200">
                    <div class="card-body">
                        <h4 class="card-title">hotel el cerrito</h4>
                        <p class="card-text">Es un alojamiento que ofrece 9 habitaciones. Está ubicado cerca de atracciones como el Museo de la Ciudad Casa de Hernández, la Catedral de Salta y el Parque San Martín</p> 3.8
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                    </div>
                </div>
            </div>          
            <div class="col-sm-3 p-3 colorfondo text-white">
                <div class="card" style="width:100%">
                <img class="card-img-top" src="imagenes/aloj_salta/hotel_inkai.jpg" width="300" height="200">
                    <div class="card-body">
                        <h4 class="card-title">Hotel Inkai</h4>
                        <p class="card-text">Es un alojamiento que ofrece calidad y confort en el centro de la ciudad. Se destaca por su servicio cálido y atento, cuenta con 29 habitaciones confortables y una terraza con vistas al Cerro San Bernardo</p> 3.2
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