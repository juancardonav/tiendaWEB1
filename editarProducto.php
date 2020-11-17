<?php
include("BaseDatos.php");

//1. crear el objeto

$transaccion=new BaseDatos();

//2. Recibir Datos
    if(isset($_POST["botonEditar"]))
    {
            //3. Recibir el id que quiero editar

            $id=$_GET["id"];
            $producto=$_POST['nombreEditar'];
            $valor=$_POST['valorEditar'];

            //4. consultar para editar un registro
            $consultaSQl="UPDATE productos_bike SET nombre='$producto',valor='$valor' WHERE id='$id'";

            //5. Utilizar el metodo editar
            $transaccion->editarDatos($consultaSQl);
    }

    // redireccionar

    header("location:listaProductos.php");

?>