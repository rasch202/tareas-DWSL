<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
</head>
<body>
    <div class="container">
    <form action="data.php" method="post">
        <div class="col-md-6">
        <label for="">Escriba su nombre</label>

        <input required type="text" name="nombre" id=""><br>
</div>
<div class="col-md-6">
        <label for="seleccione su genero"></label>
        <input required type="radio" value="masculino" name="genero" id="">femenino<br>
        <input required type="radio"value=femenino" name="genero" id="">masculino<br>
</div>
        <label for="">escriba algun texto o palabra</label>
        <input required type="password" name="pass" id="">
</div>
<div class="col-md-6">
        <button type="submit">enviar</button>
</div>
    </form>
</div>
    https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js
</body>
</html>