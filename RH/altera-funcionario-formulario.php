<?php 
    include ("cabecalho.php");
    include ("funcionario-util.php");
    include ("conexao.php");
    
    $id = $_GET["id"];
    
    $funcionario = buscaFuncionario($conexao,$id);
    

?>
    <h1>Alteração de Funcionários</h1>
    <form action="altera-funcionario.php" method ="get">
        <input class="hidden" type="text" name="id" value="<?= $funcionario["id"];?>"
        <table class="table table-striped">
            <tr>
                <td><b> Nome: </b> </td>
                <td> 
                    <input type="text" name ="nome" value="<?= $funcionario["nome"];?>" required>
                </td>
            </tr>
              <tr>
                <td><b> Salário: </b> </td>
                <td> 
                    <input type="number" name ="salario" value="<?= $funcionario["salario"];?>" required>
                </td>
            </tr>
            <tr>
                <td><b> Cargo: </b> </td>
                <td> 
                    <input type="text" name ="cargo" value="<?= $funcionario["cargo"];?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type= "submit" value = "Alterar">
                </td>
                <td></td>
            </tr>
            <tr><td><td><td><td><td></td></td></td></td></td></tr>
        </table>
    </form>
             
<?php include ("rodape.php");?>