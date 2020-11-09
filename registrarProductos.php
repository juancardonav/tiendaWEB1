<?php

include("BaseDatos.php");

if(isset($_POST["botonEnvio"]))
{
    //recibo los datos del formulario
    $producto=$_POST['producto'];
    $marca=$_POST['marca'];
    $valor=$_POST['valor'];
    $descripcion=$_POST['descripcion'];

    //copia u objeto de la clase BD

    $transaccion= new BaseDatos();
    $transaccion->conectarBD();

    //crear consulta
    $consultasSQL="INSERT INTO productos_bike(nombre,marca,valor,descripcion) VALUES ('$producto','$marca','$valor','$descripcion')";

    //llamo al metodo de la clase DB agregarDatos
    $transaccion->agregarDatos($consultasSQL);
 
}


?>