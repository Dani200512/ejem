<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Cuadratica Aritmetica</h1>

<form action="{{route('cuadratica.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Ingrese el numero 1:
    <br>
    <input type="number" name="a">
</label>
<br>
<label>
    Ingrese el numero 2: :
    <br>
    <input type="number" name="b">
</label>
<br><br><br>
<label>
    Ingrese el numero 3: :
    <br>
    <input type="number" name="c">
</label>
<br><br><br>

<button type="submit">Enviar Formulario:</button>

</form>

</body>
</html>
