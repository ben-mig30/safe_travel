<?php
function encabezado() {
    echo "<div class=\"container encpie rounded-3\">";
    echo "    <div class=\"row\">";
    echo "        <div class=\"col-sm-12 p-3 encpie rounded-3\">";
    echo '<nav class="navbar navbar-expand-lg navbar-light encpie">';
    echo '    <img src="imagenes/iconos/icono_pagina_org.png" width="100" alt="Logo">';
    echo '    <div class="collapse navbar-collapse" id="navbarNav">';
    echo '        <ul class="navbar-nav flex-fill justify-content-around">';
    echo '            <li class="nav-item">';
    echo '                <a class="nav-link btn btn-light" href="index.php">Paquetes </a>';
    echo '            </li>';
    echo '            <li class="nav-item">';
    echo '                <a class="nav-link btn btn-light" href="vuelos.php">Vuelos</a>';
    echo '            </li>';
    echo '            <li class="nav-item">';
    echo '                <a class="nav-link btn btn-light" href="alojamientos.php">Alojamientos</a>';
    echo '            </li>';
    echo '            <li class="nav-item">';
    echo '                <a class="nav-link btn btn-light" href="vehiculos.php">Vehiculos</a>';
    echo '            </li>';
    echo '        </ul>';
    echo '    </div>';
    echo '<a href="#" class="nav-link btn btn-light">Iniciar Sesión</a>';
    echo '<a href="#" class="encpie">';
    echo '    <img src="imagenes/iconos/icono_carrito.png" width="50" alt="Logo">';
    echo '</a>';
    echo '</nav>';
    echo "        </div>";
    echo "    </div>";
    echo "</div>";
}

function pie(){
    echo "<div class=\"container encpie rounded\">";
    echo '<div class="row">';
    echo '    <div class="col-sm-4 p-3 encpie pie rounded">';
    echo '        <h3>contacto</h3>';
    echo '        <p>713492592319</p>';
    echo '    </div>';
    echo '    <div class="col-sm-4 p-3 encpie pie rounded">';
    echo '        <h3>Redes sociales </h3>';
    echo '        <p>safe_travel.ok</p>';
    echo '    </div>';
    echo '    <div class="col-sm-4 p-3 encpie pie rounded">';
    echo '        <h3>Correo electronico</h3>';
    echo '        <p>safe.travel@gmail.com</p>';
    echo '    </div>';
    echo '</div>';
    echo "</div>";
}
?>