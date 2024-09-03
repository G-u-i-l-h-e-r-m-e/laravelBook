<table border="1">
  @csrf
  <tr>
    <th>Id</th>
    <th>Nome</th>
    <th>Qtd. Paginas</th>
    <th>Autor</th>
  </tr>
@foreach ($books as $book)
  <tr>
    <td>{{ $book->id }}</td>
    <td>{{ $book->name }}</td>
    <td>{{ $book->numOfPages }}</td>
    <td>{{ $book->author->name }}</td>
  </tr>
@endforeach
</table>