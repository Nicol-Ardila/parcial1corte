<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen de Venta</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Resumen de la Venta de Churros</h1>
    
    <?php
    // Activa los errores en PHP (para depuración, solo en entorno de desarrollo)
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Verificamos si se enviaron los datos correctamente
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verificamos si los campos requeridos existen en el array $_POST
        if (isset($_POST['cantidad']) && isset($_POST['tipo'])) {
            $cantidad = htmlspecialchars($_POST['cantidad']);
            $tipo = htmlspecialchars($_POST['tipo']);

            echo "<p><strong>Cantidad de churros vendidos:</strong> $cantidad</p>";
            echo "<p><strong>Tipo de churro vendido:</strong> $tipo</p>";
        } else {
            echo "<p>Error: No se recibieron todos los datos esperados.</p>";
        }

        // Para depuración: imprime todo el contenido de $_POST
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";

    } else {
        echo "<p>No se enviaron datos correctamente.</p>";
    }
    ?>

    <a href="vender.html">Volver al formulario de ventas</a>
</body>
</html>
