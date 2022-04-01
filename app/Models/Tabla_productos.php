<?php
    namespace App\Models;
    use CodeIgniter\Model;


    class Tabla_productos extends Model {

        protected $table      = 'producto';
        protected $primaryKey = 'id_producto';
        protected $returnType = 'object';

        protected $allowedFields = [
                                    'estatus_producto', 'id_producto', 'marca', 'modelo', 'color', 'tamaño',
                                    'tipo', 'precio', 'imagen_producto', 'destacado', 'descripcion', 'fecha'
                                    ];
        
        //Funciones que nos ayudaran a realizar peticiones (consultas) para obtener la información que deseemos
        public function data_table_productos($tipo_categoria = 0) {
            $resultado = $this
                    ->select('
                                estatus_producto, id_producto, marca, modelo, color, tamaño,
                                tipo, precio, imagen_producto, destacado
                            ')
                    ->where('tipo',$tipo_categoria)
                    ->orderBy('modelo', 'ASC')
                    ->findAll();
             return $resultado;
        }//end data_table_productos

        public function obtener_producto($id_producto = 0){
            $resultado = $this
                        ->select('
                                    estatus_producto, id_producto, marca, modelo, color, tamaño,
                                    tipo, precio, imagen_producto, destacado, descripcion
                                ')
                        ->where('id_producto', $id_producto)
                        ->first();
            return $resultado;
        }//end obtener_producto

        public function productos_limit($limit) {
            $resultado = $this
                ->select('
                            estatus_producto, id_producto, marca, modelo, color, tamaño,
                            tipo, precio, imagen_producto, destacado, descripcion
                        ')
                ->orderBy('modelo', 'ASC')
                ->limit($limit)
                ->find();
            return $resultado;
        }// 

        public function productos_actuales($fecha ='0000-00-00',$limit = 0) {
            $resultado = $this
                ->select('
                            estatus_producto, id_producto, marca, modelo, color, tamaño,
                            tipo, precio, imagen_producto, destacado, descripcion
                        ')
                ->orderBy('modelo', 'ASC')
                ->where('fecha',$fecha)
                ->limit($limit)
                ->find();
            return $resultado;
        }// 

        public function oferta_productos($id_categoria = 0, $limit = 0){
            $resultado = $this
                        ->select('
                                    productos.estatus_producto, productos.id_producto, productos.marca, productos.modelo, productos.color, productos.tamaño,
                                    productos.tipo, productos.precio, productos.imagen_producto, productos.destacado, productos.fecha, ofertas.estatus_ofertas,
                                    ofertas.id_oferta, ofertas.descuento, ofertas.fin_oferta
                                ')
                        ->where('productos.tipo', $id_categoria)
                        ->join('ofertas','productos.id_producto= ofertas.id_producto', 'left')
                        ->limit($limit)
                        ->find();
            return $resultado;
        }//end obtener_oferta_producto

        public function obtener_oferta_productos($id_producto = 0){
            $resultado = $this
                        ->select('
                                    productos.estatus_producto, productos.id_producto, productos.marca, productos.modelo, productos.color, productos.tamaño,
                                    productos.tipo, productos.precio, productos.imagen_producto, productos.destacado, productos.fecha, 
                                    productos.descripcion, ofertas.estatus_ofertas,
                                    ofertas.id_oferta, ofertas.descuento, ofertas.fin_oferta, ofertas.id_producto
                                ')
                        ->where('productos.id_producto', $id_producto)
                        ->join('ofertas','productos.id_producto= ofertas.id_producto', 'left')
                        ->first();
            return $resultado;
        }//end obtener_oferta_producto
    }//End Model productos
    



