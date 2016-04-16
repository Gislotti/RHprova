<?php
	include ("cabecalho.php");
	include ("funcionario-util.php");
	include ("conexao.php");

	$nome = $_GET["nome"];
	$salario = $_GET["salario"];
	$cargo = $_GET["cargo"];
		
	$funciona = adicionaFuncionario($conexao,$nome,$salario,$cargo);

	if ($funciona){
?>
		<p class="alert-success"> O funcionário <b> <?= $nome; ?> foi adicionado a lista de funcionários com sucesso!</p>
	<?php
                   $mensagemDeErro = mysqli_error ($conexao);
		} else {
	?>
        <p class="alert-danger"> O funcionário <b> <?= $nome; ?></b> não foi adicionado a lista de funcionários <br> <?= mensagemDeErro; ?> </p>
        <?php   
            }
        ?>


<?php include ("rodape.php");?>	