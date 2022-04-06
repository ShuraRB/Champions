<?php 
    namespace App\Controllers\Panel;
    use App\Controllers\BaseController;
    use App\Libraries\Permisos;

    class Catalogo_balon extends BaseController{

        private $session;
        private $permitido = TRUE;

        public function __construct(){
            //cargar el permiso roles
            helper('permisos_roles_helper');
            //instancia de la sesion
            $session = session();
            //Verifica si el usuario logeado cuenta con los permiso de esta area
            if (acceso_usuario(TAREA_CATALOGO_BALON)) {
                $session->tarea_actual = TAREA_CATALOGO_BALON;
            }//end if 
            else{
                $this->permitido = FALSE;
            }//end else
            
        }//end constructor

        public function index(){
            //verifica si tiene permisos para continuar o no
            // dd($this->permitido);
            if($this->permitido){
                // dd($this->permitido);
                return $this->crear_vista("panel/catalogo_samsung", $this->cargar_datos());
            }//end if rol permitido
            else{
                mensaje("No tienes permiso para acceder a este módulo, contacte al administrador", WARNING_ALERT);
                return redirect()->to(route_to('acceso'));
            }//end else rol no permitido
        }//end index

        private function cargar_datos(){
            //======================================================================
            //==========================DATOS FUNDAMENTALES=========================
            //======================================================================
            //Declaración del arreglo
            $datos = array();
            //Instancia de la variable de sesión
            $session = session();

            //Datos fundamentales para la plantilla base
            $datos['nombre_completo_usuario'] = $session->usuario_completo;
            $datos['nombre_usuario'] = $session->nombre_usuario;
            $datos['email_usuario'] = $session->email_usuario;
            $datos['imagen_usuario'] = ($session->imagen_usuario != NULL) 
                                            ? base_url(RECURSOS_CONTENIDO.'imagenes/usuarios/'.$session->imagen_usuario) 
                                            : (($session->sexo_usuario == SEXO_FEMENINO) ? base_url(RECURSOS_CONTENIDO.'imagenes/usuarios/female.png') : base_url(RECURSOS_CONTENIDO.'imagenes/usuarios/male.jpg'));
            
            //Datos propios por vista y controlador
            $datos['nombre_pagina'] = 'Catalogo Samsung';

            //Cargamos el modelo correspondiente
            $tabla_celulares = new \App\Models\Tabla_celulares;
            $datos['celulares_samsung'] = $tabla_celulares->data_table_celulares(MARCA_CELULAR_SAMSUNG);

            return $datos;
        }//end cargar_datos

        private function crear_vista($nombre_vista, $contenido = array()){
            $contenido['menu'] = crear_menu_panel(TAREA_CATALOGO, TAREA_CATALOGO_SAMSUNG);
            return view($nombre_vista, $contenido);
        }//end crear_vista

        private function eliminar_archivo ($file = NULL){
            if (!empty($file)) {
                if(file_exists(IMG_DIR_CELULARES.'/'.$file)){
                    unlink(IMG_DIR_CELULARES.'/'.$file);
                    return TRUE;
                }//end if
            }//end if is_null
            else{
                return FALSE;
            }//end else is_null
        }//end eliminar_archivo

        // -----------------------------------------------------
        // -----------------------------------------------------
        public function eliminar($id_celular = 0) {
            //Cargamos el modelo correspondiente
            $tabla_celulares = new \App\Models\Tabla_celulares;
            //Query
            $celular = $tabla_celulares->obtener_celular($id_celular); 
            if (!empty($celular)) {
                //Borra la imagen del usuario en caso de que tenga
                $this->eliminar_archivo($celular->imagen_celular);
                //Se va a eliminar el usuario
                if($tabla_celulares->delete($id_celular)) {
                    mensaje("El celular ha sido eliminado exitosamente", SUCCESS_ALERT);
                }//end if eliminar
                else {
                    mensaje("Hubo un error al eliminar el celular, intenta nuevamente", DANGER_ALERT);
                }//end else

            }//end if count
            else {
                mensaje("El celular que deseas eliminar no existe", WARNING_ALERT);
            }//end else count
            //redirecciona al modulo de usuarios
            return redirect()->to(route_to('catalogo_samsung_panel'));
        }//end eliminar

    }//End Class Catalogo_samsung
