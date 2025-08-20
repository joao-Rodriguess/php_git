<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Funcionários Cadastrados</title>
    <link href="css/formulario_func.css" rel="stylesheet" type="text/css">
</head>
<body>
    <form method="post" class="search-form">
        <input 
            type="text" 
            class="search-input" 
            name="search" 
            placeholder="Pesquisar por nome..." 
            value="<?php echo isset($_POST['search']) ? htmlspecialchars($_POST['search']) : ''; ?>"
        >

        <input 
            type="number" 
            class="search-input" 
            name="salary_search" 
            placeholder="Pesquisar por salário..." 
            value="<?php echo isset($_POST['salary_search']) ? htmlspecialchars($_POST['salary_search']) : ''; ?>"
        >
<button type="submit" class="search-btn" style="display: flex; flex-direction:row; margin-left:30px;">
       <span>Buscar <i class='bi bi-search'></i></span>
</button>

    </form>

    <div class="box2 table-responsive">
        <h2 class="titulo">Tabela mostrando os registros de Funcionários Cadastrados</h2>
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
            $search = isset($_POST['search']) ? trim($_POST['search']) : '';
             $salary_search = isset($_POST['salary_search']) ? trim($_POST['salary_search']) : '';
            $mostrou = false;
            if (file_exists($arquivo)) {
                $linhas = file($arquivo);
                foreach ($linhas as $linha) {
                    $dados = explode("|", trim($linha));
                    if (count($dados) < 6) continue; // ignora linhas incompletas
                    list($nome, $idade, $email, $telefone, $salario_hora, $horas_trabalho) = $dados;

                    // Filtra pelo nome se houver pesquisa
                    if (
    $search &&
    stripos($nome, $search) === false &&
    stripos($email, $search) === false &&
    stripos($salario_hora, $salary_search) === false 
) {
    continue;
}
                    $mostrou = true;
                    echo "<tr>
                            <td>" . htmlspecialchars($nome) . "</td>
                            <td>" . htmlspecialchars($idade) . "</td>
                            <td>" . htmlspecialchars($email) . "</td>
                            <td>" . htmlspecialchars($telefone) . "</td>
                            <td>" . htmlspecialchars($salario_hora) . "</td>
                            <td>" . htmlspecialchars($horas_trabalho) . "</td>
                          </tr>";
                }
                if (!$mostrou) {
                    echo "<tr><td colspan='6'>Nenhum funcionário encontrado.</td></tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Nenhum dado registrado.</td></tr>";
            }
            ?>
            </tbody>
            <tfoot class="footer">
                <tr>
                    <td colspan="6">
                        <a href="formulario_func.php">Voltar para o formulário</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

   
    </div>
</body>
</html>