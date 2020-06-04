<?php 

include "access.php";

$sql = "select * from emprestimos e, livros l, amigos a
        where e.livCodigo = l.livCodigo and 
        e.amiCodigo = a.amiCodigo and 
        e.empDataDev = ''
    order by e.empDataEmp
    ";
$resultado = mysqli_query($conexao, $sql);

$listaEmprestimos = array();
while ($emprestimo = mysqli_fetch_assoc($resultado)) {
    $listaEmprestimos[] = $emprestimo;
}

foreach ($listaEmprestimos as $emprestimo) { ?>

	<tr>
        <td><?php echo $emprestimo['empDataEmp']; ?></td>
        <td><?php echo $emprestimo['livTitulo']; ?></td>
        <td><?php echo $emprestimo['amiNome']; ?></td>
        <?php $link = "security/devolverLivro.php?empDataEmp=".$emprestimo['empDataEmp'].
                                      "&livCodigo=".$emprestimo['livCodigo'].
                                      "&amiCodigo=".$emprestimo['amiCodigo']?>

        <form action=" <?php echo $link ?>"method="POST">
        <td><input class="form-control py-4" id="inputFirstName" type="date" name="cDataEmp" id="cDataEmp" required=""></td>
        <td><button type="submit" class="btn btn-warning btn-block">Devolver</button></td>
        </form>
    </tr>
    
<?php }?>

