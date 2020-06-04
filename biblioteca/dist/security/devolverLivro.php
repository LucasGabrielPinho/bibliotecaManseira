<?php

include "access.php";

$empDataEmp = $_GET['empDataEmp'];
$livCodigo	= $_GET['livCodigo'];
$amiCodigo	= $_GET['amiCodigo'];
$cDataEmp 	= $_POST['cDataEmp'];

$sql = "update emprestimos set empDataDev = '$cDataEmp'  where  empDataEmp = '$empDataEmp' AND livCodigo = $livCodigo AND amiCodigo = $amiCodigo";
mysqli_query($conexao, $sql);
header("Location: ../emprestimo.php");
?>