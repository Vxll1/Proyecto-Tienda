<?php
    class Categoria{
        private $id;
        private $nombre;
        private $db;

        public function __construct(){
            $this->db = Database::connect();
        }

        // Getter
        function getId(){
            return $this->id;
        }

        function getNombre(){
            return $this->nombre;
        }

        // Setter
        function setId($id){
            $this->id = $id;
        }

        function setNombre($nombre){
            $this->nombre = $nombre;
        }
    }
    


?>