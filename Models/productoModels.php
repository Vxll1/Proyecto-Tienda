<?php
class Producto{

    private $id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
    private $oferta;
    private $fecha;
    private $imagen;
    private $id_categoria;

    private $db;

    public function __construct(){
        $this->db = Database::connect();           
        }

    //Getters
    function getId(){
        return $this->id;
    }
    
    function getNombre(){
        return $this->nombre;
    }

    function getDescripcion(){
        return $this->descripcion;
    }

    function getPrecio(){
        return $this->precio;
    }

    function getStock(){
        return $this->stock;
    }

    function getOferta(){
        return $this->oferta;
    }

    function getFecha(){
        return $this->fecha;
    }

    function getImagen(){
        return $this->imagen;
    }

    function getCategoria(){
        return $this->categoria;
    }

    //Setters
    function setId($id){
        $this->id = $id;
    }

    function setNombre($nombre){
        $this->nombre = $nombre;
    }

    function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    function setPrecio($precio){
        $this->precio = $precio;
    }

    function setStock($stock){
        $this->stock = $stock;
    }

    function setOferta($oferta){
        $this->oferta = $oferta;
    }

    function setFecha($fecha){
        $this->fecha = $fecha;
    }

    function setImagen($imagen){
        $this->imagen = $imagen;
    }

    function setIdCategoria($id_categoria){
        $this->id_categoria = $id_categoria;
    }

    public function getAll(){
        $productos = $this->db->query("SELECT * FROM t_productos ORDER BY id_producto DESC;");
        return $productos;
    }
}