<?php

require_once('conn.php');
$conn = conexaoMysql();

$id = $_POST['id'];
$nome = (String) "";
$idade = (int) 0;

$json = array();

if(isset($id)){

    $sql = "SELECT * FROM tabela_teste WHERE id = $id";
    
    if($res = mysqli_query($conn, $sql)){

        $row = mysqli_fetch_array($res);

        $json = [
            'id' => $row['id'],
            'nome' => $row['nome'],
            'idade' => $row['idade']
        ];

        echo(json_encode($json));
    }else
        echo "ERRO SQL";

}

?>