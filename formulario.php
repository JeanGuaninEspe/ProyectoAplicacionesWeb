<?php
if (isset($_POST['enviar'])) {
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $telefono = $_POST['telefono'];
  $mensaje = $_POST['mensaje'];



  // Crear un nuevo archivo o abrir uno existente
  $archivo = fopen('estudiantes.txt', 'a');

  //no escribir datos del formulario en el archivo si estan vacios
  if (empty($nombre) || empty($correo) || empty($telefono) || empty($mensaje)) {
    header('Location: estudiantes.html');
    exit;
  }

  // Escribir los datos del formulario en el archivo
  fwrite($archivo, "Nombre: $nombre\n");
  fwrite($archivo, "Correo: $correo\n");
  fwrite($archivo, "Teléfono: $telefono\n");
  fwrite($archivo, "Mensaje: $mensaje\n\n");

  // Cerrar el archivo
  fclose($archivo);

  // Redirigir al usuario a otra página
  header('Location: estudiantes.html');
  exit;
}

echo "Los datos se han guardado correctamente";


?>
