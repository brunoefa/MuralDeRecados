<?php

    // Informações de conexão
    $address = "localhost";
    $user = "root";
    $password = "";
    $database = "muralderecados";
    
    //conexão com o servidor
    $connection = mysql_connect($address, $user, $password);
    
    // Caso a conexão seja reprovada, exibe na tela uma mensagem de erro
    if (!$connection) die ("<h1>Falha na conexão com o Banco de Dados!</h1>");
    
    // retorna o banco especificado
    mysql_select_db($database, $connection);

?>