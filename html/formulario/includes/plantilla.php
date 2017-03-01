<?php 
	session_start();
	function escribeCabecera($titulo = "Bienvenido", $color = "red lighten"){
	?>
	<!DOCTYPE html>
	<html >
	<head>
		<meta charset="UTF-8">
		<title>Formulario</title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	</head>
	<body>
		<nav class="<?= $color ?>" role="navigation">
    		<div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo">Web</a>
     			<ul class="right hide-on-med-and-down">
        			<li><a href="index.php">Inicio</a></li>
        			<li><a href="login.php"><?php if (!empty($_SESSION['user'])) {
        				echo $_SESSION['user']['nombre'];}?></a></li>
        			<li><a href="logout.php"><?php if (!empty($_SESSION['user'])) {
        				echo "Salir";}?></a></li>
      			</ul>
    		</div>
  		</nav>
		<h1 class="header center grey-text"><?= $titulo ?></h1>
		<div class="section no-pad-bot" id="index-banner">
    		<div class="container">
      			<div class="row center">
<?php	
	}
	function escribePie(){
		?>
      			</div>
   			</div>
  		</div>
	</body>
</html>
<?php
	}
 ?>

		
        			

					