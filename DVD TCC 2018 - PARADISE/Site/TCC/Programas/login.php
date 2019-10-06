<!DOCTYPE html>
	<html lang="en">
		<head>
 
			<title>PARADISE</title>
				<meta charset="utf-8">
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
				<form method="post" action="login.php">
					<h2><font face="century gothic" color="white" >ENTRAR</h2>
						<form class="form-horizontal">
							<div class="form-group">
								<label class="control-label col-sm-2" for="email">Usuário:</label>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="frm_login" id="frm_login" placeholder="Insira seu usuario" maxlength="50" required><br>
									</div>
							</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="senha">Senha:</label>
						<div class="col-sm-10">          
							<input type="password" class="form-control" name="frm_senha" id="frm_senha" placeholder="Insira sua senha" maxlength="50" required>
						</div>
				</div>
			<div class="form-group">        
				<div class="col-sm-offset-2 col-sm-8">
					<label><input type="checkbox" name="frm_pc" id="frm_pc" value="1"> Lembrar de mim</label><br>
          
				</div>
			</div>
						</font>
				<div class="form-group">        
					<div class="col-sm-offset-2 col-sm-8">
						<button type="submit" name="submit" class="btn btn-default">ENTRAR</button>
					</div>
				</div>
						</form>
				</form>
		<?php
				if(isset($_POST["submit"]))
					{
						require("conexao.php");
						mysql_select_db("etec3b") or die(mysql_error());
				
						$login=$_POST["frm_login"];
						$senha=md5($_POST["frm_senha"]);
					
						$query="select * from usuarios where usu_login='$login' and usu_senha='$senha'";
						$result=mysql_query($query) or die(mysql_error());
				if(mysql_num_rows($result)==1)
					{
						$dados=mysql_fetch_array($result);
						$nivel=$dados["usu_nivel"];
						$_SESSION["login"]=$login;
						$_SESSION["nivel"]=$nivel;
				if(isset($_POST["frm_pc"]))
					{
						$_SESSION["pc"]=$_POST["frm_pc"];
					}
				print("<script>alert(\"Login realizado com sucesso. Bem vindo $login\")</script>");
				print("<meta http-equiv=\"refresh\" content=\"0\">");
				session_start();
						$_SESSION['login'] = $login;
					
		?>
		<script type="text/javascript">
			window.location = 'index.php';
		</script>
		<?php
				}
					else
				{
					print("<script>alert(\"falha no login. Usuario ou senhas inválidos.\")</script>");
					print("<meta http-equiv=\"refresh\" content=\"0\">");
				}
			}
		?>
					</div>
				</div>
			</div>


		<footer class="container-fluid text-center">
			<a href="#myPage" title="To Top">
				<span class="glyphicon glyphicon-chevron-up"></span>
			</a>
				<p>SITE CRIADO PELOS ALUNOS DA ESCOLA:<br>
			<strong>ETEC DR. GERALDO JOSÉ RODRIGUES ALCKIMIN<br></strong>
			<strong> 3° ANO DE INFORMÁTICA PARA INTERNET - 2018</strong></p>
		</footer>

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
				} 
			// End if
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