<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <link rel="stylesheet" href="../css/estilo.css">
    <?php include '../cabecera.php'?>

    <div class="formularioContacto">
        <h3>Complete el formulario para solicitar un turno de taller:</h3>

        <form action="procesoContacto.php" method="post">
            <label for="nombre" class="required">Nombre:</label>
            <input type="text" name="nombre" required>
            <br>
            <label for="mail" class="required">Mail:</label>
            <input type="email" name="mail" required>
            <br>
            <label for="telefono">Telefono:</label>
            <input type="text" name="telefono">
            <br>
            <label for="mensaje" class="required">Mensaje:</label>        
            <textarea name="mensaje" cols="30" rows="10" required></textarea>
            <br>
            <input type="submit" value="Enviar">

        </form>
        <br>
        <a href="../index.php">Volver al inicio</a>
    </div>  
    
</body>
</html>