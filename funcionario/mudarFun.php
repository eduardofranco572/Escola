<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Alterar - Aluno</title>
		<link href="style.css" rel="stylesheet"/>
	</head>
	<body>
		<h1>Confirmação de Alteração - Aluno</h1>
		<p>
		
			<?php
				$codigo = $_POST['codigo'];
				$nome = $_POST['nome'];	
				$end = $_POST['endereco'];	
				$cidade = $_POST['cidade'];	
				$cpf = $_POST['cpf'];	
				$rg = $_POST['rg'];		
				$data_nasc = $_POST['data_nasc'];	
				$email = $_POST['email'];
				$telefone = $_POST['telefone'];				
				
				if($nome == "" or $end == "" or $cidade == ""or $rg == ""or $codigo == ""or $data_nasc == "")
				{
					echo "Campos Obrigatórios em branco, preencha corretamente ....<br/>";
				}
				else{
	
					$mysqli = new mysqli('localhost', 'root', '', 'dbescola');
					$sql = "UPDATE `funcionario` SET `nome`='$nome',`endereco`='$end',`cidade`='$cidade',`cpf`='$cpf',`rg`='$rg',`data_nasc`='$data_nasc',`email`='$email',`telefone`='$telefone' WHERE `codigo`='$codigo'";
					$result = $mysqli->query( $sql );
					echo "Usuário Alterado com Sucesso!!!";
				}
				
			?>
			
		</p>
		<p><a href="../index.php">Voltar</a></p>
	</body>
</html>