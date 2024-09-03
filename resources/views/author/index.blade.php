<table border="1">
  @csrf
  <tr>
    <th>Id</th>
    <th>Nome</th>
    <th>Json Livros</th>
  </tr>
@foreach ($authors as $author)
  <tr>
    <td>{{ $author->id }}</td>
    <td>{{ $author->name }}</td>
    <td>{{ $author->books->count() }}</td>
  </tr>
@endforeach
</table>