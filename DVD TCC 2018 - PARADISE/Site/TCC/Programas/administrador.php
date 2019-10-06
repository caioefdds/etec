	<!DOCTYPE html>
		<html lang="en">
			<head>
			<title>PARADISE</title>
				<meta charset="iso-8859-1">
				<meta name="viewport" content="width=device-width, initial-scale=1">
					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
					<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
					<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
					<link rel="icon" href="../imagem/icone/ico2.ico" type="image/x-icon">
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
					<link rel="stylesheet" href="../CSS/1css.css">
			</head>
				<body style="background-color:#222326;" id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
					<font face="Century Gothic">
						<nav class="navbar navbar-default navbar-fixed-top">
							<div class="container">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>                        
									</button>
									<a class="navbar-brand" href="index.php"><img src="../logonavbar/logonavbar3.png" width="120px" height="40px" style="transform: translateY(-30%)" ></a>
								</div>
						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span></a>
									<ul class="dropdown-menu">
										<li><a href="login.php">ENTRAR</a></li>
										<li><a href="register.php">REGISTRAR</a></li>
										<li><a href="contratar.php">CONTRATAR PACOTE</a></li>
										<li><a href="perfil.php">PERFIL</a></li>
										<li><a href="cartao.php">CADASTRAR CARTÃO</a></li>
									</ul>
							</ul>
						</div>
							</div>
						</nav>
					<div class="jumbotron8">

					<div class="container-fluid text-center">
						 <div class="container1" style="
						  position: relative;
						  left: 50%;
						  margin: 20px;
						  max-width: 900px;
						  padding: 16px;
						  background-color: #222326;
						  transform: translateX(-50%);
						  opacity: 0.9;
						">
					 <form method="post" action="administrador.php">
						<h2><font face="century gothic" color="white" >AREA DO ADMINISTRADOR</h2></font>
							<form class="form-horizontal">
								<div class="form-group">
						<?php

							include('verifica_sessaoadm.php');
							include('conexao.php');
						?>
						<?php
					if(isset($_SESSION['login']))
					{
					  mysql_select_db("etec3b");
					  $login=$_SESSION['login'];
					  $sql = "SELECT usu_nivel, usu_login FROM usuarios WHERE usu_login='$login'";
					  $resultadonivel = mysql_query($sql);
					  $dadosnivel=mysql_fetch_array($resultadonivel);
					  $nivel=$dadosnivel['usu_nivel'];
					  
					if($nivel==("2"))
					  {
						  $nivel=("2");
					  }
					  else
					  {
						  ?>
						  <script type="text/javascript">
					window.location = 'arearestrita.php';
					</script>
					<?php
					  }
					}
					  ?>
					<?php
					if(isset($_SESSION['login']))
					{

					  $sql = "SELECT foto, usu_login, usu_nome, usu_sobrenome, usu_telefone, usu_nivel FROM usuarios WHERE usu_login = '$login'";
					  $resultado = mysql_query($sql);
					  $dados=mysql_fetch_array($resultado);
					  $foto = $dados['foto'];
					  $nome = $dados['usu_nome'];
					  $sobrenome = $dados['usu_sobrenome'];
					  $usu_nivel = $dados['usu_nivel'];
					  $telefone = $dados['usu_telefone'];
					  if($foto=[''])
					  {
						$foto=('foto1.jpg');
					  }

					?>
					<p class="w3-center"><img src="<?php print($foto); }?>"class="w3-circle" style="height:180px;width:180px" alt="Avatar"></p>
							 <p><i class="fa fa-slack fa-fw w3-margin-right w3-text-theme"></i><?php print ("<strong>BEM-VINDO:</strong> $login"); ?></p>
							 <p><i class="fa fa-user fa-fw w3-margin-right w3-text-theme"></i> <?php print ("<strong>NIVEL:</strong> $nivel<hr>"); ?></p>

							 <?php
					if(isset($_SESSION['login']))
					{

					  

					  $sql = "SELECT loginpag, cc, cpf, dv, nc, cs, login_cont, pacote, dataida, datavolta, paises FROM pagamento, contrato WHERE login_cont=loginpag  ";
					  $resultado2 = mysql_query($sql);
					  while($dados2=mysql_fetch_array($resultado2))
					  {
					  $loginpag=$dados2['loginpag'];
					  $cc = $dados2['cc'];
					  $cpf = $dados2['cpf'];
					  $dv = $dados2['dv'];
					  $nc = $dados2['nc'];
					  $cs = $dados2['cs'];
					  $pacote = $dados2['pacote'];
					  $dataida = $dados2['dataida'];
					  $datavolta = $dados2['datavolta'];
					  $paises = $dados2['paises'];
					  $login_cont=$dados2['login_cont'];
						 
					  
					  
					?>

					<p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> <?php print ("<strong>DADOS DO COMPRADOR: </strong><br>NOME DO USUÁRIO: $loginpag <br>NOME DO TITULAR DO CARTAO: $nc<br>NÚMERO DO CARTÃO: $cc<br>CPF: $cpf<br>DATA DE VALIDADE: $dv<br> CÓDIGO DE SEGURANÇA: $cs<br>
																									<br><strong>INFORMAÇÕES DA VIAGEM COMPRADA:</strong><br>PAÍS: $paises<br>PACOTE: $pacote<br>DATA DE IDA: $dataida<br>DATA DE VOLTA: $datavolta<br><hr>");}} ?></p>

						</font>

					  </form>
					  </form>
					  </div>





					</div>
				</body>
		</html>