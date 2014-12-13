  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="<?php echo base_url()?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      <a href="<?php echo base_url('administration/modules/'.$accion.'/'.$row->pos_enterprise_id)?>" class="current"><?php echo $title;?></a> </div>
    <!--  <h1><?php echo $title;?></h1> -->
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12">
           
        <!--  INICIO DEL CODIGO DE LA VISTA-->


            <a href="<?php echo base_url('administration/modules/crear')?>" class="btn btn-warning">Nuevo Módulo</a>


            <div class="widget-box">
              <div class="widget-title">
                <span class="icon"><i class="icon-th-list"></i></span>
                <h5>Datos del Módulo</h5>
              </div>

              <div class="widget-content nopadding ">

                <?php if (isset($ok)) { ?>
                  <div class="col-lg-12"> 
                    <div class="alert alert-dismissable alert-success">
                      <?php echo $ok;?>
                    </div>
                  </div>
                <?php }else if(isset($error)){?>
                  <div class="col-lg-12"> 
                    <div class="alert alert-dismissable alert-danger">
                      <?php echo $error;?>
                    </div>
                  </div>
                <?php }else{?>
                  <div class="col-lg-12"> 
                    <div class="alert alert-dismissable alert-info">
                      Todos los campos con asterisco ('*') son obligatorios.
                    </div>
                  </div>
                <?php }?>

                <form action="<?php echo base_url('administration/modules/'.$accion)?>" method="post" class="form-horizontal" name="form">

                  <div class="control-group">
                    <div class="controls">
                      <input type="hidden" tabindex="7" class="span20" name="pos_module_id" value="<?php echo $row->pos_module_id ?>" required="required"/>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Nombe del Módulo: <span class="obligatorio">*</span></label>
                    <div class="controls">
                      <input type="text" tabindex="1" class="span20" name="pos_module_name" placeholder="Nombre que se mostrará en el menú" value="<?php echo $row->pos_module_name?>" required="required"/>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Url del Módulo: <span class="obligatorio">*</span></label>
                    <div class="controls">
                      <input type="text" tabindex="1" class="span20" name="pos_module_url" placeholder="controlador/metodo" value="<?php echo $row->pos_module_url?>" required="required"/>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Descripción:<span class="obligatorio">*</span></label>
                    <div class="controls">
                      <input type="text" tabindex="2" class="span20" name="pos_module_description" placeholder="Dirección de la empresa" value="<?php echo $row->pos_module_description?>" required="required"/>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Clasificación:<span class="obligatorio">*</span></label>
                    <div class="controls">
                      <select tabindex="8" class="span20" name="pos_module_classification_id" required="required">
                        <option value="<?php echo $row->pos_module_classification_id?>"><?php echo $row->pos_module_classification_name?></option>
                        <?php foreach ($module as $row1) { ?>
                          <option value="<?php echo $row1->pos_module_classification_id?>"><?php echo $row1->pos_module_classification_name?></option>
                        <?php }?>
                      </select>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Posición:<span class="obligatorio">*</span></label>
                    <div class="controls">
                      <input type="text" tabindex="2" class="span20" name="pos_module_position" placeholder="Espesifique una posición dentro del men" value="<?php echo $row->pos_module_position?>" required="required"/>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Estatus:<span class="obligatorio">*</span></label>
                    <div class="controls">
                      <select tabindex="8" class="span20" name="pos_module_status_id" required="required">
                        <option value="<?php echo $row->pos_module_status_id?>"><?php echo $row->pos_module_status_name?></option>
                        <?php foreach ($status as $row2) { ?>
                          <option value="<?php echo $row2->pos_module_status_id?>"><?php echo $row2->pos_module_status_name?></option>
                        <?php }?>
                      </select>
                    </div>
                  </div>
                  
                  <div class="form-actions">
                    <button type="submit" tabindex="5" class="btn btn-info str-btn"><?php echo $title;?></button>
                    <a tabindex="6" href="<?php echo base_url('administration/modules')?>" class="btn btn-danger str-btn">Salir</a>
                  </div>

                </form>

              </div>

            </div>



           
        <!--  FIN DEL CODIGO DE LA VISTA-->

        </div>
      </div>
    </div>
  </div>