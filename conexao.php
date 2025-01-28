<?php

// Alterar de acordo com o numero da porta
// verificar conexão com XAMP
$servername = "localhost:3309";
$username = "root";
$password = "";
$dbname = "login";

try {
    // conexao com dados de banco
    // conferir se as informações estão corretas
    $conn = new mysqli ($servername, $username, $password, $dbname);

    // verifica se houve algum erro na conexao
    if ($conn->connect_error){
        throw new Exception("Falha na conexão: ". $conn->connect_error);
    }


} catch (Exception $e){
    // exibe uma mensagem de erro amigável
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}

?>