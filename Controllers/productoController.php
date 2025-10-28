<?php
    require_once 'Models/productoModels.php';

    class productoController {
        public function index() {
            $producto = new Producto();
            $productos = $producto->getRandom(6);

            require_once 'Views/Producto/destacados.php';
        }
    }