<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Modificar usuarios</title>
    </head>
    <body>
        <h2>Modificar usuario</h2>
        <form action="" method="POST">
            <?php foreach ($mod as $fila){ ?>
            <input type="email" name="email" value="<?=$fila->email?>"/>
            <input type="text"  name="password" value="<?=$fila->password?>"/>
            <input type="nombre" name="nombre" value="<?=$fila->nombre?>"/>
            <input type="apellido" name="apellido" value="<?=$fila->apellido?>"/>
            <input type="submit" name="submit" value="Modificar" class="btn btn-primary"/>
            <?php } ?>
        </form>
        <a href="<?=base_url()?>" class="btn btn-primary m-2">Volver</a>
    </body>
</html>
