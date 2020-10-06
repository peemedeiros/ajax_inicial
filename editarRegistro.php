<?php

require_once('conn.php');
$conn = conexaoMysql();

$id = $_POST['id'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(isset($id)){
    $sql = "UPDATE tabela_teste SET nome = '$nome', idade = $idade WHERE id = $id";

    if(!mysqli_query($conn, $sql))
        echo "ERRO";
    else
        echo "DONE";
}

?>