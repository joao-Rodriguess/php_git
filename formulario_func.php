<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/formulario_func.css">
    <title>Document</title>
</head>
<body>

   

    <form action="formulario_func.php" method="POST" enctype="multipart/form-data">
        <div class="titulo">
            <h2><i class="bi bi-person-rolodex"></i> Cadastro de Funcionários</h3>
        </div>

        <div class="form-group">
            <label for="nome"><i class="bi bi-person-vcard"></i> Nome:</label><br>
            <input type="text" id="nome" name="nome" required><br>
        </div>

        <div class="form-group">
            <label for="idade"><i class="bi bi-calendar3"></i> Idade:</label><br>
            <input type="number" id="idade" name="idade" required><br>
        </div>

        <div class="form-group">
            <label for="email"><i class="bi bi-envelope-at"></i> Email:</label><br>
            <input type="email" id="email" name="email" required><br>
        </div>

        <div class="form-group">
            <label for="telefone"><i class="bi bi-telephone"></i> Telefone:</label><br>
            <input type="tel" id="telefone" name="telefone" required><br>
        </div>

        <div class="form-group">
            <label for="salario_hora"><i class="bi bi-cash-coin"></i> Quanto você ganha por hora?:</label><br>
            <input type="number" id="salario_hora" name="salario_hora" required><br>
        </div>

        <div class="form-group">
            <label for="horas_trabalho"><i class="bi bi-alarm"></i> Quantas horas você trabalha por mes?:</label><br>
            <input type="number" id="horas_trabalho" name="horas_trabalho" required><br>
        </div>

        <div class="form-group">
            <label for="file"><i class="bi bi-ui-checks-grid"></i> Envie teu curriculo:</label><br>
            <input type="file" id="arquivo" name="arquivo" required><br><br>
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

            if(!is_dir($pasta_destino)){
            mkdir($pasta_destino, 0755, true);
            }elseif(!is_writable($pasta_destino)){
                echo "<script>alert('Pasta de destino não é gravável.');</script>";
                exit;
            }else{
                echo "<script>alert('Pasta de destino já existe.');</script>";
            }

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

        header("Location: tabela_func.php");
    }else{
        //echo "<script>alert('Método não permitido, Volte e refaça o formulario');</script>";
    }
        ?>

    
</body>
</html>