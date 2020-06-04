<?php 

$codigo  	= $_GET['livCodigo'];
$titulo  	= $_GET['livTitulo'];
$autor  	= $_GET['livAutor'];
$genero  	= $_GET['genCodigo'];
$paginas  	= $_GET['livPaginas'];

include "access.php";
$sql = "DELETE FROM livros WHERE livTitulo = '$titulo' AND livAutor = '$autor' AND livPaginas = $paginas AND genCodigo = $genero AND livCodigo = $codigo";

mysqli_query($conexao, $sql);


header("Location: ../livros.php");


?>