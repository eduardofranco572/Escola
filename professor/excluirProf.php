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
			<h1>Confirmação de Excluir - Aluno</h1>
			<?php
                $codigo = $_POST['codigo'];
   
				$mysqli = new mysqli('localhost', 'root', '', 'dbescola');

                 $sql = "delete from professor where codigo = $codigo";
                 $result = $mysqli -> query($sql);

                 echo ('<p>Usuario excluido com Sucesso!</p>');
					
			?>
				<p><a href="../index.php">Voltar</a></p>
		
			</div>
		</div>

	</body>
</html>