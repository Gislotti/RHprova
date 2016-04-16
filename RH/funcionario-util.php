<?php
	include("conexao.php");
	
	function adicionaFuncionario($conexao,$nome,$salario,$cargo){
		$comando = "insert into funcionarios(nome,salario,cargo) values ('{$nome}',{$salario},'{$cargo}')";
		$resultado = mysqli_query($conexao,$comando);
		return $resultado;
	}
    function listaFuncionario($conexao) {
        $comando = "select * from funcionarios";
        $resultado = mysqli_query($conexao,$comando);
        return $resultado;
    }
    
    function removeFuncionario($conexao,$id){
       $comando ="delete from funcionarios where id ={$id}";
        $resultado = mysqli_query($conexao,$comando);
       return $resultado;
    }

     function buscaFuncionario($conexao,$id){
        $comando ="select * from funcionarios where id ={$id}";
        $resultado = mysqli_query($conexao,$comando);
        $produto = mysqli_fetch_assoc($resultado);
        return $produto;        
    }

    function alteraFuncionario($conexao,$id,$nome,$salario,$cargo){
        $comando ="update funcionarios set nome='{$nome}',salario={$salario},cargo='{$cargo}' where id={$id}";
        $resultado = mysqli_query($conexao,$comando);
        return $resultado;    
    }
?>