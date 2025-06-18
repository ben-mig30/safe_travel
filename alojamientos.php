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
            <h2>Tuor por Argentina</h2>
            <div class="col-sm-3 p-3 colorfondo text-white">
                <div class="card" style="width:100%">
                <img class="card-img-top" src="imagenes/paquetes/tandil.jpg" width="300" height="200">
                    <div class="card-body">
                        <h4 class="card-title">Tandil</h4>
                        <p class="card-text">Es un lugar muy lindo</p> 
                        <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 p-3 colorfondo text-white">
                <div class="card" style="width:100%">
                <img class="card-img-top" src="imagenes/paquetes/monta%C3%B1as.jpg" width="300" height="200">
                    <div class="card-body">
                        <h4 class="card-title">Bariloche</h4>
                        <p class="card-text">Es un lugar muy lindo</p>
                        <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>            
            <div class="col-sm-3 p-3 colorfondo text-white">
                <div class="card" style="width:100%">
                <img class="card-img-top" src="imagenes/paquetes/salta.jpg" width="300" height="200">
                    <div class="card-body">
                        <h4 class="card-title">Salta</h4>
                        <p class="card-text">Es un lugar muy lindo</p>
                        <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>           
            <div class="col-sm-3 p-3 colorfondo text-white">
                <div class="card" style="width:100%">
                <img class="card-img-top" src="imagenes/paquetes/misiones.jpg" width="300" height="200">
                    <div class="card-body">
                        <h4 class="card-title">Misiones</h4>
                        <p class="card-text">Es un lugar muy lindo</p>
                        <a href="#" class="btn btn-primary">Ver más</a>
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