<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Dev</title>
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">SINAJUVE</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul id="menu-principal" class="nav navbar-nav">
                    <li class="active"><a ref_sys="sobre" href="#">Formulário de Adesão</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="?sair"><span class="glyphicon glyphicon-log-in"></span> Entrar com o Gov.br</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
    
    
    
    
    <section class="container mt-5">
        <h2 class="m-3">Formulário de Adesão do SINAJUVE</h2>
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputcnpj">CNPJ*</label>
                    <input type="txt" class="form-control" id="inputcnpj" placeholder="CNPJ" required />
                </div>
                <div class="form-group col-md-6">
                    <label for="inputrazaosicial">Razão Social*</label>
                    <input type="txt" class="form-control" id="inputrazaosicial" placeholder="Razão Social" required />
                </div>
            </div>
            <div>
                <div class="form-group col-md-6">
                    <label for="inputTelefone">Telefone</label>
                    <input type="text" class="form-control" id="inputTelefone" placeholder="Telefone" required />
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail">Email da Instituição</label>
                    <input type="text" class="form-control" id="inputEmail" placeholder="Email da Instituição" required />
                </div>

            </div>
            <div class="form-group col-md-12">
                <label for="inputAddress2">Endereço</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartamento, hotel, casa, etc." required />
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Cidade</label>
                    <input type="text" class="form-control" id="inputCity" required />
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEstado">Estado</label>
                    <select id="inputEstado" class="form-control">
                        <option selected>Escolher...</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                        <option value="EX">Estrangeiro</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputCEP">CEP</label>
                    <input type="text" class="form-control" id="inputCEP">
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Concordo com os termo de adesão do<a href="https://www.gov.br/secretariageral/pt-br/juventude/acoes-e-programas/sinajuve" target="_blank"> SINAJUVE</a>
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>