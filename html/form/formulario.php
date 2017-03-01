
<?php 
  include "includes/conexion.php";
  $conexion = abrirConexion('localhost','root','123','login');
  include "includes/plantillaformulario.php";
  escribeCabecera("Introduce tus Datos");
  if (isset($_POST['login'])) {
    include "login.php";
  }elseif (isset($_POST['registro'])) {
    include "register.php";
  }
  escribePie();
  cerrarConexion($conexion);
 ?>