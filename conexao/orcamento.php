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
<?php
session_start();
?>
<html lang="pt-br">
    <head>
        <title>Orçamento </title>
    </head>
    <link rel="stylesheet" href="estilos/css.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="estilos/footer-white.css">
    <link rel="stylesheet" type="text/css" href="estilos/menu2.css">
    <link rel="stylesheet" type="text/css" href="estilos/ocm.css">

<body>



<div class="size">
        <ul class="menuteccell">
            <img src="IMG/teccell1.jpg" width="190PX" height="150PX">
          <li class="atual"><a href="index.php" >Home</a></li>
          <li><a href="https://www.manutencaodecelular.com.br/aulasgratis?ref=E43932231E" >Cursos</a></li>
          <li><a href="sobrenos.php" data-hover="">Sobre nós</a></li>
          <li><a href="tabeladepreco.php">Tabela de Preços</a></li>
          <li><a href="orcamento.php" >Orçamento</a></li>
          <li><a href="cadastrar2.php" >Cadastro</a></li>
          <li><a href="login.php" >Login</a></li>
        </ul>
    </div><br><br>


    <?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
        ?>
        
<br>
<img src="IMG/cc.png" height="380px">
<br>
<div class="grande">
    <form method="post" action="processa.php">

        <h1> Solicite um Orçamento </h1>

        <label for="nome"> Nome</label>
        <input type="text" name="nome"  maxlength="40">
     
        <label for="email"> Email</label>
        <input type="email" name="email" autocomplete="off" maxlength="40">

        <label for="email"> Telefone</label>
        <input type="text" name="telefone" autocomplete="off" maxlength="40">

        <label for="Texto"> Do que Precisa? </label><p>
        <textarea id="w3review" name="texto" rows="4" cols="50" value="Do que Precisa"></textarea><br>


        <input type="submit" name="enviar" value="Enviar">
        
</form>
    </div>


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.7772783271885!2d-46.508928885387135!3d-23.432411362727144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce8ad0aac775c1%3A0xfff93331ac33865d!2sAv.%20Nova%20Tabo%C3%A3o%20-%20Jardim%20Nova%20Taboao%2C%20Guarulhos%20-%20SP%2C%2007141-040!5e0!3m2!1spt-BR!2sbr!4v1606575564531!5m2!1spt-BR!2sbr" width="100%" height="1250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>




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


</body>
</html>