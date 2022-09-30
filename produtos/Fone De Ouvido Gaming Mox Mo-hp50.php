<?php
session_start();
ob_start();
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if($btnCadUsuario){
	include_once 'conexao_produtos/conexao2.php';
	$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	//var_dump($dados);
	
	$result_usuario = "INSERT INTO endereco (nome, email, cep, bairro) VALUES (
					'" .$dados['nome']. "',
					'" .$dados['email']. "',
					'" .$dados['cep']. "',
					'" .$dados['bairro']. "'
					)";
	$resultado_usario = mysqli_query($conn, $result_usuario);
	if(mysqli_insert_id($conn)){
		$_SESSION['msgcad'] = "Endereço cadastrado com sucesso";
		header("Location: https://mpago.la/1sfwtgY");
	}else{
		$_SESSION['msg'] = "Erro ao cadastrar o Endereço";
	}
}
?>
<html lang="pt-br">
    <head>
        <title>Tec Cell </title>
    </head>
    <link rel="stylesheet" href="../estilos/css2.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="../estilos/footer-white.css">
    <link rel="stylesheet" type="text/css" href="../estilos/menu2.css">
    <link rel="stylesheet" type="text/css" href="fonedeouvido123.css">
    <link rel="stylesheet" type="text/css" href="1.css">
    <body>



<div class="size">
  <ul class="menuteccell">
      <img src="../IMG/teccell1.jpg" width="190PX" height="150PX">
    <li class="atual"><a href="index.php" >Home</a></li>
    <li><a href="https://www.manutencaodecelular.com.br/aulasgratis?ref=E43932231E" >Cursos</a></li>
    <li><a href="sobrenos.php" data-hover="">Sobre nós</a></li>
    <li><a href="tabeladepreco.php">Tabela de Preços</a></li>
    <li><a href="produtos.php"> Nossos Produtos </a></li>
    <li><a href="orcamento.php" >Orçamento</a></li>
    <li><a href="conexao/cadastrar2.php" >Cadastro</a></li>
    <li><a href="conexao/login.php" >Login</a></li>
  </ul>
</div>
<br><br>

<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>

<div class="group">
    <div id="DivA"><img src="../IMG/555.jpeg"></div>
    <div id="DivLateral"><H3><b>Fone De Ouvido Gaming Mox Mo-hp50 Original</b></H3><p><br>
        <h4><b>Descrição:</b></h4><p>
 <font size="5">          
<b>

Com Bluetooth: Não<p>
Com microfone: Sim<p>
É gamer: Sim<p>
-Efeito luminoso
<p>
-Microfone :58qB ± 2qB<p>
-Tamanho do alto falante:50mm<p>
-Impedância:32(O)± 15%<p>
-Alcance de frequência :20hz-20khz<p>
<p>
-Sensibilidade 95±3qb<p>
-Comprimento do cabo:2.3m<p>
-Conector: 3.5mm P2 e USB</b>
</font>

<hr class="new1">
<font size="5"><b>

x1 Unidade <p><bR>

 R$ 130,00</b>
</font><br><br>

&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;


    </div>
</div>

<form method="POST" action="">
    
 <div id="direita"> <h1> Endereço de Comprança </h1></div> 
			<input type="text" id="nome" name="nome" placeholder="Digite o nome completo"required>
			
			<label></label> 
			<input type="text" name="email" placeholder="Digite o seu e-mail"required><br><br><br>
			
			<label></label>
			<input type="text" name="cep" placeholder="Digite o CEP"required>

			<label></label>
			<input type="text" name="bairro" placeholder="Digite o Bairro com o Nº"required><br><br>
			
			<input type="submit"  name="btnCadUsuario" value="COMPRAR"><br><br>
			
		
        </form>
        

<div id="DivRodape"></div>




<div class="content">
    </div>
    <footer id="myFooter">
        <div class="container">
            <ul>
                <li><a href="sobrenos.php">Informações da Empresa</a></li>
                <li><a href="sobrenos.php">Contato</a></li>
                
                <li><a href="https://www.manutencaodecelular.com.br/aulasgratis?ref=E43932231E">Cursos</a></li>
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

