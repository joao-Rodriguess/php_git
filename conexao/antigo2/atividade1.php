<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Atividade 1</h1>
    <p>Este é um exemplo de código PHP que demonstra o uso de variáveis e estruturas condicionais.</p>
    
    <?php
        $a = 1;
        $b = 2;
        $c = 3;

        if($a < $b){
            echo ("O nahyron e o parafal não cala a boca " . $c);
        } else {
            echo ("O professor ensinou php pa nois");
        }
    ?>
    <h2>Tipos de Variáveis</h2>
    <p>Veja abaixo exemplos de diferentes tipos de variáveis em PHP:</p>
    <?php
//integer
$a = 1;

//float
$b = 2.5;

//string
$c = "Hello, World!";

//boolean
$d = true;

//array
$e = array(1, 2, 3, 4, 5);

//object
$f = new stdClass();
$f->property = "I am an object";

//null
$g = null;

// Displaying the variables
echo "Integer: $a<br>";
echo "Float: $b<br>";
echo "String: $c<br>";
echo "Boolean: " . ($d ? 'true' : 'false') . "<br>";
echo "Array: " . implode(", ", $e) . "<br>";
echo "Object property: $f->property<br>";
echo "Null: " . ($g === null ? 'null' : $g) . "<br>";
?>

    <h2>Operações Matemáticas</h2>
    <p>Veja abaixo exemplos de operações matemáticas simples:</p>
    <?php
        $num1 = 10;
        $num2 = 5;

        echo "Soma: " . ($num1 + $num2) . "<br>";
        echo "Subtração: " . ($num1 - $num2) . "<br>";
        echo "Multiplicação: " . ($num1 * $num2) . "<br>";
        echo "Divisão: " . ($num1 / $num2) . "<br>";
    ?>  

    <h2>Exemplo de Condicional</h2>
    <p>Veja abaixo um exemplo de condicional em PHP:</p>
    <?php
        $idade = 18;

        if($idade >= 18) {
            echo "Você é maior de idade.";
        } else {
            echo "Você é menor de idade.";
        }
    ?>
    <h2>Exemplo de Loop</h2>
    <p>Veja abaixo um exemplo de loop em PHP:</p>
    <?php
        for($i = 1; $i <= 5; $i++) {
            echo "Número: $i<br>";
        }
    ?>
    <h2>Exemplo de Função</h2>
    <p>Veja abaixo um exemplo de função em PHP:</p>
    <?php
        function saudacao($nome) {
            return "Olá, $nome!";
        }

        echo saudacao("João");
    ?>
    <h2>Exemplo de Array Associativo</h2>
    <p>Veja abaixo um exemplo de array associativo em PHP:</p>
    <?php
        $pessoa = array(
            "nome" => "Maria",
            "idade" => 30,
            "cidade" => "São Paulo"
        );

        echo "Nome: " . $pessoa["nome"] . "<br>";
        echo "Idade: " . $pessoa["idade"] . "<br>";
        echo "Cidade: " . $pessoa["cidade"] . "<br>";
    ?>
    <h2>Exemplo de Manipulação de String</h2>
    <p>Veja abaixo um exemplo de manipulação de string em PHP:</p>
    <?php
        $texto = "Aprendendo PHP é divertido!";
        $textoMaiusculo = strtoupper($texto);
        $textoMinusculo = strtolower($texto);
        $textoTamanho = strlen($texto);

        echo "Texto original: $texto<br>";
        echo "Texto em maiúsculas: $textoMaiusculo<br>";
        echo "Texto em minúsculas: $textoMinusculo<br>";
        echo "Tamanho do texto: $textoTamanho caracteres<br>";
    ?>
    <h2>Exemplo de Inclusão de Arquivo</h2>
    <p>Veja abaixo um exemplo de inclusão de arquivo em PHP:</p>
    <?php
        // Incluindo um arquivo externo
        include 'exemplo1.php';
        // Certifique-se de que o arquivo exemplo1.php existe no mesmo diretório
    ?>
    <h2>Exemplo de Formulário</h2>
    <p>Veja abaixo um exemplo de formulário em PHP:</p>
    <form method="post" action="index.php">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : '';
            $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';

            echo "Nome: $nome<br>";
            echo "Email: $email<br>";
        }
    ?>
    <h2>Exemplo de Tabela</h2>
    <p>Veja abaixo um exemplo de tabela em PHP:</p>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Cidade</th>
        </tr>
        <tr>
            <td>Ana</td>
            <td>25</td>
            <td>Rio de Janeiro</td>
        </tr>
        <tr>
            <td>Pedro</td>
            <td>30</td>
            <td>Curitiba</td>
        </tr>
        <tr>
            <td>Lucas</td>
            <td>22</td>
            <td>Belo Horizonte</td>
        </tr>
    </table>
    <h2>Exemplo de Estilo CSS</h2>
    <p>Veja abaixo um exemplo de estilo CSS aplicado a um formulário:</p>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        input[type="text"], input[type="email"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
    <h2>Exemplo de Bootstrap</h2>
    <p>Veja abaixo um exemplo de uso do Bootstrap para estilizar um formulário:</p>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0
.0/css/bootstrap.min.css">
    <form class="container mt-5" method="post">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" id="nome" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.
0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <h2>Exemplo de Bootstrap Icons</h2>
    <p>Veja abaixo um exemplo de uso de ícones do Bootstrap:</p>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1
.13.1/font/bootstrap-icons.min.css">
    <i class="bi bi-alarm-fill"></i> Alarme
    <i class="bi bi-bell-fill"></i> Sino
    <i class="bi bi-calendar-fill"></i> Calendário
    <i class="bi bi-camera-fill"></i> Câmera
    <i class="bi bi-chat-fill"></i> Bate-papo
    <i class="bi bi-check-circle-fill"></i> Verificado
    <i class="bi bi-gear-fill"></i> Configurações
    <i class="bi bi-heart-fill"></i> Coração
    <i class="bi bi-house-fill"></i> Casa
    <i class="bi bi-info-circle-fill"></i> Informação
    <i class="bi bi-person-fill"></i> Pessoa
    <i class="bi bi-search"></i> Pesquisa
    <i class="bi bi-star-fill"></i> Estrela
    <i class="bi bi-trash-fill"></i> Lixeira
    <i class="bi bi-x-circle-fill"></i> Fechar
    <h2>Exemplo de Estilo CSS Personalizado</h2>
    <p>Veja abaixo um exemplo de estilo CSS personalizado:</p>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
        }
        .brincar {
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .brincadeira {
            margin-top: 20px;
        }
        .brincadeira form {
            display: flex;
            flex-direction: column;
        }
        .brincadeira label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        .brincadeira input {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .brincadeira button {
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .brincadeira button:hover {
            background-color: #0056b3;
        }
        .brincadeira h3 {
            margin-top: 20px;
        }
        .brincadeira h4 {
            margin-top: 10px;
        }
        .brincadeira .btn {
            margin-top: 10px;
        }
    </style>
    <div class="brincar">
        <fieldset>FORMULARIO</fieldset>
        <div class="brincadeira">
            <form method="post">
                <div>
                    <h1>Tabuada</h1>
                    <label><i class="bi bi-1-circle-fill"></i> Manda o numero pra mim</label>
                    <input type="number" name="number" id="number" placeholder="Digite o número" required>
                </div>
                <div>
                    <label><i class="bi bi-1-circle-fill"></i> Manda o numero pra mim</label>
                    <input type="number" name="number2" id="number2" placeholder="Digite o número" required>
                </div>
                <div>
                    <label><i class="bi bi-braces"></i> Manda o tipo de operação</label>
                    <input type="text" name="operacao" id="operacao" placeholder="Digite o tipo de operação" required>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Calcular</button>
                </div>
            </form>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $number = isset($_POST['number']) ? intval($_POST['number']) : 0;
                $number2 = isset($_POST['number2']) ? intval($_POST['number2']) : 0;
                $operacao = isset($_POST['operacao']) ? $_POST['operacao'] : '';

                echo "<h3> Calculadora de dois numeros</h3>";
                echo "<h4> Resultado: </h4>";

                switch ($operacao) {
                    case 'soma':
                        $resultado = $number + $number2;
                        echo "$number + $number2 = $resultado";
                        break;
                    case 'subtracao':
                        $resultado = $number - $number2;
                        echo "$number - $number2 = $resultado";
                        break;
                    case 'multiplicacao':
                        $resultado = $number * $number2;
                        echo "$number * $number2 = $resultado";
                        break;
                    case 'divisao':
                        if ($number2 != 0) {
                            $resultado = $number / $number2;
                            echo "$number / $number2 = $resultado";
                        } else {
                            echo "Divisão por zero não é permitida.";
                        }
                        break;
                    default:
                        echo "Operação inválida.";
                }
            }
            ?>
        </div>
    </div>
</div>
<?php
$timestamp = strtotime("last Sunday");
echo "O timestamp do último domingo foi:".date("d/m/Y",$timestamp)."<br>";
$timestamp = strtotime("next Sunday");
echo "O timestamp do próximo domingo será:".date("d/m/Y H:m:s",$timestamp)."<br>";
?>
        </body>
</html>




