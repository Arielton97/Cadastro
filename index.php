<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <script src="assets/js/script.js"></script>
    <!-- Navegação -->
    <header>
        <div>
            <div class="navegacao_principal">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <a href="#">
                <img src="https://portal.uniasselvi.com.br/public/img/site/logo-horizontal_desk.png" alt="UNIAASELVI" class=""></a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link active" aria-current="page">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link disabled">Sair</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Conteúdo principal da página -->
    <main class="container">
        <!-- Titulo para o CRUD - UNIASSELVI - e links para cadastro e consulta -->
        <div>
            <h1 class="crud_uniasselvi">CRUD simplista para a UNIASSELVI</h1>
            <div class="botoes">
                <button type="button" class="btn btn-primary btn-lg">
                    <a href="assets/util/cadastro.html" id="botao">Cadastro de funcionário</a>
                </button>
                <button type="button" class="btn btn-primary btn-lg">
                    <a href="assets/util/consultar.php" id="botao">Consultar funcionários no formulário</a>
                </button>
            </div>
        </div>
    </main>
</body>
</html>