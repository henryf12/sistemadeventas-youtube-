<?php

include('app/config.php');
include('layout/sesion.php');

include('layout/parte1.php');

include('app/controllers/usuarios/listado_de_usuarios.php');
include('app/controllers/roles/listado_de_roles.php');
include('app/controllers/almacen/listado_de_productos.php');
include('app/controllers/categorias/listado_de_categoria.php');
include('app/controllers/proveedores/listado_de_proveedores.php');
include('app/controllers/compras/listado_de_compras.php');

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">BIENVENIDO AL SISTEMA DE INFORMACION - <?php echo $rol_sesion ?></h1>
        </div><!-- /.col -->

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">


      <br><br>

      <div class="row">


        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small card -->
          <div class="small-box bg-warning">
            <div class="inner">
              <?php
              $contador_de_usuarios = 0;
              foreach ($usuarios_datos as $usuarios_datos) {
                $contador_de_usuarios = $contador_de_usuarios + 1;
              } ?>

              <h3><?php echo $contador_de_usuarios; ?></h3>
              <p>Usuarios Registrados</p>
            </div>
            <a href="<?php echo $URL; ?>/usuarios/create.php">
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
            </a>
            <a href="<?php echo $URL; ?>/usuarios" class="small-box-footer">
              Mas Informacion <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>


        <div class="col-lg-3 col-6">
          <!-- small card -->
          <div class="small-box bg-info">
            <div class="inner">
              <?php
              $contador_de_roles = 0;
              foreach ($roles_datos as $roles_datos) {
                $contador_de_roles = $contador_de_roles + 1;
              } ?>

              <h3><?php echo $contador_de_roles; ?></h3>
              <p>Roles Registrados</p>
            </div>
            <a href="<?php echo $URL; ?>/roles/create.php">
              <div class="icon">
                <i class="fas fa-address-card"></i>
              </div>
            </a>
            <a href="<?php echo $URL; ?>/roles" class="small-box-footer">
              Mas Informacion <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <!-- small card -->
          <div class="small-box bg-primary">
            <div class="inner">
              <?php
              $contador = 0;
              foreach ($categorias_datos as $categorias_datos) {
                $contador = $contador + 1;
              } ?>

              <h3><?php echo $contador; ?></h3>
              <p>Categorias Registradas</p>
            </div>
            <a href="<?php echo $URL; ?>/categorias/index.php">
              <div class="icon">
                <i class="fas fa-tags"></i>
              </div>
            </a>
            <a href="<?php echo $URL; ?>/categorias" class="small-box-footer">
              Mas Informacion <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>


        <div class="col-lg-3 col-6">
          <!-- small card -->
          <div class="small-box bg-success">
            <div class="inner">
              <?php
              $contador_de_id_productos = 0;
              foreach ($productos_datos as $productos_dato) {
                $contador_de_id_productos = $contador_de_id_productos + 1;
              } ?>

              <h3><?php echo $contador_de_id_productos; ?></h3>
              <p>Productos Registrados</p>
            </div>
            <a href="<?php echo $URL; ?>/almacen/create.php">
              <div class="icon">
                <i class="fa fa-list"></i>
              </div>
            </a>
            <a href="<?php echo $URL; ?>/almacen" class="small-box-footer">
              Mas Informacion <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <!-- small card -->
          <div class="small-box bg-danger">
            <div class="inner">
              <?php
              $contador_de_id_proveedores = 0;
              foreach ($proveedores_datos as $proveedores_datos) {
                $contador_de_id_proveedores = $contador_de_id_proveedores + 1;
              } ?>

              <h3><?php echo $contador_de_id_proveedores; ?></h3>
              <p>Proveedores Registrados</p>
            </div>
            <a href="<?php echo $URL; ?>/proveedores/index.php">
              <div class="icon">
                <i class="nav-icon fa fa-regular fa-truck"></i>
              </div>
            </a>
            <a href="<?php echo $URL; ?>/proveedores" class="small-box-footer">
              Mas Informacion <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <!-- small card -->
          <div class="small-box bg-success">
            <div class="inner">
              <?php
              $contador_nro_compra = 0;
              foreach ($compras_datos as $compras_dato) {
                $contador_nro_compra = $contador_nro_compra + 1;
              } ?>

              <h3><?php echo $contador_nro_compra; ?></h3>
              <p>Compras Registradas</p>
            </div>
            <a href="<?php echo $URL; ?>/compras/create.php">
              <div class="icon">
                <i class="nav-icon fas fa-cart-plus"></i>
              </div>
            </a>
            <a href="<?php echo $URL; ?>/compras" class="small-box-footer">
              Mas Informacion <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <h5>viene el video 77</h5>
        <!-- ./col -->
      </div>


      <!-- ./col -->
    </div>


    <!-- /.row -->
  </div><!-- /.container-fluid -->


</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->



<?php include('layout/parte2.php'); ?>