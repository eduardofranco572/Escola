<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Home - Sistema Escola</title>
		
	</head>
	<style>
		
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
		}
		.menu{
			display: flex;
			justify-content: center;
			padding: 1rem;
			margin: 0;
		}
		li{
			margin: 0rem 0rem 0rem 3rem;
		}
		body,
		.sub-menu {
			margin: 0;
			padding: 0;
		}

		.clearfix:after{
			content: '.';
			display: block;
			clear: both;
			height: 0;
			line-height: 0;
			font-size: 0;
			visibility: hidden;
			overflow: hidden;
		}
		.menu,
		.sub-menu {
			list-style: none;
			background: #000;
		}
		.sub-menu {
			background: #404040;
		}
		.menu a, p, label {
			text-align: center;
			text-decoration: none;
			display: block;
			padding: 7px;
			color: #fff;
			font-family: sans-serif;
			font-size: 14px;
			text-transform: uppercase;
			font-weight: 600;
		}
		.menu li {
			position: relative;
		}
		.menu li:hover{
			background-color: #404040;

		}
		.menu > li {
			float: left;
			border-radius: 0.5rem 0.5rem 0rem 0rem;
			width: 10rem;
		}
		
		.menu li:hover > .sub-menu {
			display: block;
		}

		.sub-menu {
			display: none;
			position: absolute;
			min-width: 10rem;
			min-height: 5rem;
			border-radius: 0rem 0rem 0.5rem 0.5rem;
		}
		.sub-menu li a:hover {
			width: 9.1rem;
			background: #595959;
			border-radius: 0.5rem;
		}
		.sub-menu .sub-menu {
			top: 0;
			left: 100%;
		}
		.sub-menu li a{
			margin-left: -3rem;
		}

		.textos{
			color: white;
		}
		.inicio{
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 4rem;
			position: relative;
			background-color: rgb(26 23 23 / 29%);;
			border: 1px solid rgba(255, 255, 255, .25);
			border-radius: 3rem;
			backdrop-filter: blur(10px);
			width: 55rem;
			height: 54rem;
		}
		.formulario{
			display: flex;
			flex-direction: column;
			justify-content: center;

		}
		.formulario ul li{
			text-decoration: none;
		}

		.texto10{
			font-family: "Lato",sans-serif;
			font-size: 12px;
		}

		.cadastar{
			background-color: #d76900;
			color: white;
			height: 2.5rem;
			width: 19rem;
			font-size: 12px;
			font-family: "Lato",sans-serif;
			cursor: pointer;
			border-radius: 1rem;
			border: none;

		}
		input{
			border: none;
			width: 30rem;
			height: 1.5rem;
			border-radius: 0.5rem;
		}
		.titulos{
			text-align: center;
		}
		.botao{
			text-align: center;
		}

	</style>
<body>
		<div class="menu-container">
			<ul class="menu clearfix">
				<li><a href="#">Aluno</a>
					<ul class="sub-menu clearfix">
						<li><a href="cadastro.php">CADASTRO</a></li>
						<li><a href="ver.php">VISUALIZAR</a></li>
					</ul>
				</li>		
				<li><a href="#">Turma Aluno</a>
						<!-- Nível 1 -->
						<!-- submenu -->
						<ul class="sub-menu clearfix">
							<li><a href="../turmaAluno/cadastroTaluno.php">CADASTRO</a></li>
							<li><a href="../turmaAluno/verTaluno.php">VISUALIZAR</a></li>
						</ul><!-- submenu -->

					<li><a href="#">Turmas</a>
						<!-- Nível 1 -->
						<!-- submenu -->
						<ul class="sub-menu clearfix">
							<li><a href="../turma/cadastroTurma.php">CADASTRO</a></li>
							<li><a href="../turma/verTurma.php">VISUALIZAR</a></li>
						</ul><!-- submenu -->

						<li><a href="#">Turma Professor</a>
						<!-- Nível 1 -->
						<!-- submenu -->
						<ul class="sub-menu clearfix">
							<li><a href="../turmaProfessor/cadastroTprof.php">CADASTRO</a></li>
							<li><a href="../turmaProfessor/verTprof.php">VISUALIZAR</a></li>
						</ul><!-- submenu -->


					<li><a href="#">Professor</a>
						<!-- Nível 1 -->
						<!-- submenu -->
							<ul class="sub-menu clearfix">
								<li><a href="../professor/cadastroProf.php">CADASTRO</a></li>
								<li><a href="../professor/verProf.php">VISUALIZAR</a></li>
							</ul><!-- submenu -->
						</li>
						
					<li><a href="#">Funcionário</a>
						<!-- Nível 1 -->
						<!-- submenu -->
							<ul class="sub-menu clearfix">
								<li><a href="../funcionario/cadastroFun.php">CADASTRO</a></li>
								<li><a href="../funcionario/verFun.php">VISUALIZAR</a></li>
							</ul><!-- submenu -->

						
				</li>
			</ul>
		</div>

		<div class="conteiner">
			<div class="inicio">
				<div class="textos">
					<div class="titulos">
						<h1>Sistema de Alterar</h1>
						<p>Por Favor entre com os dados solicitados abaixo:</p>
					</div>
					<div class="nome">
						<div clas="normal">
								<?php
									$ra = $_POST['codigo'];
										
									$mysqli = new mysqli('localhost', 'root', '', 'dbescola');

									$sql = "select * from aluno where ra = $ra";
									$result = $mysqli -> query($sql);
									$linha = $result -> fetch_assoc();
										echo"Codigo:<br/> <input type='text' name='ra' value='$linha[ra]'/><br/><br/>";
										echo"Nome: <br/><input type='text' name='nome' value='$linha[nome]'/><br/><br/>";
										echo"Endereço: <br/><input type='text' name='endereco' value='$linha[endereco]'/><br/><br/>";
										echo"Cidade: <br/><input type='text' name='cidade' value='$linha[cidade]'/><br/><br/>";
										echo"CPF: <br/><input type='text' name='cpf' value='$linha[cpf]'/><br/><br/>";
										echo"RG: <br/><input type='text' name='rg' value='$linha[rg]'/><br/><br/>";
										echo"Data de Nacimento: <br/><input type='text' name='data_nasc' value='$linha[data_nasc]'/><br/><br/>";
										echo"E-Mail: <br/><input type='text' name='email' value='$linha[email]'/><br/><br/>";
										echo"Telefone: <br/><input type='text' name='telefone' value='$linha[telefone]'/><br/>";
										echo("<div class='botao'>");
										echo("<form method='POST' action='excluir.php'>
											<input type='hidden' name='ra' value='$ra'/><br/>
											<input class=' cadastar' type='submit' value='Excluir' />
											</form>");
										echo("</div>");			
								?>
								<p><a href="../index.php">Voltar</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
		<br>
	</body>
</html>
