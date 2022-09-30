
<?php
session_start();
if(!empty($_SESSION['id'])){
	echo "Olá ".$_SESSION['nome'].", Bem vindo <br>";
	echo "<a href='login.php'>Sair</a>";
}else{
	$_SESSION['msg'] = "Área restrita";
	header("Location: index.php");	
}
?>
<html>
    <head>
        <title>Tabela de Preços </title> 
    </head>


    <link rel="stylesheet" href="estilos/css2.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="estilos/footer-white.css">
    <link rel="stylesheet" type="text/css" href="estilos/menu2.css">

    <body background="IMG/banner45.jpg" width="100%">

    <div class="size">
        <ul class="menuteccell">
            <img src="IMG/teccell1.jpg" width="190PX" height="150PX">
          <li class="atual"><a href="index.php" >Home</a></li>
          <li><a href="https://www.manutencaodecelular.com.br/aulasgratis?ref=E43932231E" >Cursos</a></li>
          <li><a href="sobrenos.php" data-hover="">Sobre nós</a></li>
          <li><a href="tabeladepreco.php">Tabela de Preços</a></li>
          <li><a href="orcamento.php" >Orçamento</a></li>
          <li><a href="conexao/cadastrar2.php" >Cadastro</a></li>
          <li><a href="login.php" >Login</a></li>
        </ul>
    </div>


    
<br><br><br><br><br><br><br><br>


<center><h1><b>CONFIRA OS PREÇOS DOS NOSSOS SERVIÇOS</h1></b></center>

<div class="holder">

  <div class="imagem" data-title="">
    <img src="IMG/samsung.jpg" alt="">
  </div>

  <div class="imagem" data-title="">
    <img src="IMG/motorola.jpg" alt="">
  </div>


</div>
<div class="holder">

  <div class="imagem" data-title="">
    <img src="IMG/sony.jpg" alt="">
  </div>

  <div class="imagem" data-title="">
    <img src="IMG/lg.jpg" alt="">
  </div>


</div>
<style>
.holder {
    display: flex;
    margin-left:55px;
    width:90%;
    padding-left:85px;
    
}
.imagem {
  width: 100%;
  margin: 10px;
  position: relative;
}
.imagem::after {
  content: attr(data-title); /* estilo que coloco a legenda no lugar */
  position: absolute;
  width: 100%;
  bottom: -20px;
  left: 0;
}
</style>


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

<style>

*{
    margin:0;
    padding:0;
}



</style>


    </body>
</html>