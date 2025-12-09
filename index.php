<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cloud Applications</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body class="bg-ligth">
        <div class="container min-vh-100 d-flex flex-column justify-content-center 
                            align-items-center">
            <div class="card shadow-lg p-4" style="max-width: 400px; width: 100%;">
                <?php
                    $nombre = "William";
                    $fecha = date("d/m/Y");
                    $hora = date("H:i");
                ?>
                <div class="text-center">
                    <h1 class="display-5 mb-3 text-primary">Hola, <?php echo $nombre; ?></h1>
                    <p class="lead">Bienvenido al Test de Cloud + DevOps </p>
                    <hr>
                    <p class="text-muted mb-0">
                        <i class="bi bi-calendar-date"></i>
                        <?php echo $fecha." "; ?>
                        <i class="bi bi-clock"></i>
                        <?php $hora; ?>
                    </p>
            </div>        
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    </body>
</html>