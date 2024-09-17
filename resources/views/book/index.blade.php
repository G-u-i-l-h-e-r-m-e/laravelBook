<table border="1">
  @csrf
  <tr>
    <th>Id</th>
    <th>Nome</th>
    <th>Qtd. Paginas</th>
    <th>Autor</th>
    <th>Tags</th>
    <th>Ações</th>
  </tr>
@foreach ($books as $book)
  <tr>
    <td>{{ $book->id }}</td>
    <td>{{ $book->name }}</td>
    <td>{{ $book->numOfPages }}</td>
    <td>{{ $book->author->name }}</td>
    <td>
    @foreach($book->Tags as $tag)  
        {{ $tag->name }},
      @endforeach
    </td>
    <td> <a href="/book/{{$book->id}}/edit">Editar</a></td>
    <td> <form action="/book/{{$book->id}}" method="POST" style="display:inline-block">
        @method('delete')
        @csrf
        <button type="submit">Deletar</button>
      </form></td>
  </tr>
@endforeach
</table>