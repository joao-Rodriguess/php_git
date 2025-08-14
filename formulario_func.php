<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/formulario_func.css">
    <title>Document</title>
</head>
<body>

    <form action="formulario_func.php" method="POST" enctype="multipart/form-data">
        <div class="titulo">
            <h3><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-person-rolodex" viewBox="0 0 16 16">
                    <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                    <path d="M1 1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h.5a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h.5a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H6.707L6 1.293A1 1 0 0 0 5.293 1zm0 1h4.293L6 2.707A1 1 0 0 0 6.707 3H15v10h-.085a1.5 1.5 0 0 0-2.4-.63C11.885 11.223 10.554 10 8 10c-2.555 0-3.886 1.224-4.514 2.37a1.5 1.5 0 0 0-2.4.63H1z" />
                </svg> Cadastro de Funcionários</h3>
</div>
        <div class="form-group">
            <label for="nome"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-vcard" viewBox="0 0 16 16">
  <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4m4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5M9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8m1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5"/>
  <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96q.04-.245.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 1 1 12z"/>
</svg> Nome:</label><br>
            <input type="text" id="nome" name="nome" required><br>
        </div>

        <div class="form-group">
            <label for="idade">Idade:</label><br>
            <input type="number" id="idade" name="idade" required><br>
        </div>

        <div class="form-group">
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>
        </div>

        <div class="form-group">
            <label for="telefone">Telefone:</label><br>
            <input type="tel" id="telefone" name="telefone" required><br>
        </div>

        <div class="form-group">
            <label for="salario_hora">Quanto você ganha por hora?:</label><br>
            <input type="number" id="salario_hora" name="salario_hora" required><br>
        </div>

        <div class="form-group">
            <label for="horas_trabalho">Quantas horas você trabalha por mes?:</label><br>
            <input type="number" id="horas_trabalho" name="horas_trabalho" required><br>
        </div>

        <div class="form-group">
            <label for="file">Envie teu curriculo:</label><br>
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
        echo "<script>alert('Método não permitido, Volte e refaça o formulario');</script>";
    }
        ?>

    
</body>
</html>