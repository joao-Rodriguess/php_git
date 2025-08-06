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
                        <div class="titulo">
                            <h1>Tabuada</h1>
                                <label><i class="bi bi-code-square"></i> Manda o numero pra mim</label>
                                <input type="number" name="number" id="number" placeholder="Digite o número" required>
                        </div>
                        <div class="titulo">
                                <label><i class="bi bi-code-square"></i> Manda o numero pra mim</label>
                                <input type="number" name="number" id="number" placeholder="Digite o número" required>
                        </div>
                    </form>
                </div>


        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $number = isset($_POST['number']) ? intval($_POST['number']) : 0;

           echo "<h3> Tabuada do $number </h3>";
            echo "<table class='tabela'>";
            for ($i = 1; $i <= 10; $i++) {
                $result = $number * $i;
                echo "<tr><td>$number x $i = $result</td></tr>";
            }
            echo "</table>";
        }
        ?>

        <div class="footer">
            <p>Desenvolvido por J.P</p>
    </div>
</body>
</html>