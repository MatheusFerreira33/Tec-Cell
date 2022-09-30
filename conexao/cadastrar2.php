<?php
session_start();
ob_start();
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if($btnCadUsuario){
	include_once 'conexao2.php';
	$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	//var_dump($dados);
	$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
	
	$result_usuario = "INSERT INTO usuarios (nome, email, usuario, endereco, senha) VALUES (
					'" .$dados['nome']. "',
					'" .$dados['email']. "',
					'" .$dados['usuario']. "',
					'" .$dados['endereco']. "',
					'" .$dados['senha']. "'
					)";
	$resultado_usario = mysqli_query($conn, $result_usuario);
	if(mysqli_insert_id($conn)){
		$_SESSION['msgcad'] = "Usuário cadastrado com sucesso";
		header("Location: login.php");
	}else{
		$_SESSION['msg'] = "Erro ao cadastrar o usuário";
	}
}
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../estilos/css2.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="../estilos/footer-white.css">
    <link rel="stylesheet" type="text/css" href="../estilos/menu2.css">
		<link rel="stylesheet" href="cadastrar.css">
		<title>Cadastrar</title>
	</head>
	<body>

	<div class="size">
        <ul class="menuteccell">
            <img src="IMG/teccell1.jpg" width="190PX" height="150PX">
          <li class="atual"><a href="../index.php" >Home</a></li>
          <li><a href="https://www.manutencaodecelular.com.br/aulasgratis?ref=E43932231E" >Cursos</a></li>
          <li><a href="../sobrenos.php" data-hover="">Sobre nós</a></li>
          <li><a href="../tabeladepreco.php">Tabela de Preços</a></li>
          <li><a href="../orcamento.php" >Orçamento</a></li>
		  <li><a href="conexao/cadastrar2.php" >Cadastro</a></li>
		  <li><a href="login.php" >Login</a></li>
        </ul>
    </div>
	
		<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>
<br><br><br><br><br><br>
<img src="../IMG/fundo.jpg" width="100%" height="750px">

		<form method="POST" action="">
			<label>Nome</label>
			<input type="text" name="nome" placeholder="Digite o nome e o sobrenome"required><br><br>
			
			<label>E-mail</label>
			<input type="text" name="email" placeholder="Digite o seu e-mail"required><br><br>
			
			<label>Usuário</label>
			<input type="text" name="usuario" placeholder="Digite o usuário"required><br><br>

			<label>Endereço</label>
			<input type="text" name="endereco" placeholder="Digite o endereco"required><br><br>
			
			<label>Senha</label>
			<input type="password" name="senha" placeholder="Digite a senha"required><br><br>
			
			<input type="submit" name="btnCadUsuario" value="Cadastrar"><br><br>
			
			Lembrou? <a href="login.php">Clique aqui</a> para logar
		
		</form>


		<div class="content">
    </div>
    <footer id="myFooter">
        <div class="container">
            <ul>
                <li><a href="https://programadorviking.com.br/">Informações da Empresa</a></li>
                <li><a href="https://programadorviking.com.br/">Contato</a></li>
                
                <li><a href="https://bit.ly/front-end-curso-completo-promocao-01">Cursos</a></li>
            </ul>
            
        </div>


        <div class="footer-social">
            <a href="" class="social-icons"><i class="fa fa-facebook"></i></a>
            <a href="" class="social-icons"><i class="fa fa-instagram"></i></a>
            <a href="" class="social-icons"><i class="fa fa-youtube"></i></a>
            <a href="" class="social-icons"><i class="fa fa-twitter"></i></a>
        </div>
    </footer>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
</html>