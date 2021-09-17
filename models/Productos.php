<?php

// Creación del modelo Producto
class Productos {

    // Atributos del modelo
    private $id;
    private $nombre;
    private $precio;

    // Constructor donde se hace la asignación de los atributos
    public function __construct($id="",$nombre="",$precio="") {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    // Función para obtener todos los productos 
    public function getAll(){

        // Se realiza el llamado a la conexión de la base de datos
        $con = DataBase::init();

        // Consulta para seleccionar los productos
        $query = "SELECT * FROM productos";

        // Se verifica que se pueda ejecutar la consulta
        $results = [];
        if ($stmt = $con->prepare($query)) {
            $stmt->execute();
            $result = $stmt->get_result();
            // Se recorre el resultado obtenido y se guarda en la variable
            // results
            while($row = $result->fetch_assoc()){
                $results[] = $row;
            }
        }

        // Se retorna el arreglo a su equivalente JSON
        return $results;

    }


}