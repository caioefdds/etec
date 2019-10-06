	<!DOCTYPE html>
		<html lang="pt_BR">
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
						$("#celular").mask('(00) 00000-0000');
						$("#dataa").mask('00/00/0000');
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
					<div class="jumbotronn">
						<div class="container-fluid text-center headdd" style="background-color: #DEDEDE; background:#fff url('../imagem/imagemprimaria11.jpg') top no-repeat;">
							<div class="container1" style="padding-bottom: 50px;">
								<form method="post" action="register.php">
									<h2><font face="century gothic" color="white" >CADASTRAR</h2>
								<form class="form-horizontal">
								<form method="post" action="register.php">
						<div class="form-group">
							<label class="control-label col-sm-2" for="usu_nome">Nome:</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="usu_nome" id="usu_nome" placeholder="Insira seu nome" required><br>
								</div>
						</div>
							<div class="form-group">
							<label class="control-label col-sm-2" for="usu_sobrenome">Sobrenome:</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="usu_sobrenome" id="usu_sobrenome" placeholder="Insira seu sobrenome" required><br>
								</div>
							</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="usu_login">Usuário:</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="usu_login" id="usu_login" placeholder="Insira seu usuário" required><br>
								</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="usu_senha">Senha:</label>
								<div class="col-sm-10">          
									<input type="password" class="form-control" name="usu_senha" id="usu_senha" placeholder="Insira sua senha" required><br>
								</div>
						</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="celular">Telefone:</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="celular" id="celular" placeholder="(xx) xxxxx-xxxx" required><br>
									</div>
							</div>
						  <strong>FOTO</strong>
							<div class="form-group">
								<label for="foto" class="sr-only">FOTO</label>
									<input type="file" id="foto" name="foto" class="form-control">
							</div>
							<br>
							<div class="form-group">        
							</div>
						</font>
						<div class="form-group">        
						  <div class="col-sm-offset-2 col-sm-8">
							<button type="submit" name="submit" class="btn btn-default">CADASTRAR</button>
						  </div>
						</div>
					  </form>
					</div>
					</div>
					</div>
					</form>
						<?php
						  if(isset($_POST["submit"]))
							{
							$usu_nome=$_POST["usu_nome"];
							$usu_sobrenome=$_POST["usu_sobrenome"];
							$usu_login=$_POST["usu_login"];
							$usu_senha=md5($_POST["usu_senha"]);
							$usu_telefone=$_POST["celular"];
							$foto = $_POST['foto'];
							
							$foto2 = ("../imagem/perfil/$foto");

							mysql_connect("localhost","root","") or die(mysql_error());
							mysql_select_db("etec3b") or die(mysql_error());

							$query="INSERT INTO usuarios (usu_nome,usu_sobrenome,usu_login,usu_senha,usu_telefone,foto)
												VALUES ('$usu_nome','$usu_sobrenome','$usu_login','$usu_senha','$usu_telefone','$foto2')";
							mysql_query($query) or die(mysql_error());
							print("<script>alert(\"Cadastro realizado com sucesso.\")</script>");
							}

							
						?>


					<footer class="container-fluid text-center">
						<a href="#myPage" title="To Top">
							<span class="glyphicon glyphicon-chevron-up"></span>
						</a>
					<p>SITE CRIADO PELOS ALUNOS DA ESCOLA:<br>
						<strong>ETEC DR. GERALDO JOSÉ RODRIGUES ALCKIMIN<br></strong>
						<strong> 3º ANO DE INFORMÁTICA PARA INTERNET - 2018</strong></p>
					</footer>
						<script>
							$("#celular").mask('(00) 00000-0000');
							$("#data").mask('00/00/0000');
						</script>
					<script>
					$(document).ready(function(){
					  // Add smooth scrolling to all links in navbar + footer link
					  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
						// Make sure this.hash has a value before overriding default behavior
						if (this.hash !== "") {
						  // Prevent default anchor click behavior
						  event.preventDefault();

						  // Store hash
						  var hash = this.hash;

						  // Using jQuery's animate() method to add smooth page scroll
						  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
						  $('html, body').animate({
							scrollTop: $(hash).offset().top
						  }, 900, function(){
					   
							// Add hash (#) to URL when done scrolling (default click behavior)
							window.location.hash = hash;
						  });
						} // End if
					  });
					  
					  $(window).scroll(function() {
						$(".slideanim").each(function(){
						  var pos = $(this).offset().top;

						  var winTop = $(window).scrollTop();
							if (pos < winTop + 600) {
							  $(this).addClass("slide");
							}
						});
					  });
					})
					</script>
					</font>
				</body>
		</html>
		