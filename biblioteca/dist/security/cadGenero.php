<?php
    include "access.php";

    $cGenero       = $_POST['cGenero'];

    echo $sql = "INSERT INTO `generos` (`genNome`) VALUES ('$cGenero')";
    mysqli_query($conexao, $sql);

    header("Location: ../genero.php");
    
?>