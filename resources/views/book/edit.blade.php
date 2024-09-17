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
    <span>Nome do Autor</span>
    <select name="author_id">
      @foreach(\App\Models\Author::all() as $author)
        <option value="{{$author->id}}"
          {{ $author->id == $book->Author->id ? 'selected' : '' }}
          >{{$author->name}}</option>
      @endforeach
    </select>
    
        <button type="submite">Salvar</button>
    </form>
</body>
</html>