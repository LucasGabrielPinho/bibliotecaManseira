<?php 


$codigo  	= $_GET['livCodigo'];
$titulo  	= $_POST['cTitulo'];
$autor  	= $_POST['cAutor'];
$paginas  	= $_POST['cPaginas'];
$genero  	= $_POST['cGenero'];

include "access.php";
$sql = "update livros set livTitulo = '$titulo', livAutor = '$autor', livPaginas = $paginas, genCodigo = $genero where livCodigo = $codigo";
mysqli_query($conexao, $sql);


header("Location: ../livros.php");


?>