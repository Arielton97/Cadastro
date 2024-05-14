<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de formulário com dados do banco de dados</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../'assets/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body> 
    <main>
        <nav>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="../../index.php" class="nav-link active">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link disabled">Sair</a>
                </li>
            </ul>
        </nav>

        <?php
            require_once 'conexao.php';    
            if (mysqli_connect_errno()) {         
                echo "Falha ao conectar ao MySQL: " . mysqli_connect_error();         
                exit();     
            }
            $id = $_GET['id'];      
            $sql = "SELECT * FROM funcionario WHERE idfuncionario = " . mysqli_real_escape_string($conexao, $id);      
            $resultado = mysqli_query($conexao, $sql);      
            if (mysqli_num_rows($resultado) > 0) {         
                $linha = mysqli_fetch_assoc($resultado);          
        ?>      
            <form action="atualizar.php" method="post">
                <input type="hidden" name="idfuncionario" value="<?php echo $linha['idfuncionario']; ?>">
                <div>
                    <!-- Nome -->
                    <label for="nome">
                        Nome:
                        <div>
                            <input type="text" name="nome" value="<?php echo $linha['nome']; ?>" autofocus required>
                        </div>
                    </label>
                    <!-- Cargo OK-->
                    <label for="cargo">
                        Cargo: [<?php echo $linha['cargo']; ?>]
                        <div>
                            <input type="radio" name="cargo" value="Estagiário" required>
                            Estagiário
                            <input type="radio" name="cargo" value="Auxiliar" required>
                            Auxiliar
                            <input type="radio" name="cargo" value="Assistente" required>
                            Assistente
                            <input type="radio" name="cargo" value="Técnico" required>
                            Técnico
                            <input type="radio" name="cargo" value="Trainee" required>
                            Trainee
                            <input type="radio" name="cargo" value="Analista" required>
                            Analista
                            <input type="radio" name="cargo" value="Encarregado" required>
                            Encarregado
                            <input type="radio" name="cargo" value="Coordenador/ Supervisor" required>
                            Coordenador/ Supervisor
                            <input type="radio" name="cargo" value="Gerente" required>
                            Gerente
                            <input type="radio" name="cargo" value="Diretor" required>
                            Diretor
                            <input type="radio" name="cargo" value="Presidente" required>
                            Presidente
                        </div>
                    </label>

                    <!-- Descrição do cargo OK-->
                    <label for="descricaodocargo">
                        Descrição do cargo:
                        <div>
                            <textarea name="descricao_do_cargo" id="" cols="30" rows="10" required><?php echo $linha['descricao_do_cargo']; ?></textarea>
                        </div>
                    </label>

                    <label for="setor">
                        Setor: [<?php echo $linha['setor']; ?>]
                        <div>
                            <input type="radio" name="setor" value="Setor Administrativo" required>
                            <label for="">Setor Administrativo</label>
                            <input type="radio" name="setor" value="Setor Financeiro" required>
                            <label for="">Setor Financeiro</label>
                            <input type="radio" name="setor" value="Setor Comercial" required>
                            <label for="">Setor Comercial</label>
                            <input type="radio" name="setor" value="Setor Operacional ou de Produção" required>
                            <label for="">Setor Operacional ou de Produção</label>
                            <input type="radio" name="setor" value="Setor de tecnologias da Informação" required>
                            <label for="">Setor de Tecnologia da Informação</label>
                        </div>
                    </label>

                    <!-- Salário -->
                    <label for="salario">
                        Salário: [<?php echo $linha['salario']; ?>]
                        <div>
                            <select name="salario">
                                <option value="">Selecione o salário</option>
                                <option value="900,00">R$ 900,00</option>
                                <option value="1200,00">Até R$1200</option>
                                <option value="1500,00">Até R$ 1500,00</option>
                                <option value="2000,00">Até R$ 2000,00</option>
                                <option value="2500,00">Até R$ 2500,00</option>
                                <option value="3000,00">Até R$ 3000,00</option>
                                <option value="3500,00">Até R$ 3500,00</option>
                                <option value="4000,00">Até R$ 4000,00</option>
                                <option value="5000,00">Até R$ 5000,00</option>
                                <option value="6000,00">Até R$ 6000,00</option>
                                <option value="7000,00">Acima de R$ 7000,00</option>
                            </select>
                        </div>
                    </label>
                    
                    <!-- Botão para atualizar o formulario -->
                    <div>
                        <button type="submit" name="atualizar">Atualizar</button>
                    </div>
                </div>
            </form>
        <?php 
        }   else {
                echo "Nenhum resultado encontrado";     
            }      
            mysqli_close($conexao);
        ?>

    </main>

</body>
</html>