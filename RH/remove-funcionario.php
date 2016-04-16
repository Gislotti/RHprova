<?php 
    include ("cabecalho.php");
    include ("conexao.php");
    include ("funcionario-util.php");

    $id = $_GET["id"];
    
    removeFuncionario($conexao,$id);

?>
    <p class="alert-success"> Funcionário com a ID <?= $id;?> removido com sucesso!</p>

  

<?php   include ("rodape.php"); ?>