<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/novo_estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>J.P</title>
</head>
<body>
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
                                <input type="text" name="operacao" id="operacao" placeholder="Digite o número" required>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Calcular</button>
                        </div>
                    </form>
                </div>


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

        <div class="footer">
            <p>Desenvolvido por J.P</p>
    </div>
</body>
</html>