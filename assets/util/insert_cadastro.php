<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodedados = "uniasselvi_teste";

    // Abre a conexão com o banco de dados lista de habito

    $conexao = new mysqli($servidor
                        , $usuario
                        , $senha
                        , $bancodedados);
    // Verifica se houve erro ao abrir a conexão
    if ($conexao->connect_error) {
        die ("A conexão falhou: " . $conexao->connect_error);
    }

    // arrumar isso aqui 
    // $nome = $_GET["nome"];
    $nome = $_POST["nome"];
    $cargo = $_POST["cargo"];
    $descricaodocargo = $_POST["descricaodocargo"];
    $setor = $_POST["setor"];
    $salario = $_POST["salario"];
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Arrumar isso aqui também  
    // $sql = "INSERT INTO funcionarios (nome, ) VALUES ('".$nome."','A')";
    $sql = "INSERT INTO funcionarios (nome, 
                                    cargo, 
                                    descricaodocargo, 
                                    setor, 
                                    salario) VALUES ('$nome', 
                                                '$cargo', 
                                                '$descricaodocargo', 
                                                '$setor', 
                                                '$salario')";
    

    // Verifica se ocorreu tudo bem
    // Caso houve erro, fecha a conexão e aborta o programa
    if (!($conexao->query($sql) === TRUE)) {
        $conexao->close();
        die ("Erro: ". $sql . "<br>" . $conexao->error);
    }

    // Fecha a conexão com o banco de dados
    $conexao->close();

    // Envia para a página onde aparece o fomulário de usuários cadastrados
    header("Location: consultar.php");
?>