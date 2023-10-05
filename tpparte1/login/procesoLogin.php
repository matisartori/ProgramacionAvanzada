<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <link rel="stylesheet" href="../css/estilo.css">
    
    <?php
        if(($_POST['usuario']=='fcytuader')&&($_POST['contraseña']=='programacionavanzada')):
    ?>
    
        <div class="valido">Ingreso correctamente</div>
        <?php
            else:
        ?>
        
        <div class="invalido">
            <meta http-equiv="refresh" content="3; url=formLogin.php" /> <!-- redirecciona, content es la cantidad de segundos -->
        Acceso invalido. Pruebelo otra vez
        
        </div>
    

    <?php endif?>
</body>
</html>