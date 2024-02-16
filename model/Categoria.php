<?php

class Categoria {
    private $idcategoria;
    private $nombre;

    public function __construct(){    
    }

    /**
     * Get the value of idcategoria
     */ 
    public function getIdcategoria()
    {
        return $this->idcategoria;
    }

    /**
     * Set the value of idcategoria
     *
     * @return  self
     */ 
    public function setIdcategoria($idcategoria)
    {
        $this->idcategoria = $idcategoria;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getnombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setnombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
}