<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Funcionário no formulário</title>
</head>
<body>
    <p><a href="../../index.php">Voltar</a></p>
    <div>
        <h1>Formulário de Funcionários</h1>
        <p>Lista de funcionários cadastrados no formulário</p>
        <?php
            //  Obtém a lista de hábitos do banco de dados MySQL
            require_once 'conexao.php';

            //Executa a query/ consulta da variável $sql
            $sql = " SELECT * FROM funcionarios";
            $resultado = $conexao->query($sql);

            if(isset($_SESSSION['mensagem'])) {
                echo "
                <script>
                    let escrever = `{$_SESSION['mensagem']}`;
                    let msg = document.getElementById('aviso');
                    msg.innerHTML = escrever;
                    setInterval(function(){
                        msg.innerHTML = '';
                    }, 3000)
                </script>";
            }
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

                <p>Cadastrar mais funcionários no formulário ?</p>
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
        <a href="cadastro.php">Cadastrar Funcionário</a>
    </div>
</body>
</html>