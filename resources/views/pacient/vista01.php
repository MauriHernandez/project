<!DOCTYPE html>
<html>
<head>
    <title>Listado de Pacientes, Doctores y Enfermeras</title>
</head>
<body>
    <h2>Listado de Pacientes, Doctores y Enfermeras</h2>
    <table border="1">
        <tr>
            <th>Paciente ID</th>
            <th>Paciente Nombre</th>
            <th>Doctor ID</th>
            <th>Doctor Nombre</th>
            <th>Enfermera ID</th>
            <th>Enfermera Nombre</th>
        </tr>
        <?php foreach ($pacients as $pacient) { ?>
            <tr>
            <?php foreach ($pacients as $pacient) { ?>
    <tr>
        <td><?php echo $pacient->patient_id; ?></td>
        <td><?php echo $pacient->patient_name; ?></td>
        <td><?php echo $pacient->doctor_id; ?></td>
        <td><?php echo $pacient->doctor_name; ?></td>
        <td><?php echo $pacient->nurse_id; ?></td>
        <td><?php echo $pacient->nurse_name; ?></td>
    </tr>
<?php } ?>

            </tr>
        <?php } ?>
    </table>
</body>
</html>
x