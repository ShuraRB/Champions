<?= $this->extend("plantillas/panel_base") ?>
<!-- CSS -->
<?= $this->section("css") ?>
    <!-- BostrapValidator css -->
    <link rel="stylesheet" href="<?= base_url(RECURSOS_CONTENIDO.'Plugins/css/boostrapvalidator.min.css');?>">

    <!-- Show the validation -->
    <style>
        .has-error .help-block{
            line-height: 45px;
            color: red;
        }
        .has-error input{
            border-color: red !important;
        }
        .has-success input{
            border-color: green !important;
        }
        .has-error select{
            border-color: red !important;
        }
        .has-success select{
            border-color: green !important;
        }
        .has-error textarea{
            border-color: red !important;
        }
        .has-success textarea{
            border-color: green !important;
        }
    </style>
<?= $this->endSection(); ?>
<!-- End  -->

<!-- CONTENIDO -->
<?= $this->section("contenido") ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">Editar Producto</h5>
                    <h6>Todos los campos marcados con (<font color="red">*</font>) son obligatorios</h6>
                </div>
                <div class="card-body">
                    <?= form_open_multipart('editar_producto',['id' => 'form-user-register','class' => 'user']); ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <center>
                                    <?php
                                        $img = array(
                                                        'id' => 'img-preview',
                                                        'src'    => base_url(RECURSOS_CONTENIDO.'imagenes/productos/'.$producto->imagen_producto),
                                                        'alt'    => 'Producto_img',
                                                        'class'  => 'img-profile',
                                                        'height' => '150px',
                                                    );
                                        echo img($img);
                                        echo form_input(['type' => 'hidden', 'name' => 'producto_anterior', 'value' => $producto->imagen_producto]);
                                        echo form_input(['type' => 'hidden', 'name' => 'id_producto', 'value' => $producto->id_producto]);
                                    ?>
                                </center><br>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="text-dark" for="">Marca (<font color="red">*</font>):</label>
                                    <?php
                                        $select = array('class' => 'form-control form-select',
                                                            'id' => 'marca-producto'
                                                            );
                                        echo form_dropdown('marca_producto', [''=>'Selecciona una marca para el producto']+MARCA_PRODUCTO, $producto->marca, $select);
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="text-dark" for="">Módelo del Producto (<font color="red">*</font>):</label>
                                    <?php
                                        $input = array(
                                            'type' => 'text',
                                            'id' => 'modelo-producto',
                                            'name' => 'modelo_producto',
                                            'class' => 'form-control form-control-user',
                                            'placeholder' => 'Módelo del producto',
                                            'value' => $producto->modelo
                                        );
                                        echo form_input($input);
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="text-dark" for="">Color del Producto (<font color="red">*</font>):</label>
                                    <?php
                                        $input = array(
                                            'type' => 'text',
                                            'id' => 'color-producto',
                                            'name' => 'color_producto',
                                            'class' => 'form-control form-control-user',
                                            'placeholder' => 'Color del producto',
                                            'value' => $producto->color
                                        );
                                        echo form_input($input);
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">                       
                                <div class="form-group">
                                    <label class="text-dark" for="">Tamaño del Producto (<font color="red">*</font>):</label><br>
                                    <?php
                                        $input = array(
                                            'type' => 'text',
                                            'id' => 'tamaño-producto',
                                            'name' => 'tamaño_producto',
                                            'class' => 'form-control form-control-user',
                                            'placeholder' => 'tamaño del producto',
                                            'value' => $producto->tamaño
                                        );
                                        echo form_input($input);
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-4">                       
                                <div class="form-group">
                                    <label class="text-dark" for="">Tipo de Producto (<font color="red">*</font>):</label>
                                    <?php
                                        $select = array('class' => 'form-control form-select',
                                                            'id' => 'categoria-producto'
                                                            );
                                        echo form_dropdown('categoria_producto', [''=>'Selecciona una categoría para el producto']+TIPO_PRODUCTO, $producto->tipo, $select);
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-4">                       
                                <div class="form-group">
                                    <label class="text-dark" for="">Precio del Producto (<font color="red">*</font>):</label>
                                    <?php
                                        $input = array(
                                            'type' => 'number',
                                            'id' => 'precio-producto',
                                            'name' => 'precio_producto',
                                            'class' => 'form-control form-control-user',
                                            'placeholder' => '0000.00',
                                            'min' => '1',
                                            'step' => '0.01',
                                            'value' => $producto->precio
                                        );
                                        echo form_input($input);
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="text-dark" for="">Destacado (<font color="red">*</font>):</label>
                                    <?php
                                        $select = array('class' => 'form-control form-select',
                                                            'id' => 'destacado-producto'
                                                            );
                                        echo form_dropdown('destacado_producto', [''=>'Selecciona una opción para el producto']+PRODUCTO_DESTACADO, $producto->destacado, $select);
                                    ?>   
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="text-dark" for="">Descripción (<font color="red">*</font>):</label>
                                    <?php
                                        $input = array(
                                            'id' => 'descripcion-area',
                                            'name' => 'descripcion_producto',
                                            'placeholder' => 'Escribe aquí la descripción de tu producto...',
                                            'class' => 'form-control',
                                            'rows' => '4',
                                            'value' => $producto->descripcion
                                        );
                                        echo form_textarea($input);
                                    ?>      
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="text-dark" for="">Imagen del producto (<font color="blue">Opcional</font>):</label>
                                    <?php
                                        $input = array(
                                            'type' => 'file',
                                            'id' => 'imagen-producto',
                                            'name' => 'image_producto',
                                            'class' => 'form-control',
                                        );
                                        echo form_input($input);
                                    ?>      
                                </div>
                            </div>
                        </div>

                        <div class="text-center">
                            <a class="btn btn-danger" id="bnt-cancelar" href="<?= route_to('catalogo_balon_panel'); ?>"><i class="fa fa-times"></i> Cancelar</a>
                            <?php
                                $btn_submit = array(
                                                    'name'    => 'btn_submit',
                                                    'id'      => 'btn-submit',
                                                    'value'   => 'true',
                                                    'type'    => 'submit',
                                                    'class' => 'btn btn-success',
                                                    'content' => '<i class="fa fa-lg fa-save"></i> Editar',
                                                );
                                echo form_button($btn_submit);
                            ?>
                        </div>

                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>
