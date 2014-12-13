  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="<?php echo base_url()?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      <a href="<?php echo base_url('sales/customer')?>" class="current">Mantenimiento de Clientes</a> </div>
    <!--  <h1>Mantenimiento de Clientes</h1> -->
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12">
           
        <!--  INICIO DEL CODIGO DE LA VISTA-->


          <a href="<?php echo base_url('sales/customer/crear')?>" class="btn btn-warning">Nuevo Cliente</a>

          <div class="widget-box">
            <div class="widget-title">
              <span class="icon"><i class="icon-th"></i></span> 
              <h5>Datos de Clientes</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th style="width:8%;">CÓDIGO</th>
                    <th style="width:25%;">NOMBRE</th>
                    <th style="width:37%;">DIRECCIÓN</th>
                    <th style="width:10%;">NIT</th>
                    <th style="width:10%;">TELÉFONO</th>
                    <th style="width:10%;">ACCIONES</th>
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
                      <div class="str-pagination">
                        <ul>
                          <li><a href="<?php echo base_url('sales/customer/editar/'.$row->pos_client_id)?>" title="Editar"><i class="icon-edit"></i></a></li>
                          <li><a href="#" title="Eliminar"><i class="icon-trash"></i></a></li>
                        </ul>
                      </div>
                      
                      
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