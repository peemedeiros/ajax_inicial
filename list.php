<?php

require_once('conn.php');
$conn = conexaoMysql();

$sql = "SELECT * FROM tabela_teste";

if($res = mysqli_query($conn, $sql)){
    
    while($row = mysqli_fetch_array($res)){
        
        echo("
            <tr>
                <td>".$row['nome']."</td>
                <td>".$row['idade']."</td>
                <td>
                    <button type='button' onclick='excluir(".$row['id'].")'>delete</button>
                    <button type='button' id='editar' onclick='edit(".$row['id'].")'>Editar</button>
                </td>
            </tr>
        ");

    }

}else
    echo "ERROR";


?>