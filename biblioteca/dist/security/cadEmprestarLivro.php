<?php
    include "access.php";

    $dataEmp = $_POST['cDataEmp'];
    $codLiv  = $_POST['cCodLivro'];
    $codAmi  = $_POST['cCodAmigo'];
    
    $sql = "insert into emprestimos (empDataEmp, livCodigo, amiCodigo) values ('$dataEmp', $codLiv, $codAmi)";
    mysqli_query($conexao, $sql);
 
 	header("Location: ../emprestimo.php");
?>
