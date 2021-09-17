<?php

// namespace controllers;

class ApiController {

    // Función que muestra la vista de inicio
    public function inicio() {
        view("inicio");
    }

    // Función para mostrar el formulario de registro
    public function api() {
        Response::json((new Productos())->getAll());
    }
    
    public function productos() {
        
        $arr = [
            array(
                'nombre'=>'p1',
                'precio'=>125.5,
                'img'=>'/asset/imge.jpg'
            ),
            array(
                'nombre'=>'p1',
                'precio'=>'12.5'
            )
            ];

        Response::json($arr);


    }

}
