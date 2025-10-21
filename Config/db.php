<?php
    class Database{
        public static function connect(){
        // Conexión local
        $db = new mysqli('localhost', 'root', '', 'Tienda');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}
?>