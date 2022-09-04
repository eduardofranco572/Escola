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
						<li><a href="../aluno/cadastro.php">CADASTRO</a></li>
						<li><a href="../aluno/ver.php">VISUALIZAR</a></li>
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
						<h1>Sistema de Cadastro</h1>
						<p>Por Favor entre com os dados solicitados abaixo:</p>
					</div>
					<div class="nome">
						<div clas="normal">
							<form method="POST" action="bdcadastrarFun.php">
								codigo: </br>
								<input type="text" name="codigo" size="25" /><br/>
								<br/>
								Nome: </br>
									<input type="text" name="nome" size="25" /><br/>
								<br/>
								Endereço:</br>
								<input type="text" name="end" size="25" /><br/>
								<br/>
								Cidade: </br>
								<input type="text" name="cidade" size="25" /><br/>
								<br/>
								CPF: </br>
								<input type="text" name="cpf" size="25" /><br/>
								<br/>
								RG: </br>
								<input type="text" name="rg" size="25" /><br/>
								<br/>
								Data de Nascimento: </br>
								<input type="text" name="data_nasc" size="25" /><br/>
								<br/>
								E-Mail: </br>
								<input type="text" name="email" size="25" /><br/>
								<br/>
								Telefone: </br>
								<input type="text" name="telefone" size="25" /><br/>
								<br/>
								<br/>
								<div class="botao">
									<input class="cadastar"type="submit" name="enviar" value="Cadastrar" />
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
		<br>
	</body>
</html>