<?php

require_once 'Models/categoriaModels.php';
require_once 'Models/productoModels.php';

class categoriaController{
    
    public function index(){
        require_once 'Views/Categoria/categoria.php';
    }

}