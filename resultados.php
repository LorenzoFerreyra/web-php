<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Resultados</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    if (isset($_POST["Valoración"])) {
        echo "<h2>Valoración: " . $_POST["Valoración"] . "</h2>";
    }

    if (isset($_POST["autor"])) {
        echo "<h2>Autores que conocías:</h2>";
        echo "<ul>";
        foreach($_POST["autor"] as $autor) {
            echo "<li>" . $autor . "</li>";
        }
        echo "</ul>";
    }
    
    echo "<p><a href='index.html'>Volver al inicio</a></p>";
    ?>
</body>
</html>