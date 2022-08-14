<?php

namespace Controllers;

use Model\Formulario;
use MVC\Router;

class AppController
{

    public static function index(Router $router)
    {
        $formulario = new Formulario($_POST);

        $alertas = [];

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

            $alertas = $formulario->validarCampos();
    
            if (empty($alertas)) {
                $resultado = $formulario->guardar();
    
                $respuesta = [
                    'resultado' => $resultado
                ];
    
                echo json_encode($respuesta);
            }
        }

        $alertas = Formulario::getAlertas();

        $router->render('pages/index', [
            'alertas' => $alertas
        ]);
    }
}
