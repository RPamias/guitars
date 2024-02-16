<?php

include_once 'config/database.php';
include_once 'Categoria.php';

class CategoriaDAO {

    public static function getAllCategorias()
    {
        $con = Database::connect();

        $stmt = $con->prepare("SELECT * FROM categoria");
        $stmt->execute();
        $result = $stmt->get_result();

        $listacategorias = [];

        while ($categorias = $result->fetch_object('Categoria')) {
            $listacategorias[] = $categorias;
        }

        $con->close();
        return $listacategorias;
    }

}