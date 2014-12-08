	<div id="logo">
    <img src="<?php echo base_url()?>assets/img/login-logo.png" alt="" />
  </div>
  
  <div id="loginbox">            
    
    <form id="loginform" class="form-vertical" action="<?php echo base_url('login/success')?>" method="post">
      <div class="control-group normal_text"><h3>STRATTON POS</h3></div>
      <div class="control-group normal_text title-login" >
      	<?php if(isset($error)){?>
          <div class="alert alert-block alert-danger">
            <h5><?php echo $error;?></h5>
          </div>
        <?php }else{?>
        	<div class="alert alert-block alert-info">
          	<h5>Por favor ingrese sus datos</h5>
          </div>
        <?php }?>
      </div>

        <div class="control-group">
          <div class="controls">
            <div class="main_input_box">
              <span class="add-on"><i class="icon-user"></i></span>
              <input type="text" placeholder="Username" name="Username" />
            </div>
          </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on"><i class="icon-lock"></i></span>
                    <input type="password" placeholder="Password" name="Password" />
                </div>
            </div>
        </div>
        <div class="form-actions">
            <span class="pull-left"><a href="#" class="flip-link btn btn-warning" id="to-recover">Perdio su passwordd?</a></span>
            <span class="pull-right"><input type="submit" class="btn btn-success" value="Entrar" /></span>
        </div>
    </form>

    <form id="recoverform" action="#" class="form-vertical">
			<p class="normal_text">Ingrese su email para que podamos <br/><font color="#FF6633">recuperar su password.</font></p>
      <div class="controls">
        <div class="main_input_box">
          <span class="add-on"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
        </div>
      </div>
         
      <div class="form-actions">
        <span class="pull-left"><a href="#" class="flip-link btn btn-warning" id="to-login">&laquo; Regresar al Login</a></span>
        <span class="pull-right"><input type="submit" class="btn btn-info" value="Recuperar" /></span>
      </div>
    </form>

  </div>