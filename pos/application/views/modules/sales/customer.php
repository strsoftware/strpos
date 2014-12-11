  <div id="content" style="height:600px;">
    <div id="content-header">
      <div id="breadcrumb"> <a href="<?php echo base_url()?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
      <a href="<?php echo base_url('sales/customer')?>" class="current"><?php echo $title;?></a> </div>
      <h1><?php echo $title;?></h1>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12">
           
        <!--  INICIO DEL CODIGO DE LA VISTA-->

            <div class="widget-box">
              <div class="widget-title">
                <span class="icon"><i class="icon-user"></i></span>
                <h5>Informacion de Cliente</h5>
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
                    <div class="alert alert-dismissable alert-warning">
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


                <form action="<?php echo base_url('sales/customer/'.$accion)?>" method="post" class="form-horizontal">

                  <div class="control-group">
                    <label class="control-label">Nombe de Cliente: *</label>
                    <div class="controls">
                      <input type="text" class="span20" name="pos_client_fullname" placeholder="Nombre del cliente" value="<?php echo $row->pos_client_fullname?>" required="required"/>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Dirección: *</label>
                    <div class="controls">
                      <input type="text" class="span20" name="pos_client_address" placeholder="Dirección del cliente" value="<?php echo $row->pos_client_address?>" required="required"/>
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Nit: *</label>
                    <div class="controls">
                      <input type="text"  class="span20" name="pos_client_nit" placeholder="Nit del cliente" value="<?php echo $row->pos_client_nit?>" required="required"/> 
                    </div>
                  </div>

                  <div class="control-group">
                    <label class="control-label">Teléfono: *</label>
                    <div class="controls">
                      <input type="text" class="span20" name="pos_client_phone" placeholder="Teléfono del cliente" value="<?php echo $row->pos_client_phone?>" required="required"/>
                    </div>
                  </div>

                  <div class="control-group">
                    <div class="controls">
                      <input type="hidden" class="span20" name="pos_client_id" value="<?php echo $row->pos_client_id ?>" required="required"/>
                    </div>
                  </div>
                  
                  <div class="form-actions">
                    <button type="submit" class="btn btn-info"><?php echo $title;?></button>
                    <a href="<?php echo base_url('sales/customer_maintenance')?>" class="btn btn-danger">Regresar</a>
                  </div>

                </form>

              </div>

            </div>



           
        <!--  FIN DEL CODIGO DE LA VISTA-->

        </div>
      </div>
    </div>
  </div>