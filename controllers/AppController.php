<?php

namespace Controllers;

use Model\Formulario;
use MVC\Router;

class AppController
{

    public static function index(Router $router)
    {

        $alertas = [];
        $formulario = new Formulario;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $formulario = new Formulario($_POST);

            $alertas = $formulario->validarCampos();

            if (empty($alertas)) {

                $formulario->guardar();
            }
        }

        $alertas = Formulario::getAlertas();
        $router->render('pages/index', [
            'alertas' => $alertas
        ]);
    }

    public static function guardar()
    {
        $formulario = new Formulario($_POST);

        $resultado = $formulario->guardar();

        $respuesta = [
            'resultado' => $resultado
        ];

        echo json_encode($respuesta);
    }

    public static function notfound(Router $router)
    {

        $router->render404();
    }
}
