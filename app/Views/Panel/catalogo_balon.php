<?= $this->extend("plantillas/panel_base") ?>
<!-- CSS -->
<?= $this->section("css") ?>
    <link href="<?= base_url(RECURSOS_PANEL_VENDOR.'datatables/dataTables.bootstrap4.min.css');?>" rel="stylesheet">
<?= $this->endSection(); ?>
<!-- End  -->

<!-- CONTENIDO -->
<?= $this->section("contenido") ?>
    <!-- Content Row -->
    <a class="btn btn-primary" style="margin-bottom: 15px;" href="<?= route_to('nuevo_producto');?>">
        <i class="fa fa-plus" aria-hidden="true"></i>
       Nuevo Balon
    </a>
    <!-- <div class="row"> -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Nuestro producto registrado para balon</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Producto</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Tamaño</th>
                                <th>Precio</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Producto</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Tamaño</th>
                                <th>Precio</th>
                                <th>Acción</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                                $contador = 0;
                                $html= '';
                                foreach ($productos_balon as $producto_balon) {
                                    $html.='
                                        <tr>
                                            <td>'.++$contador.'</td>
                                            <td><img src="'.base_url(IMG_DIR_PRODUCTOS.$producto_balon->imagen_producto).'" alt="imagen_producto" height="120px"></td>
                                            <td>'.MARCA_PRODUCTO[$producto_balon->marca].'</td>
                                            <td>'.$producto_balon->modelo.'</td>
                                            <td>'.$producto_balon->tamaño.'</td>
                                            <td>$'.$producto_balon->precio.'</td>
                                            <td>
                                                <a href="'.route_to("detalles_producto",$producto_balon->id_producto).'" class="btn btn-warning btn-icon-split btn-sm">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-info-circle"></i>
                                                    </span>
                                                    <span class="text">Editar</span>
                                                </a><br>
                                                <a href="'.route_to("eliminar_producto_balon",$producto_balon->id_producto).'" class="btn btn-danger btn-icon-split btn-sm">
                                                    <span class="icon text-white-50">
                                                        <i class="fa fa-trash"></i>
                                                    </span>
                                                    <span class="text">Eliminar</span>
                                                </a><br>
                                                <a href="'.route_to("oferta_nueva",$producto_balon->id_producto).'" class="btn btn-info btn-icon-split btn-sm">
                                                    <span class="icon text-white-50">
                                                        <i class="fa fa-tag"></i>
                                                    </span>
                                                    <span class="text">Oferta</span>
                                                </a>
                                            </td>
                                        </tr>
                                    ';
                                }
                                echo $html;
                            ?>          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!-- </div> -->
<?= $this->endSection(); ?>
<!-- End  -->

<!-- JS -->
<?= $this->section("js") ?>
<!-- Page level plugins -->
    <script src="<?= base_url(RECURSOS_PANEL_VENDOR.'/datatables/jquery.dataTables.min.js');?>"></script>
    <script src="<?= base_url(RECURSOS_PANEL_VENDOR.'/datatables/dataTables.bootstrap4.min.js');?>"></script>
    <script>
        // Call the dataTables jQuery plugin
        $(document).ready(function() {
            $('#dataTable').DataTable({
               'processing': true,
                "responsive": true,
                "scrollX": true,
                "language": {
                    "lengthMenu": "Mostrar _MENU_ datos",
                    "info": "Página _PAGE_ de _PAGES_",
                    "infoEmpty": "Datos no disponibles por el momento",
                    "processing":     "Procesando ...",
                    "search":         "Buscar:",
                    "zeroRecords":    "Datos no disponibles por el momento",
                    "paginate": {
                    "first":      "Primera",
                    "last":       "Última",
                    "next":       "Siguiente",
                    "previous":   "Anterior"
                    },
                }//End languagee 
            });
        });
    </script>
<?= $this->endSection(); ?>
<!-- End  -->