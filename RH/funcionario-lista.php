<?php
    include ("cabecalho.php");
    include ("conexao.php");
    include ("funcionario-util.php");

    $listaDeFuncionarios = listaFuncionario($conexao);
?>

    <table class="table table-stripped">
        <?php 
            foreach($listaDeFuncionarios as $funcionario){
        ?>
        <tr>
                <td> <?= $funcionario["id"]; ?> </td>
                <td> <?= $funcionario["nome"]; ?> </td>
                <td> <?= $funcionario["salario"]; ?> </td>
                <td> <?= $funcionario["cargo"]; ?> </td>
                <td> <a href="altera-funcionario-formulario.php?id=<?= $funcionario["id"]; ?>" class="btn btn-primary" > Alterar </a> </td>
                <td> <a href="remove-funcionario.php?id=<?= $funcionario["id"]; ?>" class="btn btn-danger" > Remover </a> </td>  
                <td> <a href="paga-funcionario.php?id=<?= $funcionario["id"]; ?>&salario=<?= $funcionario["salario"]; ?>" class="btn btn-success" > Pagar </a> </td>  
            </tr>
        <?php
            }
        ?>      
        <tr><td><td><td><td></td></td></td></tr>

    </table>
<?php include ("rodape.php");?>