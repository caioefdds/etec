	<!DOCTYPE html>
		<?php
			require("conexao.php");
			mysql_select_db("etec3b");
			include('verifica_sessao.php');
			$login=$_SESSION['login'];
		?>
		<html lang="pt_br">
			<head>
				  <title>PARADISE</title>
				  <meta charset="iso-8859-1">
				  <meta name="viewport" content="width=device-width, initial-scale=1">
				  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
				  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
				  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
				  <link rel="icon" href="../imagem/icone/ico2.ico" type="image/x-icon">
				  <link rel="stylesheet" href="../CSS/1css.css">
				  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
				  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
				   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
				   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
				   <script>
							$("#dataa").mask('00/00/0000');
							$("#dataaa").mask('00/00/0000');
					</script>

				   
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
						<div class="jumbotro">
							<div class="container-fluid text-center headd" style="background-color: #DEDEDE; background:#fff url('../imagem/imagemprimaria11.jpg') top no-repeat;">
								<div class="container" style="
									  position: relative;
									  left: 50%;
									  margin: 20px;
									  max-width: 900px;
									  padding: 16px;
									  background-color: #222326;
									  transform: translateX(-50%);
									  opacity: 0.9;
									">
						 <form method="post" action="contratar.php">
							<h2><font face="century gothic" color="white" >CONTRATAR</h2></font><br>
								<form class="form-horizontal">
									<div class="form-group">
										<font  face="century gothic" size="5" color="white">
										<?php print( "Você está logado como: <font  face='century gothic' size='6' color='red'><strong> $login </strong></font>"); ?><br><br>
										</font>
										<font  face="century gothic" color="white">
											<label class="control-label col-sm-6" id="paises" name="paises" for="paises">SELECIONE O PAÍS DESEJADO:</label>
										</font>
										<font  face="century gothic" color="black">
											<select class="control-label col-sm-6" id="paises" name="paises">
								  <?php
								  $query="select * from paises order by nome_pais asc";
								  $result=mysql_query($query);
								  while($dados=mysql_fetch_array($result))
									{
									$nome_pais=$dados["nome_pais"];
									print("<option value='$nome_pais'>$nome_pais</option>");
									}
								  unset($result);
								  mysql_close();
								  ?>
											</select><br>

						</div>
						<font face="Century Gothic" color="white">
						  <label class="control-label col-sm-6" for="senha" id="pacote" name="pacote">SELECIONE O PACOTE DESEJADO:</label>
						  </font>
						<font face="Century Gothic" color="black">
							  <select class="col-sm-6" id="pacote" id="pacote" name="pacote">
								  <option value='Básico'>Básico</option>
									<option value='Avançado'>Avançado</option>
									<option value='Ultimate'>Ultimate</option>

						</select><br><br>
						</font>
						<div class="form-group">
							<font  face="century gothic" color="white">
								<label class="control-label col-sm-3" name="dataida" for="dataida">A DATA DE IDA:</label>
									</font>
									<font  face="century gothic" color="black">
										<input type="text" class="control-label col-sm-3" id="dataa" name="dataida" placeholder="dd/mm/aaaa" required>
						</div>
							<div class="form-group">
								<font  face="century gothic" color="white">
									<label class="control-label col-sm-3" name="datavolta" for="datavolta">A DATA DE VOLTA:</label>
								</font>
								<font  face="century gothic" color="black">
									<input type="text" class="control-label col-sm-3" id="dataaa" name="datavolta" placeholder="dd/mm/aaaa" required>
							</div>
								</font><br><br>
							<div class="form-group">        
							  <div class="col-sm-offset-2 col-sm-8">
								<button type="submit" id="submit" name="submit" class="btn btn-default">COMPRAR</button>
							  </div>
							</div>
						  </form>
						  </form>
						  <?php
							  if(isset($_POST["submit"]))
								{
								mysql_connect("localhost","root","") or die(mysql_error());
								mysql_select_db("etec3b") or die(mysql_error());
								
									$login_conti=$login;
										$query="SELECT status, loginpag FROM pagamento WHERE loginpag='$login'";
										 $result1=mysql_query($query);
										 $dados=mysql_fetch_array($result1);
										 $result_status=$dados["status"];
											if($result_status == "CADASTRADO")
											{
												($a="");
											}
											else
											{
												?>
												<script type="text/javascript">
													window.location = 'cartao.php';
												</script>
												<?php
											}
									$paises=$_POST["paises"];
									$pacote=$_POST["pacote"];
									$dataida=$_POST["dataida"];
								$datavolta=$_POST["datavolta"];
								
								$query="INSERT INTO contrato(login_cont,paises,pacote,dataida,datavolta)
													VALUES ('$login_conti','$paises','$pacote','$dataida','$datavolta')";
								mysql_query($query) or die(mysql_error());
								print("<script>alert(\"Cadastro realizado com sucesso.\")</script>");
								}
							?>
						</font>
					<script>
							$("#dataa").mask('00/00/0000');
							$("#dataaa").mask('00/00/0000');
					</script>
				</body>
		</html>