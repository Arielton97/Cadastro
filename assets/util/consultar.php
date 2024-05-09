<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Funcionário no formulário</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="../../assets/css/style.css">
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
                            <a href="../../index.php" class="nav-link active" aria-current="page">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="cadastro.html" class="nav-link active">Cadastrar</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <div>
            <h1 class="crud_uniasselvi">Formulário de Funcionários</h1>
            <p>Lista de funcionários cadastrados no formulário</p>
            <?php
                //  Obtém a lista de hábitos do banco de dados MySQL
                require_once 'conexao.php';

                //Executa a query/ consulta da variável $sql
                $sql = " SELECT * FROM funcionarios";
                $resultado = $conexao->query($sql);

                session_unset();

                //  Verifica se a query retornou registros
                if ($resultado->num_rows > 0) {
                    
            ?>
                    <br />
                    <table border="1px">
                        <tbody>
                            <tr>
                                <th>Codigo</th>
                                <th>Nome</th>
                                <th>Cargo</th>
                                <th>Descrição do Cargo</th>
                                <th>Setor</th>
                                <th>Salário</th>
                            </tr>
                            <?php
                            //  Looping pelos registros retornados
                            while($registro = $resultado->fetch_assoc()) {
                                ?>
                                <tr> 
                                    <td> <?php echo $registro["codigo"]; ?> </td>
                                    <td> <?php echo $registro["nome"]; ?> </td>
                                    <td> <?php echo $registro["cargo"]; ?> </td>
                                    <td> <?php echo $registro["descricaodocargo"]; ?> </td>
                                    <td> <?php echo $registro["setor"]; ?> </td>
                                    <td> <?php echo $registro["salario"]; ?> </td>
                                    <td> <?php echo "<a href='editar.php?id=" . $registro['codigo'] . "'>" . "Editar" . "</a>" ;?></td> 
                                    <td> <?php echo "<a href='apagar.php?id=" . $registro['codigo'] . "'>" . "Apagar" . "</a>" ;?></td>
                                </tr>
                            <?php
                            } // fim do looping
                            ?>  
                        </tbody>
                    </table>

                    
                    <?php
            } else {
                    ?>
                    <p>Frase do dia</p>
                    <p>Quem não tem coragem de arriscar, não chega a lugar nenhum</p>
                    <?php
                } //    fim do if
            //  fecha a coneão com o MySQL
            $conexao->close();
            ?>

            <!-- Botão para cadastrar funcionários -->
            <p>Cadastrar mais funcionários no formulário ?</p>
            <button type="button" class="btn btn-primary btn-lg">
                <a href="cadastro.html" id="botao">Cadastrar Funcionário</a>
            </button>
            
        </div>
    </main>
    
</body>
</html>