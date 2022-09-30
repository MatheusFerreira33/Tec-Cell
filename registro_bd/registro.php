
<body>
<link rel="stylesheet" type="text/css" href="estilos/css.css">




        <center><table width="90%" >
            <tr>
                    <td> ID</td>
                    <td>Nome</td>
                    <td>E-mail</td>
                    <td>Usuario</td>
                    <td>Endereço</td>
            </tr>
            <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
            </tr>
        </table></center>




</body>
<style>

*{
    margin:0px;
    padding:0px;
}


</style>


echo "ID: " . $row_usuario['id'] . "<br>";
			echo "Nome: " . $row_usuario['nome'] . "<br>";
			echo "E-mail: " . $row_usuario['email'] . "<br>";
			echo "Usuario: " . $row_usuario['usuario'] . "<br>";
			echo "Endereço: " . $row_usuario['endereco'] . "<br>";
			echo "<a href='edit_usuario.php?id=" . $row_usuario['id'] . "'>Editar</a><br><hr>";