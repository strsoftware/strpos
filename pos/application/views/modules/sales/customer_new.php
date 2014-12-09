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
           
        <div class="container-fluid">
            <div class="row-fluid">
          <div class="span12">
            <div class="widget-box">
              <div class="widget-title">
                <span class="icon">
                  <i class="icon-align-justify"></i>                  
                </span>
                <h5>Informacion de Cliente</h5>
              </div>
              <div class="widget-content nopadding">
                <form action="<?php echo base_url('sales/customer_new_success')?>" method="post" class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label">Nombe de Cliente :</label>
                    <div class="controls"><input type="text" class="span20" name="pos_client_fullname"  placeholder="Ingrese Nombre" /></div>
                  </div>
                    <div class="control-group">
                    <label class="control-label">Direccion :</label>
                    <div class="controls"><input type="text" class="span20" name="pos_client_address" placeholder="Ingrese Direccion" /></div>
                  </div>
                  <div class="control-group">
                    <label class="control-label">Nit :</label>
                    <div class="controls">
                      <input type="text"  class="span6" name="pos_client_nit" placeholder="Ingrese Nit"  /> 
                  </div>
                     <div class="control-group">
                    <label class="control-label">Telefono :</label>
                    <div class="controls">
                    <input type="text" class="span20" name="pos_client_phone" placeholder="Ingrese telefono" /></div>
                  </div>

                  <div class="control-group">
                    
                    <div class="controls"><input type="hidden" class="span20" name="pos_user_id" value="<?php echo $_SESSION['pos_user_id'] ?>" placeholder="Ingrese telefono" readonly="readonly" /></div>
                  </div>
                  
                  <div class="form-actions">
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <button type="submit" class="btn btn-success">regresar</button>
                  </div>
                </form>
              </div>
            </div>            
          </div>
        </div>

           
        <!--  FIN DEL CODIGO DE LA VISTA-->

        </div>
      </div>
    </div>
  </div>