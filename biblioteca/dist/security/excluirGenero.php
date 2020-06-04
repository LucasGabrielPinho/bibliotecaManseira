<?php 

$genCodigo  	= $_GET['genCodigo'];
$genNome  		= $_GET['genNome'];

include "access.php";
echo $sql = "DELETE FROM generos WHERE genCodigo = '$genCodigo' AND genNome = '$genNome'";

mysqli_query($conexao, $sql);


header("Location: ../genero.php");


?>