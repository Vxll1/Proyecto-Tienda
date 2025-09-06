<?php
    class Database{
        // Conexión local
        $db = new msqly('localhost', 'root', '', 'Tienda');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }



?>