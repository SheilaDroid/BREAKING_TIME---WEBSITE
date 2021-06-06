<?php
class BaseDatos
{

// atibutos de clase

    public $conexion; //guardar el id de la conexion
    public $servidor = "127.0.0.1"; //dominio o ip
    public $usuario = "root";
    public $contrasena = "";
    public $nombreDB = "breakingtime";

//generar la conexion a la base datos a través del constructor

    public function __construct()
    {

        if ($GLOBALS['conexion'] = new mysqli($this->servidor, $this->usuario, $this->contrasena, $this->nombreDB)) {
        } else {
        }

    }

    //guardar usuario
    public function gurdar_usuario($nombre,$correo,$password,$sexo,$tipo){
        
        $sentenciasql = "insert into usuarios (nombre,correo,password,sexo,tipo) values ('$nombre','$correo','$password','$sexo','$tipo')";  

        try {
            $GLOBALS['conexion']->query($sentenciasql); //método que genera accion
    
            //echo "datos guardados correctamente";
        } catch (mysqli_sql_exception $ex) {
            echo $ex;
        }

    }
        //borrar usuario por nombre
        public function borrar_artFavoritoNombre($nombre){
            if ($GLOBALS['conexion']->query("delete from usuarios where  nombre='$nombre'")) {
                echo "usuario borrado con exito";
            } else {
                echo "error al borrar usuario";
            }
        }

        //borrar usuario por id
        public function borrar_artFavoritoId($id_usuario){
            if ($GLOBALS['conexion']->query("delete from usuarios where  id='$id_usuario'")) {
                echo "usuario borrado con exito";
            } else {
                echo "error al borrar usuario";
            }
        }


    //mostrar articulos favoritos
    public function consulta_artFavoritos(){
        if ($consulta = $GLOBALS['conexion']->query("select * from artFavoritos")) {
            echo "éxito consulta";
        } else {
            echo "Error consulta";
        }
        return $consulta; //retorna consulta para imprimir en html
    }
    
    //guardar articulos favoritos 
    public function agregar_articulo($id_usuario,$id_articulo){
        $sentenciasql = "insert into artfavoritos (idUsuario,idArticulo) values ('$id_usuario','$id_articulo')";   
        try {
            $GLOBALS['conexion']->query($sentenciasql); //método que genera accion
    
            //echo "datos guardados correctamente";
        } catch (mysqli_sql_exception $ex) {
            echo $ex;
        }
    
    }
    //borrra articulo de favoritos
    public function borrar_artFavorito($id_usuario,$id_articulo){

        if ($GLOBALS['conexion']->query("delete from artFavoritos where  idUsuario='$id_usuario' and idArticulo= '$id_articulo'")) {
            echo "articulo favorito borrado con exito";
        } else {
            echo "error al borrar articulo favorito";
        }
    }

    public function consulta($usuario){
        if($consulta=$GLOBALS['conexion']->query("select * from usuarios where nombre='$usuario'")){
        }else{
        }
        return $consulta;
    }

}
?>