<?php

class BaseDatos{

//atributos
    public $usuarioBD="root";
    public $passwordBD="";
    
//constructor
    public function __construct(){}


//metodos
    public function conectarBD(){

        try{
        $datosDB="mysql:host=localhost;dbname=bd_productos";
        $conexionBD= new PDO($datosDB,$this->usuarioBD,$this->passwordBD);
        
       return($conexionBD);
        } 
        
        catch (PDOException $error)
        {
            echo($error->getMessage());      
        }

    }

       public function agregarDatos($consultasSQL){
        
        //establecer conexion
        $conexionBD=$this->conectarBD();

        //preparar consulta
        $insertarDatos=$conexionBD->prepare($consultasSQL);

        //ejecutar la consulta
        $resultado=$insertarDatos->execute();

        //verifico el resultado

        if ($resultado){
            echo("Producto agregado");
        }
        else{
            echo("error");
        }   
    }

    public function consultarDatos($consultasSQL)
    {
        //establecer la conexion
        $conexionBD=$this->conectarBD();
        
        //preparar consulta
        $consultarDatos=$conexionBD->prepare($consultasSQL);

        //establecer el metodo de consulta
        $consultarDatos->setFetchMode(PDO::FETCH_ASSOC);

        //ejecutar la operacion en la db
        $consultarDatos->execute();

        //retorne los datos consultados
        return($consultarDatos->fetchAll());

    }

    public function eliminarDatos($consultasSQL)
    {
        //establecer la conexion
        $conexionBD=$this->conectarBD();

        //preparar consulta
        $eliminarDatos=$conexionBD->prepare($consultasSQL);

        //ejecutar la consulta
        $resultado=$eliminarDatos->execute();

        //verifico el resultado

        if ($resultado){
            echo("Producto Eliminado");
        }
        else{
            echo("Error");
        }  
    }

    public function editarDatos($consultasSQL)
    {
                //establecer la conexion
                $conexionBD=$this->conectarBD();

                //preparar consulta
                $editarDatos=$conexionBD->prepare($consultasSQL);
        
                //ejecutar la consulta
                $resultado=$editarDatos->execute();
        
                //verifico el resultado
        
                if ($resultado){
                    echo("usuario editado");
                }
                else{
                    echo("error");
                }
    }
}


?>