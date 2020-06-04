<?php 


$codigo  	= $_GET['amiCodigo'];
$nome  		= $_POST['cNome'];
$telefone  	= $_POST['cTelefone'];
$email  	= $_POST['cEmail'];

include "access.php";
$sql = "update amigos set amiNome = '$nome', amiEmail = '$email', amiTelefone = '$telefone' where amiCodigo = $codigo";



mysqli_query($conexao, $sql);


header("Location: ../amigos.php");


?>