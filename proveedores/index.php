<?php

include('../app/config.php');
include('../layout/sesion.php');

include('../layout/parte1.php');


include('../app/controllers/proveedores/listado_de_proveedores.php');


?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Listado de Proveedores
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create">
              <i class="fa fa-plus"></i> Agregar Nuevo
            </button>
          </h1>



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
          <div class="card card-outline card-primary ">
            <div class="card-header">
              <h3 class="card-title">Proveedores Registrados</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body" style=" display: block;">

              <br>
              <table id="example1" class="table table-bordered table-striped table-sm">
                <thead>
                  <tr>
                    <th>
                      <center>Nro</center>
                    </th>
                    <th>
                      <center>Nombre del Proveedor</center>
                    </th>
                    <th>
                      <center>Celular</center>
                    </th>
                    <th>
                      <center>Telefono</center>
                    </th>
                    <th>
                      <center>Empresa</center>
                    </th>
                    <th>
                      <center>Correo</center>
                    </th>
                    <th>
                      <center>Direccion</center>
                    </th>
                    <th>
                      <center>Acciones</center>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $contador = 0;
                  foreach ($proveedores_datos as $proveedores_dato) {
                    $id_proveedor = $proveedores_dato['id_proveedor'];
                    $nombre_proveedor = $proveedores_dato['nombre_proveedor']; ?>
                    <tr>
                      <td>
                        <center><?php echo $contador = $contador + 1; ?></center>
                      </td>
                      <td><?php echo $nombre_proveedor; ?></td>
                      <td>
                        <a href="https://wa.me/+58<?php echo  $proveedores_dato['celular']; ?>" target="_blank" class="btn btn-success">
                        <i class="fa-brands fa-whatsapp"></i>
                        <?php echo  $proveedores_dato['celular']; ?>
                        </a>
                      </td>
                      <td><?php echo  $proveedores_dato['telefono']; ?></td>
                      <td><?php echo  $proveedores_dato['empresa']; ?></td>
                      <td>
                        <a href="https://mail.google.com/mail/<?php echo  $proveedores_dato['email']; ?>" target="_blank" class="btn btn-info">
                        <i class="fa-solid fa-envelope-circle-check"></i>
                        <?php echo  $proveedores_dato['email']; ?>
                        </a>
                      </td>
                      <td><?php echo  $proveedores_dato['direccion']; ?></td>
                      <td>

                        <div class="" btn-group>
                          <button type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#modal-update<?php echo  $id_proveedor; ?>">
                            <i class="fa fa-pencil-alt"></i> Editar
                          </button>
                          <!--modal para actualizar proveedores -->
                          <div class="modal fade" id="modal-update<?php echo  $id_proveedor; ?>">
                            <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                <div class="modal-header" style="background-color: #116f4a; color: white;">
                                  <h4 class="modal-title">Actualizacion del Proveedor</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="">Nombre del Proveedor</label>
                                        <input type="text" id="nombre_proveedor<?php echo  $id_proveedor; ?>" value="<?php echo  $nombre_proveedor; ?>" class="form-control">
                                        <small style="color: red;display: none" id="lbl_nombre<?php echo  $id_proveedor; ?>">* Este campo es requerido</small>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="">Celular</label>
                                        <input type="number" id="celular<?php echo  $id_proveedor; ?>" value="<?php echo  $proveedores_dato['celular']; ?>" class="form-control">
                                        <small style="color: red;display: none" id="lbl_celular<?php echo  $id_proveedor; ?>">* Este campo es requerido</small>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="">Telefono</label>
                                        <input type="number" id="telefono<?php echo  $id_proveedor; ?>" value="<?php echo  $proveedores_dato['telefono']; ?>" class="form-control">

                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="">Empresa</label>
                                        <input type="text" id="empresa<?php echo  $id_proveedor; ?>" value="<?php echo  $proveedores_dato['empresa']; ?>" class="form-control">
                                        <small style="color: red;display: none" id="lbl_empresa<?php echo  $id_proveedor; ?>">* Este campo es requerido</small>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="">Correo</label>
                                        <input type="email" id="email<?php echo  $id_proveedor; ?>" value="<?php echo  $proveedores_dato['email']; ?>" class="form-control">
                                        <small style="color: red;display: none" id="lbl_email<?php echo  $id_proveedor; ?>">* Este campo es requerido</small>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="">Direccion</label>
                                        <textarea name="" id="direccion<?php echo  $id_proveedor; ?>" value="" cols="30" rows="3" class="form-control"><?php echo  $proveedores_dato['direccion']; ?></textarea>
                                        <small style="color: red;display: none" id="lbl_direccion<?php echo  $id_proveedor; ?>">* Este campo es requerido</small>
                                      </div>
                                    </div>
                                  </div>

                                </div>
                                <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                  <button type="button" class="btn btn-success" id="btn_update<?php echo $id_proveedor; ?>">Actualizar</button>

                                </div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                          <!-- /.modal -->
                          <script>
                            $('#btn_update<?php echo $id_proveedor; ?>').click(function() {

                              var id_proveedor = '<?php echo $id_proveedor; ?>';
                              var nombre_proveedor = $('#nombre_proveedor<?php echo $id_proveedor; ?>').val();
                              var celular = $('#celular<?php echo $id_proveedor; ?>').val();
                              var telefono = $('#telefono<?php echo $id_proveedor; ?>').val();
                              var empresa = $('#empresa<?php echo $id_proveedor; ?>').val();
                              var email = $('#email<?php echo $id_proveedor; ?>').val();
                              var direccion = $('#direccion<?php echo $id_proveedor; ?>').val();



                              if (nombre_proveedor == "") {
                                $('#nombre_proveedor<?php echo  $id_proveedor; ?>').focus();
                                $('#lbl_nombre<?php echo  $id_proveedor; ?>').css('display', 'block');
                              } else if (celular == "") {
                                $('#celular<?php echo  $id_proveedor; ?>').focus();
                                $('#lbl_celular<?php echo  $id_proveedor; ?>').css('display', 'block');
                              } else if (empresa == "") {
                                $('#empresa<?php echo  $id_proveedor; ?>').focus();
                                $('#lbl_empresa<?php echo  $id_proveedor; ?>').css('display', 'block');
                              } else if (direccion == "") {
                                $('#direccion<?php echo  $id_proveedor; ?>').focus();
                                $('#lbl_direccion<?php echo  $id_proveedor; ?>').css('display', 'block');
                              } else {
                                var url = "../app/controllers/proveedores/update.php";
                                $.get(url, {
                                  id_proveedor: id_proveedor,
                                  nombre_proveedor: nombre_proveedor,
                                  celular: celular,
                                  telefono: telefono,
                                  empresa: empresa,
                                  email: email,
                                  direccion: direccion
                                }, function(datos) {
                                  $('#respuesta').html(datos);
                                });
                              }

                            });
                          </script>
                          <div id="respuesta_update<?php echo $id_proveedor; ?>"></div>
                        </div>
                        

                        <div class="" btn-group>
                          <button type="button" class="btn btn-danger" data-toggle="modal"
                            data-target="#modal-delete<?php echo  $id_proveedor; ?>">
                            <i class="fa fa-trash"></i> Borrar
                          </button>
                          <!--modal para eliminar proveedores -->
                          <div class="modal fade" id="modal-delete<?php echo  $id_proveedor; ?>">
                            <div class="modal-dialog ">
                              <div class="modal-content">
                                <div class="modal-header" style="background-color:rgb(236, 13, 32); color: white;">
                                  <h4 class="modal-title">¿Esta seguro de Eliminar al Proveedor?</h4>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="">Nombre del Proveedor</label>
                                        <input type="text" id="nombre_proveedor<?php echo  $id_proveedor; ?>" value="<?php echo  $nombre_proveedor; ?>" class="form-control" disabled>
                                        <small style="color: red;display: none" id="lbl_nombre<?php echo  $id_proveedor; ?>">* Este campo es requerido</small>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="">Celular</label>
                                        <input type="number" id="celular<?php echo  $id_proveedor; ?>" value="<?php echo  $proveedores_dato['celular']; ?>" class="form-control" disabled>
                                        <small style="color: red;display: none" id="lbl_celular<?php echo  $id_proveedor; ?>">* Este campo es requerido</small>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="">Telefono</label>
                                        <input type="number" id="telefono<?php echo  $id_proveedor; ?>" value="<?php echo  $proveedores_dato['telefono']; ?>" class="form-control" disabled>

                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="">Empresa</label>
                                        <input type="text" id="empresa<?php echo  $id_proveedor; ?>" value="<?php echo  $proveedores_dato['empresa']; ?>" class="form-control" disabled>
                                        <small style="color: red;display: none" id="lbl_empresa<?php echo  $id_proveedor; ?>">* Este campo es requerido</small>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="">Correo</label>
                                        <input type="email" id="email<?php echo  $id_proveedor; ?>" value="<?php echo  $proveedores_dato['email']; ?>" class="form-control" disabled>
                                        <small style="color: red;display: none" id="lbl_email<?php echo  $id_proveedor; ?>">* Este campo es requerido</small>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="">Direccion</label>
                                        <textarea name="" id="direccion<?php echo  $id_proveedor; ?>" value="" cols="30" rows="3" class="form-control" disabled><?php echo  $proveedores_dato['direccion']; ?></textarea>
                                        <small style="color: red;display: none" id="lbl_direccion<?php echo  $id_proveedor; ?>">* Este campo es requerido</small>
                                      </div>
                                    </div>
                                  </div>

                                </div>
                                <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                  <button type="button" class="btn btn-danger" id="btn_delete<?php echo $id_proveedor; ?>">Eliminar</button>

                                </div>
                                <div id="respuesta_delete<?php echo $id_proveedor; ?>"></div>
                              </div>
                              <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                          </div>
                          <!-- /.modal -->
                          <script>
                            $('#btn_delete<?php echo $id_proveedor; ?>').click(function() {

                              var id_proveedor = '<?php echo $id_proveedor; ?>';
                             
                                var url2 = "../app/controllers/proveedores/delete.php";
                                $.get(url2, {
                                  id_proveedor: id_proveedor,
                                }, function(datos) {
                                  $('#respuesta_delete<?php echo $id_proveedor; ?>').html(datos);
                                });
                              

                            });
                          </script>
                          
                        </div>

                        
                      </td>
                    </tr>
                  <?php

                  }
                  ?>
                </tbody>

              </table>
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

