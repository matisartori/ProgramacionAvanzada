<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        
</head>
<body background="taller.png">
    

        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/tpparte1/cabecera.php';?>
        </header>

        <div class="mt-5 p-3 col-3 border container text-center rounded">
            <h2 class="my-3">Iniciar sesión</h2>

            <form action="procesoLogin.php" method="post" >
                <div class="container col mb-3">
                
                <input type="text" name="usuario" class="form-control" placeholder="Usuario" required>
                </div>
                <div class="container col mb-3">
                
                <input type="password" name="contraseña" class="form-control" placeholder="Contraseña" required>      
                </div>

     
                <input type="submit" value="Acceder" class="btn btn-success">
               
            </form>
        </div>
        <br>
        
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>