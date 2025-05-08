<?php

include ('../app/config.php');
include ('../layout/sesion.php');

include ('../layout/parte1.php');


include ('../app/controllers/roles/listado_de_roles.php');


?>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0">Listado de roles</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
  <div class="container-fluid">
 <div class="row">
    <div class="col-md-6">
    <div class="card card-outline card-primary ">
                  <div class="card-header">
                    <h3 class="card-title">Roles Registrados</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                    </div>
                    <!-- /.card-tools -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body" style=" display: block;">
                   
                    <br>
                    <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                        <th><center>Nro</center></th>
                        <th><center>Nombre del Rol</center></th>
                        <th><center>Acciones</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $contador = 0;
                    foreach ($roles_datos as $roles_datos){ 
                      $id_rol = $roles_datos['id_rol']; ?>
                    <tr>
                        <td><center><?php echo $contador = $contador + 1;?></center></td>
                        <td><?php echo $roles_datos['rol'];?></td>
                        
                        <td>
                          <center>
                          <div class = ""btn-group>
                            
                            <a href="update.php?id=<?php echo $id_rol; ?>" type="button" class="btn btn-success"><i class="fa fa-pencil-alt"></i> Editar</a>
                            
                          </center>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                    </tbody>
                  <tfoot>
                  <tr>
                  <th><center>Nro</center></th>
                        <th><center>Nombre del Rol</center></th>
                        <th><center>Acciones</center></th>
                    </tr>
                  </tfoot>
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

<?php include ('../layout/mensajes.php');?>
<?php include ('../layout/parte2.php');?>

<script>
 $(function () {
    $("#example1").DataTable({
      /* cambio de idiomas de datatable */
      "pageLength": 5,
          "language": {
              "emptyTable": "No hay información",
              "decimal": "",
              "info": "Mostrando _START_ a _END_ de _TOTAL_ Roles",
              "infoEmpty": "Mostrando 0 a 0 de 0 Roles",
              "infoFiltered": "(Filtrado de _MAX_ total Roles)",
              "infoPostFix": "",
              "thousands": ",",
              "lengthMenu": "Mostrar _MENU_ Roles",
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
      "responsive": true, "lengthChange": true, "autoWidth": false,
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
                        }
                        ]
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
