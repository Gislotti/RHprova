<?php include ("cabecalho.php");?>
	
    <form action="adiciona-funcionario.php" method="get">
        <table class="table table-stripped">
            <tr>
                <td><b> Nome: </b> </td>
                <td> 
                    <input type="text" name ="nome" required>
                </td>
            </tr>
            <tr>
                <td><b> Salario: </b> </td>
                <td> 
                    <input type= "number" name ="salario" required>
                </td>
            </tr>
            <tr>
                <td><b> Cargo: </b> </td>
                <td> 
                    <input type= "text" name ="cargo" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type= "submit" value = "Cadastrar">
                </td>
                <td></td>
            </tr> 
            <tr><td><td></td></td></tr>
        </table>
   </form>
<?php include ("rodape.php");?>  
					