<?php

include ('../app/config.php');
include ('../layout/sesion.php');

include ('../layout/parte1.php');

include ('../app/controllers/almacen/listado_de_productos.php');
include ('../app/controllers/categorias/listado_de_categoria.php');

?>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Registro de nuevo Producto</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
    <div class="card card-primary ">
                  <div class="card-header">
                    <h3 class="card-title">Llene los datos para registrar</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                    </div>
                    <!-- /.card-tools -->
                  </div>

                  <!-- /.card-header -->
                  <div class="card-body" style=" display: block;">
                   <div class="row">
                    <div class="col-md-12">
                        <form action="../app/controllers/almacen/create.php" method="post" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-9">
                            <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Codigo:</label>
                                    <?php
                                    function ceros($numero) {
                                        $len=0;
                                        $cantidad_ceros = 5;
                                        $aux=$numero;
                                        $pos=strlen($numero);
                                        $len=$cantidad_ceros-$pos;
                                        for ($i=0; $i < $len; $i++) { 
                                            $aux="0".$aux;
                                        }
                                        return $aux;
                                    }
                                    $contador_de_id_productos = 1;
                                    foreach ($productos_datos as $productos_dato){ 
                                        $contador_de_id_productos = $contador_de_id_productos +1;
                                      }
                                    ?>
                                    <input type="text"  class="form-control" 
                                           value="<?php echo "P-".ceros($contador_de_id_productos); ?>" disabled>
                                           <input type="text" name="codigo" value="<?php echo "P-".ceros($contador_de_id_productos); ?>" hidden>
                                </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                    <label for="">Categoria:</label>
                                    <div style="display: flex;">
                                    <select name="id_categoria" id="" class="form-control" required>
                                        <?php
                                        foreach ($categorias_datos as $categorias_dato) { ?>
                                            <option value="<?php echo $categorias_dato['id_categoria']; ?>">
                                            <?php echo $categorias_dato['nombre_categoria']; ?>
                                            </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <a href="<?php echo $URL;?>/categorias" class="btn btn-primary"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                    <label for="">Nombre del Producto:</label>
                                    <input type="text" name="nombre" class="form-control" required>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Usuario</label>
                                    <input type="text" class="form-control" name="" id="" value="<?php echo $nombres_sesion;?>" disabled>
                                    <input type="text" name="id_usuario" value="<?php echo $id_usuario_sesion; ?>" hidden>
                                </div>
                            </div>
                            <div class="col-md-8">
                            <div class="form-group">
                                    <label for="">Descripcion del Producto:</label>
                                    <textarea name="descripcion" id="" cols="30" rows="2" class="form-control"></textarea>
                                </div>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="">Stock:</label>
                                    <input type="number" name="stock" class="form-control" required>
                                </div>
                            </div>
                            
                            <div class="col-md-2">
                            <div class="form-group">
                                    <label for="">Stock Minimo:</label>
                                    <input type="number" name="stock_minimo" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-2">
                            <div class="form-group">
                                    <label for="">Stock Maximo:</label>
                                    <input type="number" name="stock_maximo" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-2">
                            <div class="form-group">
                                    <label for="">Precio Compra:</label>
                                    <input type="number" name="precio_compra" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-2">
                            <div class="form-group">
                                    <label for="">Precio Venta:</label>
                                    <input type="number" name="precio_venta" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-2">
                            <div class="form-group">
                                    <label for="">Fecha de Ingreso:</label>
                                    <input type="date" name="fecha_ingreso" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        

                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Imagen del Producto</label>
                                <input type="file"  class="form-control" name="image" id="file">
                                <br>
                                <output id="list"></output>
                                <script>
                                     function archivo(evt) {
                                                  var files = evt.target.files; // FileList object
                                                  // Obtenemos la imagen del campo "file".
                                                 for (var i = 0, f; f = files[i]; i++) {
                                               //Solo admitimos imágenes.
                                              if (!f.type.match('image.*')) {
                                                  continue;
                                                }
                                                 var reader = new FileReader();
                                                 reader.onload = (function (theFile) {
                                               return function (e) {
                                             // Insertamos la imagen
                                             document.getElementById("list").innerHTML = ['<img class="thumb thumbnail" src="',e.target.result, '" width="100%" title="', escape(theFile.name), '"/>'].join('');
                                                };
                                             })(f);
                                              reader.readAsDataURL(f);
                                                 }
                                         }
                                  document.getElementById('file').addEventListener('change', archivo, false);
                                </script>
                            </div>
                            </div>
                        </div>

                        

                        
                            
                            <hr>
                            <div class="form-group">
                                <a href="index.php" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-primary">Guardar Producto</button>
                            </div>
                        </form>
                    </div>
                   </div>
                  </div>
                  <!-- /.card-body -->
                </div>
    </div>
 </div>

<!-- /.row -->
  </div><!-- /.container-fluid -->

      
  </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include ('../layout/mensajes.php');?>
<?php include ('../layout/parte2.php');?>


