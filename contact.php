<?php
$year = date("Y");

$resultado = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $correo = htmlspecialchars($_POST["correo"]);
    $mensaje = htmlspecialchars($_POST["mensaje"]);

    $resultado = "Gracias $nombre, tu mensaje fue recibido (simulación).";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contacto - Sitio PHP en Render</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Contacto</h1>
    <nav>
        <a href="index.php">Inicio</a>
        <a href="about.php">Acerca</a>
        <a href="contact.php">Contacto</a>
    </nav>
</header>

<main>
    <h2>Escríbeme</h2>

    <form method="POST">
        <label>Nombre:
            <input type="text" name="nombre" required>
        </label>
        <label>Correo:
            <input type="email" name="correo" required>
        </label>
        <label>Mensaje:
            <textarea name="mensaje" required></textarea>
        </label>
        <button type="submit">Enviar</button>
    </form>

    <p class="resultado"><?php echo $resultado; ?></p>
</main>

<footer>
    © <?php echo $year; ?> - Sitio PHP
</footer>

</body>
</html>