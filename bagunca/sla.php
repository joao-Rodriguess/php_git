
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <style>
        /* Usei um tutorial para fazer as sombras estilo neumorfico */
        /* paleta de cor site
            https://coolors.co/f8f9fa-e9ecef-dee2e6-ced4da-adb5bd-6c757d-495057-343a40-212529
        */
        :root {
            --seasalt: #f8f9faff;
            --antiflash-white: #e9ecefff;
            --platinum: #dee2e6ff;
            --french-gray: #ced4daff;
            --french-gray-2: #adb5bdff;
            --slate-gray: #6c757dff;
            --outer-space: #495057ff;
            --onyx: #343a40ff;
            --eerie-black: #212529ff;
        }

        .box {
            max-width: 400px;
            background-color: var(--seasalt);
            width: 90%;
            margin: 5% auto;
            padding: 20px;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
            font-size: 20px;
        }

        .box2 {
            max-width: 60%;
            background-color: var(--platinum);
            width: 90%;
            margin: 5% auto;
            padding: 20px;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.3);
            text-align: center;
            font-size: 20px;

            box-shadow:
                inset 2px 2px 5px rgba(74, 78, 105, 0.3),
                inset -2px -2px 5px rgba(255, 255, 255, 0.5);
        }

        body {
            background-color: var(--platinum);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        input {
            width: 80%;
            padding: 10px;
            border: none;
            border-radius: 8px;
            background-color: var(--platinum);
            font-size: 20px;
            margin-bottom: 15px;
            color: var(--space-cadet);

            /* efeito de sombra interna dupla */
            box-shadow:
                inset 2px 2px 6px rgba(74, 78, 105, 0.4),
                /* sombra escura da direita/baixo */
                inset -2px -2px 6px rgba(255, 255, 255, 0.5);
            /* luz suave da esquerda/cima */
        }


        select {
            width: 80%;
            padding: 10px;
            border: none;
            border-radius: 8px;
            background-color: var(--platinum);
            font-size: 24px;
            margin-bottom: 15px;
            color: var(--space-cadet);
            text-align: center;

            /* efeito de sombra interna dupla */
            box-shadow:
                inset 2px 2px 6px rgba(74, 78, 105, 0.4),
                /* sombra escura da direita/baixo */
                inset -2px -2px 6px rgba(255, 255, 255, 0.5);
            /* luz suave da esquerda/cima */
        }

        p {
            font-size: 30px;
        }

        input[type="submit"] {
            background-color: var(--french-gray);
            color: var(--space-cadet);
            border: none;
            /* tira a borda para dar o efeito limpo */
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow:
                4px 4px 8px rgba(74, 78, 105, 0.3),
                /* sombra inferior direita */
                -4px -4px 8px rgba(255, 255, 255, 0.5);
            /* brilho superior esquerdo */
        }

        input[type="submit"]:hover {
            background-color: var(--french-gray-2);
            box-shadow:
                inset 2px 2px 5px rgba(74, 78, 105, 0.3),
                inset -2px -2px 5px rgba(255, 255, 255, 0.5);
        }

        table,
        tr,
        td,
        th {
            box-shadow:
                inset 2px 2px 5px rgba(74, 78, 105, 0.3),
                inset -2px -2px 5px rgba(255, 255, 255, 0.5);

            background-color: var(--seasalt);
            padding: 5px;
        }
    </style>
</head>

<body>
    <div class="box">
        <h1>Formulario PHP</h1>
        <form action="" method="post">
            <label for="nome">Digite o seu nome:</label>
            <input type="text" name="nome" id="nome" required>
            <label for="CPF">Digite o seu CPF:</label>
            <input type="text" name="CPF" id="CPF" required><br>
            <label for="nascimento">Data Nascimento:</label>
            <input type="date" name="nascimento" id="nascimento" required>
            <label for="email">Digite o seu Email:</label>
            <input type="email" name="email" id="email" required>
            <label for="telefone">Digite o seu Telefone:</label>
            <input type="tel" name="telefone" id="telefone" required>
            <label for="genero">Escolha o seu genero:</label>
            <select name="genero" id="genero">
                <option value="homem">Homem</option>
                <option value="mulher">Mulher</option>
                <option value="outro">Outro</option>
            </select>
            <input type="submit" value="Enviar">
        </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nome        = $_POST['nome'];
        $cpf         = $_POST['CPF'];
        $nascimento  = $_POST['nascimento'];
        $email       = $_POST['email'];
        $telefone    = $_POST['telefone'];
        $genero      = $_POST['genero'];

        $nascimento  = strtotime($nascimento);
        $nascimento_f = date("d/m/Y", $nascimento);

        //Exemplo de como vai salvar a liha
        //Matheus|44651922821|15/08/2025|Matheus6@aluno.senai.br|41323231|homem
        $linha = "$nome|$cpf|$nascimento_f|$email|$telefone|$genero\n";

        // Salvar no arquivo txt (modo 'a' = append/adicionar ao final)
        file_put_contents("dados.txt", $linha, FILE_APPEND);
    }

    // EXIBIR TODOS OS DADOS SALVOS
    $arquivo = "dados.txt";

    if (file_exists($arquivo)) {
        $linhas = file($arquivo); // Lê todas as linhas do arquivo como um array

        echo "<div class='box2'>";
        echo "<h2>Registros Salvos</h2>";
        echo "<table style='width:100%'>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data Nascimento</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Gênero</th>
            </tr>";

        foreach ($linhas as $linha) {
            $dados = explode("|", trim($linha)); // Separa os dados e remove \n por causa do trim
            echo "<tr>";
            foreach ($dados as $valor) {
                //htmlspecialchars Converta os caracteres predefinidos "<" (menor que) e ">" (maior que) em entidades HTML:
                echo "<td>" . htmlspecialchars($valor) . "</td>"; 
            }
            echo "</tr>";
        }

        echo "</table>";
        echo "</div>";
    }
    ?>
</body>

</html>
 
