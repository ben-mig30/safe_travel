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
            <h2>Mejores alojamientos de Bariloche</h2>
            <div class="col-sm-3 p-3 colorfondo text-white">
                <div class="card" style="width:100%">
                <img class="card-img-top" src="imagenes/aloj_bariloche/hotel_san_carlos.avif" width="300" height="200">
                    <div class="card-body">
                        <h4 class="card-title">Hotel San Carlos</h4>
                        <p class="card-text">Es conocido por su excelente ubicación cerca del Centro Cívico y las actividades turísticas. Ofrece habitaciones con vistas, buen desayuno y atención amable.</p> 3.3
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/meida_estrella.png" width="20" height="20"> 
                    </div>
                </div>
            </div>
            <div class="col-sm-3 p-3 colorfondo text-white">
                <div class="card" style="width:100%">
                <img class="card-img-top" src="imagenes/aloj_bariloche/hotel_tres_reyes.jpg" width="300" height="200">
                    <div class="card-body">
                        <h4 class="card-title">Hotel Tres Reyes</h4>
                        <p class="card-text">Es un establecimiento de estilo clásico patagónico, ubicado frente al Lago Nahuel Huapi y cerca del centro de la ciudad. Ofrece vistas al lago y a sus jardines.</p> 4.2
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                        <img src="imagenes/estellas/estrella.png" width="20" height="20">
                    </div>
                </div>
            </div>            
            <div class="col-sm-3 p-3 colorfondo text-white">
                <div class="card" style="width:100%">
                <img class="card-img-top" src="imagenes/aloj_bariloche/hotel_bella_vista.jpg" width="300" height="200">
                    <div class="card-body">
                        <h4 class="card-title">Hotel Bella Vista</h4>
                        <p class="card-text">Es un alojamiento ubicado en el centro de la ciudad, a pocos metros de la playa y del Centro Cívico</p> 4.3
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
                <img class="card-img-top" src="imagenes/aloj_bariloche/hotel_plaza.jpg" width="300" height="200">
                    <div class="card-body">
                        <h4 class="card-title">El Hotel Plaza</h4>
                        <p class="card-text">Es un hotel céntrico en San Carlos de Bariloche, conocido por su ubicación conveniente y vistas al lago y montañas</p> 4.0
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