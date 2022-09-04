<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Alterar - ALUNOS</title>
		
	</head> 
	<body>
    <?php
            $codigo = $_POST['codigo'];


                if($codigo == ''){
                    echo ("Campo invalido");
                }
				else{
					$database =new mysqli('localhost','root','','dbescola');

					$comando ="SELECT * FROM `funcionario` WHERE codigo = '$codigo'";
					$view = $database->query ( $comando );
					$linha = $view-> fetch_assoc();
					echo ("<form method='POST' action='mudarFun.php'>");
					echo ("	<label>RA:<input type='text' name='codigo' value='".$linha["codigo"]."'/></label><br/>");
					echo ("	<label>Nome:<input type='text' name='nome' value='".$linha["nome"]."'/></label><br/>");
					echo ("	<label>Endereço:<input type='text' name='endereco' value='".$linha["endereco"]."'/></label><br/>");
					echo ("	<label>Cidade:<input type='text' name='cidade' value='".$linha["cidade"]."'/></label><br/>");
					echo ("	<label>CPF:<input type='text' name='cpf' value='".$linha["cpf"]."'/></label><br/>");
					echo ("	<label>RG:<input type='text' name='rg' value='".$linha["rg"]."'/></label><br/>");
					echo ("	<label>Data de Nascimento:<input type='text' name='data_nasc' value='".$linha["data_nasc"]."'/></label><br/>");
					echo ("	<label>E-Mail:<input type='text' name='email' value='".$linha["email"]."'/></label><br/>");
					echo ("	<label>Telefone:<input type='text' name='telefone' value='".$linha["telefone"]."'/></label><br/>");
					echo ("	<input type='submit' value='Alterar' />");
					echo ("</form>");										
				}
            ?>
			<p><a href="../index.php">Voltar</a></p>
    </body>
</html>