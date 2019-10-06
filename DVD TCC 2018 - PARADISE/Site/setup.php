<DOCTYPE html>
 <html>
	<head>
		
		<meta charset="iso-8859-1">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="icon" type="image/png" href="icone.png">
		<title> SETUP </title>
	</head>
	<body>

<?php 
	$usuario = "super";
	$senha = "123123123"; 
	if(!isset($_SERVER["PHP_AUTH_USER"]))
	{
		header("WWW-Authenticate: Basic Realm=\"Identifique-se:\"");
		header("HTTP/1.0 401 Unautorized");
		print("<p>Cancelado pelo usuário.</p>");
	}
	else
	{
		if(($_SERVER["PHP_AUTH_USER"]==$usuario) AND
			($_SERVER["PHP_AUTH_PW"]==$senha))
			{
				print("<p> Acesso AUTORIZADO. </p>");
			
			require("conexao.php");
			$query="CREATE DATABASE etec3b";
			
			
			if(mysql_query($query))
				print("<p> Banco de dados 'etec3b' foi criado.");
			else
			
				print("<p> Banco de dados 'etec3b' não foi criado. Mensagem: ".mysql_error()." </p>");
			
			
			mysql_select_db("etec3b");
			
			$query="CREATE TABLE usuarios(usu_login varchar(50) primary key,
								 usu_senha varchar(50) not null,
								 usu_nome varchar(50) not null,
								 usu_sobrenome varchar (50) not null,
								 usu_telefone varchar(100) not null,
								 foto varchar(1000),
								 usu_nivel integer not null)";
								 
								 
			 if(mysql_query($query))
				print("<p> Tabela 'usuarios' criado com sucesso. </p>");
			else
				print("<p> Erro ao criar tabela 'usuarios'. Mensagem: ".mysql_error()." </p>");
			
			$senha1=md5("123");
			$senha2=md5("456");
			$query="INSERT INTO usuarios VALUES ('admin','$senha1','Caio','Eduardo','123','foto1.jpg',2),('caio','$senha2','Caio','Fagundes','123','foto2.jpg',2)";
			if(mysql_query($query))
				print("<p> Usuarios padrões criados com sucesso. </p>");
			else
				print("<p> Erro ao criar usuarios padrões. Mensagem: ".mysql_error()." </p>");
			
			$query="CREATE TABLE pacotes(nome_pac varchar(50) primary key)";
			if(mysql_query($query))
				print("<p> Tabela 'pacotes' criado com sucesso. </p>");
			else
				print("<p> Erro ao criar tabela 'pacotes'. Mensagem: ".mysql_error()." </p>");
			
			
			$query="INSERT INTO pacotes VALUES ('Básico'),('Avancado'),('Ultimate')";
			if(mysql_query($query))
				print("<p> Pacote padrões criados com sucesso. </p>");
			else	
				print("<p> Erro ao criar pacotes Padrões. Mensagem: ".mysql_error()." </p>");
			
			$query="CREATE TABLE paises(nome_pais varchar(50) primary key)";
			if(mysql_query($query))
				print("<p> Tabela 'paises' criado com sucesso. </p>");
			else
				print("<p> Erro ao criar tabela 'paises'. Mensagem: ".mysql_error()." </p>");
			
			$query="INSERT INTO paises VALUES ('Monaco'),('Palau'),('México'),('Montenegro'),('Madagascar'),('França'),('China'),('Brasil')";
			if(mysql_query($query))
				print("<p> paises Padrões criados com sucesso. </p>");
			else	
				print("<p> Erro ao criar paises Padrões. Mensagem: ".mysql_error()." </p>");
				
				$query="CREATE TABLE contrato(id integer auto_increment primary key,
								 login_cont varchar(50) not null,
								 pacote varchar(50) not null,
								 dataida varchar(10) not null,
								 datavolta varchar(10) not null,
								 paises varchar(50) not null)";
								 
								 
			 if(mysql_query($query))
				print("<p> Tabela 'contrato' criado com sucesso. </p>");
			else
				print("<p> Erro ao criar tabela 'contrato'. Mensagem: ".mysql_error()." </p>");


								$query="CREATE TABLE pagamento(loginpag varchar(50) primary key,
								 cc varchar(50) not null,
								 cpf varchar(50) not null,
								 dv varchar (50) not null,
								 nc varchar (50) not null,
								 cs varchar (50) not null,
								 status varchar(50) not null)";
								 
								 
			 if(mysql_query($query))
				print("<p> Tabela 'pagamento' criado com sucesso. </p>");
			else
				print("<p> Erro ao criar tabela 'pagamento'. Mensagem: ".mysql_error()." </p>");
			
			$query="CREATE TABLE avaliacao(id integer auto_increment primary key,
										   a_brasil integer,
										   a_palau integer,
										   a_madagascar integer,
										   a_china integer,
										   a_franca integer,
										   a_monaco integer)";
								 
								 
			 if(mysql_query($query))
				print("<p> Tabela 'avaliacao' criado com sucesso. </p>");
			else
				print("<p> Erro ao criar tabela 'avaliacao'. Mensagem: ".mysql_error()." </p>");
			
			
			
			?>
			<script> window.location.href = "TCC/Programas/index.php"; </script>
			<?php
			}
	else
		{
			print("<p> Acesso Negado. </p>");
		}
	}
?>
