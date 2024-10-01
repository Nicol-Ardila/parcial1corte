<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen de Gastos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Resumen del Gasto Ingresado</h1>
    
    <?php
    // Verificamos si se enviaron los datos correctamente
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $concepto = htmlspecialchars($_POST['concepto']);
        $valor = htmlspecialchars($_POST['valor']);

        echo "<p><strong>Concepto del gasto:</strong> $concepto</p>";
        echo "<p><strong>Valor del gasto:</strong> $$valor</p>";
    } else {
        echo "<p>No se enviaron datos correctamente.</p>";
    }
    ?>
    
    <a href="gastos.html">Volver al formulario de gastos</a>
</body>
</html>
