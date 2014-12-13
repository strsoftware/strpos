  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="<?php echo base_url()?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      <a href="<?php echo base_url('purchases/providers/'.$accion.'/'.$row->pos_provider_id)?>" class="current"><?php echo $title;?></a> </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12">
           
        <!--  INICIO DEL CODIGO DE LA VISTA-->


          <a href="<?php echo base_url('purchases/providers/crear')?>" class="btn btn-warning">Nuevo Proveedor</a>


          <div class="widget-box">
            <div class="widget-title">
              <span class="icon"><i class="icon-user"></i></span>
              <h5>Información de Proveedor</h5>
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

              <form action="<?php echo base_url('purchases/providers/'.$accion)?>" method="post" class="form-horizontal" name="form">

                <div class="control-group">
                  <div class="controls">
                    <input type="hidden" tabindex="11" class="span20" name="pos_provider_id" value="<?php echo $row->pos_provider_id ?>" required="required"/>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Nombe de proveedor: <span class="obligatorio">*</span></label>
                  <div class="controls">
                    <input type="text" tabindex="1" class="span20" name="pos_provider_fullname" placeholder="Nombre del proveedor" value="<?php echo $row->pos_provider_fullname?>" required="required"/>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Dirección:<span class="obligatorio">*</span></label>
                  <div class="controls">
                    <input type="text" tabindex="2" class="span20" name="pos_provider_address" placeholder="Dirección del proveedor" value="<?php echo $row->pos_provider_address?>" required="required"/>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Nit: <span class="obligatorio">*</span></label>
                  <div class="controls">
                    <input type="text" tabindex="3" class="span20" name="pos_provider_nit" placeholder="Nit del proveedor" value="<?php echo $row->pos_provider_nit?>" required="required"/> 
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Teléfono: </label>
                  <div class="controls">
                    <input type="text" tabindex="4" class="span20" name="pos_provider_phone" placeholder="Teléfono del proveedor" value="<?php echo $row->pos_provider_phone?>" required="required"/>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Agente o Contácto: </label>
                  <div class="controls">
                    <input type="text" tabindex="5" class="span20" name="pos_provider_agent" placeholder="Agente del proveedor" value="<?php echo $row->pos_provider_agent?>" required="required"/>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Sitio Web: </label>
                  <div class="controls">
                    <input type="text" tabindex="6" class="span20" name="pos_provider_website" placeholder="Sitio Web del proveedor" value="<?php echo $row->pos_provider_website?>"/>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Correo: </label>
                  <div class="controls">
                    <input type="text" tabindex="7" class="span20" name="pos_provider_email" placeholder="correo del proveedor" value="<?php echo $row->pos_provider_email?>"/>
                  </div>
                </div>

                <div class="control-group">
                  <label class="control-label">Estatus: <span class="obligatorio">*</span></label>
                  <div class="controls">
                    <select tabindex="8" class="span20" name="pos_provider_status_id" required="required">
                      <option value="<?php echo $row->pos_provider_status_id?>"><?php echo $row->pos_provider_status_name?></option>
                      <?php foreach ($status as $row) { ?>
                        <option value="<?php echo $row->pos_provider_status_id?>"><?php echo $row->pos_provider_status_name?></option>
                      <?php }?>
                    </select>
                  </div>
                </div>
                
                <div class="form-actions">
                  <button type="submit" tabindex="9" class="btn btn-info str-btn"><?php echo $title;?></button>
                  <a tabindex="10" href="<?php echo base_url('purchases/providers')?>" class="btn btn-danger str-btn">Salir</a>
                </div>

              </form>

            </div>

          </div>



           
        <!--  FIN DEL CODIGO DE LA VISTA-->

        </div>
      </div>
    </div>
  </div>