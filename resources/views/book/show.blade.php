
<table border="1">
  <tr>
    <th>Nome</th>
    <th>Qtd de páginas</th>
    <th>Nome Autor</th>
  </tr>
  <tr>
    <td>{{$book->name}}</td>
    <td>{{$book->numOfPages}}</td>
    <td>{{$book->author->name}}</td>
  </tr>
</table>