<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Dev</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-fixed-top navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Painel de Controle</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul id="menu-principal" class="nav navbar-nav">
            <li class="active"><a ref_sys="sobre" href="#">Editar Sobre</a></li>
            <li><a ref_sys="cadastrar_equipe" href="#">Cadastrar Equipe</a></li>
            <li><a ref_sys="lista_equipe" href="#">Listar Equipe</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="?sair"><span class="glyphicon glyphicon-log-in"></span> Loggout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>