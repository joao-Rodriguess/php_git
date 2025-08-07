
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form, .box2 {
            max-width: 600px;
            margin: auto;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input, select, button {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        h1, h2, p, .box2 h2, .box2 p {
            text-align: center;
        }
        h2, .box2 h2 {
            color: #333;
        }
        .box2 {
            padding: 5px;
            border: 2px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            overflow: auto;
            background-color: #f9f9f9;
            width: 100%;
        }
        /* Ampliar espaço da tabela */
        .table-responsive {
            max-width: 1200px;
            margin: 30px auto;
        }
        .box2 table {
            width: 100%;
            min-width: 900px;
            border-collapse: collapse;
        }
        .box2 th, .box2 td {
            border: 1px solid #ddd;
            padding: 12px 16px;
            text-align: center;
            font-size: 16px;
        }
        .box2 th {
            background-color: #f2f2f2;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
        .footer p {
            margin: 0;
        }
        .footer a {
            color: #007bff;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .table-light tfoot tr td {
            background-color: #f8f9fa;
            border-top: 2px solid #dee2e6;
            font-size: 15px;
            color: #555;
            padding: 12px 0;
        }
        .table-light tfoot a.link-primary {
            color: #0d6efd;
            text-decoration: underline;
            font-weight: bold;
        }
        .table-light tfoot a.link-primary:hover {
            color: #084298;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div>
        <h1>Atividade de php do reyner</h1>
        <p>Formulario</p>
        <form action="atividade2.php" method="post">
              <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br>

            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" required><br>

            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco"><br>

            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade"><br>

            
            <label for="estado">Estado:</label>
            <select id="estado" name="estado">
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </select><br>
                

            <label for="pais">País:</label>
            <select id="pais" name="pais">
                <option value="Brasil">Brasil</option>
                <option value="Estados Unidos">Estados Unidos</option>
                <option value="Canadá">Canadá</option>
                <option value="Alemanha">Alemanha</option>
                <option value="França">França</option>
                <option value="Reino Unido">Reino Unido</option>
                <option value="Japão">Japão</option>
                <option value="China">China</option>
                <option value="Índia">Índia</option>
                <option value="Austrália">Austrália</option>
                <option value="México">México</option>
                <option value="Argentina">Argentina</option>
                <option value="Chile">Chile</option>
                <option value="Colômbia">Colômbia</option>
                <option value="Peru">Peru</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Rússia">Rússia</option>
                <option value="Itália">Itália</option>
            </select><br>



            <button type="submit">Enviar</button>
        </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $idade = htmlspecialchars($_POST['idade']);
    $email = htmlspecialchars($_POST['email']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $endereco = htmlspecialchars($_POST['endereco']);
    $cidade = htmlspecialchars($_POST['cidade']);
    $estado = htmlspecialchars($_POST['estado']);
    $pais = htmlspecialchars($_POST['pais']);

    $linha = "$nome|$idade|$email|$telefone|$endereco|$cidade|$estado|$pais\n";
    file_put_contents("arquivo/registro.txt",$linha, FILE_APPEND);

    echo "<script>alert('Dados salvos com sucesso!');</script>";
} else {
    echo "<p>Por favor, preencha o formulário.</p>";
}
?>
    </div>
    <div class="box2 table-responsive">
        <h2>Dados Registrados</h2>
        <p>Lista de informações registradas no sistema:</p>
        <table>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>País</th>
            </tr>
            <?php
            $arquivo = "arquivo/registro.txt";
            if (file_exists($arquivo)) {
                $linhas = file($arquivo);
                foreach ($linhas as $linha) {
                    list($nome, $idade, $email, $telefone, $endereco, $cidade, $estado, $pais) = explode("|", trim($linha));
                    echo "<tr>
                            <td>$nome</td>
                            <td>$idade</td>
                            <td>$email</td>
                            <td>$telefone</td>
                            <td>$endereco</td>
                            <td>$cidade</td>
                            <td>$estado</td>
                            <td>$pais</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='8'>Nenhum dado registrado.</td></tr>";
            }
            ?>
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