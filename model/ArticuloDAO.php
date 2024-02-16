<?php

include_once 'config/database.php';
include_once 'Articulo.php';

class ArticuloDAO {

    public static function getArticuloByID($id)
    {
        $con = Database::connect();

        $stmt = $con->prepare("SELECT * FROM ARTICULOS WHERE idarticulo = ?");
        $stmt->bind_param('i',$id);
        $stmt->execute();
        $result = $stmt->get_result();

        $articulo = $result->fetch_object('Articulo');

        $con->close();

        return $articulo;
    }

    public static function getAllArticulos() {
        $con = Database::connect();

        $stmt = $con->prepare("SELECT * FROM articulos");
        $stmt->execute();
        $result = $stmt->get_result();

        $listaarticulos=[];

        while($articulo = $result->fetch_object('Articulo')) {
            $listaarticulos[] = $articulo;
 
       }
       $con->close();
       return $listaarticulos;
    }

    public static function add($nombre, $precio, $descripcion ,$idcategoria, $img="gibson.png") {
        $con = Database::connect();
        $stmt = $con->prepare("INSERT INTO articulos (nombre, precio, descripcion, img, idcategoria) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sdssi",$nombre, $precio, $descripcion, $img ,$idcategoria);
        $stmt->execute();
        $con->close();
    }

    public static function edit($id, $nombre, $precio, $descripcion ,$idcategoria){
        $con = Database::connect();
        $stmt = $con->prepare("UPDATE articulos SET nombre = ?, precio = ?, descripcion = ?, idcategoria = ? WHERE idarticulo = ?");
        $stmt->bind_param("sdsii",$nombre, $precio, $descripcion,$idcategoria, $id);
        $stmt->execute(); // return boolean
        //var_dump($stmt -> affected_rows);
        $con->close();
    }

    public static function delete($id) {
        $con = Database::connect();
        $stmt = $con->prepare("DELETE FROM articulos WHERE idarticulo = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $con->close();
    }

    public static function detail($id) {
        $con = Database::connect();
        $stmt = $con->prepare("SELECT * FROM articulos WHERE idarticulo = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $result = $stmt->get_result();
        $articulo = $result->fetch_object('Articulo');
        
        $con->close();
        return $articulo;   
    }
}