  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="<?php echo base_url()?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      <a href="<?php echo base_url('administration/enterprise/'.$accion.'/'.$row->pos_client_id)?>" class="current"><?php echo $title;?></a> </div>
    <!--  <h1><?php echo $title;?></h1> -->
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12">
           
        <!--  INICIO DEL CODIGO DE LA VISTA-->


            <a href="<?php echo base_url('administration/enterprise/crear')?>" class="btn btn-warning">Nueva Empresa</a>


            <div class="widget-box">
              <div class="widget-title">
                <span class="icon"><i class="icon-home"></i></span>
                <h5>Datos de la Empresa</h5>
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

                <form action="<?php echo base_url('administration/enterprise/'.$accion)?>" method="post" class="form-horizontal" name="form">

                  <div class="control-group">
                    <div class="controls">
                      <input type="hidden" tabindex="7" class="span20" name="pos_enterprise_id" value="<?php echo $row->pos_enterprise_id ?>" required="required"/>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Nombe de la Empresa: <span class="obligatorio">*</span></label>
                    <div class="controls">
                      <input type="text" tabindex="1" class="span20" name="pos_enterprise_name" placeholder="Nombre de la empresa" value="<?php echo $row->pos_enterprise_name?>" required="required"/>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Dirección:<span class="obligatorio">*</span></label>
                    <div class="controls">
                      <input type="text" tabindex="2" class="span20" name="pos_enterprise_address" placeholder="Dirección de la empresa" value="<?php echo $row->pos_enterprise_address?>" required="required"/>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Nit: <span class="obligatorio">*</span></label>
                    <div class="controls">
                      <input type="text" tabindex="3" class="span20" name="pos_enterprise_nit" placeholder="Nit de la empresa" value="<?php echo $row->pos_enterprise_nit?>" required="required"/> 
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Teléfono: <span class="obligatorio">*</span></label>
                    <div class="controls">
                      <input type="text" tabindex="4" class="span20" name="pos_enterprise_phone" placeholder="Teléfono de la empresa" value="<?php echo $row->pos_enterprise_phone?>" required="required"/>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Website: </label>
                    <div class="controls">
                      <input type="text" tabindex="4" class="span20" name="pos_enterprise_website" placeholder="http://empresaejemplo.com" value="<?php echo $row->pos_enterprise_website?>"/>
                    </div>
                  </div>
                  
                  <div class="form-actions">
                    <button type="submit" tabindex="5" class="btn btn-info str-btn"><?php echo $title;?></button>
                    <a tabindex="6" href="<?php echo base_url('administration/enterprise')?>" class="btn btn-danger str-btn">Salir</a>
                  </div>

                </form>

              </div>

            </div>



           
        <!--  FIN DEL CODIGO DE LA VISTA-->

        </div>
      </div>
    </div>
  </div>