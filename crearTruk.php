<html>
    <head>
        <title>crearTruk.php</title>
    </head>

    <body>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $titulo = trim($_POST['titulo']);
  $descripcion = trim($_POST['descripcion']);
  $categoria = trim($_POST['categoria']);
  $pais = trim($_POST['pais']);
  $estado = trim($_POST['estado']);
  $imagen = $_FILES['imagen'];

  $errores = [];

  // Validar el campo de título
  if (empty($titulo)) {
    $errores['titulo'] = 'El título es obligatorio';
  }

  // Validar el campo de descripción
  if (empty($descripcion)) {
    $errores['descripcion'] = 'La descripción es obligatoria';
  }

  // Validar el campo de categoría
  if (empty($categoria)) {
    $errores['categoria'] = 'La categoría es obligatoria';
  }

  // Validar el campo de país
  if (empty($pais)) {
    $errores['pais'] = 'El país es obligatorio';
  }

  // Validar el campo de estado
  if (empty($estado)) {
    $errores['estado'] = 'El estado es obligatorio';
  }

  // Validar el campo de imagen
  if (!empty($imagen['name'])) {
    $imagen_extension = strtolower(pathinfo($imagen['name'], PATHINFO_EXTENSION));
    $permitidas = array('jpg', 'jpeg', 'png');
    if (!in_array($imagen_extension, $permitidas)) {
      $errores['imagen'] = 'El tipo de archivo no es válido. Solo se permiten archivos jpg, jpeg y png';
    }
  }

  // Si no hay errores, procesar el formulario
  if (empty($errores)) {
    // Procesar el formulario aquí
    // ...
  }
}

?>