<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>excluir - funcionario</title>
		<link href="style.css" rel="stylesheet"/>
	</head>
	<body>
		<h1>Confirmação de excluir - Funcionário</h1>

		<p>
			<?php
                $codigo = $_POST['codigo'];
   
				$mysqli = new mysqli('localhost', 'root', '', 'dbescola');

                 $sql = "delete from funcionario where codigo = $codigo";
                 $result = $mysqli -> query($sql);

                 echo ('Usuario excluido com Sucesso!');
		
					
			?>

				
		</p>
	
	</form>
	</body>
</html>