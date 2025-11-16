<?php
$year = date("Y");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Acerca - Sitio PHP en Render</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Acerca del Proyecto</h1>
    <nav>
        <a href="index.php">Inicio</a>
        <a href="about.php">Acerca</a>
        <a href="contact.php">Contacto</a>
    </nav>
</header>

<main>
    <h2>¿Por qué este sitio?</h2>
    <p>Este ejemplo fue creado para que despliegues PHP fácilmente en Render sin configuraciones complicadas.</p>
</main>

<footer>
    © <?php echo $year; ?> - Sitio PHP
</footer>

</body>
</html>