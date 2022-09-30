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
<title> Sobre Nos </title>
<link rel="stylesheet" href="estilos/css2.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="estilos/footer-white.css">
    <link rel="stylesheet" type="text/css" href="estilos/menu2.css">
<link rel="stylesheet" type="text/css" href="estilos/sobrenos.css">







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
    </div><br><br>

<BR>

    <img src="IMG/servicos.png" width="100%" height="460PX">

<div class="cinza2">
<b><h1>Quem Somos:</h1></b><br>

&nbsp; &nbsp;  A Tec Cell e uma Assistencia Tecnica de Celulares especializada em 
&nbsp;&nbsp; conserto de celulares, Fundada em 2019 pelo empreendedor Marcos Pereira, que 
&nbsp;&nbsp;previu o aumento nas vendas de celulares e como consequencia mais pessoas usando. O nosso 
&nbsp;&nbsp;diferencial no ramo de conserto e a vendas de acessórios de celulares e o nosso sistema de 
&nbsp;&nbsp;suporte ao cliente personalizado.

  Todos os nossos técnicos são especializados em conserto de celulares.


</div> 


<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><h3>Localização</h3></b>
&nbsp;&nbsp;&nbsp;&nbsp;<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.7772783271885!2d-46.508928885387135!3d-23.432411362727144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce8ad0aac775c1%3A0xfff93331ac33865d!2sAv.%20Nova%20Tabo%C3%A3o%20-%20Jardim%20Nova%20Taboao%2C%20Guarulhos%20-%20SP%2C%2007141-040!5e0!3m2!1spt-BR!2sbr!4v1606575564531!5m2!1spt-BR!2sbr" width="40%" height="1250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" >mvkdmkdmck</iframe>

  <div class="contato">
<p>
<b><h3>Contato</h3></b><br>

<b>Email: marcosps04@hotmail.com.br</b><p><p>

<b>Telefone: (11) 95854-1061</b><p>




  </div>



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





