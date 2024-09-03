<form action="/book" method="POST">
  @csrf
  <span>Nome do Livro</span>
  <input type="text" name="name" id="name">
  <br>
  <span>Qtd Paginas</span>
  <input type="number" name="numOfPages" id="numOfPages">
  <br>
  <button type="submit">Enviar</button>
</form>