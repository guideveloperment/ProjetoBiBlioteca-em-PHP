<?php

session_start();
include_once  ("conexao.php");
$result_usuario = "SELECT * FROM  usuario WHERE id = '1,2,3,4,5,6'";
$result_usuario = mysqli_query ($conn, $result_usuario);


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf8_decode">
	<title>BIBLIOTECA - editar</title>
</head>
<body>
		<a href="index.php">Cadastrar</a><br>
		<a href="listar.php">Listar</a><br>
		<h1>Editar usuario</h1>
		<?php
		if (isset($_SESSION['msg'])) {
			echo $_SESSION ['msg'];
			unset($_SESSION['msg']);
		
		}
		?>
		<form method="POST" action="proc_edit_usuario.php">
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome completo"><br><br>
			
			<label>Data de nascimento: </label>
			<input type="datalist" name="Data" placeholder="Digite seu nascimento"><br><br>
							
			<label>Grau de escolaridade: </label>
			<input type="text" name="Graudeescolaridade" placeholder="Digite sua escolaridade"><br><br>
			
						
			<label>Endereço: </label>
			<input type="text" name="Endereço" placeholder="Digite seu endereço"><br><br>
					
			
			<label>CEP: </label>
			<input type="number_format" name="CEP" placeholder="Digite o número de cep"><br><br>
			
			<label>Cidade: </label>
			<input type="text" name="Cidade" placeholder="Digite sua cidade"><br><br>
			
			<label>Estado: </label>
			<input type="text" name="Estado" placeholder="Digite o seu estado"><br><br>
			
			<label>Telefone: </label>
			<input type="number_format" name="Telefone" placeholder="Digite o seu telefone"><br><br>
			
		    <label>Gênero: </label>
			<input type="text" name="Gênero" placeholder="Digite o seu gênero"><br><br>
			
			<label>E-mail: </label>
			<input type="email" name="email" placeholder="Digite o seu email"><br><br>
		
			
			<input type="submit" value="Editar">
			</form>
		
