<?php
    include "access.php";

    $nome       = $_POST['cNome'];
    $email      = $_POST['cEmail'];
    $telefone   = $_POST['cTelefone'];

    $sql = "insert into amigos (amiNome, amiEmail, amiTelefone) values ('$nome', '$email', $telefone)";
    mysqli_query($conexao, $sql);

    header("Location: ../amigos.php");
    
?>