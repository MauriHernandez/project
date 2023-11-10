<!DOCTYPE html>
<html>
<head>
    <title>Listado de Pacientes, Doctores y Enfermeras</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
    <h2 align="center">Listado de Pacientes</h2>
    <table class="table table-striped">
 
 
        <tr>
            <th>Paciente ID</th>
            <th>Paciente Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
        </tr>
        <?php foreach ($pacients as $pacient) { ?>
            <tr>
           
    <tr>
        <td><?php echo $pacient->id; ?></td>
        <td><?php echo $pacient->name; ?></td>
        <td><?php echo $pacient->lastnameP; ?></td>
        <td><?php echo $pacient->lastnameM; ?></td>
    </tr>
<?php } ?>

            </tr>
       
    </table>
</body>
</html>