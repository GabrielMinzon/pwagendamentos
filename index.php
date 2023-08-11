<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="format-detection" content="telephone-no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="color-scheme" content="light dark">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/estilo.css">
        <script src="js/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <script src="js/funcoes.js"></script>
        <title>SISTEMA DE AGENDAMENTO - CLIENTES</title>
    </head>

    <body>

        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary col-12">
                    <a class="navbar-brand" href="#">SISTEMA WEB</a>
                    <button class="navbar-toggler" type="button" data-toglle="collapse" data-target="#navbarNavDropdown"
                            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Cadastrar<span class="sr-only">(Current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="consultarClientes.php"></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="row">
                <div class="card mb-3 col-12">
                    <div class="card-body">
                        <h5 class="card-title">Cadastrar - Agendamento de Potenciais Clientes</h5>
                        <p class="card-text">Sistema utilizado para agendamento de serviços</p>
                        <p>
                            <form method="post" action="controller/ControllerCadastro.php?funcao=cadastro" id="form" name="form">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Nome:</label>
                                    <input type="text" class="form-control1" name="txtNome" required id ="txtNome">
                                </div>

                            </form>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>