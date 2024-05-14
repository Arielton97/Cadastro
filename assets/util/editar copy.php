<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar funcionário</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <a href="../../index.php" class="nav-link active" aria-current="page">Home</a>
                    </li>
                    <li class="">
                        <a href="consultar.php" class="nav-link active">Consultar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container">
        <div>
            <!-- Titulo da Página -->
            <div>
                <h1 class="crud_uniasselvi" id="">Cadastrar Funcionário</h1>
                <!-- Formulário -->
                <form action="insert_cadastro.php" method="post">
                    <!-- Nome -->
                    <div class="col-md-6">
                        <label for="nome" class="form-label">
                            <div>
                                <i class="fa-solid fa-user"></i> Nome
                                <input type="text" name="nome" class="form-control">
                            </div>
                        </label>
                    </div>

                    <!-- Cargo OK-->
                    <label for="cargo">
                        <div>
                            <i class="fa-solid fa-user-tag"></i> Cargo
                            <select name="cargo" class="form-select">
                                <option selected>Selecione o cargo</option>
                                <option value="Estagiário">Estagiário</option>
                                <option value="Auxiliar">Auxiliar</option>
                                <option value="Assistente">Assistente</option>
                                <option value="Técnico">Técnico</option>
                                <option value="Trainee">Trainee</option>
                                <option value="Analista">Analista</option>
                                <option value="Encarregado">Encarregado</option>
                                <option value="Coordenador/ Supervisor">Coordenador/ Supervisor</option>
                                <option value="Gerente">Gerente</option>
                                <option value="Diretor">Diretor</option>
                                <option value="Presidente">Presidente</option>
                            </select>
                        </div>
                    </label>

                    <!-- Descrição do cargo OK-->
                    <div>
                        <label class="col-md-6" for="descricao_do_cargo">
                            <div>
                                <i class="fa-solid fa-circle-info"></i> Descrição do cargo
                                <textarea name="descricao_do_cargo" id="" cols="30" rows="10"></textarea>
                            </div>
                        </label>
                    </div>

                    <!-- Setor OK-->
                    <label for="setor">
                        <div>
                            <i class="fa-solid fa-puzzle-piece"></i> Setor
                            <select name="setor" class="form-select">
                                <option selected>Selecione o setor</option>
                                <option value="Setor Administrativo">Setor Administrativo</option>
                                <option value="Setor Financeiro">Setor Financeiro</option>
                                <option value="Setor Comercial">Setor Comercial</option>
                                <option value="Setor Operacional ou de Produção">Setor Operacional ou de Produção</option>
                                <option value="Setor de Tecnologias da Informação">Setor de Tecnologias da Informação</option>
                            </select>
                        </div>
                    </label>

                    <!-- Salário -->
                    <!-- Não sei se dá pra validar cada option com o cargo, logo um pouco aqui acima -->
                    <label for="salario">
                        <div>
                            <i class="fa-solid fa-dollar-sign"></i> Salário
                            <select name="salario">
                                <option selected>Selecione o salário</option>
                                <option value="R$ 900,00">R$ 900,00</option>
                                <option value="R$ 1200,00">Até R$1200</option>
                                <option value="R$ 1500,00">Até R$ 1500,00</option>
                                <option value="R$ 2000,00">Até R$ 2000,00</option>
                                <option value="R$ 2500,00">Até R$ 2500,00</option>
                                <option value="R$ 3000,00">Até R$ 3000,00</option>
                                <option value="R$ 3500,00">Até R$ 3500,00</option>
                                <option value="R$ 4000,00">Até R$ 4000,00</option>
                                <option value="R$ 5000,00">Até R$ 5000,00</option>
                                <option value="R$ 6000,00">Até R$ 6000,00</option>
                                <option value="R$ 7000,00">Acima de R$ 7000,00</option>
                            </select>
                        </div>
                    </label>

                    <br>

                    <!-- Botao para limpar o formulário e gravar os dados do formulário -->
                    <div class="botoes_cadastro">
                        <button type="reset" class="btn btn-outline-secondary">Limpar formulário</button>
                        <button type="submit" class="btn btn-success">Gravar dados</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

</body>
</html>