	<!DOCTYPE html>
		<html lang="pt_BR">
			<head>
				 <title>PARADISE</title>
					  <meta charset="utf-8">
					  <meta name="viewport" content="width=device-width, initial-scale=1">
					  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
					  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
					  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
					  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
					  <link rel="icon" href="../imagem/icone/ico2.ico" type="image/x-icon">
					  <link rel="stylesheet" href="../CSS/1css.css">
					  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
									<a class="navbar-brand" href="#myPage"><img src="../logonavbar/logonavbar3.png" width="120px" height="40px" style="transform: translateY(-30%)" ></a>
								</div>
								<div class="collapse navbar-collapse" id="myNavbar">
									<ul class="nav navbar-nav navbar-right">
										<li><a href="#empresa">EMPRESA</a></li>
										<li><a href="#paises">PAÍSES</a></li>
										<li><a href="#pacotes">PACOTES</a></li>
										<li><a href="#sobre">SOBRE NÓS</a></li>
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
							<div class="jumbotron">
								<div class="jubi">
									<img src="../a LOGO/logo.png" class="logo1">
								</div>
							</div>
					<!-- Container) -->
							<div id="empresa" style="background-color: #FFFFFF;" class="container-fluid" >
								<div class="row">
									<div class="col-sm-6">
										<h2>SOBRE NOSSA EMPRESA</h2><br>
										<h4>Nossa empresa  foi criada com o objetivo de facilitar a escolha e a realização da viagem do cliente. Você poderá escolher
										pacotes promocionais, conhecer mais sobre o lugar que deseja viajar e muito mais!</h4><br>
										<h4> Empresas de viagem são hoje em dia no mercado comuns, tem em todo lugar, mas nós não somos simplesmente
										uma empresa de viagens, nós somos a <strong>PARADISE</strong>. <br> <p>Viemos para revolucionar a imagem de uma agência de viagens, pois
										nós buscamos ter a melhor harmonia entre preço e qualidade!<br>
										Imagine você ir com sua família em uma viagem dos sonhos e ainda pagando pouco, isso bem que podia ser verdade não é?<br>
										Então eu digo a <strong>VOCÊ</strong> agora é <strong>POSSIVEL!</strong><br>
										Entre em contato conosco e venha conhecer todos nossos recursos e pacotes disponiveis e prometemos a você que não se arrependerá!<br>
									</div>
										<div class="col-sm-6">
										  <img src="../imagem/icone/logob.png" width="500px" height="500px" style="position: relative; left: 50%; top: 50%; transform: translateX(-50%)">
										</div>
								</div>
							</div>
					<!-- Container -->
					<div id="paises" class="container-fluid text-center" style="background-color: #DEDEDE;">
					  <h2>PAÍSES</h2><br>
					  <h4>PAÍSES QUE TRABALHAMOS</h4>
					  <div class="row text-center slideanim">
							<a href="brasil.php">
							<div class="col-sm-4">
								<div class="thumbnail">
									<img src="../imagem/lugares/brasil.jpg" alt="Brasil" width="400" height="300">
										<p><strong>BRASIL</strong></p>
										<p><i>Cidades que visitará</p></i>
									<ul align="justify">
										<li>Cristo redentor, no Rio de janeiro</li>
										<li>Parque Nacional do Iguaçu, no Paraná</li>
										<li>Bonito, no Mato Grosso do sul</li>
										</ul>
										<div class="parte1">
										<?php
											require("conexao.php");
											mysql_select_db("etec3b") or die(mysql_error());
											$query="SELECT SUM(a_brasil) AS TotalItemsOrdered FROM avaliacao";
											$result=mysql_query($query) or die(mysql_error());
											$dados=mysql_fetch_array($result);
											$a_brasil=$dados["TotalItemsOrdered"];
											$query="SELECT COUNT(a_brasil) AS TOTAL FROM avaliacao;";
											$result2=mysql_query($query) or die(mysql_error());
											$dados2=mysql_fetch_array($result2);
											$total=$dados2["TOTAL"];
											if($total=="0")
											{
											print(" <h4><i><b> Nenhuma avaliação ainda</i></b> </h4>");
											}
											else
											{
										    $brasil=$a_brasil/$total;
											print(" <h4><i><b> Média de avaliação: $brasil</i></b> </h4>");
											}
											
										?>
										</div>
									
								</div>
							</div>
								</a>
							<a href="china.php" vlink="white" link="white" alink="white">
								<div class="col-sm-4">
									<div class="thumbnail">
										<img src="../imagem/lugares/china.jpg" alt="China" width="400" height="300">
											<p><strong>CHINA</strong></p>
											<i><p>Cidades que visitará</p></i>
										<ul align="justify">
											<li>Cidade Proibida, em Pequim</li>
											<li>Templo do Céu, em Pequim</li>
											<li>Museu Capital Beijing, em Pequim</li>
											</ul>
											<div class="parte1">
											<?php
											require("conexao.php");
											mysql_select_db("etec3b") or die(mysql_error());
											$query="SELECT SUM(a_china) AS TotalItemsOrdered FROM avaliacao";
											$result=mysql_query($query) or die(mysql_error());
											$dados=mysql_fetch_array($result);
											$a_china=$dados["TotalItemsOrdered"];
											$query="SELECT COUNT(a_china) AS TOTAL FROM avaliacao;";
											$result2=mysql_query($query) or die(mysql_error());
											$dados2=mysql_fetch_array($result2);
											$total=$dados2["TOTAL"];
										    if($total=="0")
											{
											print(" <h4><i><b> Nenhuma avaliação ainda</i></b> </h4>");
											}
											else
											{
										    $china=$a_china/$total;
											print(" <h4><i><b> Média de avaliação: $china</i></b> </h4>");
											}
										?>
											</div>
										
									</div>
								</div>
							</a>
							<a href="franca.php" vlink="white" link="white" alink="white">
								<div class="col-sm-4">
									<div class="thumbnail">
										<img src="../imagem/lugares/frança.jpg" alt="França" width="400" height="300">
											<p><strong>FRANÇA</strong></p>
											<i><p>Cidades que visitará</p></i>
										<ul align="justify">
											<li>Torre Eiffel, em Paris</li>
											<li>Museu do Louvre, em Paris</li>
											<li>Palácio de Versalhes, em Versalhes</li>
											</ul>
											<div class="parte1">
											<?php
											require("conexao.php");
											mysql_select_db("etec3b") or die(mysql_error());
											$query="SELECT SUM(a_franca) AS TotalItemsOrdered FROM avaliacao";
											$result=mysql_query($query) or die(mysql_error());
											$dados=mysql_fetch_array($result);
											$a_franca=$dados["TotalItemsOrdered"];
											$query="SELECT COUNT(a_franca) AS TOTAL FROM avaliacao;";
											$result2=mysql_query($query) or die(mysql_error());
											$dados2=mysql_fetch_array($result2);
											$total=$dados2["TOTAL"];
											if($total=="0")
											{
											print(" <h4><i><b> Nenhuma avaliação ainda</i></b> </h4>");
											}
											else
											{
										    $franca=$a_franca/$total;
											print(" <h4><i><b> Média de avaliação: $franca</i></b> </h4>");
											}
										?>
											</div>
									</div>
								</div>
							</a>
								<a href="madagascar.php" vlink="white" link="white" alink="white">
									<div class="col-sm-4">
										<div class="thumbnail">
											<img src="../imagem/lugares/madagascar.jpg" alt="Madagascar" width="400" height="300">
											<p><strong>MADAGASCAR</strong></p>
											<i><p>Cidades que visitará</p></i>
											   <ul align="justify">
													<li>Ambohimanga </li>
													<li>Antsiranana </li>
													<li>Fianarantsoa</li>
													</ul>
													<div class="parte1">
													<?php
											require("conexao.php");
											mysql_select_db("etec3b") or die(mysql_error());
											$query="SELECT SUM(a_madagascar) AS TotalItemsOrdered FROM avaliacao";
											$result=mysql_query($query) or die(mysql_error());
											$dados=mysql_fetch_array($result);
											$a_madagascar=$dados["TotalItemsOrdered"];
											$query="SELECT COUNT(a_madagascar) AS TOTAL FROM avaliacao;";
											$result2=mysql_query($query) or die(mysql_error());
											$dados2=mysql_fetch_array($result2);
											$total=$dados2["TOTAL"];
											if($total=="0")
											{
											print(" <h4><i><b> Nenhuma avaliação ainda</i></b> </h4>");
											}
											else
											{
										    $madagascar=$a_madagascar/$total;
											print(" <h4><i><b> Média de avaliação: $madagascar</i></b> </h4>");
											}
										?>
											 </div>
										</div>
									</div>
								</a>
								<a href="monaco.php" vlink="white" link="white" alink="white">
									<div class="col-sm-4">
										<div class="thumbnail">
											<img src="../imagem/lugares/monaco.jpg" alt="Monaco" width="400" height="300">
											<p><strong>MÔNACO</strong></p>
											<i><p>Cidades que visitará</p></i>
												<ul align="justify">
													<li>Mônaco Ville</li>
													<li>Cassino de Monte Carlo</li>
													<li>Ponto Hércules
													</li>
														</ul>
													<div class="parte1">
													<?php
											require("conexao.php");
											mysql_select_db("etec3b") or die(mysql_error());
											$query="SELECT SUM(a_monaco) AS TotalItemsOrdered FROM avaliacao";
											$result=mysql_query($query) or die(mysql_error());
											$dados=mysql_fetch_array($result);
											$a_monaco=$dados["TotalItemsOrdered"];
											$query="SELECT COUNT(a_monaco) AS TOTAL FROM avaliacao;";
											$result2=mysql_query($query) or die(mysql_error());
											$dados2=mysql_fetch_array($result2);
											$total=$dados2["TOTAL"];
											if($total=="0")
											{
											print(" <h4><i><b> Nenhuma avaliação ainda</i></b> </h4>");
											}
											else
											{
										    $monaco=$a_monaco/$total;
											print(" <h4><i><b> Média de avaliação: $monaco</i></b> </h4>");
											}
										?>
											</div>
										</div>
									</div>
								</a>
								<a href="palau.php" vlink="white" link="white" alink="white" style="text-decoration: none;">
									<div class="col-sm-4">
										<div class="thumbnail">
											<img src="../imagem/lugares/palau.jpg" alt="Palau" width="400" height="300">
											<p><strong>PALAU</strong></p>
											<i><p>Cidades que visitará</p></i>
											   <ul align="justify">
													<li> Rock Islands</li>
													<li>Jellyfish Lake</li>
													<li>Babeldaob</li>
												</ul>
												<div class="parte1">
												<?php
											require("conexao.php");
											mysql_select_db("etec3b") or die(mysql_error());
											$query="SELECT SUM(a_palau) AS TotalItemsOrdered FROM avaliacao";
											$result11=mysql_query($query) or die(mysql_error());
											$dados11=mysql_fetch_array($result11);
											$a_palau=$dados11["TotalItemsOrdered"];
											$query="SELECT COUNT(a_palau) AS TOTAL FROM avaliacao;";
											$result=mysql_query($query) or die(mysql_error());
											$dados=mysql_fetch_array($result);
											$total=$dados["TOTAL"];
											if($total=="0")
											{
											print(" <h4><i><b> Nenhuma avaliação ainda</i></b> </h4>");
											}
											else
											{
										    $palau=$a_palau/$total;
											print(" <h4><i><b> Média de avaliação: $palau</i></b> </h4>");
											}
										?>
											</div>
										</div>
									</div>
								</a>
							</div>
					 </div>
					<!-- Container (Pricing Section) -->
					<div id="pacotes" class="container-fluid" style="background-color: #FFFFFF;">
						<div class="text-center">
							<h2>COMPRA</h2>
							<h4>Escolha um pacote de viagem que mais te agrada</h4>
						</div>
							<div class="row slideanim">
								<div class="col-sm-4 col-xs-12">
									<div class="panel panel-default text-center">
										<div class="panel-heading">
											<h1>BÁSICO</h1>
										</div>
											<div class="panel-body">
												  <p><strong>3 DIAS</strong></p>
												  <p><strong>SEM GUIA TURÍSTICO</strong></p>
												  <p><strong>APARTAMENTO 3 ESTRELAS</strong></p>
												  <p><strong> SEM TRADUTOR </strong></p>
											</div>
												<div class="panel-footer">
													<h3>R$ 3.299,99</h3>
													<h4>POR PAÍS</h4>
													<a href="contratar.php"> <button class="btn btn-lg" href="contratar.php">CONTRATAR</button></a>
												</div>
									</div>      
						</div>     
						<div class="col-sm-4 col-xs-12">
						  <div class="panel panel-default text-center">
							<div class="panel-heading">
							  <h1>AVANÇADO</h1>
							</div>
							<div class="panel-body">
								<p><strong>5 DIAS</strong></p>
							  <p><strong>GUIA TURÍSTICO INCLUSO</strong></p>
							  <p><strong>APARTAMENTO 4 ESTRELAS</strong></p>
							  <p><strong> SEM TRADUTOR </strong></p>
							</div>
							<div class="panel-footer">
							  <h3>R$ 4.799,98</h3>
							  <h4>POR PAÍS</h4>
							  <a href="contratar.php"><button class="btn btn-lg" href="contratar.php">CONTRATAR</button></a>
							</div>
						  </div>      
						</div>       
						<div class="col-sm-4 col-xs-12">
						  <div class="panel panel-default text-center">
							<div class="panel-heading">
							  <h1> ULTIMATE </h1>
							</div>
							<div class="panel-body">
								<p><strong>7 DIAS</strong></p>
							  <p><strong>GUIA TURÍSTICO INCLUSO</strong></p>
							  <p><strong>APARTAMENTO 5 ESTRELAS</strong></p>
							  <p><strong>TRADUTOR OPCIONAL </strong></p>
							</div>
							<div class="panel-footer">
							  <h3>R$ 5.199,99 </h3>
							  <h4>POR PAÍS</h4>
							  <a href="contratar.php"><button class="btn btn-lg" >CONTRATAR</button></a>
							</div>
						  </div>      
						</div>    
					  </div>
					</div>

					<div class="container-fluid bg-grey">

						  <center>
						  <h2>SOBRE NÓS</h2><br>
						  <h4><strong>CRIADORES:</strong> Nossa empresa conta com os principais fundadores:<br></h4>
						  
						  <div id="sobre" class="container-fluid text-center bg-grey">
						  
					  <div class="row slideanim">
						<div class="col-sm-3">
						  <p class="text-center"><strong>CAIO EDUARDO</strong></p><br>
						  <img src="../imagem/Criadores/caio.jpg" class="img-circle person" alt="CAIO" width="255" height="255">
						</div>
						<div class="col-sm-3">
						  <p class="text-center"><strong>EDSON APARECIDO</strong></p><br>
						  <img src="../imagem/Criadores/edson.jpg" class="img-circle person" alt="EDSON" width="255" height="255">
						</div>
						<div class="col-sm-3">
						  <p class="text-center"><strong>FABRÍCIO CARVALHO</strong></p><br>
						  <img src="../imagem/Criadores/corno.jpg" class="img-circle person" alt="CAIO" width="255" height="255">
						</div>
						<div class="col-sm-3">
						  <p class="text-center"><strong>ARYADNE FERNANDES</strong></p><br>
						  <img src="../imagem/Criadores/aryadne.jpg" class="img-circle person" alt="ARY" width="255" height="255">
						</div>
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