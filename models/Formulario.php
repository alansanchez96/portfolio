<?php 

namespace Model;

class Formulario extends ActiveRecord {

    protected static $tabla = 'formulario';
    protected static $columnasDB = ['id','email','nombre','mensaje'];

    public $id;
    public $email;
    public $nombre;
    public $mensaje;

    public function __construct( $args = [] )
    {
        $this->id = $args['id'] ?? null;
        $this->email = $args['email'] ?? '';
        $this->nombre = $args['nombre'] ?? '';
        $this->mensaje = $args['mensaje'] ?? '';
    }

    public function validarCampos(){
        if(!$this->email){
            self::$alertas['error'][] = 'El Email no puede estar vacío';
        }
        if(!$this->nombre){
            self::$alertas['error'][] = 'El nombre no puede estar vacío';
        }
        if(!$this->mensaje){
            self::$alertas['error'][] = 'El mensaje no puede estar vacío';
        }

        return self::$alertas;
    }

}