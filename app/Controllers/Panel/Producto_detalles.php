<?php 
    namespace App\Controllers\Panel;
    use App\Controllers\BaseController;
    use App\Libraries\Permisos;

    class Producto_detalles extends BaseController{

        private $session;
        private $permitido = TRUE;

        public function __construct(){
            //cargar el permiso roles
            helper('permisos_roles_helper');
            //instancia de la sesion
            $session = session();
            //Verifica si el usuario logeado cuenta con los permiso de esta area
            if (acceso_usuario(TAREA_PRODUCTO_DETALLES)) {
                $session->tarea_actual = TAREA_PRODUCTO_DETALLES;
            }//end if 
            else{
                $this->permitido = FALSE;
            }//end else
        }//end constructor

        public function index($id_producto = NULL){
            //verifica si tiene permisos para continuar o no
            if($this->permitido){
                $tabla_producto = new \App\Models\Tabla_producto;
                if($tabla_producto->find($id_producto) == null){
                    mensaje('No se encuentra el producto propocionado.', WARNING_ALERT);
                    return redirect()->to(route_to('usuarios'));
                }//end if no existe el usuario
                else{
                    return $this->crear_vista("panel/producto_detalles", $this->cargar_datos($id_producto));
                }//end else no existe el usuario
            }//end if rol permitido
            else{
                mensaje("No tienes permiso para acceder a este módulo, contacte al administrador", WARNING_ALERT);
                return redirect()->to(route_to('acceso'));
            }//end else rol no permitido
        }//end index

        private function cargar_datos($id_producto = NULL){
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
                                            ? base_url(RECURSOS_CONTENIDO.'Imagenes/Usuarios/'.$session->imagen_usuario) 
                                            : (($session->sexo_usuario == SEXO_FEMENINO) ? base_url(RECURSOS_CONTENIDO.'Imagenes/Usuarios/female.png') : base_url(RECURSOS_CONTENIDO.'Imagenes/Usuarios/male.jpg'));

            //Datos propios por vista y controlador
            $tabla_producto = new \App\Models\Tabla_producto;
            $producto = $tabla_producto->obtener_producto($id_producto);

            //Datos propios por vista y controlador
            $datos['nombre_pagina'] = 'Detalles del producto: '.$producto->modelo;
            $datos['producto'] = $producto;
            // dd($datos['producto']);
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
                $file->move(IMG_DIR_producto, $file_name);
                return $file_name;
            }//end if la imagen cumple con los requisitos
            else{
                mensaje('Tu imagen no cumple con los requisitos solicitados.', DANGER_ALERT);
                return NULL;
            }//end else
        }//end subir_archivo

        private function eliminar_archivo ($file = NULL){
            
            if (!empty($file)) {
                if(file_exists(IMG_DIR_PRODUCTO.'/'.$file)){
                    unlink(IMG_DIR_PRODUCTO.'/'.$file);
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
            $id_producto = $this->request->getPost('id_producto');
            $producto_anterior = $this->request->getPost('producto_anterior');

            ///Cargamos el modelo correspondiente
            $tabla_producto = new \App\Models\Tabla_producto;

            //Declaración del arreglo 
            $producto = array();
            $producto['estatus_producto'] = ESTATUS_HABILITADO;
            $producto['marca'] = $this->request->getPost('marca_producto');
            $producto['modelo'] = $this->request->getPost('modelo_producto');
            $producto['color'] = $this->request->getPost('color_producto');
            $producto['tamaño'] = $this->request->getPost('tamaño_producto');
            $producto['tipo'] = $this->request->getPost('categoria_producto');
            $producto['precio'] = $this->request->getPost('precio_producto');
            $producto['descripcion'] = $this->request->getPost('descripcion_producto');
            $producto['destacado'] = $this->request->getPost('destacado_producto');
            $producto['fecha'] = fecha_actual();
            //verificar si tiene algo el input de file
            if(!empty($this->request->getFile('image_producto')) && $this->request->getFile('image_producto')->getSize() > 0){
                $this->eliminar_archivo($producto_anterior);
                $producto['imagen_producto'] = $this->subir_archivo($this->request->getFile('image_producto'));
            }//end if existe imagen

            if($tabla_producto->update($id_producto, $producto) > 0){
                mensaje("La información del producto ha sido actualizada exitosamente", SUCCESS_ALERT);
                // return redirect()->to(route_to('usuarios'));
                return ($producto['tipo']  != TIPO_PRODUCTO) ? redirect()->to(route_to('dashboard')) : redirect()->to(route_to('dashboard')) ;
            }//end if se actualiza el usuario
            else{
                mensaje("Hubo un error al actualizar la información del producto. Intente nuevamente, por favor", DANGER_ALERT);
                return redirect()->to(route_to('dashboard',$id_producto));
            }//end else se inserta el usuario
            
        }//end editar

    }//End Class producto_detalles
