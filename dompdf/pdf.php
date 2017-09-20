<?php
include('../config.php');
$name=$_GET['name'];
$name2=$_GET['name2'];
?>
	<!DOCTYPE html>
	<html>
	<head>
	<meta charset="utf-8">
		<title></title>
		<style type="stylesheet">



body {
    font-family:sans-serif;}

p,h2{
	font-family:sans-serif;
}

		
		#parrafo{
			height:200px;
			padding:60px;
			font-family:sans-serif;
			font-size:20px;
			text-align:justify;
		}

		#footer{
			margin-top: 300px;
			margin-left:20px;
		}
		#franja{
			height:10px;
			background:#aaeeff;
		}

		#prueba{
			margin-left:450px;width:360px;
			margin-top:30px;
		}
		</style>
	</head>
	<body>

	<table>
		
		<?
		?>
			<img src="<?=$name?>" height="900"/>
		
		
		</table>
		&nbsp;

		<div id="titulo" >
			<h3 align="center">Hola!</h3></br>
			<h2 align="center">Gracias	por	interesarte	en	nuestro	trabajo.</h2>
		
		</div>
<div id="parrafo">
	<p>Particularmente lo	que	más	me	gusta	de	las	bodas, es	plasmar	las	emociones	y	los	detalles	
implicítos	 en	 las	 diferentes etapas	 del	 evento,	 me gusta	 lograr	 en	 mis	 fotografías	 esa	
sens
</div>

<?

include('dom.php');
?>
<script type="text/javascript">
	location.href="envio.php";
</script>