<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
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
        h1 {
            text-align: center;
        }
        h2 {
            color: #333;
        }
        p {
            text-align: center;
        }
    </style>
    <script>
        // JavaScript can be added here if needed   
    </script>
</head>
<body>
    <div>
        <h1>Atividade 2</h1>
        <p>Formulario de 9 informaçoes pessoais</p>
        <form action="atividade2.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br>

            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone"><br>

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
            <input type="text" id="pais" name="pais"><br>

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

    echo "<h2>Informações Recebidas:</h2>";
    echo "Nome: $nome<br>";
    echo "Idade: $idade<br>";
    echo "Email: $email<br>";
    echo "Telefone: $telefone<br>";
    echo "Endereço: $endereco<br>";
    echo "Cidade: $cidade<br>";
    echo "Estado: $estado<br>";
    echo "País: $pais<br>";
}
?>
    </div>
</body>
</html>