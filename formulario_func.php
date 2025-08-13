<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/formulario_func.css">
    <title>Document</title>
</head>
<body>
    
    <form action="formulario_func.php" method="post">
<div class="titulo">
    <h3><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-person-rolodex" viewBox="0 0 16 16">
  <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
  <path d="M1 1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h.5a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h.5a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H6.707L6 1.293A1 1 0 0 0 5.293 1zm0 1h4.293L6 2.707A1 1 0 0 0 6.707 3H15v10h-.085a1.5 1.5 0 0 0-2.4-.63C11.885 11.223 10.554 10 8 10c-2.555 0-3.886 1.224-4.514 2.37a1.5 1.5 0 0 0-2.4.63H1z"/>
</svg> Cadastro de Funcionários</h3>
</div>
        <div class="form-group">
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" required><br>
        </div>

        <div class="form-group">
            <label for="idade">Idade:</label><br>
            <input type="number" id="idade" name="idade" required><br>
        </div>

        <div class="form-group">
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>
        </div>

        <div class="form-group">
            <label for="telefone">Telefone:</label><br>
            <input type="tel" id="telefone" name="telefone" required><br>
        </div>

        <div class="form-group">
            <label for="salario_hora">Quanto você ganha por hora?:</label><br>
            <input type="number" id="salario_hora" name="salario_hora" required><br>
        </div>

        <div class="form-group">
            <label for="horas_trabalho">Quantas horas você trabalha por mes?:</label><br>
            <input type="number" id="horas_trabalho" name="horas_trabalho" required><br>
        </div>

        <div class="form-group">
            <label for="file">Envie teu curriculo:</label><br>
            <input type="file" id="arquivo[]" name="arquivo[]" required><br><br>
        </div>

        <div class="submit">
            <input type="submit" value="Cadastrar">
        </div>
    </form>

    <?php

    if($_SERVER["REQUEST_METHOD"] === 'POST'){
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $salario_hora = $_POST["salario_hora"];
        $horas_trabalho = $_POST["horas_trabalho"];
        $pasta_destino = "img/";
        $arquivo = $_FILES["arquivo"];

        if ($arquivo["error"] === UPLOAD_ERR_OK){
            $nome_temp = $arquivo["tmp_name"];
            $nome_final = $pasta_destino . basename($arquivo["name"]);

            mkdir($pasta_destino, 0755, true);

           if(move_uploaded_file($nome_temp, $nome_final)){
               echo "<script>alert('Arquivo enviado com sucesso!');</script>";
           }else{
               echo "<script>alert('Erro ao enviar o arquivo.');</script>";
           }
        }else{
            echo "<script>alert('Erro ao fazer upload do arquivo.');</script>";
        }

        $linha = "$nome|$idade|$email|$telefone|$salario_hora|$horas_trabalho\n";
        file_put_contents("arquivo/funcionarios.txt", $linha, FILE_APPEND);

        echo "<script>alert('Funcionário Você foi cadastrado com sucesso!');</script>";
    }else{
        //echo "<script>alert('Método não permitido, Volte e refaça o formulario');</script>";
    }
        ?>

    <div class="box2 table-responsive">
        <h2> Tabela mostrando os registros de Funcionários Cadastrados</h2>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Salário por Hora</th>
                    <th>Horas Trabalhadas</th>
                </tr>
            </thead>
            <tbody>
               <?php
            $arquivo = "arquivo/registro.txt";
            if (file_exists($arquivo)) {
                $linhas = file($arquivo);
                foreach ($linhas as $linha) {
                    $dados = explode("|", trim($linha));
                    list($nome, $idade, $email, $telefone, $endereco, $cidade, $estado, $pais) = $dados;
                    echo "<tr>
                            <td>$nome</td>
                            <td>$idade</td>
                            <td>$email</td>
                            <td>$telefone</td>
                            <td>$salario_hora</td>
                            <td>$horas_trabalho</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='8'>Nenhum dado registrado.</td></tr>";
            }
            ?>

            </tbody>
            <tfoot>
                <tr>
                    <td colspan="8" class="text-center">
                        <a href="atividade2.php" class="link-primary">Voltar para o formulário</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</body>
</html>