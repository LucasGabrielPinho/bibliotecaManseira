<?php
    include "access.php";

    $titulo = $_POST['cTitulo'];
    $autor = $_POST['cAutor'];
    $paginas = $_POST['cPaginas'];
    $genero = $_POST['cGenero'];

	$sql = "insert into livros (livTitulo, livAutor, livPaginas, genCodigo) values ('$titulo', '$autor', $paginas, $genero)";
    mysqli_query($conexao, $sql);

    header("Location: ../livros.php");
?>