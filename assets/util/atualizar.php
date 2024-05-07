<?php
    session_start();
    require_once 'conexao.php';    

    if(isset($_POST['atualizar'])) {

        $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
        $cargo = mysqli_real_escape_string($conexao, $_POST['cargo']);
        $descricaoDoCargo = mysqli_real_escape_string($conexao, $_POST['descricaodocargo']);
        $setor = mysqli_real_escape_string($conexao, $_POST['setor']);
        $salario = mysqli_real_escape_string($conexao, $_POST['salario']);

        $id = mysqli_real_escape_string($conexao, $_POST['codigo']);

        $sql = "UPDATE funcionarios SET nome = '$nome', 
                                    cargo = '$cargo', 
                                    descricaodocargo = '$descricaoDoCargo', 
                                    setor = '$setor', 
                                    salario = '$salario'   
                                    WHERE codigo = '$id'";

        if(mysqli_query($conexao, $sql)) {
            $_SESSION['mensagem'] = "Registro editado com sucesso";
            header('Location: ./consultar.php');
        } else {
            $_SESSION['message'] = "Erro na edição do registro!";
            header('consultar.php');
        }
        // FECHAR CONEXÃO 
        mysqli_close($conexao);
    }
?>