<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>STRATTON-POS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-responsive.min.css')?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/fullcalendar.css')?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/uniform.css')?>" /><!-- tables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/select2.css')?>" /><!-- tables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/maruti-style.css')?>" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/maruti-media.css')?>" class="skin-color" />
  <link rel="stylesheet" href="<?php echo base_url('assets/css/stratton-style.css')?>" />
</head>
<body onload="document.form.<?php echo $focus?>.focus()">

  <!-- HEADER BEGIN -->
  <?php $this->load->view($_SESSION['header'])?>

  <div id="search">
    <input type="text" placeholder="Search here..."/>
    <button type="submit" class="tip-left" title="Search"><i class="icon-search icon-white"></i></button>
  </div>
  <!-- HEADER END -->


  <!-- NAV MENU BEGIN -->
  <?php $this->load->view($_SESSION['menu'])?>
  <!-- NAV MENU END -->

  
  <!-- CONTENT BEGIN -->
  <?php $this->load->view($vista)?>
  <!-- CONTENT END -->


  <!-- FOOTER BEGIN -->
  <?php $this->load->view($_SESSION['footer'] )?>
  <!-- FOOTER END -->

  <script src="<?php echo base_url('assets/js/excanvas.min.js')?>"></script> 
  <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script> 
  <script src="<?php echo base_url('assets/js/jquery.ui.custom.js')?>"></script> 
  <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script> 
  <script src="<?php echo base_url('assets/js/jquery.flot.min.js')?>"></script> 
  <script src="<?php echo base_url('assets/js/jquery.flot.resize.min.js')?>"></script> 
  <script src="<?php echo base_url('assets/js/jquery.peity.min.js')?>"></script> 
  <script src="<?php echo base_url('assets/js/fullcalendar.min.js')?>"></script> 
  <script src="<?php echo base_url('assets/js/jquery.uniform.js')?>"></script> <!-- tables -->
  <script src="<?php echo base_url('assets/js/select2.min.js')?>"></script> <!-- tables -->
  <script src="<?php echo base_url('assets/js/jquery.dataTables.min.js')?>"></script> <!-- tables -->
  <script src="<?php echo base_url('assets/js/maruti.js')?>"></script>
  <script src="<?php echo base_url('assets/js/maruti.tables.js')?>"></script><!-- tables -->
  <script src="<?php echo base_url('assets/js/maruti.dashboard.js')?>"></script> 
  <script src="<?php echo base_url('assets/js/maruti.chat.js')?>"></script>
  <script src="<?php echo base_url('assets/js/stratton.adds.js')?>"></script><!-- funciones adicionales -->

</body>
</html>
