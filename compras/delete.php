<?php

include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');

include('../app/controllers/almacen/listado_de_productos.php');
include('../app/controllers/proveedores/listado_de_proveedores.php');
include('../app/controllers/compras/cargar_compra.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Compra Nro <?php echo $nro_compra; ?></h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-danger ">
                                <div class="card-header">
                                    <h3 class="card-title">¿Esta seguro de eliminar la compra?</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                        </button>
                                    </div>

                                </div>


                                <div class="card-body" style=" display: block;">
                                    
                                    <div class="row" style="font-size: 12px;">

                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input type="text" value="<?= $id_producto; ?>" id="id_producto" hidden>
                                                        <label for="">Codigo:</label>
                                                        <input type="text" class="form-control" value="<?= $codigo; ?>" id="codigo" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Categoria:</label>
                                                        <div style="display: flex;">
                                                            <input type="text" value="<?= $nombre_categoria; ?>" class="form-control" id="categoria" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Nombre del Producto:</label>
                                                        <input type="text" value="<?=$nombre_producto ;?>" name="nombre" id="nombre_producto" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Usuario</label>
                                                        <input type="text" value="<?=$nombres_usuario; ?>" class="form-control" name="" id="usuario_producto" disabled>

                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="">Descripcion del Producto:</label>
                                                        <textarea name="descripcion"  id="descripcion_producto"  cols="30" rows="2" class="form-control" disabled><?=$descripcion; ?></textarea>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="">Stock:</label>
                                                        <input type="number" value="<?=$stock; ?>" id="stock" name="stock" class="form-control" style="background-color:rgb(247, 238, 64);" disabled>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="">Stock Minimo:</label>
                                                        <input type="number" value="<?=$stock_minimo; ?>" id="stock_minimo" name="stock_minimo" class="form-control" disabled>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="">Stock Maximo:</label>
                                                        <input type="number" value="<?=$stock_maximo; ?>" id="stock_maximo" name="stock_maximo" class="form-control" disabled>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="">Precio Compra:</label>
                                                        <input type="number" value="<?=$precio_compra_producto; ?>" id="precio_compra" name="precio_compra" class="form-control" disabled>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="">Precio Venta:</label>
                                                        <input type="number" value="<?=$precio_venta_producto; ?>" id="precio_venta" name="precio_venta" class="form-control" disabled>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="">Fecha de Ingreso:</label>
                                                        <input type="date" style="font-size: 11px;" value="<?=$fecha_ingreso; ?>" id="fecha_ingreso" name="fecha_ingreso" class="form-control" disabled>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Imagen del Producto</label>
                                                <hr>
                                                <center>
                                                    <img src="<?php echo $URL . "/almacen/img_productos/" . $imagen; ?>"  id="img_producto" width="75%" alt="">
                                                </center>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    <div style="display: flex;">
                                        <h5>Datos del Proveedor</h5>
                                        
                                        </div>
                                    <hr>

                                    <div class="container-fluid" style="font-size: 12px;">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" id="id_proveedor" hidden>
                                                    <label for="">Nombre del Proveedor </label>
                                                    <input type="text" value="<?=$nombre_proveedor_tabla; ?>" id="nombre_proveedor" class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Celular del Proveedor </label>
                                                    <input type="number" value="<?=$celular_proveedor; ?>" id="celular" class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Telefono de la Empresa </label>
                                                    <input type="number" value="<?=$telefono_proveedor;?>" id="telefono" class="form-control" disabled>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Nombre de la Empresa </label>
                                                    <input type="text" value="<?=$empresa; ?>" id="empresa" class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Correo </label>
                                                    <input type="email" value="<?=$email_proveedor; ?>" id="email" class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Direccion </label>
                                                    <textarea name="" id="direccion" cols="30" rows="3" class="form-control" disabled><?=$direccion_proveedor; ?></textarea>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>




                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">


                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-outline card-danger">
                                <div class="card-header">
                                    <h3 class="card-title">Detalle de la compra</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Numero de la Compra</label>
                                                <input type="text" value="<?php echo $id_compra_get; ?>" class="form-control" style="text-align: center" disabled>
                                                <input type="text" value="<?php echo $id_compra_get; ?>" id="nro_compra" hidden>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Fecha de la Compra</label>
                                                <input type="date" value="<?=$fecha_compra; ?>" id="fecha_compra" class="form-control" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Comprobante de la Compra</label>
                                                <input type="text" value="<?=$comprobante; ?>" class="form-control" id="comprobante" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Precio de la Compra</label>
                                                <input type="text" value="<?=$precio_compra; ?>" id="precio_compra_controlador" class="form-control" disabled>
                                            </div>
                                        </div>

                                        

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Cantidad de la Compra</label>
                                                <input type="number" value="<?=$cantidad; ?>" id="cantidad_compra" style="text-align: center;" class="form-control" disabled>
                                            </div>
                                            
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Usuario</label>
                                                <input type="text" class="form-control" value="<?php echo $nombres_usuario; ?>" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button class="btn btn-danger btn-block" id="btn_eliminar"><i class="fa fa-trash"></i> Eliminar</button>
                                            </div>
                                        </div>

                                        <div id="respuesta_delete"></div>

                                        <script>
                                            $('#btn_eliminar').click(function () {
                                                var id_compra = '<?php echo $id_compra_get; ?>';
                                                var id_producto = $('#id_producto').val();
                                                var cantidad_compra = '<?= $cantidad; ?>';
                                                var stock_actual = '<?= $stock; ?>';

                                                Swal.fire({
                                                    title: '¿Está seguro de eliminar la compra?',
                                                    icon: 'question',
                                                    showCancelButton: true,
                                                    confirmButtonColor: '#3085d6',
                                                    cancelButtonColor: '#d33',
                                                    confirmButtonText: 'Si deseo eliminar'
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        Swal.fire(
                                                            eliminar(),
                                                            'Compra eliminada',
                                                            'success'

                                                        )
                                                    }
                                                });

                                                function eliminar() {
                                                    var url = "../app/controllers/compras/delete.php";
                                                    $.get(url,{id_compra:id_compra,id_producto:id_producto,cantidad_compra:cantidad_compra,stock_actual:stock_actual},function (datos) {
                                                        $('#respuesta_delete').html(datos);
                                                    });
                                                }
                                            });
                                        </script>

                                    </div>
                                    <hr>
                                    
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>

                    </div>


                </div>
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include('../layout/mensajes.php'); ?>
<?php include('../layout/parte2.php'); ?>

