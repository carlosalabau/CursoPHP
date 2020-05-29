<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Platos</title>
    <link rel="stylesheet" href="/css/styles.css" />
</head>
<body>
<table>
    <tr>
        <th>Titulo</th>
        <th>Comensales</th>
    </tr>
    @foreach($platos as $plato)
        <tr>
            <td class="tit">{{$plato->titulo}}<br></td>
            <td class="com">{{$plato->comensales}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>


