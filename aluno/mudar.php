<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Cadastro - Aluno</title>
		<link href="style.css" rel="stylesheet"/>
	</head>
	<style>
		h1{
			color: white;
			font-size: 1.5rem;
		}
		p{
			color: white;
		}
		body{
    		background-image: url("https://images6.alphacoders.com/485/485875.jpg");
			background-size: 100%;
			background-attachment: fixed;
    		background-repeat: no-repeat;
		}
		.conteiner{
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			margin-top: 14rem;
		}
		.inicio{
			display: flex;
			flex-direction: column;
			align-items: center;
			position: relative;
			border: 1px solid rgba(255, 255, 255, .25);
			border-radius: 3rem;
			backdrop-filter: blur(10px);
			width: 32rem;
    		height: 14rem;
			
		}
	</style>
	<body>

		
		<div class="conteiner">
			<div class="inicio">
			<h1>Confirmação de Alterar - Aluno</h1>

			<?php
				$nome = $_POST['nome'];	
				$end = $_POST['endereco'];	
				$cidade = $_POST['cidade'];	
				$cpf = $_POST['cpf'];	
				$rg = $_POST['rg'];	
				$ra = $_POST['ra'];	
				$data_nasc = $_POST['data_nasc'];	
				$email = $_POST['email'];
				$telefone = $_POST['telefone'];				
				
				if($nome == "" or $end == "" or $cidade == ""or $rg == ""or $ra == ""or $data_nasc == "")
				{
					echo "<p>Campos Obrigatórios em branco, preencha corretamente ....<br/><p>";
				}
				else{
	
					$mysqli = new mysqli('localhost', 'root', '', 'dbescola');
					$sql = "UPDATE `aluno` SET `nome`='$nome',`endereco`='$end',`cidade`='$cidade',`cpf`='$cpf',`rg`='$rg',
					`data_nasc`='$data_nasc',`email`='$email',`telefone`='$telefone' WHERE `ra`='$ra'";
					$result = $mysqli->query( $sql );
					echo "<p>Usuário Alterado com Sucesso!!!<p>";
				}
				
			?>



				<p><a href="../index.php">Voltar</a></p>
		
			</div>
		</div>

	</body>
</html>