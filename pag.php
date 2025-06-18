<?php
function encabezado() {
    echo "<div class=\"container bg-info rounded-3\">";
    echo "    <div class=\"row\">";
    echo "        <div class=\"col-sm-12 p-3 encpie rounded-3\">";
    echo "            <nav class=\"navbar navbar-expand-sm encpie rounded-3\">";
    echo "                <div class=\"container-fluid\">";
    echo "                    <div class=\"d-flex justify-content-center w-100\">";
    echo "                        <ul class=\"navbar-nav flex-fill justify-content-around\">";    
    echo "                            <li class=\"nav-item\">";
    echo "                               <a class=\"nav-link btn btn-light\" href=\"index.php\">Paquetes </a>"; 
    echo "                            </li>";
    echo "                            <li class=\"nav-item\">";
    echo "                              <a class=\"nav-link btn btn-light\" href=\"vuelos.php\">Vuelos</a>";    
    echo "                            </li>";
    echo "                            <li class=\"nav-item\">";
echo "
    <a class='nav-link btn btn-light' href='alojamientos.php'>
        <img src='imagenes/iconos/icono_hotel1.png' alt='Icono Alojamientos' style='vertical-align: middle; margin-right: 15px; height: 30px;'>
        Alojamientos
    </a>
";
    echo "                            </li>";
    echo "                            <li class=\"nav-item\">";
    echo "                              <a class=\"nav-link btn btn-light\" href=\"vehiculos.php\">Vehiculos</a>";   
    echo "                            </li>";
    echo "                        </ul>";
    echo "                    </div>";
    echo "                </div>";
    echo "            </nav>";
    echo "        </div>";
    echo "    </div>";
    echo "</div>";
}
function pie(){
    echo "<div class=\"container encpie rounded\">";
    echo '<div class="row">';
    echo '    <div class="col-sm-4 p-3 encpie text-white rounded">';
    echo '        <h3>contacto</h3>';
    echo '        <p>713492592319</p>';
    echo '    </div>';
    echo '    <div class="col-sm-4 p-3 encpie text-white rounded">';
    echo '        <h3>Redes sociales </h3>';
    echo '        <p>safe_travel.ok</p>';
    echo '    </div>';
    echo '    <div class="col-sm-4 p-3 encpie text-white rounded">';
    echo '        <h3>Correo electronico</h3>';
    echo '        <p>safe.travel@gmail.com</p>';
    echo '    </div>';
    echo '</div>';
    echo "</div>";
}

?>