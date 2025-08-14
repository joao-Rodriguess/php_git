<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/formulario_func.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="box2 table-responsive">
         <h2 class="titulo"> Tabela mostrando os registros de Funcionários Cadastrados</h2>
        <table class="table table-hover table-striped">
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
            $arquivo = "arquivo/funcionarios.txt";
            if (file_exists($arquivo)) {
                $linhas = file($arquivo);
                foreach ($linhas as $linha) {
                    $dados = explode("|", trim($linha));
                    list($nome, $idade, $email, $telefone, $salario_hora, $horas_trabalho) = $dados;
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
            <tfoot class="footer ">
                <tr>
                    <td colspan="8" >
                        <a href="formulario_func.php" >Voltar para o formulário</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

    <div class="box2">
        <h2 class="titulo">Imagens dos Funcionários</h2>
        <div class="row">
            <?php
            $pasta_imagens = "img/";
            if (is_dir($pasta_imagens)) {
                $imagens = glob($pasta_imagens . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
                foreach ($imagens as $imagem) {
                    echo "<div class='col-md-3'>
                            <img src='$imagem' alt='Imagem do Funcionário' class='img-fluid'>
                          </div>";
                }
            } else {
                echo "<p>Nenhuma imagem encontrada.</p>";
            }
            ?>
        </div>
</body>
</html>


       