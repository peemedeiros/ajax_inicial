<?php
    date_default_timezone_set('America/Sao_Paulo');

    function conexaoMysql()
    {
        $server = "localhost";
        $user = "root";
        $password = "bcd127";
        $database = "ajax_demo";

        $connection = mysqli_connect($server, $user, $password, $database);
        mysqli_set_charset($connection, 'utf8');

        return $connection;
    }

?>