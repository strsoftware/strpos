  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="<?php echo base_url()?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      <a href="<?php echo base_url('administration/modules')?>" class="current">Módulos</a> </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12">
           
        <!--  INICIO DEL CODIGO DE LA VISTA-->


          <a href="<?php echo base_url('administration/modules/crear')?>" class="btn btn-warning">Nuevo Módulo</a>

          <div class="widget-box">
            <div class="widget-title">
              <span class="icon"><i class="icon-th-list"></i></span> 
              <h5>Módulos</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th style="width:8%;">CÓDIGO</th>
                    <th style="width:15%;">NOMBRE</th>
                    <th style="width:10%;">URL</th>
                    <th style="width:31%;">DESCRIPCIÓN</th>
                    <th style="width:10%;">CLASIFICACIÓN</th>
                    <th style="width:6%;">POSICIÓN</th>
                    <th style="width:10%;">ESTATUS</th>
                    <th style="width:10%;">ACCIONES</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    if (isset($result)) {
                      foreach ($result as $row) {
                  ?>
                  <tr class="gradeA">
                    <td><?php echo $row->pos_module_id?></td>
                    <td><?php echo $row->pos_module_name?></td>
                    <td><?php echo $row->pos_module_url?></td>
                    <td><?php echo $row->pos_module_description?></td>
                    <td><?php echo $row->pos_module_classification_name?></td>
                    <td><?php echo $row->pos_module_position?></td>
                    <td><?php echo $row->pos_module_status_name?></td>
                    <td>
                      <div class="str-pagination">
                        <ul>
                          <li><a href="<?php echo base_url('administration/modules/editar/'.$row->pos_module_id)?>" title="Editar"><i class="icon-edit"></i></a></li>
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