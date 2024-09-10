<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Livro</title>
</head>
<body>
    <form action="/book/{{$book->id}}" method="POST">
        @method("PUT")  
        @csrf
        <div>
            <span>Nome</span>
            <input type="text" value="{{$book->name}}" name="name">
        </div>
        <div>
            <span>Número de páginas</span>
            <input type="number" value="{{ $book->numOfPages }}" name="numOfPages">
        </div>
        <div>
            <span>Autor</span>
            <input type="text" value="{{ $book->author->name }}" name="nameAuthor">
        </div>
        <button type="submite">Salvar</button>
    </form>
</body>
</html>