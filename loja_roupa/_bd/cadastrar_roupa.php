
<?php
// Configuração do banco de dados (ajuste se necessário)
$servername = "localhost";
$username = "root";
$password = "";
$database = "banco01";

// Conecta ao banco
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}else{
    echo"Conectado com sucesso";
}

// Pasta de destino para imagens
$pasta_destino = "_img/";

// Cria a pasta se não existir
if (!is_dir($pasta_destino)) {
    mkdir($pasta_destino, 0755, true);
}

// Recebe dados do formulário
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Dados comuns
    $nome = $_POST["nome"];
    $cor = $_POST["cor"];
    $precoTotal = $_POST["precoTotal"];

    // Camiseta
    $descricaoCamiseta = $_POST["descricao"] ?? "";
    $subtipoCamiseta = $_POST["subtipo"] ?? "";
    $tamanhoCamiseta = $_POST["tamanho"] ?? "";
    $precoCamiseta = $_POST["precoCamiseta"] ?? "0";

    // Calça
    $descricaoCalca = $_POST["descricao"] ?? "";
    $subtipoCalca = $_POST["subtipo"] ?? "";
    $tamanhoCalca = $_POST["tamanho"] ?? "";
    $precoCalca = $_POST["precoCalca"] ?? "0";

    // Calçado
    $descricaoCalcado = $_POST["descricaoCalcado"] ?? "";
    $subtipoCalcado = $_POST["subtipoCalcado"] ?? "";
    $tamanhoCalcado = $_POST["tamanhoCalcado"] ?? "";
    $precoCalcado = $_POST["precoCalcado"] ?? "0";

    // Short
    $descricaoShort = $_POST["descricaoShort"] ?? "";
    $subtipoShort = $_POST["subtipoShort"] ?? "";
    $tamanhoShort = $_POST["tamanhoShort"] ?? "";
    $precoShort = $_POST["precoShort"] ?? "0";

    // Upload da imagem
    $imagem_nome = "";
    if (isset($_FILES["arquivo"]) && $_FILES["arquivo"]["error"] === UPLOAD_ERR_OK) {
        $arquivo = $_FILES["arquivo"];
        $nome_temp = $arquivo["tmp_name"];
        $imagem_nome = $pasta_destino . basename($arquivo["name"]);
        if (!move_uploaded_file($nome_temp, $imagem_nome)) {
            $imagem_nome = "";
            echo "<script>alert('Erro ao salvar a imagem.');</script>";
        }
    }

    // Insere no banco (ajuste a tabela conforme sua estrutura)
    $sql = "INSERT INTO roupas (
        nome, cor, preco_total,
        descricao_camiseta, subtipo_camiseta, tamanho_camiseta, preco_camiseta,
        descricao_calca, subtipo_calca, tamanho_calca, preco_calca,
        descricao_calcado, subtipo_calcado, tamanho_calcado, preco_calcado,
        descricao_short, subtipo_short, tamanho_short, preco_short,
        imagem
    ) VALUES (
        '$nome', '$cor', '$precoTotal',
        '$descricaoCamiseta', '$subtipoCamiseta', '$tamanhoCamiseta', '$precoCamiseta',
        '$descricaoCalca', '$subtipoCalca', '$tamanhoCalca', '$precoCalca',
        '$descricaoCalcado', '$subtipoCalcado', '$tamanhoCalcado', '$precoCalcado',
        '$descricaoShort', '$subtipoShort', '$tamanhoShort', '$precoShort',
        '$imagem_nome'
    )";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        echo "<script>alert('Roupa cadastrada com sucesso!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar roupa!');</script>";
    }
}

mysqli_close($conn);
?>