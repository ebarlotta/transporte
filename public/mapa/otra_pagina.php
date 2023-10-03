<!DOCTYPE html>
<html>
<head>
    <title>Otra Página</title>
</head>
<body>
    <h1>Posiciones de los Marcadores</h1>

    <?php
    session_start();
    $_SESSION['latitud'] = 0;
    $_SESSION['longitud'] = 0;
    // Verifica si existe el parámetro "positions" en la URL
    if (isset($_GET['positions'])) {
        // Decodifica la cadena JSON de posiciones
        $positionsJSON = urldecode($_GET['positions']);
        $positions = json_decode($positionsJSON, true); // El segundo parámetro true convierte en un array asociativo

        // Comprueba si el JSON se decodificó correctamente
        if ($positions !== null) {
            $lat = $positions[0]['lat'];
            $lng = $positions[0]['lng'];

            $_SESSION['latitud']  = $positions[0]['lat'];
            $_SESSION['longitud'] = $positions[0]['lng'];
            
            // Puedes usar las variables $lat y $lng aquí para trabajar con las coordenadas
            echo "<p>Latitud: $lat</p>";
            echo "<p>Longitud: $lng</p>";
        } else {
            echo "<p>Error al decodificar las posiciones.</p>";
        }
    } else {
        echo "<p>No se encontraron posiciones de marcadores.</p>";
    }
    ?>
</body>

<script>
    window.onload = function () {
      ventana=window.parent.self;
      ventana.opener=window.parent.self;
      ventana.close();
    }
  </script>

</html>