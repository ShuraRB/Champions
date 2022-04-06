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
    </style>
<?= $this->endSection(); ?>
<!-- End  -->

<!-- CONTENIDO -->
<?= $this->section("contenido") ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h5 class="m-0 font-weight-bold text-primary">Perfil de <?= $nombre_usuario?></h5>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Usuario</th>
                                <th>Rol</th>
                                <th>Estatus</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $contador = 0;
                                $html= '';
                                foreach ($usuarios as $usuario) {
                                    $html.= '
                                        <tr>
                                            <td>'.++$contador.'</td>
                                            <td>'.$usuario->nombre_usuario.' '.$usuario->ap_paterno_usuario.' '.$usuario->ap_materno_usuario.'</td>
                                            <td>'.$usuario->rol.'</td>';
                                            if ($usuario->estatus_usuario != ESTATUS_HABILITADO){
                                                $html.='<td>
                                                        <a href="'.route_to("estatus_usuario", $usuario->id_usuario, ESTATUS_HABILITADO).'" class="btn btn-secondary btn-icon-split btn-sm">
                                                            <span class="icon text-white-50">
                                                                <i class="fa fa-eye-slash"></i>
                                                            </span>
                                                            <span class="text">Deshabilitado</span>
                                                        </a>
                                                    </td>';
                                            }
                                            else{
                                                $html.='<td>
                                                            <a href="'.route_to('estatus_usuario', $usuario->id_usuario, ESTATUS_DESHABILITADO).'" class="btn btn-success btn-icon-split btn-sm">
                                                                <span class="icon text-white-50">
                                                                    <i class="fa fa-eye"></i>
                                                                </span>
                                                                <span class="text">Habilitado</span>
                                                            </a>
                                                        </td>';
                                            }
                                    $html.=' <td>
                                                <a href="'.route_to("detalles_usuario",$usuario->id_usuario).'" class="btn btn-warning btn-icon-split btn-sm">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-info-circle"></i>
                                                    </span>
                                                    <span class="text">Editar</span>
                                                </a>
                                                
                                            </td>
                                        </tr>';
                                }//end foreach
                                echo $html;
                            ?>          
                        </tbody>
                    </table>
                </div>>

                        <div class="text-center">
                            <!-- <a class="btn btn-danger" id="bnt-cancelar" href="<?= route_to('dashboard'); ?>"><i class="fa fa-times"></i> Cancelar</a> -->
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
        document.getElementById("imagen").onchange = function(e) {
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
            $('#form-user-update').bootstrapValidator({
                // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    nombre: {
                        validators: {
                            notEmpty: {
                                message: 'Nombre(s) es requerido'
                            },
                        }//validacion
                    },//end nombre
                    apellido_paterno: {
                        validators: {
                            notEmpty: {
                                message: 'Apellido paterno es requerido'
                            },
                        }//validacion
                    },//end apellido_paterno
                    apellido_materno: {
                        validators: {
                            notEmpty: {
                                message: 'Apellido materno es requerido'
                            },
                        }//validacion
                    },//end apellido_materno
                    sexo: {
                        validators: {
                            notEmpty: {
                                message: 'Sexo es requerido'
                            },
                        }//validacion
                    },//end sexo
                    rol: {
                        validators: {
                            notEmpty: {
                                message: 'Rol es requerido'
                            },
                        }//validacion
                    },//end rol
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'Email es requerido'
                            },
                            emailAddress: {
                                message: 'Email esta mal formado (ejemplo@live.com).'
                            }
                        }//validacion
                    },//end email
                    password: {
                        validators: {
                            // notEmpty: {
                            //     message: 'Contraseña es requerida.'
                            // },
                            stringLength: {
                                min: 6,
                                message: 'La contraseña debe tener como minimo 6 caracteres.'
                            }
                        }
                    },//end password
                    repeatPassword: {
                        validators: {
                            // notEmpty: {
                            //     message: 'Repetir contraseña es requerida.'
                            // },
                            stringLength: {
                                min: 6,
                                message: 'Repetir contraseña debe tener como minimo 6 caracteres.'
                            },
                            identical: {
                                field: 'password',
                                message: 'Repetir contraseña es diferente a la anterior'
                            },
                        }
                    },//end password
                    foto_perfil: {
                        validators: {
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