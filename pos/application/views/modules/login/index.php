	<div id="logo">
    <img src="<?php echo base_url()?>assets/img/login-logo.png" class="img-responsive" />
  </div>
  
  <div id="loginbox">            
    
    <form id="loginform" class="form-vertical" action="<?php echo base_url('login/success')?>" method="post">
      <div class="control-group normal_text"><img src="<?php echo base_url('assets/img/logo_login.png')?>" class="img-responsive" /></div>
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
            <span class="pull-right"><input type="submit" class="btn btn-success" value="Ingresar" /></span>
        </div>
    </form>

  </div>