<?php include('../layout/mensajes.php'); ?>
<?php include('../layout/parte2.php'); ?>

<script>
  $(function() {
    $("#example1").DataTable({
      /* cambio de idiomas de datatable */
      "pageLength": 5,
      "language": {
        "emptyTable": "No hay información",
        "decimal": "",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Proveedores",
        "infoEmpty": "Mostrando 0 a 0 de 0 Proveedores",
        "infoFiltered": "(Filtrado de _MAX_ total Proveedores)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Proveedores",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscador:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
          "first": "Primero",
          "last": "Ultimo",
          "next": "Siguiente",
          "previous": "Anterior"
        }
      },
      /* fin de idiomas */
      "responsive": true,
      "lengthChange": true,
      "autoWidth": false,
      /* Ajuste de botones */
      buttons: [{
          extend: 'collection',
          text: 'Reportes',
          orientation: 'landscape',
          buttons: [{
            text: 'Copiar',
            extend: 'copy'
          }, {
            extend: 'pdf',
          }, {
            extend: 'csv',
          }, {
            extend: 'excel',
          }, {
            text: 'Imprimir',
            extend: 'print'
          }]
        },
        {
          extend: 'colvis',
          text: 'Visol de columnas'
        }
      ],
      /*Fin de ajuste de botones*/
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });
</script>

<!--modal para registrar proveedores -->
<div class="modal fade" id="modal-create">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #1d36b6; color: white;">
        <h4 class="modal-title">Creacion de un nuevo Proveedor</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Nombre del Proveedor <b>*</b></label>
              <input type="text" id="nombre_proveedor" class="form-control">
              <small style="color: red;display: none" id="lbl_nombre">* Este campo es requerido</small>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Celular del Proveedor <b>*</b></label>
              <input type="number" id="celular" class="form-control">
              <small style="color: red;display: none" id="lbl_celular">* Este campo es requerido</small>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Telefono de la Empresa </label>
              <input type="number" id="telefono" class="form-control">

            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Nombre de la Empresa <b>*</b></label>
              <input type="text" id="empresa" class="form-control">
              <small style="color: red;display: none" id="lbl_empresa">* Este campo es requerido</small>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Correo </label>
              <input type="email" id="email" class="form-control">

            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="">Direccion <b>*</b></label>
              <textarea name="" id="direccion" cols="30" rows="3" class="form-control"></textarea>
              <small style="color: red;display: none" id="lbl_direccion">* Este campo es requerido</small>
            </div>
          </div>
        </div>



      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="btn_create">Guardar Proveedor</button>

      </div>
      <div id="respuesta"></div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script>
  $('#btn_create').click(function() {
    // alert("Guardar");
    var nombre_proveedor = $('#nombre_proveedor').val();
    var celular = $('#celular').val();
    var telefono = $('#telefono').val();
    var empresa = $('#empresa').val();
    var email = $('#email').val();
    var direccion = $('#direccion').val();


    if (nombre_proveedor == "") {
      $('#nombre_proveedor').focus();
      $('#lbl_nombre').css('display', 'block');
    } else if (celular == "") {
      $('#celular').focus();
      $('#lbl_celular').css('display', 'block');
    } else if (empresa == "") {
      $('#empresa').focus();
      $('#lbl_empresa').css('display', 'block');
    } else if (direccion == "") {
      $('#direccion').focus();
      $('#lbl_direccion').css('display', 'block');
    } else {
      var url = "../app/controllers/proveedores/create.php";
      $.get(url, {
        nombre_proveedor: nombre_proveedor,
        celular: celular,
        telefono: telefono,
        empresa: empresa,
        email: email,
        direccion: direccion
      }, function(datos) {
        $('#respuesta').html(datos);
      });
    }


  });
</script>