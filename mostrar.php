
<?php
echo "<a href='estudiantes.html'>REGRESAR A LA PAGINA ANTERIOR</a>"
?>

<table>
  <thead>
    <tr>

    </tr>

  </thead>
  <tbody>
    <?php
    $archivo = fopen("estudiantes.txt", "r") or die("No se pudo abrir el archivo");

    // Leer el contenido del archivo línea por línea
    while (!feof($archivo)) {
      $linea = fgets($archivo);

      if (!empty($linea)) {
        // Dividir la línea en las partes separadas por el caracter de tabulación (\t)
        $datos = explode("\t", $linea);

        // Crear una fila en la tabla para cada conjunto de datos

        echo "<tr>";

        foreach ($datos as $dato) {
          echo "<td>" . $dato . "</td>";

        }

        echo "</tr>";

      }

    }

    fclose($archivo);
    ?>
  </tbody>

</table>

