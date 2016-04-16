<?php
    include ("cabecalho.php");
    include ("conexao.php");
    include ("funcionario-util.php");
    include ("pagamento-util.php");

   
    $listaDePagamentos = listaPagamento($conexao);
?>

    <table class="table table-stripped">
        <?php 
            foreach($listaDePagamentos as $pagamento){
                $id= $pagamento["idFuncionario"];
                $funcionario=buscaFuncionario($conexao,$id);
        ?>
            <tr>
                
                <td> <?= $pagamento["idFuncionario"]; ?> </td>
                <td> <?= $pagamento["valor"]; ?> </td>
                <td> <?= $funcionario["nome"]; ?> </td>  
                                
            
        <?php
            }
        ?>   
            </tr>
        <tr><td><td><td></td></td></td></tr>

    </table>
<?php include ("rodape.php");?>