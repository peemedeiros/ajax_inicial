<?php
    require_once('conn.php');
    $conn = conexaoMysql();

    $id = $_POST['id'];

    if(isset($id)){
        $sql = "DELETE FROM tabela_teste WHERE id = $id";

        if(!mysqli_query($conn, $sql))
            echo "ERRO";
        else
            echo "DONE";
    }
?>