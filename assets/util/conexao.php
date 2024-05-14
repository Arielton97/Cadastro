<?php

    //Variáveis para conexão com o banco de dados
    $host = "localhost";
    $usuario = "root";
    $senha = "Ariel,199703";
    $banco = "uniasselvi";

    //Variável de conexão com o banco de dados
    $conexao = mysqli_connect($host, 
                        $usuario, 
                        $senha, 
                        $banco) 
    or die("Erro na conexão com o Banco de Dados: " . mysqli_error($conexao));
?>