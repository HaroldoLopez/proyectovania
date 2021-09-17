<?php

if (! function_exists('view')) {
    // Función para llamar al archivo de vista especificado
    function view($view = null, $params = []){
        require_once("../views/".$view.".php");
    }
}


class Response {
    public static function json($data=array()) {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
        return $data;
    }
}
