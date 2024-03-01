<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
<h1>Formulario</h1>

<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Ingrese su nombre :
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    Ingrese la primera nota: 
    <br>
    <input type="number" name="num1">
</label>
<br>
<label>
    Ingrese la segunda nota:
<br>
    <input type="number" name="num2">
<br>
</label>

<label>
    Ingrese la tercera nota:
<br>
    <input type="number" name="num3">
<br>
</label>
<button type="submit">Enviar notas:</button>
</form>

</body>
</html>