<?php

function recuperar_campo($campo, $array_datos){
    if(isset($array_datos[$campo])){
        echo ' value="' . $array_datos[$campo] . '" ';
    }
}

function recuperar_campo_textarea($campo, $array_datos){
    if (isset($array_datos[$campo])) {
        echo $array_datos[$campo];
    }
}


function conexion(){
    $conexion = mysqli_connect( "localhost", "root", "123", "agenda2" )
        or die("Problema al conectar con la base de datos");
    return $conexion;
}

function cerrar_conexion($c){
    mysqli_close($c);
}


function mostrar_errores($array_errores){
    echo '<ul class="listaerrores">';
    foreach($array_errores as $id => $error){
        echo "<li>$error</li>";
    }
    echo "</ul>";
}