<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Barra de Búsqueda Turística</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f5f5;
      padding: 30px;
    }

    .barra-busqueda {
      background-color: #003b95;
      color: white;
      padding: 20px;
      border-radius: 10px;
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
      align-items: center;
    }

    .barra-busqueda input, .barra-busqueda select {
      padding: 10px;
      border: none;
      border-radius: 5px;
      width: 200px;
    }

    .barra-busqueda button {
      background-color: #ff5a5f;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }

    .barra-busqueda button:hover {
      background-color: #e04848;
    }
  </style>
</head>
<body>

  <div class="barra-busqueda">
    <input type="text" placeholder="Origen">
    <input type="text" placeholder="Destino">
    <input type="date" placeholder="Entrada">
    <input type="date" placeholder="Salida">
    <select>
      <option>1 adulto</option>
      <option>2 adultos</option>
      <option>3 adultos</option>
    </select>
    <button>Buscar</button>
  </div>
</body>
</html>