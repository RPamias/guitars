<?php

include_once 'model/ArticuloDAO.php';
include_once 'model/CategoriaDAO.php';


class DashboardController{

    public function list(){
        $listaarticulos = ArticuloDAO::getAllArticulos();
        $view = 'views/admin/articulos/listado.php';
        include_once 'views/admin/dashboard.php';
    }

    public function addarticle(){
        $listacategorias = CategoriaDAO::getAllCategorias();
        $view = 'views/admin/articulos/add.php';
        include_once 'views/admin/dashboard.php';
    }

    public function editarticle(){
        $listacategorias = CategoriaDAO::getAllCategorias();
        $articulo = ArticuloDAO::getArticuloByID($_GET['id']);
        $view = 'views/admin/articulos/edit.php';
        include_once 'views/admin/dashboard.php';
    }
}