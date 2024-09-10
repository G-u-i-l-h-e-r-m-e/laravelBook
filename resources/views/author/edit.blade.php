<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Autor</title>
</head>
<body>
    <form action="/author/{{$author->id}}" method="POST">
        @method("PUT")  
        @csrf
        <input type="text" value="{{$author->name}}" name="name">
        <button type="submite">Salvar</button>
    </form>
</body>
</html>