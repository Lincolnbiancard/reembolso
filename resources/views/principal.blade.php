<!DOCTYPE html>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="/css/padrao.css">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
        <meta charset="utf-8">
        
        <title>Controle de despesas</title>
</head>
<body>
<nav>
  <ul>
    <li>
    <a href="/api/formulario"><i class="icon-tools"></i></a>
      <p><h4>Formulário</h4></p>
    </li>
    <li>
    <a href="/api/listagem"><i class="icon-tools"></i></a>
      <p><h4>Listagem</h4></p>
    </li><li>
    <a href="#"><i class="icon-tools"></i></a>
      <p><h4>Contato</h4></p>
    </li>
    <li>
      <a href="/api/formularioDespesa"><i class="icon-tools"></i></a>
        <p><h4>Cadastro Despesa</h4></p>
    </li>
  </ul>
</nav>
<div class="container">
  <div class="menu-icon"><span></span></div>
  @yield('conteudo')
</div>
    <br>
    <footer class="footer">
        <p>© Criado e desenvolvido por Lincoln Biancardi.</p>
    </footer>
    <script src="/js/app.js"></script>
</body>
</html>