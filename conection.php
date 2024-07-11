<?php
    $host = 'localhost';
    $user = 'root';
    $senha = '';
    $database = 'arquivos';

    $conection = new mysqli($host, $user, $senha, $database);

    if($conection -> connect_error){
        die("Falha na conexão com banco de dados" . $conection -> connect_error);
    }
    

?>