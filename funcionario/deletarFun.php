<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>excluir - Aluno</title>
		<link href="style.css" rel="stylesheet"/>
	</head>
	<body>
		<h1>Confirmação de excluir - Aluno</h1>

		<p>
			<?php
                $codigo = $_POST['codigo'];
                

				$mysqli = new mysqli('localhost', 'root', '', 'dbescola');

                 $sql = "select * from funcionario where codigo = $codigo";
                 $result = $mysqli -> query($sql);
				 $linha = $result -> fetch_assoc();
				 	echo"Codigo: <input type='text' name='codigo' value='$linha[codigo]'/></label><br/>";
				 	echo"Nome: <input type='text' name='nome' value='$linha[nome]'/></label><br/>";
					 echo"Endereço: <input type='text' name='endereco' value='$linha[endereco]'/></label><br/>";
					 echo"Cidade: <input type='text' name='cidade' value='$linha[cidade]'/></label><br/>";
					 echo"CPF: <input type='text' name='cpf' value='$linha[cpf]'/></label><br/>";
					 echo"RG: <input type='text' name='rg' value='$linha[rg]'/></label><br/>";
					 echo"Data de Nacimento: <input type='text' name='data_nasc' value='$linha[data_nasc]'/></label><br/>";
				 	echo"E-Mail: <input type='text' name='email' value='$linha[email]'/></label><br/>";
				 	echo"Telefone: <input type='text' name='telefone' value='$linha[telefone]'/></label>";
					echo("<form method='POST' action='excluirFun.php'>
						<input type='hidden' name='codigo' value='$codigo'/></label><br/>
						<input type='submit' value='Excluir' />
						</form>");			
			?>

				
		</p>
	
	</form>
	</body>
</html>