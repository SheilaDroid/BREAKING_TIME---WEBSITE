<?php
class BaseDatos
{

    public $conexion; //guardar el id de la conexion
    public $servidor = "127.0.0.1"; //dominio o ip
    public $usuario = "root";
    public $contrasena = "";
    public $nombreDB = "breakingtime";

//generar la conexion a la base datos a través del constructor

    public function __construct()
    {

        if ($GLOBALS['conexion'] = new mysqli($this->servidor, $this->usuario, $this->contrasena, $this->nombreDB)) {
            echo "conexión exitosa";
        } else {
            echo "error de conexion";
        }

    }

    //---------------------------------------------- seccion calificar articulos -------------------------------------------------------
    //calificar articulos 
    public function calificar_articulos($titulo,$likes,$direccion){
        $sentenciasql = "insert into articulos (titulo,likes,direccion) values ('$titulo','$likes,'$direccion')";   
        try {
            $GLOBALS['conexion']->query($sentenciasql); //método que genera accion
    
            //echo "datos guardados correctamente";
        } catch (mysqli_sql_exception $ex) {
            echo $ex;
        }

    }

    //si el articulo ya cuenta con likes se modifica el campo likes
    //modificacion
    public function mod_Nolikes($no_likes, $Id)
    {
        $sentenciasql = "update articulos set likes ='" .$no_likes. "'where id='$Id'";

        if ($GLOBALS['conexion']->query($sentenciasql)) {
            echo "éxito al actualiza likes";
        } else {
            echo "error al actualizar likes";
        }

    }

    //mostrar numero de likes por articulo
    public function consulta_nolikes($Id){
        if ($consulta = $GLOBALS['conexion']->query("select likes from articulos where id= '$Id'")) {
            echo "éxito consulta";
        } else {
            echo "Error consulta";
        }
        return $cantidad_likes; //retorna el numero de likes
    }

    //---------------------------------------------- seccion tabla usuarios -------------------------------------------------------

    //guardar usuario
    public function gurdar_usuario($nombre,$correo,$password,$sexo,$tipo){
        $sentenciasql = "insert into usuarios (nombre,correo,password,sexo,tipo) values ('$nombre','$correo,$password,$tipo')";   
        try {
            $GLOBALS['conexion']->query($sentenciasql); //método que genera accion
    
            //echo "datos guardados correctamente";
        } catch (mysqli_sql_exception $ex) {
            echo $ex;
        }

    }
    //borrar usuario por nombre
    public function borrar_artFavorito($nombre){
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

    //---------------------------------------------- seccion de comentarios -------------------------------------------------------
    //guardar comentarios
    public function guardar_comentarios($id_usuario,$id_articulo,$comentario){
        $sentenciasql = "insert into comentarios (idUsuario,idArticulo,comentario) values ('$id_usuario','$id_articulo,$comentario)";   
        try {
            $GLOBALS['conexion']->query($sentenciasql); //método que genera accion
    
            //echo "datos guardados correctamente";
        } catch (mysqli_sql_exception $ex) {
            echo $ex;
        }

    }

    //borrar comrntario por id 
    public function borrar_comentario($id_comentario){
        if ($GLOBALS['conexion']->query("delete from comentarios where  id='$id_comentario'")) {
            echo "comentario borrado con exito";
        } else {
            echo "error al borrar comentario";
        }
    }

    //---------------------------------------------- seccion articulos favoritos -------------------------------------------------------
     //mostrar articulos favoritos por usuario
    public function consulta_artFavoritos($id_usuario){
        if ($consulta = $GLOBALS['conexion']->query("select * from artFavoritos where idUsuario= '$id_usuario'")) {
            echo "éxito consulta";
        } else {
            echo "Error consulta";
        }
        return $consulta; //retorna consulta para imprimir en html
    }

    //mostrar articulos favoritos por usuario
    public function consulta_favoritos($id_usuario){
        if ($consulta = $GLOBALS['conexion']->query("select idArticulo from artFavoritos where idUsuario= '$id_usuario'")) {
            echo "éxito consulta";
        } else {
            echo "Error consulta";
        }
        return $idArticulo; //retorna los id's de los articulos favoritos por usuario
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

}
?>