<?php 


$genCodigo  	= $_GET['genCodigo'];
$genNome  		= $_POST['cGenero'];

include "access.php";
echo $sql = "update generos set genNome = '$genNome' where genCodigo = $genCodigo";



mysqli_query($conexao, $sql);


header("Location: ../genero.php");


?>