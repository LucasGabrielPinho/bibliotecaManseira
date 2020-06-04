<?php 

$codigo  	= $_GET['amiCodigo'];
$nome  		= $_GET['amiNome'];
$telefone  	= $_GET['amiTelefone'];
$email  	= $_GET['amiEmail'];

include "access.php";
echo $sql = "DELETE FROM amigos WHERE amiNome = '$nome' AND amiEmail = '$email' AND amiTelefone = '$telefone' AND amiCodigo = $codigo";

mysqli_query($conexao, $sql);


header("Location: ../amigos.php");


?>