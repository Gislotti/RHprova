<?php
	include ("cabecalho.php");
	include ("pagamento-util.php");
 	include ("conexao.php");

	$idFuncionario = $_GET["id"];
	$valor = $_GET["salario"];
	
		
	$funciona = pagaFuncionario($conexao,$idFuncionario,$valor);

	if ($funciona){
?>
		<p class="alert-success"> O funcionário de ID <b> <?= $idFuncionario; ?> recebeu o pagamento de <?= $valor; ?> </p>
	<?php
                   
		} else {
	?>
        <p class="alert-danger"> Deu Erro! Faça de Novo!!!<br>  </p>
        <?php   
            }
        ?>


<?php include ("rodape.php");?>