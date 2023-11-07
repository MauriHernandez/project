<!DOCTYPE html>
<html>
<head>
    <title>Actualizar Medicamento</title>
</head>
<body>
    <h1>Actualizar Medicamento</h1>
    <form action="{{ route('updateMedicament') }}" method="POST">
        @csrf
        <button type="submit">Actualizar Medicamento</button>
    </form>
</body>
</html>
