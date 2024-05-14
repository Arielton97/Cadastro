<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
</head>
<body>
    <script src="assets/js/script.js"></script>
    <!-- Navegação -->
    <header>
        <nav>
            <div class="logo">
                <a href="#">
                    <img src="https://portal.uniasselvi.com.br/public/img/site/logo-horizontal_desk.png" alt="UNIAASELVI">
                </a>
            </div>
            <div class="links">
                <ul class="nav-itens">
                    <li class="nav-item-home">
                        <a href="#" class="nav-link active" aria-current="page">Home</a>
                    </li>
                    <li class="">
                        <a href="#" class="nav-link disabled">Sair</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Conteúdo principal da página -->
    <main class="container">
        <!-- Titulo para o CRUD - UNIASSELVI - e links para cadastro e consulta -->
        <div>
            <div class="crud_simplista_uniasselvi">
                <h1>CRUD simplista para a UNIASSELVI</h1>
            </div>

            <!-- Botões -->
            <div class="botoes">
                <a href="assets/util/cadastro.html">
                    <button type="button" class="btn btn-primary">
                        Cadastro de funcionário
                    </button>
                </a>
                <a href="assets/util/consultar.php">
                    <button type="button" class="btn btn-primary">
                        Consultar funcionários no formulário
                    </button>
                </a>
            </div>
        </div>
    </main>
</body>
</html>