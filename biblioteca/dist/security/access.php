<?php
    $dbServidor = "localhost";
    $dbUsuario = "root";
    $dbSenha = "";
    $dbBanco = "biblioteca";
    
    $conexao = mysqli_connect ($dbServidor, $dbUsuario, $dbSenha, $dbBanco);

    if (mysqli_connect_errno($conexao))
    {
        echo "<h1>Problema ao conectar com o banco! Verifique. </h1>";
        die();
    }
?>