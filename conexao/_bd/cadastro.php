<?php 
    $servername = "localhost";
    $database = "banco01";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die("falha na conexão:" . mysqli_connect_error());
    }

    echo"Conectado com sucesso";

     if($_SERVER["REQUEST_METHOD"] === 'POST'){
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $salario_hora = $_POST["salario_hora"];
        $horas_trabalho = $_POST["horas_trabalho"];
        $pasta_destino = "img/";
        $arquivo = $_FILES["arquivo"];

        function formataTelefone($numero){
            $formata = substr($numero, 0, 2);
            $formata_2 = substr($numero, 3, 5);
            $formata_3 = substr($numero, 4, 4);
            return "(".$formata.") " . $formata_2 . "-". $formata_3;
        }

        $telefone_ftm = formataTelefone($telefone);

        $salario_hora_fmt = 'R$' . number_format($salario_hora, 2, ',', '.');


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

        $sql = "INSERT INTO funcionarios (nome, idade, email, telefone, salario_hora, horas_trabalhada)VALUES('$nome', '$idade', '$email', '$telefone_ftm', '$salario_hora_fmt', '$horas_trabalho' )";

        $query = mysqli_query($conn, $sql);


        if($query){
            echo"<script>alert('Cadastro realizado com sucesso')</script>";
        }else{
            echo"<script>alert('DEU PROBLEMA!!!!!')</script>";
            echo $query;
        }
    }


   mysqli_close($conn);

?>