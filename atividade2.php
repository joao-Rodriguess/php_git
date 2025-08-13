<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/atividade2.css">
    <title>Document</title>
    <style>

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
    </div>
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
        file_put_contents("arquivo/registro.txt", $linha, FILE_APPEND);

        echo "<script>alert('Dados salvos com sucesso!');</script>";
    } else {
        echo "<p>Por favor, preencha o formulário.</p>";
    }
    ?>

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
                    $dados = explode("|", trim($linha));
                    list($nome, $idade, $email, $telefone, $endereco, $cidade, $estado, $pais) = $dados;
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

</html>