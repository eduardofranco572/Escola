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

					$comando ="SELECT * FROM `turma` WHERE codigo = '$codigo'";
					$view = $database->query ( $comando );
					$linha = $view-> fetch_assoc();
					echo ("<form method='POST' action='mudaTurma.php'>");
					echo ("	<label>Codigo:<input type='text' name='codigo' value='".$linha["codigo"]."'/></label><br/>");
					echo ("	<label>nome	:<input type='text' name='nome' value='".$linha["nome"]."'/></label><br/>");
					echo ("	<label>ano:<input type='text' name='ano' value='".$linha["ano"]."'/></label><br/>");
					echo ("	<input type='submit' value='Alterar' />");
					echo ("</form>");										
				}
            ?>
			<p><a href="../index.php">Voltar</a></p>
    </body>
</html>