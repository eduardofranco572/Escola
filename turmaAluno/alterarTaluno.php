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

					$comando ="SELECT * FROM `turmaaluno` WHERE codigo = '$codigo'";
					$view = $database->query ( $comando );
					$linha = $view-> fetch_assoc();
					echo ("<form method='POST' action='mudaTaluno.php'>");
					echo ("	<label>Codigo:<input type='text' name='codigo' value='".$linha["codigo"]."'/></label><br/>");
					echo ("	<label>codAluno:<input type='text' name='codAluno' value='".$linha["codAluno"]."'/></label><br/>");
					echo ("	<label>codTurma:<input type='text' name='codTurma' value='".$linha["codTurma"]."'/></label><br/>");
					echo ("	<input type='submit' value='Alterar' />");
					echo ("</form>");										
				}
            ?>
			<p><a href="../index.php">Voltar</a></p>
    </body>
</html>