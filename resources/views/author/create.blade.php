<form action="/author" method="POST">
  @csrf
  <span>Nome do Autor</span>
  <input type="text" name="name" id="name">
  <br>
  <button type="submit">Enviar</button>
</form>