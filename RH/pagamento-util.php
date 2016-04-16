<?php
	include("conexao.php");
	
	function pagaFuncionario($conexao,$idFuncionario,$valor){
		$comando = "insert into pagamentos(idFuncionario,valor) values ({$idFuncionario},{$valor})";
		$resultado = mysqli_query($conexao,$comando);
		return $resultado;
	}
    

    function listaPagamento($conexao){ 
    $comando = "select * from pagamentos";
    $resultado = mysqli_query($conexao,$comando);
    return $resultado;
    }
?>