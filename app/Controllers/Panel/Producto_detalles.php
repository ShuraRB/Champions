<?php 
    namespace App\Controllers\Panel;
    use App\Controllers\BaseController;
    use App\Libraries\Permisos;

    class Celular_detalles extends BaseController{

        private $session;
        private $permitido = TRUE;

        public function __construct(){
            //cargar el permiso roles
            helper('permisos_roles_helper');
            //instancia de la sesion
            $session = session();
            //Verifica si el usuario logeado cuenta con los permiso de esta area
            if (acceso_usuario(TAREA_CELULAR_DETALLES)) {
                $session->tarea_actual = TAREA_CELULAR_DETALLES;
            }//end if 
            else{
                $this->permitido = FALSE;
            }//end else
        }//end constructor

        public function index($id_celular = NULL){
            //verifica si tiene permisos para continuar o no
            
            if($this->permitido){
                // dd($id_celular);
                $tabla_celulares = new \App\Models\Tabla_celulares;
                if($tabla_celulares->find($id_celular) == null){
                    mensaje('No se encuentra el celular propocionado.', WARNING_ALERT);
                    return redirect()->to(route_to('usuarios'));
                }//end if no existe el usuario
                else{
                   
                    return $this->crear_vista("Panel/celular_detalles", $this->cargar_datos($id_celular));
                }//end else no existe el usuario
            }//end if rol permitido
            else{
                mensaje("No tienes permiso para acceder a este módulo, contacte al administrador", WARNING_ALERT);
                return redirect()->to(route_to('acceso'));
            }//end else rol no permitido
        }//end index

        private function cargar_datos($id_celular = NULL){
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
                                            ? base_url(RECURSOS_CONTENIDO_IMAGE.'/usuarios/'.$session->imagen_usuario) 
                                            : (($session->sexo_usuario == SEXO_FEMENINO) ? base_url(RECURSOS_CONTENIDO_IMAGE.'/usuarios/female.png') : base_url(RECURSOS_CONTENIDO_IMAGE.'/usuarios/male.png'));
            //Cargamos el modelo correspondiente
            $tabla_celulares = new \App\Models\Tabla_celulares;
            $celular = $tabla_celulares->obtener_celular($id_celular);

            //Datos propios por vista y controlador
            $datos['nombre_pagina'] = 'Detalles del celular: '.$celular->modelo;
            $datos['celular'] = $celular;
            // dd($datos['celular']);
            return $datos;
        }//end cargar_datos

        private function crear_vista($nombre_vista, $contenido = array()){
            $contenido['menu'] = crear_menu_panel(TAREA_USUARIO_DETALLES, '');
            return view($nombre_vista, $contenido);
        }//end crear_vista

        private function subir_archivo($file = NULL){
            $file_size = $file->getSize();
            $file_extension = $file->getClientExtension();
            $file_info = \Config\Services::image()
                                        ->withFile($file)
                                        ->getFile()
                                        ->getProperties(true);
            $file_name = (hash("sha256", fecha_actual())).'.'.$file_extension;
            if($file_size <= 2097152 &&
                ($file_extension == 'jpeg' || $file_extension == 'jpg' || $file_extension == 'png') &&
                $file_info['width'] <= 1200 && $file_info['height'] <= 1200){
                $file->move(IMG_DIR_CELULARES, $file_name);
                return $file_name;
            }//end if la imagen cumple con los requisitos
            else{
                mensaje('Tu imagen no cumple con los requisitos solicitados.', DANGER_ALERT);
                return NULL;
            }//end else
        }//end subir_archivo

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
        public function editar() {
            $id_celular = $this->request->getPost('id_celular');
            $celular_anterior = $this->request->getPost('celular_anterior');

            ///Cargamos el modelo correspondiente
            $tabla_celulares = new \App\Models\Tabla_celulares;

            //Declaración del arreglo 
            $celular = array();
            $celular['estatus_celular'] = ESTATUS_HABILITADO;
            $celular['marca'] = $this->request->getPost('marca_celular');
            $celular['compañia'] = $this->request->getPost('compañia_celular');
            $celular['modelo'] = $this->request->getPost('modelo_celular');
            $celular['color'] = $this->request->getPost('color_celular');
            $celular['tamaño'] = $this->request->getPost('tamaño_celular');
            $celular['precio'] = $this->request->getPost('precio_celular');
            $celular['descripcion'] = $this->request->getPost('descripcion_celular');
            $celular['destacado'] = $this->request->getPost('destacado_celular');
            $celular['fecha'] = fecha_actual();
            //verificar si tiene algo el input de file
            if(!empty($this->request->getFile('image_celular')) && $this->request->getFile('image_celular')->getSize() > 0){
                $this->eliminar_archivo($celular_anterior);
                $celular['imagen_celular'] = $this->subir_archivo($this->request->getFile('image_celular'));
            }//end if existe imagen

            if($tabla_celulares->update($id_celular, $celular) > 0){
                mensaje("La información del celular ha sido actualizada exitosamente", SUCCESS_ALERT);
                // return redirect()->to(route_to('usuarios'));
                return ($celular['compañia']  != COMPAÑIA_CELULAR) ? redirect()->to(route_to('catalogo_apple_panel')) : redirect()->to(route_to('catalogo_samsung_panel')) ;
            }//end if se actualiza el usuario
            else{
                mensaje("Hubo un error al actualizar la información del celular. Intente nuevamente, por favor", DANGER_ALERT);
                return redirect()->to(route_to('editar_celular',$id_celular));
            }//end else se inserta el usuario
            
        }//end editar

    }//End Class celular_detalles
