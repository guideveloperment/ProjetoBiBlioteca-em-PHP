# ProjetoBiBlioteca-em-PHP
<?php

include_once("conexao.php");

$nome = filter_input (INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$Datadenascimento = $_POST['Datadenascimento'];//filter_input (INPUT_POST, 'Datadenascimento', FILTER_SANITIZE_STRING);  
$Graudeescolaridade = filter_input (INPUT_POST, 'Graudeescolaridade', FILTER_SANITIZE_STRING); 
$Endereço = filter_input (INPUT_POST, 'Endereço', FILTER_SANITIZE_STRING); 
$CEP = filter_input (INPUT_POST, 'CEP', FILTER_SANITIZE_STRING); 
$Cidade = filter_input (INPUT_POST, 'Cidade', FILTER_SANITIZE_STRING); 
$Estado = filter_input (INPUT_POST, 'Estado', FILTER_SANITIZE_STRING); 
$Telefone = filter_input (INPUT_POST, 'Telefone', FILTER_SANITIZE_STRING); 
$Gênero = filter_input (INPUT_POST, 'Gênero', FILTER_SANITIZE_STRING); 
$email = filter_input (INPUT_POST, 'email', FILTER_SANITIZE_EMAIL); 

echo "Nome: $nome<br>";
echo "Datadenascimento: $Datadenascimento<br>";
echo "Graudeescolaridade: $Graudeescolaridade<br>";
echo "Endereço: $Endereço<br>";
echo "CEP:	$CEP<br>";
echo "Cidade: $Cidade<br>";
echo "Estado: $Estado<br>";
echo "Telefone: $Telefone<br>";
echo "Gênero: $Gênero<br>";
echo "email: $email<br>";

 $result_usuario = "INSERT INTO usuario (nome, Datadenascimento, graudeescolaridade, endereço, cidade, estado, cep, telefone, gênero, email, created) VALUES ('$nome', '$Datadenascimento',
'$Graudeescolaridade', '$Endereço', '$CEP', '$Cidade', '$Estado', '$Telefone', '$Gênero', '$email', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario );
?>

<?php
$renovação_input (INPUT_POST, 'renovação', FILTER_SANITIZE_STRING);
echo "renovação: $renovação<br>";


?>

