<?php
    require_once('conn.php');
    $conn = conexaoMysql();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ajax Teste</title>
    </head>
    <body>
        <form action="">
            <label for="">Nome</label>
            <input type="text"  id="nome">

            <label for="">Idade</label>
            <input type="text"  id="idade">
            
            <button id="botao_enviar" type="button" onclick="insert()">Enviar</button>
        </form>

        <table>
            <thead>
                <tr>
                    <td>nome</td>
                    <td>idade</td>
                    <td></td>
                </tr>
            </thead>

            <tbody id="tbody">

                <?php

                    $sql = "SELECT * FROM tabela_teste";
                    $res = mysqli_query($conn,$sql);

                    while($row = mysqli_fetch_array($res)){
                ?>

                <tr>
                    <td><?=$row['nome']?></td>
                    <td><?=$row['idade']?></td>
                    <td>
                        <button type="button" onclick="excluir(<?=$row['id']?>)">delete</button>
                        <button type="button" id="editar" onclick="edit(<?=$row['id']?>)">Editar</button>
                    </td>
                </tr>

                <?php
                    }
                ?>

            </tbody>
        </table>

        <script src="jquery.js"></script>
        <script src="ajax_reqs.js"></script>
        
    </body>
</html>