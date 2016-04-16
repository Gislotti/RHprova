<?php 
    include ("cabecalho.php");
    include ("funcionario-util.php");
    include ("conexao.php");
    
    $id= $_GET["id"];
    $nome= $_GET["nome"];
    $salario= $_GET["salario"];
    $cargo= $_GET["cargo"];
    
    $funciona = alteraFuncionario($conexao,$id,$nome,$salario,$cargo);    
        

    if ($funciona){
    ?>
    
        <p class="alert-success"> O funcionário de ID: <?= $id; ?> foi alterado para <b> <?= $nome; ?> </b> </p>
    
    <?php
        
        } else {    
       
        $mensagemDeErro = mysqli_error($conexao)
    ?>
        <p class="alert-danger"> DEU RUIM, FAZ DE NOVO!!!<br> <?= mensagemDeErro; ?> </p>
    <?php 
        }
    ?>
            

<?php include ("rodape.php");?>