<!-- End  -->

<!-- JS -->
<?= $this->section("js") ?>
    <!-- Js boostrap Validation -->
    <script type="text/javascript" src="<?= base_url(RECURSOS_CONTENIDO_PLUGINS.'js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url(RECURSOS_CONTENIDO_PLUGINS.'js/bostrap-validator.min.js')?>"></script>
    <!--  -->
    <script type="text/javascript">
        document.getElementById("imagen-producto").onchange = function(e) {
            // Se crea un objeto FileReader
            let reader = new FileReader();
            // Se leé el archivo seleccionado y se pasa como argumento al objeto FileReader
            reader.readAsDataURL(e.target.files[0]);
            // Se visualiza la imagen una vez que fue cargada en el objeto FileReader
            reader.onload = function(){
                let imgPreview = document.getElementById('img-preview');
                imgPreview.src = reader.result;
            };
        }
    </script>
    <!-- Form validation -->
    <script>
        $(document).ready(function () {
            $('#form-user-register').bootstrapValidator({
                // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    marca_producto: {
                        validators: {
                            notEmpty: {
                                message: 'La marca del producto es requerida'
                            },
                        }//validacion
                    },//end 
                    modelo_producto: {
                        validators: {
                            notEmpty: {
                                message: 'Módelo del producto es requerido'
                            },
                        }//validacion
                    },//end 
                    color_producto: {
                        validators: {
                            notEmpty: {
                                message: 'Color del producto es requerido'
                            },
                        }//validacion
                    },//end 
                    tamaño_producto: {
                        validators: {
                            notEmpty: {
                                message: 'Tamaño del producto es requerida'
                            },
                        }//validacion
                    },//end 
                    categoria_producto: {
                        validators: {
                            notEmpty: {
                                message: 'El tipo de producto es requerida'
                            },
                        }//validacion
                    },//end 
                    precio_producto: {
                        validators: {
                            notEmpty: {
                                message: 'Precio del producto es requerida'
                            },
                        }//validacion
                    },//end 
                    destacado_producto: {
                        validators: {
                            notEmpty: {
                                message: 'Precio del producto es requerida'
                            },
                        }//validacion
                    },//end 
                    descripcion_producto: {
                        validators: {
                            notEmpty: {
                                message: 'Descripción del producto es requerida'
                            },
                        }//validacion
                    },//end 
                    image_producto: {
                        validators: {
                            // notEmpty: {
                            //     message: 'La imagen del producto es requerida'
                            // },
                            file: { 
                                extension: 'jpeg,jpg,png',
                                type: 'image/jpeg,image/png',
                                // maxSize: 2048 * 1024,
                                message: 'El archivo seleccionado no es valido'
                            }
                        }
                    }
                }//end fields
            });
        });
    </script>
<?= $this->endSection(); ?>
<!-- End  -->