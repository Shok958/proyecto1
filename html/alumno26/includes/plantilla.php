<?php 
	session_start();
	function escribeCabecera($titulo = "Bienvenido", $color = "red lighten"){
	?>
	<!DOCTYPE html>
	<html >
	<head>
		<meta charset="UTF-8">
		<title>Formulario</title>
        <link rel="stylesheet" href="/html/alumno26/css/bootstrap.min.css">
        <link rel="stylesheet" href="/html/alumno26/css/bootstrap-theme.min.css">
        <script src="/html/alumno26/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .navbar{
                border: none;
                border-radius: 0;
            }
            .footer {
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 60px;
                background-color: black;
            }
        </style>
	</head>
	<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Web</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> <?php if (!empty($_SESSION['user'])) {
                            echo $_SESSION['user']['nombre'];}?></a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span><?php if (!empty($_SESSION['user'])) {
                            echo "Cerrar Sesion";}?></a></li>
            </ul>
        </div>
    </nav>
    		<div class="panel-body">
                <div class="container">
                    <h1><?= $titulo ?></h1>

<?php	
	}
	function escribePie(){
		?>
      			</div>
   			</div>
    <footer class="footer">
        <div class="container-fluid">
            <a href="index.php"><button class="btn btn-primary">Inicio</button></a>
        </div>
    </footer>
	</body>
</html>
<?php
	}
 ?>

		
        			

					