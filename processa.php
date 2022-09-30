<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO orcamento (nome, email, telefone, texto, created) VALUES ('$nome', '$email', '$telefone', '$texto', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Seus dados foram enviados com sucesso / dentro de 24horas voce recebera um retorno</p>";
	header("Location: orcamento.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Seus dados não foi enviados com sucesso</p>";
	header("Location: orcamento.php");
}
