<!DOCTYPE html>
<html>
<head>
    <title>Copia de Seguridad</title>
</head>
<body>
    <h1>Copia de Seguridad</h1>
    <form method="post" action="ruta_del_controlador">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <button type="submit">Crear Copia de Seguridad</button>
    </form>
</body>
</html>
