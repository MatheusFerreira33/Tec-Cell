<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
	<meta charset="utf-8">
		<link rel="stylesheet" href="estilos/css2.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="estilos/footer-white.css">
	<link rel="stylesheet" type="text/css" href="estilos/menu2.css">
	
		<link rel="stylesheet" href="entrar22.css">
		<title>Login</title>
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
		  <li><a href="cadastrar2.php" >Cadastro</a></li>
		  <li><a href="login.php" >Login</a></li>

		<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
			if(isset($_SESSION['msgcad'])){
				echo $_SESSION['msgcad'];
				unset($_SESSION['msgcad']);
			}
		?>
<br><br><br><br>

		<form method="POST" action="valida.php">
			<label>Usuário</label>
			<input type="text" name="usuario" placeholder="Digite o seu usuário" required><br><br>
			
			<label>Senha</label>
			<input type="password" name="senha" placeholder="Digite a sua senha" required><br><br>
			
			<input type="submit" name="btnLogin" value="Acessar">
			
			<h4>Você ainda não possui uma conta?</h4>
			<a href="cadastrar2.php">Crie grátis</a>
		
        </form>



	</body>
</html>