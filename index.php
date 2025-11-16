<?php
$year = date("Y");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio - Sitio PHP en Render</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Sitio PHP desplegado en Render 🚀</h1>
    <nav>
        <a href="index.php">Inicio</a>
        <a href="about.php">Acerca</a>
        <a href="contact.php">Contacto</a>
    </nav>
</header>

<main>
    <h2>Bienvenido</h2>
    <p>Este es un sitio PHP simple diseñado para desplegarse fácilmente en Render.</p>
</main>

<footer>
    © <?php echo $year; ?> - Sitio PHP
</footer>

</body>
</html>