<?= $this->extend("plantillas/panel_base") ?>
<!-- CSS -->
<?= $this->section("css") ?>
    <!-- BostrapValidator css -->
    <link rel="stylesheet" href="<?= base_url(RECURSOS_CONTENIDO_PLUGINS.'css/boostrapvalidator.min.css');?>">

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
                    <h5 class="m-0 font-weight-bold text-primary">Registrar nuevo producto</h5>
                    <h6>Todos los campos marcados con (<font color="red">*</font>) son obligatorios</h6>
                </div>
                <div class="card-body">
                    <?= form_open_multipart('registrar_producto',['id' => 'form-user-register','class' => 'user']); ?>
                        <div class="row">
                            <div class="col-lg-12">
                                <center>
                                    <?php
                                        $img = array(
                                                        'id' => 'img-preview',
                                                        'src'    => base_url(RECURSOS_CONTENIDO_IMAGE.'icons/producto-balon.jpg'),
                                                        'alt'    => 'producto_para_balon',
                                                        'class'  => 'img-profile rounded-circle',
                                                        'height' => '150px',
                                                    );
                                        echo img($img);
                                    ?>
                                </center>
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
                                        echo form_dropdown('marca_producto', [''=>'Selecciona una marca para el pproducto']+MARCA_PRODUCTO, set_value('marca_producto'), $select);
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="text-dark" for="">Módelo del producto (<font color="red">*</font>):</label>
                                    <?php
                                        $input = array(
                                            'type' => 'text',
                                            'id' => 'modelo-producto',
                                            'name' => 'modelo_producto',
                                            'class' => 'form-control form-control-user',
                                            'placeholder' => 'Módelo del producto',
                                            'value' => set_value('modelo_producto')
                                        );
                                        echo form_input($input);
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="text-dark" for="">Color del producto (<font color="red">*</font>):</label>
                                    <?php
                                        $input = array(
                                            'type' => 'text',
                                            'id' => 'color-producto',
                                            'name' => 'color_producto',
                                            'class' => 'form-control form-control-user',
                                            'placeholder' => 'Color del producto',
                                            'value' => set_value('color_producto')
                                        );
                                        echo form_input($input);
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">                       
                                <div class="form-group">
                                    <label class="text-dark" for="">Talla del producto (<font color="red">*</font>):</label><br>
                                    <?php
                                        $input = array(
                                            'type' => 'text',
                                            'id' => 'talla-producto',
                                            'name' => 'talla_producto',
                                            'class' => 'form-control form-control-user',
                                            'placeholder' => 'Talla del producto',
                                            'value' => set_value('talla_producto')
                                        );
                                        echo form_input($input);
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-4">                       
                                <div class="form-group">
                                    <label class="text-dark" for="">Categoría del producto (<font color="red">*</font>):</label>
                                    <?php
                                        $select = array('class' => 'form-control form-select',
                                                            'id' => 'categoria-producto'
                                                            );
                                        echo form_dropdown('categoria_producto', [''=>'Selecciona una categoría para el producto']+TIPO_PRODUCTO, set_value('categoria_producto'), $select);
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-4">                       
                                <div class="form-group">
                                    <label class="text-dark" for="">Precio del producto (<font color="red">*</font>):</label>
                                    <?php
                                        $input = array(
                                            'type' => 'number',
                                            'id' => 'precio-producto',
                                            'name' => 'precio_producto',
                                            'class' => 'form-control form-control-user',
                                            'placeholder' => '0000.00',
                                            'min' => '1',
                                            'value' => set_value('precio_calzado')
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
                                        echo form_dropdown('destacado_producto', [''=>'Selecciona una opción para el producto']+CALZADO_DESTACADO, set_value('destacado_calzado'), $select);
                                    ?>   
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="text-dark" for="">Descripción (<font color="red">*</font>):</label>
                                    <?php
                                        $input = array(
                                            'id' => 'descripcion-area',
                                            'name' => 'descripcion_calzado',
                                            'placeholder' => 'Escribe aquí la descripción de tu calzado...',
                                            'class' => 'form-control',
                                            'rows' => '2',
                                        );
                                        echo form_textarea($input);
                                    ?>      
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="text-dark" for="">Imagen del calzado (<font color="red">*</font>):</label>
                                    <?php
                                        $input = array(
                                            'type' => 'file',
                                            'id' => 'imagen-calzado',
                                            'name' => 'image_calzado',
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
                                                    'content' => '<i class="fa fa-lg fa-save"></i> Registrar',
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
                    // marca_calzado
                    // modelo_calzado
                    // color_calzado
                    // talla_calzado
                    // categoria_calzado
                    // precio_calzado
                    // image_calzado
                    marca_calzado: {
                        validators: {
                            notEmpty: {
                                message: 'La marca del calzado es requerida'
                            },
                        }//validacion
                    },//end 
                    modelo_calzado: {
                        validators: {
                            notEmpty: {
                                message: 'Módelo del calzado es requerido'
                            },
                        }//validacion
                    },//end 
                    color_calzado: {
                        validators: {
                            notEmpty: {
                                message: 'Color del calzado es requerido'
                            },
                        }//validacion
                    },//end 
                    talla_calzado: {
                        validators: {
                            notEmpty: {
                                message: 'Talla del calzado es requerida'
                            },
                        }//validacion
                    },//end 
                    categoria_calzado: {
                        validators: {
                            notEmpty: {
                                message: 'La categoría del calzado es requerida'
                            },
                        }//validacion
                    },//end 
                    precio_calzado: {
                        validators: {
                            notEmpty: {
                                message: 'Precio del calzado es requerida'
                            },
                        }//validacion
                    },//end 
                    destacado_calzado: {
                        validators: {
                            notEmpty: {
                                message: 'Precio del calzado es requerida'
                            },
                        }//validacion
                    },//end 
                    descripcion_calzado: {
                        validators: {
                            notEmpty: {
                                message: 'Descripción del calzado es requerida'
                            },
                        }//validacion
                    },//end 
                    image_calzado: {
                        validators: {
                            notEmpty: {
                                message: 'La imagen del calzado es requerida'
                            },
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