  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="<?php echo base_url()?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      <a href="<?php echo base_url('purchases/provider/'.$accion.'/'.$row->pos_provider_id)?>" class="current"><?php echo $title;?></a> </div>
    <!--  <h1><?php echo $title;?></h1> -->
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12">
           
        <!--  INICIO DEL CODIGO DE LA VISTA-->


            <a href="<?php echo base_url('sales/provider/crear')?>" class="btn btn-warning">Nuevo Proveedor</a>


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

                <form action="<?php echo base_url('purchases/provider/'.$accion)?>" method="post" class="form-horizontal" name="form">

                  <div class="control-group">
                    <div class="controls">
                      <input type="hidden" tabindex="7" class="span20" name="pos_provider_id" value="<?php echo $row->pos_provider_id ?>" required="required"/>
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
                      <input type="text" tabindex="4" class="span20" name="pos_provider_phone" placeholder="Teléfono del proveedor" value="<?php echo $row->pos_provider_phone?>"/>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Agente: </label>
                    <div class="controls">
                      <input type="text" tabindex="4" class="span20" name="pos_provider_agent" placeholder="Agente del proveedor" value="<?php echo $row->pos_provider_agent?>"/>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Sitio Web: </label>
                    <div class="controls">
                      <input type="text" tabindex="4" class="span20" name="pos_provider_website" placeholder="Sitio Web del proveedor" value="<?php echo $row->pos_provider_website?>"/>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Correo: </label>
                    <div class="controls">
                      <input type="text" tabindex="4" class="span20" name="pos_provider_email" placeholder="correo del proveedor" value="<?php echo $row->pos_provider_email?>"/>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Estado: </label>
                    <div class="controls">
                      <input type="text" tabindex="4" class="span20" name="pos_provider_status_id" placeholder="Teléfono del proveedor" value="<?php echo $row->pos_provider_phone?>"/>
                    </div>
                  </div>
                  
                  <div class="form-actions">
                    <button type="submit" tabindex="5" class="btn btn-info str-btn"><?php echo $title;?></button>
                    <a tabindex="6" href="<?php echo base_url('purchases/provider')?>" class="btn btn-danger str-btn">Salir</a>
                  </div>

                </form>

              </div>

            </div>



           
        <!--  FIN DEL CODIGO DE LA VISTA-->

        </div>
      </div>
    </div>
  </div>