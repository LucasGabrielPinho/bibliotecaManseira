<?php

$usuario    = $_POST['usuario'];
$password   = $_POST['password'];
$vUsuario   = "select * from usuarios where usuLogin = '$usuario'";

include "access.php";

$resultado = mysqli_query($conexao,$vUsuario); 

if (mysqli_num_rows($resultado)>0) { 

    $arrayUsuario = array();

    while($row=mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
        array_push($arrayUsuario,$row);
    }

    foreach ($arrayUsuario as $usuario) {
        $usu_id = $usuario['usuCodigo'];

        $vSenha   = "select * from usuarios where usuCodigo = '$usu_id' AND usuSenha = '$password'";

		$resultado = mysqli_query($conexao,$vSenha); 

		if (mysqli_num_rows($resultado)>0) {

            $arrayProduto = array();

            while($row=mysqli_fetch_array($resultado)) {
                array_push($arrayProduto,$row);
            }

            foreach ($arrayProduto as $usuario) {
                session_start();
                $_SESSION['usuCodigo'] = $usuario['usuCodigo'];
                $_SESSION['usuNome']   = $usuario['usuNome'];
                $_SESSION['usuEmail']   = $usuario['usuEmail'];
                $_SESSION['usuLogin']   = $usuario['usuLogin'];
                $_SESSION['usuSenha']   = $usuario['usuSenha'];
            }

            $check = true;
			
		}else{
			$msg = "Senha incorreta!";
			header("Location: ../login.php?msg=$msg");
		}
    }

}else {
    $msg = "Usuário incorreto!";
}

if ($check) {
    header("Location: ../index.php");
}else {
    header("Location: ../login.php?msg=$msg");
}
