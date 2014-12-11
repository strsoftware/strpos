  <div id="content" style="height:600px;">
    <div id="content-header">
      <div id="breadcrumb"> <a href="<?php echo base_url()?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      <a href="<?php echo base_url('sales/customer_maintenance')?>" class="current">Mantenimiento de Clientes</a> </div>
      <h1>Mantenimiento de Clientes</h1>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12">
           
        <!--  INICIO DEL CODIGO DE LA VISTA-->

          <a href="<?php echo base_url('sales/customer')?>" class="btn btn-info">Agregar Cliente</a>

          <div class="widget-box">
            <div class="widget-title">
              <span class="icon"><i class="icon-th"></i></span> 
              <h5>Datos de Clientes</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th style="width:10%;">Código</th>
                    <th style="width:30%;">Nombre</th>
                    <th style="width:30%;">Dirección</th>
                    <th style="width:10%;">Nit</th>
                    <th style="width:10%;">Teléfono</th>
                    <th style="width:10%;">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    if (isset($result)) {
                      foreach ($result as $row) {
                  ?>
                  <tr class="gradeA">
                    <td><?php echo $row->pos_client_id?></td>
                    <td><?php echo $row->pos_client_fullname?></td>
                    <td><?php echo $row->pos_client_address?></td>
                    <td><?php echo $row->pos_client_nit?></td>
                    <td><?php echo $row->pos_client_phone?></td>
                    <td>
                      <a href="<?php echo base_url('sales/customer/editar/'.$row->pos_client_id)?>" class="btn btn-default btn-mini" title="Editar"><i class="icon-edit"></i></a>
                      <a href="#" class="btn btn-default btn-mini" title="Eliminar"><i class="icon-trash"></i></a>
                    </td>
                  </tr>
                  <?php
                      }
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>


        <!--  FIN DEL CODIGO DE LA VISTA-->

        </div>
      </div>
    </div>
  </div>