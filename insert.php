<?php
require_once('conn.php');
$conn = conexaoMysql();

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(isset($nome)){

    $sql = "INSERT INTO tabela_teste (nome, idade) 
            VALUES ('$nome', $idade)";
    
    if(!mysqli_query($conn, $sql))
        echo "ERRO";
    else
        echo "DONE";

}

?>