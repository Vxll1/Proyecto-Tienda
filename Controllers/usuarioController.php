<?php

    require_once 'Models/usuarioModels.php';

    class usuarioController{
        public function index(){
            echo "Controlador Usuario, Acción Index";
        }

        public function registro(){
            require_once "Views/Usuario/registro.php";
        }

        public function save(){
            if(isset($_POST)){
                $usuario = new Usuario();
                $usuario->setNombre($_POST['nombre']);
                $usuario->setApellidos($_POST['apellidos']);
                $usuario->setEmail($_POST['email']);
                $usuario->setPassword($_POST['password']);

                // Faltan validaciones

                $save = $usuario->save();
            } 
        }
    }