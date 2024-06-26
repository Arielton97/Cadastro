<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar funcionário</title>
</head>
<p><a href="../../index.php">Voltar</a><a href="./consultar.php">Consultar</a></p>
<body>
    
    <form action="insert_cadastro.php" method="post">
        <!-- Nome -->
        <label for="nome">
            Nome:
            <div>
                <input type="text" name="nome">
            </div>
        </label>

        <!-- Cargo OK-->
        <label for="cargo">
            Cargo:
            <div>
                <select name="cargo" id="">
                    <option value="">Selecione o cargo</option>
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
        <label for="descricaodocargo">
            Descrição do cargo:
            <div>
                <textarea name="descricaodocargo" id="" cols="30" rows="10"></textarea>
            </div>
        </label>

        <!-- Setor OK-->
        <label for="setor">
            Setor:
            <div>
                <select name="setor" id="">
                    <option value="">Selecione o setor</option>
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
            Salário:
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

        <br>

        <!-- Botao para limpar o formulário e gravar os dados do formulário -->
        <div>
            <button type="reset">Limpar formulário</button>
            <button type="submit">Gravar dados</button>
        </div>
    </form>


</body>
</html>