<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>CRUD con CodeIgniter</title>
    </head>
    <body>
        <h2>Crud con CodeIgniter</h2>
        <?php
        //Si existen las sesiones flasdata que se muestren
            if($this->session->flashdata('correcto'))
                echo $this->session->flashdata('correcto');
             
            if($this->session->flashdata('incorrecto'))
                echo $this->session->flashdata('incorrecto');
        ?>
<table>
    <tr>
        <form action="<?=base_url("index.php/usuarios_controller/add");?>" method="post">

            <td>
                <label for="">Password</label>
                <input type="text" name="password"/>
            </td>
            <td>
                <label for="">Nombre</label>
                <input type="text" name="nombre"/>
            </td>
            <td>
                <label for="">Apellido</label>
                <input type="text" name="apellido"/>
            </td>
            <td>
                <label for="">Email</label>
                <input type="email" name="email"/>
            </td>
            <td>
                <input type="submit" name="submit" value="Añadir" class="btn btn-primary" />
            </td>
        </form>
    </tr>
<?php
foreach($ver as $fila){
?>
    <tr>
        <td>
            <?=$fila->id_usuario;?>
        </td>
        <td>
            <?=$fila->email;?>
        </td>
        <td>
            <?=$fila->password;?>
        </td>
        <td>
            <?=$fila->nombre;?>
        </td>
        <td>
            <?=$fila->apellido;?>
        </td>
        <td>
            <a href="<?=base_url("index.php/usuarios_controller/mod/$fila->id_usuario")?>" class="btn btn-primary">Modificar</a>
            <a href="<?=base_url("index.php/usuarios_controller/eliminar/$fila->id_usuario")?>" class="btn btn-primary">Eliminar</a>
        </td>
    </tr>
<?php
    
}
?>
</table>
    </body>
</html>
