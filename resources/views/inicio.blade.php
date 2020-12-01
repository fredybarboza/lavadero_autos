<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <form action="perfil" method="post">
    @csrf
    <label>
    ID
    <input type="text" name="id">
    </label>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>