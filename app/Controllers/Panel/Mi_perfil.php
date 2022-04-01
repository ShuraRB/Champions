<?php
    namespace App\Controllers\Panel;
    use App\Controllers\BaseController;
    class Mi_perfil extends BaseController {

        public function __construct(){

        }//end __construct

        public function index(){
            return $this->crear_vista('panel/mi_perfil',$this->cargar_datos());
        }//end index

        private function cargar_datos(){
        //declaración del arreglo
        $datos = array();
        //
        $datos['nombre_pagina'] = 'Mi perfil';
        //Breadcrumb
		$navegacion = array(
							array(
                          		'icono' => 'home',
                          		'tarea' => 'Dahsboard',
                          		'href' => route_to('dashboard')
                        	),
							array(
                          		'icono' => 'home',
                          		'tarea' => 'Mi perfil',
                          		'href' => '#'
                        	)
                      );
    	$datos['breadcrumb'] = breadcrumb_panel($navegacion);
        return $datos;
        }//end index

        public function crear_vista($nombre_vista = '', $contenido = array()) {
            $contenido['menu'] = crear_menu_panel(TAREA_PERFIL);
            return view($nombre_vista, $contenido);
        }//end crear vista

    }//end class Mi_perfil
