	<div id="header">
    <h1><a href="<?php echo base_url()?>">STRATTON POS</a></h1>
  </div>

  <div id="logo">
  	<a href="<?php echo base_url()?>"><img src="<?php echo base_url('assets/img/logo.png')?>" class="img-responsive" /></a>
  </div>

  <div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
      <li class=" dropdown" id="menu-messages">
        <a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-user"></i> <span class="text">Datos de Perfil</span> <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li>
            <a href="#"><i class="icon icon-user"></i> <span class="text">Perfil</span></a>
          </li>
          <li>
            <a href="#"><i class="icon icon-cog"></i> <span class="text">Seguridad</span></a>
          </li>
          
        </ul>
      </li>
      <li class="">
        <a title="" href="<?php echo base_url('login/logout')?>"><i class="icon icon-share-alt"></i> <span class="text">Salir</span></a>
      </li>
    </ul>
  </div>